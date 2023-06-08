<?php

namespace App\Helpers;

use App\Models\ExaminationArea;
use App\Models\ExaminationAreaSensor;
use App\Models\ExaminationCarStudentMerge;
use App\Models\StudentPracticalExamLocation;
use App\Models\StudentPracticalExamPenaltyResult;
use App\Models\StudentPracticalExamResult;

class FinalPracticalExamHelper
{
    public static function compareSensorResults($final_access_student)
    {
        $sensors = ExaminationAreaSensor::where('examination_area_id', $final_access_student->examination_area_id)->pluck('sensor_id')->toArray();
        $results = StudentPracticalExamResult::where('final_access_student_id', $final_access_student->id)->pluck('sensor_id')->toArray();
        $diff = array_diff($sensors, $results);
        if (count($diff) == 0) {
            if ($final_access_student->practical_exam_penalty_ball > 50) {
                $final_access_student->practical_exam_result = 0;
                $final_access_student->update();
            } else {
                $final_access_student->practical_exam_result = 1;
                $final_access_student->update();
            }
        }
        return 1;
    }

    public static function endPracticalExam($final_access_student, $thisPracticalExamRecord,$merge)
    {
        $sensors = ExaminationAreaSensor::notDeleted()->where('examination_area_id', $final_access_student->examination_area_id)->where('edu_type_id', $merge->examinationCar->edu_type_id)->pluck('sensor_id')->toArray();
        $results = StudentPracticalExamResult::where('final_access_student_id', $final_access_student->id)->where('final_practical_test_record_id', $thisPracticalExamRecord->id)->pluck('sensor_id')->toArray();
        $diff = array_diff($sensors, $results);
        foreach ($diff as $item) {
            $sensorDiff = ExaminationAreaSensor::where('sensor_id', $item)->where('examination_area_id', $final_access_student->examination_area_id)->where('edu_type_id', $merge->examinationCar->edu_type_id)->first();
            $new_res = new StudentPracticalExamResult();
            $new_res->sensor_id = $item;
            $info['car_gps_id'] = $merge->examinationCar ? $merge->examinationCar->gps_id : '';
            $info['final_access_student_id'] = $merge->final_access_student_id;
            $info['sensor_id'] = $item;
            $new_res->info = json_encode($info);
            $new_res->result = 0;
            $new_res->final_access_student_id = $final_access_student->id;
            $new_res->penalty_ball = $sensorDiff->penalty_ball;
            $new_res->car_gps_id = $merge->examinationCar ? $merge->examinationCar->gps_id : '';
            $new_res->final_practical_test_record_id = $thisPracticalExamRecord ? $thisPracticalExamRecord->id : '';
            $new_res->save();
        }
        return 1;
    }

    public static function createLocationData($final_access_student, $data, $car)
    {
        $new_data = new StudentPracticalExamLocation();
        $new_data->final_access_student_id = $final_access_student->id;
        $new_data->car_gps_id = $data['data']['car_id'];
        $new_data->lat = $data['data']['lat'];
        $new_data->lat_d = $data['data']['lat_d'];
        $new_data->lon = $data['data']['lon'];
        $new_data->lon_d = $data['data']['lon_d'];
        $new_data->car_id = $car->id;
        $info['car_gps_id'] = $data['data']['car_id'];
        $info['final_access_student_id'] = $final_access_student->id;
        $info['student_fio'] = $final_access_student->student_fio;
        $new_data->info = json_encode($info);
        $new_data->save();
    }
}
