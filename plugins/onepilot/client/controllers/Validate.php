<?php

namespace OnePilot\Client\Controllers;

use DB;
use Illuminate\Routing\Controller;
use OnePilot\Client\Classes\Files;
use OnePilot\Client\Classes\Response;
use System\Classes\UpdateManager;
use System\Models\Parameter;

class Validate extends Controller
{
    const CONFIGS_TO_MONITOR = [
        'app.debug',
        'app.timezone',
        'cms.activeTheme',
        'cms.backendUri',
        'cms.disableCoreUpdates',
        'cms.edgeUpdate',
        'cms.enableCsrfProtection',
        'cms.enableSafeMode',
    ];

    public function validate()
    {
        $updates = UpdateManager::instance()->requestUpdateList();

        return Response::make([
            'core'    => $this->core($updates),
            'servers' => $this->servers(),
            'plugins' => (new Plugins)->all(array_get($updates, 'plugins')),
            'themes'  => (new Themes)->all(array_get($updates, 'themes')),
            'files'   => Files::instance()->getFilesProperties(),
            'extra'   => $this->extra(),
        ]);
    }

    private function core($updates)
    {
        return [
            'version'     => (string)Parameter::get('system::core.build', 1),
            'new_version' => (string)array_get($updates, 'core.build'),
            'changelog'   => array_get($updates, 'core.updates'),
        ];
    }

    protected function servers()
    {
        $serverWeb = $_SERVER['SERVER_SOFTWARE'] ?: getenv('SERVER_SOFTWARE') ?? null;

        return [
            'php'   => phpversion(),
            'web'   => $serverWeb,
            'mysql' => $this->dbVersion(),
        ];
    }

    /**
     * @return array
     */
    private function extra()
    {
        $extra = [
            'storage_dir_writable' => is_writable(base_path('storage')),
        ];

        foreach (self::CONFIGS_TO_MONITOR as $config) {
            $extra[$config] = config($config);
        }

        return $extra;
    }

    /**
     * @return string|null
     */
    private function dbVersion()
    {
        try {
            $connection = config('database.default');
            $driver = config("database.connections.{$connection}.driver");
            switch ($driver) {
                case 'mysql':
                    return $this->mysqlVersion();
                case 'sqlite':
                    return $this->sqliteVersion();
            }
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * @return string|null
     */
    private function mysqlVersion()
    {
        $result = DB::select('SELECT VERSION() as version;');

        return $result[0]->version ?? null;
    }

    /**
     * @return string|null
     */
    private function sqliteVersion()
    {
        $result = DB::select('select "SQLite " || sqlite_version() as version');

        return $result[0]->version ?? null;
    }
}
