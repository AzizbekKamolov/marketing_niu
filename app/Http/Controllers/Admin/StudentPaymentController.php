<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Test\Http\Controllers\Controller;
use Test\Imports\StudentImport;
use Test\Model\Payment;
use Test\Model\StudentPayment;

class StudentPaymentController extends Controller
{
    public function index(Request $request)
    {
        $date = date('Y-m-d');

        $month = date('m');
        $dataMonth = Payment::query()->select([
            DB::raw("sum(amount) as 'summ'")
        ])->whereMonth('created_at', $month)->first();
        if ($request->to_date){
            $date = $request->to_date;
            $dataMonth = Payment::query()->select([
                DB::raw("sum(amount) as 'summ'")
            ])->whereDate('created_at', '<=', $date)->first();
        }
        $data = Payment::query()->select([
            DB::raw("sum(amount) as 'summ'")
        ])->whereDate('created_at', $date)->first();

        $payments = Payment::query()->with('student')->where(function ($query) use ($request){
            if ($request->from_date){
                $query->whereDate('created_at', '>=', $request->from_date);
            }
            if ($request->to_date){
                $query->whereDate('created_at', '<=', $request->to_date);
            }
        })->latest()->paginate();
        return view('admin.pages.payment_admin.payments.index', compact('payments', 'data', 'dataMonth'));
    }

    public function edit($id)
    {
        $data = Payment::query()->with('student')->findOrFail($id);
        return view('admin.pages.payment_admin.payments.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'passport_seria' => 'required|min:2|max:2',
            'passport_number' => 'required|digits:7',
            'amount' => 'required|numeric',
            'payment_date' => 'required|date',
            'description' => 'required',
        ]);

        $student = StudentPayment::query()
            ->where('passport_seria', $request->passport_seria)
            ->where('passport_number', $request->passport_number)
            ->first();
        if (empty($student)){
            return redirect()->back()->with('student_error', "Talaba topilmadi");
        }
        $studentPayment = Payment::query()->findOrFail($id);
        $studentPayment->amount = $request->amount;
        $studentPayment->id_code = $student->id_code;
        $studentPayment->description = $request->description;
        $studentPayment->payment_date = $request->payment_date;
        $studentPayment->student_id = $student->id;
        $studentPayment->created_by = auth()->user()->id;
        $studentPayment->update();
        return redirect()->route('get.payment.history')->with('success', "To'lov tarixi yangilandi");
    }

    public function create()
    {
        return view('admin.pages.payment_admin.payments.create');
    }
    public function store(Request $request)
    {
        $request->validate([
           'passport_seria' => 'required|min:2|max:2',
           'passport_number' => 'required|digits:7',
           'amount' => 'required|numeric',
           'payment_date' => 'required|date',
           'description' => 'required',
        ]);

        $student = StudentPayment::query()
            ->where('passport_seria', $request->passport_seria)
            ->where('passport_number', $request->passport_number)
            ->first();
        if (empty($student)){
            return redirect()->back()->with('student_error', "Talaba topilmadi");
        }
        $studentPayment = new Payment();
        $studentPayment->amount = $request->amount;
        $studentPayment->id_code = $student->id_code;
        $studentPayment->description = $request->description;
        $studentPayment->payment_date = $request->payment_date;
        $studentPayment->student_id = $student->id;
        $studentPayment->created_by = auth()->user()->id;
        $studentPayment->save();
        return redirect()->route('get.payment.history')->with('success', "To'lov tarixi yaratildi");
    }

    public function destroy($id)
    {
        $data = Payment::query()->findOrFail($id);
        $data->delete();
        return redirect()->route('get.payment.history')->with('success', "To'lov tarixi o'chirildi");
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');
        $data = \Excel::toCollection(new StudentImport, $file);
        if (count($data) >= 1) {
            $result = [];
            foreach ($data[0] as $d) {
                while (strlen($d['passport_number']) < 7){
                    $d['passport_number'] = '0' . $d['passport_number'];
                }
                $student = StudentPayment::query()->where('passport_seria', $d['passport_seria'])
                    ->where('passport_number', $d['passport_number'])
                    ->first();
                if (!empty($student)){
                    $a['id_code'] = $student->id_code;
                    $a['student_id'] = $student->id;
                    $a['amount'] = $d['amount'];
                    $a['description'] = $d['description'];
                    $a['payment_date'] = date("Y-m-d", strtotime($d['payment_date']));
                    $a['created_by'] = auth()->user()->id;
                    $a['created_at'] = date("Y-m-d H:i:s");
//                    $a['passport_seria'] = $student->passport_seria;
//                    $a['passport_number'] = $student->passport_number;
                    $result[] = $a;
                }
            }
            Payment::query()->insert($result);
            return redirect()->route('get.payment.history')->with('success', "To'lovlar tarixi saqlandi");
        }
        return redirect()->route('get.payment.history')->with('error', 'To\'lovlar tarixi saqlanmadi');
    }
}
