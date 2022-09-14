<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Test\Model\Country;
use Test\Model\Course;
use Test\Model\Higher;
use Test\Model\Language;
use Test\Model\Level;
use App;
use Test\Model\Masters;
use Test\Model\Nationality;
use Test\Model\Overseas;
use Test\Model\Degrees;
use Test\Model\Certificate;
use Test\Model\Spec;
use Test\Model\StudyLanguage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Mail;
use Image;
use File;
use PDF;
use Illuminate\Http\Response;

class SubmitController extends Controller
{
    public function masters()
    {
        
      
        if (App::isLocale('uz'))
            $lan = 1;
        if (App::isLocale('ru'))
            $lan = 2;
        if (App::isLocale('en'))
            $lan = 3;
        $levels = Level::where('lang',$lan)->get();
        $langs = Language::where('lang',$lan)->get();
        $countries = Country::where('lang',$lan)->get();
        $learningLangiages = StudyLanguage::where('lang',$lan)->get();
        $specs = Spec::where('lang',$lan)->get();
        $courses = Course::where('lang',$lan)->get();
        $degrees = Degrees::where('lang',$lan)->get();
        $nations = Nationality::where('lang',$lan)->get();
        $certificates = Certificate::where('lang',$lan)->get();



        
        return view('site.submit.masters',[
            'countries'=>$countries,
            'levels'=>$levels,
            'langs'=>$langs,
            'study_languages'=>$learningLangiages,
            'specs'=>$specs,
            'courses'=>$courses,
            'degrees'=>$degrees,
            "certificates"=>$certificates,
            'nations'=>$nations
        ]);
    }
    public function overseas()
    {
        if (App::isLocale('uz'))
            $lan = 1;
        if (App::isLocale('ru'))
            $lan = 2;
        if (App::isLocale('en'))
            $lan = 3;
        $levels = Level::where('lang',$lan)->get();
        $langs = Language::where('lang',$lan)->get();
        $countries = Country::where('lang',$lan)->get();
        $learningLangiages = StudyLanguage::where('lang',$lan)->get();
        $specs = Spec::where('lang',$lan)->get();
        $higher = Higher::where('lang',$lan)->get();
        return view('site.submit.overseas',[
            'countries'=>$countries,
            'levels'=>$levels,
            'langs'=>$langs,
            'study_languages'=>$learningLangiages,
            'specs'=>$specs,
            'higher'=>$higher
        ]);
    }
    public function storeoverseas(Request $request)
    {

        $input = $request->all();
        $input['phone1'] = str_replace('+','',$input['phone1']);
        $input['phone2'] = str_replace(' ','',$input['phone2']);

        $validator = Validator::make($input, [
            'first_name'=>'required',
            'last_name' =>'required',
            'birth_date' =>'required',
            'birth_place' => 'required|filled',
            'citizenship' => 'required|filled',
            'living_address' => 'required',
            'passport_serial' => 'required|alpha',
            'passport_number' => 'required|digits:7',
            'passport_expiration_date' => 'required',
            'passport_issued_by' => 'required',
            'passport_copy' => 'required|mimes:pdf',
            'image'=>'mimes:png,jpg,jpeg,bmp,gif',
            'phone1' => 'required',
            'email' => 'required|email',

            'background_study'=>'required',
            'background_certificate'=>'required|filled',
            'backgraund_grad_year'=>'required',
            'back_cert_series'=>'required',
            'back_cert_numbers'=>'required',
            'back_cert_copy'=>'required|mimes:pdf',
            'foreign_lang'=>'required',

            'speciality'=>'required|filled',
            'study_language'=>'required|filled',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $applicant = new Overseas();

        if ($request->hasFile('image'))
        {
            $image = $request->file('image');

            $file = Image::make($image);

            $file->save(public_path() . '/admission/overseas/img/' . $image->hashName());

            $input['image'] = '/admission/overseas/img/' . $image->hashName();
            $path = public_path().$applicant->image;
            $applicant->image = $input['image'];
            File::delete($path);
        }
        if ($request->hasFile('passport_copy'))
        {
            $file = $request->file('passport_copy');
            Storage::disk('admission')->put('/overseas/other/', $file);
            $path = '/admission/overseas/other/'.$file->hashName();
            $applicant->passport_copy = $path;
        }
        if ($request->hasFile('back_cert_copy')) {
            $file = $request->file('back_cert_copy');
            Storage::disk('admission')->put('/overseas/other/', $file);
            $path = '/admission/overseas/other/'.$file->hashName();
            $applicant->back_cert_copy = $path;
        }
        if ($request->hasFile('h_educ_diplom_copy')) {
            $file = $request->file('h_educ_diplom_copy');
            Storage::disk('admission')->put('/overseas/other/', $file);
            $path = '/admission/overseas/other/'.$file->hashName();
            $applicant->h_educ_diplom_copy = $path;
        }

        $applicant->first_name = $input['first_name'];
        $applicant->last_name = $input['last_name'];
        $applicant->middle_name = $input['middle_name'];
        $applicant->birth_place = $input['birth_place'];
        $applicant->citizenship = $input['citizenship'];
        $applicant->living_address = $input['living_address'];
        $applicant->gender = $input['gender'];
        $applicant->passport_serial = strtoupper($input['passport_serial']);
        $applicant->passport_number = $input['passport_number'];
        $applicant->passport_issued_by = $input['passport_issued_by'];
        $applicant->image = $input['image'];
        $applicant->email = $input['email'];
        $applicant->phone1 = $input['phone1'];
        $applicant->phone2 = $input['phone2'];
        // qualification details
        $applicant->background_study = $input['background_study'];
        $applicant->background_certificate = $input['background_certificate'];
        $applicant->backgraund_grad_year = $input['backgraund_grad_year'];
        $applicant->back_cert_series = $input['back_cert_series'];
        $applicant->back_cert_numbers = $input['back_cert_numbers'];
        $applicant->foreign_lang = $input['foreign_lang'];
        $applicant->higher_education = $input['higher_education'];
        $applicant->h_educ_univer_name = $input['h_educ_univer_name'];
        $applicant->more_info = $input['more_info'];
        // other information
        $applicant->speciality = $input['speciality'];
        $applicant->study_language = $input['study_language'];
        $applicant->education_degree = $input['education_degree'];

        //begin modifying dates
        $birth_date = str_replace('/','-',$input['birth_date']);
        $passport_expiration_date = str_replace('/','-',$input['passport_expiration_date']);
        //end customizing
        $applicant->birth_date = date("Y-m-d",strtotime($birth_date));
        $applicant->passport_expiration_date = date("Y-m-d",strtotime($passport_expiration_date));

         if($applicant->save()) {

            $file = $this->overseaspdf($applicant->id);

            $this->checkmail2($applicant->id);
           return view('site.submit.success',['file'=>$file]);
          return redirect()->route('success',['file'=>$file]);
        }
    }
    // storing masters applicants
    public function storemasters(Request $request)
    {
        $input = $request->all();
       $course_id = $request->get('course_id');
       $course_lang = $request->get('course_lang');
       
    //   dd($input);
       
    
        $input['phone1'] = str_replace('+','',$input['phone1']);
        $input['phone2'] = str_replace(' ','',$input['phone2']);
        $validator = Validator::make($input, [
            'first_name'=>'required',
            'last_name' =>'required',
            'birth_date' =>'required',
            'birth_place' => 'required|filled',
            'citizenship' => 'required|filled',
            'nationality' => 'required|filled',
            'living_address' => 'required',
            'passport_serial' => 'required',
            'passport_number' => 'required',
            'passport_given_date' => 'required',
            'passport_issued_by' => 'required',
            'passport_copy' => 'required|mimes:pdf',
            'image'=>'mimes:png,jpg,jpeg,bmp,gif',
            'phone1' => 'required',
            'email' => 'required|email',
            'copy_letter' => 'required|mimes:pdf',

            'background_study'=>'required',
            'background_certificate'=>'required|filled',
            'backgraund_grad_year'=>'required',
            'back_cert_series'=>'required',
            'back_cert_numbers'=>'required',
            'back_cert_copy'=>'required|mimes:pdf',
            'lang_cert_file'=>'mimes:pdf',
            'foreign_lang'=>'required',
            'course_id'=>'required|filled',
            'course_lang'=>'required|filled',
            'punkt' => 'required|filled',
            // other informations
            // 'f_first_name'=>'required',
            // 'f_last_name'=>'required',
            // 'f_phone'=>'required',
            // 'f_living_address'=>'required',
            // 'm_first_name'=>'required',
            // 'm_last_name'=>'required',
            // 'm_phone'=>'required',
            // 'm_living_address'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $applicant = new Masters();

        if ($request->hasFile('image'))
        {
            $image = $request->file('image');

            $file = Image::make($image);

            $file->save(public_path() . '/admission/masters/img/' . $image->hashName());

            $input['image'] = '/admission/masters/img/' . $image->hashName();
            $path = public_path().$applicant->image;
            $applicant->image = $input['image'];
            File::delete($path);
        }
        if ($request->hasFile('passport_copy'))
        {
            $file = $request->file('passport_copy');
            Storage::disk('admission')->put('/masters/other/', $file);
            $path = '/admission/masters/other/'.$file->hashName();
            $applicant->passport_copy = $path;
        }

        if ($request->hasFile('copy_letter'))
        {
            $file = $request->file('copy_letter');
            Storage::disk('admission')->put('/masters/other1/', $file);
            $path = '/admission/masters/other1/'.$file->hashName();
            $applicant->copy_letter = $path;
        }

        if ($request->hasFile('back_cert_copy')) {
            $file = $request->file('back_cert_copy');
            Storage::disk('admission')->put('/masters/other/', $file);
            $path = '/admission/masters/other/'.$file->hashName();
            $applicant->back_cert_copy = $path;
        }
        if ($request->hasFile('lang_cert_file')) {
            $file = $request->file('lang_cert_file');
            Storage::disk('admission')->put('/masters/other/', $file);
            $path = '/admission/masters/other/'.$file->hashName();
            $applicant->lang_cert_file = $path;
        }
        
        $applicant->first_name = $input['first_name'];
        $applicant->last_name = $input['last_name'];
        $applicant->middle_name = $input['middle_name'];
        $applicant->birth_place = $input['birth_place'];
        $applicant->citizenship = $input['citizenship'];
        $applicant->nationality = $input['nationality'];
        $applicant->living_address = $input['living_address'];
        $applicant->gender = $input['gender'];
        $applicant->passport_serial = $input['passport_serial'];
        $applicant->passport_number = $input['passport_number'];
        $applicant->passport_issued_by = $input['passport_issued_by'];
        $applicant->image = $input['image'];
        $applicant->email = $input['email'];
        $applicant->phone1 = $input['phone1'];
        $applicant->phone2 = $input['phone2'];
        // qualification details
        $applicant->background_study = $input['background_study'];
        $applicant->background_certificate = $input['background_certificate'];
        $applicant->backgraund_grad_year = $input['backgraund_grad_year'];
        $applicant->back_cert_series = $input['back_cert_series'];
        $applicant->back_cert_numbers = $input['back_cert_numbers'];
        $applicant->foreign_lang = $input['foreign_lang'];
        $applicant->course_id = $course_id;
        $applicant->course_lang = $course_lang;
        $applicant->lang_cert_result = $input['cert_result'];
        $applicant->lang_cert_type = $input['lang_cert_type'];
        $applicant->aboutme = $input['about_me'];
        $applicant->is_scholarship_has = $input['is_scholarship_has'];
        $applicant->scholarship_title = $input['scholarship_title'];
        $applicant->work_experience = $input['work_experience'];
        $applicant->punkt = $input['punkt'];
        
        

        // // other information
        // $applicant->f_first_name = $input['f_first_name'];
        // $applicant->f_last_name = $input['f_last_name'];
        // $applicant->f_middle_name = $input['f_middle_name'];
        // $applicant->f_living_address = $input['f_living_address'];
        // $applicant->f_job_org = $input['f_job_org'];
        // $applicant->f_phone = $input['f_phone'];
        // $applicant->f_position = $input['f_position'];
        // $applicant->m_first_name = $input['m_first_name'];
        // $applicant->m_last_name = $input['m_last_name'];
        // $applicant->m_middle_name = $input['m_middle_name'];
        // $applicant->m_job_org = $input['m_job_org'];
        // $applicant->m_living_address = $input['m_living_address'];
        // $applicant->m_phone = $input['m_phone'];
        // $applicant->m_position = $input['m_position'];

        //begin modifying dates
        $birth_date = str_replace('/','-',$input['birth_date']);
        $passport_given_date = str_replace('/','-',$input['passport_given_date']);
        $lang_cert_taken_date = str_replace('/','-',$input['lang_cert_taken_date']);
        //end customizing lang_cert_taken_date
        $applicant->birth_date = date("Y-m-d",strtotime($birth_date));
        $applicant->passport_given_date = date("Y-m-d",strtotime($passport_given_date));
        $applicant->lang_cert_taken_date = date("Y-m-d",strtotime($lang_cert_taken_date));
        $file_name = $applicant->first_name.'_'.$applicant->last_name;
        //end modifying dates
        if($applicant->save()) {
//            $headers = ['Content-Type: application/pdf'];
            $file = $this->masterspdf($applicant->id);
            $file1 = $this->masterspdf1($applicant->id);
         //Response::download($file, $file_name, ['location' => '/success']);
           // response()->download('http://online.tsul.uz'.$file, $file_name, $headers);
           // response()->download($file);
//            $this->checkmail($applicant->id);
            return view('site.submit.success',['file'=>$file, 'file1'=>$file1]);
//            return redirect()->route('success',['file'=>$file]);
        }
    }
    public function success()
    {
        return view('site.submit.success');
    }
    public function checkmail($id)
    {
        if(App::isLocale('uz'))
            $subject = 'Hurmatli Abituriyent';
        if(App::isLocale('ru'))
            $subject = 'Уважаемые Абитуриенть';
        if(App::isLocale('en'))
            $subject = 'Dear Applicant';
        $applicant = Masters::find($id);
        $data = [
            'email' => $applicant->email,
            'subject' => $subject,
            'bodyMessage' => 'Here body message',
            'data'=>$applicant,
            'attach'=>$applicant->application_name
        ];
        $attach = $applicant->application_name;
        Mail::send('site.mail', $data, function ($message) use ($data) {
            $message->from('tsul.admission@gmail.com', 'Tsul Admission');
            $message->to($data['email']);
            $message->subject($data['subject']);
            $message->attach(public_path($data['attach']));
        });
        // end sening email
    }
    public function checkmail2($id)
    {
        if(App::isLocale('uz'))
            $subject = 'Hurmatli Abituriyent';
        if(App::isLocale('ru'))
            $subject = 'Уважаемые Абитуриенть';
        if(App::isLocale('en'))
            $subject = 'Dear Applicant';

        $applicant = Overseas::find($id);
        $data = [
            'email' => $applicant->email,
            'subject' => $subject,
            'bodyMessage' => 'Here body message',
            'data'=>$applicant,
            'attach'=>$applicant->application_name
        ];
        Mail::send('site.mail', $data, function ($message) use ($data) {
            $message->from('admission@admin.pager.uz', 'NamSU Admission');
            $message->to($data['email']);
//             $message->to("elmurodovjavogir8@gmail.com");
            $message->subject($data['subject']);
            $message->attach(public_path($data['attach']));
        });
        // end sening email
    }
    public function overseaspdf($id)
    {
        $data = Overseas::find($id);
        $pdf = PDF::loadView("site.submit.overseaspdf", ["data"=>$data]);
        $file_name = "/admission/overseas/other/".$data->first_name." ".$data->last_name.time().".pdf";
        $data->application_name = $file_name;
        if($data->save()) {
            $pdf->save(public_path($file_name), $pdf);
            return $file_name;
        }

    }
    public function masterspdf($id)
    {
        $data = Masters::find($id);
        // $data->created_at = date('d-m-Y', strtotime($data->created_at));
        // $data->created_at = $data->created_at->format('d-m-Y');
        
        $pdf = PDF::loadView("site.submit.masterspdf", ["data"=>$data]);
        $file_name = "/admission/masters/other/".$data->first_name."_".$data->last_name.time().".pdf";
        $data->application_name = $file_name;
        if($data->save()) {
            $pdf->save(public_path($file_name), $pdf);
            return $file_name;
        }
    }
    public function masterspdf1($id)
    {
        $data1 = Masters::find($id);
        $pdf1 = PDF::loadView("site.submit.masterspdf1", ["data"=>$data1]);
        $file_name1 = "/admission/masters/other1/".$data1->first_name."_".$data1->last_name.time().".pdf";
        $data1->application_name = $file_name1;
        if($data1->save()) {
            $pdf1->save(public_path($file_name1), $pdf1);
            return $file_name1;
        }
    }
}