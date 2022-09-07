@extends('admin.layouts.app')
@section('title','Add New Medal')
@section('content')
<div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add Medals</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('medals.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title *</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description *</label>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}">
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