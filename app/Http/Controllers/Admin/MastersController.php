<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Test\User;
use Test\Model\Masters;
use Illuminate\Support\Facades\File;
use Mail;

class MastersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Masters::orderBy('id','desc')->get();
        return view('admin.pages.masters.index',[
            'data'=>$data
        ]);
    }
    public function create()
    {

    }
    public function show($id)
    {
        if(Masters::where('id',$id)->exists())
        {
            $data = Masters::find($id);
            return view('admin.pages.masters.show',[
                'data'=>$data
            ]);
        }
        else echo "Ma'lumot topilmadi";
    }
    public function edit($id)
    {

    }
    public function destroy($id)
    {
        $data = Masters::find($id);
        if(file_exists(public_path($data->passport_copy)))
            File::delete(public_path($data->passport_copy));

        if(file_exists(public_path($data->image)))
            File::delete(public_path($data->image));

        if(file_exists(public_path($data->back_cert_copy)))
            File::delete(public_path($data->back_cert_copy));

        if(file_exists(public_path($data->lang_cert_file)))
            File::delete(public_path($data->lang_cert_file));

        if(file_exists(public_path($data->application_name)))
            File::delete(public_path($data->application_name));
        if($data->delete())
        {
            return redirect()->route('masters.index')->with('message','Ma\'lumot yo\'q qilindi.');
        }
    }
    public function confirm(Request $request)
    {
        $input = $request->all();
        $student_id =  $input['student_id'];
        $app_id = $input['application_id'];
        $person = Masters::find($app_id);
        $person->student_id = $student_id;
        $person->status = 1;
        if($person->save())
        {
            $id = $person->id;
            $lang = "uz";
            // $this->mailer($id,$lang);
            return redirect()->route('masters.show',['id'=>$app_id])->with('message','Unikal raqam berildi!');
        }

    }
    public function mailer($id,$lang)
    {
        $applicant = Masters::find($id);
        $subject = 'Dear Applicant';
        $data = [
            'email' => $applicant->email,
            'subject' => $subject,
            'bodyMessage' => 'Here body message',
            'data'=>$applicant,
        ];
        Mail::send('admin.pages.overseas.mailer', $data, function ($message) use ($data) {
            $message->from('admission@tsul.uz', 'Tsul Admission');
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
        // end sening email
    }
    public function mailto(Request $request)
    {
        $input = $request->all();
        $applicant_id = $input['applicant_id'];
        $content = $input['content'];
        $data = $content;
        $applicant = Masters::find($applicant_id);
        $data = [
            'email' => $applicant->email,
            'subject' => "Dear Applicant",
            'bodyMessage' => 'Here body message',
            'data'=>$data,
        ];
        Mail::send('admin.pages.overseas.mailto', $data, function ($message) use ($data) {
            $message->from('admission@tsul.uz', 'Tsul Admission');
            $message->to($data['email']);
//             $message->to("elmurodovjavogir8@gmail.com");
            $message->subject($data['subject']);
        });
        return redirect()->route('masters.show',['id'=>$applicant_id])->with('message','Xabar muvaffaqiyatli yuborildi!');
    }
}
