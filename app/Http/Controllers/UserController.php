<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Social;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function viewUser($id) // retrieve the user information
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('user', ['users' => $users]); 
    }

    public function updateUser(Request $request, $id) {
        $role_id = $request->input('role_id');
        //DB::update('update student set name = ? where id = ?',[$name,$id]);
        $users = User::where('id', $id)->update('role_id', $role_id);
        //echo "Record updated successfully.<br/>";
        //echo '<a href = "/edit-records">Click Here</a> to go back.';
    }

}
