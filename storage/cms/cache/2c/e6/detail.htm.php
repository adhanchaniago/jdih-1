<?php 
use Pda\Peraturan\Models\Berita;class Cms5b553c171c969083573305_f65e59bb62897eabe5dc0aae5d05ec83Class extends \Cms\Classes\PageCode
{

public function onStart() {
		$this['all'] = Berita::orderBy('tanggal', 'desc')->get();
        $this['berita'] = Berita::where('slug', $this->param('judul'))->first();
    }
}
