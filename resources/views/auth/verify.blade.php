@extends('layouts.app')

@section('content')
    <section class="ts-pricing gradient" style="background-image: url(front/images/3.jpg); height: 100vh;">
        <div class="container auth-form">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{route('main')}}"><img src="{{asset('front/images/logos/logo-black.png')}}" width="200px" class="logo my-5 my-md-3" /></a>
                    </div>
                    <h5 class="card-title">Verify Your Email Address</h5>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Verification link has been sent to your email address
                        </div>
                    @endif
                    <p>Before proceeding, please check your email for a verification link.</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-dark">Verify Email Address</button>.
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
