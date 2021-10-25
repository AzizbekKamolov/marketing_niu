<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Test\Imports\CommandStudentImport;
use Test\Model\CommandStudent;
use Test\Model\Discount;
use PDF;
use Test\Model\StudentPayment;
use Test\Model\StudentTypeAgreementType;
use Test\Model\Type;


class CommandController extends Controller
{
    public function index()
    {
        $commandstudents = CommandStudent::all();
        return view('admin.pages.super_admins.command.index', [
            'data' => $commandstudents
        ]);
    }

    public function import(Request $request)
    {
        $rows = Excel::toCollection(new CommandStudentImport, $request->file('file'));
        $last_att = CommandStudent::orderBy('attempt', 'DESC')->first();
        if ($rows) {
            if ($rows[0]) {
                foreach ($rows[0] as $row) {
                    $student = StudentPayment::where('id_code', $row['id_code'])->first();
                    if (!CommandStudent::where('id_code', $row->id_code)->exists()) {
                        if ($student) {
                            $type = Type::find($student->status_new);
                            if ($type) {
                                $student_type_agr = StudentTypeAgreementType::where('type_id', $type->id)->first();
                                if ($student_type_agr) {
                                    if ($student_type_agr->price != null) {
                                        $part_pr = $student_type_agr->price / 4;
                                        if ($row['payment'] > $part_pr) {
                                            $new_c = new CommandStudent();
                                            $new_c->id_code = $student->id_code;
//                                        return $student->direction;
                                            if ($student->direction) {
                                                $new_c->dir = $student->direction->name;
                                            }
                                            $new_c->need = $student_type_agr->price;
                                            $new_c->fio = $student->fio();
                                            $new_c->payment = $row['payment'];
                                            $new_c->date = date('Y-m-d');
                                            $new_c->phone = $student->phone;
                                            $new_c->passport = $student->passport_seria . $student->passport_number;
                                            $new_c->attempt = $last_att->attempt + 1;
                                            $new_c->save();
                                        }
                                    }
                                }
                            }
                        }
                    }

                }
            }
        }
        return redirect()->back()->with('success', 'Yuklandi');
    }
}
