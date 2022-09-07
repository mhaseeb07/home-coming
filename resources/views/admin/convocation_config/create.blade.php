@extends('admin.layouts.app')
@section('title','Add Config')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add Config</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('con-config.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">key  *</label>
                        <input type="text" class="form-control" name="key" value="{{old('key')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">value  *</label>
                        <input type="number" class="form-control" name="value" value="{{old('value')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Session  *</label>
                        <select name="session_id" class="form-control" id="">
                            <option value="">Choose...</option>
                            @foreach($ConSession as $session)
                                <option value="{{$session->id}}">{{$session->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Description *</label>
                        <textarea class="form-control" name="description" rows="5" cols="10"></textarea>
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
