@extends('dashboard.dashboard')

@section('content')
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
                                <th>Nome</th>
                                <th>Estado</th>
                                <th>Descrição</th>
                                <th>Sites</th>
                                
                            </tr>
                            
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product['product']}}</td>
                                <td>{{$product['status']}}</td>
                                <td>{{$product['description']}}</td>
                                <td>{{$product['description']}}</td>
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