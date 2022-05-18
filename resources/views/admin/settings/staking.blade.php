<div class="">

</div>
<h2 class="d-inline">Staking Settings</h2>
<div>
    <form method="POST" action="{{route('savestakeset')}}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-12 ">
                <h5>Allow users to stake</h5>
                <div class="selectgroup">
                    <label class="selectgroup-item">
                        <input type="radio" name="usestatke" id="social" value="1" class="selectgroup-input" checked="">
                        <span class="selectgroup-button">Yes</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="usestatke" id="socialoff" value="0" class="selectgroup-input">
                        <span class="selectgroup-button">No</span>
                    </label>
                </div>
                <div>
                    <small>If set to No, your users will not be able to stake their token</small> 
                </div>
            </div>
            @if ($settings->usestake)
            <script>document.getElementById("social").checked= true;</script>
            @else
            <script>document.getElementById("socialoff").checked= true;</script>
            @endif
            {{-- <div class="form-group col-md-12">
                <label>Site Name</label>
                <input type="text" class="form-control" name="site_name" value="{{$settings->site_name}}" required>
            </div> --}}
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Minimun Amount of {{$settings->token_symbol}} to Stake</label>
                <input type="number" class="form-control" name="minstake" value="{{$settings->minstake}}" required>
            </div>
            <div class="form-group col-md-6">
                <label>Maximum amount of {{$settings->token_symbol}} to stake</label>
                <input type="number" class="form-control" name="maxstake" value="{{$settings->maxstake}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="onem" value="onem">
                <label>1 Month</label>
            </div>
            <div class="form-group col-md-6">
                
                <input type="number" class="form-control" name="onem" value="{{$settings->one_month_roi}}" required>
                <small>Total ROI for 1 Month duration(%)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="fourm" value="fourm">
                <label>4 Months</label>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="fourm" value="{{$settings->four_month_roi}}" required>
                <small>Total ROI for 4 Months duration(%)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="sixm" value="sixm">
                <label>6 Months</label>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="sixm" value="{{$settings->six_month_roi}}" required>
                <small>Total ROI for 6 Months duration(%)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="ninem" value="ninem">
                <label>9 Months</label>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="ninem" value="{{$settings->nine_month_roi}}" required>
                <small>Total ROI for 9 Months duration(%)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="oney" value="oney">
                <label>1 Year</label>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="oneyear" value="{{$settings->one_year_roi}}" required>
                <small>Total ROI for 1 Year duration(%)</small>
            </div>
        </div>
        <button type="submit" class="px-4 btn btn-primary">Save</button>
    </form>  
</div>
@if (in_array("onem", $duraarray))
<script>document.getElementById("onem").checked= true;</script>
@endif
@if(in_array("fourm", $duraarray))
<script>document.getElementById("fourm").checked= true;</script>
@endif
@if(in_array("sixm", $duraarray))
<script>document.getElementById("sixm").checked= true;</script>
@endif
@if(in_array("ninem", $duraarray))
<script>document.getElementById("ninem").checked= true;</script>
@endif
@if(in_array("oney", $duraarray))
<script>document.getElementById("oney").checked= true;</script>
@endif