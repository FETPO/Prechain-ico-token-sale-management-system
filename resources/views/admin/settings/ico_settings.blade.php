<h2 class="d-inline">ICO/STO Settings</h2>
<div>
    <form method="POST" action="{{route('saveico')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Token Name</label>
                <input type="text" class="form-control" name="token_name" value="{{$settings->token_name}}" required>
                <small>Enter name of token without spaces. Lower and uppercase can be used.</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Token Symbol</label>
                <input type="text" class="form-control" name="token_symbol" value="{{$settings->token_symbol}}"required>
                <small>Usually 3-4 Letters like ETH, BTC, WISH etc.</small>
            </div>
            <div class="form-group col-md-6">
                <label>Price/USD</label>
                <input type="text" class="form-control" name="price" value="{{$settings->amt_usd}}" required>
                <small>Define your token rate equivalent to USD.</small>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>  
</div>
<hr>
<div class="mt-4">
    <h2 class="text-primary">Purchase & Addtional Setting</h2>
    <p>Purchase With:</p>
    <form method="POST" action="{{route('savepayoption')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-6 col-md-3">
                <div class="">
                    <input class="form-check-input" type="checkbox" name="payopt[]" id="usd" value="usd">
                    <label class="form-check-label">
                        US Dollar (USD)
                    </label>
                </div>
            </div>
            <div class="form-group col-6 col-md-3">
                <div class="">
                    <input class="form-check-input" type="checkbox" name="payopt[]" id="eur" value="eur">
                    <label class="form-check-label">
                        Euro (EUR)
                    </label>
                </div>
            </div>
            <div class="form-group col-12 col-md-3">
                <div class="">
                    <input class="form-check-input" type="checkbox" name="payopt[]" id="gbp" value="gbp">
                    <label class="form-check-label">
                        Pound Sterling (GBP)
                    </label>
                </div>
            </div>
            <div class="form-group col-12 col-md-3">
                <div class="">
                    <input class="form-check-input" type="checkbox" name="payopt[]" id="btc" value="btc">
                    <label class="form-check-label">
                        Bitcoin (BTC)
                    </label>
                </div>
            </div>
            <div class="form-group col-6 col-md-3">
                <div class="">
                    <input class="form-check-input" type="checkbox" name="payopt[]" id="eth" value="eth">
                    <label class="form-check-label">
                        Ethereum (ETH)
                    </label>
                </div>
            </div>
            <div class="form-group col-6 col-md-3">
                <div class="">
                    <input class="form-check-input" type="checkbox" name="payopt[]" id="ltc" value="ltc">
                    <label class="form-check-label">
                        Litecoin (LTC)
                    </label>
                </div>
            </div>
            <div class="form-group col-6 col-md-3">
                <div class="">
                    <input class="form-check-input" type="checkbox" name="payopt[]" id="usdt" value="usdt">
                    <label class="form-check-label">
                        Tether (USDT)
                    </label>
                </div>
            </div>
            <div class="form-group col-6 col-md-3">
                <div class="">
                    <input class="form-check-input" type="checkbox" name="payopt[]" id="bnb" value="bnb">
                    <label class="form-check-label">
                        Binance Coin (BNB)
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    @if (in_array("usd", $options))
    <script>document.getElementById("usd").checked= true;</script>
    @endif
    @if(in_array("eur", $options))
    <script>document.getElementById("eur").checked= true;</script>
    @endif
    @if(in_array("gbp", $options))
    <script>document.getElementById("gbp").checked= true;</script>
    @endif
    @if(in_array("btc", $options))
    <script>document.getElementById("btc").checked= true;</script>
    @endif
    @if(in_array("eth", $options))
    <script>document.getElementById("eth").checked= true;</script>
    @endif
    @if(in_array("ltc", $options))
    <script>document.getElementById("ltc").checked= true;</script>
    @endif
    @if(in_array("usdt", $options))
    <script>document.getElementById("usdt").checked= true;</script>
    @endif
    @if(in_array("bnb", $options))
    <script>document.getElementById("bnb").checked= true;</script>
    @endif
</div>
