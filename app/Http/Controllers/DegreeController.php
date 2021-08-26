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


class DegreeController extends Controller
{
    public function form(){
        // return "bla bla";
        return view('site.degree.shartnoma_form');
    }
    public function lyceum_form(){
        // return "bla bla";
        return view('site.degree.shartnoma_lyceum_form');
    }

    public function info(Request $request)
    {
        $input = $request->all();
        // return $request;


        $validator = Validator::make($input, [
            'passport_seria' => ['required'],
            'passport_number' => ['required'],
            'birthday' => ['required'],
            'id_code' => ['required'],
            'step' => ['required'],
            'g-recaptcha-response' => 'required|captcha',
        ],
            [

                'g-recaptcha-response.required' => 'Tasdiqlang!',
            ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Student::where('id_code' , $request->id_code)->exists()) {
            $student = Student::where('id_code' , $request->id_code)->first();
            // return $student;
            if ($student->passport_seria == $request->passport_seria ) {
                if ($student->passport_number == $request->passport_number) {
                    if ( $student->birthday == $request->birthday) {
                        if ($student->active == null || $student->active == 1) {
                            if ($student->status != 2) {
                                if ($student->status == 3) {
                                    return "super";
                                }
                                if ($student->status == 0) {
                                    $step = $request->step;
                                    $student->status = 1;
                                    $student->step = $request->step;
                                    $student->save();
                                    return view('site.degree.shartnoma_info1' , [
                                        'data' => $student,
                                    ]);
                                    // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.degree.shartnoma_pdf' , [
                                    //           'data' => $student,
                                    //       ])->download('degree.pdf');
                                }
                                if ($student->status == 1) {
                                    if ($student->step == 1) {
                                        return view('site.degree.shartnoma_info1' , [
                                            'data' => $student,
                                        ]);
                                        // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.degree.shartnoma_pdf' , [
                                        //         'data' => $student,
                                        //     ])->download('degree.pdf');
                                    }
                                    if ($student->step == 2) {

                                        return view('site.degree.shartnoma_info1' , [
                                            'data' => $student,
                                        ]);
                                        // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.degree.shartnoma_pdf' , [
                                        //         'data' => $student,
                                        //     ])->download('degree.pdf');
                                    }
                                }
                            }
                        }

                    }
                    else{
                        return redirect()->back()->with('info_error' , 'Ma`lumot notog`ri kiritildi!')->withInput();
                    }
                }
                else{
                    return redirect()->back()->with('info_error' , 'Ma`lumot notog`ri kiritildi!')->withInput();
                }

            }
            else{
                return redirect()->back()->with('info_error' , 'Ma`lumot notog`ri kiritildi!')->withInput();
            }
        }
        else{
            return redirect()->back()->with('info_error' , 'Ma`lumot topilmadi!')->withInput();
        }


        // dd($input);
        // return $input;
    }

    public function lyceum_info(Request $request)
    {
        $input = $request->all();
        // return $request;


        $validator = Validator::make($input, [
            'parent_pass_seria' => ['required'],
            'parent_pass_number' => ['required'],
            'birthday' => ['required'],
            'id_code' => ['required'],
            // 'g-recaptcha-response' => 'required|captcha',
        ],
            [

                'g-recaptcha-response.required' => 'Tasdiqlang!',
            ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Lyceum::where('id_code' , $request->id_code)->exists()) {
            $ly = Lyceum::where('id_code' , $request->id_code)->first();
            if ($ly->parent_pass_number == $request->parent_pass_number) {
                if ($ly->parent_pass_seria == $request->parent_pass_seria) {
                    if ($ly->birthday == $request->birthday) {
                        return view('site.degree.shartnoma_lyceum_info' , [
                            'data' => $ly,
                        ]);
                    }
                    else{
                        return redirect()->back()->with('info_error' , 'Ma`lumot noto`g`ri kiritildi!')->withInput();
                    }
                }
                else{
                    return redirect()->back()->with('info_error' , 'Ma`lumot noto`g`ri kiritildi!')->withInput();
                }
            }
            else{
                return redirect()->back()->with('info_error' , 'Ma`lumot noto`g`ri kiritildi!')->withInput();
            }
        }
        else{
            return redirect()->back()->with('info_error' , 'Ma`lumot topilmadi!')->withInput();
        }


        // dd($input);
        // return $input;
    }

    public function lyceum_get(Request $request){
        // return $request;
        $ly = Lyceum::where('id_code' , $request->id_code)->first();
        if ($ly) {
            // return view('site.degree.shartnoma_lyceum_pdf' , ['data' => $ly]);
            $ly->getting_date = date('Y-m-d');
            $ly->update();
            return PDF::loadView('site.degree.shartnoma_lyceum_pdf' , ['data' => $ly])->download($ly->fio().'.pdf');
        }
    }

    public function get(Request $request)
    {

        $input = $request->all();
        // return $request;


        $validator = Validator::make($input, [
            'data_id' => ['required'],

        ]);

        $rrr = Student::find($request->data_id);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Student::where('id_code' , $rrr->id_code)->exists()) {
            $student = Student::where('id_code' , $rrr->id_code)->first();
            // return $student;
            if ($student->passport_seria == $rrr->passport_seria ) {
                if ($student->passport_number == $rrr->passport_number) {
                    if ( $student->birthday == $rrr->birthday) {
                        if ($student->active == null || $student->active == 1) {
                            if ($student->status != 2) {
                                if ($student->status == 3) {
                                    return "super";
                                }
                                if ($student->status == 0) {
                                    $step = $rrr->step;
                                    $student->status = 1;
                                    $student->step = $rrr->step;
                                    $student->getting_date = date('Y-m-d');

                                    $student->save();
//                                     return view('site.degree.shartnoma_pdf' , [
//                                                'data' => $student,
//                                            ]);
                                    return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.degree.shartnoma_pdf' , [
                                        'data' => $student,
                                    ])->download('degree.pdf');
                                }
                                if ($student->status == 1) {
                                    if ($student->step == 1) {
//                                        return view('site.shartnoma.degree_pdf' , [
//                                                'data' => $student,
//                                            ]);
                                        $student->getting_date = date('Y-m-d');

                                        $student->save();
                                        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.degree.shartnoma_pdf' , [
                                            'data' => $student,
                                        ])->download('degree.pdf');
                                    }
                                    if ($student->step == 2) {

//                                         return view('site.degree.shartnoma_pdf' , [
//                                                'data' => $student,
//                                            ]);
                                        $student->getting_date = date('Y-m-d');

                                        $student->save();
                                        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.degree.shartnoma_pdf' , [
                                            'data' => $student,
                                        ])->download('degree.pdf');
                                    }
                                }
                            }
                        }

                    }
                    else{
                        return redirect()->back()->with('info_error' , 'Ma`lumot notog`ri kiritildi!')->withInput();
                    }
                }
                else{
                    return redirect()->back()->with('info_error' , 'Ma`lumot notog`ri kiritildi!')->withInput();
                }

            }
            else{
                return redirect()->back()->with('info_error' , 'Ma`lumot notog`ri kiritildi!')->withInput();
            }
        }
        else{
            return redirect()->back()->with('info_error' , 'Ma`lumot topilmadi!')->withInput();
        }


        // dd($input);
        // return $input;
    }


}