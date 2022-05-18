
@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
    <div class="content">
        <div class="page-inner">
           <div class="mt-2 mb-5">
                <h1 class="title1 d-inline"> Screenshot</h1>
                <div class="d-inline">
                    <div class="float-right btn-group">
                        <a class="btn btn-primary btn-sm" href="{{route('viewtransaction', $tran->id)}}"> <i class="fa fa-arrow-left"></i> back</a>
                    </div>
                </div>
            </div>
            <x-danger-alert/>
            <x-success-alert/>
            <!-- Beginning of  Dashboard Stats  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('storage/app/public/'. $tran->proof) }}" class="img-fluid w-75" alt="screenshot">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection