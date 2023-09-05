@extends('layouts.master_authen')
@section('content')
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{asset('backend/images/logo-dark.svg')}}">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>

                <!--Name-->
                <form class="pt-3" method="POST" action="{{ route('register') }}">  
                    @csrf
                <div class="row mb-3">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>

                <!--Address-->
                <div class="row mb-3">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Address"name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                <!--Phone-->
                <div class="row mb-3">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                <!--Email-->
                <div class="row mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                <!--Username-->
                <div class="row mb-3">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username"value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                 <!--Password-->
                 <div class="row mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  <!--Confirm Password-->
                <div class="row mb-3">
                    <input type="password" class="form-control" id="password-confirm" placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endsection