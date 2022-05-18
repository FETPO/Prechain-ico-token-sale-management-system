
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
                                <span class="card-title">Referrals for {{$user->name}}</span>
                                <a href="{{route('viewuser', $user->id)}}" class="float-right btn btn-danger btn-sm"> <i class='fas fa-arrow-left'></i> go back</a>
                                <div class="mt-4">
                                    @if ($referdby != NULL)
                                    <div class="p-2 text-center shadow bg-primary">
                                        <h4 class='text-white'>{{$user->name}} was referred by</h4>
                                        <h2>{{$referdby->name}}</h2>
                                    </div>  
                                    @endif
                                    <hr>

                                    <div class="table-responsive"> 
                                        <table class="table" id="ttable"> 
                                            <thead> 
                                                <tr> 
                                                    <th>USER REFERRED</th>
                                                    <th>EARN TOKEN</th>
                                                    <th>DATE REGISTERED</th>
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                @foreach ($referrals as $ref)
                                                <tr> 
                                                    <td>{{$ref->name}}</td> 
                                                    <td>{{$ref->bonus_to_ref}} {{$settings->token_symbol}}</td> 
                                                    <td>{{\Carbon\Carbon::parse($ref->created_at)->toDayDateTimeString()}}</td>
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