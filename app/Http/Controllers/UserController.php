<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Social;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function viewUser($id)
    {
        $users = User::where('id', $id)->get();
        return view('users', ['users' => $users]);
    }

    public function updateUser(Request $request, $id) {
        $role_id = $request->input('role_id');
        //DB::update('update student set name = ? where id = ?',[$name,$id]);
        $user = User::where('id',$id)->update('role_id', $role_id);
        //echo "Record updated successfully.<br/>";
        //echo '<a href = "/edit-records">Click Here</a> to go back.';
     }

}
