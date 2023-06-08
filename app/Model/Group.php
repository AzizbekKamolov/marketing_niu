<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;
use Test\Model\Faculty;

class Group extends Model
{
    protected $table='groups';

    public function get_faculty(){
        $user = Faculty::find($this->faculty_id);
        return $user;
    }

    public function get_dekan(){
        $user = User::find($this->dekan_id);
        return $user;
    }
    
}
