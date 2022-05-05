<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Test\Model\AmountConvertToWord;
use Test\Model\Credit;
use Test\Model\CreditPayment;
use Test\Model\Student;
use Test\Model\StudentPayment;

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
            $student = StudentPayment::where('id_code', $request->id_code)->first();
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
            $summa = $credits * 207407;
            $converter = new AmountConvertToWord();
            $summa_word = $converter->convert_to_word($summa);
            if ($credits > 0) {
                if ($student->type->degree == 4) {
                    return view('student.credits.agreement_perevod', [
                        'student' => $student,
                        'credits' => $credits,
                        'summa' => $summa
                    ]);
                }
                return view('student.credits.agreement', [
                    'student' => $student,
                    'credits' => $credits,
                    'summa_word' => $summa_word
                ]);
            } else {
                return redirect()->back()->with('error', 'Kreditingizdan qarzingiz yo`q');
            }

//            $credits = Cre
        } else {
            return redirect()->back()->with('error', 'Talabalar ro`yhatidan topilmadingiz marketing bo`limi bilan bog`laning');

        }
    }
}
