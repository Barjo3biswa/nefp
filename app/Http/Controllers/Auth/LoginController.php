<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showLoginForm()
    {
        // dd("ok");
        return view('auth.login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showAdminLoginForm()
    {
        // dd("ok");
        return view('auth.admin-login', ['url' => route('admin.login-view'), 'title'=>'Admin']);
    }

    public function adminLogin(Request $request)
    {
        // dd("ok");
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt( $request->only($this->username(), 'password'), false) ){
            // dd("ok");
            // return redirect()->intended('/dashboard');
            return redirect()->route('dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
}
