@extends('layouts.app')

@section('content')
<?php 
        //Calling the column ENUM values from the field product
        $type = DB::select(DB::raw("SHOW COLUMNS FROM products WHERE Field = 'status'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach(explode(',', $matches[1]) as $value){
            $v = trim($value, "'");
            $enum = array_add($enum, $v, $v);
        }
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
                    <form action="/product_create" method="post">
                    @csrf
                    <fieldset>
                    <div class="form-group">
                    <h3>Title:</h3><input type="text" name="product_name"><br>
                    <h3>Description:</h3><input type="text" name="product_description"><br>
                    <legend>Status:</legend>
                    <?php
                            $i = 1; 
                            foreach($enum as $status)
                            {
                    ?>
                                <input type="radio" name="product_status" value="<?php echo $i;?>">
                                <?php 
                                    if ($status == "available")
                                    {
                                        echo "Available";
                                    } else if ($status == "pre order")
                                    {
                                        echo "Pre-Order";
                                    }
                                    else if ($status == "soon")
                                    {
                                        echo "Soon";
                                    }
                                    ?><br>
                    <?php
                                $i++;
                            }
                    ?>
                    
                    <h3>Created at:</h3><input type="date" name="product_release_date"><br>
                    <legend>Company/Companies:</legend>
                    <?php
                            foreach($companies as $company)
                            {
                    ?>
                                <input type="checkbox" name="product_companies[]" value="<?php echo $company['id'] ?>"><?php echo $company['company']; ?><br>
                    <?php
                            }
                    ?>
                    <legend>Genres:</legend>
                    <?php
                            foreach($genres as $genre)
                            {
                    ?>
                                <input type="checkbox" name="product_genres[]" value="<?php echo $genre['id']; ?>"><?php echo $genre['genre'];?><br>
                    <?php
                            }
                    ?>
                    <input type="submit" value="Submit">
                    </div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
