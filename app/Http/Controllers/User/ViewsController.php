<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Activity;
use App\Models\Kyc;
use App\Models\Referral;
use App\Models\Transactions;
use App\Models\Settings;
use App\Models\Stage;
use App\Models\Paymethod;
use App\Models\Staking;
use App\Models\RoiLog;

class ViewsController extends Controller
{
    //

    public function dashboard_home(Request $request){
        $settings=Settings::where('id','1')->first();
        
        //check for users without ref link and update them with it
         $usf=User::all();
        foreach($usf as $usf){
            //if the ref_link column is empty
            if($usf->ref_link==''){
                User::where('id', $usf->id)
                ->update([
                'ref_link' => $settings->site_url.'/ref/'.$usf->username,
                ]);
            }
        }
       
        return view('user.dashboard',[
            'settings' => Settings::where('id', '1')->first(),
            'stage' => Stage::where('status', 'active')->first(),
            'title' => "User Dashboard",
        ]);
    }

    public function buytoken(){
        $set = Settings::where('id', '1')->first();
        $options = $set->pay_methods;
        $optarray = json_decode($options);
        return view('user.buytoken',[
            'settings' => Settings::where('id', '1')->first(),
            'options' =>$optarray,
            'title' => "Buy Token",
        ]);
    }
    
    public function transactions(){
        return view('user.transactions',[
            'recent_txn' => Transactions::where('user', Auth::user()->id)->orderByDesc('id')->get(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Transaction",
        ]);
    }

    public function stake(){
        $settings = Settings::where('id', '1')->first();
        if (!$settings->usestake) {
           return redirect()->back()->with('message', 'Invalid Destination');
        }
        $mystake = Staking::where('user_id', Auth::user()->id)->where('status', 'active')->first();
        $roi = RoiLog::where('user_id', Auth::user()->id)->get();

        $duration = $settings->duration;
        $duraarray = json_decode($duration);

        return view('user.staketoken',[
            'settings' => $settings,
            'mystake' => $mystake,
            'rois' => $roi,
            'duraarray' => $duraarray,
            'title' => "Stake your token",
        ]);
    }

    public function profile(){
        return view('profile.show',[
            'settings' => Settings::where('id', '1')->first(),
            'address' => Kyc::where('user', Auth::user()->id)->first(),
            'title' => "Account Profile",
        ]);
    }

    //Controller self ref issue
    public function ref(Request $request, $id){
        
        if(isset($id)){
            $request->session()->flush();
            $request->session()->put('ref_by', $id);
            return redirect()->route('register');
        }
    }

    public function mytoken(){
        $settings = Settings::where('id', '1')->first();
        $user = User::where('id', Auth::user()->id)->first();
        $total = $user->token_bal * $settings->amt_usd;

        return view('user.mytoken',[
            'total' => $total,
            'settings' => Settings::where('id', '1')->first(),
            'title' => "My Token Balances",
        ]);
    }

    public function kycinfo(){
        return view('user.kycinfo',[
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Begin kyc verification",
        ]);
    }

    public function kycapplication(){
        return view('user.kyc',[
            'userkyc' => Kyc::where('user', Auth::user()->id)->first(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Kyc Application",
        ]);
    }
    public function activity(){
        return view('user.activity',[
            'activities' => Activity::where('user', Auth::user()->id)->OrderByDesc('id')->get(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Your Activities",
        ]);
    }
    public function referral(){
        $checrefby = User::where('id', Auth::user()->id)->first();
        if (!empty($checrefby->ref_by)) {
            $refby = User::where('id', $checrefby->ref_by)->first();
            if ($refby) {
                $refbyuser = User::where('id', $checrefby->ref_by)->first();
            }else {
                $refbyuser = NULL;
            }
        }else {
            $refbyuser = NULL;
        }
        return view('user.referral',[
            'referrals' => User::where('ref_by', Auth::user()->id)->OrderByDesc('id')->get(),
            'referdby' => $refbyuser,
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Referrals",
        ]);
    }


    //payment route
    public function payment(Request $request){

        if ($request->session()->exists('amount') && $request->session()->exists('token')) {
            return view('user.payment')
            ->with(array(
                'amount'=>$request->session()->get('amount'),
                'payment_mode'=>$request->session()->get('payment_mode'),
                'pay_info' => Paymethod::where('symbol', $request->session()->get('payment_mode'))->first(),
                'token'=>$request->session()->get('token'),
                'settings' => Settings::where('id', '=', '1')->first(),
                'title' => "Make Payment",
            )); 
        }else {
            return redirect()->route('buytoken')
            ->with('message', 'Choose Payment option and calculate token amount first');
        }
        
    }

    //payment route
    public function tsuccess(Request $request){

        if ($request->session()->exists('receiver') && $request->session()->exists('ref')) {
            $reciever = User::where('email', $request->session()->get('receiver'))->first();
            return view('user.successtransfer')
            ->with(array(
                'amount'=>$request->session()->get('token'),
                'bname' => $reciever->name,
                'ref' => $request->session()->get('ref'),
                'email' => $reciever->email,
                'settings' => Settings::where('id', '=', '1')->first(),
                'title' => "Transfer successful",
            )); 
        }else {
            return redirect()->back();
        }
        
    }








}
