<?php

namespace App\Helpers;


use App\Models\StudentPracticalExamListOfPenalties;

class StudentListOfPenaltiesHelper
{
    public static function storeListOfPenalties($dataArray, $finalAccessStudent, $record)
    {
        foreach ($dataArray as $item) {
            StudentPracticalExamListOfPenalties::create([
                'name' => $item['name'],
                'penalty_ball' => $item['penalty_ball'],
                'examination_area_id' => $finalAccessStudent->examination_area_id,
                'final_access_student_id' => $finalAccessStudent->id,
                'final_practical_test_record_id' => $record->id
            ]);
        }
        return  true;
    }
}
