@extends('admin.layouts.app')
@section('title','Add New Session')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add Session</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('session.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Session *</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description *</label>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Session Year *</label>
                        <input type="text" class="form-control" name="session_year" value="{{old('session_year')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status *</label>
                        <select class="form-control" name="status">
                            <option value="">Please Select</option>
                            <option value="1">Active</option>
                            <option value="0">Reject</option>
                        </select>
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
