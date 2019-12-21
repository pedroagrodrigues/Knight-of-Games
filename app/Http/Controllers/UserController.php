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
    public function __invoke(Request $request)
    {
        function index()
        {
            return view('login');
        }
    }


    public function doLogin(Request $request)
    {

    }

    public function doStore(Request $request)
    {
        
    }
}
