<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
class Certificate extends Model
{
    protected $table = "tb_certs";
    public $timestamps = true;
}