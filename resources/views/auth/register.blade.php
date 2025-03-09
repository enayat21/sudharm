@extends('layouts.auth')
@section('title', 'Signup')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-primary-subtle">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">Register</h5>
                                <p>Get your free account now.</p>
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
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Enter name" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror     
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="Enter email" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror     
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required autocomplete="new-password" aria-describedby="password-addon">
                                    <button class="btn btn-light" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Confirm password" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror     
                            </div>

                            <div class="mt-4 d-grid">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                    @if (Route::has('login'))
                        <div class="mt-3 text-center">
                            <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login</a> </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
