<?php

namespace App\Http\Controllers;

use App\Mail\NewNotification;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Staking;
use App\Models\Settings;
use App\Models\User;
use App\Models\RoiLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
        return view('home.index');
    }

    public function sendContact(Request $request){
        $settings=Settings::where('id','1')->first();
        
        $message = "$request->message";
        $subject = "Inquiry from $request->name with email $request->email";
        
       Mail::to($settings->contact_email)->send(new NewNotification($message, $subject, 'Admin'));

        return redirect()->back()
        ->with('success', ' Your message was sent successfully!');
    }

    public function getRoi(){
          
        $stake = Staking::where('status','active')->get();
        $settings = Settings::where('id','1')->first();

        foreach($stake as $roistake){
            //get user
            $user=User::where('id',$roistake->user_id)->first();

            $lastgrowth = Carbon::parse($roistake->last_growth);
            $togrow= Carbon::now()->subDays(1)->toDateTimeString();
            //$dtme = $lastgrowth->diffInDays();

            $percentagevalue = ($roistake->amount*$roistake->expected_roi) / 100;
            $num_of_days = $roistake->created_at->diffInDays($roistake->expire_date);
            $increment = $percentagevalue / $num_of_days;
            //return $percentagevalue;

            if ($roistake->stake_duration  == "1 Month") {
                $condition1 = $roistake->created_at->diffInMonths() < 1;
                $condition2 = $roistake->created_at->diffInMonths() >= 1;
            } elseif($roistake->stake_duration  == "4 Months") {
                $condition1 = $roistake->created_at->diffInMonths() < 4;
                $condition2 = $roistake->created_at->diffInMonths() >= 4;
            }elseif($roistake->stake_duration  == "6 Months") {
                $condition1 = $roistake->created_at->diffInMonths() < 6;
                $condition2 = $roistake->created_at->diffInMonths() >= 6;
            }elseif($roistake->stake_duration  == "9 Months") {
                $condition1 = $roistake->created_at->diffInMonths() < 9;
                $condition2 = $roistake->created_at->diffInMonths() >= 9;
            }elseif($roistake->stake_duration  == "1 Year") {
                $condition1 = $roistake->created_at->diffInYears() < 1;
                $condition2 = $roistake->created_at->diffInYears() >= 1;
            }

            if($condition1){
                if($lastgrowth <= $togrow){

                    User::where('id', $roistake->user_id)
                    ->update([
                        'roi_bal' => $user->roi_bal + $increment,
                        'tot_tk_bal' => $user->tot_tk_bal + $increment,
                    ]);
                
                    //save to transactions history
                    $th = new RoiLog();
                    $th->staking_id = $roistake->id;
                    $th->user_id = $user->id;
                    $th->amount = $increment;
                    $th->narration = 'Profit';
                    $th->save();
                
                    Staking::where('id', $roistake->id)
                        ->update([
                        'last_growth' => Carbon::now()
                    ]);
                }
            }

            //release capital
            if($condition2){
                User::where('id', $roistake->user_id)
                    ->update([
                    'tot_tk_bal' => $user->tot_tk_bal + $roistake->amount,
                ]);
               
                //Stake expired
                Staking::where('id', $roistake->id)
                    ->update([
                    'status' => 'expired'
                ]);
                    
                //save to transactions history
                $th = new RoiLog();
                $th->staking_id = $roistake->id;
                $th->user_id = $user->id;
                $th->amount = $roistake->amount;
                $th->narration = 'Capital';
                $th->save();
               
            }
        
        }
    }
}
