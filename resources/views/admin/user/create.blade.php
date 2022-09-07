@extends('admin.layouts.app')
@section('title','Add New')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add User</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <input type="hidden" class="form-control" name="role_status" value="1">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email *</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Assign Role</label>
                        <select class="form-control" name="roles">
                            <option value="">Please Select</option>
                            @if(count($roles))
                                @foreach($roles as $role)
                                    <option value="{{$role}}">{{$role}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
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
