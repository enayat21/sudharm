@extends('layouts.auth')
@section('title', 'Login')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-primary-subtle">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>Sign in to continue to Dashboard.</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('theme/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0"> 
                    <div class="auth-logo">
                        <a href="#" class="auth-logo-dark">
                            <div class="avatar-md profile-user-wid mb-4">
                                <span class="avatar-title rounded-circle bg-light">
                                    <img src="{{ asset('theme/assets/images/logo.svg') }}" alt="" class="rounded-circle" height="34">
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-2">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" required autocomplete="email" autofocus placeholder="Enter Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Enter password" aria-describedby="password-addon">
                                    <button class="btn btn-light" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-check">
                                <label class="form-check-label" for="remember-check">
                                    Remember me
                                </label>
                            </div>
                            <div class="mt-3 d-grid">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="mt-4 text-center">
                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                </div>
                            @endif
                        </form>
                    </div>
                    @if (Route::has('register'))
                        <div class="mt-3 text-center">
                            <p>Don't have an account ? <a href="{{ route('register') }}" class="fw-medium text-primary"> Signup now </a> </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
