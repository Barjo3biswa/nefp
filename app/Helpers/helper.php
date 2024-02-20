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

