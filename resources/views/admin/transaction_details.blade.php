
@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <x-danger-alert/>
            <x-success-alert/>
            <!-- Beginning of  Dashboard Stats  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="p-3 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="d-inline text-primary">Transaction Details > </h1><span> {{$txn->txn_id}}</span>
                                    <div class="d-inline">
                                        @if ($txn->status == "pending")
                                       <a href="{{route('confirmtran', $txn->id)}}" class="float-right btn btn-success d-none d-md-block btn-sm "> Confirm </a>
                                        @endif
                                        <a href="{{route('canceltran', $txn->id)}}" class="float-right btn btn-sm text-white ml-2 redbtn">Delete</a>
                                        <a href="{{route('admin.trx')}}" class="float-right btn btn-primary d-none d-md-block btn-sm"> <i class='fas fa-arrow-left'></i> <span class=""> Go Back</span></a>&nbsp;&nbsp;
                                        <a href="{{route('admin.trx')}}" class="float-right btn btn-primary d-block d-md-none btn-sm"> <i class='fas fa-arrow-left'></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row">
                                <div class="col-md-3">
                                    <h5>Transaction Date</h5>
                                    <p>{{\Carbon\Carbon::parse($txn->created_at)->toDayDateTimeString()}}</p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Transaction Status</h5>
                                    @if ($txn->status == "pending")
                                    <p><span class="badge badge-danger redbtn">{{$txn->status}}</span></p>
                                    @else
                                    <p><span class="badge badge-success">{{$txn->status}}</span></p>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <h5>Transaction By</h5>
                                    <p>{{$txn->tuser->name}}</p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Transaction Review</h5>
                                    @if ($txn->status == "pending")
                                    <p>Not Reviewed Yet</p>
                                    @else
                                    <p>Approved</p>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-md-12">
                                    <h5>TRANSACTION INFO</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Transaction Type</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$txn->type}}</h5>
                                </div>
                            </div>
                            @if ($txn->type == "TRANSFER")
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Transfer to </h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$txn->address}}</h5>
                                </div>
                            </div>
                            @else
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Payment Method</h5>
                                </div>
                                <div class="col-md-8">
                                <h5>{{$txn->to}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Payable Amount</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$txn->amount}}</h5>
                                </div>
                            </div>  
                            @endif
                            @if($txn->type == "PURCHASE")
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Payment Screenshot</h5>
                                </div>
                                <div class="col-md-8">
                                <h5> <a href="{{route('upload.view', $txn->id)}}" class="btn btn-primary btn-sm"> <span class="">Screenshot</span></a></h5>
                                </div>
                            </div>  
                            @endif
                            
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Details</h5>
                                </div>
                                <div class="col-md-8">
                                    @if ($txn->type == "TRANSFER")
                                    <h5>Tokens Transfered</h5>
                                    @else
                                    <h5>Tokens Purchase</h5>
                                    @endif
                                </div>
                            </div>
                            @if ($txn->type != "TRANSFER")
                              <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>{{$txn->tuser->name}} Wallet Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$txn->tuser->wallet_type}}</h5>
                                    <p>{{$txn->tuser->wallet_address}}</p>
                                </div>
                            </div>  
                            @endif
                            

                            <div class="mt-5 row">
                                <div class="col-md-12">
                                    <h5>TOKEN DETAILS</h5>
                                </div>
                            </div>
                            @if ($txn->type != "TRANSFER")
                                <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Stage Name</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$txn->stage}}</h5>
                                </div>
                            </div>
                            @endif
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    @if ($txn->type == "TRANSFER")
                                    <h5>Amount in USD</h5>
                                    @else
                                      <h5>Contribution</h5>  
                                    @endif
                                    
                                </div>
                                <div class="col-md-8">
                                   <h5> {{number_format($txn->base_amt)}} USD</h5>
                                </div>
                            </div>
                            @if ($txn->type != "TRANSFER")
                             <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Token Added To</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$txn->tuser->name}}
                                </h5>
                                </div>
                            </div>   
                            @endif
                            
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Token(T)</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{number_format($txn->tokens)}} {{$settings->token_symbol}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Bonus Tokens (B)</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{number_format($txn->token_bonus)}} {{$settings->token_symbol}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Total Token</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{number_format($txn->total_token)}} {{$settings->token_symbol}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection