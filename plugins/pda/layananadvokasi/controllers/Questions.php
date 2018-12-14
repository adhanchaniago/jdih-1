<?php namespace Pda\LayananAdvokasi\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Mail;
use Flash;

class Questions extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];

    public $requiredPermissions = [
        'pda.layananadvokasi.kelola_pertanyaan' 
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Pda.LayananAdvokasi', 'main-menu-item');
    }

    public function onNotify($recordId = null)
    {
        $model = $this->formFindModelObject($recordId);
        if (filter_var($model->email, FILTER_VALIDATE_EMAIL)){
            $email = $model->email;
            $question = $model->question;
            $answer = $model->answer;
            $questionid = $recordId;
            $params = compact('question','answer','questionid');
        
            Mail::send('redmarlin.faq::mail.replied',$params, function ($message) use ($email) {
                    $message->to($email);
                });
            
            /**
            * After notification is send mail is removed.
            **/
            $model->notify = "1";
            $model->save();
            Flash::success('Notification send sucessfully to: ' .$email);
            
            if ($redirect = $this->makeRedirect('update', $model)) {
                return $redirect;
            }
        } else { Flash::error('Invalid Email for notification.'); }

    }
}
