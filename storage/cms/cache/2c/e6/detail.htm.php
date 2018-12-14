<?php 
use Pda\Peraturan\Models\Berita;use Indikator\News\Models\Posts;class Cms5c0dc374814b6155155625_68022348b6142a8b96c0314379950b58Class extends Cms\Classes\PageCode
{


public function onStart() {
		$this['all'] = Posts::where('status', 1)->orderBy('published_at', 'desc')->get();
        $this['post'] = Posts::where('slug', $this->param('slug'))->first();
    }
}
