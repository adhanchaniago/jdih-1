<?php 
use Pda\Peraturan\Models\Berita;class Cms5b864fe990e7d093143346_976afea5536aee58955a33d1b7299c39Class extends \Cms\Classes\PageCode
{

public function onStart() {
        $this['all'] = Berita::orderBy('tanggal', 'desc')->paginate(5);
    }
}
