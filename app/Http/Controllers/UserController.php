<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        function checkLogin(Request $request)
        {
            $this->validate(
                $request, [
                    'email' => 'required|email'
                    
                ]
            );
        }
    }
}
