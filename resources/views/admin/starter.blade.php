
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection