<?php

namespace App\Helpers;

use App\Models\FinalAccessStudent;

class UnikalNumberHelper
{
    public static function generateUnikalNumberHelper($examinationAreaId)
    {
        $unikal_number = 'A001';
        $lastStudent = FinalAccessStudent::where('examination_area_id', $examinationAreaId)->orderBy('id', 'DESC')->whereDate('created_at', date('Y-m-d'))->first();
        if ($lastStudent) {
            if ($lastStudent->unikal_number) {
                if ($lastStudent->unikal_number != 'A999') {
                    $num = substr($lastStudent->unikal_number , -3);
                    $nextNum = $num+1;
                    switch (strlen($nextNum)){
                        case 1:
                            $nextNum = '00'.$nextNum;
                            break;
                        case 2:
                            $nextNum = '0'.$nextNum;
                            break;
                        default:
                            break;
                    }
                    $unikal_number = 'A'.$nextNum;
                }
            }

        }
        return $unikal_number;
    }

}
