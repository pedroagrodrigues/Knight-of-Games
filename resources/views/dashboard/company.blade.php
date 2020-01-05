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
                                <th>Company</th>
                                <th>Description</th>
                                <th>Created at</th>
                            </tr>
                            @foreach($companies as $company)
                            <tr>
                                <td>{{$company->company}}</a></td>
                                <td>{{$company->description}}</td>
                                <td>{{$company->created_at}}</td>
                            </tr>
                            @endforeach
                        </table>
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