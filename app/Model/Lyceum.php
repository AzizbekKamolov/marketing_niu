<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;

class Lyceum extends Model
{
    protected $table='kollej_shartnoma';
    

    public function fio(){
        $fio = $this->last_name." ".$this->first_name." ".$this->middle_name;
        return $fio;
    }

    public function status(){
        if ($this->status == 0) {
            return "Olmagan";
        }
        elseif($this->status == 1){
            return "Olgan";
        }
        elseif($this->status == 2){
            return "Chetlatilgan";
        }
    }

    
}
