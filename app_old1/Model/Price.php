<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;

class Price extends Model
{
    protected  $table = 'prices';
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
