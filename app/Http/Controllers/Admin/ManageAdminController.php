<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManageAdminController extends Controller
{
    
    public function updateProfile(Request $request){
        Admin::where('id', Auth('admin')->user()->id)
        ->update([
          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
        ]);
        return redirect()->back()
        ->with('success', "Action successful!.");
    }


    public function adminupdatepass(Request $request){
        if(!password_verify($request['old_password'],$request['current_password']))
        {
          return redirect()->back()
          ->with('message', 'Incorrect Old Password');
        }
        $this->validate($request, [
            'password_confirmation' => 'same:password',
            'password' => 'min:8',
        ]);

        Admin::where('id', $request['id'])
        ->update([
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back()
          ->with('success', 'Password Changed Sucessfully');
    } 
}
