<div>
    <?php
if (Auth::user()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
} else {
    $bg="dark";
    $text = "light";
}

?>

<x-danger-alert/>
<x-success-alert/>
<div class="row">
   <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Choose currency and calculate {{$settings->token_symbol}} token price</h5>
                <p class="card-text">You can buy our {{$settings->token_symbol}} token using the below currency choices to become part of our project.</p>
                 <div class="row">
                    @if (in_array("usd", $options))
                    <div class="mb-1 col-md-6">
                        <a class="text-decoration-none anchortag" wire:click="setpaymethod('USD')">
                            <div class="card bg-{{$bg}} shadow-none">
                                <div class="card-body">
                                <span><i class="fas fa-dollar-sign"></i> USD</span> 
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(in_array("eur", $options))
                    <div class="mb-1 col-md-6">
                        <a class="text-decoration-none anchortag" wire:click="setpaymethod('EUR')">
                            <div class="card bg-{{$bg}} shadow-none">
                                <div class="card-body">
                                <span><i class="fas fa-euro-sign"></i> EUR</span> 
                                {{-- <span class="float-right"> 0.75 EUR</span>  --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(in_array("gbp", $options))
                    <div class="mb-1 col-md-6" wire:click="setpaymethod('GBP')">
                        <a class="text-decoration-none anchortag" >
                            <div class="card bg-{{$bg}} shadow-none">
                                <div class="card-body">
                                <span><i class="fas fa-gbp-sign"></i> GBP</span> 
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(in_array("btc", $options))
                    <div class="mb-1 col-md-6">
                        <a  class="text-decoration-none anchortag" wire:click="setpaymethod('BTC')">
                            <div class="shadow-none bg-{{$bg}} card">
                                <div class="card-body">
                                <span>
                                    BTC</span> 
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(in_array("ltc", $options))
                    <div class="mb-1 col-md-6">
                        <a  class="text-decoration-none anchortag" wire:click="setpaymethod('LTC')">
                            <div class="shadow-none card bg-{{$bg}}">
                                <div class="card-body">
                                <span>LTC</span> 
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(in_array("eth", $options))
                    <div class="mb-1 col-md-6">
                        <a class="text-decoration-none anchortag" wire:click="setpaymethod('ETH')">
                            <div class="shadow-none card bg-{{$bg}}">
                                <div class="card-body">
                                <span>
                                    ETH</span> 
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(in_array("usdt", $options))
                    <div class="mb-1 col-md-6">
                        <a class="text-decoration-none anchortag" wire:click="setpaymethod('USDT')">
                            <div class="shadow-none card bg-{{$bg}}">
                                <div class="card-body">
                                <span> USDT</span> 
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(in_array("bnb", $options))
                    <div class="mb-1 col-md-6">
                        <a class="text-decoration-none anchortag" wire:click="setpaymethod('BNB')">
                            <div class="shadow-none card bg-{{$bg}}">
                                <div class="card-body">
                                <span> BNB</span> 
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                </div>

                <h5 class="card-title">Amount of contribute</h5>
                <p class="card-text">Enter the amount you would like to contribute in order to calculate the amount of tokens you will receive. The calculator below helps to convert the required quantity of tokens into the amount of your selected currency.</p>
                <div>
                    <form class="form-inline" wire:submit.prevent='buytoken'>
                        <div class="mb-2 form-group">
                            <div class="mb-3 input-group">
                                <input type="text" wire:model='token' wire:keyup='calculatetoken' class="form-control w-50" width="50" value="1" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">{{$settings->token_symbol}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 form-group mx-sm-3">
                         <span>=</span>
                         <div>
                            <div wire:target='calculatetoken' wire:loading class="sk-chase bg-primary">
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                            </div>
                         </div>
                         <div class="sk-chase">
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                        </div>
                        <input type="text" readonly class="form-control-plaintext" value="{{$amount}} {{$pay_method}}">
                        </div>
                        <div><p class='text-danger'>
                            @if (Session::has('status'))
                            {{ Session::get('status') }}
                            @endif
                        </p></div>
                        <div>
                            <button type="submit" class="mb-2 btn btn-primary" {{$dis}}>Make Payment <i class="fas fa-wallet"></i> </button> <br>
                            <p><i class="fas fa-info-circle"></i> Tokens will appear in your account after payment successfully made and approved by our team. Please note that, {{$settings->token_symbol}} token will be distributed after the token sales end-date.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            @if (empty(Auth::user()->wallet_address))
            <div class="col-12">
                <a href="#" data-toggle="modal" data-target="#walletmodal" class="text-white text-decoration-none" style="text-decoration:none;">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <span class="card-text">Add your wallet address before you buy</span>
                            <span class="float-right"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div> 
            @else
            <div class="col-12">
                <a href="#" data-toggle="modal" data-target="#walletmodal" class="text-white text-decoration-none" style="text-decoration:none;">
                    <div class="card bg-info">
                        <div class="card-body">
                            <span class="card-text">Update your wallet address.</span>
                            <span class="float-right"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div> 
            @endif
            <div class="col-12">
                <div class="text-white card bg-primary">
                    <div class="card-body">
                        <div class="mb-2">
                            <p class="card-text">TOKEN BALANCE:</p>
                            <h2 class="mt-0">{{number_format(Auth::user()->tot_tk_bal)}} {{$settings->token_symbol}}</h2>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>