<?php 
use Pda\Peraturan\Models\Profil;class Cms5b874f8899d62123737062_ca10a2f2021f0f7b94f9c323651241b9Class extends \Cms\Classes\PageCode
{

public function onStart() {
		$this['profil'] = Profil::where('id', 1)->first();
    }
}
