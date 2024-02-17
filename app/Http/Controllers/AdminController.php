<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{

    public function index(){
        $exibition  = User::where('Exhibition','yes')->get()->count();
        $btob_meeting  = User::where('btob_meeting','yes')->get()->count();
        $btog_meeting  = User::where('btog_meeting','yes')->get()->count();
        // dd("ok");
        return view("admin.index",compact('exibition','btob_meeting','btog_meeting'));
    }

    public function application($id){
        // dd($id);
        try {
            $decrypted = Crypt::decrypt($id);
        } catch (\Exception $e) {

        }
        if($decrypted=='all'){
            $application = User::get();
        }else if($decrypted=='b2b'){
            $application = User::where('btob_meeting','yes')->get();
        }else if($decrypted=='b2g'){
            $application = User::where('btog_meeting','yes')->get();
        }else if($decrypted=='exi'){
            $application = User::where('Exhibition','yes')->get();
        }

        return view("admin.application-list", compact('decrypted','application'));
    }
}
