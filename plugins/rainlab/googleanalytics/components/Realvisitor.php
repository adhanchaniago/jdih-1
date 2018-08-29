<?php namespace RainLab\GoogleAnalytics\Components;

use Cms\Classes\ComponentBase;
use RainLab\GoogleAnalytics\Models\Settings;
use RainLab\GoogleAnalytics\Classes\Analytics;
use ApplicationException;
use Exception;

class Realvisitor extends ComponentBase
{

//public $activeUserCount;

    public function componentDetails()
    {
        return [
            'name'        => 'Real Visitor',
            'description' => 'blaa'
        ];
    }
    public function onInit()
    {
       // $this->page['var'] =  $sessions;
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            
        }
    }
    public function onRun()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            
        }
    }


    protected function loadData()
    {

        $obj = Analytics::instance();
        $data = $obj->service->data_ga->get(
            $obj->viewId,
            'yesterday',
            'today',
            'ga:users'
        );

        $rows = $data->getRows();
        $sessions = $rows[0][0];

        if ($sessions) {            
                $this->page['var'] =  $sessions; } 
        else { $this->page['var'] =  0; }
    }
}