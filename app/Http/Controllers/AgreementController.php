<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App;
use Test\Model\AgreementSideType;
use Test\Model\AgreementType;
use Test\Model\OtherAgreementType;
use Test\Model\Student;
use Test\Model\Lyceum;
use Test\Model\Discount;
use PDF;
use Test\Model\StudentPayment;


class AgreementController extends Controller
{
    public function get_data(Request $request)
    {
        $payment_student = StudentPayment::with('type.agreement_types')->with('type.agreement_side_types')->with('type.other_agreement_types')->with('getting_agreements')->where('id_code', substr($request->id_code, 6))->first();
        if ($payment_student) {
            if ($payment_student->passport_seria == $request->passport_seria) {
                if ($payment_student->passport_number == $request->passport_number) {
                    if (date('Y-m-d', strtotime($payment_student->birthday)) == date('Y-m-d', strtotime($request->birthday))) {
//                        return
//                        return $payment_student;
                        return view('student.agreement.data_info', [
                            'data' => $payment_student
                        ]);
                    } else {
                        return "tugilgan kun  xato";
                    }
                } else {
                    return "pasprot nomer xato";
                }
            } else {
                return "pasprot seria xato";
            }
        }
        return $request;
    }

    public function form()
    {
        return view('student.agreement.form');
    }

    public function show_agreement(Request $request)
    {
        $student = StudentPayment::find($request->student_id);
//        return $student;
        if ($student) {
//            if ($student->amount) {
            $agreement_side_type = AgreementSideType::find($request->agreement_side_type_id);
            if ($agreement_side_type) {
                $agreement_type = AgreementType::find($request->agreement_type_id);
                if ($agreement_type) {
//                        return $agreement_type;
                    return view('student.agreement.agreement_shows.agreements.agreement_'.$agreement_side_type->id . '_'.$student->edu_type_id, [
                        'student' => $student,
                        'agreement_side_type' => $agreement_side_type,
                        'agreement_type' => $agreement_type
                    ]);
                }
            }
//            }

        }
    }

    public function show_other_agreement(Request $request)
    {
        $student = StudentPayment::find($request->student_id);
//        return $student;
        if ($student) {
            $agreement_type = OtherAgreementType::find($request->other_agreement_type_id);
            $discounts = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->get();
            $discount_sum = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->sum('percent');
            $part_discount = 1 - ($discount_sum / 100);
//                    return $discount_sum;
            if ($agreement_type) {
                $this_year = date('Y');
                $need_date = $this_year . '-06-30';
                if (date('Y-m-d') > $need_date) {
                    $this_year++;
                    $need_date = $this_year . '-06-30';
                }
                $now = time(); // or your date as well
                $your_date = strtotime($need_date);
                $datediff = $now - $your_date;
                if ($datediff < 0) {
                    $datediff = $datediff * (-1);
                }
                $all_days = round($datediff / (60 * 60 * 24));
                $general_payment_sum = $agreement_type->price_for_day * $part_discount * $all_days;
                return view('student.agreement.agreement_shows.other_agreements.show' . $agreement_type->id, [
                    'student' => $student,
                    'agreement' => $agreement_type,
                    'discounts' => $discounts,
                    'discount_sum' => $discount_sum,
                    'general_payment_sum' => $general_payment_sum
                ]);
            }

        }
    }

    public function pdf_other_agreement(Request $request)
    {
        $student = StudentPayment::find($request->student_id);
//        return $student;
        if ($student) {
            $agreement_type = OtherAgreementType::find($request->other_agreement_type_id);
            $discounts = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->get();
            $discount_sum = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->sum('percent');
            $part_discount = 1 - ($discount_sum / 100);
//                    return $discount_sum;
            if ($agreement_type) {
                $this_year = date('Y');
                $need_date = $this_year . '-06-30';
                if (date('Y-m-d') > $need_date) {
                    $this_year++;
                    $need_date = $this_year . '-06-30';
                }
                $now = time(); // or your date as well
                $your_date = strtotime($need_date);
                $datediff = $now - $your_date;
                if ($datediff < 0) {
                    $datediff = $datediff * (-1);
                }
                $all_days = round($datediff / (60 * 60 * 24));
                $general_payment_sum = $agreement_type->price_for_day * $part_discount * $all_days;
                return PDF::loadView('student.agreement.agreement_shows.other_agreements.show' . $agreement_type->id . '_pdf', [
                    'student' => $student,
                    'agreement' => $agreement_type,
                    'discounts' => $discounts,
                    'discount_sum' => $discount_sum,
                    'general_payment_sum' => $general_payment_sum
                ])->download('shartnoma.pdf');
            }

        }
    }

    public function lyceum_form()
    {
        return view('student.agreement_lyceum.form');
    }

    public function lyceum_show_agreement(Request $request)
    {
//        return $request;
        $student = Lyceum::where('id_code', $request->id_code)->first();
        if ($student) {
            if ($student->parent_pass_seria == $request->parent_pass_seria) {
                if ($student->parent_pass_number == $request->parent_pass_number) {
                    if ($student->birthday == date('Y-m-d', strtotime($request->birthday))) {
                        return view('student.agreement_lyceum.show_agreement', [
                            'data' => $student
                        ]);
                    } else {
                        return redirect()->back()->with('info_error', 'Tug`ilgan sana noto`g`ri')->withInput();
                    }
                } else {
                    return redirect()->back()->with('info_error', 'Pasport raqam noto`g`ri')->withInput();
                }
            } else {
                return redirect()->back()->with('info_error', 'Pasport seria noto`g`ri')->withInput();
            }
        } else {
            return redirect()->back()->with('info_error', 'O`quvchi topilmadi')->withInput();
        }
//        return view('student.agreement_lyceum.show_agreement' , [
//            'data' =>
//        ])
    }
    public function lyceum_pdf_agreement(Request $request){
        $ly = Lyceum::where('id_code', $request->id_code)->first();
        if ($ly) {
            // return view('site.shartnoma.shartnoma_lyceum_pdf' , ['data' => $ly]);
            if ($ly->getting_date == null) {
                $ly->getting_date = date('Y-m-d');
                $ly->update();

            }
            return PDF::loadView('student.agreement_lyceum.agreement_pdf', ['data' => $ly])->download($ly->fio() . '.pdf');
        }
    }
}
