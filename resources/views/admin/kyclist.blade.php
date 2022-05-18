
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
                                <span class="card-title">All KYC Application                                </span>
                                <a href="#" data-toggle="modal" data-target="#kycsett" class="float-right btn btn-primary"> <i class='fas fa-cog'></i> Kyc Settings</a>
                                <!-- Modal -->
                                <div class="modal fade" id="kycsett" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="mb-2 d-inline">Verification Settings</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{route('savekycset')}}">
                                                    @csrf
                                                    @method('put')
                                                    <div class="mb-3 form-row">
                                                        <div class="mt-4 col-md-4">
                                                            <label>KYC Verification</label>
                                                            <div class="selectgroup">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="kycstat" value="on" {{$settings->kyc_verification == 'on' ? 'checked' : ''}} class="selectgroup-input">
                                                                    <span class="selectgroup-button">Enable</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="kycstat" {{$settings->kyc_verification == 'off' ? 'checked' : ''}} value="off" class="selectgroup-input">
                                                                    <span class="selectgroup-button">Disable</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="px-4 btn btn-primary">save settings</button>
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive"> 
                                <table class="table" id="ttable"> 
                                    <thead> 
                                        <tr> 
                                            <th>USER.</th>
                                            <th>DOC TYPE</th>
                                            <th>DATE SUBMITED</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                        @foreach ($kycs as $kyc)
                                         <tr> 
                                            <td>{{$kyc->kuser->name}}</td> 
                                            <td>{{$kyc->doc_type}}</td> 
                                            <td>{{\Carbon\Carbon::parse($kyc->created_at)->toDayDateTimeString()}}</td>
                                            <td>{{$kyc->status}}</td>
                                            <td>
                                                <a href="{{route('viewkyc', $kyc->id)}}" class="m-1 btn btn-info btn-sm">View Details</a>
                                                <a href="{{route('accept.ve', $kyc->id)}}" class="btn btn-success btn-sm">Accept</a>
											    <a href="{{route('reject.ve', $kyc->id)}}" class="btn btn-warning btn-sm">Reject</a>
                                                <a href="{{route('delete.ve', $kyc->id)}}" class="btn btn-danger btn-sm">Delete</a>
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