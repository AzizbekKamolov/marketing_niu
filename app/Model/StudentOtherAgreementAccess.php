<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class StudentOtherAgreementAccess extends Model
{
    protected $table = 'student_other_agreement_access';
    public function student(){
        return $this->belongsTo(Student::class , 'student_id' , 'id');
    }
    public function other_agreement(){
        return $this->belongsTo(OtherAgreementType::class , 'other_agreement_type_id' , 'id');
    }
}
