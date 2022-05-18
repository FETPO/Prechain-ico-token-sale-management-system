
@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
    <div class="content">
        <div class="page-inner">
           <div class="mt-2 mb-5">
                <h1 class="title1 d-inline">KYC Documents</h1>
                <div class="d-inline">
                    <div class="float-right btn-group">
                        <a class="btn btn-primary btn-sm" href="{{route('viewkyc', $kyc->id)}}"> <i class="fa fa-arrow-left"></i> back</a>
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
                            <h4>image(front)</h4>
                            <img src="{{ asset('storage/app/public/'. $kyc->doc1) }}" class="img-fluid w-75" alt="image-front">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>image(back)</h4>
                            <img src="{{ asset('storage/app/public/'. $kyc->doc2) }}" class="img-fluid w-75" alt="image-back">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Photograph</h4>
                            <img src="{{ asset('storage/app/public/'. $kyc->photo) }}" class="img-fluid w-75" alt="photograp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection