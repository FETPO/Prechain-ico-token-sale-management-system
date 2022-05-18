<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
   // use AuthenticatesUsers;
/*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating admin users for the application and
    | redirecting them to your admin dashboard.
    |
    */

    /**
     * This trait has all the login throttling functionality.
     */
    // use ThrottlesLogins;


   

    /**
     * Show the login form.
     * 
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.adminlogin',[
            'title' => 'Admin Login',
        ]);
    }

    /**
     * Login the admin.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adminlogin(Request $request)
    {
         //$this->validator($request);
        $data =  $this->validate($request, [
            'email'    => 'required|email|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
            ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password, 'status' => 'active'])) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        
        return back()->withErrors([
            'email' => 'Invalid Email',
        ]);

    }


    public function validate_admin(){
        if (Auth::guard('admin')->check()){
            return redirect()
            ->intended(route('admin.dashboard'))
            ->with('message','You are Logged in as Admin!');
        }else {
            return redirect()
            ->route('adminloginform')
            ->with('message','Not allowed');
        }
    }

    /**
     * Logout the admin.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adminlogout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()
            ->route('adminloginform')
            ->with('status','you have been logged out!');
    }

   
}
