<?php 
use Pda\Peraturan\Models\Peraturan;use Pda\Peraturan\Models\Jenis;use Pda\Peraturan\Models\Berita;class Cms5c0dc34dc1992238810234_c2a03f729538c82f86aada9a0cc3683aClass extends Cms\Classes\PageCode
{

    
    
public function onStart() {
		
        $peraturan = Peraturan::where('deleted_at', NULL)->orderBy('tahun', 'desc')->get();

        $this['jenis'] = Jenis::all();

        $years = [];
        $totalList = [];

        foreach ($peraturan as $aturan) {
            $years[] = $aturan->tahun;
        }

        foreach ($this['jenis'] as $jns) {
            $totalList[] = Db::table('pda_peraturan_hukum')->where('jenis_id',$jns->id)->count();
        }

        $years = array_unique($years);
        rsort($years);


        $this['peraturan'] = $peraturan;
        $this['years'] = $years;
        $this['totalList'] = $totalList;
    }
}
