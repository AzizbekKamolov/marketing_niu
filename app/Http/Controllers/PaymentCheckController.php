<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Test\Model\Super;
use Illuminate\Support\Facades\Hash;
use Test\Model\Student;
use Test\Model\Result;
use Test\Model\Lyceum;
use Test\Model\Magister;
use Test\Model\StudentPayment;
use Test\Model\Payment;
use Test\Model\Price;
use App;
use Test\User;

//use Test\Rules\Captcha;


class PaymentCheckController extends Controller
{
    public function index(){
        return view('site.payment_check.form');
    }



    public function check(Request $request){
//        return $request;
        $input = $request->all();
        $input['id_code'] = substr($request->id_code , 6);
        $request->merge([
            'id_code' => $input['id_code']
        ]);
        if (StudentPayment::where('id_code' , $request->id_code)->exists()){
            $student = StudentPayment::where('id_code' , $request->id_code)->first();
            $payments = Payment::where('id_code' , $request->id_code)->get();
            $prices = Price::where('type_id' , $student->status_new)->where('edu_years' , '2020-2021')->get();
            $all_price = Price::where('type_id' , $student->status_new)->where('edu_years' , '2020-2021')->get();
//            return $prices;
            return view('site.payment_check.result' , [
                'student' => $student,
                'payments' => $payments,
                'prices' => $prices,
                'all_price' => $all_price
            ]);
        }
        else{
            return redirect()->back()->with('error' , 'Talabalar ro`yhatidan topilmadingiz marketing bo`limi bilan bog`laning');
        }
    }
}
