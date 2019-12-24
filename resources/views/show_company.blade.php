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
                                <th>Company</th>
                                <th>Description</th>
                                <th>Created at</th>
                            </tr>
                            @foreach($companies as $company)
                            <tr>
                                <td><a href="{{ url('companies/'.$company['id'])}}">{{$company['company']}}</a></td>
                            </tr>
                            @endforeach
                        </table>
                    <?php
                    ?>
                    </div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
