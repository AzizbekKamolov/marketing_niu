<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Test\Model\BranchAdmin;
use Test\Model\Group;
use Test\Model\Student;
use Test\Model\Region;
use Test\Model\Area;


class AreaController extends Controller
{
    
    public function get_area_by_region($id){
      $areas = Area::where('region_id' , $id)->get();
      return json_decode($areas);
    }
}
