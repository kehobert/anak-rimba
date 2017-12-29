<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 29/12/2017
 * Time: 19.44
 */

namespace App;
use GuzzleHttp\Client;

class GoogleCaptchaHandler
{


    public function handle($g_recaptcha_response){

        $captcha_verification_url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = "6Ld7cT4UAAAAAJPD6AD9DNW6Hvu1wy0z6nLyTxhg";

        $client = new Client();
        $response = $client->post($captcha_verification_url,[
            'form_params' => array(
                'secret' => $secret,
                'response' => $g_recaptcha_response
            )
        ]);

        $result = json_decode($response->getBody()->getContents());

        return $result;
    }



}