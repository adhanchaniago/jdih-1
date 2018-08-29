<?php 
use Pda\Peraturan\Models\Peraturan;use Pda\Peraturan\Models\Jenis;use Pda\Peraturan\Models\Berita;class Cms5b85072830f38083148067_aaf38eb2d8e76421e204d40ca9b80e25Class extends \Cms\Classes\PageCode
{

    
    
public function onStart() {
		$peraturan     = Db::table('pda_peraturan_hukum')
    				     ->join('pda_peraturan_jenis', 'pda_peraturan_hukum.jenis_id', '=', 'pda_peraturan_jenis.id')
    				     ->select('pda_peraturan_hukum.*', 'pda_peraturan_jenis.nama as jenis_nama')
                         ->orderBy('tahun', 'desc')
    				     ->get();

        $this['jenis'] = Jenis::all();

        $this['berita'] = Berita::orderBy('tanggal', 'desc')->get();

        // $this['latests'] = Peraturan::with('pda_peraturan_jenis', function ($q) {
        //     $q->with('logo');
        // })->get();

        $years = [];
        // $jenis_id = [];
        // $jenis_nama = [];
        $totalList = [];

        foreach ($peraturan as $aturan) {
            $years[] = $aturan->tahun;
            // $jenis_nama[] = $aturan->jenis_nama;
        }

        foreach ($this['jenis'] as $jns) {
            $totalList[] = Db::table('pda_peraturan_hukum')->where('jenis_id',$jns->id)->count();
        }

        $years = array_unique($years);
        // $jenis_id = array_unique($jenis_id);
        // $jenis_nama = array_unique($jenis_nama);
        rsort($years);
        // rsort($totalList);

        // for ($i=0; $i < count($jenis_id) ; $i++) { 
        //     $totalList[$i] = Db::table('pda_peraturan_hukum')->where('jenis_id',$jenis_id[$i])->count();
        // }

        $this['peraturan'] = $peraturan;
        $this['years'] = $years;
        // $this['jenis_id'] = $jenis_id;
        // $this['jenis_nama'] = $jenis_nama;
        $this['totalList'] = $totalList;
        // print_r($jenis_id);
    }
}
