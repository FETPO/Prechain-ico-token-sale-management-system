<?php
if (Auth::user()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
} else {
    $bg="dark";
    $text = "light";
}

?>

@extends('layouts.app')
    @section('content')
        @include('user.topmenu')
        @include('user.sidebar')
        <div class="main-panel bg-{{$bg}}">
            <div class="content bg-{{$bg}}">
                <div class="page-inner">
                    <x-danger-alert/>
                    <x-success-alert/>
                    <div class="row">
                       <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <div>
                                                   <h2>Stake your Token</h2> 
                                                </div>
                                                <div class="p-3 shadow-lg">
                                                    @if (!$mystake)
                                                        <div class="d-inline">
                                                            <span class="text-danger">Minimum Amount:</span> <span>{{$settings->minstake . ' '. $settings->token_symbol}}</span>
                                                        </div> &nbsp; &nbsp;
                                                        <div class="d-inline">
                                                            <span class="text-danger">Maximum Amount:</span> <span>{{$settings->maxstake . ' '. $settings->token_symbol}}</span> 
                                                        </div>&nbsp; &nbsp;
                                                        
                                                        <div class="mt-4">
                                                            <form action="{{route('stakenow')}}" method="post" class="form-inline">
                                                                @csrf
                                                                <select name="duration" id="dura" class="form-control" onchange="calcAmount(this)">
                                                                    @if (in_array("onem", $duraarray))
                                                                    <option value="1 Month">1 Months</option> 
                                                                    @endif
                                                                    @if (in_array("fourm", $duraarray))
                                                                      <option value="4 Months">4 Months</option>  
                                                                    @endif
                                                                    @if (in_array("sixm", $duraarray))
                                                                      <option value="6 Months">6 Months</option>  
                                                                    @endif
                                                                    @if (in_array("ninem", $duraarray))
                                                                      <option value="9 Months">9 Months</option>  
                                                                    @endif
                                                                    @if (in_array("oney", $duraarray))
                                                                      <option value="1 Year">1 Year</option>  
                                                                    @endif
                                                                </select>
                                                                <input type="text" id="exroi" value="{{$settings->roi}}" class="form-control" readonly>

                                                                <input type="hidden" name="roiexpected" id="exroireal">
                                                                <input type="number" name="amount" min="{{$settings->minstake}}" placeholder="Amount" max="{{$settings->maxstake}}"  class="form-control" required>
                                                                <button type="submit" class="px-4 btn btn-primary">Stake</button>
                                                            </form>
                                                        </div>  
                                                    @else
                                                       <div>
                                                        <h4>Your Stake is currenly @if ($mystake->status == 'active')
                                                            <span class="badge badge-success">Active</span>
                                                            @else
                                                            <span class="badge badge-danger">Expired</span>
                                                            @endif</h4>
                                                        <h4>Amount on Stake: <span class="text-primary">{{$mystake->amount}} {{$settings->token_symbol}}</span> </h4>
                                                        <h4>Date Started: <span class="text-primary">{{\Carbon\Carbon::parse($mystake->created_at)->toDayDateTimeString()}}</span> </h4>
                                                        <h4>Expiring Date: <span class="text-primary">{{\Carbon\Carbon::parse($mystake->expire_date)->toDayDateTimeString()}}</span> </h4>
                                                       
                                                        <div class="mt-2">
                                                          <a href="{{route('cancelstake',$mystake->id)}}" class="px-4 btn btn-danger btn-sm">Cancel Stake</a>  
                                                        </div>
                                                        
                                                    </div> 
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="mt-4">
                                                <h2>ROI LOG</h2>
                                                <div class="table-responsive"> 
                                                    <table class="table" id="ttable"> 
                                                        <thead> 
                                                            <tr> 
                                                                <th>TOKEN RECEIVED</th>
                                                                <th>NARRATION</th>
                                                                <th>DATE</th>
                                                            </tr> 
                                                        </thead> 
                                                        <tbody> 
                                                            @foreach ($rois as $profit)
                                                                <tr> 
                                                                    <td>{{number_format($profit->amount, '2', '.', ',')}} {{$settings->token_symbol}}</td> 
                                                                    <td>{{$profit->narration}}</td> 
                                                                    <td>{{\Carbon\Carbon::parse($profit->created_at)->toDayDateTimeString()}}</td>
                                                                </tr>   
                                                            @endforeach
                                                            
                                                        </tbody> 
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            @include('user.include.sideaction')
                        </div>   
                    </div>
                    <!-- /plans Modal -->
                <script type="text/javascript">
                    var amount = document.getElementById('exroi');
                    var amountpay = document.getElementById('exroireal');
                    amount.value = "{{$settings->one_month_roi}}"+ '%';
                    amountpay.value = "{{$settings->one_month_roi}}";
                    function calcAmount(sub) {
                        if(sub.value=="1 Month"){
                            
                            amount.value = "{{$settings->one_month_roi}}"+ '%';
                            amountpay.value = "{{$settings->one_month_roi}}";
                        }if(sub.value=="4 Months"){
                           
                            amount.value = "{{$settings->four_month_roi}}"+ '%';
                            amountpay.value = "{{$settings->four_month_roi}}";
                        }if(sub.value=="6 Months"){
                           
                            amount.value = "{{$settings->six_month_roi}}"+ '%';
                            amountpay.value = "{{$settings->six_month_roi}}";
                        }
                        if(sub.value=="9 Months"){
                           
                            amount.value = "{{$settings->nine_month_roi}}"+ '%';
                            amountpay.value = "{{$settings->nine_month_roi}}";
                        }
                        if(sub.value=="1 Year"){
                            
                            amount.value = "{{$settings->one_year_roi}}"+ '%';
                            amountpay.value = "{{$settings->one_year_roi}}";
                        }
                    }
                </script>
            </div>
            @include('user.modal')
    @endsection

   
    