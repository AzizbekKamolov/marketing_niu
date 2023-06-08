<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    public function fio()
    {
        $fio = '';
        $student = StudentPayment::where('id_code' , $this->id_code)->first();
        if ($student){
            $fio = $student->fio();
        }
        return $fio;
    }
    protected $fillable = ['id_code', 'credits', 'description'];
}
