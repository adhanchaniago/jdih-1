<?php 
use Pda\Peraturan\Models\Berita;use Indikator\News\Models\Posts;class Cms5b88f9c9aa071727630515_a1866b31eeb082e1053668349c89e92aClass extends \Cms\Classes\PageCode
{


public function onStart() {
        $this['all'] = Posts::orderBy('published_at', 'desc')->paginate(5);
    }
}
