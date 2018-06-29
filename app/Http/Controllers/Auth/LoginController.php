<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    protected $redirectTo = '/otp';
    
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $user=User::whereEmail($credentials['email'] )->first();
        //Check if Status is Active Then Move Further
        if (!empty($user) && $user->status) {
            //Send SMS or OTP Code Logic here
            if (Auth::attempt($credentials, $request->has('remember')))
            { 
                return redirect()->intended($this->redirectPath());                
            }
        }
        
        return redirect()->guest('/login')
                    ->withInput($request->only('email', 'remember'))
                    ->with('error', $this->getFailedLoginMessage());
          //redirect again to login view with some errors line 3
    }

    protected function getFailedLoginMessage()
    {
        return 'Invalid Login Information Plese try again.';
    }
    
}
