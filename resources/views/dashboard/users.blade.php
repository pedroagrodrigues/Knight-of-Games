@extends('dashboard.dashboard')

@section('content')
<?php $user = Auth::user(); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if ($user->role_id === 3)
                    <div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td><a href="{{ url('user_update/'.$user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    @else
                    You don't have permission to acess this! You need to be admin!

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection