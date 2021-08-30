<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Test\Model\AgreementSideType;
use Test\Model\AgreementType;
use Test\Model\BranchAdmin;
use Test\Model\Group;
use Test\Model\OtherAgreementType;
use Test\Model\Student;
use Test\Model\Region;
use Test\Model\Area;
use Test\Model\StudentPayment;
use Test\Model\Payment;
use Test\Model\StudentTypeAgreementSideType;
use Test\Model\StudentTypeAgreementType;
use Test\Model\StudentTypeOtherAgreementType;
use Test\Model\Type;


class PaymentAdminController extends Controller
{
    public function index(){
        if (Auth::user()->role == 11){
            $students = StudentPayment::orderBy('id' , 'DESC')->where('status_check' , 1)->get();
            return view('admin.pages.payment_admin.student.index' , [
                'data' => $students
            ]);
        }
        else{
            return "xatolik!!";
        }
    }


    public function no_checkeds(){
        if (Auth::user()->role == 11){
            $students = StudentPayment::where('status_check' , 0)->with('type')->get();
            return view('admin.pages.payment_admin.student.no_checkeds' , [
                'data' => $students
            ]);
        }
        else{
            return "xatolik!!";
        }
    }

    public function student_check_edit($id){
        if (Auth::user()->role == 11){
            $student = StudentPayment::find($id);
            $regions = Region::all();
//            return $student;
            return view('admin.pages.payment_admin.student.check_edit' , [
                'data' => $student,
                'regions' => $regions,
            ]);
        }
        else{
            return "xatolik!!";
        }
    }

    public function update(Request $request , $id){
        if (Auth::user()->role == 11){
            $p_seria = $request->passport_seria;
            $p_number = $request->passport_number;
            $student = StudentPayment::find($id);
            if (StudentPayment::where('id_code' , $request->id_code)->where('id' , '<>' , $id)->exists()){
                return redirect()->back()->with('error' , 'Bu id kod  bilan boshqa o`quvchi mavjud');
            }
            if (StudentPayment::where('passport_seria' , $p_seria)->where('passport_number' , $p_number)->where('id' , '<>' , $id)->exists()){
                return redirect()->back()->with('error' , 'Bu passport malumotlar bilan boshqa o`quvchi mavjud');
            }

            $validatedData = $request->validate([
                'first_name' => 'required',
                'id_code' => 'required',
                'last_name' => 'required',
                'middle_name' => 'required',
//                'birthday' => 'required|date',
//                'phone' => 'required',
//                'region' => 'required',
//                'area' => 'required',
//                'address' => 'required',
                'passport_seria' => ['required'],
                'passport_number' => 'required',
//                'passport_given_date' => 'date',
//                'passport_issued_date' => 'date',
//                'passport_given_by' => 'string',
                'gender' => 'required',
                'status_new' => 'required',
//                'type_degree' => 'required',
            ]);
            if (Payment::where('id_code' , $student->id_code)->exists()){
                $pay = Payment::where('id_code' , $student->id_code)->get();
                    foreach ($pay as $p){
                    $p->id_code = $request->id_code;
                    $p->update();
                }
            }
            $student->id_code = $request->id_code;
            $student->first_name = $request->first_name;
            $student->last_name = $request->last_name;
            $student->middle_name = $request->middle_name;
            $student->birthday = $request->birthday;
            $student->phone = $request->phone;
            $student->region = $request->region;
            $student->area = $request->area;
            $student->address = $request->address;
            $student->passport_seria = $request->passport_seria;
            $student->passport_number = $request->passport_number;
            $student->passport_given_date = $request->passport_given_date;
            $student->passport_given_by = $request->passport_given_by;
            $student->passport_issued_date = $request->passport_issued_date;
            $student->gender = $request->gender;
            $student->course = $request->course;
            $student->status_new = $request->status_new;
            $student->status_check = 1;
            $student->update();
            return redirect(route('payment_admin.student.no_checkeds'))->with('success' , 'Ma`lumot o`zgartirildi');
            return $request;
        }
        else{
            return "xatolik!!";
        }
    }

    public function student_payments($id){
        if (Auth::user()->role == 11){
            $student = StudentPayment::find($id);
//            return $student->payments();
            return view('admin.pages.payment_admin.payment.index' , [
                'student' => $student
            ]);

        }

    }

