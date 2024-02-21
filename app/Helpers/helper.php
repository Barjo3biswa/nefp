<?php

use App\Favourite;
use Illuminate\Support\Facades\Auth;

function testHelper($fav_to){
    $flag = Favourite::where('fav_by',Auth::User()->id)->where('fav_to',$fav_to)->where('status','Active')->first();
    if($flag){
        return true;
    }else{
        return false;
    }

}

function getGuardName(){
    $guard = auth()->guard();
    $fullName = $guard->getName(); // Full name, e.g., "login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"
    $nameParts = explode('_', $fullName);
    $guardType = $nameParts[1];
    return $guardType;
}

