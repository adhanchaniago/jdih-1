<?php namespace Pda\Peraturan\Components;

use Cms\Classes\ComponentBase;
use RedMarlin\Faq\Models\Question;
use System\Models\MailSetting as MailSettings;
use Flash;
use Event;
use Request;
use Validator;
use Html;
use Mail;
use Input;
use Redirect;
use DB;

class AskForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Faq Ask',
            'description' => 'List of all Faq Ask'
        ];
    }

    public function onSave()
    {
    
    $question = Input::get('question');
    $reply_email = Input::get('email');
    $files = Input::file('files');
    
    $validator = Validator::make(
        [
            'question' => $question,
            'reply_email' => $reply_email
        ],
        [
            
            'question' => 'required',
            'reply_email' => 'email'
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
            $ask->is_approved = '0';
            $ask->category_id = '0';
            $ask->reply_email = $reply_email;
            $ask->files = $files;
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
            return Redirect::back();
        }
    }
}