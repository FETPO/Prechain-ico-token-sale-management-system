<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Staking;
use App\Models\Settings;
use App\Models\User;
use Carbon\Carbon;

class StakingController extends Controller
{
    //
    protected function stakenow(Request $request){

        if (Auth::user()->tot_tk_bal < $request->amount) {
            return redirect()->back()->with('message', 'Insufficient fund');
        }

        if ($request->duration == "1 Month") {
            $expireat = Carbon::now()->addMonths(1)->toDateTimeString();
        }elseif($request->duration == "4 Months"){
            $expireat = Carbon::now()->addMonths(4)->toDateTimeString();
        }elseif ($request->duration == "6 Months") {
            $expireat = Carbon::now()->addMonths(6)->toDateTimeString();
        }elseif ($request->duration == "9 Months") {
            $expireat = Carbon::now()->addMonths(9)->toDateTimeString();
        }elseif ($request->duration == "1 Year") {
            $expireat = Carbon::now()->addYears(1)->toDateTimeString();
        }

        User::where('id', Auth::user()->id)->update([
            'tot_tk_bal' => Auth::user()->tot_tk_bal - $request->amount,
        ]);

        $newstake = new Staking();
        $newstake->user_id = Auth::user()->id;
        $newstake->stake_duration = $request->duration;
        $newstake->amount = $request->amount;
        $newstake->expected_roi = $request->roiexpected;
        $newstake->expire_date =  $expireat;
        $newstake->last_growth =  Carbon::now();
        $newstake->status =  'active';
        $newstake->save();

        return redirect()->back()->with('success', 'Staking Successful');
    }

    protected function cancelStake($id){
        $mystake = Staking::where('id', $id)->first();
        User::where('id', Auth::user()->id)->update([
            'tot_tk_bal' => Auth::user()->tot_tk_bal + $mystake->amount,
        ]);
        $mystake = Staking::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Staking Canceled Successfully');
    }
}
