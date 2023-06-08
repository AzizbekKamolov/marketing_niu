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

        return view('site.super.index', [

            'sss' => $sss
        ]);
    }

    public function super_perevod()
    {
        $sss = "SSSSSSSSSSSSSSS";
        $comment = 'perevod';
        return view('site.super.index', ['comment' => $comment,
            'sss' => $sss
        ]);
    }

    public function checkstore(Request $request)
    {

        $result = Result::find($request->super_id);
        $user_input = $request->all();
        $validator = Validator::make($user_input, [
            'tel2' => 'required',
            'tel1' => 'required',
            'dir_id' => 'exists:dir,id'

        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        if ($result) {
            $super = Super::where('passport_serial', $result->passport_serial)
                ->where('passport_number', $result->passport_number)
                ->where('passport_jshshir', $result->passport_jshshir)
                ->where(function ($query) use ($result){
                    if ($result->comment == 'perevod'){
                        $query->where('comment', $result->comment);
                    }
                })
                ->first();
            if ($super) {
                return PDF::loadView('site.super.ariza_pdf', ['data' => $super])->download($super->last_name . $super->first_name . '.pdf');
                return redirect(route("index"))->with('error', 'Siz ariza yuborgansiz!');
            }
            $dirEduTypeArray = explode(',', $request->dir_id);
            $super = new Super();
            $super->last_name = $result->last_name;
            $super->edu_type_id = $dirEduTypeArray[1];
            $super->type = $result->type;
            $super->comment = $result->comment;
            $super->description = $result->description;
            if ($result->comment != 'perevod') {
                if ($dirEduTypeArray[1] == 2) {
                    $super->type = 3;
                    $super->comment = 'sirtqi_bakalavr';
                    $super->description = 'Sirtqi bakalavr';
                } elseif ($dirEduTypeArray[1] == 3) {
                    $super->type = 1;
                    $super->comment = 'remote_bakalavr';
                    $super->description = 'Masofaviy bakalavr';
                }
            }

            $super->dir = $dirEduTypeArray[0];
            $super->middle_name = $result->middle_name;
            $super->first_name = $result->first_name;
            $super->passport_serial = $result->passport_serial;
            $super->passport_number = $result->passport_number;
            $super->birthday = $result->birthday;
            $super->gender = $result->gender;
            $super->address = $result->address;
            $super->passport_jshshir = $result->passport_jshshir;
            $super->dtm_id = $result->dtm_id;
            $super->ball = $result->ball;
            $super->tel1 = $request->tel1;
            $super->tel2 = $request->tel2;
            $super->lang = $result->lang;
            $super->course = $result->course;
            $super->status = 1;
            $super->save();
            $super->update();
            $pdf = PDF::loadView('site.super.ariza_pdf', [
                'data' => $super,
            ]);
            return $pdf->download('ariza.pdf');

            return redirect(route("index"))->with('success', 'Arizangiz qabul qilindi!');
        } else {
            return redirect(route("index"));
        }

    }

    public function store(Request $request)
    {
        $input = $request->all();

//        return $input;
        $validator = Validator::make($input, [
            'passport_seria' => 'required',
            'passport_number' => 'required',
            'passport_jshshir' => 'required',
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
            ->where(function ($query) use ($request) {
                if ($request->comment) {
                    $query->where('comment', $request->comment);
                }
            })
            ->first();
//        return $result;
        if ($result) {
            $data = Result::find($result->id);
            return view('site.super.check', [
                'data' => $data
            ]);
        } else {
            return redirect()->back()->with('error', 'Sizning ma`lumotlaringiz topilmadi!');

        }
    }

    public function contract_cards()
    {
        return view('student.child_cards.agreement_cards');
    }
    public function contract_cards_tabaqa()
    {
        return view('student.child_cards.tabaqalashtirilgan.tabaqalashtirilgan');
    }

    public function super_cards()
    {
        return view('student.child_cards.super_cards');
    }


    // public function check($id)
    // {
    //     $data = Result::find($id);
    //     return view('site.super.check',[

    //         'data'=>$data
    //     ]);

    // }

}
