<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function viewUser()
    {
        
    }

    
    public function updateUser(Request $request,$id) {
        $name = $request->input('stud_name');
        DB::update('update student set name = ? where id = ?',[$name,$id]);
        //echo "Record updated successfully.<br/>";
        //echo '<a href = "/edit-records">Click Here</a> to go back.';
        return view('updated_user', ['users' => $users]);
     }

    public function doLogin(Request $request)
    {

    }

    public function doStore(Request $request)
    {
        
    }
}
