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

    public function updateUser(Request $request, $id) {
        $role_id = $request->input('role_id');
        //DB::update('update student set name = ? where id = ?',[$name,$id]);
        $user = User::where('id',$id)->update('role_id', $role_id);
        //echo "Record updated successfully.<br/>";
        //echo '<a href = "/edit-records">Click Here</a> to go back.';
     }

}
