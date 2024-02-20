<?php

namespace App\Http\Controllers;

use App\Favourite;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if(Auth::check()){
            $user_info = User::where('id',Auth::User()->id)->first();
            $buying_intersest = json_decode($user_info->buy_raw_materials);
            $selling_interest = json_decode($user_info->sell_raw_materials);

            $matched = [];
            if($buying_intersest){
                $buying_matched = User::where(function($query) use ($buying_intersest) {
                    foreach ($buying_intersest as $interest) {
                        $query->orWhere('sell_raw_materials', 'like', '%' . $interest . '%');
                    }
                })->where('id','!=',$user_info->id)->get();
            }

            if($selling_interest){
                $selling_matched = User::where(function($query) use ($selling_interest) {
                    foreach ($selling_interest as $interest) {
                        $query->orWhere('buy_raw_materials', 'like', '%' . $interest . '%');
                    }
                })->where('id','!=',$user_info->id)->get();
            }

            if($buying_intersest && $selling_interest){
                $matched = $buying_matched->merge($selling_matched);
            }else if($buying_intersest && !$selling_interest){
                $matched = $buying_matched;
            }else if(!$buying_intersest && $selling_interest){
                $matched = $selling_matched;
            }
        }else{
            $matched = User::where('btob_meeting','yes')->get();
        }

        return view('home', compact('matched'));
    }


    public function printPass(){
        $user_info = User::where('id',Auth::User()->id)->first();
        return view('print-pass', compact('user_info'));
    }

    public function makeFav(Request $request){
        $user_id = Auth::user()->id;
        $check = Favourite::where(['fav_by' => $user_id, 'fav_to' => $request->id])->first();
        $flag = 'Active';
        if($check){
            if($check->status == 'Active'){
                $flag = 'Deactive';
            }else{
                $flag = 'Active';
            }
        }
        Favourite::updateOrCreate(
            ['fav_by' => $user_id, 'fav_to' => $request->id],
            ['status' => $flag]);
        return response()->json(['success' => true, 'data' => $flag]);
    }

    public function testFun(){
        dd("ok");
    }
}
