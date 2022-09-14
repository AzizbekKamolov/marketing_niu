<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;

class MarketingStudent extends Model
{
    protected $table='students_shartnoma';
    protected $fillable = [
        'id_code','last_name',
        'first_name','middle_name','birthday',
        'gender','phone','region','area','address','passport_seria' , 'passport_number','passport_given_date','passport_given_by','status' , 'ttj' , 'summa'
    ];

    public function fio(){
    	$fio = $this->last_name." ".$this->first_name." ".$this->middle_name;
    	return $fio;
    }

    
}
