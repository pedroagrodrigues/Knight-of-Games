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
                            @foreach($companies as $company)
                                <b>Company:</b> {{$company->company}}<br>
                                <b>Description:</b> {{$company->description}}<br>
                                <b>Created at:</b> {{$company->created_at}}<br>
                            @endforeach
                    <table class="table table-bordered table-striped">
                            <tr>
                                <th>Products</th>
                            </tr>
                            @foreach($company->getProductsFromCompany as $product)
                            <tr>
                                <td><a href="{{ url('product/'.$product['id'])}}">{{$product->product}}</a></td>
                            </tr>
                            @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
