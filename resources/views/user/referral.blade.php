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
                                                <h2>Referral</h2>
                                                <p>Invite your friends and family and receive free tokens.The referral link may be used during a token contribution, in the pre-sale and the ICO. Imagine giving your unique referral link to your crypto-friend and he or she contributes tokens using your link, the bonus will be sent to your account automatically. The strategy is simple: the more links you send to your colleagues, family and friends - the more tokens you may earn!</p>
                                                <h2>Referral URL</h2>
                                                <div class="mb-3 input-group">
                                                    <input type="text" class="form-control myInput readonly"  value="{{Auth::user()->ref_link}}" id="myInput" readonly>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                                    </div>
                                                </div>
                                                <small>Use above link to refer your friend and get referral bonus.</small>
                                                <hr>
                                                @if ($referdby != NULL)
                                                    <div class="p-2 text-center shadow bg-primary">
                                                        <h4 class='text-white'>I was referred by</h4>
                                                        <h2>{{$referdby->name}}</h2>
                                                    </div>  
                                                @endif
                                            </div>
                                            
                                            <div>
                                                <h2>Referral Lists</h2>
                                                <div class="table-responsive"> 
                                                    <table class="table" id="ttable"> 
                                                        <thead> 
                                                            <tr> 
                                                                <th>USER REFERRED</th>
                                                                <th>EARN TOKEN</th>
                                                                <th>DATE REGISTERED</th>
                                                            </tr> 
                                                        </thead> 
                                                        <tbody> 
                                                            @foreach ($referrals as $ref)
                                                                <tr> 
                                                                    <td>{{$ref->name}}</td> 
                                                                    <td>{{$ref->bonus_to_ref}} {{$settings->token_symbol}}</td> 
                                                                    <td>{{\Carbon\Carbon::parse($ref->created_at)->toDayDateTimeString()}}</td>
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
            </div>
            @include('user.modal')
    @endsection
   
    