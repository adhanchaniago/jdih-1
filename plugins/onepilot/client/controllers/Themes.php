<?php

namespace OnePilot\Client\Controllers;

use Cms\Classes\Theme as CmsTheme;
use Cms\Classes\ThemeManager;
use Illuminate\Routing\Controller;

class Themes extends Controller
{
    public function all($updates = [])
    {
        $themes = CmsTheme::all();
        $themeManager = ThemeManager::instance();

        return collect($themes)
            ->map(function (CmsTheme $theme) use ($themeManager, $updates) {
                $config = $theme->getConfig();
                $themeId = $theme->getId();

                return [
                    'name'          => isset($config['name']) ? $config['name'] : null,
                    'realname'      => $themeManager->findByDirName($themeId) ?: $themeId,
                    'active'        => $theme->isActiveTheme(),
                    'authorurl'     => isset($config['homepage']) ? $config['homepage'] : null,
                    'updateVersion' => isset($updates[$theme->getDirName()]) ? $updates[$theme->getDirName()]['version'] : null,
                    'version'       => null,
                    'updateServer'  => null,
                    'type'          => null,
                ];
            });
    }

    public function getDeactivatedThemes()
    {
        return collect($this->all())
            ->filter(function ($theme) {
                return !$theme['active'];
            })
            ->values();
    }
}