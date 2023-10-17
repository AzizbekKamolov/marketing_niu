<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;

class Faculty extends Model
{
    protected $table='faculties';

    public function get_dekan(){
        $user = User::find($this->dekan_id);
        return $user;
    }

    public function groups(){
    	return $this->hasMany('Test\Model\Group');
    }

    public function studentCount(){
    	$ss = Group::where('faculty_id' , $this->id)->sum('students_count');
    	return $ss;
    }

    public function attendance_by_date($date){
    	// $att1 = Attendance::where('faculty_id' , $this->id)->where('date' , $date)->sum('have1');
    	// $att2 = Attendance::where('faculty_id' , $this->id)->where('date' , $date)->sum('have2');
    	// $att3 = Attendance::where('faculty_id' , $this->id)->where('date' , $date)->sum('have3');
    	// $att4 = Attendance::where('faculty_id' , $this->id)->where('date' , $date)->sum('have4');
    	// $att5 = Attendance::where('faculty_id' , $this->id)->where('date' , $date)->sum('have5');
    	// $att6 = Attendance::where('faculty_id' , $this->id)->where('date' , $date)->sum('have6');
    	// $att = $att1 + $att2 + $att3 + $att4 + $att5 + $att6;
    	// $rtt = Attendance::where('faculty_id' , $this->id)->where('date' , $date)->get();
    	// $gr_count = 0;


    }
    
}
