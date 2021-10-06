<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Test\Model\Lyceum;
use Test\Model\ResultLyceum;
use Test\Model\Super;
use Test\Model\Result;
use App;
use PDF;
use Test\Model\SuperLyceum;

//use Test\Rules\Captcha;


class SuperLyceumController extends Controller
{
    public function form()
    {
        return view('site.lyceum_super.form');
    }

    public function get_data(Request $request)
    {
        $student = ResultLyceum::where('id_code', $request->id_code)->first();
        if ($student) {
//            return $student;
            return view('site.lyceum_super.data', [
                'data' => $student
            ]);
        } else {
            return redirect()->back()->with('error', 'O`quvchi topilmadi');
        }
    }

    public function store_application(Request $request)
    {
        $student = ResultLyceum::find($request->super_id);
        if ($student) {
            if (SuperLyceum::where('id_code', $student->id_code)->exists()) {
                $new_super = SuperLyceum::where('id_code', $student->id_code)->first();
            } else {
                $getting_date = date('Y-m-d');
                $new_super = new SuperLyceum();
                $new_super->id_code = $student->id_code;
                $new_super->first_name = $student->first_name;
                $new_super->last_name = $student->last_name;
                $new_super->middle_name = $student->middle_name;
                $new_super->ball = $student->ball;
                $new_super->lang = $student->lang;
                $new_super->result_id = $student->id;
                $new_super->tel1 = $request->tel1;
                $new_super->tel2 = $request->tel2;
                $student->phone = $request->tel1;
                $new_super->phone = $request->tel1;
                $new_super->getting_date = $getting_date;
                $new_super->save();
                $student->update();
            }
            return PDF::loadView('site.lyceum_super.ariza', [
                'data' => $new_super,
            ])->download($new_super->last_name . ' ' . $new_super->first_name . '.pdf');
        } else {
            return redirect()->back()->with('error', 'Malumot topilmadi');
        }

        return $request;
    }
}
