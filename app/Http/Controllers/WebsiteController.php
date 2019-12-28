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

    /**
     * View the all websites
     */
    public function index()
    {
        $websites = Webiste::all();
        return view('websites', ['websites' => $websites]);
    }

    /**
     * View the website itself with the games
     */
    public function viewWebsite($id)
    {
        $websites = Webiste::where($id)->get();
        return view('websites', ['websites' => $websites]);
    }

    public function beforeCreateNewWebsite()
    {
        $products = Product::all();
        return view('website_create', ['products' => $products]);
    }

    /**
     * Method to create a new Website with/without games
     */
    public function createNewWebsite(Request $request_website, Request $request_rating, Request $request_games)
    {
        $date = date('Y-m-d H:i:s');
        $name = $request_website->input('website_name');
        $rating = $request_rating->input('website_rating');
        $website_games = $request_games->input('website_games');

        $website = Website::create([
            'website' => $name,
            'rating' => $rating,
            'blacklist' => false,
            'created_at' => $date,
            'updated_at' => $date
        ]);  		

        if ($website_games != NULL) //if does contain the games will try to find and attach to the database
        {
            $games = Product::find($website_games);
            $website->getProductsFromWebsite()->attach($games);
        }
    }

    public function beforeEditWebsite()
    {
        return view('edit_website');
    }

    public function editWebsite(Request $request_games, Request $request_prices, $id)
    {
        $website_games = $request_games->input('website_games');
        $website_games = $request_games->input('website_games');
    }
}
