<?php

namespace App\Helpers;

use App\Models\ExaminationAreaPaymentType;
use App\Models\ExaminationAreaStudentPayment;
use App\Models\ExaminationAreaStudentPaymentCancelled;
use App\Models\PayType;
use App\Traits\FinalExamQueueTrait;

class ConfirmPaymentFinalExam
{
    public static function confirm($examination_area_payment_type_id, $pay_type_id, $final_access_student, $examination_area_id, $type, $groupPaymentId = 0)
    {
        $examination_payment_type = ExaminationAreaPaymentType::find($examination_area_payment_type_id);
        $pay_type = PayType::find($pay_type_id);
        $new_p = new ExaminationAreaStudentPayment();
        $new_p->student_id = $final_access_student->student_id;
        $new_p->group_id = $final_access_student->group_id;
        $info['student_fio'] = $final_access_student->student_fio;
        $info['student_passport'] = $final_access_student->student_passport;
        $info['student_passport'] = $final_access_student->student_passport;
        $info['payment_type'] = $pay_type ? $pay_type->name : '';
        $info['examination_area_payment_type'] = $examination_payment_type ? $examination_payment_type->name : '';
        $new_p->info = json_encode($info);
        $new_p->payment_from = $type;
        $new_p->amount = $examination_payment_type ? $examination_payment_type->amount : '';
        $new_p->exam_type = $examination_payment_type ? $examination_payment_type->exam_type : '';
        $new_p->payment_type_id = $pay_type_id;
        $new_p->examination_area_payment_type_id = $examination_area_payment_type_id;
        $new_p->final_access_student_id = $final_access_student->id;
        $new_p->organization_id = $final_access_student->organization_id;
        $new_p->final_access_group_id = $final_access_student->access_group_id;
        $new_p->student_passport = $final_access_student->student_passport;
        $new_p->student_fio = $final_access_student->student_fio;
        $new_p->edu_type_id = $final_access_student->edu_type_id;
        $new_p->type = $final_access_student->type;
        $new_p->created_by = auth()->user()->id;
        $new_p->examination_area_id = $examination_area_id ? $examination_area_id : null;
        if ($type == 'byGroup'){
            $new_p->group_payment_id = $groupPaymentId;
        }
        $new_p->save();
        if ($examination_payment_type->exam_type == 'practical') {
            $final_access_student->practical_payment_status = 1;
        } else {
            $final_access_student->payment_status = 1;
        }
        $final_access_student->update();
        return $new_p;
    }

    public static function confirmByGroup($examinationAreaId,$groupId,$allAmount,$paymentTypeID,$examType,$examinationAreaPaymentTypeId,$accessGroupId,$groupName)
    {

    }

    public static function cancel_payment($final_access_student, $payment_id)
    {
        $payment = ExaminationAreaStudentPayment::find($payment_id);
        if ($payment) {
            $p_arr = ExaminationAreaStudentPayment::find($payment_id)->toArray();
            ExaminationAreaStudentPaymentCancelled::create($p_arr);
            if ($payment->exam_type = 'theoretical') {
                $final_access_student->payment_status = 0;
            } else {
                $final_access_student->practical_payment_status = 0;
            }
            $final_access_student->update();
            $payment->delete();
            return 1;
        } else {
            return 0;
        }

    }
}
