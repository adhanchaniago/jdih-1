<?php 
use Pda\Peraturan\Models\Peraturan;class Cms5b88faad057c9451426792_998a537ebf55c911ef6ef6ffa534b077Class extends \Cms\Classes\PageCode
{
    
public function onStart() { 
        // $this->prepareVars();
        // $this->prepareYears(); 
        // $nomor = Request::get('nomor');
        // $tentang = Request::get('tentang');
        // $tahun = Request::get('tahun');
        // $jenis = Request::get('jenis');
        $this['slug'] = $this->param('slug'); 

    }
    
    // function onSearchPeraturan() { $this->prepareVars(); }
    
    // function prepareVars() {
    //     $options = POST('Filter', []);

    //     $this['peraturan'] = Peraturan::listFrontEnd($options);
    //     $this['sortOptions'] = Peraturan::$allowedSortingOptions;
    //     $this['pages'] = $this['peraturan']->lastPage();
    //     $this['page'] = $this['peraturan']->currentPage();
    // }

    // function prepareYears() {
    //     $peraturan = Peraturan::all();
    //     $tahun = [];

    //     foreach ($peraturan as $aturan) {
    //         $tahun[] = $aturan->tahun;
    //     }

    //     $tahun = array_unique($tahun);
    //     rsort($tahun);

    //     $this['tahun'] = $tahun;
    // }


    // function onStart() {
    //     $collection = Db::table('pda_peraturan_hukum')->select('jenis', 'nomor', 'tahun', 'tentang', 'keterangan')->get();
    //     $this['phpArray'] = $collection->toArray();
    //     $this['jsonString'] = $collection->toJson();
    // }
}
