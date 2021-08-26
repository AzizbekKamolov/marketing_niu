<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Test\Model\Direction;
use Test\Model\Lang;


class Result extends Model
{
    protected $table = "result_structure_ready";
    public $timestamps = false;


    public function getStatus()
    {
        if($this->status==0)
        {
            return "Status nol";
        }
        if($this->status==1)
        {
            return "Status 1";
        }
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