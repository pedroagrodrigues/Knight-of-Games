@extends('layouts.app')

@section('content')
<?php $user = Auth::user(); ?>
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

                    <?php if ($user->role_id === 3)
                    {    
                     ?>
                    <div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <?php 
                    }
                    else 
                    {
                    ?>
                    You don't have permission to access this! You need to be admin!    
                    <?php    
                    }
                    ?>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
