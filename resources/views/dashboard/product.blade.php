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
                    @foreach($products as $product)
                            <b>Product:</b> {{$product['product']}}<br>
                            <b>Status:</b> {{$product['status']}}<br>
                            <b>Descritpion:</b> {{$product['description']}}<br>
                            <b>Created at:</b> {{$product['created_at']}}<br>
                    @endforeach
                        <!-- <table class="table table-bordered table-striped"> -->
                            
                            <b>Company</b>
                            @foreach($product->getCompaniesFromProduct as $company)
                            <?php   
                            $count = count($product->getCompaniesFromProduct);
                            if ($count > 1)
                            {
                                $counting = 0;
                                if ($counting == $count)
                                {
                            ?>
                                <a href="{{ url('company/'.$company['id'])}}">{{$company['company']}}</a>
                            <?php
                                }
                                //if (array_key_last($company['id']) == $company['id'])
                                else
                                {
                            ?>
                                <a href="{{ url('company/'.$company['id'])}}">{{$company['company']}}</a>,
                            <?php
                                }
                                $counting++;
                            }
                            else 
                            {
                            ?>
                                <a href="{{ url('company/'.$company['id'])}}">{{$company['company']}}</a>
                            <?php
                            }
                            ?>                                
                            @endforeach
                            <br>
                        <!-- </table> -->
                            <b>Genres</b>
                            <?php
                            $count = count($product->getGenresFromProduct);
                            ?>
                            @foreach($product->getGenresFromProduct as $genre)
                            <?php 
                            if ($count > 1)
                            {
                                $counting = 0;
                                if ($counting == $count)
                                {
                            ?>
                                <a href="{{ url('genre/'.$genre['id'])}}">{{$genre['genre']}}</a>
                            <?php 
                                }
                                else 
                                {
                            ?> 
                                <a href="{{ url('genre/'.$genre['id'])}}">{{$genre['genre']}}</a>,
                            <?php
                            
                                }
                            }
                            else 
                            {
                            ?>
                                <a href="{{ url('genre/'.$genre['id'])}}">{{$genre['genre']}}</a>
                            <?php
                            }
                            ?>
                            @endforeach
                            <br>
                            <b>Websites Available</b>
                            <?php $count = count($websites); ?>
                            @foreach($websites as $website)
                            <?php 
                                $callWebsite = DB::select(DB::raw("SELECT * FROM websites WHERE websites.id = $website->website_id"));
                                $website_name = $callWebsite[0]->website;
                                if ($count > 1)
                                {
                                    $counting = 0;
                                    if ($counting == $count)
                                    {
                            ?>
                                    <a href="{{ url('website/'.$website->website_id)}}">{{$website_name}}</a>
                            <?php 
                                    }
                                    else
                                    {
                            ?>
                                    <a href="{{ url('website/'.$website->website_id)}}">{{$website_name}}</a>,
                            <?php
                                    }
                                }
                                else 
                                {
                            ?>
                                <a href="{{ url('website/'.$website->website_id)}}">{{$website_name}}</a>
                            <?php       
                                }
                            ?>
                            @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection