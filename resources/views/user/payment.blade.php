
@extends('layouts.app')
@section('content')
    @include('user.topmenu')
    @include('user.sidebar')
    <div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <x-danger-alert/>
            <x-success-alert/>
            <x-error-alert/>
            <!-- Beginning of  Dashboard Stats  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5 row">
                                <div class="col-md-12">
                                    <h2 class="d-inline">Make Payment</h2>
                                    <a href="{{route('cancelpayment')}}" class="float-right btn btn-danger btn-sm">Cancel</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div>
                                        <p>You have chosen to pay with {{$payment_mode}}</p>
                                        <h2>{{$payment_mode}} DETAILS</h2>
                                        @if($payment_mode == "BTC")
                                        <div>
                                            <p>Please send {{$amount}} {{$payment_mode}} to the {{$payment_mode}} Address Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control myInput readonly" id="myInput" value="{{$pay_info->address}}" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </div>  
                                        <div class="">
                                            <p> <strong>Network Mode:</strong> {{$pay_info->networkmode}}</p>
                                        </div>   
                                        @endif
                                        @if($payment_mode == "LTC")
                                        <div>
                                            <p>Please send {{$amount}} {{$payment_mode}} to the {{$payment_mode}} Address Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control myInput readonly" id="myInput" value="{{$pay_info->address}}" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </div>  
                                        <div class="">
                                            <p> <strong>Network Mode:</strong> {{$pay_info->networkmode}}</p>
                                        </div>    
                                        @endif
                                        @if($payment_mode == "ETH")
                                        <div>
                                            <p>Please send {{$amount}} {{$payment_mode}} to the {{$payment_mode}} Address Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control myInput readonly" id="myInput" value="{{$pay_info->address}}" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </div>  
                                        <div class="">
                                            <p> <strong>Network Mode:</strong> {{$pay_info->networkmode}}</p>
                                        </div>   
                                        @endif
                                        @if($payment_mode == "USDT")
                                        <div>
                                            <p>Please send {{$amount}} {{$payment_mode}} to the {{$payment_mode}} Address Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control myInput readonly" id="myInput" value="{{$pay_info->address}}" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </div>  
                                        <div class="">
                                            <p> <strong>Network Mode:</strong> {{$pay_info->networkmode}}</p>
                                        </div>    
                                        @endif
                                        @if($payment_mode == "USD")
                                        <div>
                                            <p>Please send {{$amount}} {{$payment_mode}} to the {{$payment_mode}} account details Below and upload a proof of payment afterwards </p>  
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Bank</label>
                                            <input type="text" value="{{$pay_info->bankname}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>  
                                        <div class="mb-3 form-group">
                                            <label>Account Name</label>
                                            <input type="text" value="{{$pay_info->acntname}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div> 
                                        <div class="mb-3 form-group">
                                            <label>Account Number</label>
                                            <input type="text" value="{{$pay_info->acntnum}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Swift Code</label>
                                            <input type="text" value="{{$pay_info->swcode}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>
                                        @endif
                                        @if($payment_mode == "EUR")
                                        <div>
                                            <p>Please send {{$amount}} {{$payment_mode}} to the {{$payment_mode}} account details Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Bank</label>
                                            <input type="text" value="{{$pay_info->bankname}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>  
                                        <div class="mb-3 form-group">
                                            <label>Account Name</label>
                                            <input type="text" value="{{$pay_info->acntname}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div> 
                                        <div class="mb-3 form-group">
                                            <label>Account Number</label>
                                            <input type="text" value="{{$pay_info->acntnum}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Swift Code</label>
                                            <input type="text" value="{{$pay_info->swcode}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>  
                                        @endif
                                        @if($payment_mode == "GBP")
                                        <div>
                                            <p>Please send {{$amount}} {{$payment_mode}} to the {{$payment_mode}} account details Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Bank</label>
                                            <input type="text" value="{{$pay_info->bankname}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>  
                                        <div class="mb-3 form-group">
                                            <label>Account Name</label>
                                            <input type="text" value="{{$pay_info->acntname}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div> 
                                        <div class="mb-3 form-group">
                                            <label>Account Number</label>
                                            <input type="text" value="{{$pay_info->acntnum}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Swift Code</label>
                                            <input type="text" value="{{$pay_info->swcode}}" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>   
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Payment Completed
                                      </button>
                                      <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <h3>Are you sure you have completed the payment?</h3>
                                                        <form method="POST" action="{{route('completepayment')}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3 form-group">
                                                                <label>Please upload screenshot of payment as proof</label>
                                                                <input type="file" class="form-control" required name="proof">
                                                            </div>  
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Completed</button>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection