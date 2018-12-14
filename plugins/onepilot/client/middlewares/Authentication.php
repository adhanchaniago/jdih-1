<?php

namespace OnePilot\Client\Middlewares;

use Closure;
use OnePilot\Client\Exceptions\CmsPilotException;
use OnePilot\Client\Models\Settings;
use Exception;
use Request;

class Authentication
{
    /**
     * @var string
     */
    private $private_key;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $stamp;

    /**
     * @param         $request
     * @param Closure $next
     *
     * @return mixed
     * @throws Exception
     */
    public function handle($request, Closure $next)
    {
        $this->hash = Request::header('hash');
        $this->stamp = Request::header('stamp');
        $this->private_key = Settings::get('private_key');

        $this->check();

        return $next($request);
    }

    /**
     * Check verify_key, hash_mac and timestamp
     *
     * @return bool
     * @throws Exception
     */
    private function check()
    {
        if (!$this->hash) {
            throw new CmsPilotException('no-verification-key', 403);
        }

        if (!$this->private_key) {
            throw new CmsPilotException('no-private-key-configured', 403);
        }

        $hash = hash_hmac('sha256', $this->stamp, $this->private_key);

        if (!hash_equals($hash, $this->hash)) {
            throw new CmsPilotException('bad-authentification', 403);
        }

        $this->validateTimestamp();

        return true;
    }

    /**
     * Validate timestamp. The meaning of this check is to enhance security by
     * making sure any token can only be used in a short period of time.
     *
     * @return void
     *
     * @throws CmsPilotException
     */
    private function validateTimestamp()
    {
        if (Settings::get('skip_timestamp_validation', false)) {
            return;
        }

        if (($this->stamp > time() - 360) && ($this->stamp < time() + 360)) {
            return;
        }

        throw new CmsPilotException('bad-timestamp', 403);
    }
}
