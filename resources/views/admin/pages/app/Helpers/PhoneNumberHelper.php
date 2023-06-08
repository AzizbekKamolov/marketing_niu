<?php

namespace App\Helpers;

use App\Models\Answer;
use App\Models\FinalTestStudentAttempt;
use App\Models\Question;

class PhoneNumberHelper
{
    public static function clearPhoneNumber($phoneNumber)
    {
        $chars = ['+', ' ', ',', '-', '(', ')', '_'];
        foreach ($chars as $char) {
            $phoneNumber = str_replace($char, '', $phoneNumber);
        }
        switch (strlen($phoneNumber)){
            case 12:
                $phoneNumber = $phoneNumber;
                break;
            case 9:
                $phoneNumber = '998'.$phoneNumber;
                break;
            case 8:
                $phoneNumber = '9989'.$phoneNumber;
                break;
            case 7:
                $phoneNumber = null;
                break;
            default:
                $phoneNumber = null;
        }
        return $phoneNumber;

    }
}
//
//998994571669 12
//994571669 9
//4571669 7
//94571669 8
