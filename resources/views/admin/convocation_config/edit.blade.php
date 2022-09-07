@extends('admin.layouts.app')
@section('title','Edit Config ')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Medal List</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('con-config.update',$CConfig->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Key *</label>
                        <input type="text" class="form-control" name="key" value="{{(isset($CConfig->key))?$CConfig->key:old('key')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Value *</label>
                        <input type="number" class="form-control" name="value" value="{{(isset($CConfig->value))?$CConfig->value:old('value')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Session *</label>
                        <select name="session_id" id="" class="form-control">
                            <option value="">Choose.</option>
                            @foreach($ConSession as $session)
                                <option value="{{$session->id}}"{{$session->id == $CConfig->session_id ? 'selected' : '' }}>{{$session->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Description *</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{$CConfig->description}}</textarea>
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

