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
                    <div class="mt-5 row">
                       <div class="col-md-8 offset-md-2">
                            <div class="mb-4 text-center">
                                <h1>KYC Verification</h1>
                                <p>To comply with regulations each participant is required to go through identity verification (KYC/AML) to prevent fraud, money laundering operations, transactions banned under the sanctions regime or those which fund terrorism. Please, complete our fast and secure verification process to participate in token offerings.</p>
                            </div>

                            <div class="card">
                                <div class="p-3 py-5 text-center card-body">
                                    <div class="px-5">
                                    <div><i class="fas fa-copy fa-4x"></i> </div>
                                    </div>
                                    <h2>You have not submitted your necessary documents to verify your identity.</h2>
                                    <p>It would great if you please submit the form. If you have any question, please feel free to contact our support team.</p>
                                    <a class="p-2 btn btn-primary " href="{{route('kycapplication')}}">Click here to complete your KYC</a>
                                </div>
                            </div>
                        </div>  
                    </div>
            </div>
    @endsection
   
    