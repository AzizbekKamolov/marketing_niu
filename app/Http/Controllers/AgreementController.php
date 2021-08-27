<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App;
use Test\Model\Student;
use Test\Model\Lyceum;
use PDF;
use Test\Model\StudentPayment;


class AgreementController extends Controller
{
    public function get_data(Request $request)
    {
        $payment_student = StudentPayment::with('type')->where('id_code', substr($request->id_code, 6))->first();
        if ($payment_student) {
            if ($payment_student->passport_seria == $request->passport_seria) {
                if ($payment_student->passport_number == $request->passport_number) {
                    if (date('Y-m-d', strtotime($payment_student->birthday)) == date('Y-m-d', strtotime($request->birthday))) {
                        return $payment_student;
                    } else {
                        return "tugilgan kun  xato";
                    }
                } else {
                    return "pasprot nomer xato";
                }
            } else {
                return "pasprot seria xato";
            }
        }
        return $request;
    }

    public function form()
    {
        return view('student.agreement.form');
    }
}
