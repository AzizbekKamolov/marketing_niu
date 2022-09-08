<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App;
use Test\Model\AgreementSideType;
use Test\Model\AgreementType;
use Test\Model\AmountConvertToWord;
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
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class AgreementController extends Controller
{
    public function get_data(Request $request)
    {
        $payment_student = StudentPayment::with('type.agreement_types')
            ->with('type.agreement_side_types')
            ->with('type.other_agreement_types')
            ->with('getting_agreements')
            ->where(function ($query) use ($request) {
                if ($request->id_code) {
                    $query->where('id_code', substr($request->id_code, 6));
                } elseif ($request->passport_jshir) {
                    $query->where('passport_jshir', $request->passport_jshir);
                } else {
                    $query->where('id', 0);
                }
            })
            ->first();
        if ($payment_student) {
            if ($payment_student->passport_seria == $request->passport_seria) {
                if ($payment_student->passport_number == $request->passport_number) {
                    $agreement_type_ids = StudentTypeAgreementType::where('type_id', $payment_student->status_new)->pluck('agreement_type_id');
                    $agreement_side_type_ids = StudentTypeAgreementSideType::where('type_id', $payment_student->status_new)->pluck('agreement_side_type_id');
                    $getting = GettingAgreement::where('student_id', $payment_student->id)->where('status', 1)->first();
                    $agreement_types = AgreementType::where(function ($query) use ($getting) {
                        if ($getting) {
                            $query->where('id', $getting->agreement_type_id);
                        }
                    })->whereIn('id', $agreement_type_ids)->get();
                    $agreement_side_types = AgreementSideType::where(function ($query) use ($getting) {
                        if ($getting) {
                            $query->where('id', $getting->agreement_side_type_id);
                        }
                    })->whereIn('id', $agreement_side_type_ids)->get();
                    return view('student.agreement.data_info', [
                        'data' => $payment_student,
                        'agreement_types' => $agreement_types,
                        'agreement_side_types' => $agreement_side_types
                    ]);
                } else {
                    return redirect()->back()->with('error', "pasprot nomer xato");
                }
            } else {
                return redirect()->back()->with('error', "pasprot seria xato");
            }
        } else {
            return redirect()->back()->with('error', "Malumot topilmadi");
        }
    }

    public function form()
    {
        return view('student.agreement.form');
    }

    public function form_first_course()
    {
        return view('student.agreement.form_first_course');
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
//        return $request;
        if ($student) {
            $agreement_type = OtherAgreementType::find($request->other_agreement_type_id);
            $discounts = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->get();
            $discount_sum = Discount::where('student_id', $student->id)->where('agreement_id', $agreement_type->id)->where('type_agreement', 2)->sum('percent');
            $part_discount = 1 - ($discount_sum / 100);
//                    return $discount_sum;
            if ($agreement_type) {
                $this_year = date('Y');
                $need_date = $this_year . '-06-30';
                if ($request->date_agreement) {
                    $this_date = date('Y-m-d', strtotime($request->date_agreement));
                } else {
                    $this_date = date('Y-m-d');
                }
//                return $this_date;
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
//                return $general_payment_sum;
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
                    'general_payment_sum' => $general_payment_sum,
                    'this_date' => $this_date
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
                        $amount = $student->amount;
                        $all_summa = $amount->price;
                        $part1_summa = '';
                        $part2_summa = '';
                        $part_four_1_summa = '';
                        $part_four_2_summa = '';
                        $part_four_3_summa = '';
                        $part_four_4_summa = '';
                        if ($all_summa % 2 == 0) {
                            $part1_summa = $all_summa / 2;
                            $part2_summa = $all_summa / 2;
                        } else {
                            $part1_summa = ($all_summa - 1) / 2;
                            $part2_summa = ($all_summa - 1) / 2 + 1;
                        }
                        if ($part1_summa % 2 == 0) {
                            $part_four_1_summa = $part1_summa / 2;
                            $part_four_2_summa = $part1_summa / 2;
                        } else {
                            $part_four_1_summa = ($part1_summa - 1) / 2;
                            $part_four_2_summa = ($part1_summa - 1) / 2 + 1;
                        }
                        if ($part2_summa % 2 == 0) {
                            $part_four_3_summa = $part2_summa / 2;
                            $part_four_4_summa = $part2_summa / 2;
                        } else {
                            $part_four_3_summa = ($part2_summa - 1) / 2;
                            $part_four_4_summa = ($part2_summa - 1) / 2 + 1;
                        }
                        $convert_to_word = new AmountConvertToWord();
                        $all_summa_word = $convert_to_word->convert_to_word_cyril($all_summa);
                        $part1_summa_word = $convert_to_word->convert_to_word_cyril($part1_summa);
                        $part2_summa_word = $convert_to_word->convert_to_word_cyril($part2_summa);
                        $student->all_summa = number_format($all_summa);
                        $student->part2_summa = number_format($part2_summa);
                        $student->part1_summa = number_format($part1_summa);
                        $student->all_summa_word = $all_summa_word;
                        $student->part1_summa_word = $part1_summa_word;
                        $student->part2_summa_word = $part2_summa_word;
                        $student->part_four_1_summa = number_format($part_four_1_summa);
                        $student->part_four_2_summa = number_format($part_four_2_summa);
                        $student->part_four_3_summa = number_format($part_four_3_summa);
                        $student->part_four_4_summa = number_format($part_four_4_summa);
                        $student->times = $amount->times;
                        if ($amount->type == 'simple') {
                            return view('student.agreement_lyceum.show_agreement', [
                                'data' => $student,
                                'amount' => $amount
                            ]);
                        } elseif ($amount->type == 'super') {
                            return view('student.agreement_lyceum.show_agreement_super', [
                                'data' => $student,
                                'amount' => $amount
                            ]);
                        }

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
//        return "d";
        $ly = Lyceum::where('id_code', $request->id_code)->first();
        if ($ly) {
            // return view('site.shartnoma.shartnoma_lyceum_pdf' , ['data' => $ly]);
            if ($ly->getting_date == null) {
                $ly->getting_date = date('Y-m-d');
                $ly->update();

            }
            $amount = $ly->amount;
            $all_summa = $amount->price;
            $part1_summa = '';
            $part2_summa = '';
            $part_four_1_summa = '';
            $part_four_2_summa = '';
            $part_four_3_summa = '';
            $part_four_4_summa = '';
            if ($all_summa % 2 == 0) {
                $part1_summa = $all_summa / 2;
                $part2_summa = $all_summa / 2;
            } else {
                $part1_summa = ($all_summa - 1) / 2;
                $part2_summa = ($all_summa - 1) / 2 + 1;
            }
            if ($part1_summa % 2 == 0) {
                $part_four_1_summa = $part1_summa / 2;
                $part_four_2_summa = $part1_summa / 2;
            } else {
                $part_four_1_summa = ($part1_summa - 1) / 2;
                $part_four_2_summa = ($part1_summa - 1) / 2 + 1;
            }
            if ($part2_summa % 2 == 0) {
                $part_four_3_summa = $part2_summa / 2;
                $part_four_4_summa = $part2_summa / 2;
            } else {
                $part_four_3_summa = ($part2_summa - 1) / 2;
                $part_four_4_summa = ($part2_summa - 1) / 2 + 1;
            }
            $convert_to_word = new AmountConvertToWord();
            $all_summa_word = $convert_to_word->convert_to_word_cyril($all_summa);
            $part1_summa_word = $convert_to_word->convert_to_word_cyril($part1_summa);
            $part2_summa_word = $convert_to_word->convert_to_word_cyril($part2_summa);
            $ly->all_summa = number_format($all_summa);
            $ly->part2_summa = number_format($part2_summa);
            $ly->part1_summa = number_format($part1_summa);
            $ly->all_summa_word = $all_summa_word;
            $ly->part1_summa_word = $part1_summa_word;
            $ly->part2_summa_word = $part2_summa_word;
            $ly->part_four_1_summa = number_format($part_four_1_summa);
            $ly->part_four_2_summa = number_format($part_four_2_summa);
            $ly->part_four_3_summa = number_format($part_four_3_summa);
            $ly->part_four_4_summa = number_format($part_four_4_summa);
            $ly->times = $amount->times;
            if ($amount->type == 'simple') {
                return PDF::loadView('student.agreement_lyceum.agreement_pdf', ['data' => $ly])->download($ly->fio() . '.pdf');
            } elseif ($amount->type == 'super') {
                return PDF::loadView('student.agreement_lyceum.agreement_pdf_super', ['data' => $ly])->download($ly->fio() . '.pdf');
            }
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
                                'general_payment_sum' => $general_payment_sum,
                                'this_date' => $this_date
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
//        if ($request->student_id != 9602){
//            return "Texnik ishlar";
//        }
        if ($student) {
            $type = Type::find($student->status_new);
            $agreement_side_type = AgreementSideType::find($request->agreement_side_type_id);
            if ($agreement_side_type && $type) {
                $agreement_type = AgreementType::find($request->agreement_type_id);
                if ($agreement_type) {
                    $getting_date = date('Y-m-d');
                    $getting = GettingAgreement::where('student_id', $student->id)->where('status', 1)->first();
                    $student_type_agreement_type = StudentTypeAgreementType::where('type_id', $type->id)->where('agreement_type_id', $agreement_type->id)->first();
                    $all_summa = $student_type_agreement_type->price;
                    $discount = Discount::where('student_id', $student->id)->where('type_agreement', 1)->sum('percent');
                    $dif_discount = 1 - $discount / 100;
                    if ($dif_discount < 1 && $dif_discount > 0) {
                        $all_summa = $all_summa * $dif_discount;
                    }
                    $part1_summa = '';
                    $part2_summa = '';
                    $part_four_1_summa = '';
                    $part_four_2_summa = '';
                    $part_four_3_summa = '';
                    $part_four_4_summa = '';
                    if ($all_summa % 2 == 0) {
                        $part1_summa = $all_summa / 2;
                        $part2_summa = $all_summa / 2;
                    } else {
                        $part1_summa = ($all_summa - 1) / 2;
                        $part2_summa = ($all_summa - 1) / 2 + 1;
                    }
                    if ($part1_summa % 2 == 0) {
                        $part_four_1_summa = $part1_summa / 2;
                        $part_four_2_summa = $part1_summa / 2;
                    } else {
                        $part_four_1_summa = ($part1_summa - 1) / 2;
                        $part_four_2_summa = ($part1_summa - 1) / 2 + 1;
                    }
                    if ($part2_summa % 2 == 0) {
                        $part_four_3_summa = $part2_summa / 2;
                        $part_four_4_summa = $part2_summa / 2;
                    } else {
                        $part_four_3_summa = ($part2_summa - 1) / 2;
                        $part_four_4_summa = ($part2_summa - 1) / 2 + 1;
                    }
                    $convert_to_word = new AmountConvertToWord();
                    $all_summa_word = $convert_to_word->convert_to_word($all_summa);
                    $part1_summa_word = $convert_to_word->convert_to_word($part1_summa);
                    $part2_summa_word = $convert_to_word->convert_to_word($part2_summa);
//                    return $all_summa_word.'-'.$all_summa;
//                    return $part2_summa_word.'-'.$part2_summa;
//                    return $part1_summa_word.'-'.$part1_summa;
//                    return $student_type_agreement_type;
                    if ($getting) {
                        $getting_date = $getting->getting_date;
                    }
//                    $student->all_summa = $all_summa;
                    $student->all_summa = number_format($all_summa);
                    $student->part2_summa = number_format($part2_summa);
                    $student->part1_summa = number_format($part1_summa);
                    $student->all_summa_word = $all_summa_word;
                    $student->part1_summa_word = $part1_summa_word;
                    $student->part2_summa_word = $part2_summa_word;
                    $student->part_four_1_summa = number_format($part_four_1_summa);
                    $student->part_four_2_summa = number_format($part_four_2_summa);
                    $student->part_four_3_summa = number_format($part_four_3_summa);
                    $student->part_four_4_summa = number_format($part_four_4_summa);
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
                        if ($type->degree == 4) {
//                            return $agreement_type->id;
                            return view('student.agreement.agreement_shows.agreements.ukraina.agreement_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date
                            ]);
                        } elseif ($type->edu_place == 'sirtqi') {
                            return view('student.agreement.agreement_shows.agreements.sirtqi.agreement_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date
                            ]);
                        } else {
                            if ($student->type_student == 1) {
//                                return $student;
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
                    $student_type_agreement_type = StudentTypeAgreementType::where('type_id', $type->id)->where('agreement_type_id', $agreement_type->id)->first();
                    $all_summa = $student_type_agreement_type->price;
                    $discount = Discount::where('student_id', $student->id)->where('type_agreement', 1)->sum('percent');
                    $dif_discount = 1 - $discount / 100;
                    if ($dif_discount < 1 && $dif_discount > 0) {
                        $all_summa = $all_summa * $dif_discount;
                    }
                    $part1_summa = '';
                    $part2_summa = '';
                    $part_four_1_summa = '';
                    $part_four_2_summa = '';
                    $part_four_3_summa = '';
                    $part_four_4_summa = '';
                    if ($all_summa % 2 == 0) {
                        $part1_summa = $all_summa / 2;
                        $part2_summa = $all_summa / 2;
                    } else {
                        $part1_summa = ($all_summa - 1) / 2;
                        $part2_summa = ($all_summa - 1) / 2 + 1;
                    }
                    if ($part1_summa % 2 == 0) {
                        $part_four_1_summa = $part1_summa / 2;
                        $part_four_2_summa = $part1_summa / 2;
                    } else {
                        $part_four_1_summa = ($part1_summa - 1) / 2;
                        $part_four_2_summa = ($part1_summa - 1) / 2 + 1;
                    }
                    if ($part2_summa % 2 == 0) {
                        $part_four_3_summa = $part2_summa / 2;
                        $part_four_4_summa = $part2_summa / 2;
                    } else {
                        $part_four_3_summa = ($part2_summa - 1) / 2;
                        $part_four_4_summa = ($part2_summa - 1) / 2 + 1;
                    }
                    $convert_to_word = new AmountConvertToWord();
                    $all_summa_word = $convert_to_word->convert_to_word($all_summa);
                    $part1_summa_word = $convert_to_word->convert_to_word($part1_summa);
                    $part2_summa_word = $convert_to_word->convert_to_word($part2_summa);
//                    return $all_summa_word.'-'.$all_summa;
//                    return $part2_summa_word.'-'.$part2_summa;
//                    return $part1_summa_word.'-'.$part1_summa;
//                    return $student_type_agreement_type;
                    if ($getting) {
                        $getting_date = $getting->getting_date;
                    }
                    $student->all_summa = number_format($all_summa);
                    $student->part2_summa = number_format($part2_summa);
                    $student->part1_summa = number_format($part1_summa);
                    $student->all_summa_word = $all_summa_word;
                    $student->part1_summa_word = $part1_summa_word;
                    $student->part2_summa_word = $part2_summa_word;
                    $student->part_four_1_summa = number_format($part_four_1_summa);
                    $student->part_four_2_summa = number_format($part_four_2_summa);
                    $student->part_four_3_summa = number_format($part_four_3_summa);
                    $student->part_four_4_summa = number_format($part_four_4_summa);
                    if ($type->contract_type == 'super') {
                        if ($type->edu_place == 'sirtqi') {
                            $ended = 2022 + 5 - $student->course;
                            $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' , SIRTQI';
                            $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                            return PDF::loadView('student.agreement.agreement_shows.agreements.super_sirtqi.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date,
                                'qr_code' => $qrcode
                            ])->download($student->fio() . '.pdf');
                        } else {
                            if ($student->type_student == 1) {
                                $ended = 2022 + 4 - $student->course;
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' ,KUNDUZGI BAKALAVR';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                return PDF::loadView('student.agreement.agreement_shows.agreements.super_bakalavr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                            }
                            if ($student->type_student == 2) {
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-2022 ,KUNDUZGI MAGISTRATURA';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                return PDF::loadView('student.agreement.agreement_shows.agreements.super_magistr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                            }
                        }
                    } else {
                        if ($type->edu_place == 'sirtqi') {
                            $ended = 2022 + 5 - $student->course;
                            $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' , SIRTQI';
                            $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                            return PDF::loadView('student.agreement.agreement_shows.agreements.sirtqi.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date,
                                'qr_code' => $qrcode
                            ])->download($student->fio() . '.pdf');
                        } else {

                            if ($type->degree == 4) {
//                            return $agreement_type->id;
                                $ended = 2022 + 4 - $student->course;
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' ,O`qishni ko`chirish(Ukraina)';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                return PDF::loadView('student.agreement.agreement_shows.agreements.ukraina.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                            } elseif ($student->type_student == 1) {
                                $ended = 2022 + 4 - $student->course;
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' ,KUNDUZGI BAKALAVR';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                return PDF::loadView('student.agreement.agreement_shows.agreements.simple_bakalavr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                            }
                            if ($student->type_student == 2) {
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-2022 ,KUNDUZGI MAGISTRATURA';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                return PDF::loadView('student.agreement.agreement_shows.agreements.magistr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                            }
                        }
                    }
                }
            }
        }
    }
}
