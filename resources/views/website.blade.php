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
                    <table class="table table-bordered table-striped">
                            <tr>
                                <th>Website</th>
                                <th>Rating</th>
                                <th>Blacklist</th>
                            </tr>
                            @foreach($websites as $website)
                            <tr>
                                <td>{{$website->website}}</a></td>
                                <td>{{$website->rating}}</td>
                                <td>{{$website->blacklist}}</td> 
                            </tr>
                            @endforeach
                        </table>
                    <?php
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
