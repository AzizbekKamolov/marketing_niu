<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;
use Test\Model\Faculty;
use Test\Model\Group;

class Attendance extends Model
{
    protected $table='attendances';

    public function get_faculty(){
        $user = Faculty::find($this->faculty_id);
        return $user;
    }

    public function faculty(){
        return $this->belongsTo('Test\Model\Faculty');
    }

    public function get_dekan(){
        $user = User::find($this->dekan_id);
        return $user;
    }
    public function get_group(){
        $user = Group::find($this->group_id);
        return $user;
    }
    public function group(){
        return $this->belongsTo('Test\Model\Group');
    }
    
}
