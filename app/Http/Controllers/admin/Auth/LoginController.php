<?php

namespace App\Http\Controllers\admin\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        // $this->middleware('guest:admin')->except('logout');
    }

    public function adminLogin(Request $request)
    {
        
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]); 
        
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], true)) {
            $msg = array(
                'code' => 200,
				'status'  => 'success',
                'message' => 'Login Successful',
                'intended' => $this->redirectTo
			);
			return response()->json($msg);
        }else{
            $msg = array(
                'code' => 400,
				'status'  => 'error',
				'message' => 'Login Un Successful'
			);
			return response()->json($msg);
        }
        
    }
}
