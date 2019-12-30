@extends('layouts.app')

@section('content')
<div class='authentication-wrapper'>
    <!-- <a href="{{ url('/') }}">
        <div class="logo"></div>
    </a> -->
    <form action="{{ route('register') }}" class="form-authentication" method="POST">
        @csrf
        <div class="form-inputs">
            <h1>UChoose</h1>
            <h2 class="quote">The price finder</h2>
            <div class="form-inputs-with-icons">
                <div class="input-with-icon">
                    <div class="icon">&#xf003;</div>
                    <div class="input-field-controler">
                        <div class="input-field-div">
                            <input id="name" class="input-field form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="username" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="input-with-icon">
                    <div class="icon">&#xf2c0</div>
                    <div class="input-field-controler">
                        <div class="input-field-div">
                            <input id="email" type="email" class="input-field form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

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
                            <input id="password" type="password" name="password" class="input-field form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password">
                            @error('password')
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
                            <input id="password-confirm" type="password" class="input-field form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="form-submit" value="{{ __('Register') }}">Join UChoose</button>
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
        <p>Already a member? <a href="{{ route('login') }}">Sign in!</a></p>
    </div>
    
</div>
@endsection
