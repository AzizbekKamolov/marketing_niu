<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Test\Model\GettingAgreement;
use Test\Model\StudentTypeAgreementType;
use Test\Model\Super;
use Illuminate\Support\Facades\Hash;
use Test\Model\Student;
use Test\Model\Result;
use Test\Model\Lyceum;
use Test\Model\Magister;
use Test\Model\StudentPayment;
use Test\Model\Payment;
use Test\Model\Price;
use Test\Model\Discount;
use App;
use Test\User;

//use Test\Rules\Captcha;


class PaymentCheckController extends Controller
{
    public function index()
    {
        return view('student.payment_check.form');
    }


    public function check(Request $request)
    {
//        return $request;
        $input = $request->all();
        $input['id_code'] = substr($request->id_code, 6);
        $request->merge([
            'id_code' => $input['id_code']
        ]);
        if (StudentPayment::where('id_code', $request->id_code)->exists()) {
            $student = StudentPayment::where('id_code', $request->id_code)->first();
            $getting = GettingAgreement::where('student_id' , $student->id)->orderBy('id' , 'DESC')->first();
            if ($getting){
                $st_typ_agr_typ = StudentTypeAgreementType::where('type_id' , $student->status_new)->where('agreement_type_id' , $getting->agreement_type_id)->first();
            }
            else{
                $st_typ_agr_typ = StudentTypeAgreementType::where('type_id' , $student->status_new)->where('price' , '!=' , null)->first();
            }
            $payments = Payment::where('id_code', $request->id_code)->get();
            $prices = Price::where('type_id', $student->status_new)->where('edu_years', '2020-2021')->get();
            $all_price = Price::where('type_id', $student->status_new)->where('edu_years', '2020-2021')->get();
            $discount = Discount::where('student_id' , $student->id)->orWhere('id_code' , $student->id_code)->sum('percent');
            if ($discount){
                $cc = 100-$discount;
                $st_typ_agr_typ->price = $st_typ_agr_typ->price*$cc/100;
            }
            $last_payment = Payment::where('id_code', $request->id_code)->where('need_payment' , '!=' , null)->orderBy('id' , 'DESC')->first();
//            return $prices;
//            if($request->id_code == '6008622'){
//                return $student;
//            }
            return view('student.payment_check.result', [
                'student' => $student,
                'payments' => $payments,
                'prices' => $prices,
                'all_price' => $all_price,
                'student_type_agreement_type' => $st_typ_agr_typ,
                'last_payment' => $last_payment
            ]);
        } else {
            return redirect()->back()->with('error', 'Talabalar ro`yhatidan topilmadingiz marketing bo`limi bilan bog`laning');
        }
    }
}
