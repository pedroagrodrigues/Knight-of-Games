@extends('layouts.app')

@section('content')
<?php
    //Calling the column ENUM values from the field product
    $type = DB::select(DB::raw("SHOW COLUMNS FROM websites WHERE Field = 'rating'"))[0]->Type;
    preg_match('/^enum\((.*)\)$/', $type, $matches);
    $enum = array();
    foreach(explode(',', $matches[1]) as $value){
        $v = trim($value, "'");
        $enum = array_add($enum, $v, $v);
    }
    
    $actualUser = Auth::user();
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
                    <?php 
                    if($actualUser->role_id === 3)
                    { ?> 
                    <form action="/website_create" method="post">
                    @csrf
                    <div class="form-group">
                    Website: <input type="text" name="website_name"><br>
                    <legend>Rating:</legend>
                    <?php
                            foreach($enum as $rating)
                            {
                    ?>
                                <input type="radio" name="website_rating" value="<?php echo $rating; ?>">
                                <?php 
                                    if ($rating == "1")
                                    {
                                        echo "1 - Weak";
                                    } 
                                    else if ($rating == "2")
                                    {
                                        echo "2 - Poor";
                                    }
                                    else if ($rating == "3")
                                    {
                                        echo "3 - Average";
                                    }
                                    else if ($rating == "4")
                                    {
                                        echo "4 - Good";
                                    }
                                    else if ($rating == "5")
                                    {
                                        echo "5 - Amazing";
                                    }
                                    ?><br>
                    <?php
                            }
                    ?>
                    <legend>Products:</legend>
                    <?php
                            foreach($products as $product)
                            {
                    ?>
                                <input type="checkbox" name="website_games[]" value="<?php echo $product['id']; ?>"> <?php echo $product['product'];?><br>
                    <?php
                            }
                    ?>
                    <input type="submit" value="Submit">
                    </div>
                    </form>
                <?php   
                    }
                    else echo "Permission denied: You need to be administrator<br>";
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
