<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Test\Model\EduType;
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
//                return "<h3>Ariza topshirish muddati tugadi</h3>";

        return view('site.super.index',[

            'sss'=>$sss
        ]);
    }

    public function checkstore(Request $request){

        $result = Result::find($request->super_id);
//        return $result;
        if (count(Result::where('passport_jshshir' , $result->passport_jshshir)->get()) > 2) {
            $result = Result::where('passport_jshshir' , $result->passport_jshshir)->where('type' , 2)->first();
        }
        $user_input = $request->all();
//        $request->validate([
////            'dtm_id'=>'required',
////            'ball' =>'required',
//            'tel2' =>'required',
//            'tel1' =>'required',
//            'dir_id' =>'exists:dir,id',
//        ]);
         $validator = Validator::make($user_input, [
            'tel2' =>'required',
            'tel1' =>'required',
             'dir_id' => 'exists:dir,id'

        ]);
         if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
//         return $result;
        if ($result) {

            $super = Super::where('passport_serial', $result->passport_serial)
                ->where('passport_number', $result->passport_number)
                ->where('passport_jshshir', $result->passport_jshshir)
                ->first();
            if($super){
                return PDF::loadView('site.super.ariza_pdf' , ['data' => $super])->download($super->last_name.$super->first_name.'.pdf');
                return redirect(route("index"))->with('error', 'Siz ariza yuborgansiz!');
            }
            $eduTypes = json_decode($result->edu_types);
            $dirArray = json_decode($result->dir_array);
            $keyArray = array_search($request->dir_id , $dirArray);
            $eduType = EduType::find($eduTypes[$keyArray]);
            $super = new Super();
            $super->last_name = $result->last_name;
            $super->edu_type_id = $eduType->id;
            $super->middle_name = $result->middle_name;
            $super->first_name = $result->first_name;
            $super->type = $result->type;
                $super->comment = $result->comment;
            $super->passport_serial = $result->passport_serial;
            $super->passport_number = $result->passport_number;
            $super->birthday = $result->birthday;
//            $super->passport_given_date = $result->passport_given_date;
//            $super->passport_issued_by = $result->passport_issued_by;
            $super->gender = $result->gender;
            $super->dir = $request->dir_id;
            $super->address = $result->address;
            $super->passport_jshshir = $result->passport_jshshir;
//            $super->viloyat = $result->viloyat;
//            $super->tuman = $result->tuman;
            $super->dtm_id = $result->dtm_id;
            $super->ball = $result->ball;
            $super->tel1 = $request->tel1;
            $super->tel2 = $request->tel2;
//            $super->phone = $result->phone;
            $super->lang = $result->lang;
            $super->comment = $result->comment;
            $super->course = $result->course;
            $super->description = $result->description;
            $super->status = 1;
//            return $super;
            $super->save();
            $super->update();
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
//            'check' =>'required|',
//            'g-recaptcha-response' => 'required|captcha',
        ],
        [
            'check.required' => 'Rozilik bildirishingiz kerak!',
//            'g-recaptcha-response.required' => 'Tasdiqlang!',
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
//            if ($result->type != 2){
////                return "Ariza qoldirish muddati tugagan";
//            }
                $data = Result::find($result->id);
                return view('site.super.check',[

                    'data'=>$data
                ]);
        }

        else
        {
            return redirect()->back()->with('error', 'Sizning ma`lumotlaringiz topilmadi!');
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
