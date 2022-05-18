<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
} else {
    $bg="dark";
    $text = "light";
}
?>
@extends('layouts.app')
    @section('content')
        @include('admin.topmenu')
        @include('admin.sidebar')
        <div class="main-panel">
        <div class="content bg-{{$bg}}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h2 class="text-{{$text}} pb-2">Welcome, {{ Auth('admin')->User()->name }}!</h2>
                </div>
                @if(Session::has('message'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
                        </div>
                    </div>
                </div>
                @endif
                <!-- Beginning of  Dashboard Stats  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="shadow card">
                            <div class="card-body">
                                <h3 class="card-category">TOKEN SALE - {{$stage->stage_name}}</h3>
                                <h1 class="card-title">{{number_format($tran)}} <span class="px-3 py-1 badge badge-info">{{$settings->token_symbol}}</span></h4>
                                <span class="mr-2">Token-left: {{number_format($stage->token_avail)}}</span>
                                {{-- <a href="#" class="float-right text-primary">View</a>   --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shadow card">
                            <div class="card-body">
                                <h3 class="card-category">TOTAL USERS</h3>
                                <h1 class="card-title">{{number_format($users)}}<span class="px-3 py-1 badge badge-info"></span></h4>
                                <a href="{{route('userlist')}}" class="float-right text-primary">View</a>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-white card bg-primary">
                            <div class="card-body">
                                <h3 class="text-white card-category">AMOUNT COLLECTED</h3>
                                <h1 class="text-white card-title">{{number_format($usdamt, '2')}}</h4>
                                    <span class="px-3 py-1 badge badge-dark">USD</span>
                                    {{-- <span class="fab fa-bitcoin"><span> BTC: 0</span></span>
                                    <span class="fab fa-ethereum"><span> ETH: 0</span></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <span class="card-title">Recent Transaction</span>
                                <a href="{{route('admin.trx')}}" class="float-right text-primary">View all</a> 
                                <div class="table-responsive"> 
                                    <table class="table"> 
                                        <thead> 
                                            <tr> 
                                                <th>TRANX NO.</th>
                                                <th>TOKENS</th>
                                                <th>AMOUNT</th>
                                                <th>BASE AMOUNT</th>
                                                <th>TYPE</th>
                                                <th>STATUS</th>
                                            </tr> 
                                        </thead> 
                                        <tbody> 
                                            @foreach ($latest as $txn)
                                             <tr> 
                                                <td>{{$txn->txn_id}}</td> 
                                                <td>{{$txn->tokens}} {{$settings->token_symbol}}</td> 
                                                <td>{{$txn->amount}} {{$txn->to}}</td>
                                                <td>{{$txn->base_amt}} USD</td> 
                                                <td>{{$txn->type}}</td>
                                                <td> @if ($txn->status == "pending")
                                                    <p><span class="badge badge-danger">{{$txn->status}}</span></p>
                                                    @else
                                                    <p><span class="badge badge-success">{{$txn->status}}</span></p>
                                                    @endif
                                                </td>
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
    @endsection