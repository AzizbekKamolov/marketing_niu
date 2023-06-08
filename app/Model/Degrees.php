<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
class Degrees extends Model
{
    protected $table = "tb_degrees";
    public $timestamps = true;
}