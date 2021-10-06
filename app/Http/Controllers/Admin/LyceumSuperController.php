<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Test\Model\BranchAdmin;
use Test\Model\Group;
use Test\Model\Super;
use Test\Model\Region;
use Test\Model\Area;
use Test\Model\Faculty;
use Test\Model\Attendance;
use Test\Model\SuperLyceum;
use Test\Model\LyceumAmount;
use PDF;


class LyceumSuperController extends Controller
{
    public function super_index(){
        $students = SuperLyceum::all();
        return view('admin.pages.lyceum_super.index' , [
            'data' => $students
        ]);
    }
    public function super_index_by_status($status){
        $students = SuperLyceum::where('status' , $status)->get();
        return view('admin.pages.lyceum_super.index' , [
            'data' => $students
        ]);
    }
    public function super_show($id){
        $student = SuperLyceum::find($id);
        return  view('admin.pages.lyceum_super.show' , [
            'data' => $student
        ]);
    }
    public function lyceum_accept(Request $request){
        $student = SuperLyceum::find($request->super_id);
        $amount = LyceumAmount::find($request->amount_id);
        if ($amount && $student){
            $student->status = 2;
            $student->amount_id = $amount->id;
            $student->update();
        }
        return redirect()->back()->with('success' , 'Ariza tasdiqlandi');
    }
    public function reject_super_lyceum($id){
        $student = SuperLyceum::find($id);
        $student->status = 1;
        $student->amount_id = null;
        $student->update();
        return redirect()->back()->with('success' , 'Ariza bekor qilindi');
    }
    public function super_index_by_amount($amount){
        $students = SuperLyceum::where('amount_id' , $amount)->get();
        return view('admin.pages.lyceum_super.index' , [
            'data' => $students
        ]);
    }
}
