<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;

class Type extends Model
{
    protected  $table = 'types';

    public function agreement_types(){
        return $this->belongsToMany(AgreementType::class , 'student_type_agreement_types' , 'type_id' , 'agreement_type_id' , 'id')->withPivot('price_part1' , 'price_part2' , 'price_part1_word' , 'price_part2_word' , 'price');
    }
//    public function agreement_types_self(){
//        return $this->hasMany(StudentTypeAgreementType::class , 'type_id' , 'id');
//    }
    public function agreement_side_types(){
        return $this->belongsToMany(AgreementSideType::class , 'student_type_agreement_side_types' , 'type_id' , 'agreement_side_type_id' , 'id');
    }
    public function other_agreement_types(){
        return $this->belongsToMany(OtherAgreementType::class , 'student_type_other_agreement_types' , 'type_id' , 'other_agreement_type_id' , 'id');
    }
    public function allamount()
    {
        $a = $this->amount;
        $a = strrev($a);
        $a = wordwrap($a , 3 , '.' , true );
        $a = strrev($a);
        $all = $this->name." :  ".$this->amount." - ".$this->amount_word;
       return $all;
    }

    public function credit_price()
    {
        return $this->hasOne(CreditPrice::class, 'id', 'degree');
    }

}
