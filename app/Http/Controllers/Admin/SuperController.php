<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Test\Model\BranchAdmin;
use Test\Model\Group;
use Test\Model\PassedBall;
use Test\Model\Super;
use Test\Model\Region;
use Test\Model\Area;
use Test\Model\Direction;
use PDF;


class SuperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function amount_magistr_type($id)
    {
        $student = Super::where('type', 2)->where('amount_id', $id)->where(function ($query) {
            $query->where('status', 2);
            $query->orWhere('status', 3);
        })->get();
        // return $student;
        return view('admin.pages.super.index', [
            'data' => $student,
        ]);
    }

    public function magister_dir_lang_super($dir, $id)
    {
        $dir = Direction::find($dir);
        $supers = Super::where('dir', $dir->id)->where('lang', $id)->where('type', 2)->where('status', 1)->get();
        return view('admin.pages.super.index', [
            'data' => $supers,
        ]);
        return $supers;
    }


    public function dir_lang_type($dir, $lang)
    {
        $user = \Auth::user();
        $mag = Super::where('dir', $dir)->where('lang', $lang)->where('status', 1)->where(function ($user_role) use ($user) {
            if ($user->role == 13) {
                $user_role->where('type', $user->type);
                $user_role->where('comment', $user->comment);
            }
        })->get();
        return view('admin.pages.super.index', [
            'data' => $mag,
        ]);
    }

    public function amount_type($type)
    {
        $user = \Auth::user();
        $mag = Super::where(function ($user_role) use ($user) {
            if ($user->role == 13) {
                $user_role->where('type', $user->type);
                $user_role->where('comment', $user->comment);
            }
        })->where('amount_id', $type)->get();
//         $mag = Super::where('type' , 1)
//         ->where('amount_id' , $type)->get();


        return view('admin.pages.super.index', [
            'data' => $mag,
        ]);
    }

    public function magistr_index()
    {
        $mag = Super::where('type', 2)->where('status', 1)->get();
        return view('admin.pages.super.index', [
            'data' => $mag,
        ]);
    }

    public function pdf_for_super($id)
    {
        $student = Super::find($id);
        return PDF::loadView('site.super.ariza_pdf', ['data' => $student])->download($student->last_name . $student->first_name . '.pdf');
    }

    public function tasdiqlash(Request $request)
    {
//         return "Texnik ishlar";
        if (\Auth::user()->role == 13) {
            $user = \Auth::user();
            if (Super::find($request->super_id)->exists()) {
                $super = Super::find($request->super_id);
                if ($super->comment == $user->comment && $super->type == $user->type) {
                    $super->status = 2;
                    $super->amount_id = $request->amount_id;
                    $super->update();
                    return redirect()->back()->with('success', 'Ariza tasdiqlandi!');
                }

            } else {
                return redirect()->back()->with('error', 'Ariza topilmadi!');

            }
        }
    }

    public function bekor_qilish($id)
    {
        if (\Auth::user()->role == 13) {
             $user = \Auth::user();
            if (Super::find($id)->exists()) {
                     $super = Super::find($id);
                 if ($super->comment == $user->comment && $super->type == $user->type) {
                     $super->status = 1;
                     $super->amount_id = null;
                     $super->update();
                     return redirect()->back()->with('success', 'Ariza bekor qilindi!');
                 }
            } else {
                return redirect()->back()->with('error', 'Ariza topilmadi!');

            }
        }
    }

    public function index()
    {
        $user = \Auth::user();
        $students = Super::where(function ($user_role) use ($user) {
            if ($user->role == 13) {
//                $user_role->where('type', $user->type);
                $user_role->where('comment', $user->comment);
            }
        })->get();
        // return $students;

        return view('admin.pages.super.index', [
            'data' => $students,
        ]);
    }

    public function show($id)
    {
        $student = Super::find($id);
        $regions = Region::all();
        $passed_ball = PassedBall::where('type' , $student->type)->where('dir' , $student->dir)->where('lang' , $student->lang)->where('comment' , $student->comment)->first();
        return view('admin.pages.super.show', [
            'data' => $student,
            'regions' => $regions,
            'passed_ball' => $passed_ball
        ]);
    }

    public function create()
    {
        $regions = Region::all();

        return view('admin.pages.super.create', [
            'regions' => $regions,
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        return $request;


        $validator = Validator::make($input, [
                'passport_seria' => ['required'],
                'passport_number' => ['required'],
                'birthday' => ['required'],
                'id_code' => ['required'],
                'first_name' => ['required'],
                'last_name' => ['required'],
                'middle_name' => ['required'],
                'gender' => ['required'],
                'phone' => ['required'],
                'region' => ['required'],
                'area' => ['required'],
                'address' => ['required'],
                'passport_given_by' => ['required'],
                'passport_given_date' => ['required'],
                'passport_issued_date' => ['required'],
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        // return $request;

        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->middle_name = $request->middle_name;
        $student->passport_seria = $request->passport_seria;
        $student->passport_number = $request->passport_number;
        $student->passport_given_by = $request->passport_given_by;
        $student->passport_given_date = $request->passport_given_date;
        $student->passport_issued_date = $request->passport_issued_date;
        $student->area = $request->area;
        $student->region = $request->region;
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->birthday = $request->birthday;
        $student->id_code = $request->id_code;

        if ($student->save()) {
            return redirect(route('super.create'))->with('success', 'Ma`lumot qo\'shildi');

        } else {
            return redirect(route('super.create'))->with('error', 'Xatolik iltimos keyinroq qaytadan urinib koring');

        }
    }

    public function edit($id)
    {
        // $student = Super::find($id);
        // $regions = Region::all();
        // return view('admin.pages.super.edit' , [
        //     'data' => $student,
        //     'regions' => $regions
        // ]);
    }

    public function search_student($data)
    {
        // return $data;
        $data2 = trim($data);
        $data3 = str_replace(' ', '', $data);
        // return $data2;
        $students = DB::table('students_shartnoma as ss')->select([
            'ss.id',
            'ss.first_name',
            'ss.last_name',
            'ss.middle_name',
            'ss.phone',
            'ss.passport_seria',
            'ss.passport_number',
        ])
            ->where(function ($query) use ($data3) {
                $query->where('ss.first_name', 'like', '%' . $data3 . '%');
                $query->orWhere('ss.last_name', 'LIKE', '%' . $data3 . '%');
                $query->orWhere('ss.middle_name', 'LIKE', '%' . $data3 . '%');
                $query->orWhere('ss.passport_seria', 'LIKE', '%' . $data3 . '%');
                $query->orWhere('ss.passport_number', 'LIKE', '%' . $data3 . '%');
                $query->orWhere('ss.phone', 'LIKE', '%' . $data3 . '%');
                $query->orWhere(DB::raw('CONCAT(ss.last_name,"",ss.first_name,"",ss.middle_name)'), 'LIKE', '%' . $data3 . '%');
                $query->orWhere(DB::raw('CONCAT(ss.last_name,"",ss.middle_name,"",ss.first_name)'), 'LIKE', '%' . $data3 . '%');
                $query->orWhere(DB::raw('CONCAT(ss.first_name,"",ss.middle_name,"",ss.last_name)'), 'LIKE', '%' . $data3 . '%');
                $query->orWhere(DB::raw('CONCAT(ss.first_name,"",ss.last_name,"",ss.middle_name)'), 'LIKE', '%' . $data3 . '%');
                $query->orWhere(DB::raw('CONCAT(ss.middle_name,"",ss.last_name,"",ss.first_name)'), 'LIKE', '%' . $data3 . '%');
                $query->orWhere(DB::raw('CONCAT(ss.middle_name,"",ss.first_name,"",ss.last_name)'), 'LIKE', '%' . $data3 . '%');
                $query->orWhere(DB::raw('CONCAT(ss.passport_seria,"",ss.passport_number)'), 'LIKE', '%' . $data3 . '%');
                $query->orWhere(DB::raw('CONCAT(ss.passport_seria,"",ss.passport_number)'), 'LIKE', '%' . $data3 . '%');
            })
            ->pluck('ss.id');
        $sts = Student::whereIn('id', $students)->paginate(20);
        return view('admin.pages.super.index', [
            'data' => $sts,
            'search_result_text' => $data2,
        ]);
    }

    public function update(Request $request, $id)
    {
        $student = Super::find($id);
        $input = $request->all();
        // return $request;


        $validator = Validator::make($input, [
                'passport_serial' => ['required'],
                'passport_number' => ['required'],
                'first_name' => ['required'],
                'last_name' => ['required'],
                'middle_name' => ['required'],
                'gender' => ['required'],
                'phone' => ['required'],
                'region' => ['required'],
                'area' => ['required'],
                'address' => ['required'],
                'dtm_id' => ['required'],
                'ball' => ['required'],
                'dir' => ['required'],
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->middle_name = $request->middle_name;
        $student->passport_serial = $request->passport_serial;
        $student->passport_number = $request->passport_number;
        $student->tuman = $request->area;
        $student->viloyat = $request->region;
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->dtm_id = $request->dtm_id;
        $student->ball = $request->ball;
        $student->dir = $request->dir;

        if ($student->update()) {
            return redirect(route('super.edit', ['id' => $student->id]))->with('success', 'Ma`lumot o\'zgartirildi');

        } else {
            return redirect(route('super.edit', ['id' => $student->id]))->with('error', 'Xatolik iltimos keyinroq qaytadan urinib koring');

        }
    }

    public function super_index_accepteds()
    {
        $user = \Auth::user();
        $students = Super::where(function ($user_role) use ($user) {
            if ($user->role == 13) {
                $user_role->where('type', $user->type);
                $user_role->where('comment', $user->comment);
            }
        })->where('status', '>', 1)->get();
        // return $students;

        return view('admin.pages.super.index', [
            'data' => $students,
        ]);
    }
}
