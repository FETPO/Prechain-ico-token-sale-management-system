<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Stage;
use App\Models\Settings;
use App\Models\Transactions;
use App\Models\User;
use App\Models\Referral;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Activity;
use App\Models\Kyc;
use App\Mail\Newmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class UsersActionController extends Controller
{
     //Reset Password
     public function resetpassword($id){
        User::where('id', $id)
        ->update([
        'password' => Hash::make('user01236'),
        ]);
        return redirect()->back()
        ->with('success', 'Password have been reset to default');
    } 

    //block user
    public function block($id){
    
        User::where('id',$id)
        ->update([
        'acnt_status' => 'suspend',
        ]);
        return redirect()->back()
        ->with('success', 'User have been suspended');
    }

    //unblock user
    public function unblock($id){

        User::where('id',$id)
        ->update([
        'acnt_status' => 'active',
        ]);
        return redirect()->back()
        ->with('success', 'User unblocked successfully');
    }

    public function deleteuser($id){
        //delete the user's withdrawals and deposits
        $txns=Transactions::where('user',$id)->get();
        if(!empty($txns)){
            foreach($txns as $txn){
                Transactions::where('id', $txn->id)->delete();
            }
        }

        $activities=Activity::where('user',$id)->get();
        if(!empty($activities)){
            foreach($activities as $activity){
                Activity::where('id', $activity->id)->delete();
            }
        }
        //delete the user plans
        $userp=Kyc::where('user',$id)->get();
        if(!empty($userp)){
            foreach($userp as $p){
                Kyc::where('id',$p->id)->delete();
            }
        }
        //delete the user from agent model if exists
        $agent=Referral::where('agent',$id)->first();
        if(!empty($agent)){
            Referral::where('id', $agent->id)->delete();
        }

        User::where('id', $id)->delete();
        return redirect()->route('userlist')->with('success', 'User and all its data have been deleted successfully!'); 
    }


    public function sendmail(Request $request){
        $settings=Settings::where('id', '=', '1')->first();
        //send email notification
        $mailduser=User::where('id',$request->user_id)->first();
        $objDemo = new \stdClass();
        $objDemo->message = $request->message;
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = $request->subject;
        $objDemo->greeting = $request->greeting;

        Mail::bcc($mailduser->email)->send(new Newmail($objDemo));
        return redirect()->back()->with('success','Your message was sent successfully!');
    }

    public function adduser(Request $request){
        
        $validated = $request->validate([
            'name' => 'required|max:255|string',
            'username'=> 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        
        $thisid = DB::table('users')->insertGetId([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password' => Hash::make($request->password),
            'created_at'=>\Carbon\Carbon::now(),
            'email_verified_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]); 
             
        //assign referal link to user
        $settings=Settings::where('id', '=', '1')->first();
        $user = User::where('id', $thisid)->first();

        User::where('id', $thisid)
        ->update([
        'ref_link' => $settings->site_address.'/ref/'.$user->username,
        ]);
        return redirect()->back()->with('success', 'User Registered Sucessful!');
    }


}
