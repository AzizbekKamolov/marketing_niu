<?php

namespace Test;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getRole()
    {
        if($this->role==7)
            return "Administrator";
        if($this->role==6)
            return "Viloyat Direktori";
        if($this->role==5)
            return "Filial rahbari";
        if($this->role==4)
            return "Moderator";
        if($this->role==3)
            return "O'qituvchi";
        if($this->role==2)
            return "Hisobchi";
    }

}
