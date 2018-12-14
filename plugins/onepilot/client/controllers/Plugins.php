<?php

namespace OnePilot\Client\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use OnePilot\Client\Classes\Response;
use OnePilot\Client\Exceptions\CmsPilotException;
use System\Classes\UpdateManager;
use System\Models\PluginVersion;

class Plugins extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws CmsPilotException
     */
    public function update()
    {
        if (empty($pluginCode = Input::get('slug'))) {
            throw new CmsPilotException('Plugin slug parameter is missing', 400);
        }

        $manager = UpdateManager::instance()->resetNotes();
        $pluginDetails = $manager->requestPluginDetails($pluginCode);

        $code = array_get($pluginDetails, 'code');
        $hash = array_get($pluginDetails, 'hash');

        try {
            $manager->downloadPlugin($code, $hash);
            $manager->extractPlugin($code, $hash);
            $manager->update();
        } catch (\Exception $e) {
            throw new CmsPilotException('Error during plugin update', 500, $e);
        }

        return Response::make([
            'code' => $code,
            'hash' => $hash,
        ]);
    }

    public function all($updates)
    {
        $extensions = [];
        $plugins = PluginVersion::all();

        foreach ($plugins as $key => $plugin) {
            $extensions[] = $this->extractData($updates, $plugin);
        }

        return $extensions;
    }

    /**
     * @param $code
     *
     * @return mixed
     * @internal param $plugin
     *
     */
    private function getPluginDetails($code)
    {
        $updateManager = UpdateManager::instance();
        $codes[] = $code;
        $update = $updateManager->requestProductDetails($codes, 'plugin');

        if (count($update)) {
            return $update[0];
        }

        return null;
    }

    /**
     * @param $updates
     * @param $plugin
     *
     * @return array
     */
    private function extractData($updates, $plugin)
    {
        $details = $this->getPluginDetails($plugin->code);

        $extension = [
            'version'     => $plugin->version,
            'new_version' => null,
            'name'        => $plugin->name,
            'code'        => $plugin->code,
            'type'        => 'plugin',
            'active'      => !$plugin->is_disabled,
            'changelog'   => null,
        ];

        if ($details && array_key_exists('product_url', $details)) {
            $extension['authorurl'] = $details['product_url'];
        }

        if (array_key_exists($plugin->code, $updates)) {
            $extension['new_version'] = $updates[$plugin->code]['version'];
        }

        if (array_key_exists($plugin->code, $updates)) {
            $extension['changelog'] = $updates[$plugin->code]['updates'];
        }

        return $extension;
    }
}
