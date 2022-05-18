
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
                                    <h1 class="d-inline text-primary">User Details</h1><span></span>
                                    <div class="d-inline">
                                        <div class="float-right btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-lg-right">
                                                <a href="#" data-toggle="modal" data-target="#sendmail" class="dropdown-item" type="button"> Send Email </a>
                                                <a href="{{route('useractivity', $user->id)}}" class="dropdown-item" type="button">Activity</a>
                                                <a href="{{route('userreferral', $user->id)}}" class="dropdown-item" type="button">Referral</a>
                                                <a href="" data-toggle="modal" data-target="#resetpswdModal" class="dropdown-item" type="button">Reset Password</a>
                                                @if($user->acnt_status==NULL || $user->acnt_status=='suspend')
												<a href="{{route('unsuspend', $user->id)}}" class="dropdown-item" type="button">Unsuspend</a>
                                                @else
                                                <a href="{{route('suspend.user', $user->id)}}" class="dropdown-item" type="button">Suspend</a>
                                                @endif
                                                <a href="" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" type="button">Delete User</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row">
                                <div class="col-md-3">
                                    <h5>Token Balance</h5>
                                    <p>{{number_format($user->tot_tk_bal, '2', '.', ','). ' '. $settings->token_symbol}}</p>
                                    
                                </div>
                                <div class="col-md-3">
                                    <h5>Contributed</h5>
                                    <p>{{$user->token_bal * $settings->amt_usd}} USD</p>
                                </div>
                                <div class="col-md-3">
                                    <h5>User Account Status</h5>
                                    @if ($user->acnt_status == "suspend")
                                    <span class="badge badge-danger">Suspended</span>
                                    @else
                                    <span class="badge badge-success">Active</span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <h5>KYC</h5>
                                    @if ($user->verification_status == "Not Verified")
                                    <span class="badge badge-danger">Not Verified Yet</span>
                                    @else
                                    <span class="badge badge-success">Verified</span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-md-12">
                                    <h5>USER INFORMATION</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Fullname</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->name}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->email}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Mobile Number</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->phone_number}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Date of birth</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->dob}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Nationality</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->nationality}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Wallet Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>@if ($user->wallet_address)
                                    {{$user->wallet_address}}
                                   @else
                                   Not added yet!
                                   @endif</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Joined</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{\Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset user password Modal -->
    <div id="resetpswdModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to reset password for {{$user->name}} to <span class="text-primary font-weight-bolder">user01236</span></p>
                    <a class="btn btn-primary" href="{{route('resetpassword', $user->id)}}">Reset Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Reset user password Modal -->

     <!-- Delete user Modal -->
     <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete {{$user->name}}</strong></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="p-3 modal-body">
                    <p>Are you sure you want to delete {{$user->name}}</p>
                    <a class="btn btn-danger" href="{{route('deleteuser', $user->id)}}">Yes i'm sure</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete user Modal -->

    <!-- send a single user email Modal-->
    <div id="sendmail" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Email Message</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>This message will be sent to {{$user->name}}</p>
                    <form  method="post" action="{{route('sendmail')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Email Subject</label>
                                <input type="text" class="form-control" placeholder="Email Subject" name="subject" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Email Greeting</label>
                                <input type="text" class="form-control" placeholder="Email Greeting" name="greeting" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea placeholder="Type your message here" class="form-control" name="message" row="4" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                               <button class="px-5 btn btn-success" type="submit"> Send </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Trading History Modal -->
@endsection