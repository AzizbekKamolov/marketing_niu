<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
//use phpDocumentor\Reflection\Type;
use Test\User;
use Test\Model\Amount;
use Test\Model\Payment;
use Test\Model\Type;

class StudentPayment extends Model
{
    protected $table='students';

    public function fio(){
        return $this->last_name.' '.$this->first_name.' '.$this->middle_name;
    }

    public function payments(){
        $payments = Payment::where('id_code' , $this->id_code)->get();
        return $payments;
    }
    public  function type(){
        return $this->belongsTo('Test\Model\Type');
    }

    public function get_type_name(){
        $type = Type::find($this->status_new);
        return $type->name;
    }
    public function get_type(){
        $type = Type::find($this->status_new);
        return $type;
    }

}
