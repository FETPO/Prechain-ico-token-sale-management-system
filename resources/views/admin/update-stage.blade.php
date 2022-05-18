
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
                                    <h2 class="d-inline">ICO/STO Stage Update</h2>
                                    <a href="{{route('stages')}}" class="float-right btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Go Back</a>
                                </div>
                                <div class="col-md-8 offset-md-2">
                                    <form method="POST" action="{{route('update.stage')}}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Stage Title/Name</label>
                                                <input type="text" class="form-control" value="{{$stage->stage_name}}" name="stage_name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-4">
                                            <label>Total Token Issues</label>
                                            <input type="text" class="form-control" value="{{$stage->token}}" name="token" required>
                                            <small>Define how many tokens available for sale on stage.</small>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label>Base Token Price</label>
                                            <input type="text" class="form-control" name="price" value="{{$stage->price}}" required>
                                            <small>Define your token rate. Usually USD per token.</small>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label>Bonus</label>
                                            <input type="text" class="form-control" value="{{$stage->bonus}}" name="bonus" required>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label>Min Per Transaction</label>
                                              <input type="text" class="form-control" name="min" value="{{$stage->min}}" required>
                                              <small>Purchase min amount of token per tranx.</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label>Max Per Transaction</label>
                                              <input type="text" class="form-control" name="max" value="{{$stage->max}}" required>
                                              <small>Purchase max amount of token per tranx.</small>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label>Start Date</label>
                                              <input type="datetime-local" class="form-control" name="startdate" value="{{$stage->start_date}}" required>
                                              <small>Start date/time for sale. Can't purchase before time.</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label>End Date</label>
                                              <input type="datetime-local" class="form-control" name="enddate" value="{{$stage->end_date}}" required>
                                              <small>Finish date/time for sale. Can't purchase after time.</small>
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{$stage->id}}" name="stage_id">
                                        <button type="submit" class="btn btn-primary">Update Stage</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection