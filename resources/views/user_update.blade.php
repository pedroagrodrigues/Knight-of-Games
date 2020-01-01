@extends('layouts.app')

@section('content')
<?php $actualUser = Auth::user();?>
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
                        <?php 
                        if ($actualUser->role_id === 3)//if the actual user is admin
                        {
                            if ($users[0]->role_id != 3)//if the chosen user does not contain admin role 
                            {
                        ?>
                                User Information:<br>
                                Username: {{$users[0]->name}}<br>
                                Contact: {{$users[0]->email}}<br>
                                Role:
                        <?php  
                                if ($users[0]->role_id == 1)
                                {
                                    echo "Common User<br>";
                                }
                                else if ($users[0]->role_id == 2) 
                                {
                                    echo "Moderator<br>";
                                }
                        ?>
                        <?php $id = $users[0]->id; ?>
                                <form action=<?php echo "/user_update/".$id; ?> method="post">
                                @csrf
                                    <h4>Wanna update the user?</h4>
                                    @foreach($roles as $role)
                                    <input type="radio" name="role_id" value=<?php echo $role->id; ?>>
                                    <?php 
                                    if ($role->role == "common")
                                    {
                                        echo "Common<br>";
                                    }
                                    else if ($role->role == "moderator")
                                    {
                                        echo "Moderator<br>";
                                    }
                                    else if ($role->role == "admin")
                                    {
                                        echo "Administrator<br>";
                                    }
                                    ?>
                                    @endforeach
                                    <input type="submit" value="Update User">
                                </form>
                        <?php
                            } 
                            else 
                            {
                                echo "He is the chosen One!<br>";
                            }
                        }
                        else 
                        {
                            echo "Permission denied: You need to be administrator<br>";
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
