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
                    <div class="row">
                       <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a href="#per" class="nav-link active" data-toggle="tab">Personal Data</a>
                                                </li>
                                                {{-- <li class="nav-item">
                                                    <a href="#set" class="nav-link" data-toggle="tab">Settings</a>
                                                </li> --}}
                                                <li class="nav-item">
                                                    <a href="#pas" class="nav-link" data-toggle="tab">Password</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="per">
                                                    <form method="POST" action={{route('profile.update')}}>
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Fullname</label>
                                                                <input type="text" class="form-control" value="{{Auth::user()->name}}" name="fullname">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Email Address</label>
                                                                <input type="email" class="form-control" value="{{Auth::user()->email}}" name="email" readonly>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Mobile Number</label>
                                                                <input type="text" class="form-control" value="{{Auth::user()->phone_number}}" name="number">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Date of Birth</label>
                                                                <input type="date" value="{{Auth::user()->dob}}" class="form-control"  name="dob">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Nationality</label>
                                                                <select class="form-control" name="nationality">
                                                                    <option selected>{{Auth::user()->nationality}}</option>
                                                                   @include('profile.countries')
                                                                </select>
                                                            </div>
                                                            @if (Auth::user()->verification_status == "Verified")
                                                            <div class="form-group col-md-6">
                                                                <label>Address</label>
                                                                <textarea class="form-control" disabled>
                                                                    {{$address->address}}
                                                                </textarea>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="set">
                                                    <p>Profile tab content ...</p>
                                                </div>
                                                <div class="tab-pane fade" id="pas">
                                                    <form method="POST" action="{{route('password.update')}}">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Old Password</label>
                                                                <input type="password" class="form-control" name="old_password">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>New Password</label>
                                                                <input type="password" class="form-control" name="password">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Confirm New Password</label>
                                                                <input type="password" class="form-control" name="password_confirmation">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update Password</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Two-Factor Verification</h3>
                                            <p class="card-text">Two-factor authentication is a method for protection of your account. When it is activated you are required to enter not only your password, but also a special code. You can receive this code in mobile app. Even if third party gets access to your password, they still won't be able to access your account without the 2FA code.</p>
                                            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                                <div class="mt-2">
                                                    @livewire('profile.two-factor-authentication-form')
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            @include('user.include.sideaction')
                        </div>   
                    </div>
            </div>
            @include('user.modal')
    @endsection
   
    