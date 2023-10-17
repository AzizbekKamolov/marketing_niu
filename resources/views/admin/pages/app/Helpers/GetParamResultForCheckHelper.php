<?php

namespace App\Helpers;
use App\Models\Answer;
use App\Models\CarParamResult;
use App\Models\FinalTestStudentAttempt;
use App\Models\Question;

class GetParamResultForCheckHelper
{
    public static function getParamResult($examinationCarId,$examinationAreaId,$column , $value,$lastResultSensorId,$finalAccessStudentId): int
    {
        $res = CarParamResult::where('examination_car_id' , $examinationCarId)
            ->where('examination_area_id' , $examinationAreaId)
            ->where($column , '=',$value)
            ->where('last_result_sensor_id' , $lastResultSensorId)
            ->where('final_access_student_id' , $finalAccessStudentId)
            ->first();
        if ($res){
            return $res->$column;
        }
        else{
            return 0;
        }
    }

}
