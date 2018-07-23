<?php
use Pda\Peraturan\Models\Peraturan;
Route::get('/apiPeraturan', function () {
	// $peraturan = Peraturan::all();
	$peraturan = Db::table('pda_peraturan_hukum')
			     ->join('pda_peraturan_jenis', 'pda_peraturan_hukum.jenis_id', '=', 'pda_peraturan_jenis.id')
			     ->select('pda_peraturan_hukum.tentang', 'pda_peraturan_hukum.tahun', 'pda_peraturan_hukum.nomor', 'pda_peraturan_hukum.filename', 'pda_peraturan_jenis.nama as jenis_nama')
			     ->get();
	$data = $peraturan->toArray();
	// $jsonPeraturan = $data->toJson();
	$arr['data'] = $data;
    return response()->json($arr);
});