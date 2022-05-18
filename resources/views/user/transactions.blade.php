
@extends('layouts.app')
    @section('content')
        @include('user.topmenu')
        @include('user.sidebar')
        <div class="main-panel ">
            <div class="content ">
                <div class="page-inner">
                    <x-danger-alert/>
                    <x-success-alert/>
                    <div class="row">
                       <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Transactions list</h5>
                                    <div class="table-responsive"> 
                                        <table class="table" id="ttable"> 
                                            <thead> 
                                                <tr> 
                                                    <th>TRANX NO.</th>
                                                    <th>TOKENS</th>
                                                    <th>AMOUNT</th>
                                                    <th>USD AMOUNT</th>
                                                    <th>TYPE</th>
                                                    <th>DATE</th>
                                                    <th>STATUS</th>
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                @foreach ($recent_txn as $txn)
                                                   <tr> 
                                                    <td>{{$txn->txn_id}}</td>
                                                    <td>{{$txn->tokens}} {{$settings->token_symbol}}</td> 
                                                    <td>{{$txn->amount}} {{$txn->to}}</td>
                                                    <td>{{$txn->base_amt}} USD</td>
                                                    <td>{{$txn->type}}</td>
                                                    <td>{{\Carbon\Carbon::parse($txn->created_at)->toDayDateTimeString()}}</td>
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
    @endsection
   
    