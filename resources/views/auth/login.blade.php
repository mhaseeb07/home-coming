@extends('layouts.app')

@section('content')
<section class="ts-pricing gradient" style="background-image: url(front/images/3.jpg); height: 100vh;">
    <div class="container auth-form">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <a href="{{route('main')}}"><img src="{{asset('front/images/logos/logo-black.png')}}" width="200px" class="logo my-5 my-md-3" /></a>
                </div>
                <h5 class="card-title">Login</h5>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            @if (Route::has('password.request'))
                                <a class="reset-password" href="{{ route('password.request') }}">Reset Password</a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-sm btn-dark">Sign In</button>
                            <a href="{{route('register')}}" class="btn btn-sm btn-warning">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
