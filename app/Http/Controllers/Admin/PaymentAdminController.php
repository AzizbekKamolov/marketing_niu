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
use Test\Model\SmsSend;
use Test\Model\Student;
use Test\Model\Region;
use Test\Model\Area;
use Test\Model\StudentOtherAgreementAccess;
use Test\Model\StudentPayment;
use Test\Model\Payment;
use Test\Model\StudentTypeAgreementSideType;
use Test\Model\StudentTypeAgreementType;
use Test\Model\StudentTypeOtherAgreementType;
use Test\Model\Type;
use Test\Model\GettingAgreement;


class PaymentAdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 11 || Auth::user()->role == 12) {
            $students = StudentPayment::orderBy('id', 'DESC')->with('type')->get();
            return view('admin.pages.payment_admin.student.index', [
                'data' => $students
            ]);
        } else {
            return "xatolik!!";
        }
    }

    public function ttj_students($type)
    {
        if (Auth::user()->role == 12) {
            if ($type) {
                $access = StudentOtherAgreementAccess::where('other_agreement_type_id', 1)->pluck('student_id');
                $students = StudentPayment::orderBy('id', 'DESC')->whereIn('id', $access)->with('type')->get();
            } else {
                $access = StudentOtherAgreementAccess::where('other_agreement_type_id', 1)->pluck('student_id');
                $students = StudentPayment::orderBy('id', 'DESC')->whereNotIn('id', $access)->with('type')->get();
            }
            return view('admin.pages.payment_admin.student.index', [
                'data' => $students
            ]);
        } else {
            return "xatolik!!";
        }
    }


    public function no_checkeds()
    {
        if (Auth::user()->role == 11) {
            $students = StudentPayment::where('status_check', 0)->with('type')->get();
            return view('admin.pages.payment_admin.student.no_checkeds', [
                'data' => $students
            ]);
        } else {
            return "xatolik!!";
        }
    }

    public function student_check_edit($id)
    {
        if (Auth::user()->role == 11) {
            $student = StudentPayment::find($id);
            $regions = Region::all();
            $agreement_types = Type::orderBy('order', 'ASC')->get();
//            return $student;
            return view('admin.pages.payment_admin.student.check_edit', [
                'data' => $student,
                'regions' => $regions,
                'agreement_types' => $agreement_types
            ]);
        } else {
            return "xatolik!!";
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 11) {
            $p_seria = $request->passport_seria;
            $p_number = $request->passport_number;
            $student = StudentPayment::find($id);
            if (StudentPayment::where('id_code', $request->id_code)->where('id', '<>', $id)->exists()) {
                return redirect()->back()->with('error', 'Bu id kod  bilan boshqa o`quvchi mavjud');
            }
            if (StudentPayment::where('passport_seria', $p_seria)->where('passport_number', $p_number)->where('id', '<>', $id)->exists()) {
                return redirect()->back()->with('error', 'Bu passport malumotlar bilan boshqa o`quvchi mavjud');
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
                'passport_jshir' => 'required|max:14',
                'gender' => 'required',
                'status_new' => 'required',
//                'type_degree' => 'required',
            ]);
            if (Payment::where('id_code', $student->id_code)->exists()) {
                $pay = Payment::where('id_code', $student->id_code)->get();
                foreach ($pay as $p) {
                    $p->id_code = $request->id_code;
                    $p->update();
                }
            }
            $type = Type::where('id', $request->status_new)->first();
            $comment = $type['comment'];
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
            $student->status = 1;
            $student->comment = $comment;
            $student->passport_jshir = $request->passport_jshir;
            $student->course = $request->course;
            $student->status_new = $request->status_new;
            $student->status_check = 1;
            $student->type_student = $request->type_degree;
            $student->update();
            return redirect()->back()->with('success', 'Ma`lumot o`zgartirildi');
//            return redirect(route('payment_admin.student.no_checkeds'))->with('success', 'Ma`lumot o`zgartirildi');
//            return $request;
        } else {
            return "xatolik!!";
        }
    }

    public function student_payments($id)
    {
        if (Auth::user()->role == 11) {
            $student = StudentPayment::find($id);
//            return $student->payments();
            return view('admin.pages.payment_admin.payment.index', [
                'student' => $student
            ]);

        }

    }

    public function payment_store(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required',
            'payment_date' => 'required',
            'student_id' => 'required',
        ]);
        if (Auth::user()->role == 11) {
            $student = StudentPayment::find($request->student_id);
            if ($student) {
                $new_payment = new Payment();
                $new_payment->amount = $request->amount;
                $new_payment->payment_date = $request->payment_date;
                $new_payment->description = $request->description;
                $new_payment->student_id = $request->student_id;
                $new_payment->id_code = $student->id_code;
                $new_payment->created_by = Auth::user()->id;
                $new_payment->updated_by = Auth::user()->id;
                $new_payment->save();
                return redirect()->back()->with('success', 'To`lov saqlandi');

            }
        }
    }

    public function payment_delete($id)
    {
//        return $id;
        if (Auth::user()->role == 11) {
            $payment = Payment::find($id);
            if ($payment) {
                $payment->delete();
                return redirect()->back()->with('success', 'To`lov o`chirildi');
            }
        }
    }

    public function create_student()
    {
        if (Auth::user()->role == 11) {
            $regions = Region::all();
            $agreement_types = Type::orderBy('order', 'ASC')->get();
//            return $agreement_types;
            return view('admin.pages.payment_admin.student.create', [
                'regions' => $regions,
                'agreement_types' => $agreement_types
            ]);
        }
    }

    public function store_student(Request $request)
    {
//        return $request;
        $p_seria = $request->passport_seria;
        $p_number = $request->passport_number;
//        if (StudentPayment::where('id_code' , $request->id_code)->exists()){
//            return redirect()->back()->with('error' , 'Bu id kod  bilan boshqa o`quvchi mavjud');
//        }
        if (StudentPayment::where('passport_seria', $p_seria)->where('passport_number', $p_number)->exists()) {
            return redirect()->back()->with('error', 'Bu passport malumotlar bilan boshqa o`quvchi mavjud');
        }
        $validator = $request->validate([
            'first_name' => 'required',
            'id_code' => ['required', 'unique:students'],
            'last_name' => 'required',
//            'middle_name' => 'required',
            'birthday' => 'required|date',
//            'phone' => 'required',
//            'region' => 'required',
//            'area' => 'required',
//            'address' => 'required',
            'passport_seria' => ['required', 'regex:/^[A-Z]+$/u'],
            'passport_number' => 'required',
//            'passport_given_date' => 'date',
//            'passport_issued_date' => 'date',
//            'passport_given_by' => 'string',
            'passport_jshir' => 'required|max:14',
            'gender' => 'required',
            'status_new' => 'required',
//            'type_degree' => 'required',
        ]);
        $type = Type::where('id', $request->status_new)->first();
        $comment = $type['comment'];
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
        $student->status = 1;
        $student->comment = $comment;
        $student->passport_jshir = $request->passport_jshir;
        $student->status_new = $request->status_new;
        $student->type_student = $request->type_degree;
        $student->course = $request->course;
        $student->status_check = 1;
        $student->save();
        if (isset($request->send_id_code) && $request->send_id_code == 'on' && $request->phone != '' && $request->phone != null) {
            $number = str_replace('+', '', $request->phone);
            $number = str_replace('(', '', $number);
            $number = str_replace(')', '', $number);
            $number = str_replace('_', '', $number);
            $number = str_replace('-', '', $number);
            if (strlen($number) == 12) {
                $send_sms = new SmsSend();
                $text = 'TSUL MARKETING: Hurmatli talaba sizning marketing.tsul.uz tizimidan foydalanishingiz uchun id kodingiz: 002-00' . $student->id_code;
                $result = $send_sms->send_one_sms($number, $text);
                if ($result) {
                    $student->sms_sended = 1;
                    $student->update();
                }
            }
        }
        return redirect()->back()->with('success', 'Ma`lumot saqlandi');
    }

    public function student_show($id)
    {
        if (Auth::user()->role == 11 || Auth::user()->role == 12) {
            $student = StudentPayment::with('agreement_discounts')->with('other_agreement_discounts.agreement_type')->find($id);
//            return $student;
            $regions = Region::all();
            $other_agreements = OtherAgreementType::all();
            $other_spec_agreements = OtherAgreementType::where('to_all', '!=', 1)->get();
            foreach ($other_spec_agreements as $other_spec_agreement) {
                if (StudentOtherAgreementAccess::where('student_id', $student->id)->where('other_agreement_type_id', $other_spec_agreement->id)->exists()) {
                    $other_spec_agreement->checked = true;
                } else {
                    $other_spec_agreement->checked = false;
                }
            }
            $type = Type::find($student->status_new);
            $allowed_agreement_type_ids = StudentTypeAgreementType::where('type_id', $type->id)->pluck('agreement_type_id');
            $allowed_agreement_types = AgreementType::whereIn('id', $allowed_agreement_type_ids)->get();

            $allowed_agreement_side_type_ids = StudentTypeAgreementSideType::where('type_id', $type->id)->pluck('agreement_side_type_id');
            $allowed_agreement_side_types = AgreementSideType::whereIn('id', $allowed_agreement_side_type_ids)->get();

            $last_agreement_getting = GettingAgreement::where('student_id', $student->id)->where('status', 1)->orderBy('id', 'DESC')->first();
//            return $allowed_agreement_side_types;
            return view('admin.pages.payment_admin.student.student_show', [
                'data' => $student,
                'regions' => $regions,
                'other_agreement_types' => $other_agreements,
                'other_spec_agreements' => $other_spec_agreements,
                'allowed_agreement_types' => $allowed_agreement_types,
                'allowed_agreement_side_types' => $allowed_agreement_side_types,
                'last_agreement_getting' => $last_agreement_getting
            ]);
        } else {
            return "xatolik!!";
        }
    }

    public function change_status($id)
    {
        if (Auth::user()->role == 11 || Auth::user()->role == 12) {
            $student = StudentPayment::find($id);
            $student->status = !$student->status;
            $student->update();
            return redirect()->back();
        }
    }

    public function get_type_by_degree($id)
    {
        $type = Type::where('degree', $id)->orderBy('order', 'ASC')->get();
        return json_encode($type);
    }

    public function student_types()
    {
        $types = Type::with('agreement_side_types')->with('agreement_types')->orderBy('order', 'ASC')->get();
//        return $types;
        return view('admin.pages.payment_admin.student_types.index', [
            'data' => $types
        ]);
    }

    public function student_types_show($id)
    {
        $type = Type::with('agreement_side_types')->with('agreement_types')->with('other_agreement_types')->find($id);
//        return $type;
        if ($type) {
            $side_type_ids = StudentTypeAgreementSideType::where('type_id', $type->id)->pluck('agreement_side_type_id');
            $other_side_types = AgreementSideType::whereNotIn('id', $side_type_ids)->get();
            $type_ids = StudentTypeAgreementType::where('type_id', $type->id)->pluck('agreement_type_id');
            $other_types = AgreementType::whereNotIn('id', $type_ids)->get();
            $others_ids = StudentTypeOtherAgreementType::where('type_id', $type->id)->pluck('other_agreement_type_id');
            $others = OtherAgreementType::whereNotIn('id', $others_ids)->get();
//            return $others;
            return view('admin.pages.payment_admin.student_types.show', [
                'data' => $type,
                'other_side_types' => $other_side_types,
                'other_types' => $other_types,
                'other_agreements' => $others
            ]);
        } else {
            return abort(404);
        }

    }

    public function send_id_code(Request $request)
    {
        $student = StudentPayment::find($request->student_id);
        if ($student) {
            $sms = new SmsSend();
            if ($student->phone) {
                if (strlen($student->phone) == 13) {
                    $number = str_replace('+', '', $student->phone);
                    $number = str_replace(' ', '', $number);
                    $number = str_replace('_', '', $number);
                    if (strlen($number) == 12) {
                        $text = 'TSUL MARKETING: Hurmatli talaba sizning marketing.tsul.uz tizimidan foydalanishingiz uchun id kodingiz: 002-00' . $student->id_code;
                        $sms->send_one_sms($number, $text);
                        return redirect()->back()->with('success', 'Jo`natildi');
                    } else {
                        return redirect()->back()->with('error', 'Telefon raqam to`liq emas');
                    }
                } else {
                    return redirect()->back()->with('error', 'Telefon raqam to`liq emas');
                }
            }
            return redirect()->back()->with('error', 'Telefon raqam to`liq emas');
        } else {
            return redirect()->back()->with('error', 'Talaba topilmadi');
        }
//        return $request;
    }

    public function change_agreement_types(Request $request)
    {
        $last_agreement_getting = GettingAgreement::where('student_id', $request->student_id)->where('status', 1)->orderBy('id', 'DESC')->first();
        if ($last_agreement_getting){
            if($request->changed_agreement_type_id)$last_agreement_getting->agreement_type_id = $request->changed_agreement_type_id;
            if($request->changed_agreement_side_type_id)$last_agreement_getting->agreement_side_type_id = $request->changed_agreement_side_type_id;
            $last_agreement_getting->update();
        }
        return redirect()->back()->with('success' , 'Malumot ozgartirildi');
        return $request;
    }

    public function  student_delete($id){
        $student = StudentPayment::find($id);
        if ($student){
            $student->delete();
            return back()->with('success', 'Student deleted successfully');
        }
        return back()->with('error', 'student not found');
    }

}
