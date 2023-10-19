<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Test\Model\BranchAdmin;
use Test\Model\Group;
use Test\Model\Month;
use Test\Model\Year;

class MonthController extends Controller
{
    public function index(){
        $years = Year::orderBy('id' , 'DESC')->get();
        $months = Month::all();
//        return $years[0]->months;
        return view('admin.pages.payment_admin.scholarship.month' , [
            'months' => $months,
            'years' => $years
        ]);
    }
}
