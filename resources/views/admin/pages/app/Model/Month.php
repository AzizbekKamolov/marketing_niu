<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;

class Month extends Model
{
    protected $table='month';

    public function scholarships(){
        return $this->hasMany(Scholarship::class , 'month_id' , 'id');
    }

    public function year(){
        return $this->belongsTo(Year::class , 'year_id' , 'id');
    }

}
