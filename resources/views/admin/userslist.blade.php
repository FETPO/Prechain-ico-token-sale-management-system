@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">

                <x-danger-alert />
                <x-success-alert />
                <!-- Beginning of  Dashboard Stats  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" x-data="{ isopen: false, toggle() { this.isopen = !this.isopen } }">
                                <div class="mb-5">
                                    <div>
                                        <span class="card-title">All User List</span>
                                        <a href="#" data-toggle="modal" data-target="#sendmailModal"
                                            class="btn btn-secondary btn-sm float-left mr-2">Send Message</a>
                                        <!-- send all users email -->
                                        <div id="sendmailModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div
                                                        class="modal-header ">
                                                        <h4 class="modal-title ">This message will
                                                            be sent to all your users.</h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <livewire:admin.send-message-all />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /send all users email Modal -->
                                    </div>

                                    <a href="#" data-toggle="modal" data-target="#adduser"
                                        class="float-right btn btn-primary"> <i class='fas fa-plus-circle'></i> Add User</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="adduser" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="mb-2 d-inline">Manually Add Users</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <form method="POST" action="{{ route('adduser') }}">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label>Username</label>
                                                                    <input type="text" class="form-control"
                                                                        name="username" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Fullname</label>
                                                                    <input type="text" class="form-control" name="name"
                                                                        required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Email</label>
                                                                    <input type="email" class="form-control" name="email"
                                                                        required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Password</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Confirm Password</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password_confirmation" required>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="px-4 btn btn-primary">Add
                                                                User</button>
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
                                                <th>USER</th>
                                                <th>EMAIL</th>
                                                <th>TOKENS</th>
                                                <th>ACCOUNT STATUS</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->token_bal }} {{ $settings->token_symbol }}</td>
                                                    <td>{{ $user->acnt_status }}</td>
                                                    <td>
                                                        <a href="{{ route('viewuser', $user->id) }}"
                                                            class="m-1 btn btn-primary btn-sm">View Details</a>

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
