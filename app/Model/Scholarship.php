<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;

class Scholarship extends Model
{
    protected $table = 'scholarships';
    protected $guarded = [];
    public function student(){
        return $this->belongsTo(StudentPayment::class , 'id_code' , 'id_code');
    }
    public function month(){
        return $this->belongsTo(Month::class , 'month_id' , 'id');
    }
}
