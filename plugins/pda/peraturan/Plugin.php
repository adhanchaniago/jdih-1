<?php namespace Pda\Peraturan;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
            'Pda\Peraturan\Components\AskForm' => 'AskForm',
	        'Pda\Peraturan\Components\SearchForm' => 'searchForm',
	        'Pda\Peraturan\Components\SearchResults' => 'searchResults',
            'Pda\Peraturan\Components\TablePeraturan' => 'tablePeraturan'
	    ];
    }

    public function registerSettings()
    {
    }
}
