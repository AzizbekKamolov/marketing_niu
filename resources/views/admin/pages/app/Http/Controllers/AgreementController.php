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
//                    $query->where('id_code', $request->id_code);
                } elseif ($request->passport_jshir) {
                    $query->where('passport_jshir', $request->passport_jshir);
                }
                if ($request->type) {
                    $query->where('comment', $request->type);
                }
                if ($request->passport_seria) {
                    $query->where('passport_seria', $request->passport_seria);
                }
                if ($request->passport_number) {
                    $query->where('passport_number', $request->passport_number);
                }
            })
            ->first();
//        return $payment_student;
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
                    $agreement_side_types = AgreementSideType::whereIn('id', $agreement_side_type_ids)->get();
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

    public function form_first_classified_courses()
    {
        return view('student.agreement.form_first_classified_course');
    }

    public function form_first_classified_courses_sirtqi()
    {
        return view('student.agreement.form_first_classified_course_sirtqi');
    }

    public function form_first_classified_courses_masofaviy()
    {
        return view('student.agreement.form_first_classified_course_masofaviy');
    }
    public function form_first_classified_courses_transfer_study()
    {
        return view('student.agreement.form_first_classified_courses_transfer_study');
    }
    public function form_first_classified_courses_magistr()
    {
        return view('student.agreement.form_first_classified_courses_magistr');
    }

    public function form_classified_perevod()
    {
        return view('student.agreement.form_classified_perevod');
    }
    public function form_classified_perevod_sirtqi()
    {
        return view('student.agreement.form_classified_perevod_sirtqi');
    }
    public function form_super_magister()
    {
        return view('student.agreement.super_magister');
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
            $d = date('Y_m_d__H_i_s');
            if ($amount->type == 'simple') {
                $b = PDF::loadView('student.agreement_lyceum.agreement_pdf', ['data' => $ly])->download($ly->fio() . '.pdf');
                \Storage::disk('students')->put($ly->fio(). $d . ".pdf", $b);
                return $b;
            } elseif ($amount->type == 'super') {
                $b =  PDF::loadView('student.agreement_lyceum.agreement_pdf_super', ['data' => $ly])->download($ly->fio() . '.pdf');
                \Storage::disk('students')->put($ly->fio(). $d . ".pdf", $b);
                return $b;
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
//                            return $all_days;
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
                    $qarz = $student->backlog;
                    if (isset($student->backlog)){
                        $all_summa = $qarz;
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
                    if ($getting) {
                        $getting_date = $getting->getting_date;
                    }
                    if($student->description == 'eski_sana'){
                        $getting_date = date('Y-m-d' , strtotime('2022-12-10'));
                    }
//                    return $student;
//                    $dateArray['year'] = date('Y', strtotime($getting_date));
//                    $dateArray['month'] = $this->get_month_name(date('m', strtotime($getting_date)));
//                    $dateArray['day'] = date('d', strtotime($getting_date));
                    $dateArray['year'] = date('Y' ,strtotime($getting_date));
                    $dateArray['month'] = $this->get_month_name(date('m', strtotime($getting_date)));
                    $dateArray['day'] = date('d' ,strtotime($getting_date));
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
                    $accessTypesArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
                    if (in_array($type->id,$accessTypesArray)) {
                        if ($student->status == 0) {
                            return "Siz uchun kursdan kursga o'tish buyrug'i chiqmagan";
                        }
                        if ($student->status == 77) {
                            return "Biroz kuting shartnomalar yangilanmoqda ";
                        }
                        return view('student.agreements_by_id.show.type_' . $type->id . '.side_type_' . $agreement_side_type->id . '.agreement_type_' . $agreement_type->id . '.course_' . $student->course, [
                            'student' => $student,
                            'agreement_type' => $agreement_type,
                            'agreement_side_type' => $agreement_side_type,
                            'getting_date' => $getting_date,
                            'dateArray' => $dateArray,
                            'which_process' => 'show'
                        ]);
                    } else {
                        return "Shartnomalar tez orada joylanadi";

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
                    $qarz = $student->backlog;
                    if (isset($student->backlog)){
                        $all_summa = $qarz;
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
                    if($student->description == 'eski_sana'){
                        $getting_date = date('Y-m-d' , strtotime('2022-12-10'));
                    }
//                    $dateArray['year'] = date('Y', strtotime($getting_date));
//                    $dateArray['month'] = $this->get_month_name(date('m', strtotime($getting_date)));
//                    $dateArray['day'] = date('d', strtotime($getting_date));
                    $dateArray['year'] = date('Y' ,strtotime($getting_date));
                    $dateArray['month'] = $this->get_month_name(date('m' ,strtotime($getting_date)));
                    $dateArray['day'] = date('d' ,strtotime($getting_date));
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
                    if (is_int($qarz)  && isset($student->backlog)){
                        $student->all_summa = $all_summa;
                    }
                    $qr_string = "Toshkent davlat yuridik universiteti\n$student->first_name $student->last_name\nJami to`lov summasi: ".$student->all_summa." so`m\nKursi: ".$student->course;
                    $qrcode = base64_encode(QrCode::format('png')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                    $d = date('Y_m_d__H_i_s');
                    $b = PDF::loadView('student.agreements_by_id.show.type_' . $type->id . '.side_type_' . $agreement_side_type->id . '.agreement_type_' . $agreement_type->id . '.course_' . $student->course, [
                        'student' => $student,
                        'agreement_type' => $agreement_type,
                        'agreement_side_type' => $agreement_side_type,
                        'getting_date' => $getting_date,
                        'dateArray' => $dateArray,
                        'which_process' => 'pdf',
                        'qrcode' => $qrcode
                    ])->download($student->fio() . '.pdf');
                    \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                    return $b;
                    if ($type->contract_type == 'super') {
                        if ($type->edu_place == 'sirtqi') {
                            $ended = 2022 + 5 - $student->course;
                            $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' , SIRTQI';
                            $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                            $b =  PDF::loadView('student.agreement.agreement_shows.agreements.super_sirtqi.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date,
                                'qr_code' => $qrcode
                            ])->download($student->fio() . '.pdf');
                            \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                            return $b;
                        } else {
                            if ($student->type_student == 1) {
                                $ended = 2022 + 4 - $student->course;
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' ,KUNDUZGI BAKALAVR';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                $b = PDF::loadView('student.agreement.agreement_shows.agreements.super_bakalavr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                                \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                                return $b;
                            }
                            if ($student->type_student == 2) {
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-2022 ,KUNDUZGI MAGISTRATURA';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                $b = PDF::loadView('student.agreement.agreement_shows.agreements.super_magistr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                                \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                                return $b;
                            }
                        }
                    } else {
                        if ($type->edu_place == 'sirtqi') {
                            $ended = 2022 + 5 - $student->course;
                            $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' , SIRTQI';
                            $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                            $b = PDF::loadView('student.agreement.agreement_shows.agreements.sirtqi.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                'student' => $student,
                                'agreement_type' => $agreement_type,
                                'agreement_side_type' => $agreement_side_type,
                                'getting_date' => $getting_date,
                                'qr_code' => $qrcode
                            ])->download($student->fio() . '.pdf');
                            \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                            return $b;
                        } else {

                            if ($type->degree == 4) {
//                            return $agreement_type->id;
                                $ended = 2022 + 4 - $student->course;
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' ,O`qishni ko`chirish(Ukraina)';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                $b = PDF::loadView('student.agreement.agreement_shows.agreements.ukraina.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                                \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                                return $b;
                            } elseif ($student->type_student == 1) {
                                if ($student->course == 1) {
//                                    return $agreement_side_type->id.'-'.$agreement_type->id;
                                    $b = PDF::loadView('student.agreement.agreement_shows.agreements.first_course.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                        'student' => $student,
                                        'agreement_type' => $agreement_type,
                                        'agreement_side_type' => $agreement_side_type,
                                        'getting_date' => $getting_date,
                                        'dateArray' => $dateArray
                                    ])->download($student->fio() . '.pdf');
                                    \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                                    return $b;
                                } else {
//                                    return $agreement_side_type->id.'-'.$agreement_type->id;
                                    $ended = 2022 + 4 - $student->course;
//                                    $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-' . $ended . ' ,KUNDUZGI BAKALAVR';
//                                    $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                    $b = PDF::loadView('student.agreement.agreement_shows.agreements.simple_bakalavr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                        'student' => $student,
                                        'agreement_type' => $agreement_type,
                                        'agreement_side_type' => $agreement_side_type,
                                        'getting_date' => $getting_date,
//                                        'qr_code' => $qrcode,
                                        'dateArray' => $dateArray
                                    ])->download($student->fio() . '.pdf');
                                    \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                                    return $b;
                                }

                            }
                            if ($student->type_student == 2) {
                                $qr_string = 'Toshkent davlat yuridik universiteti , ' . $student->course . '-kurs , ' . $student->fio() . ',' . 'talim tugash vaqti-2022 ,KUNDUZGI MAGISTRATURA';
                                $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                                $b = PDF::loadView('student.agreement.agreement_shows.agreements.magistr.agreement_pdf_' . $agreement_side_type->id . '_' . $agreement_type->id, [
                                    'student' => $student,
                                    'agreement_type' => $agreement_type,
                                    'agreement_side_type' => $agreement_side_type,
                                    'getting_date' => $getting_date,
                                    'qr_code' => $qrcode
                                ])->download($student->fio() . '.pdf');
                                \Storage::disk('students')->put($student->fio(). $d . ".pdf", $b);
                                return $b;
                            }
                        }
                    }
                }
            }
        }
    }

    public function get_month_name($start_month)
    {

        if ($start_month == "01") {
            $start_month = "Yanvar";
        }
        if ($start_month == "02") {
            $start_month = "Fevral";
        }
        if ($start_month == "03") {
            $start_month = "Mart";
        }
        if ($start_month == "04") {
            $start_month = "Aprel";
        }
        if ($start_month == "05") {
            $start_month = "May";
        }
        if ($start_month == "06") {
            $start_month = "Iyun";
        }
        if ($start_month == "07") {
            $start_month = "Iyul";
        }
        if ($start_month == "08") {
            $start_month = "Avgust";
        }
        if ($start_month == "09") {
            $start_month = "Sentabr";
        }
        if ($start_month == "10") {
            $start_month = "Oktabr";
        }
        if ($start_month == "11") {
            $start_month = "Noyabr";
        }
        if ($start_month == "12") {
            $start_month = "Dekabr";
        }
        return $start_month;
    }

    public function convert_to_word($number)
    {
        $result = number_format($number, '2');
        $result = explode('.', $result);
        $bir = explode(',', $result[0]);
        $re_bir = array_reverse($bir);
        $ar_mln = array(
            '0' => '',
            '1' => 'ming',
            '2' => 'million',
            '3' => 'milliard'
        );
        $ar_son = array(
            '0' => '',
            '1' => 'bir',
            '2' => 'ikki',
            '3' => 'uch',
            '4' => 'to`rt',
            '5' => 'besh',
            '6' => 'olti',
            '7' => 'yetti',
            '8' => 'sakkiz',
            '9' => 'to`qqiz',
        );
        $ar_on = array(
            '0' => '',
            '1' => 'o`n',
            '2' => 'yigirma',
            '3' => 'o`ttiz',
            '4' => 'qirq',
            '5' => 'ellik',
            '6' => 'oltmish',
            '7' => 'yetmish',
            '8' => 'sakson',
            '9' => 'to`qson'
        );

        $ar_text = [];
        $i = 0;
        foreach ($re_bir as $key => $value) {
            // echo $value%10;
            if ($this->yuzlik($value) != '') {

                $ar_text[$i] = $this->yuzlik($value) . ' ' . $ar_mln[$key] . ' ';
            } else {
                $ar_text[$i] = '';
            }
            // echo yuzlik($value).' '.$ar_mln[$key].' ' ;
            $i++;
        }
        $ress = array_reverse($ar_text);
        $ress = implode(' ', $ress);
        return $ress;
    }

    public function yuzlik($yuz)
    {
        $yuz = intval($yuz);
        $ar_mln = array(
            '0' => '',
            '1' => 'ming',
            '2' => 'million'
        );
        $ar_son = array(
            '0' => '',
            '1' => 'bir',
            '2' => 'ikki',
            '3' => 'uch',
            '4' => 'to`rt',
            '5' => 'besh',
            '6' => 'olti',
            '7' => 'yetti',
            '8' => 'sakkiz',
            '9' => 'to`qqiz',
        );
        $ar_on = array(
            '0' => '',
            '1' => 'o`n',
            '2' => 'yigirma',
            '3' => 'o`ttiz',
            '4' => 'qirq',
            '5' => 'ellik',
            '6' => 'oltmish',
            '7' => 'yetmish',
            '8' => 'sakson',
            '9' => 'to`qson'
        );
        if ($yuz > 99) {
            $birlar = $yuz % 10;
            $bb = $yuz / 10;
            $onlar = $bb % 10;
            $bb = $bb / 10;
            $yuzlar = $bb % 10;
            $text = $ar_son[$yuzlar] . ' yuz ' . $ar_on[$onlar] . ' ' . $ar_son[$birlar];
        } elseif ($yuz < 100 && $yuz > 9) {
            $birlar = $yuz % 10;
            $bb = $yuz / 10;
            $onlar = $bb % 10;
            $text = $ar_on[$onlar] . ' ' . $ar_son[$birlar];
        } elseif ($yuz > 0 && $yuz < 10) {
            $text = $ar_son[$yuz];
        } else {
            $text = '';
        }

        return $text;
    }
}
