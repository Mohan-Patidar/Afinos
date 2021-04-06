@extends('layouts.authLayout')

@section('content')

@php
$address = \App\Address::all();
@endphp


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
                            <div class="login-box register-box">
                                <div class="d-flex align-items-center height-100">
                                <div>
                                <h4 class="login-title">{{ __('Register') }}</h4>
                                <form id="register-form" class="register-form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">{{ __('First Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                        <div class="form-group">

                        <label for="name">{{ __('Last Name') }}</label>

                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">

                        <label for="phone">{{ __('phone') }}</label>

                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">

                        <label for="name">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        
                        <div class="form-group">
                            <label for="cagecode">{{ __('cagecode') }}</label>
                            <input id="cagecode" type="text" class="form-control @error('cagecode') is-invalid @enderror" name="cagecode" value="{{ old('cagecode') }}" required autocomplete="cagecode">

                            @error('cagecode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Are you registered in SAMS?</label>
                            <p class="inp-radio">
                                <span>
                                    <input type="radio" id="test1" name="sams" checked=""
                                        value="yes">
                                    <label for="test1">Yes</label>
                                </span>
                                <span class="pl-4">
                                    <input type="radio" id="test2" name="sams" value="yes">
                                    <label for="test2">No</label>
                                </span>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="city">{{ __('city') }}</label>
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">

                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="zip">{{ __('zip') }}</label>
                            <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}" required autocomplete="zip">

                            @error('zip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="state">{{ __('state') }}</label>
                            <select required class="form-control" name="state">
                            @foreach($address as $add)
                                <option value="{{ $add->state_code }}">{{ $add->state }}</option>
                            @endforeach
                            </select>
                            <!-- <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state"> -->

                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="country">{{ __('country') }}</label>
                            <select required class="form-control" name="country">
                            @foreach($address as $country)
                                <option value="{{$country->country_code}}">{{ $country->country }}</option>
                            @endforeach
                            </select>
                          
                         
                            <!-- <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country"> -->

                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group width-100">
                            <label for="address">{{ __('Address') }}</label>
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
                        <div class="form-group ">
                            <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>


                                  
                        <div class="r-button-group">
                            
                        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                          <a  class="btn btn-default" href="{{ route('login') }}">Back to Login</a>
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
        $("#register-form").validate();
    </script>
@endsection