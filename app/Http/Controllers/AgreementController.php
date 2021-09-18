<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App;
use Test\Model\AgreementSideType;
use Test\Model\AgreementType;
use Test\Model\GettingAgreement;
use Test\Model\OtherAgreementType;
use Test\Model\Student;
use Test\Model\Lyceum;
use Test\Model\Discount;
use PDF;
use Test\Model\StudentOtherAgreementAccess;
use Test\Model\StudentPayment;
use Test\Model\StudentTypeAgreementSideType;
use Test\Model\StudentTypeAgreementType;
use Test\Model\Type;


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
                        $agreement_type_ids = StudentTypeAgreementType::where('type_id',$payment_student->status_new)->pluck('agreement_type_id');
                        $agreement_side_type_ids = StudentTypeAgreementSideType::where('type_id' , $payment_student->status_new)->pluck('agreement_side_type_id');

                        $getting = GettingAgreement::where('student_id', $payment_student->id)->where('status', 1)->first();
//                        if ($getting) {
//                            return $getting;
//                        }
                        $agreement_types = AgreementType::where(function ($query) use ($getting) {
                            if ($getting) {
                                $query->where('id', $getting->agreement_type_id);
                            }
                        })->whereIn('id' , $agreement_type_ids)->get();
                        $agreement_side_types = AgreementSideType::where(function ($query) use ($getting) {
                            if ($getting) {
                                $query->where('id', $getting->agreement_side_type_id);
                            }
                        })->whereIn('id',$agreement_side_type_ids)->get();
                        return view('student.agreement.data_info', [
                            'data' => $payment_student,
                            'agreement_types' => $agreement_types,
                            'agreement_side_types' => $agreement_side_types
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


    public function show_other_agreement(Request $request)
    {
        $student = StudentPayment::find($request->student_id);
        if ($student) {
            $agreement_type = OtherAgreementType::find($request->other_agreement_type_id);
            $discounts = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->get();
            $discount_sum = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->sum('percent');
            $part_discount = 1 - ($discount_sum / 100);
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
//                return view('student.agreement.agreement_shows.other_agreements.show' . $agreement_type->id . '_pdf', [
//                    'student' => $student,
//                    'agreement' => $agreement_type,
//                    'discounts' => $discounts,
//                    'discount_sum' => $discount_sum,
//                    'general_payment_sum' => $general_payment_sum
//                ]);
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

    public function lyceum_pdf_agreement(Request $request)
    {
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

    public function form_ttj()
    {
        return view('student.agreement.ttj.form');
    }

    public function show_agreement_ttj(Request $request)
    {
        $student = StudentPayment::with('type.agreement_types')->with('type.agreement_side_types')->with('type.other_agreement_types')->with('getting_agreements')->where('id_code', substr($request->id_code, 6))->first();
        if ($student) {
            if ($student->passport_seria == $request->passport_seria) {
                if ($student->passport_number == $request->passport_number) {
                    if (date('Y-m-d', strtotime($student->birthday)) == date('Y-m-d', strtotime($request->birthday))) {
                        $agreement_type = OtherAgreementType::find($request->other_agreement_type_id);
                        if (!StudentOtherAgreementAccess::where('student_id', $student->id)->where('other_agreement_type_id', $request->other_agreement_type_id)->exists()) {
                            return redirect()->back()->with('error', 'Siz uchun yotoqxona olish ruxsati berilmagan');
                        }
                        $discounts = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->get();
                        $discount_sum = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->sum('percent');
                        $part_discount = 1 - ($discount_sum / 100);
                        if ($agreement_type) {
                            $this_year = date('Y');
                            $need_date = $this_year . '-06-30';
                            if ($request->ttj_start_date) {
                                $this_date = date('Y-m-d', strtotime($request->ttj_start_date));
                            } else {
                                $this_date = date('Y-m-d');
                            }
                            if ($this_date > $need_date) {
                                $this_year++;
                                $need_date = $this_year . '-06-30';
                            }
                            $now = strtotime($this_date); // or your date as well
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
                    } else {
                        return redirect()->back()->with('error', 'Tug`ilgan kun noto`g`ri');
                    }
                } else {
                    return redirect()->back()->with('error', 'Pasport raqami noto`g`ri');
                }
            } else {
                return redirect()->back()->with('error', 'Pasport seria noto`g`ri');
            }
        }


    }

    public function show_agreement(Request $request)
    {
        $student = StudentPayment::find($request->student_id);
        if ($request->student_id != 9602){
            return "Texnik ishlar";
        }
        if ($student) {
            $type = Type::find($student->status_new);
            $agreement_side_type = AgreementSideType::find($request->agreement_side_type_id);
            if ($agreement_side_type && $type) {
                $agreement_type = AgreementType::find($request->agreement_type_id);
                if ($agreement_type) {
                    $getting_date = date('Y-m-d');
                    $getting = GettingAgreement::where('student_id', $student->id)->where('status', 1)->first();
                    if ($getting) {
                        $getting_date = $getting->getting_date;
                    }
                    if ($type->contract_type == 'super') {
                        if ($type->edu_place == 'sirtqi') {
                            return view('student.agreement.agreement_shows.agreements.super_sirtqi.agreement_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date
                            ]);
                        } else {
                            if ($student->type_student == 1) {
                                return view('student.agreement.agreement_shows.agreements.super_bakalavr.agreement_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date
                                ]);
                            }
                            if ($student->type_student == 2) {
                                return view('student.agreement.agreement_shows.agreements.super_magistr.agreement_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date
                                ]);
                            }
                        }
                    } else {
                        if ($type->edu_place == 'sirtqi') {
                            return view('student.agreement.agreement_shows.agreements.sirtqi.agreement_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date
                            ]);
                        } else {
                            if ($student->type_student == 1) {
                                return view('student.agreement.agreement_shows.agreements.simple_bakalavr.agreement_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date
                                ]);
                            }
                            if ($student->type_student == 2) {
                                return view('student.agreement.agreement_shows.agreements.magistr.agreement_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date
                                ]);
                            }
                        }
                    }

                }
            }
        }
    }


    public function pdf_agreement(Request $request)
    {
        $student = StudentPayment::find($request->student_id);
        if ($student) {
            $type = Type::find($student->status_new);
            $agreement_side_type = AgreementSideType::find($request->agreement_side_type_id);
            if ($agreement_side_type && $type) {
                $agreement_type = AgreementType::find($request->agreement_type_id);
                if ($agreement_type) {
                    $all_gettings = GettingAgreement::where('student_id', $student->id)->get();
                    foreach ($all_gettings as $all_getting) {
                        $all_getting->status = 0;
                        $all_getting->update();
                    }
                    $getting = new GettingAgreement();
                    $getting->student_id = $student->id;
                    $getting->getting_date = $request->getting_date;
                    $getting->agreement_type_id = $agreement_type->id;
                    $getting->agreement_side_type_id = $agreement_side_type->id;
                    $getting->status = 1;
                    $getting->save();
                    $getting_date = $getting->getting_date;
//                    bakalavr
//                    if ($student->type_student == 1) {
//                        return PDF::loadView('student.agreement.agreement_shows.agreements.simple_bakalavr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
//                            'student' => $student,
//                            'agreement_type' => $agreement_type,
//                            'agreement_side_type' => $agreement_side_type,
//                            'getting_date' => $getting_date
//                        ])->download($student->fio() . '.pdf');
//
//                    }
////                    magistr
//                    if ($student->type_student == 2) {
//                        return PDF::loadView('student.agreement.agreement_shows.agreements.magistr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
//                            'student' => $student,
//                            'agreement_type' => $agreement_type,
//                            'agreement_side_type' => $agreement_side_type,
//                            'getting_date' => $getting_date
//                        ])->download($student->fio() . '.pdf');
//                    }
                    if ($type->contract_type == 'super') {
                        if ($type->edu_place == 'sirtqi') {
                            return PDF::loadView('student.agreement.agreement_shows.agreements.super_sirtqi.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date
                            ])->download($student->fio().'.pdf');
                        } else {
                            if ($student->type_student == 1) {
                                return PDF::loadView('student.agreement.agreement_shows.agreements.super_bakalavr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date
                                ])->download($student->fio().'.pdf');
                            }
                            if ($student->type_student == 2) {
                                return PDF::loadView('student.agreement.agreement_shows.agreements.super_magistr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date
                                ])->download($student->fio().'.pdf');
                            }
                        }
                    } else {
                        if ($type->edu_place == 'sirtqi') {
                            return PDF::loadView('student.agreement.agreement_shows.agreements.sirtqi.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date
                            ])->download($student->fio().'.pdf');
                        } else {
                            if ($student->type_student == 1) {
                                return PDF::loadView('student.agreement.agreement_shows.agreements.simple_bakalavr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date
                                ]);
                            }
                            if ($student->type_student == 2) {
                                return PDF::loadView('student.agreement.agreement_shows.agreements.magistr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date
                                ])->download($student->fio().'.pdf');
                            }
                        }
                    }
                }
            }
        }
    }
}
