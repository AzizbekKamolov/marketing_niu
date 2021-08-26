<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Test\Model\Super;
use Test\Model\Result;
use App;
use PDF;

//use Test\Rules\Captcha;


class SuperController extends Controller
{
    public function super()
    {
                $sss = "SSSSSSSSSSSSSSS";
                return "<h3>Ariza topshirish vaqti yakunlangan</h3>";

        return view('site.super.index',[

            'sss'=>$sss
        ]);
    }

    public function checkstore(Request $request){
       
        $result = Result::find($request->super_id);
        if (count(Result::where('passport_jshshir' , $result->passport_jshshir)->get()) > 2) {
            $result = Result::where('passport_jshshir' , $result->passport_jshshir)->where('type' , 2)->first();
        }
        $user_input = $request->all();
         $validator = Validator::make($user_input, [
            'dtm_id'=>'required',
            'ball' =>'required',
            'tel2' =>'required',
            'tel1' =>'required',
           
        ]);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        // return $result;
        if ($result) {

            $super = Super::where('passport_serial', $result->passport_serial)
                ->where('passport_number', $result->passport_number)
                ->where('passport_jshshir', $result->passport_jshshir)
                ->first();
            if($super){

                return redirect(route("index"))->with('danger', 'Siz ariza yuborgansiz!');
            }


            $super = new Super();

            $super->last_name = $result->last_name;
            $super->middle_name = $result->middle_name;
            $super->first_name = $result->first_name;
            $super->type = $result->type;
            $super->passport_serial = $result->passport_serial;
            $super->passport_number = $result->passport_number;
            $super->birthday = $result->birthday;
            $super->passport_given_date = $result->passport_given_date;
            $super->passport_issued_by = $result->passport_issued_by;
            $super->gender = $result->gender;
            $super->dir = $result->dir;
            $super->address = $result->address;
            $super->passport_jshshir = $result->passport_jshshir;
            $super->viloyat = $result->viloyat;
            $super->tuman = $result->tuman;
            $super->dtm_id = $request->dtm_id;
            $super->ball = $request->ball;
            $super->tel1 = $request->tel1;
            $super->tel2 = $request->tel2;
            $super->phone = $result->phone;
            $super->lang = $result->lang;

            $super->status = 1;



            $super->save();

            $pdf = PDF::loadView('site.super.ariza_pdf' , [
                'data' => $super,
            ]);
            return $pdf->download('ariza.pdf');

            return redirect(route("index"))->with('success', 'Arizangiz qabul qilindi!');
        }
        else
        {
            return redirect(route("index"));
        }

    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'passport_seria'=>'required',
            'passport_number' =>'required',
           'passport_jshshir' =>'required',
            'check' =>'required|',
            'g-recaptcha-response' => 'required|captcha',
        ],
        [
            'check.required' => 'Rozilik bildirishingiz kerak!',
            'g-recaptcha-response.required' => 'Tasdiqlang!',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $passport_seria = $input['passport_seria'];
        $passport_number = $input['passport_number'];
       $passport_jshshir = $input['passport_jshshir'];
        // $birthday = $input['birthday'];

        $result = Result::where('passport_serial', $passport_seria)
            ->where('passport_number', $passport_number)
           ->where('passport_jshshir', $passport_jshshir)
//            ->where('birthday', $birthday)
            ->first();
        if (count(Result::where('passport_serial', $passport_seria)->where('passport_number', $passport_number)->where('passport_jshshir', $passport_jshshir)->get()) > 1) {
            $result = Result::where('passport_serial', $passport_seria)
            ->where('passport_number', $passport_number)
           ->where('passport_jshshir', $passport_jshshir)
           ->where('type' , 2)
            ->first();
        }


        if ($result){

                $data = Result::find($result->id);
                return view('site.super.check',[

                    'data'=>$data
                ]);



        }

        else
        {
            return redirect()->back()->with('danger', 'Sizning ma`lumotlaringiz topilmadi!');
//            return Redirect::back()->withErrors(['msg', 'Ma\'lumot topilmadi]);
//            return redirect()->back();

        }
    }


    // public function check($id)
    // {
    //     $data = Result::find($id);
    //     return view('site.super.check',[

    //         'data'=>$data
    //     ]);

    // }

}