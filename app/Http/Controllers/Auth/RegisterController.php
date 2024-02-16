<?php

namespace App\Http\Controllers\Auth;

use App\DomainOfInterest;
use App\Http\Controllers\Controller;
use App\ProcFood;
use App\Product;
use App\ProfileType;
use App\Providers\RouteServiceProvider;
use App\RawMaterial;
use App\State;
use App\SubOfDiscussion;
use App\Turnover;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegistrationForm()
    {
        $states = State::where('status','Active')->get();
        $profile_type = ProfileType::where('status','Active')->get();
        $product = Product::where('status','Active')->orderby('name')->get();
        $turnover = Turnover::where('status','Active')->get();
        $domain = DomainOfInterest::where('status','Active')->get();
        $sub_of_discuss = SubOfDiscussion::where('status','Active')->get();
        $raw_materials = RawMaterial::where('status','Active')->get();
        $buy_processed = ProcFood::where('status','Active')->get();
        return view('auth.register',compact('states','profile_type','product','turnover','domain','sub_of_discuss','raw_materials','buy_processed'));
    }


    protected function validator(array $data)
    {
        // dd( $data);

        $rules =
            [

                'f_name' => ['required', 'string', 'max:255'],
                'l_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mobile_no' => ['required', 'min:10', 'max:10', 'unique:users'],
                'organization' => ['required', 'string', 'max:255' ],
                'Designation' => ['required', 'string', 'max:255' ],
                'state' => ['required', 'string', 'max:255' ],
                'pin_code' => ['required', 'string', 'max:255' ],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'profile_type'=> ['required', 'string', 'max:255' ],
                'product_img' => "mimes:pdf|max:5120",
                // 'first' => ['required', 'string', 'max:255'],
                // 'second' => ['required', 'string', 'max:255'],
                // 'third' => ['required', 'string', 'max:255'],
            ];
        if(isset($data['Exhibition'])){
            $rules = array_merge($rules, [
                'product' => 'required|array',
                "turnover" => ['required', 'string', 'max:255'],
                "fssai" => ['required', 'string', 'max:255'],
                "imp_exp" => ['required', 'string', 'max:255'],
                "gst" => ['required', 'string', 'max:255'],
            ]);
            if($data['fssai']=='yes'){
                $rules = array_merge($rules, [
                    "license_no" => ['required', 'string', 'max:255'],
                ]);
            }
        }
        // if(isset($data['btob_meeting'])){
        //     $rules = array_merge($rules, [
        //         "buy_raw_materials" => ['required_without:buy_processed,buy_others', 'string', 'max:255'],
        //         "buy_processed" => ['required_without:buy_raw_materials,buy_others', 'string', 'max:255'],
        //         "buy_others" => ['required_without:buy_raw_materials,buy_processed', 'string', 'max:255'],

        //         "sell_raw_materials" => ['required', 'string', 'max:255'],
        //         "sell_processed" => ['required', 'string', 'max:255'],
        //         "sell_others" => ['required', 'string', 'max:255'],
        //     ]);
        // }
        if(isset($data['btog_meeting'])){
            $rules = array_merge($rules, [
                "domain" => 'required|array',
                "sub_of_dis" => 'required|array',
            ]);
            // if($data['sub_of_dis']=='Others'){
            //     $rules = array_merge($rules, [
            //         "other_discussion" => ['required', 'string', 'max:255'],
            //     ]);
            // }
        }
        return Validator::make($data, $rules);
    }

    function encode_decode($value){
       return json_encode( $value);
    }
    protected function create(array $data)
    {
        // dd($data);
        $path = null;
        if(isset($data['product_img'])){
            $destinationPath = public_path('uploads/nefp2024');
                $uploaded_photo = $data['product_img'];
                $uploaded_photo_name = date('YmdHis') . "_" . rand(4512, 6859).".". $uploaded_photo->getClientOriginalExtension();
                $uploaded_photo->move($destinationPath . "/", $uploaded_photo_name);
            $path = 'uploads/nefp2024/'.$uploaded_photo_name;
            // dd('uploads/nefp2024/'.$uploaded_photo_name);
        }

        return User::create([
            'first_name' => $data['f_name'],
            'middle_name' => $data['m_name'],
            'last_name' => $data['l_name'],
            'email' => $data['email'],
            'mobile_no' =>$data['mobile_no'],
            'password' => Hash::make($data['password']),
            'organization' =>$data['organization']??null,
            'Designation' =>$data['Designation']??null,
            'state' =>$data['state']??null,
            'pin_code' =>$data['pin_code']??null,
            'profile_type' =>$data['profile_type']??null,
            'Exhibition' =>$data['Exhibition']??null,
            'btob_meeting' =>$data['btob_meeting']??null,
            'btog_meeting' =>$data['btog_meeting']??null,
            'general' =>$data['general']??null,
            'product' =>$this->encode_decode($data['product']??null),
            'turnover' =>$data['turnover']??null,
            'fssai' =>$data['fssai']??null,
            'license_no' =>$data['license_no']??null,
            'imp_exp' =>$data['imp_exp']??null,
            'gst' =>$data['gst']??null,
            'buying' =>$data['buying']??null,
            'selling' =>$data['selling']??null,
            'buy_raw_materials' =>$this->encode_decode($data['buy_raw_materials']??null),
            'buy_other_raw_materials' => $data['buy_other_raw_materials']??null,
            'buy_processed' =>$this->encode_decode($data['buy_processed']??null),
            'buy_services_checkbox' =>$data['buy_services_checkbox']??null,
            'services_buy' =>$data['services_buy']??null,
            'buy_machinery_checkbox' =>$data['buy_machinery_checkbox']??null,
            'machinery_buy' =>$data['machinery_buy']??null,
            'buy_packaging_checkbox' =>$data['buy_packaging_checkbox']??null,
            'packaging_buy' =>$data['packaging_buy']??null,
            'sell_raw_materials' =>$this->encode_decode($data['sell_raw_materials']??null),
            'sell_other_raw_materials' => $data['sell_other_raw_materials']??null,
            'sell_processed' =>$this->encode_decode($data['sell_processed']??null),
            'sell_services_checkbox' =>$data['sell_services_checkbox']??null,
            'services_sell' =>$data['services_sell']??null,
            'sell_machinery_checkbox' =>$data['sell_machinery_checkbox']??null,
            'machinery_sell' =>$data['machinery_sell']??null,
            'sell_packaging_checkbox' =>$data['sell_packaging_checkbox']??null,
            'packaging_sell' =>$data['packaging_sell']??null,
            'domain' =>$this->encode_decode($data['domain']??null),
            'sub_of_dis' =>$this->encode_decode($data['sub_of_dis']??null),
            'other_discussion' =>$data['other_discussion']??null,
            'first' =>$data['first']??null,
            'second' =>$data['second']??null,
            'third' =>$data['third']??null,
            'product_img' => $path,
            'services_exib' => $data['services_exib']??null,
            'machinery_exib' => $data['machinery_exib']??null,
            'packaging_exib' => $data['packaging_exib']??null,
        ]);
    }
}
