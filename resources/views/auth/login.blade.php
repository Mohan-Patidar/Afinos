@extends('layouts.authLayout')

@section('content')
<div class="page-container">
                <!-- Page Inner -->
                <div class="page-inner login-page">
                    <div id="main-wrapper" class="login-main-wrapper">
                        <div class="login-wrapper-inr">
                        <div class="login-head">
                        <a href="{{url('/')}}">
                            <img src="{{url('/')}}/front-end/assets/icons/affinos-technology-logo.png" alt="affinos_logo">
                        </a>
                    </div>
                            <div class="login-box">
                                <div class="d-flex align-items-center height-100">
                                <div>
                                <h4 class="login-title">{{ __('Sign In') }}</h4>


                                <form id="login-form" method="POST" action="{{ route('login') }}">
                                     @csrf
                                     <div class="form-group">

                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
<div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                                  

                                  <div class="button-group">
                                  <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                    <a  class="btn btn-default margin-top-15" href="{{ route('register') }}">Register</a>
                                  </div>
                                    
                                    <!-- <br>
                                    <a href="index.html" class="forgot-link">Forgot password?</a> -->
                                </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
@endsection
@section('additionalscripts')
    <script>
        $("#login-form").validate();
    </script>
@endsection
