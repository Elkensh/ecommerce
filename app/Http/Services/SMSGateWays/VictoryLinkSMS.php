<?php

namespace App\Http\Services\SMSGateWays;

use Exception;
use GuzzleHttp\Client;

class VictoryLinkSMS
{
    public $client;

    public function __construct()
    {
        if(!$this->client)
        {
            $this->client = new Client();
        }
    }

    public function sendSms($phone ,$message ,$type = 'non_survey' ,$language = 'en', $model = 'null')
    {
        $params = [
            'UserName' => config(''),
            'Password' => config(''),
            'SMSText' => $message,
            'SMSLang' => $language == 'ar' ? 'A' : 'E',
            'SMSSender' => config(''),
            'SMSReceiver' => $phone,

        ];

        try
        {
                      // URL from company
            $smsURL = "https://smsvas.vlserv.com/KannelSending";

            $response = $this->client->post($smsURL, ['form_params' => $params]);
            $content = $response->getBody();

            $xml = (array) simplexml_load_string($content);

            if($xml[0] == '0')
            {
                return true;
            }else
            {
                info("VictoryLink error status!");
                return false;
            }

        }catch(Exception $e)
        {
            info("VictoryLink has been trying to send sms to $phone operation failed");
            return false;
        }
    }
}
