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
                    </div>
                    <div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Company</th>
                            </tr>
                            @foreach($product->getCompaniesFromProduct as $company)
                            <tr>
                                <td>
                                <a href="{{ url('company/'.$company['id'])}}">{{$company['company']}}</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Genres</th>
                            </tr>
                            @foreach($product->getGenresFromProduct as $genre)
                            <tr>
                                <td><a href="{{ url('genre/'.$genre['id'])}}">{{$genre['genre']}}</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Websites Available</th>
                            </tr>
                            @foreach($websites as $website)
                            <?php $callWebsite = DB::select(DB::raw("SELECT * FROM websites WHERE websites.id = $website->website_id"));
                                  $website_name = $callWebsite[0]->website;
                            ?>
                            <tr>
                                <td><a href="{{ url('website/'.$website->website_id)}}">{{$website_name}}</a></td>
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
