@extends('dashboard.dashboard')

@section('content')
@if(Auth::user()->role_id === 1)
Não tem permissões para ver esta página!
@else
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

                    <div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Product</th>
                            </tr>
                            @foreach($products as $product)
                            <tr>
                                <td><a href="{{ url('product/'.$product['id'])}}"> {{$product['product']}}</a></td>
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
@endif
@endsection