<?php

namespace Test\Http\Controllers\Admin;

use Test\Model\StudentPayment;
use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Test\Model\BranchAdmin;
use Test\Model\Group;
use Test\Model\Scholarship;
use Test\Imports\StipendiyaImport;
use Excel;

class ScholarshipController extends Controller
{
    public function index(Request $request){
        $scholarships = Scholarship::where('month_id' , $request->month_id)->get();
        return view('admin.pages.payment_admin.scholarship.scholarship' , [
            'data' => $scholarships
        ]);
        return $scholarships;
    }

    public function scholarship_by_student(Request $request){
        $student = StudentPayment::where('id_code' , $request->id_code)->first();
        $scholarships = Scholarship::where('id_code' , $request->id_code)->get();
        return view('admin.pages.payment_admin.scholarship.scholarship_by_student' , [
            'data' => $scholarships,
            'student' => $student
        ]);
    }
    public function import(Request $request){
//        return $request;
//        if ($request->hasFile('excel_file')){
//            return "dfdf";
//        }
        $file = $request->file('excel_file');
//        return $file;
        Excel::import(new StipendiyaImport, $file);
//        return response()->json($collection);
    }
}
