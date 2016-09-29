<?php
namespace App\Logic\Mailers;

abstract class Mailer {

    /**
     * @param $email
     * @param $subject
     * @param $fromEmail
     * @param $view
     * @param array $data
     */
    public function sendTo($email, $subject, $fromEmail, $view, $data = [])
    {
        \Mail::queue($view, $data, function($message) use($email, $subject, $fromEmail)
        {

            $message->from($fromEmail, 'tuts@codingo.me');

            $message->to($email)
                ->subject($subject);
        });
    }
}
