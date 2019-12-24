<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Social;

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
        $genres = DB::table('genres')->where('id', $id)->get();
        return view('genre', ['genres' => $genres]);
    }

    public function updateUser(Request $request,$id) {
        $role = $request->input('role_id'); //create a method to call the method input from a radio later
        $users = User::where('id', $id)
                        ->update(['role_id' => $request]);
        //DB::update('update student set name = ? where id = ?',[$name,$id]);
        return view('updated_user/{id}', ['users' => $users]);
     }

}
