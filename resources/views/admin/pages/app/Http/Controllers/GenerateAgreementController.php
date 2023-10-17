<?php

namespace Test\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Test\Model\AgreementSideType;
use Test\Model\AgreementType;
use Test\Model\AmountConvertToWord;
use Test\Model\Discount;
use Test\Model\GettingAgreement;
use Test\Model\StudentPayment;
use Test\Model\StudentTypeAgreementType;
use Test\Model\Type;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateAgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gettings = GettingAgreement::where('status', 1)->where('pdf_generate' , 0)->get();
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '8192M');
        foreach ($gettings as $getting) {
            $student = StudentPayment::find($getting->student_id);
            if ($student) {
                $type = Type::find($student->status_new);
                $agreement_side_type = AgreementSideType::find($getting->agreement_side_type_id);
                if ($agreement_side_type && $type) {
                    $agreement_type = AgreementType::find($getting->agreement_type_id);
                    if ($agreement_type) {
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
                        if ($getting) {
                            $getting_date = $getting->getting_date;
                        }
                        $dateArray['year'] = date('Y', strtotime($getting_date));
                        $dateArray['month'] = $this->get_month_name(date('m', strtotime($getting_date)));
                        $dateArray['day'] = date('d', strtotime($getting_date));
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
                        if ($student->status_new == 24 && $student->course == 4 && $agreement_type->id == 1) {
                            $student->all_summa = 17623245.0;
                        }
                        $qr_string = "Toshkent davlat yuridik universiteti\n" . $student->first_name . ' ' . $student->last_name . "\nJami to`lov summasi: " . $student->all_summa . " so`m\nKursi: " . $student->course;
                        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(iconv('latin1', 'utf-8', $qr_string)));
                        $pdfFile = PDF::loadView('student.agreements_by_id.show.type_' . $type->id . '.side_type_' . $agreement_side_type->id . '.agreement_type_' . $agreement_type->id . '.course_' . $student->course, [
                            'student' => $student,
                            'agreement_type' => $agreement_type,
                            'agreement_side_type' => $agreement_side_type,
                            'getting_date' => $getting_date,
                            'dateArray' => $dateArray,
                            'which_process' => 'pdf',
                            'qrcode' => $qrcode
                        ]);
                        \Storage::put('public/'.$student->passport_seria.$student->passport_number.'/agreement.pdf', $pdfFile->output());
                        $getting->pdf_generate = 1;
                        $getting->update();
//                        return $pdfFile->download('invoice.pdf');
                    }
                }
            }
        }
        return $gettings;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
