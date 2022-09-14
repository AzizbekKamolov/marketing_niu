<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;

class Student extends Model
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

    public function getAmount(){
        $amount = Amount::find($this->summa);
        return $amount;
    }

    public function status(){
         if ($this->status == 0 && $this->type == 2 && $this->course == 5) {
            return "Magister";
        }
        if ($this->status == 0) {
            return "Olmagan";
        }
        elseif($this->status == 1){
            return "Olgan";
        }
        elseif($this->status == 2){
            return "Chetlatilgan";
        }
        elseif($this->status == 3){
            return "Superkontrakt(bakalavr)";
        }
        elseif($this->status == 4){
            return "Superkontrakt(magister)";
        }
        elseif($this->status == 5){
            return "Bakalavr 1-kurs";
        }
        elseif($this->status == 6){
            return "Magister 1-kurs";
        }
        elseif($this->status == 10){
            return "Degree1 Belarus";
        }
        elseif($this->status == 20){
            return "Degree2 Qozoq";
        }
        
    }

    
}
