<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;

class Admin extends Model
{
    protected $table='admin';
    protected $fillable = [
        'full_name','birthdate',
        'region_id','address','passport_info',
        'phone','create_by','updated_by','gender'
    ];

    public function region()
    {
        return $this->belongsTo('Test\Model\Region');
    }
    public function user()
    {
        return $this->belongsTo('Test\User');
    }
    public function getCreator()
    {
        if(User::where("id",$this->created_by)->exists())
            return User::find($this->created_by)->name;
        else
            return "Aniqlanmadi :(";
    }
    public function getUpdater()
    {
        if(User::where("id",$this->updated_by)->exists())
            return User::find($this->updated_by)->name;
        else
            return "Aniqlanmadi :(";
    }
    public function getGender()
    {
        if($this->gender==0)
            return "Erkak";
        else return "Ayol";
    }
    public function branch()
    {
        return $this->hasMany('Test\Model\Branch');
    }
}
