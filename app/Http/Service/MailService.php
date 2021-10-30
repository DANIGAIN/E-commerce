<?php

namespace App\Http\Service;


use Illuminate\Support\Facades\Mail;
use App\Http\Controller\userController;

class MailService
{
    protected $defaultEmail;
    protected $defaultName;

    public function __construct()
    {
        // $default = $data['adm_setting'] = allsettings();
        $this->defaultEmail = 'info@elitclub.com';
        $this->defaultName = 'Appstick';
    }

    public function send($template, $data = [], $to = '', $name = '', $subject = '')
    {
        try {
            Mail::send($template, $data, function ($message) use ($name, $to, $subject) {
                $message->to($to, $name)->subject($subject)->replyTo(
                    $this->defaultEmail, $this->defaultName
                );
                $message->from($this->defaultEmail, $this->defaultName);

            });
            return true;
        }catch (\Exception $e){
            dd($e->getMessage().' '.$e->getLine());
        }
    }

}