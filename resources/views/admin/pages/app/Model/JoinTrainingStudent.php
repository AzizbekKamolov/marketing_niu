<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class JoinTrainingStudent extends Model
{
    protected $table="joint_training_students";
    public $timestamps = false;
    public function fio()
    {
        return $this->last_name . ' ' . $this->first_name . ' ' . $this->middle_name;
    }

}
