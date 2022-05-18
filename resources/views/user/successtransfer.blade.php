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
                       <div class="text-center col-md-6 offset-md-3">
                            <div class="text-center card">
                                <div class="text-center card-body">
                                    <h4 class="mb-0 text-success"><i class="fas fa-check-circle fa-4x"></i></h4> <br>
                                    <h2 class="text-success">TRANSFER SUCCESSFUL</h2>
                                    <h2 class="text-warning">{{$settings->token_symbol}}{{$amount}}</h2>
                                    <p>You have successfully transfered {{$settings->token_symbol}}{{$amount}} to {{$bname}}, {{$email}}. Transaction Reference Number #{{$ref}}</p> 
                                    <p> We recommend you contact the receiver to confirm if they have recieve the token. click okay</p>
                                    <form method="POST" action="{{route('completet')}}">
                                        @csrf
                                        <input type="submit" class="btn btn-primary" value="Okay">
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </div>
            </div>
    @endsection
   
    