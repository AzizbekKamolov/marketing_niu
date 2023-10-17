<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Amount;

class ResultLyceum extends Model
{
    protected  $table = 'kollej_shartnoma_result';

    public function status_petition(){
        $result = [];
        if (!SuperLyceum::where('id_code' , $this->id_code)->exists()){
            $result['status'] = 0;
        }
        else{
            $super = SuperLyceum::where('id_code' , $this->id_code)->first();
            if ($super->status == 1){
                $result['status'] = 1;
                $result['super'] = $super;
            }
            elseif($super->status == 2){
                $type = Type::find($super->amount_id);
                $result['status'] = 2;
                $result['super'] = $super;
                $result['type'] = $type;
            }
        }
        return $result;
    }
}
