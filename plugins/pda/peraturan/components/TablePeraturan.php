<?php namespace Pda\Peraturan\Components;

use Cms\Classes\ComponentBase;
use Pda\Peraturan\Models\Peraturan;
use DB;

class TablePeraturan extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Table Peraturan',
            'description' => 'List of all Peraturan'
        ];
    }

    public function onRun()
    {
        $this->peraturan = $this->loadPeraturan();       
    }

    public function loadPeraturan()
    {
        // $data = Peraturan::all();
        // $phpArray = $peraturan->toArray();
        $aturan = Db::table('pda_peraturan_hukum')
                     ->join('pda_peraturan_jenis', 'pda_peraturan_hukum.jenis_id', '=', 'pda_peraturan_jenis.id')
                     ->select('pda_peraturan_hukum.*', 'pda_peraturan_jenis.nama as jenis_nama')
                     ->get();
        $data = $aturan->toArray();
        $arr['data'] = $data;
        // $jsonPeraturan = $data->toJson();

        return response()->json($arr);
    }

    public $peraturan;
}