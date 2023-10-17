<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Amount extends Model
{
    protected $table = "amount";


    public function getStatus()
    {
        if($this->status==0)
        {
            return "Nofaol";
        }
        if($this->status==1)
        {
            return "Faol";
        }
    }

    public function allamount()
    {
        $a = $this->amount;
        $a = strrev($a);
        $a = wordwrap($a , 3 , '.' , true );
        $a = strrev($a);
        $all = $this->name." :  ".$this->amount." - ".$this->amount_word;
       return $all;
    }



}