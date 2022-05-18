
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
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <h2 class="d-inline">Available ICO/STO Stage</h2>
                                        <a href="{{route('newstage')}}" class="float-right btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add New Stage</a>
                                    </div>
                                    @foreach ($stages as $stage)
                                    <div class="col-md-4 col-sm-12">
                                        <div class="p-1 border rounded shadow-none card position-relative" x-data="{open: false, toggle() { this.open = ! this.open }}">
                                            <div class="p-3">
                                              <h3 class="card-category d-inline">{{$stage->stage_name}}
                                                @if ($stage->status == "active" && $stage->sales == "on")
                                                <span class="px-3 py-1 badge badge-success">RUNNING</span>
                                                @elseif($stage->status == "active" && $stage->sales != "on")
                                                <span class="px-3 py-1 badge badge-warning">PAUSED</span>
                                                @else
                                                <span class="px-3 py-1 badge badge-danger">EXPIRED</span>
                                                @endif 
                                              </h3> 
                                              @if ($stage->status == "active")
                                                  <a class="float-right cursor" @click="toggle()" @click.away = "open = false"><i class="fas fa-ellipsis-v"></i></a>
                                              @endif
                                              
                                            </div>
                                            <div class="mt-2 shadow-sm bg-light w-75 position-absolute" x-show="open">
                                                <ul class="animated fadeIn" id="planid">
                                                    
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('edit.stage', $stage->id)}}">UPDATE STAGE</a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    
                                                    @if ($stage->sales != "on")
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('resumesales', $stage->id)}}">RESUME SALES</a>
                                                    </li>
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    @else
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('pausesales', $stage->id)}}">PAUSE SALES</a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="p-2 mt-2 text-center">
                                                <small>Token Issued:</small>
                                                <h1 class='text-primary'>{{$stage->token}}</h1>
                                                <small>Available: {{$stage->token_avail}} Tokens</small> 
                                            </div>
                                            <hr>
                                            <div class="p-4 row">
                                                <div class="col-6">
                                                    <p class="p-0 m-0">Base Price</p>
                                                    <h1 class='p-0 m-0 text-primary d-inline'>{{$stage->price}}</h1>
                                                    <small>USD</small>
                                                </div>
                                                <div class="col-6">
                                                    <p class="p-0 m-0">Base Bonus</p>
                                                    <h1 class='p-0 m-0 text-primary d-inline'>{{$stage->bonus}}</h1>
                                                    <small>USD</small>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class='p-3 row'>
                                                <div class="col-6">
                                                    <p class="p-0 m-0">Start Date</p>
                                                    <h5 class='p-0 m-0 d-inline'>{{\Carbon\Carbon::parse($stage->start_date)->toDayDateTimeString()}}</h5>
                                                </div>
                                                <div class="col-6">
                                                    <p class="p-0 m-0">End Date</p>
                                                    <h5 class='p-0 m-0 d-inline'>{{\Carbon\Carbon::parse($stage->end_date)->toDayDateTimeString()}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection