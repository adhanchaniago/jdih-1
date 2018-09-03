<?php 
use Indikator\News\Models\Posts;use Indikator\News\Models\Categories;class Cms5b88fa337daba541261007_a58eba812eb7955faf7a5c629f4e390aClass extends \Cms\Classes\PageCode
{
	
	
public function onStart() {
		$this['kategori'] = Categories::where('slug', $this->param('slug'))->first();
		$this['news'] = Posts::where('category_id', $this['kategori']->id)->paginate(5);
	}
}
