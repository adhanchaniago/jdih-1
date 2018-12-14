<?php namespace Pda\LayananAdvokasi\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Status extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];

    public $requiredPermissions = [
        'pda.layananadvokasi.kelola_status' 
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Pda.LayananAdvokasi', 'main-menu-item', 'side-menu-item');
    }
}
