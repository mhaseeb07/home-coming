@extends('admin.layouts.app')
@section('title','Edit Eligible Types')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Eligible Types</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('eligible-types.update',$eligibleTypesEdit->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" class="form-control" name="title" value="{{(isset($eligibleTypesEdit->title))?$eligibleTypesEdit->title:old('title')}}">
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
