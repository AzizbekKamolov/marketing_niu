<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Test\Model\BranchAdmin;
use Test\Model\GettingAgreement;
use Test\Model\Group;
use Test\Model\Student;
use Test\Model\Region;
use Test\Model\Area;
use Test\Model\StudentPayment;
use Test\Model\Super;
use Test\Model\Direction;
use Test\Model\Amount;
use PDF;
use Test\Model\Type;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function super_mar_type_sum($type){
//        $students = Student::where('status' , '=' , $type)->where('summa' , $sum)->get();
        $students = StudentPayment::where('status_new' , '=' , $type)->get();
        // return $students;

        return view('admin.pages.shartnoma.index' , [
            'data' => $students,
            'type' => 'super'
        ]);
    }


    public function student_magistr(){
        $students = Student::where('course' , 5)->where('type' , 2)->where('status' , 0)->get();
        return view('admin.pages.magistr.index' , [
            'data' => $students,
        ]);
    }
    public function student_magistr_create(){
        $regions = Region::all();
        return view('admin.pages.magistr.create' , [
            'regions' => $regions,
        ]);
    }
    public function student_magistr_store(Request $request){
            $input = $request->all();
        // return $request;
          $p_seria = $request->passport_seria;
          $p_number = $request->passport_number;


        $validator = Validator::make($input, [
            'passport_seria' => [
                'required' ,
                Rule::unique('students_shartnoma')->where(function($query) use($p_seria , $p_number){
                    return  $query->where('passport_seria' , $p_seria)->where('passport_number' , $p_number);
                }),
            ],
            'passport_number' => ['required'],
            'birthday' => ['required'],
            'id_code' => ['required' , 'unique:students_shartnoma'],
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
        $student->status = 0;
        $student->type = 2;
        $student->status_original = 2;
        $student->course = 5;

        if ($student->save()) {
          return redirect(route('student.create'))->with('success' , 'Ma`lumot qo\'shildi');

        }
        else{
          return redirect(route('student.create'))->with('error' , 'Xatolik iltimos keyinroq qaytadan urinib koring');

        }
    }


    public function amount_type_marketing($type){
        $students = Super::where('status' , 2)->where('type' , 1)->where('amount_id' , $type)->orderBy('id' , 'ASC')->get();
        // return "d"
        return view('admin.pages.tasdiqlanganlar.index' , [
            'type' => 1,
            'amount_type' => $type,
            'data' => $students,
        ]);
    }
    public function give_id_by_type($type){
        $students = Super::where('status' , 2)->where('type' , 1)->where('amount_id' , $type)->orderBy('id' , 'ASC')->paginate(20);
        return view('admin.pages.tasdiqlanganlar.give_id_code' , [
            'data' => $students,
        ]);
    }

    public function rozilik_student($id){
        $student = StudentPayment::find($id);
        $getting = GettingAgreement::where('student_id' , $student->id)->where('status' , 1)->first();
        return PDF::loadView('admin.pages.shartnoma.rozilik_pdf' , ['data' => $student , 'getting' => $getting])->download($student->fio().'.pdf');
    }

    public function stat(){
        $data = DB::table('dir as d')->select([
            'd.name',
            DB::raw("COUNT(s.id) as count")
        ])
        ->leftJoin('super as s' , function($join1){
            $join1->on('d.id' , '=' , 's.dir');
            $join1->where('type' , '=' , 1);
        })
        ->groupBy( 'd.name')->get();
        $data2 = DB::table('super as d')->select([
            'd.dir',
            DB::raw("COUNT(d.id) as count")
        ])
        ->where('type' , 2)
        ->groupBy( 'd.dir')->get();
        // return $data;
        return view('site.stat.index' , [
            'data' => $data,
            'data2' => $data2
        ]);

    }

    public function store_id_code(Request $request){
        // return $request;
        if (\Auth::user()->role == 6) {
            foreach ($request->input as $key=>$value) {
                $super = Super::find($key);
                if ($super != null) {
                    if ($super->status == 2) {
                        if ($super->amount_id != null) {
//                            $student = new Student();
                            $new_student = new StudentPayment();
                            $new_student->id_code = $value;
                            $new_student->status_new = $super->amount_id;
                            $new_student->first_name = $super->first_name;
                            $new_student->last_name = $super->last_name;
                            $new_student->middle_name = $super->middle_name;
                            $new_student->birthday = $super->birthday;
                            $new_student->birthday = $super->birthday;
                            $new_student->type_student = $super->type;
                            $new_student->passport_seria = $super->passport_serial;
                            $new_student->passport_number = $super->passport_number;
                            $new_student->passport_jshir = $super->passport_jshshir;
                            $new_student->course = 1;
                            $new_student->chechked = 1;
                            $new_student->status_check = 1;
                            $new_student->phone = $super->phone;
                            $new_student->dir = $super->dir;
                            $new_student->lang = $super->lang;
                            $new_student->gender = $super->gender;
                            $new_student->ball = $super->ball;
                            $new_student->save();
                            $super->status = 3;
                            $super->update();
//                            return $request;
                        }
                    }
                }
            }
            return redirect()->back()->with('success' , 'Barchasiga id kodlar berildi');
        }
    }

    public function super_give_id_code(){
        $students = Super::where('status' , 2)->where('type' , 1)->paginate(20);
        return view('admin.pages.tasdiqlanganlar.give_id_code' , [
            'data' => $students,
        ]);
    }

    public function super_give_id_code_magister($type){
        $amount = Amount::find($type);
        $students = Super::where('status' , 2)->where('type' , 2)->where('amount_id' , $amount->id)->paginate(20);
        return view('admin.pages.tasdiqlanganlar.give_id_code' , [
            'data' => $students,
            'amount_type' => $amount->id,
        ]);
    }

    public function super_for_marketing(){
        $students = Super::where('status' , 2)->where('type' , 1)->orderBy('id' , 'ASC')->paginate(20);
        return view('admin.pages.tasdiqlanganlar.index' , [
            'type' => 1,

            'data' => $students,
        ]);
    }

    public function super_for_marketing_magister(){
        $students = Super::where('status' , 2)->where('type' , 2)->paginate(20);
        return view('admin.pages.tasdiqlanganlar.index' , [
            'type' => 2,

            'data' => $students,
        ]);
    }
    public function super_for_marketing_magister_by_amount($type){
        $amount = Type::find($type);
        $students = Super::where('status' , 2)->where('type' , 2)->where('amount_id' , $amount->id)->get();
        return view('admin.pages.tasdiqlanganlar.index' , [
            'type' => 2,
            'amount_type' => $amount->id,
            'data' => $students,
        ]);
    }

    public function index()
    {
//          $students = Student::where('status' , '<>' , 3)->where('status' , '<>' , 4)->paginate(20);
          $students = StudentPayment::orderBy('id' , 'DESC')->get();
          return view('admin.pages.shartnoma.index' , [
          	'data' => $students,
          ]);
    }

    public function index_super_id_berilgan()
    {

//          $students = StudentPayment::where('status' , '=' , 3)->orWhere('status' , '=' , 4)->get();
//          // return $students;
//
//          return view('admin.pages.shartnoma.index' , [
//              'data' => $students,
//              'type' => 'super'
//          ]);
    }

    public function show($id)
    {
    	$student = StudentPayment::find($id);
      $regions = Region::all();
      return view('admin.pages.shartnoma.show' , [
        'data' => $student,
        'regions' => $regions
      ]);
    }

    public function create(){
      $regions = Region::all();

      return view('admin.pages.shartnoma.create' , [
        'regions' => $regions,
      ]);
    }
    public function store(Request $request){
      $input = $request->all();
        // return $request;
      $p_seria = $request->passport_seria;
      $p_number = $request->passport_number;


        $validator = Validator::make($input, [
            'passport_seria' => [
                'required' ,
                Rule::unique('students_shartnoma')->where(function($query) use($p_seria , $p_number){
                    return  $query->where('passport_seria' , $p_seria)->where('passport_number' , $p_number);
                }),
            ],
            'passport_number' => ['required'],
            'birthday' => ['required'],
            'id_code' => ['required' , 'unique:students_shartnoma'],
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
        if ($request->status == 0){
            $student->status = 0;
            $student->status_original = 1;
//            $student->course = 1;
            $student->type = 1;
        }
        elseif ($request->status == 5){
            $student->status = 5;
            $student->status_original = 1;
            $student->course = 1;
            $student->type = 1;
        }


        if ($student->save()) {
          return redirect(route('student.create'))->with('success' , 'Ma`lumot qo\'shildi');

        }
        else{
          return redirect(route('student.create'))->with('error' , 'Xatolik iltimos keyinroq qaytadan urinib koring');

        }
    }

    public function edit( $id){
      $student = StudentPayment::find($id);
      $regions = Region::all();
      return view('admin.pages.shartnoma.edit' , [
        'data' => $student,
        'regions' => $regions
      ]);
    }

    public function search_student($data){
      // return $data;
      $data2 = trim($data);
      $data3 = str_replace(' ', '', $data);
      // return $data2;
      $students = DB::table('students_shartnoma as ss')->select([
        'ss.id',
        'ss.id_code',
        'ss.first_name',
        'ss.last_name',
        'ss.middle_name',
        'ss.phone',
        'ss.passport_seria',
        'ss.passport_number',
      ])
       ->where(function($query) use ($data3){
            $query->where('ss.first_name' , 'like' , '%'.$data3.'%');
            $query->orWhere('ss.last_name' , 'LIKE' , '%'.$data3.'%');
            $query->orWhere('ss.id_code' , 'LIKE' , '%'.$data3.'%');
            $query->orWhere('ss.middle_name' , 'LIKE' , '%'.$data3.'%');
            $query->orWhere('ss.passport_seria' , 'LIKE' , '%'.$data3.'%');
            $query->orWhere('ss.passport_number' , 'LIKE' , '%'.$data3.'%');
            $query->orWhere('ss.phone' , 'LIKE' , '%'.$data3.'%');
            $query->orWhere( DB::raw('CONCAT(ss.last_name,"",ss.first_name,"",ss.middle_name)'), 'LIKE' , '%'.$data3.'%');
            $query->orWhere( DB::raw('CONCAT(ss.last_name,"",ss.middle_name,"",ss.first_name)'), 'LIKE' , '%'.$data3.'%');
            $query->orWhere( DB::raw('CONCAT(ss.first_name,"",ss.middle_name,"",ss.last_name)'), 'LIKE' , '%'.$data3.'%');
            $query->orWhere( DB::raw('CONCAT(ss.first_name,"",ss.last_name,"",ss.middle_name)'), 'LIKE' , '%'.$data3.'%');
            $query->orWhere( DB::raw('CONCAT(ss.middle_name,"",ss.last_name,"",ss.first_name)'), 'LIKE' , '%'.$data3.'%');
            $query->orWhere( DB::raw('CONCAT(ss.middle_name,"",ss.first_name,"",ss.last_name)'), 'LIKE' , '%'.$data3.'%');
            $query->orWhere( DB::raw('CONCAT(ss.passport_seria,"",ss.passport_number)'), 'LIKE' , '%'.$data3.'%');
            $query->orWhere( DB::raw('CONCAT(ss.passport_seria,"",ss.passport_number)'), 'LIKE' , '%'.$data3.'%');
        })
       ->pluck('ss.id');
       $sts = Student::whereIn('id' , $students)->paginate(20);
       return view('admin.pages.shartnoma.index' , [
        'data' => $sts,
        'search_result_text' => $data2,
       ]);
    }

    public function update(Request $request , $id){
      $student = Student::find($id);
      $input = $request->all();
        // return $request;


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
        if ($request->type_student) {
            if ($request->type_student == 'mag') {
                $student->type = 2;
                $student->course = 5;
                $student->status = 0;
                $student->status_original=2;
            }
            elseif($request->type_student == 'bak'){
                $student->status = 5;
                $student->type = 1;
                $student->course = 1;
                $student->status_original = 1;

            }
        }
        if ($student->status == 1 || $student->status == 5)  {
            $student->step = $request->shartnoma_type;
        }

        if ($student->update()) {
          return redirect(route('student.edit' , ['id' => $student->id]))->with('success' , 'Ma`lumot o\'zgartirildi');

        }
        else{
          return redirect(route('student.edit' , ['id' => $student->id]))->with('error' , 'Xatolik iltimos keyinroq qaytadan urinib koring');

        }
    }
}
