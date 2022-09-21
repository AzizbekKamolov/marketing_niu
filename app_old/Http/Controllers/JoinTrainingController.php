<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App;
use Test\Model\AgreementSideType;
use Test\Model\AgreementType;
use Test\Model\AmountConvertToWord;
use Test\Model\GettingAgreement;
use Test\Model\JoinTrainingAgreementGetting;
use Test\Model\JoinTrainingStudent;
use Test\Model\OtherAgreementType;
use Test\Model\Student;
use Test\Model\Lyceum;
use Test\Model\Discount;
use PDF;
use Test\Model\StudentOtherAgreementAccess;
use Test\Model\StudentPayment;
use Test\Model\StudentTypeAgreementSideType;
use Test\Model\StudentTypeAgreementType;
use Test\Model\Type;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class JoinTrainingController extends Controller
{
    public function get_data(Request $request)
    {
        $student = JoinTrainingStudent::where('passport_seria', $request->passport_seria)->where('passport_number', $request->passport_number)->where('passport_jshir', $request->passport_jshir)->first();
        if ($student) {
            return view('student.agreement.join_training.data_info', [
                'data' => $student,
            ]);
        } else {
            return redirect()->back()->with('error', "Malumot topilmadi");
        }
        return $student;
    }

    public function form()
    {
        return view('student.agreement.join_training.form');
    }

    public function show_agreement(Request $request)
    {
        $student = JoinTrainingStudent::find($request->student_id);
        $getting_date = date('Y-m-d');
        if (JoinTrainingAgreementGetting::where('student_id', $student->id)->exists()) {
            $get = JoinTrainingAgreementGetting::where('student_id', $student->id)->orderBy('id', 'DESC')->first();
            $getting_date = $get->getting_date;
        }
        return view('student.agreement.join_training.agreements.agreement_' . $student->join_training_university_id, [
            'student' => $student,
            'getting_date' => $getting_date
        ]);
    }

    public function pdf_agreement(Request $request)
    {
        $student = JoinTrainingStudent::find($request->student_id);
        $getting = new JoinTrainingAgreementGetting();
        $getting->student_id = $student->id;
        $getting->getting_date = $request->getting_date;
        $getting->save();
//        return $getting;
//        return view('student.agreement.join_training.agreements.agreement_pdf_'.$student->join_training_university_id , [
//            'student' => $student,
//            'getting_date' => $request->getting_date
//        ]);
        return PDF::loadView('student.agreement.join_training.agreements.agreement_pdf_' . $student->join_training_university_id, [
            'student' => $student,
            'getting_date' => $request->getting_date
        ])->download($student->fio() . '.pdf');
    }


}