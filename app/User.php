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
    protected $guarded = [];

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
        switch ($this->role){
            case 777: echo "Superadmin"; break;
            case 6: echo "Admin"; break;
            case 5: echo "Dekan"; break;
            case 8: echo "Stat"; break;
            case 9: echo "Dekan"; break;
            case 10: echo "Statistika davomat"; break;
            case 11: echo "Payment admin"; break;
            case 12: echo "TTJ admin"; break;
            case 13: echo "Bakalavr"; break;
            case 14: echo "Litsey Admin(super) "; break;
            case 15: echo "Litsey Admin"; break;
        }
//        if($this->role==7)
//            return "Administrator";
//        if($this->role==6)
//            return "Viloyat Direktori";
//        if($this->role==5)
//            return "Filial rahbari";
//        if($this->role==4)
//            return "Moderator";
//        if($this->role==3)
//            return "O'qituvchi";
//        if($this->role==2)
//            return "Hisobchi";
    }

}
