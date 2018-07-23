<?php namespace Pda\Peraturan\Components;

use Cms\Classes\ComponentBase;

class SearchForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Form',
            'description' => 'Some form'
        ];
    }

    public function onSend()
    {
        // Collect input
        $name = post('name');
        $email = post('email');
        $message = post('message');

        // Submit form
        $to = System\Models\MailSettings::get('sender_email');
        $params = compact('name','email');
        Mail::sendTo($to, 'temp.website::mail.newrequest', $params);
        return true;
    }
}