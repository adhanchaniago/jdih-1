<?php namespace Pda\LayananAdvokasi;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Pda\LayananAdvokasi\Components\AdvQuestion' => 'AdvQuestion',
    		'Pda\LayananAdvokasi\Components\AdvStatus' => 'AdvStatus',
    	];
    }

    public function registerSettings()
    {
    }
}
