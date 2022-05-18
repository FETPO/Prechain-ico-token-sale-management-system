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
                    <x-error-alert/>
                    @if ($userkyc && $userkyc->status == "pending")
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <i class="fa fa-info-circle"></i>
                                Your submission is under review, you will be notified if your verification is successfull or not.
                            </div>
                        </div>
                    </div>
                    @elseif($userkyc && $userkyc->status == "Verified")
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissable">
                                <i class="fa fa-info-circle"></i>
                                Your Account have been successfully verified.
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="mt-2 row">
                       <div class="col-md-8 offset-md-2">
                            <div class="mb-4 text-center">
                                <h1>Begin your ID-Verification</h1>
                                <p>Verify your identity to participate in token sale.</p>
                            </div>

                            <div class="card">
                                <div class="p-3 py-5 card-body">
                                    <form method="POST" action="{{route('submitkyc')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Firstname</label>
                                                <input type="text" class="form-control" name="firstname" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Lastname</label>
                                                <input type="text" class="form-control" name="lastname" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Date of birth</label>
                                                <input type="date" class="form-control" name="dob"required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Gender</label>
                                                <select class="form-control" name="gender" required>
                                                    <option selected disabled>Choose...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Full Address</label>
                                                <input type="text" class="form-control" placeholder="country, state, city, street, postal code" name="address" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Document Type</label>
                                                <select class="form-control" name="doc_type" required>
                                                    <option selected disabled>Choose...</option>
                                                    <option>Drivers Licence</option>
                                                    <option>Nataional ID</option>
                                                    <option>Passport</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Document Upload (Front)</label>
                                                <input type="file" class="form-control" name="doc1" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Document Upload (Back)</label>
                                                <input type="file" class="form-control" name="doc2" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Photo Proof(Face)</label>
                                                <input type="file" class="form-control" name="photo" required>
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" name="userid" value="{{Auth::user()->id}}">
                                        @if ($userkyc && $userkyc->status == "pending")
                                            <button type="submit" class="btn btn-primary" disabled>Submit for Verification</button>
                                        @elseif($userkyc && $userkyc->status == "Verified")
                                        <button type="submit" class="btn btn-success" disabled>Account Verified</button>
                                        @else
                                             <button type="submit" class="btn btn-primary">Submit for Verification</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </div>
            </div>
    @endsection
   
    