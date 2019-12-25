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
                            <th>Product</th>
                            <td>Status</td>
                            <td>Descritpion</td>
                            <td>Created at</td>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product['product']}}</td>
                            <td>{{$product['status']}}</td>
                            <td>{{$product['description']}}</td>
                            <td>{{$product['created_at']}}</td>
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
