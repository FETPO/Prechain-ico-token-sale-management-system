
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
                            <div class="row" x-data="{open: false, toggle() { this.open = ! this.open }}">
                                <div class="col-md-12">
                                    <h1 class="d-inline text-primary">KYC Information of
                                    </h1><span> {{$kyc->kuser->name}}</span>
                                    <a href="{{route('kyclist')}}" class="float-right btn btn-primary d-none d-md-block btn-sm"> <i class='fas fa-arrow-left'></i> <span class=""> Go Back</span></a>
                                    <a href="{{route('kyclist')}}" class="float-right btn btn-primary d-block d-md-none btn-sm"> <i class='fas fa-arrow-left'></i> </a>
                                    <a href="{{route('accept.ve', $kyc->id)}}" class="btn btn-primary btn-sm">Accept</a>
									<a href="{{route('reject.ve', $kyc->id)}}" class="btn btn-danger btn-sm redbtn">Reject</a>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row">
                                <div class="col-md-3">
                                    <h5>Submited By</h5>
                                    <p>{{$kyc->kuser->name}}</p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Submited On</h5>
                                    {{\Carbon\Carbon::parse($kyc->created_at)->toDayDateTimeString()}}
                                </div>
                                <div class="col-md-3">
                                    <h5>Checked On</h5>
                                    @if ($kyc->status == "pending")
                                    <p>Not reviewed yet</p>
                                    @else
                                    <p>Reviewed</p>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    @if ($kyc->status == "pending")
                                    <p><span class="badge badge-danger">{{$kyc->status}}</span></p>
                                    @else
                                    <p><span class="badge badge-success">Approved</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-md-12">
                                    <h5>PERSONAL INFORMATION</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>First-name</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$kyc->firstname}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Last-name</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$kyc->lastname}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$kyc->kuser->email}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Phone Number</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$kyc->kuser->phone_number}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Date of Birth</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$kyc->dob}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Full Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$kyc->address}}</h5>
                                </div>
                            </div>

                            <div class="mt-5 row">
                                <div class="col-md-12">
                                    <h5>UPLOADED DOCUMNETS</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Documents</h5>
                                </div>
                                <div class="col-md-3">
                                   <a href="{{route('viewkycimg', $kyc->id)}}" class="btn btn-primary btn-sm"><span class="">View all</span></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection