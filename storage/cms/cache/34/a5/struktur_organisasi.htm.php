<?php 
use Pda\Peraturan\Models\Profil;class Cms5b88faa7484ff765687842_0ad1a2468faa06a6ab6269e406163c0bClass extends \Cms\Classes\PageCode
{

public function onStart() {
		$this['profil'] = Profil::where('id', 1)->first();
    }
}
