<?php 
use Pda\Peraturan\Models\Berita;class Cms5b8655683aacf611883608_52ace55e711962fed03d403871dd97c4Class extends \Cms\Classes\PageCode
{

public function onStart() {
		$this['all'] = Berita::orderBy('tanggal', 'desc')->get();
        $this['berita'] = Berita::where('slug', $this->param('judul'))->first();
        $this['title'] = $this->param('title');
    }
}
