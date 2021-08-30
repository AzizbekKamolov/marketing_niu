<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App;
use Test\Model\AgreementSideType;
use Test\Model\AgreementType;
use Test\Model\OtherAgreementType;
use Test\Model\Student;
use Test\Model\Lyceum;
use PDF;
use Test\Model\StudentPayment;


class AgreementController extends Controller
{
    public function get_data(Request $request)
    {
        $payment_student = StudentPayment::with('type.agreement_types')->with('type.agreement_side_types')->with('type.other_agreement_types')->with('getting_agreements')->where('id_code', substr($request->id_code, 6))->first();
        if ($payment_student) {
            if ($payment_student->passport_seria == $request->passport_seria) {
                if ($payment_student->passport_number == $request->passport_number) {
                    if (date('Y-m-d', strtotime($payment_student->birthday)) == date('Y-m-d', strtotime($request->birthday))) {
//                        return
//                        return $payment_student;
                        return view('student.agreement.data_info', [
                            'data' => $payment_student
                        ]);
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

    public function show_agreement(Request $request)
    {
        $student = StudentPayment::find($request->student_id);
//        return $student;
        if ($student) {
//            if ($student->amount) {
                $agreement_side_type = AgreementSideType::find($request->agreement_side_type_id);
                if ($agreement_side_type) {
                    $agreement_type = AgreementType::find($request->agreement_type_id);
                    if ($agreement_type) {
//                        return $agreement_type;
                        return view('student.agreement.agreement_shows.side_type'.$agreement_side_type->id.'.agreement_show' , [
                            'student' => $student,
                            'agreement_side_type' => $agreement_side_type,
                            'agreement_type' => $agreement_type
                        ]);
                    }
                }
//            }

        }
    }

    public function show_other_agreement(Request $request){
        $student = StudentPayment::find($request->student_id);
//        return $student;
        if ($student) {
                    $agreement_type = OtherAgreementType::find($request->other_agreement_type_id);
                    if ($agreement_type) {
//                        return "Dsds";
                        return PDF::loadView('student.agreement.agreement_shows.other_agreements.show1')->download('dsd.pdf');
                        return PDF::loadView('student.agreement.agreement_shows.other_agreements.show1' , [
                            'student' => $student,
                            'agreement' => $agreement_type
                        ])->download('shartnoma.pdf');
//                        return view('student.agreement.agreement_shows.other_agreements.show'.$agreement_type->id , [
//                            'student' => $student,
//                            'agreement' => $agreement_type
//                        ]);
                    }

        }
    }
}
