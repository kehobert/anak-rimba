<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 29/12/2017
 * Time: 20.58
 */

namespace App;
use Illuminate\Support\Facades\Mail;

class MailHandler
{

    public function send_mail_registration($mail_data){
        $blade_tmp = "mails.register_mail";

        $this->send($blade_tmp, $mail_data);
    }

    public function send_mail_contact_form($mail_data){
        $blade_tmp = "mails.contact_form_mail";

        $this->send($blade_tmp, $mail_data);
    }

    public function send($mail_blade_template, $mail_data){
        //$mail_blade_template  (e.g = mails.contact_form_mail)
        //$mail_data            (all mail information)

        /* Mail Data Main Obligatory Information
        'email_from'                -> this email is from SMTP global config
        'email_destination'         -> set destination email
        'email_name_from'           -> this name is from SMTP global config
        'email_name_destination'    -> set destination name
        'email_subject'             -> set subject
        */

        //First param -> which mail template you use
        //Second Param -> select which data that is going to be used in mail function
        //Third param -> run function and pass the data
        Mail::send($mail_blade_template, $mail_data, function($message) use ($mail_data){
            $message
                ->to($mail_data['email_destination'], $mail_data['email_name_destination'])
                ->from($mail_data['email_from'], $mail_data['email_name_from'])
                ->subject($mail_data['email_subject']);
        });
    }
}