    public function payment_store(Request $request){
        $validatedData = $request->validate([
            'amount' => 'required',
            'payment_date' => 'required',
            'student_id' => 'required',
        ]);
        if (Auth::user()->role == 11){
            $student = StudentPayment::find($request->student_id);
            if ($student){
                $new_payment = new Payment();
                $new_payment->amount = $request->amount;
                $new_payment->payment_date = $request->payment_date;
                $new_payment->description = $request->description;
                $new_payment->student_id = $request->student_id;
                $new_payment->id_code = $student->id_code;
                $new_payment->created_by = Auth::user()->id;
                $new_payment->updated_by = Auth::user()->id;
                $new_payment->save();
                return redirect()->back()->with('success' , 'To`lov saqlandi');

            }
        }
    }

    public function payment_delete($id){
//        return $id;
        if (Auth::user()->role == 11){
            $payment = Payment::find($id);
            if ($payment){
                $payment->delete();
                return redirect()->back()->with('success' , 'To`lov o`chirildi');
            }
        }
    }

    public function create_student(){
        if (Auth::user()->role == 11){
            $regions = Region::all();
            return view('admin.pages.payment_admin.student.create' , [
                'regions' => $regions
            ]);
        }
    }

    public function store_student(Request $request){
        $p_seria = $request->passport_seria;
        $p_number = $request->passport_number;
//        if (StudentPayment::where('id_code' , $request->id_code)->exists()){
//            return redirect()->back()->with('error' , 'Bu id kod  bilan boshqa o`quvchi mavjud');
//        }
        if (StudentPayment::where('passport_seria' , $p_seria)->where('passport_number' , $p_number)->exists()){
            return redirect()->back()->with('error' , 'Bu passport malumotlar bilan boshqa o`quvchi mavjud');
        }
        $validator = $request->validate([
            'first_name' => 'required',
            'id_code' => ['required' , 'unique:students' , 'regex:/^[0-9]+$/u'],
            'last_name' => 'required',
            'middle_name' => 'required',
//            'birthday' => 'required|date',
//            'phone' => 'required',
//            'region' => 'required',
//            'area' => 'required',
//            'address' => 'required',
            'passport_seria' => ['required' , 'regex:/^[A-Z]+$/u'],
            'passport_number' => 'required',
//            'passport_given_date' => 'date',
//            'passport_issued_date' => 'date',
//            'passport_given_by' => 'string',
            'gender' => 'required',
            'status_new' => 'required',
//            'type_degree' => 'required',
        ]);
        $student = new StudentPayment();
        $student->id_code = $request->id_code;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->middle_name = $request->middle_name;
        $student->birthday = $request->birthday;
        $student->phone = $request->phone;
        $student->region = $request->region;
        $student->area = $request->area;
        $student->address = $request->address;
        $student->passport_seria = $request->passport_seria;
        $student->passport_number = $request->passport_number;
        $student->passport_given_date = $request->passport_given_date;
        $student->passport_given_by = $request->passport_given_by;
        $student->passport_issued_date = $request->passport_issued_date;
        $student->gender = $request->gender;
        $student->status_new = $request->status_new;
        $student->course = $request->course;
        $student->status_check = 1;
        $student->save();
        return redirect()->back()->with('success' , 'Ma`lumot saqlandi');
    }

     public function student_show($id){
        if (Auth::user()->role == 11){
            $student = StudentPayment::find($id);
            $regions = Region::all();
//            return $student;
            return view('admin.pages.payment_admin.student.student_show' , [
                'data' => $student,
                'regions' => $regions,
            ]);
        }
        else{
            return "xatolik!!";
        }
    }

    public function get_type_by_degree($id){
        $type = Type::where('degree' , $id)->get();
        return json_encode($type);
    }

    public function student_types(){
        $types = Type::with('agreement_side_types')->with('agreement_types')->orderBy('order' , 'ASC')->get();
        return view('admin.pages.payment_admin.student_types.index' , [
            'data' => $types
        ]);
    }

    public function student_types_show($id){
        $type = Type::with('agreement_side_types')->with('agreement_types')->with('other_agreement_types')->find($id);
//        return $type;
        if ($type){
            $side_type_ids = StudentTypeAgreementSideType::where('type_id' , $type->id)->pluck('agreement_side_type_id');
            $other_side_types = AgreementSideType::whereNotIn('id' , $side_type_ids)->get();
            $type_ids = StudentTypeAgreementType::where('type_id' , $type->id)->pluck('agreement_type_id');
            $other_types = AgreementType::whereNotIn('id' , $type_ids)->get();
            $others_ids = StudentTypeOtherAgreementType::where('type_id' , $type->id)->pluck('other_agreement_type_id');
            $others = OtherAgreementType::whereNotIn('id' , $others_ids)->get();
//            return $others;
            return view('admin.pages.payment_admin.student_types.show' , [
                'data' => $type,
                'other_side_types' => $other_side_types,
                'other_types' => $other_types,
                'other_agreements' => $others
            ]);
        }
        else{
            return abort(404);
        }

    }

}
