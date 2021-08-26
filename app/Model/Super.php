<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Test\Model\Amount;
use Test\Model\Direction;
use Test\Model\Lang;

class Super extends Model
{
    protected $table = "super";


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

     public function getType()
    {
        if($this->type==1)
        {
            return "Bakalavr";
        }
        
        if($this->type==2)
        {
            return "Magister";
        }
        

    }



    public function fio(){
        $fio = $this->last_name." ".$this->first_name." ".$this->middle_name;
        return $fio;
    }

    public function getAmount(){
        $amount = Amount::find($this->amount_id);
        return $amount;
    }

    public function dir(){
        $dir = Direction::where('id' , $this->dir)->where('status' , 1)->first();
        return $dir;
    }

    public function lang(){
        $dir = Lang::where('id' , $this->lang)->where('status' , 1)->first();
        return $dir;
    }



}