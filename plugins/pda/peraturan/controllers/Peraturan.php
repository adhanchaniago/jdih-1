<?php namespace Pda\Peraturan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Peraturan extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Pda.Peraturan', 'main-menu-item');
    }

    // public function onStart(){
    // 	$collection = Db::table('pda_peraturan_hukum')->select('jenis', 'nomor', 'tahun', 'tentang', 'keterangan')->get();
    //     $this['phpArray'] = $collection->toArray();
    //     $this['jsonString'] = $collection->toJson();
    //     $this->vars['result'] = $this['jsonString'];
    // }
}
