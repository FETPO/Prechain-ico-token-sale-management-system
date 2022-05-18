<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\Stage;
use App\Models\Settings;
use App\Http\Traits\Apitrait;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    use Apitrait;

    public function cancelpayment(Request $request){
        // Forget multiple keys...
        $request->session()->forget([
            'amount', 'payment_mode', 'token', 'stage'
        ]);
        return redirect()->route('buytoken');
    }

    public function completepayment(Request $request){
        $this->validate($request, [
            'proof' => 'mimes:jpg,jpeg,png|max:4000|image',
        ]);

        if($request->hasfile('proof')){
            $document1 = $request->file('proof');
            $filename1 = $document1->getClientOriginalName();
            $check1 = explode(".", $filename1);
            $ext1 = array_pop($check1);
            //return $ext;
            $whitelist1 = array('pdf','doc','jpeg','jpg','png');
            if (in_array($ext1, $whitelist1)) {
                $path = $document1->store('photos', 'public');
            } else {
            return redirect()->back()
            ->with('message', 'Unaccepted Image Uploaded, try renaming the image file');
            }
        } 

        $token = $request->session()->get('token');
        $stagetoken = Stage::where('status', 'active')->first();
        if ($stagetoken->token_avail < $token) {
            return redirect()->back()->with('message', 'The Amount of token is now more than the available token, please start the process again, contact us if you have already made payment for reversal');
        }
        Stage::where('status', 'active')->update([
            'token_avail' => $stagetoken->token_avail - $token, 
        ]);

        $strtxt = $this->RandomStringGenerator(6);
        $txnid = "TXN".$strtxt;
        $totaltoken = $request->session()->get('token') + $request->session()->get('bonus');

        $newpay = new Transactions();
        $newpay->txn_id = $txnid;
        $newpay->user = Auth::user()->id;
        $newpay->tokens = $request->session()->get('token');
        $newpay->token_bonus = $request->session()->get('bonus');
        $newpay->total_token = $totaltoken;
        $newpay->amount = $request->session()->get('amount');
        $newpay->base_amt = $request->session()->get('usdamount');
        $newpay->type = "PURCHASE";
        $newpay->status = "pending";
        $newpay->proof = $path;
        $newpay->to = $request->session()->get('payment_mode');
        $newpay->stage = $request->session()->get('stage');
        $newpay->save();

        $request->session()->forget([
            'amount', 'payment_mode', 'token', 'stage'
        ]);
        return redirect()->route('buytoken')->with('success', 'Successful, Please wait while we confirm your transaction.');
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

    public function apicheck(){
        $url = 'https://www.bitstamp.net/api/v2/ticker/btcusd/';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $query = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($query, TRUE);

        $price = $data["last"];
        return $price;

    }

    public function completet(Request $request){
        $request->session()->forget([
            'receiver', 'token', 'ref'
        ]);
        return redirect()->route('mytoken');
    }

}
