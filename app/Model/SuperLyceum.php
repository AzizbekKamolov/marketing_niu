<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;

class SuperLyceum extends Model
{
    protected  $table = 'kollej_shartnoma_super';

    public function fio(){
        $text = $this->last_name.' '.$this->first_name.' '.$this->middle_name;
        return $text;
    }
    public function lang(){
        $dir = Lang::where('id' , $this->lang)->where('status' , 1)->first();
        return $dir;
    }
    public function getStatus()
    {
        if($this->status==0)
        {
            return "Status nol";
        }
        if($this->status==1)
        {
            return "Ariza topshirgan";
        }
        if($this->status==2)
        {
            return "Tasdiqlangan";
        }
        if($this->status==3)
        {
            return "ID berilgan";
        }

    }
    public function amount(){
        return $this->belongsTo(LyceumAmount::class , 'amount_id' , 'id');
    }
}
