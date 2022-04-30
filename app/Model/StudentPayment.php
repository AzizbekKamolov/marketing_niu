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
    protected $table = 'students';

    public function fio()
    {
        return $this->last_name . ' ' . $this->first_name . ' ' . $this->middle_name;
    }

    public function payments()
    {
        $payments = Payment::where('id_code', $this->id_code)->get();
        return $payments;
    }

    public function type()
    {
        return $this->belongsTo('Test\Model\Type', 'status_new', 'id');
    }

    public function get_type_name()
    {
        $type = Type::find($this->status_new);
        return $type->name;
    }

    public function get_type()
    {
        $type = Type::find($this->status_new);
        return $type;
    }

    public function getting_agreements()
    {
        return $this->hasMany(GettingAgreement::class, 'student_id', 'id');
    }

    public function agreement_discounts()
    {
        return $this->hasMany(Discount::class, 'id_code', 'id_code')->where('type_agreement' , 1);
    }
    public function other_agreement_discounts()
    {
        return $this->hasMany(Discount::class, 'student_id', 'id')->where('type_agreement' , 2);
    }
    public function has_access_other_agreement($other_agreement_type_id){
        if (StudentOtherAgreementAccess::where('student_id' , $this->id)->where('other_agreement_type_id' , $other_agreement_type_id)->exists()){
            return 1;
        }
        else{
            return 0;
        }
    }
    public function getting_agreement(){
        return $this->hasMany(GettingAgreement::class , 'student_id' , 'id')->where('status' , '=' , 1);
    }
    public function status_getting(){
        if (GettingAgreement::where('student_id' , $this->id)->where('status' , 1)->exists()){
            return 1;
        }
        else{
            return 0;
        }
    }

}
