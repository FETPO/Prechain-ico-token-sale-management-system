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
                    <div class="row">
                       <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                <h2 class="d-inline">Account Activities Log</h2>
                                                <a href="{{route('clearactivity', Auth::user()->id)}}" class="float-right btn btn-danger btn-sm">clear all</a>
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
                                                            @foreach ($activities as $activity)
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
                        <div class="col-md-4">
                            @include('user.include.sideaction')
                        </div>   
                    </div>
            </div>
            @include('user.modal')
    @endsection
   
    