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
        $websites = Website::all();
        return view('websites', ['websites' => $websites]);
    }

    /**
     * View the website itself with the games
     */
    public function viewWebsite($id)
    {
        $websites = Website::where('id',$id)->get();
        // SELECT product_has_website.product_id, products.product, product_has_website.price, websites.website FROM product_has_website, websites, products 
        // where websites.id = product_has_website.website_id and products.id = product_has_website.product_id
        return view('website', ['id' => $id, 'websites' => $websites]);
    }

    public function beforeCreateNewWebsite()
    {
        $products = Product::all();
        return view('website_create', ['products' => $products]);
    }

    /**
     * Method to create a new Website with/without games
     */
    public function createNewWebsite(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $name           = $request->input('website_name');
        $rating         = $request->input('website_rating');
        $website_games  = $request->input('website_games');

        $find_website = Website::where('website', $name);

        if ($name != NULL && $rating != NULL && $website_games != NULL )
        {
            if (!$find_website && strtolower($name) != strtolower($find_website[0]->website))
            {
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
            else echo "The website's name exists in the database<br>";
        }
        else 
        {
            echo "There is missing fields: ";      
            if ($name == NULL)
            {
                echo "Website Name ";
            }
            if ($product_status == NULL)
            {
                echo "Website Rating ";
            }
            if ($games == NULL)
            {
                echo "Games ";
            }
            echo "<br>";
        }
        
    }

    public function beforeEditWebsite($id)
    {
        $products = Product::all();
        $websites = Website::where('id', $id)->get();
        return view('website_edit', ['id' => $id, 'websites' => $websites, 'products' => $products]);
    }

    public function editWebsite( Request $request, $id)
    {
        $website_rating     = $request->input('website_rating');
        $webiste_blacklist  = $request->input('website_blacklist');
        $website_games      = $request->input('website_games');
        $website_prices     = $request->input('website_prices');

        if ($website_rating == NULL && $webiste_blacklist == NULL && $website_games == NULL && $website_prices == NULL)
        {
            echo "There is no update to the website";
        }
        else 
        {
            if ($website_games != NULL) //if does contain the games will try to find and attach to the database
            {
                $games = Product::find($website_games);
                $website->getProductsFromWebsite()->attach($games);
            }
        }
        echo '<a href = "/websites">Click Here</a> to go back.';
    }
}
