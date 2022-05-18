<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SocialLoginController extends Controller
{
    //
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }
 
    /**
 
     * Obtain the user information from Social Logged in.
 
     * @param $social
 
     * @return Response
 
     */
 
     
    public function authenticate(Request $request, $social)
    {
        $settings = settings::where('id','1')->first();
        $userSocial = Socialite::driver($social)->user();
        $user = User::where(['email' => $userSocial->getEmail()])->first();

        $username = str_replace(' ', '', $userSocial->getName()).time();

        if($user){
            Auth::login($user);
            return redirect()->route('dashboard');
        }else{
            if(session('ref_by')) {
                $ref_by = session('ref_by');
                $user= User::where('username', $ref_by)->first();
                $ref_by_id = $user->id;
                
            }else {
                $ref_by_id = NULL;
            }
            $newUser = User::create([
                'name' => $userSocial->getName(),
                'email' => $userSocial->getEmail(),
                'email_verified_at' => \Carbon\Carbon::now(),
                'acnt_active' =>'active',
                'ref_by' => $ref_by_id,
                'username' => $username,
                'password' => Hash::make('userpassword'),
            ]);
            Auth::login($newUser);
            return redirect()->route('dashboard');
        }
 
    }
}
