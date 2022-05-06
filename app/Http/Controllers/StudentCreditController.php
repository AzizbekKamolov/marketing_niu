<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Test\Model\AmountConvertToWord;
use Test\Model\Credit;
use Test\Model\CreditPayment;
use Test\Model\Student;
use Test\Model\StudentPayment;
use PDF;

class StudentCreditController extends Controller
{
    public function form()
    {
        return view('student.credits.form');
    }

    public function check(Request $request)
    {
        $input = $request->all();
        $input['id_code'] = substr($request->id_code, 6);
        $request->merge([
            'id_code' => $input['id_code']
        ]);
        if (StudentPayment::where('id_code', $request->id_code)->exists()) {
            $student = StudentPayment::where('id_code', $request->id_code)->with('creditPrice')->with('getDegree')->first();
//            return $student;
            $credits = Credit::where('id_code', $request->id_code)->get();
            $credit_payments = CreditPayment::where('id_code', $student->id_code)->get();
            return view('student.credits.result', [
                'credits' => $credits,
                'credit_payments' => $credit_payments,
                'student' => $student
            ]);
            return $student;
        } else {
            return redirect()->back()->with('error', 'Talabalar ro`yhatidan topilmadingiz marketing bo`limi bilan bog`laning');
        }
    }

    public function agreement(Request $request)
    {
        $student = StudentPayment::where('id_code', $request->id_code)->first();
        if ($student) {
            $credits = $student->credits->sum('credits') - $student->credit_payments->sum('credits');
            $summa = $credits * $student->creditPrice->price;
//            return $credits;
            $converter = new AmountConvertToWord();
            $summa_word = $converter->convert_to_word($summa);
            $summa_one_credit_word = $converter->convert_to_word($student->creditPrice->price);
            if ($credits > 0) {
                return view('student.credits.agreement', [
                    'student' => $student,
                    'credits' => $credits,
                    'summa_word' => $summa_word,
                    'summa_one_credit_word' => $summa_one_credit_word
                ]);
            } else {
                return 'Kreditingizdan qarzingiz yo`q';
            }

//            $credits = Cre
        } else {
            return 'Talabalar ro`yhatidan topilmadingiz marketing bo`limi bilan bog`laning';

        }
    }
    public function agreement_pdf(Request $request)
    {
        $student = StudentPayment::where('id_code', $request->id_code)->first();
        if ($student) {
            $credits = $student->credits->sum('credits') - $student->credit_payments->sum('credits');
            $summa = $credits * $student->creditPrice->price;
//            return $credits;
            $converter = new AmountConvertToWord();
            $summa_word = $converter->convert_to_word($summa);
            $summa_one_credit_word = $converter->convert_to_word($student->creditPrice->price);
            if ($credits > 0) {
                return PDF::loadView('student.credits.agreement_pdf', [
                    'student' => $student,
                    'credits' => $credits,
                    'summa_word' => $summa_word,
                    'summa_one_credit_word' => $summa_one_credit_word
                ])->download($student->fio().'.pdf');
            } else {
                return 'Kreditingizdan qarzingiz yo`q';
            }

//            $credits = Cre
        } else {
            return 'Talabalar ro`yhatidan topilmadingiz marketing bo`limi bilan bog`laning';

        }
    }
}
