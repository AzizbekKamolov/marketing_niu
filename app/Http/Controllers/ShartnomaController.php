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


class ShartnomaController extends Controller
{


    public function super_magister_get(Request $request){
        $student = Student::find($request->data_id);
        if (!$student->getting_date) {
            $student->getting_date = date('Y-m-d');
            $student->update();
        }
        return PDF::loadView('site.shartnoma.shartnoma_pdf_super_magister' , [
            'data' => $student,
        ])->download('Shartnoma.pdf');
    }
  public function form(){
//        return "Texnik ishlar sababli online shartnoma olish vaqtincha yopildi";
  	// return "bla bla";
    return view('site.shartnoma.shartnoma_form');
  }
  public function lyceum_form(){
    // return "bla bla";
    return view('site.shartnoma.shartnoma_lyceum_form');
  }

  public function magistr_get(Request $request){
    $student = Student::where('id' , $request->data_id)->where('type' , 2)->where('course' , 5)->first();
    // return $student;
    if (!$student->getting_date) {
        $student->getting_date = date('Y-m-d');
        $student->update();
    }
    return PDF::loadView('site.shartnoma.shartnoma_pdf_magistr' , [
        'data' => $student,
    ])->download('Magistr_shartnoma.pdf');
  }

   public function info(Request $request)
    {
        $input = $request->all();
        $input['id_code'] = substr($request->id_code , 6);
        $request->id_code = $input['id_code'];
        $request->merge([
            'id_code' => $input['id_code']
        ]);
//        return $request;
        $val = [
                    'passport_seria' => ['required' ],
                    'birthday' => ['required'],
                    'passport_number' => ['required'],
                    'id_code' => ['required'],
                ];
        $validator = Validator::make($input, $val );
        // return $request;
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        if (Student::where('id_code' , $request->id_code)->exists()) {
            $student = Student::where('id_code' , $request->id_code)->first();
            // return $student;
            if ($student->birthday ) {
                $val_simple = [
                    'passport_seria' => ['required'],
                    'passport_number' => ['required'],
                    'birthday' => ['required'],
                    'id_code' => ['required'],
                    'step' => ['required'],
                    'g-recaptcha-response' => 'required|captcha'
                ];

            }
            else{
                $val_simple = [
                    'passport_seria' => ['required'],
                    'passport_number' => ['required'],
                    'id_code' => ['required'],
                    'g-recaptcha-response' => 'required|captcha'
                ];

            }
        }





        $validator = Validator::make($input, $val_simple , [

            'g-recaptcha-response.required' => 'Tasdiqlang!'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Student::where('id_code' , $request->id_code)->exists()) {

            if (Student::where('id_code' , $request->id_code)->count() > 1) {

            $student = Student::where('id_code' , $request->id_code)->where('type' , 2)->first();
            if (!$student) {
                if (Student::where('id_code' , $request->id_code)->where('status' , 10)->exists()) {
                    $student = Student::where('id_code' , $request->id_code)->where('status' , 10)->first();

                }
                else{

            	 $student = Student::where('id_code' , $request->id_code)->where('status' , 3)->first();
                }
            }


            }
            else{

            $student = Student::where('id_code' , $request->id_code)->first();

            }


            if ($student->passport_seria == $request->passport_seria ) {
                if ($student->passport_number == $request->passport_number) {
                    if ($student->status != 3) {
                        $per_birthday =  $student->birthday == $request->birthday;
                    }
                    else{
                         $per_birthday = 1;
                    }
                    if ($per_birthday) {
                        if ($student->course == 5) {
                            // return $student;
                            return view('site.shartnoma.shartnoma_info_magistr' , [
                                'data' => $student,
                            ]);
                            return "fdl;kf";
                        }
                        if ($student->active == null || $student->active == 1) {
                            if ($student->status != 2) {
                                if ($student->status == 3) {
                                    // return "super";
                                    if ($student->type == 1) {
                                        return view('site.shartnoma.shartnoma_info_super' , ['data' => $student]);

                                    }
                                }
                                if ($student->status == 4) {
                                    // return "super magister";
                                    if ($student->type == 2) {
                                        return view('site.shartnoma.shartnoma_info_super_magister' , ['data' => $student]);

                                    }
                                }
                                if ($student->status == 0) {

                                        $step = $request->step;
                                        $student->status = 1;
                                        $student->step = $request->step;
                                        $student->save();
                                        return view('site.shartnoma.shartnoma_info1' , [
                                                   'data' => $student,
                                               ]);

                                      // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf' , [
                                      //           'data' => $student,
                                      //       ])->download('Shartnoma.pdf');
                                }
                                if ($student->status == 5 && $student->step == 0) {
                                    $step = $request->step;
                                    $student->step = $request->step;
                                    $student->save();

                                }
                                if ($student->status == 1) {
                                    if ($student->step == 1) {
                                       return view('site.shartnoma.shartnoma_info1' , [
                                               'data' => $student,
                                           ]);
                                        // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf' , [
                                        //         'data' => $student,
                                        //     ])->download('Shartnoma.pdf');
                                    }
                                    if ($student->step == 2) {

                                        return view('site.shartnoma.shartnoma_info1' , [
                                               'data' => $student,
                                           ]);
                                        // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf' , [
                                        //         'data' => $student,
                                        //     ])->download('Shartnoma.pdf');
                                    }
                                }
                                if ($student->status == 5) {
                                    // return "1-kurs";
                                    if ($student->step == 1) {
                                       return view('site.shartnoma.shartnoma_info_first_course' , [
                                               'data' => $student,
                                           ]);
                                    }
                                    if ($student->step == 2) {
                                        return view('site.shartnoma.shartnoma_info_first_course' , [
                                               'data' => $student,
                                           ]);
                                    }
                                }
                                if ($student->status == 10) {
                                     return view('site.shartnoma.shartnoma_degree' , [
                                               'data' => $student,
                                           ]);
                                }
                                if ($student->status == 20) {
                                     return view('site.shartnoma.shartnoma_degree_kaz' , [
                                               'data' => $student,
                                           ]);
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
                        return view('site.shartnoma.shartnoma_lyceum_info' , [
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
            // return view('site.shartnoma.shartnoma_lyceum_pdf' , ['data' => $ly]);
            if ($ly->getting_date == null){
            $ly->getting_date = date('Y-m-d');
            $ly->update();

            }
            return PDF::loadView('site.shartnoma.shartnoma_lyceum_pdf' , ['data' => $ly])->download($ly->fio().'.pdf');
        }
    }

    public function degree_get(Request $request){
        // return $request;
        $ly = Student::where('id_code' , $request->id_code)->where('status' , 10)->first();
        // return $ly;
        if ($ly) {
            // return view('site.shartnoma.shartnoma_lyceum_pdf' , ['data' => $ly]);
            if ($ly->status == 10) {
                if ($ly->getting_date == null) {
                    $ly->getting_date = date('Y-m-d');
                    $ly->update();
                }

            // return view('site.shartnoma.shartnoma_degree_pdf' , ['data' => $ly]);
            return PDF::loadView('site.shartnoma.shartnoma_degree_pdf' , ['data' => $ly])->download($ly->fio().'.pdf');
            }


        }
        else{
            $ly = Student::where('id_code' , $request->id_code)->where('status' , 20)->first();
                if (!$ly->getting_date == null) {
                    $ly->getting_date = date('Y-m-d');
                    $ly->update();
                }

                // return view('site.shartnoma.shartnoma_degree_pdf' , ['data' => $ly]);
                return PDF::loadView('site.shartnoma.shartnoma_degree_kaz_pdf' , ['data' => $ly])->download($ly->fio().'sds.pdf');
        }
        return "dsds";
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
        	if (Student::where('id_code' , $rrr->id_code)->count() > 1) {

            $student = Student::where('id_code' , $rrr->id_code)->where('type' , 2)->first();
            if (!$student) {
            	 $student = Student::where('id_code' , $rrr->id_code)->where('status' , 3)->first();
            }


            }
            else{

            $student = Student::where('id_code' , $rrr->id_code)->first();

            }
            // $student = Student::where('id_code' , $rrr->id_code)->first();
            // return $student;
            if ($student->passport_seria == $rrr->passport_seria ) {
                if ($student->passport_number == $rrr->passport_number) {
                    if ( $student->birthday == $rrr->birthday) {
                        if ($student->active == null || $student->active == 1) {
                            if ($student->status != 2) {
                                if ($student->status == 3) {
                                    // return "super(bakalavr)";
                                    if($student->getting_date == null){
                                        $student->getting_date = date('Y-m-d');
                                        $student->save();
                                    }
                                    return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf_super' , [
                                        'data' => $student,
                                    ])->download('Shartnoma.pdf');
                                }
                                if ($student->status == 4) {
                                    return "super(magister)";
                                }
                                if ($student->status == 0) {
                                    if ($student->course == 5) {
                                        return "dfk";
                                    }


                                    $step = $rrr->step;
                                    $student->status = 1;
                                    $student->step = $rrr->step;
                                    if ($student->getting_date == null){

                                    $student->getting_date = date('Y-m-d');
                                    }
                                    $student->save();

//                                     return view('site.shartnoma.shartnoma_pdf' , [
//                                                'data' => $student,
//                                            ]);
                                      return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf' , [
                                                'data' => $student,
                                            ])->download('Shartnoma.pdf');
                                }
                                if ($student->status == 1) {
                                    if ($student->step == 1) {
//                                        return view('site.shartnoma.shartnoma_pdf' , [
//                                                'data' => $student,
//                                            ]);
                                        if ($student->getting_date == null){
                                        $student->getting_date = date('Y-m-d');

                                        }

                                        $student->save();
                                        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf' , [
                                                'data' => $student,
                                            ])->download('Shartnoma.pdf');
                                    }
                                    if ($student->step == 2) {

//                                         return view('site.shartnoma.shartnoma_pdf' , [
//                                                'data' => $student,
//                                            ]);
                                        if ($student->getting_date == null){
                                        $student->getting_date = date('Y-m-d');

                                        }
//                                        $student->getting_date = date('Y-m-d');

                                    $student->save();
                                        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf' , [
                                                'data' => $student,
                                            ])->download('Shartnoma.pdf');
                                    }
                                }
                                if ($student->status == 5) {
                                    if ($student->step == 1) {
//                                        return view('site.shartnoma.shartnoma_pdf' , [
//                                                'data' => $student,
//                                            ]);
                                        if ($student->getting_date == null){
                                        $student->getting_date = date('Y-m-d');

                                        }
//                                        $student->getting_date = date('Y-m-d');

                                        $student->save();
                                        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf_first_course' , [
                                                'data' => $student,
                                            ])->download('Shartnoma.pdf');
                                    }
                                    if ($student->step == 2) {

//                                         return view('site.shartnoma.shartnoma_pdf' , [
//                                                'data' => $student,
//                                            ]);
                                        if ($student->getting_date == null){
                                        $student->getting_date = date('Y-m-d');

                                        }
//                                        $student->getting_date = date('Y-m-d');

                                        $student->save();
                                        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('site.shartnoma.shartnoma_pdf_first_course' , [
                                                'data' => $student,
                                            ])->download('Shartnoma.pdf');
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
