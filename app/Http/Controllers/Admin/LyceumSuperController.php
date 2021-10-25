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
use Test\Model\Lyceum;
use Test\Model\Attendance;
use Test\Model\SuperLyceum;
use Test\Model\LyceumAmount;
use PDF;
use Test\Exports\LyceumExportAll;
use Maatwebsite\Excel\Facades\Excel;


class LyceumSuperController extends Controller
{
    public function students_index()
    {
        $students = Lyceum::with('amount')->get();
        return view('admin.pages.lyceum_students.index', [
            'data' => $students
        ]);
        return $students;
    }

    public function students_show($id)
    {
        $students = Lyceum::with('amount')->find($id);
        return view('admin.pages.lyceum_students.show', [
            'data' => $students
        ]);
//        return $students;
    }

    public function super_index()
    {
        $students = SuperLyceum::all();
        return view('admin.pages.lyceum_super.index', [
            'data' => $students
        ]);
    }

    public function super_index_by_status($status)
    {
        $students = SuperLyceum::where('status', $status)->get();
        return view('admin.pages.lyceum_super.index', [
            'data' => $students
        ]);
    }

    public function super_index_parent_data($status)
    {
        $students = SuperLyceum::where('parent_pass_seria', null)->orwhere('parent_pass_number', null)->orwhere('parent_address', null)->orwhere('parent_name', null)->orwhere('id_code_marketing', null)->get();
        return view('admin.pages.lyceum_super.index_parent_data', [
            'data' => $students
        ]);
    }

    public function super_show($id)
    {
        $student = SuperLyceum::find($id);
        return view('admin.pages.lyceum_super.show', [
            'data' => $student
        ]);
    }

    public function lyceum_accept(Request $request)
    {


        $student = SuperLyceum::find($request->super_id);
        $amount = LyceumAmount::find($request->amount_id);
        if ($amount && $student) {
            $student->status = 2;
            $student->amount_id = $amount->id;
            $student->update();
            if ($student->parent_name && $student->parent_pass_seria && $student->parent_pass_number && $student->address && $student->birthday && $student->id_code_marketing) {
                if (Lyceum::where('id_code', $student->id_code_marketing)->exists()) {
                    $new_l = Lyceum::where('id_code', $student->id_code_marketing)->first();
                } else {
                    $new_l = new Lyceum();
                }
                $new_l->last_name = $student->last_name;
                $new_l->first_name = $student->first_name;
                $new_l->middle_name = $student->middle_name;
                $new_l->address = $student->address;
                $new_l->dir = $student->dir;
                $new_l->birthday = $student->birthday;
                $new_l->parent_name = $student->parent_name;
                $new_l->address = $student->address;
                $new_l->parent_pass_seria = $student->parent_pass_seria;
                $new_l->parent_pass_number = $student->parent_pass_number;
                $new_l->id_code = $student->id_code_marketing;
                $new_l->amount_id = $student->amount_id;
                $new_l->save();
                $student->status = 3;
                $student->update();
            }
        }
        return redirect()->back()->with('success', 'Ariza tasdiqlandi');
    }

    public function reject_super_lyceum($id)
    {
        $student = SuperLyceum::find($id);
        $student->status = 1;
        $student->amount_id = null;
        $student->update();
        return redirect()->back()->with('success', 'Ariza bekor qilindi');
    }

    public function super_index_by_amount($amount)
    {
        $students = SuperLyceum::where('amount_id', $amount)->get();
        return view('admin.pages.lyceum_super.index', [
            'data' => $students
        ]);
    }

    public function edit_parent_data($id)
    {
        $students = SuperLyceum::find($id);
        return view('admin.pages.lyceum_super.edit_parent_data', [
            'data' => $students
        ]);
    }

    public function update_parent_data(Request $request, $id)
    {
//        return $request;
        $request->validate([
            'parent_name' => 'required',
            'parent_pass_seria' => 'required',
            'parent_pass_number' => 'required',
            'address' => 'required',
            'birthday' => 'required',
            'id_code_marketing' => 'required',
        ]);
        $student = SuperLyceum::find($id);
        if ($student) {
            $student->parent_name = $request->parent_name;
            $student->parent_pass_seria = $request->parent_pass_seria;
            $student->parent_pass_number = $request->parent_pass_number;
            $student->address = $request->address;
            $student->birthday = $request->birthday;
            $student->id_code_marketing = $request->id_code_marketing;
            $student->update();
            if ($request->id_code_marketing && $student->status == 2) {
                if (Lyceum::where('id_code', $student->id_code_marketing)->exists()) {
                    $new_l = Lyceum::where('id_code', $student->id_code_marketing)->first();
                } else {
                    $new_l = new Lyceum();
                }
                $new_l->last_name = $student->last_name;
                $new_l->first_name = $student->first_name;
                $new_l->middle_name = $student->middle_name;
                $new_l->address = $student->address;
                $new_l->dir = $student->dir;
                $new_l->birthday = $student->birthday;
                $new_l->parent_name = $student->parent_name;
                $new_l->parent_address = $student->parent_address;
                $new_l->parent_pass_seria = $student->parent_pass_seria;
                $new_l->parent_pass_number = $student->parent_pass_number;
                $new_l->id_code = $student->id_code_marketing;
                $new_l->amount_id = $student->amount_id;
                $new_l->save();
            }
        }
        return redirect()->back()->with('success', 'Malumot saqlandi');
    }

    public function export_all()
    {
        return Excel::download(new LyceumExportAll, 'lyceum_super_all.xlsx');
    }
}
