<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Test\Model\Discount;
use PDF;


class DiscountController extends Controller
{
    public function destroy(Request $request){
        $disc = Discount::find($request->discount_id);
        if ($disc){
            $disc->delete();
            return redirect()->back()->with('success' , 'Ma`lumot o`chirildi');
        }
        return redirect()->back()->with('error' , 'Ma`lumot topilmadi');
    }
    public function store(Request $request){
        $disc = new Discount();
        $disc->student_id = $request->student_id;
        $disc->type_agreement = $request->type;
        $disc->agreement_id = $request->agreement_id;
        $disc->percent = $request->percent;
        $disc->student_id = $request->student_id;
        $disc->description = $request->description;
        $disc->save();
        return redirect()->back()->with('success' , 'Ma`lumot saqlandi');
//        return $request;
    }
}
