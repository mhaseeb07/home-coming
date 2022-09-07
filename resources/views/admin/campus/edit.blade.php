@extends('admin.layouts.app')
@section('title','Edit Campuses')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Campus</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('campuses.update',$campusData->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" value="{{(isset($campusData->name))?$campusData->name:old('name')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Location *</label>
                        <input type="text" class="form-control" name="location" value="{{(isset($campusData->location))?$campusData->location:old('location')}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-sm btn-success" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
@endpush
