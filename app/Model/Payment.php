<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;

class Payment extends Model
{
    protected  $table = 'payments';
    public function student(){
        return $this->belongsTo(StudentPayment::class, 'student_id', 'id');
    }
}
