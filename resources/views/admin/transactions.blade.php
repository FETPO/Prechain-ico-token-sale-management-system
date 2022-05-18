
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
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5">
                                <span class="card-title">Recent Transaction</span>
                                <a href="#" data-toggle="modal" data-target="#addtoken" class="float-right btn btn-primary"> <i class='fas fa-plus-circle'></i> Add Tokens</a>
                                <!-- Modal -->
                                <div class="modal fade" id="addtoken" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="mb-2 d-inline">Manually Add Tokens</h2>
                                                <div>
                                                    <form method="POST" action="{{route('addtoken')}}">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Tranx Type</label>
                                                                <select class="form-control" name="t_type">
                                                                    <option selected disabled>Select</option>
                                                                    <option>PURCHASE</option>
                                                                    <option>BONUS</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Tranx Date</label>
                                                                <input type="datetime-local" class="form-control" name="date" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Token Added To</label>
                                                                <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="user">
                                                                    <option selected disabled>Select</option>
                                                                    @foreach ($users as $user)
                                                                       <option value='{{$user->id}}'>{{$user->name}}</option> 
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Token for Stage</label>
                                                                <select class="form-control" name="stage">
                                                                    <option selected disabled>Select</option>
                                                                    @foreach ($stage as $stg)
                                                                       <option value='{{$stg->stage_name}}'>{{$stg->stage_name}}
                                                                        @if ($stg->status == "active")
                                                                            <span class="text-success">active</span>
                                                                        @endif
                                                                    </option> 
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Payment Gateway</label>
                                                                <select class="form-control" name="payment_mode">
                                                                    <option selected disabled>Select</option>
                                                                    <option>Paypal</option>
                                                                    <option>Manual</option>
                                                                    <option>Bitcoin</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Payment Amount</label>
                                                                <input type="number" class="form-control" name="amount">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label>Payment Address</label>
                                                                <input type="text" class="form-control" name="address" placeholder="Optional">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Number of Token</label>
                                                                <input type="number" class="form-control" name="tokens" required>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="px-3 btn btn-primary">Add Token</button>
                                                    </form>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive"> 
                                <table class="table" id="ttable"> 
                                    <thead> 
                                        <tr> 
                                            <th>TRANX NO.</th>
                                            <th>TOKENS</th>
                                            <th>AMOUNT</th>
                                            <th>BASE AMOUNT</th>
                                            <th>TYPE</th>
                                            <th>DATE</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                        @foreach ($trxns as $txn)
                                         <tr> 
                                            <td>{{$txn->txn_id}}</td> 
                                            <td>{{$txn->tokens}} {{$settings->token_symbol}}</td> 
                                            <td>{{$txn->amount}} {{$txn->to}}</td>
                                            <td>{{$txn->base_amt}} USD</td> 
                                            <td>{{$txn->type}}</td>
                                            <td>{{\Carbon\Carbon::parse($txn->created_at)->toDayDateTimeString()}}</td>
                                            <td> @if ($txn->status == "pending")
                                                <p><span class="badge badge-danger redbtn">{{$txn->status}}</span></p>
                                                @else
                                                <p><span class="badge badge-success">{{$txn->status}}</span></p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('viewtransaction', $txn->id)}}" class="m-1 btn btn-info btn-sm">View Details</a>
                                                
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