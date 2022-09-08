<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Test\Model\Direction;
use Test\Model\Lang;


class Degree extends Model
{
    protected $table = "degree";
   // public $timestamps = false;


    public function getStatus()
    {
        if($this->status==0)
        {
            return "Status nol";
        }
        if($this->status==1)
        {
            return "Faol";
        }
    }
    public function getType()
    {
        if($this->type==0)
        {
            return "Belarus";
        }
        if($this->type==1)
        {
            return "Kazakhstan";
        }
    }




}