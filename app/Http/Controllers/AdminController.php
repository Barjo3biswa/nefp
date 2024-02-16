<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{

    public function index(){
        return view("admin.index");
    }

    public function application($id){
        // dd($id);
        try {
            $decrypted = Crypt::decrypt($id);
        } catch (\Exception $e) {

        }
        $application = User::get();
        return view("admin.application-list", compact('decrypted','application'));
    }
}
