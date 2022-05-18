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
                    <div class="mt-2 mb-4">
                        <h2 class="text-{{$text}} pb-2">Welcome, {{ Auth::user()->name}}!</h2>
                        {{-- @if ($settings->enable_annoc == "on")
                            <h5 id="ann" class="text-{{$text}}op-7 mb-4">{{$settings->annoucement}}</h5>
                            @if(Session::has('getAnouc') && Session::get('getAnouc') == "true" )
                                <script type="text/javascript">
                                    var announment = $("#ann").html();
                                    console.log(announment);
                                    swal({
                                        title: "Annoucement!",
                                        text: announment,
                                        icon: "info",
                                        buttons: {
                                            confirm: {
                                                text: "Okay",
                                                value: true,
                                                visible: true,
                                                className: "btn btn-info",
                                                closeModal: true
                                            }
                                        }
                                    });
                                </script>  
                            @endif
                            {{session()->forget('getAnouc')}}
                        @endif --}}
                    </div>
                    <x-danger-alert/>
                    <x-success-alert/>
                    <!-- Beginning of  Dashboard Stats  -->
                    <div class="row row-card-no-pd bg-{{$bg}} shadow-none">
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-round bg-{{$bg}}">
                                <div class="card-body">
                                    <div class="row bg-primary">
                                        <div class="p-3 col-12 col-stats">
                                            <div class="text-white numbers">
                                            <i class="fa fa-download text-warning"></i>
                                            <p class="text-white card-category">Token Balance</p>
                                            <h4 class="card-title text-{{$bg}}">
                                                @if (empty(Auth::user()->tot_tk_bal))
                                                    0
                                                @else
                                                  {{number_format(Auth::user()->tot_tk_bal,2,".",",")}}   
                                                @endif
                                                
                                                {{$settings->token_symbol}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-sm-6 col-md-4">
                            <div class="bg-white card card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-stats">
                                            <div class="numbers">
                                                <h3 class="card-category">
                                                    @if ($stage)
                                                        {{$stage->stage_name}} 
                                                        @if ($stage->sales == "on" && $stage->status == "active")
                                                        <span class="px-3 py-1 badge badge-success">
                                                        running 
                                                        </span>
                                                        @else
                                                        <span class="px-3 py-1 badge badge-warning">
                                                            paused 
                                                        </span>
                                                        @endif
                                                    @else
                                                        No Active Stage at the Moment
                                                    @endif
                                                    
                                                </h3>
                                                <h4 class="card-title text-{{$text}}">1 {{$settings->token_symbol}} = {{$settings->amt_usd}} USD</h4>
                                                <a href="{{route('buytoken')}}" class="p-2 btn btn-primary">Buy Token Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-sm-6 col-md-4">
                            <div class="bg-white card card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="p-3 col-12 col-stats">
                                            <div class="numbers">
                                                <h3 class="mb-3 card-category text-bold">Your Account Status</h3>
                                                @if (Auth::user()->email_verified_at)
                                                <a href="#" class="p-2 mr-2 btn btn-success btn-sm">Email Verified</a>
                                                @else
                                                <a href="#" class="p-2 mr-2 btn btn-sm text-white redbtn">Email not Verified</a>
                                                @endif
                                                @if (Auth::user()->verification_status != "Verified")
                                                <a href="{{route('kycinfo')}}" class="p-2 btn btn-primary btn-sm">Submit Kyc</a>
                                                @else
                                                <a href='#' class="p-2 btn btn-success btn-sm">Kyc Verified</a>
                                                @endif                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-no-pd bg-{{$bg}} shadow-none">
                       <div class="bg-white col-md-8">
                            <div class="row">
                                <div class="p-3 col-md-3">
                                    <img src="{{ asset('storage/app/public/'. $settings->logo) }}" class="img-fluid w-125"> 
                                </div> 
                                <div class="p-3 col-md-9">
                                    <h3>Thank you for choosing {{$settings->site_name}}</h3>
                                    <p>
                                        {{$settings->whitepaper}}
                                    </p>
                                    <a href="#" class="p-2 btn btn-primary">  <i class="text-white fa fa-download"></i> &nbsp; Download Whitepaper</a>
                                </div> 
                            </div>
                        </div> 
                    </div>
            </div>
            @include('user.modal')
    @endsection
   
    