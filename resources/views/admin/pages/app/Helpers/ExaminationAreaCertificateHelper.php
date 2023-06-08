<?php

namespace App\Helpers;

use App\Models\ExaminationAreaCertificate;

class ExaminationAreaCertificateHelper {
    public static function store($final_access_student,$number)
    {
        $certificate = new ExaminationAreaCertificate();
        $certificate->created_by = auth()->user()->id;
        $certificate->student_fio = $final_access_student->student_fio;
        $certificate->student_passport = $final_access_student->student_passport;
        $certificate->student_phone = $final_access_student->student_phone;
        $certificate->final_access_student_id = $final_access_student->id;
        $certificate->organization_id = $final_access_student->organization_id;
        $certificate->examination_area_id = $final_access_student->examination_area_id;
        $certificate->number = $number;
        $certificate->save();
        $date = date('Y-m-d');
        $key = $date.'_'.$certificate->id;
        $certificate->key=$key;
        $certificate->update();
        return $certificate;
    }
}
