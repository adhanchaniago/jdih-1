<?php 
use Pda\Peraturan\Models\Peraturan;class Cms5b850610c2a62092912795_dc4d89069a1264d11a20c79d3de86f8cClass extends Cms\Classes\PartialCode
{
    
public function onStart() {
        $this['peraturan']     = Db::table('pda_peraturan_hukum')
                                 ->join('pda_peraturan_jenis', 'pda_peraturan_hukum.jenis_id', '=', 'pda_peraturan_jenis.id')
                                 ->select('pda_peraturan_hukum.*', 'pda_peraturan_jenis.nama as jenis_nama')
                                 ->orderBy('tahun', 'desc')
                                 ->get();
    }
}
