<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;

class Type extends Model
{
    protected  $table = 'types';

    public function agreement_types(){
        return $this->belongsToMany(AgreementType::class , 'student_type_agreement_types' , 'type_id' , 'agreement_type_id' , 'id');
    }
    public function agreement_side_types(){
        return $this->belongsToMany(AgreementSideType::class , 'student_type_agreement_side_types' , 'type_id' , 'agreement_side_type_id' , 'id');
    }

}
