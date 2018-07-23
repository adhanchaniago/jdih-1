<?php namespace Pda\Peraturan\Components;

use Cms\Classes\ComponentBase;
use Request;

class SearchResults extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Results',
            'description' => 'Search Results'
        ];
    }

    public function onRun()
    {
        // Collect input
        $nomor = Request::get('nomor');
        $tentang = Request::get('tentang');
        $tahun = Request::get('tahun');
        $jenis = Request::get('jenis');

        // Submit form
        
       
    }
}