@extends('admin.layouts.app')
@section('title','Add New Venue')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add Venue</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('venue.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title *</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date *</label>
                        <input type="date" class="form-control" name="date" value="{{old('date')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Time *</label>
                        <input type="text" class="form-control" name="time" value="{{old('time')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Campus *</label>
                        <select class="form-control" name="campus_id">
                            <option value="">Please Select</option>
                            @if(count($campuses))
                                @foreach($campuses as $campus)
                                    <option value="{{$campus->id}}">{{$campus->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{old('address')}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-sm btn-success" value="Add New">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')

@endpush
