@extends('admin.layouts.app')
@section('title','Add New Regalia')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <div>
            <h1 class="h3 d-inline">Add Regalias</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

        <form action="{{route('regalias-list.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Name *</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Amount *</label>
                    <input type="text" class="form-control" name="amount" value="{{old('amount')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Description</label>
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
