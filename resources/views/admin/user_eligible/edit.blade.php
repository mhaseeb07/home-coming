@extends('admin.layouts.app')
@section('title','Edit')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Candidate Registration</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('candidate_registration.update',$user->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{(isset($user->name))?$user->name:old('name')}}">
                        @error('name')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email *</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{(isset($user->email))?$user->email:old('email')}}">
                        @error('email')
                            <span class="text-warning" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Reg No#</label>
                        <input type="text" class="form-control @error('reg_no') is-invalid @enderror" name="reg_no" value="{{(isset($user->reg_no))?$user->reg_no:old('reg_no') }}">
                        @error('reg_no')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email Verification</label>
                        <select class="form-control @error('email_verified_at') is-invalid @enderror" name="email_verified_at" value="{{ old('email_verified_at') }}" required>
                            <option {{ (!empty($user->email_verified_at)) ? 'selected="selected"' : '' }} value="{{Carbon\Carbon::now()}}">Verified</option>
                            <option {{ (empty($user->email_verified_at)) ? 'selected="selected"' : '' }} value="">Not Verified</option>
                        </select>
                        @error('email_verified_at')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
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
