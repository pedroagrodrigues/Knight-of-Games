@extends('layouts.app')

@section('content')
<div class='authentication-wrapper'>
    <!-- <a href="{{ url('/') }}">
        <div class="logo"></div>
    </a> -->
    <form action="{{ route('login') }}" class="form-authentication" method="POST">
        <div class="form-inputs">
            <h1>UChoose</h1>
            <h2 class="quote">The price finder</h2>
            <div class="form-inputs-with-icons">
                <div class="input-with-icon">
                    <div class="icon">&#xf2c0</div>
                    <div class="input-field-controler">
                        <div class="input-field-div">
                            <input class="input-field" type="text" name="email" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="input-with-icon">
                    <div class="icon">&#xf023</div>
                    <div class="input-field-controler">
                        <div class="input-field-div">
                            <input class="input-field" type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
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
    </div>
    
</div>
@endsection
