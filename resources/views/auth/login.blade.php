@extends('layouts.app')

@section('content')
<link href="{{ asset('css/account.css') }}" rel="stylesheet">
<div class='authentication-wrapper'>
    <!-- <a href="{{ url('/') }}">
        <div class="logo"></div>
    </a> -->
    <form action="{{ route('login') }}" class="form-authentication" method="POST">
        @csrf
        <div class="form-inputs">
            <h1>UChoose</h1>
            <h2 class="quote">The price finder</h2>
            <div class="form-inputs-with-icons">
                <div class="input-with-icon">
                    <div class="icon">&#xf2c0</div>
                    <div class="input-field-controler">
                        <div class="input-field-div">
                            <input class="input-field form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="input-with-icon">
                    <div class="icon">&#xf023</div>
                    <div class="input-field-controler">
                        <div class="input-field-div">
                            <input id="password" type="password" class="input-field form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <button class="form-submit" value="Submit">Sign in</button>

    </form>
    <div class="social-networks-wrapper">
        <div class="social-networks-services">
            <a href="#" class="fa fa-twitter">
                <div>Twitter</div>
            </a>
            <a href="#" class="fa fa-facebook">
                <div>Facebook</div>
            </a>
            <a href="#" class="fa fa-google">
                <div>Google</div>    
            </a>
        </div>
    </div>
    <div class="bottom-wrapper">
        <p>Don't have an account? <a href="{{ route('register') }}">Create one!</a></p>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
    
</div>
@endsection
