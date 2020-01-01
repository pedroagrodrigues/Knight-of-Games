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
                    if ($actualUser->role_id === 3)
                    {
                    ?>
                    <form action="/website_edit/$id" method="post">
                    <div class="form-group">
                    <b>Website:</b>  {{ $websites[0]->website }}<br>
                    <h4>Rating:</h4>
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
                    <h4>Blacklist:</h4>
                    <input type="radio" name="website_blacklist" id="1">Yes<br>
                    <input type="radio" name="website_blacklist" id="0">No<br>
                    <h4>Games Edit</h4>
                    <input type="checkbox" name="website_games[]" value=[]><br>
                    <input type="submit" value="Edit Site">
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
