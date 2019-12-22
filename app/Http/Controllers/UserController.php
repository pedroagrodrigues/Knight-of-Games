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
        return view('users');
    }

    public function viewUser()
    {
        
    }

    public function updateUser()
    {
        
    }

    public function doLogin(Request $request)
    {

    }

    public function doStore(Request $request)
    {
        
    }
}
