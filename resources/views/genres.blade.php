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
                            <th>Genres</th>
                        </tr>
                        @foreach($genres as $genre)
                        <tr>
                            <td><a href="{{ url('genre/'.$genre['id'])}}">{{$genre['genre']}}</a></td>
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
