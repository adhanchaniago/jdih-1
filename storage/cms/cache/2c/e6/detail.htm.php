<?php 
use Pda\Peraturan\Models\Berita;use Indikator\News\Models\Posts;class Cms5b88fb3645e4e574143739_047ddd85d490e315c80d6965c2861e0dClass extends \Cms\Classes\PageCode
{


public function onStart() {
		$this['all'] = Posts::orderBy('published_at', 'desc')->get();
        $this['post'] = Posts::where('slug', $this->param('slug'))->first();
    }
}
