<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Social;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function viewUser($id) // retrieve the user information
    {
        //if (Auth::check())
        $users = DB::table('users')->where('id', $id)->get();
        return view('user', ['users' => $users]);
        //else 
    }

    public function updateUser(Request $request,$id) {
        $role_id = $request->input('role_id');
        DB::update('update student set name = ? where id = ?',[$name,$id]);
        $users = User::where('id', $id)->get();
        //echo "Record updated successfully.<br/>";
        //echo '<a href = "/edit-records">Click Here</a> to go back.';
    }

}
