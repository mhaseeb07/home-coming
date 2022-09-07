@extends('admin.layouts.app')
@section('title','Edit Regalias')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Regalias</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('regalias-list.update',$regaliasEdit->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" value="{{(isset($regaliasEdit->name))?$regaliasEdit->name:old('name')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                            <label class="form-label">Amount *</label>
                            <input type="text" class="form-control" name="amount" value="{{(isset($regaliasEdit->amount))?$regaliasEdit->amount:old('amount')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{(isset($regaliasEdit->description))?$regaliasEdit->description:old('description')}}">
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
