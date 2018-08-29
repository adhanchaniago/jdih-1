<?php 
use Pda\Peraturan\Models\Peraturan;class Cms5b861f38d835c387294456_1c20b3e5073030e3621f4cd1ea5c03aaClass extends Cms\Classes\PartialCode
{
    
public function onStart() {
        $this['peraturan']     = Db::table('pda_peraturan_hukum')
                                 ->join('pda_peraturan_jenis', 'pda_peraturan_hukum.jenis_id', '=', 'pda_peraturan_jenis.id')
                                 ->select('pda_peraturan_hukum.*', 'pda_peraturan_jenis.nama as jenis_nama')
                                 ->orderBy('tahun', 'desc')
                                 ->get();
    }
}
