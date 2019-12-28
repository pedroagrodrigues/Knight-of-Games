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

                    <div>
                    <form='/product_create' method='post'>
                    <div class="form-group">
                        Title: <input type="text" name="product_name"><br>
                        Description: <textarea rows="4" cols="50" name='product_description'><br>
                        Status: 
                        <?php
                            foreach($enum as $status)
                            {
                        ?>
                        <input type="radio" name="product_status"><?php echo $status; ?><br>
                        <?php
                            }
                        ?>
                        <input type="submit">
                    </div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
