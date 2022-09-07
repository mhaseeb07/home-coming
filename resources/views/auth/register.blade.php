@extends('layouts.app')

@section('content')
    <section class="ts-pricing gradient" style="background-image: url(front/images/3.jpg); height: 100vh;">
        <div class="container auth-form">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{route('main')}}"><img src="{{asset('front/images/logos/logo-black.png')}}" width="200px" class="logo my-5 my-md-3" /></a>
                    </div>
                    <h5 class="card-title">Register</h5>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="mb-2">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="mb-2">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="mb-2">Reg No#</label>
                                <input type="text" class="form-control @error('reg_no') is-invalid @enderror" name="reg_no" value="{{ old('reg_no') }}">
                                @error('reg_no')
                                <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div id="myRadioGroup">
                                    <input type="radio" name="id" checked="checked" value="CNIC">
                                    <span>Candidate CNIC</span>
                                    <input type="radio" name="id" value="father_cnic">
                                    <span>Father CNIC</span>
                                    <div id="CNICCNIC" class="desc">
                                        <input type="text" class="form-control @error('cnic') is-invalid @enderror" name="cnic" placeholder="Candidate CNIC" >
                                    </div>
                                    <div id="CNICfather_cnic" class="desc" style="display: none;">
                                        <input type="text" class="form-control @error('father_cnic') is-invalid @enderror" name="father_cnic" placeholder="Father CNIC">
                                    </div>
                                    <p>e.g CNIC(3310050000000)</p>
                                    @error('cnic')
                                    <span class="text-warning" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @error('father_cnic')
                                    <span class="text-warning" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
                                <label class="mb-2">Confirm Password</label>
                                <input id="password" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-sm btn-dark">Register</button>
                                <a href="{{route('login')}}" class="btn btn-sm btn-warning">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $("input[name$='id']").click(function() {
                var test = $(this).val();
                $("div.desc").hide();
                $("#CNIC" + test).show();
            });
        });
    </script>
@endpush
