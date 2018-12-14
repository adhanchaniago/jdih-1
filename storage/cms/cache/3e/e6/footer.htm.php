<?php 
use Pda\Peraturan\Models\Peraturan;class Cms5c0dc35a69f3e474945327_6b6e847ae9b32406d892fbac5465bcf7Class extends Cms\Classes\PartialCode
{

public function onStart() {
        $this['peraturan']     = Db::table('pda_peraturan_hukum')
                                 ->join('pda_peraturan_jenis', 'pda_peraturan_hukum.jenis_id', '=', 'pda_peraturan_jenis.id')
                                 ->select('pda_peraturan_hukum.*', 'pda_peraturan_jenis.nama as jenis_nama')
                                 ->orderBy('tahun', 'desc')
                                 ->get();
    }
}
