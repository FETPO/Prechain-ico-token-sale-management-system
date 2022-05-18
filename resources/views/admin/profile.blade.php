
@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1">Account Settings</h1>
            </div>
            <x-danger-alert/>
            <x-success-alert/>
            <!-- Beginning of  Dashboard Stats  -->
            @if(count($errors) > 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissable" role="alert" >
                        <button type="button" clsass="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        @foreach ($errors->all() as $error)
                        <i class="fa fa-warning"></i> {{ $error }}
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a href="#ico" class="nav-link active" data-toggle="tab">Account Information</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#webset" class="nav-link" data-toggle="tab">Security</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="ico">
                                    <div class="row profile">
                                        <div class="p-2 col-md-8 offset-md-2">
                                            <div class="card p-5 shadow-lg ">
                                                <form role="form" method="post"action="{{route('upadprofile')}}">
                                                    <label class="">Name</label>
                                                    <input type="text" name="name" value="{{Auth('admin')->user()->name }}" class="form-control  "> <br>

                                                    <label class="">Email</label>
                                                    <input type="text" name="email" value="{{Auth('admin')->user()->email }}" class="form-control  "> <br>

                                                    <label class="">Phone Number</label>
                                                    <input type="text" name="phone"  class="form-control  " value="{{Auth('admin')->user()->phone }}"> <br>
                
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="webset">
                                    <div class="mb-5 row">
                                        <div class="col-lg-8 offset-lg-2 card p-4  shadow">
                                            <form method="post" action="{{route('adminupdatepass')}}">
                                                <div class="form-group">
                                                    <label class=" ">Old Password</label>
                                                    <input type="password" name="old_password" class="form-control  " required>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" ">New Password* </label>
                                                    <input type="password" name="password" class="form-control  " required>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" ">Confirm Password</label>
                                                    <input type="password" name="password_confirmation" class="form-control  " required>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <input type="hidden" name="id" value="{{Auth('admin')->User()->id}}">
                                                    <input type="hidden" name="current_password" value="{{Auth('admin')->User()->password}}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </div>
                                                
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
@endsection