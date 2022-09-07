@extends('admin.layouts.app')
@section('title','Add New')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add Role</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('role.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            @foreach($groups as $group)
                                <h3 class="h6">{{$group->name}}</h3>
                                @foreach($group->permissions as $permissions)
                                    <div class="col-3 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  name="permission[]" value="{{$permissions->id}}">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $permissions->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
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
