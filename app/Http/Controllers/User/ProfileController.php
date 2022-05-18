<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    //

    public function updateprofile(Request $request){
        User::where('id', Auth::user()->id)
        ->update([
          'name'=> $request->fullname,
          'dob'=> $request->dob,
          'email'=> $request->email,
		  'phone_number'=> $request->number,
          'nationality'=> $request->nationality,
        ]);
        return redirect()->back()->with('success', 'Profile Information Updated Sucessfully!');
    }

    public function updatewallet(Request $request){
        User::where('id', Auth::user()->id)
        ->update([
          'wallet_address'=> $request->wallet_address,
          'wallet_type'=> $request->wallet_type,
          'network' => $request->network,
        ]);
        return redirect()->back()->with('success', 'Wallet Address Updated Sucessfully!');
    }

    public function updatepassword(Request $request){
        if(!password_verify($request['old_password'], Auth::user()->password))
        {
          return redirect()->back()
          ->with('message', 'Incorrect Old Password');
        }
        $this->validate($request, [
        'password_confirmation' => 'same:password',
        'password' => 'min:8',
        ]);

        $request->user()->fill([
          'password' => Hash::make($request->password)
        ])->save();
        
        return redirect()->back()
          ->with('success', 'Password Updated Sucessful');
    }







}
