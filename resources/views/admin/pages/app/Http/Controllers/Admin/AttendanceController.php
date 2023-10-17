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
use PDF;
session_start();

class AttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function check_user_session(){
        $my_session = $_SESSION['token'];
        if (Auth::user()->token == $my_session) {
                return 1;
            }
            else{
                return 0;
            }    
    }
    

    public function statistic_by_faculty(){
        if (time() < strtotime('17:30')) {
            $date = date('Y-m-d' , strtotime('-1 day'));
            $yesterday = date('Y-m-d' , strtotime($date.'-1 day'));
            if (date('w' , strtotime($yesterday)) == 6) {
                $date = date('Y-m-d' , strtotime($date.'- 2 day'));
            }
        }
        else{
            $date = date('Y-m-d');

        }

       
        $faculties = Faculty::all();

            
          // return $all;
        // return $data[1]->groups;
        return view('admin.pages.attendance.statistics.index' , [
            'data' => $faculties,
            'date' => $date,
        ]);
    }
    public function statistic_six_day(){
        if (time() < strtotime('17:30')) {
            $date = date('Y-m-d' , strtotime('-1 day'));
            $yesterday = date('Y-m-d' , strtotime($date.'-1 day'));
            if (date('w' , strtotime($yesterday)) == 6) {
                $date = date('Y-m-d' , strtotime($date.'- 2 day'));
            }
        }
        else{
            $date = date('Y-m-d');

        }

       
        $faculties = Faculty::all();

            
          // return $all;
        // return $data[1]->groups;
        return view('admin.pages.attendance.statistics.index_hafta' , [
            'data' => $faculties,
            'date' => $date,
        ]);
    }

    public function statistic_by_date(Request $request){
        if (isset($request->date_attendance)) {
            $date = $request->date_attendance;
        }
        else{
            if (time() < strtotime('17:30:00')) {
                $date = date('Y-m-d' , strtotime('- 1 day'));
                 $yesterday = date('Y-m-d' , strtotime($date.'-1 day'));
                if (date('w' , strtotime($yesterday)) == 6) {
                    $date = date('Y-m-d' , strtotime($date.'- 2 day'));
                }
            }
            else{
                $date = date('Y-m-d');
            }
        }
        $faculties = Faculty::all();
        return view('admin.pages.attendance.statistics.index' , [
            'data' => $faculties,
            'date' => $date,
        ]);

    }

    public function statistic_by_group($id){
        
    }

    public function statistic_by_group_date(Request $request , $id){

    }



    public function index()
    {
        if (Auth::user()->role == 9) {
            if (Faculty::where('dekan_id' , Auth::user()->id)->exists()) {
                
            
                $fc = Faculty::where('dekan_id' , Auth::user()->id)->first()->id;
                $date = date('Y-m-d');
                $data = DB::table('groups as g')->select([
                    'g.id',
                    'g.name',
                    'g.students_count',
                    'g.course',
                    'a.have1',
                    'a.have2',
                    'a.have3',
                    'a.have4',
                    'a.have5',
                    'a.have6'
                ])
                ->leftJoin('attendances as a' , function($join1 ){
                    $join1->on('g.id' , 'a.group_id');
                    $join1->where('date' , date('Y-m-d'));
                })
                ->where('g.faculty_id' , $fc)
                ->orderBy('g.course')
                ->orderBy('g.name')
                ->get();

                $old_date = date('Y-m-d' , strtotime($date . '- 1 day'));

                $old_data = DB::table('groups as g')->select([
                    'g.id',
                    'g.name',
                    'g.students_count',
                    'g.course',
                    'a.have1',
                    'a.have2',
                    'a.have3',
                    'a.have4',
                    'a.have5',
                    'a.have6',
                    'a.date',
                ])
                ->leftJoin('attendances as a' , function($join1 ) use ($old_date){
                    $join1->on('g.id' , 'a.group_id');
                    $join1->where('date' , $old_date);
                })
                ->where('g.faculty_id' , $fc)

                ->get();
              
                if (time() < strtotime('17:45:00') && count($data)) {
                    $permission = 1;
                }
                else{
                    $permission = 0;
                }
                // return $old_data;
                return view('admin.pages.attendance.index' , [
                    'data' => $data,
                    'old_data' => $old_data,
                    'permission' => $permission,
                ]);
            }
            else{
                return "siz fakultetga bog'lanmagansiz";
            }
        }
    }

    public function attendance_all(){
        if (Auth::user()->role == 9) {
            $start_date = date('Y-m-d');
            $end_date = date('Y-m-d' , strtotime($start_date . '-7 day'));
            $fc = Faculty::where('dekan_id' , Auth::user()->id)->first()->id;
            $all = Attendance::where('faculty_id' , $fc)->with('group')->get()->groupBy('date')->reverse();
            
            return view('admin.pages.attendance.all' , [
                'data' => $all,
                'start_date' => $start_date,
                'end_date' => $end_date,
            ]);
        }
    }

    public function attendance_between_date(Request $request){
        if (Auth::user()->role == 9) {
            $fc = Faculty::where('dekan_id' , Auth::user()->id)->first()->id;
            $all = Attendance::where('faculty_id' , $fc)->with('group')->get()->groupBy('date')->reverse();
            $start_date = date('Y-m-d' , strtotime($request->start_date));
            $end_date = date('Y-m-d' , strtotime($request->end_date));
            return view('admin.pages.attendance.all' , [
                'data' => $all,
            ]);
        }
    }

    public function select_date_index($old_date){
        if (Auth::user()->role == 9) {

            $fc = Faculty::where('dekan_id' , Auth::user()->id)->first()->id;
            $date = date('Y-m-d');
            $data = DB::table('groups as g')->select([
                'g.id',
                'g.name',
                'g.students_count',
                'g.course',
                'a.have1',
                'a.have2',
                'a.have3',
                'a.have4',
                'a.have5',
                'a.have6'
            ])
            ->leftJoin('attendances as a' , function($join1 ){
                $join1->on('g.id' , 'a.group_id');
                $join1->where('date' , date('Y-m-d'));
            })
            ->where('g.faculty_id' , $fc)
            ->get();

            $old_data = DB::table('groups as g')->select([
                'g.id',
                'g.name',
                'g.students_count',
                'g.course',
                'a.have1',
                'a.have2',
                'a.have3',
                'a.have4',
                'a.have5',
                'a.have6'
            ])
            ->leftJoin('attendances as a' , function($join1 ) use ($old_date){
                $join1->on('g.id' , 'a.group_id');
                $join1->where('date' , $old_date);
            })
            ->where('g.faculty_id' , $fc)

            ->get();
            // return $data;
            return view('admin.pages.attendance.index' , [
                'data' => $data,
                'old_data' => $old_data,
            ]);
        }
    }

    public function show($id)
    {

    }

    public function create(){

    }
    public function store(Request $request){
        if (Auth::user()->role == 9) {
            $fc = Faculty::where('dekan_id' , Auth::user()->id)->first()->id;
            $date = date('Y-m-d');
            // return $request;
            foreach($request->have as $k => $t){
                $l_count = 0;
                if (Attendance::where('group_id' , $k)->where('date' , date('Y-m-d'))->exists()) {
                    $at = Attendance::where('group_id' , $k)->where('date' , date('Y-m-d'))->first();
                }
                else{

                $at = new Attendance();
                }
                $at->date = $date;
                if ($t['have1']) {
                    $l_count++;
                }
                if ($t['have2']) {
                    $l_count++;
                }
                if ($t['have3']) {
                    $l_count++;
                }
                if ($t['have4']) {
                    $l_count++;
                }
                if ($t['have5']) {
                    $l_count++;
                }
                if ($t['have6']) {
                    $l_count++;
                }
                if ($t['have1']) {
                    
                $at->have1 = $t['have1'];
                }
                if ($t['have2']) {
                    
                $at->have2 = $t['have2'];
                }
                if ($t['have3']) {
                    
                $at->have3 = $t['have3'];
                }
                if ($t['have4']) {
                    
                $at->have4 = $t['have4'];
                }
                if ($t['have5']) {
                    
                $at->have5 = $t['have5'];
                }
                if ($t['have6']) {
                    
                $at->have6 = $t['have6'];
                }
                $at->dekan_id = Auth::user()->id;
                $fff = Group::find($k);
                $at->faculty_id = $fff->faculty_id;
                $at->group_id = $k;
                $at->lesson_count = $l_count;
                $at->save();
            }
            return redirect()->back();
        }
    }

    public function edit( $id){

    }



    public function update(Request $request , $id){

    }
}
