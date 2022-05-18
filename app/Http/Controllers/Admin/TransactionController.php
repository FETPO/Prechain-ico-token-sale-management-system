<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\Settings;
use App\Models\User;
use App\Models\Referral;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class TransactionController extends Controller
{
    //

    public function confirmtran($id){
       $tan = Transactions::where('id', $id)->first();
       $user = User::where('id', $tan->user)->first();
       $settings=Settings::where('id', '=', '1')->first();

       if ($user) {
            Transactions::where('id', $id)->update([
                'status'=> 'Confirmed',
            ]); 

            User::where('id', $tan->user)->update([
                'token_bal' => $user->token_bal + $tan->tokens,
                'tk_bonus_bal' => $user->tk_bonus_bal + $tan->token_bonus,
                'tot_tk_bal' => $user->tot_tk_bal + $tan->total_token,
            ]);

            if(!empty($user->ref_by)){
                $earnings=$settings->ref_com*$tan->tokens/100;

                Referral::where('agent',$user->ref_by)->increment('token_earned', $earnings);
                
                //add earnings to agent balance
                //get agent
                $agent=User::where('id',$user->ref_by)->first();
                User::where('id',$user->ref_by)->update([
                    'ref_bonus' => $agent->ref_bonus + $earnings,
                    'tot_tk_bal' => $agent->tot_tk_bal + $earnings,
                ]);
                
                User::where('id', $tan->user)->update([
                    'bonus_to_ref' => $user->bonus_to_ref + $earnings,
                ]);
            }
       }
       return redirect()->back()->with('success', 'Transaction confirmed and tokens have been added to user account');
    }

    public function addtoken(Request $request){
        $strtxt = $this->RandomStringGenerator(6);
        $txnid = "TXN".$strtxt;

        $newpay = new Transactions();
        $newpay->txn_id = $txnid;
        $newpay->user = $request->user;
        $newpay->tokens = $request->tokens;
        $newpay->amount = $request->amount;
        $newpay->type = $request->t_type;
        $newpay->address = $request->address;
        $newpay->status = "Confirmed";
        $newpay->proof = NULL;
        $newpay->to = $request->payment_mode;
        $newpay->stage = $request->stage;
        $newpay->created_at = $request->date;
        $newpay->save();
        
        $user = User::where('id', $request->user)->first();
        if ($request->t_type == "PURCHASE") {
           User::where('id', $request->user)->update([
                'token_bal' => $user->token_bal + $request->tokens,
                'tot_tk_bal' => $user->tot_tk_bal + $request->tokens,
           ]);
        }else {
            User::where('id', $request->user)->update([
                'tk_bonus_bal' => $user->tk_bonus_bal + $request->tokens,
                'tot_tk_bal' => $user->tot_tk_bal + $request->tokens,
            ]);
        }
        return redirect()->back()->with('success', 'Tokens have been added to user account');
     }

    function RandomStringGenerator($n) 
    { 
        $generated_string = ""; 
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
        $len = strlen($domain); 
        for ($i = 0; $i < $n; $i++) 
        { 
            $index = rand(0, $len - 1); 
            $generated_string = $generated_string . $domain[$index]; 
        } 
        // Return the random generated string 
        return $generated_string; 
    } 

    public function canceltran($id){
        Transactions::where('id', $id)->delete();
        return redirect()->route('admin.trx')->with('success', 'Transaction have been deleted');
    }

    public function viewScreenshot($file){
        $trans = Transactions::where('id', $file)->first();
        return view('admin.trans-image',[
            'title' => 'Screenshot',
            'tran' => $trans,
        ]);
    }

}
