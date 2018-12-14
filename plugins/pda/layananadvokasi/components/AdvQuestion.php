<?php namespace Pda\LayananAdvokasi\Components;

use Cms\Classes\ComponentBase;
use Pda\LayananAdvokasi\Models\Question;
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

class AdvQuestion extends ComponentBase
{
    public $faqs;

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

    public function onSubmit()
    {
    
    $question = Input::get('question');
    $email = Input::get('email');
    $files = Input::file('files');
    $user = Auth::getUser();
    
    $validator = Validator::make(
        [
            'question' => $question,
            'email' => $email
        ],
        [
            
            'question' => 'required',
            'email' => 'email'
        ]
    );
        if ($validator->fails())
        {
            Flash::error('Please enter the question'); 
        }
        else 
        {
            $ask = new Question();
            $ask->question = $question;

            /**
            * Saving question in DB
            **/
            $ask->status = '1';
            $ask->category_id = '0';
            $ask->email = $email;
            $ask->files = $files;
            $ask->user_id = $user->id;
            $ask->save();

            /**
            * Sending email to admin
            **/
            $params = compact('question');
            Mail::send('redmarlin.faq::mail.asked',$params, function ($message) {
                $message->to(MailSettings::get('sender_email'));
                $email = post('email');
            });
            Flash::success('Your question was received correctly.');
        }
    }
}

    
