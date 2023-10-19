<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;

class Year extends Model
{
    protected $table='years';

    public function months(){
        return $this->hasMany(Month::class , 'year_id' , 'id');
    }

}
