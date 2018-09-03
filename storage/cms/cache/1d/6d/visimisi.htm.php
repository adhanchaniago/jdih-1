<?php 
use Pda\Peraturan\Models\Profil;class Cms5b88faa3c9b99700275607_53aea607edb52171ce552c3d19d936c1Class extends \Cms\Classes\PageCode
{

public function onStart() {
		$this['profil'] = Profil::where('id', 1)->first();
    }
}
