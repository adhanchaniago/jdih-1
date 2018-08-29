<?php 
use Pda\Peraturan\Models\Berita;class Cms5b86067e271fc078826299_daaf918c380a34078fdaa47db5f77d9fClass extends \Cms\Classes\PageCode
{

public function onStart() {
        $this['all'] = Berita::orderBy('tanggal', 'desc')->paginate(5);
    }
}
