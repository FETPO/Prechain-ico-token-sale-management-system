<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stage;
use App\Models\Settings;
use App\Models\Transactions;
use App\Models\User;
use App\Models\Referral;
use App\Models\Activity;
use App\Models\Kyc;
use App\Models\Paymethod;
use Illuminate\Support\Facades\DB;

class AdminViewsController extends Controller
{
    //
    public function dashboard_admin(){

        $tran = DB::table('transactions')
                ->offset(0)
                ->limit(5)
                ->get();

        $active_stage = Stage::where('status','active')->first();
        $transamt = DB::table('transactions')
        ->where('stage', $active_stage->stage_name)
        ->sum('tokens');

        $usdamt = DB::table('transactions')
        ->where('stage', $active_stage->stage_name)
        ->sum('base_amt');
        
        $totalusers = DB::table('users')
        ->count();

        return view('admin.dashboard',[
            'latest' => $tran,
            'settings' => Settings::where('id', '1')->first(),
            'stage' => $active_stage,
            'tran' => $transamt,
            'usdamt' => $usdamt,
            'users'=> $totalusers, 
            'title' => "Admin Dashboard",
        ]);
    }

    public function stages(){
        return view('admin.stages',[
            'stages' => Stage::orderByDesc('id')->get(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Stages",
        ]);
    }

    public function newstage(){
        return view('admin.newstage',[
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Add Stage",
        ]);
    }

    public function updatestage($id){
        return view('admin.update-stage',[
            'stage' => Stage::where('id', $id)->first(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Update Stage",
        ]);
    }

    public function adminProfile()
    {
      return view('admin.profile')
        ->with(array(
            'title'=>'Admin Profile',
        ));
    }

    public function useractivity($id){
        return view('admin.activity',[
            'useract' => Activity::where('user', $id)->get(),
            'user' =>User::where('id', $id)->first(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "Login Activity",
        ]);
    }

    public function userreferral($id){
        $checrefby = User::where('id', $id)->first();
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
        return view('admin.referral',[
            'referrals' => User::where('ref_by', $id)->get(),
            'user' =>User::where('id', $id)->first(),
            'referdby' => $refbyuser,
            'settings' => Settings::where('id', '1')->first(),
            'title' => "User Referrals",
        ]);
    }

    public function viewuser($id){
        return view('admin.useractions',[
            'user' => User::where('id', $id)->first(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "View User",
        ]);
    }

    public function settings(){
        $set = Settings::where('id', '1')->first();
        $options = $set->pay_methods;
        $optarray = json_decode($options);

        $duration = $set->duration;
        $duraarray = json_decode($duration);
        //return $optarray;
        return view('admin.settings',[
            'options' =>$optarray,
            'duraarray' => $duraarray,
            'payset' => Paymethod::orderByDesc('id')->get(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "System Settings",
        ]);
    }

    public function manageusers(){
        return view('admin.userslist',[
            'settings' => Settings::where('id', '1')->first(),
            'users' => User::orderByDesc('id')->get(),
            'title' => "manage users",
        ]);
    }

    public function transactions(){
        return view('admin.transactions',[
            'settings' => Settings::where('id', '1')->first(),
            'trxns' => Transactions::orderByDesc('id')->get(),
            'users' => User::orderByDesc('id')->get(),
            'stage' => Stage::orderByDesc('id')->get(),
            'title' => "System Transactions",
        ]);
    }
    public function kyclist(){
        return view('admin.kyclist',[
            'settings' => Settings::where('id', '1')->first(),
            'kycs' => Kyc::orderByDesc('id')->get(),
            'title' => "Kyc List",
        ]);
    }

    public function viewDoc($id){
        return view('admin.kyc-images',[
            'kyc' => Kyc::where('id', $id)->first(),
            'title' => "Kyc Documents",
        ]);
    }
    
    public function viewtransaction($id){
        return view('admin.transaction_details',[
            'txn' => Transactions::where('id', $id)->first(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "View transaction",
        ]);
    }

    public function viewkyc($id){
        return view('admin.kyc_details',[
            'kyc' => Kyc::where('id', $id)->first(),
            'settings' => Settings::where('id', '1')->first(),
            'title' => "View KYC Information",
        ]);
    }
}
