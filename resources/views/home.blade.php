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

                    <div>
                    <?php
                        if(Auth::user()->role_id === 1) {
                            echo "You are just a common user";
                        } elseif (Auth::user()->role_id === 2) {
                            echo "You are a moderator user";
                        } elseif (Auth::user()->role_id === 3) {
                            echo "You are the administrator user";
                        }
                    ?>
                    </div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
