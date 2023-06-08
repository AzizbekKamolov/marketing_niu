<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class StudentTypeAgreementType extends Model
{
    public function agreement_type(){
        return $this->belongsTo(AgreementType::class , 'agreement_type_id');
    }

    public function agreement_side_type(){
        return $this->belongsTo(AgreementSideType::class , 'agreement_side_type_id');
    }
}
