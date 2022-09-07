@extends('admin.layouts.app')
@section('title','Add New')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add Group</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('permission_group.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Name *</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
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
