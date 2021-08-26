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


class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        if (Auth::user()->role == 9) {
            $fc = Faculty::where('dekan_id' , Auth::user()->id)->first()->id;
            $groups = Group::where('faculty_id' , $fc)->get();
            return view('admin.pages.group.index' , [
                'data' => $groups,
            ]);
            
        }
    }

    public function attendance_all(){
        if (Auth::user()->role == 9) {
           
        }
    }

    public function select_date_index($old_date){
        if (Auth::user()->role == 9) {

            
        }
    }

    public function show($id)
    {

    }

    public function create(){
        if (Auth::user()->role == 9) {
            return view('admin.pages.group.create');
        }
    }
    public function store(Request $request){
        if (Auth::user()->role == 9) {
           $fc = Faculty::where('dekan_id' , Auth::user()->id)->first()->id;
           foreach ($request->input as $value) {
               if ($value['name'] != null && $value['students_count'] > 0) {
                   $gr = new Group();
                   $gr->name = $value['name'];
                   $gr->students_count = $value['students_count'];
                   $gr->faculty_id = $fc;
                   $gr->course = $value['course'];
                   $gr->save();

               }
           }
           return redirect(route('group.index'))->with('success' , 'Guruhlar yaratildi');
        }
    }

    public function edit( $id){

    }

    public function change(Request $request ){
      $group = Group::find($request->group_id);
      if (Auth::user()->role == 9) {
        if (Auth::user()->id == Faculty::find($group->faculty_id)->dekan_id) {
          $group->course=$request->course;
          $group->name=$request->name;
          $group->students_count=$request->students_count;
          $group->update();
          return redirect()->back()->with('success' , 'Ma`lumot o`zgartirildi');
        }
      }
    }

    public function update(Request $request , $id){
      $group = Group::find($id);
      return "dsdsd";
      if (Auth::user()->role == 9) {
        if (Auth::user()->id == Faculty::find($group->faculty_id)->dekan_id) {
          return "fdjf";
        }
      }
    }
}
