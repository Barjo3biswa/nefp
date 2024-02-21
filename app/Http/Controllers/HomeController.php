<?php

namespace App\Http\Controllers;

use App\Favourite;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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
            $buying_intersest_row = json_decode($user_info->buy_raw_materials);
            $selling_interest_row = json_decode($user_info->sell_raw_materials);
            $buying_intersest_processed = json_decode($user_info->buy_processed);
            $selling_interest_processed = json_decode($user_info->sell_processed);

            $matchedi = User::where('id',1)->get();
            $matchedii = User::where('id',1)->get();

            if($buying_intersest_row){
                $buying_matched = User::where(function($query) use ($buying_intersest_row) {
                    foreach ($buying_intersest_row as $interest) {
                        $query->orWhere('sell_raw_materials', 'like', '%' . $interest . '%');
                    }
                })->where('id','!=',$user_info->id)->get();
            }if($selling_interest_row){
                $selling_matched = User::where(function($query) use ($selling_interest_row) {
                    foreach ($selling_interest_row as $interest) {
                        $query->orWhere('buy_raw_materials', 'like', '%' . $interest . '%');
                    }
                })->where('id','!=',$user_info->id)->get();
            }

            if($buying_intersest_processed){
                $buying_matched_processed = User::where(function($query) use ($buying_intersest_processed) {
                    foreach ($buying_intersest_processed as $interest) {
                        $query->orWhere('sell_processed', 'like', '%' . $interest . '%');
                    }
                })->where('id','!=',$user_info->id)->get();
            }if($selling_interest_processed){
                $selling_matched_processed = User::where(function($query) use ($selling_interest_processed) {
                    foreach ($selling_interest_processed as $interest) {
                        $query->orWhere('buy_processed', 'like', '%' . $interest . '%');
                    }
                })->where('id','!=',$user_info->id)->get();
            }

            //buy_services_checkbox //buy_machinery_checkbox //buy_packaging_checkbox
            $mathchediii = User::where('id',1)->get();
            if($user_info->buy_services_checkbox){
               $mathchediii = $mathchediii->merge(User::where('sell_services_checkbox','yes')->where('id','!=',$user_info->id)->get());
            }if($user_info->buy_machinery_checkbox){
               $mathchediii = $mathchediii->merge(User::where('sell_machinery_checkbox','yes')->where('id','!=',$user_info->id)->get());
            }if($user_info->buy_packaging_checkbox){
                $mathchediii = $mathchediii->merge(User::where('sell_packaging_checkbox','yes')->where('id','!=',$user_info->id)->get());
            }

            $mathchediv = User::where('id',1)->get();
            if($user_info->sell_services_checkbox){
               $mathchediv = $mathchediv->merge(User::where('buy_services_checkbox','yes')->where('id','!=',$user_info->id)->get());
            }if($user_info->sell_machinery_checkbox){
               $mathchediv = $mathchediv->merge(User::where('buy_machinery_checkbox','yes')->where('id','!=',$user_info->id)->get());
            }if($user_info->sell_packaging_checkbox){
                $mathchediv = $mathchediv->merge(User::where('buy_packaging_checkbox','yes')->where('id','!=',$user_info->id)->get());
            }

            $matchediii = $mathchediii->merge($mathchediv);

            if($buying_intersest_row && $selling_interest_row){
                $matchedi = $buying_matched->merge($selling_matched);
            }else if($buying_intersest_row && !$selling_interest_row){
                $matchedi = $buying_matched;
            }else if(!$buying_intersest_row && $selling_interest_row){
                $matchedi = $selling_matched;
            }

            if($buying_intersest_processed && $selling_interest_processed){
                $matchedii = $buying_matched_processed->merge($selling_matched_processed);
            }else if($buying_intersest_processed && !$selling_interest_processed){
                $matchedii = $buying_matched_processed;
            }else if(!$buying_intersest_processed && $selling_interest_processed){
                $matchedii = $selling_matched_processed;
            }



            $matched = $matchedi->merge($matchedii);
            $matched = $matched->merge($matchediii);
        }else{
            $matched = User::where('btob_meeting','yes')->get();
        }

        // dd($matched->count());
        if ($matched->count()!=0) {
            return view('home', compact('matched'));
        } else {
            return view('print-pass', compact('user_info'));
        }

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

    // public function testFun(){
    //     dd("ok");
    // }

    public function ExiProfile(){
        $matched = User::where('Exhibition','yes')->where('exi_status','accepted')->get();
        $flag = 'exi';
        return view('profile', compact('matched','flag'));
    }

    public function BtoBProfile(){
        $matched = User::where('btob_meeting','yes')->orwhere('btog_meeting','yes')->get();
        $flag = 'bto';
        return view('profile', compact('matched','flag'));
    }

    public function ViewProfile($id){

        try {
            $decrypted = Crypt::decrypt($id);
        } catch (\Exception $e) {

        }
        $application = User::where('id',$decrypted)->first();
        return view("view-application", compact('decrypted','application'));
    }
}
