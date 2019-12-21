@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @php
                        <div>
                        if(Auth::user()->role_id === 1) {
                            You are just a common user <br>
                        } elseif (Auth::user()->role_id === 2) {
                            You are a moderator user <br>
                        } elseif (Auth::user()->role_id === 3) {
                            You are the administrator user <br>
                        }
                        </div>
                    @endphp

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
