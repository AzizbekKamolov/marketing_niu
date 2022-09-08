<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Test\Model\Super;
use Illuminate\Support\Facades\Hash;
use Test\Model\Student;
use Test\Model\Result;
use Test\Model\Lyceum;
use Test\Model\Magister;
use App;
use Test\User;

//use Test\Rules\Captcha;


class TogirlaController extends Controller
{



public function getting()
   {
       $user = User::where('username' , 'dekan4')->first();
    $user->password = Hash::make('admin456');
    $user->update();
    return $user;
      

   }


//    public function togirla()
//    {
//    		$r = Result::all();
//    		// return substr('ddo123123123', 2);
// // $rr = $r[0]->passort_number;
//    		// return $rr;
//    		foreach ($r as $value) {
//    			$rr = strlen($value->passport_number);
//    			// return $value->passport_number;
//    			$yy = 7-$rr;
//    			$gg = '';
//    			for ($i = 0; $i < $yy ; $i++) {
//    				$gg = $gg.'0';
//    			}
//    			$value->passport_number = $gg.$value->passport_number;
//    			$value->update();
//    		}

//    }

    public function dtmid()
   {
         $r = Super::where('phone' , null)->get();
        foreach ($r as $value) {
           $f = Result::where('passport_jshshir' , $value->passport_jshshir)->first();
           $value->phone = $f->phone;
           $value->update();
        }

   }

   public function lyceum(){
    $ll = Lyceum::all();
    foreach ($ll as $value) {
      $value->parent_pass_number = str_replace(' ', '', $value->parent_pass_number);
      $value->update();
    }
    return $ll;
    
   }

}