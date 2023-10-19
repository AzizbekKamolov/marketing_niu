<?php

namespace App\Helpers;

use App\Models\Answer;
use App\Models\FinalTestStudentAttempt;
use App\Models\Question;

class SendSmsHelper
{
    public static function sendOneSmsToNumberHelper($phoneNumber, $txt)
    {
        $username = 'intalim';
        $password = '54DrbVEz83';
        $full_text_arr['messages'] = [];
        $arr = [
            'recipient' => $phoneNumber,
            'message-id' => 'abc000000001',
            'sms' => [
                'originator' => 'INTALIM_UZ',
                'content' => [
                    'text' => $txt
                ]
            ]
        ];
        array_push($full_text_arr['messages'], $arr);
        $my_data = json_encode($full_text_arr);
        $url = 'http://91.204.239.44/broker-api/send';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $my_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            return $error_msg;
        } else {
            curl_close($ch);
            return $response;
        }
    }
}
//
//998994571669 12
//994571669 9
//4571669 7
//94571669 8
