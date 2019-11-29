@extends('layouts.app')

@section('content')
<div class='authentication-wrapper'>
    <a href="{{ url('/') }}">
        <div class="logo"></div>
    </a>
    <form action="" class="form-authentication">
        <h1>UChoose</h1>
        <!-- <h2>Frase inspiradora por colocar</h2> -->
        <div><input type="text" name="" id=""></div>
        <div><input type="text" name="" id=""></div>
        <div><input type="text" name="" id=""></div>
        <div><input type="text" name="" id=""></div>
        <div><input type="button" value="Register"></div>
    </form>

</div>
@endsection
