<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $table = "monitoring";
    protected $fillable = [
        'student_id','schedule_id',
        'created_by','updated_by',
        'is_attended'
    ];

    public function student()
    {
        return $this->belongsTo('Test\Model\Student');
    }
    public function schedule()
    {
        return $this->belongsTo('Test\Model\Schedule');
    }
}
