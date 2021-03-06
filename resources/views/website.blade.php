@extends('layouts.app')

@section('content')
<?php
$games = DB::select(DB::raw( "SELECT products.id, products.product, product_has_website.price
                              FROM product_has_website, websites, products 
                              WHERE websites.id = product_has_website.website_id 
                                AND products.id = product_has_website.product_id 
                                AND product_has_website.website_id = $id"));
?>
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
                            <?php 
                                if (Auth::user() && Auth::user()->role_id ==3) //check if is logged in and if its admin
                                {
                            ?>
                                   <th>Edit</th>
                            <?php
                                }
                            ?>
                            </tr>
                            @foreach($websites as $website)
                            <tr>
                                <td>{{$website->website}}</a></td>
                                <td>{{$website->rating}}</td>
                                <td>{{$website->blacklist}}</td> 
                            <?php 
                                if (Auth::user() && Auth::user()->role_id ==3) //check if is logged in and if its admin
                                {
                           ?>
                                    <td><a href="{{ url('website_edit/'.$id)}}">Edit Site</a></td>
                            <?php
                                }
                            ?>    
                            </tr>
                            @endforeach
                    </table>
                    </div>
                    <div>
                    <table class="table table-bordered table-striped">
                            <tr>
                                <th>Games</th>
                                <th>Prices</th>
                            </tr>
                            @foreach($games as $game)
                            <tr>
                                <td><a href="{{ url('product/'.$game->id)}}"><?php echo $game->product; ?></a></td> 
                                <td><?php echo $game->price; ?>€</td> 
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
