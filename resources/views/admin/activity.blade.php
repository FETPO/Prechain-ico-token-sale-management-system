
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
                                <span class="card-title">Login Activity for {{$user->name}}</span>
                                <a href="{{route('viewuser', $user->id)}}" class="float-right btn btn-danger btn-sm"> <i class='fas fa-arrow-left'></i> go back</a>
                                <div>
                                    <div class="mt-4 table-responsive"> 
                                        <table class="table" id="ttable">
                                            <thead> 
                                                <tr> 
                                                    <th>DATE</th>
                                                    <th>DEVICE</th>
                                                    <th>BROWSER</th>
                                                    <th>IP</th>
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                @foreach ($useract as $activity)
                                                <tr> 
                                                    <td>{{\Carbon\Carbon::parse($activity->created_at)->toDayDateTimeString()}}</td> 
                                                    <td>{{$activity->device}}</td> 
                                                    <td>{{$activity->browser}}</td>
                                                    <td>{{$activity->ip}}</td>
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
        </div>
    </div>
@endsection