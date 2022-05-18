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
                                        <div class="p-4 card-body">
                                            <h3 class="card-title">My {{$settings->token_symbol}} Token</h3>
                                            <div class="p-3 mt-3 border rounded">
                                               <h5>Token Purchased</h5> 
                                               <h1 class="text-secondary d-inline">{{number_format(Auth::user()->token_bal)}} {{$settings->token_symbol}}</h1>
                                               <a href="{{route('buytoken')}}" class="float-right p-2 btn btn-primary">Buy More Token</a>  &nbsp; &nbsp;
                                               <p>Equivalent to {{number_format($total)}} USD</p>
                                            </div>

                                            <div class="p-3 mt-3 border rounded">
                                                <div>
                                                    <h5 class="d-block">Total Token Balance</h5> 
                                                    <h1 class="text-secondary d-inline">{{number_format(Auth::user()->tot_tk_bal)}} {{$settings->token_symbol}}</h1> 
                                                    <a href="#" data-toggle="modal" data-target="#transfermodal" class="float-right p-2 btn btn-danger"><i class="fas fa-reply"></i> Transfer</a> 
                                                </div>
                                                
                                                <div class="mr-2 d-inline mr-md-4">
                                                    <span><strong>Referral Token:</strong> </span> 
                                                    <span>{{number_format(Auth::user()->ref_bonus)}} {{$settings->token_symbol}}</span> 
                                                </div>
                                                <div class="mr-2 d-inline mr-md-4">
                                                    <span> <strong>Bonuses Token: </strong> </span> 
                                                    <span>{{number_format(Auth::user()->tk_bonus_bal)}} {{$settings->token_symbol}}</span>
                                                </div>
                                                <div class="d-inline">
                                                    <span> <strong>ROI Token: </strong> </span> 
                                                    <span>{{number_format(Auth::user()->roi_bal,2, '.', ',')}} {{$settings->token_symbol}}</span>
                                                </div>
                                             </div>
                                             <div class="p-3 mt-3 border rounded">
                                                <h5>Total Contributed</h5> 
                                                <h1 class="text-info">{{number_format($total)}} USD</h1>
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
            </div>
            @include('user.modal')
    @endsection
   
    