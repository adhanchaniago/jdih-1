<?php 
use Pda\Peraturan\Models\Peraturan;use Pda\Peraturan\Models\Jenis;use Pda\Peraturan\Models\Berita;class Cms5b553e9e3526f588731243_2195959358738d126c2ca372e435074cClass extends \Cms\Classes\PageCode
{
	
    
    
public function onStart() {
		$peraturan     = Db::table('pda_peraturan_hukum')
    				     ->join('pda_peraturan_jenis', 'pda_peraturan_hukum.jenis_id', '=', 'pda_peraturan_jenis.id')
    				     ->select('pda_peraturan_hukum.*', 'pda_peraturan_jenis.nama as jenis_nama')
                         ->orderBy('jenis_id', 'asc')
    				     ->get();

        $this['jenis'] = Jenis::all();

        $this['berita'] = Berita::orderBy('tanggal', 'desc')->get();

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
