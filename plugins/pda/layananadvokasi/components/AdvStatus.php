<?php namespace Pda\LayananAdvokasi\Components;

use Cms\Classes\ComponentBase;
use Pda\LayananAdvokasi\Models\Question as NewQuestion;
use System\Models\MailSetting as MailSettings;
use October\Rain\Auth\Manager;
use Flash;
use Event;
use Request;
use Validator;
use Html;
use Mail;
use Input;
use Redirect;
use Auth;

class AdvStatus extends ComponentBase
{
    public $advokasi = null;
    public $user;

    public function componentDetails()
    {
        return [
            'name'        => 'FAQ Ask a Question',
            'description' => 'Displays "Ask a question" form'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->advokasi = $this->page['advstatus'] = $this->listAdvokasi(); 
    }

    public function listAdvokasi()
    {
        $user = Auth::getUser();
        $advokasi = NewQuestion::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        return $advokasi;
    }


}

    
