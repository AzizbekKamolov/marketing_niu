<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;

class Discount extends Model
{
    protected $table='discounts';
    public function agreement_type(){
        return $this->belongsTo(OtherAgreementType::class , 'agreement_id' , 'id');
    }
}
