<?php

namespace App\Http\Controllers;

use App\Website;
use App\Product;
use App\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websites = Webiste::all();
        return view('websites', ['websites' => $websites]);
    }

    public function viewWebsite($id)
    {
        $websites = Webiste::where($id)->get();
        return view('websites', ['websites' => $websites]);
    }
}
