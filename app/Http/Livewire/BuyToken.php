<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transactions;
use App\Models\Settings;
use App\Models\Stage;
use App\Http\Traits\Apitrait;

use Illuminate\Support\Facades\Auth;

class BuyToken extends Component
{
    use Apitrait;

    public $pay_method;
    public $amount;
    public $token;
    public $tokenbal;
    public $dis = 'disabled';

    public function mount(){
        $settings = Settings::where('id', '1')->first();
        $this->pay_method = 'USD';
        $this->token = 1;
        $this->amount = $settings->amt_usd;
    }
    
    public function render()
    {
        $set = Settings::where('id', '1')->first();
        $options = $set->pay_methods;
        $optarray = json_decode($options);
        return view('livewire.buy-token',[
            'settings' => Settings::where('id', '1')->first(),
            'options' =>$optarray,
        ]);
    }

    public function setpaymethod($method){
        $this->pay_method = $method;
    }

    public function calculatetoken(){
        
        $set = Settings::where('id', '1')->first();
        $stage= Stage::where('status', 'active')->first();
        
        if ($stage) {
            $t_token_avail = $stage->token_avail;
            $numoftoken =$this->token;

            if($this->token==""){
                $tkn = 0;
            }else{
                $tkn = $this->token;
            }

            if ($this->pay_method == "USDT") {
                $this->pay_method = "USDT";
                $this->amount= $tkn* $set->amt_usd;
            }elseif ($this->pay_method == "USD") {
                $this->pay_method = "USD";
                $this->amount= $tkn* $set->amt_usd;
            }else {
                $lowerbase = strtolower($this->pay_method);
                $this->pay_method = $this->pay_method;
                $convertedamt = round($this->get_rate($lowerbase,'usd',"price"), 3 );
                $usdvalue = $tkn * $set->amt_usd;
                $number_of_coin = $usdvalue / $convertedamt;
               // $mainamt=$convertedamt * $this->token;
                $this->amount = round($number_of_coin,7);
            }

            if ($numoftoken > $t_token_avail) {
                session()->flash('status', "Maximum you can purchase is $t_token_avail token");
                $this->dis = 'disabled';
            } elseif($numoftoken < $stage->min) {
                session()->flash('status', "Minimum you can purchase is $stage->min token");
                $this->dis = 'disabled';
            }elseif ($stage->sales =="paused"){
                session()->flash('status', "Sales of token is paused at the moment, try again later");
                $this->dis = 'disabled';
            }else{
                $this->dis = ' ';
            }
            }else {
                session()->flash('status', "No Active Stage at the Moment, please check back later");
                $this->dis = 'disabled';
            }
        
    }

    public function buytoken(){
        $set = Settings::where('id', '1')->first();
        $stage= Stage::where('status', 'active')->first();
        $stageid = $stage->stage_name;

        if (empty(Auth::user()->wallet_type) || empty(Auth::user()->wallet_address)) {
            session()->flash('status', "Please update your wallet address before you continue");
            $this->dis = 'disabled';
         }elseif ($set->kyc_verification == "on" && Auth::user()->verification_status == "Not Verified") {
            session()->flash('status', "Your account have not been verified, please complete your verification to continue");
            $this->dis = 'disabled';
         }else{
            $this->dis = ' ';
            if ($stage->bonus > 0) {
                $bonus = $stage->bonus;
             }else {
                 $bonus = '0';
             }
             $usdamt= $this->token * $set->amt_usd;
     
             $this->dis = 'disabled';
             sleep(2);
     
             //store payment info in session
             session(['amount' => $this->amount]);
             session(['bonus' => $bonus]);
             session(['usdamount' => $usdamt]);
             session(['token' => $this->token]);
             session(['stage' => $stageid]);
             session(['payment_mode' => $this->pay_method]);
             return redirect()->route('payment');
         }
    }
}
