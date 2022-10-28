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
use Test\Model\JoinTrainingUniversity;
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
        $student = JoinTrainingStudent::where(function ($query) use ($request) {
            if ($request->passport_seria) {
                $query->where('passport_seria', $request->passport_seria);
            }
        })->where(function ($query) use ($request) {
            if ($request->passport_number) {
                $query->where('passport_number', $request->passport_number);
            }
        })->where(function ($query) use ($request) {
            if ($request->passport_jshir) {
                $query->where('passport_jshir', $request->passport_jshir);
            }
        })->where(function ($query) use ($request) {
            if ($request->id_code) {
                $query->where('id_code', $request->id_code);
            }
        })->first();
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

    public function form_tdyu()
    {
        return view('student.agreement.join_training.form_tdyu');
    }

    public function show_agreement(Request $request)
    {
        $student = JoinTrainingStudent::find($request->student_id);
        $getting_date = date('Y-m-d');
        if (JoinTrainingAgreementGetting::where('student_id', $student->id)->exists()) {
            $get = JoinTrainingAgreementGetting::where('student_id', $student->id)->orderBy('id', 'DESC')->first();
            $getting_date = $get->getting_date;
        }
        return view('student.agreement.join_training.agreements.agreement_pdf_' . $student->join_training_university_id, [
            'student' => $student,
            'getting_date' => $getting_date,
            'type_show' => 'show'
        ]);
    }

    public function pdf_agreement(Request $request)
    {
        $student = JoinTrainingStudent::find($request->student_id);
        $getting = new JoinTrainingAgreementGetting();
        $getting->student_id = $student->id;
        $getting->getting_date = $request->getting_date;
        $getting->save();
        $university = JoinTrainingUniversity::find($student->join_training_university_id);
//        return $getting;
//        return view('student.agreement.join_training.agreements.agreement_pdf_'.$student->join_training_university_id , [
//            'student' => $student,
//            'getting_date' => $request->getting_date
//        ]);
//        return
        $qr_string = "Toshkent davlat yuridik universiteti. Qo`shma ta`lim. ".$university->course."-kurs " . $student->first_name . ' ' . $student->last_name. ' ' . $student->middle_name;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
        return PDF::loadView('student.agreement.join_training.agreements.agreement_pdf_' . $student->join_training_university_id, [
            'student' => $student,
            'getting_date' => $request->getting_date,
            'type_show' => 'pdf',
            'qrcode' => $qrcode
        ])->download($student->fio() . '.pdf');
    }


}
