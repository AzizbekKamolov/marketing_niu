<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class CreditPrice extends Model
{
    public function getDegree()
    {
        return $this->belongsTo(StudentDegree::class , 'degree' , 'degree');
    }
    protected $guarded = [];
}
