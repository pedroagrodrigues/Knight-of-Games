<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Social;
use App\Role;

class UserController extends Controller
{
    public function index()
    {
        //$users = User::all();
        $users = DB::select(DB::raw("SELECT * FROM `users` where not role_id = 3"));
        return view('users', ['users' => $users]);
    }

    public function viewUser($id)
    {
        $users = User::where('id', $id)->get();
        $roles = Role::all();
        return view('user_update', ['users' => $users, 'roles' => $roles]);
    }

    public function updateUser(Request $request, $id) 
    {
        $role_id = $request->input('role_id');
        $user = User::where('id',$id)->get();
        //dd($request->input('role_id'),$user[0]->role_id);
        if ($role_id == $user[0]->role_id || $role_id == NULL)
        {
            echo "The user wasn't updated<br>";
        }
        else 
        {
            $user = User::where('id',$id)->update(['role_id' => $role_id]);
            echo "Updated user.<br/>";
            if ($role_id == 1)
            {
                echo "The user is now a common user<br>";
                echo "Downgraded the rank<br>";
            }
            if ($role_id == 2)
            {
                echo "The user is now a moderator<br>";
            }
            else if ($role_id == 3)
            {
                echo "The user is now a administrator<br>";
            }
        }
        echo '<a href = "/users">Click Here</a> to go back.';
    }

}
