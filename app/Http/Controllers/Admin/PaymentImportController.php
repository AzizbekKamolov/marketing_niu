<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Imports\PaymentImport;
use Test\Model\Payment;

class PaymentImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => ['required' , 'file']
        ]);
        $file = $request->file('file');
        $response = \Excel::toCollection(new PaymentImport , $file);
        if (count($response) >= 1){
        $sum = $response[0]->sum('payment');
            return view('admin.pages.payment_admin.student.importInfo')->with([
                'data' => $response[0],
                'sum' => $sum
            ]);
        }
        return $response[0];
    }

    public function import_save(Request $request)
    {
        $request->validate([
            'description' => ['required' , 'string'],
            'array' => ['required']
        ]);
        $description = $request->description;
        $array = json_decode($request->array);
        foreach ($array as $item) {
            $new_payment = new Payment();
            $new_payment->amount = $item->payment;
            $new_payment->id_code = $item->id;
            $new_payment->description = $description;
            $new_payment->save();
        }
        return redirect(route('payment_admin.student.index'))->with('success' , 'Import qilindi');
    }
}
