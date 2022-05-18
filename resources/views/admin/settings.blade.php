
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
                                    <a href="#ico" class="nav-link active" data-toggle="tab">ICO/STO Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#webset" class="nav-link" data-toggle="tab">Website Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#refset" class="nav-link" data-toggle="tab">Referral Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pset" class="nav-link" data-toggle="tab">Payment Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#othset" class="nav-link" data-toggle="tab">Staking Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="ico">
                                    @include('admin.settings.ico_settings')
                                </div>
                                <div class="tab-pane fade show" id="webset">
                                    @include('admin.settings.web_settings')
                                </div>
                                <div class="tab-pane fade show" id="refset">
                                    @include('admin.settings.referral')
                                </div>
                                <div class="tab-pane fade show" id="pset">
                                    @include('admin.settings.payment')
                                </div>
                                <div class="tab-pane fade show" id="othset">
                                    @include('admin.settings.staking')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection