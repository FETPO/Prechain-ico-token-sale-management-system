<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transactions;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\Newmail;
use Illuminate\Support\Facades\Mail;

class TransferToken extends Component
{
    public $token;
    public $email;
    public $dis = 'disabled';
    
    public function render()
    {
        return view('livewire.transfer-token',[
            'settings' => Settings::where('id', '1')->first(),
        ]);
    }

    public function validateentry(){
        $user = User::where('id', Auth::user()->id)->first();
        $reciever = User::where('email', $this->email)->first();

        if ($user->tot_tk_bal < $this->token) {
            session()->flash('message', "Insufficient Fund");
            $this->dis = 'disabled';
        } elseif (!$reciever) {
            session()->flash('message', "No user with this email address exist in our system");
            $this->dis = 'disabled';
        }elseif ($this->email == Auth::user()->email) {
            session()->flash('message', "invalid receiver email address");
            $this->dis = 'disabled';
        }elseif ($this->email == "") {
            session()->flash('message', "enter receiver email address");
            $this->dis = 'disabled';
        }else {
            $this->dis = ' ';
        }
        
    }

    public function transfer(){
        if ($this->token == " ") {
            $this->dis = 'disabled';
        }elseif ($this->email == "") {
            $this->dis = 'disabled';
        }else {
            sleep(4);
            $user = User::where('id', Auth::user()->id)->first();
            $reciever = User::where('email', $this->email)->first();
            $strtxt = $this->RandomStringGenerator(6);
            $txnid = "TXN".$strtxt;

            $set = Settings::where('id', '1')->first();
            $usdamt= $this->token * $set->amt_usd;

            User::where('id', Auth::user()->id)->update([
                'tot_tk_bal' => $user->tot_tk_bal - $this->token,
            ]);
            $newpay = new Transactions();
            $newpay->txn_id = $txnid;
            $newpay->user = Auth::user()->id;
            $newpay->tokens = $this->token;
            $newpay->token_bonus = 0;
            $newpay->total_token = $this->token;
            $newpay->amount = 0;
            $newpay->base_amt = $usdamt;
            $newpay->type = "TRANSFER";
            $newpay->status = "Confirmed";
            $newpay->proof = NULL;
            $newpay->address = $this->email;
            $newpay->stage = NULL;
            $newpay->save();

            User::where('email', $this->email)->update([
                'tot_tk_bal' => $reciever->tot_tk_bal + $this->token,
            ]);
            $newpa = new Transactions();
            $newpa->txn_id = $txnid;
            $newpa->user = $reciever->id;
            $newpa->tokens = $this->token;
            $newpa->token_bonus = 0;
            $newpa->total_token = $this->token;
            $newpa->amount = 0;
            $newpa->base_amt = $usdamt;
            $newpa->type = "TRANSFER";
            $newpa->status = "Confirmed";
            $newpa->proof = NULL;
            $newpa->address = $this->email;
            $newpa->stage = NULL;
            $newpa->save();
            
            session(['ref' => $txnid]);
            session(['usdamount' => $usdamt]);
            session(['token' => $this->token]);
            session(['receiver' => $this->email]);
            
            $formattok = number_format($this->token);
            //send email notification
            $mailduser=User::where('id',$reciever->id)->first();
            $objDemo = new \stdClass();
            $objDemo->message = "Your Account have been credited with $set->token_symbol $formattok, transfer from $user->name";
            $objDemo->sender = $set->site_name;
            $objDemo->date = \Carbon\Carbon::Now();
            $objDemo->subject = "Transfer Alert";
            $objDemo->greeting = "Hello $reciever->name";

            Mail::bcc($mailduser->email)->send(new Newmail($objDemo));
            
            return redirect()->route('tsuccess'); 
        }
        
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
}
