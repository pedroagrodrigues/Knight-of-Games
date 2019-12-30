<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use App\Company;
use App\Genre;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function viewProduct($id)
    {
        $products = Product::where('id', $id)->get();
        $websites = DB::select(DB::raw("SELECT DISTINCT website_id 
                                        FROM product_has_website, websites, products 
                                        WHERE products.id = $id AND product_has_website.product_id = products.id"));
        return view('product', ['products' => $products, 'websites' => $websites]);
    }

    public function beforeCreateNewProduct()
    {
        $companies = Company::all();
        $genres = Genre::all();
        return view('product_create', ['companies' => $companies, 'genres' => $genres]);
    }


    public function createProduct(  Request $request_name,   Request $request_description,
                                    Request $request_status, Request $request_companies, 
                                    Request $request_genres, Request $request_release_date    )
    {
        $date = date('Y-m-d H:i:s');
        $product_name           = $request_name->input('product_name');
        $product_description    = $request_description->input('product_description');
        $product_status         = $request_status->input('product_status');
        $product_companies      = $request_companies->input('product_companies'); //must be a array in html format
        $product_genres         = $request_genres->input('product_genres'); //must be a array in html format
        $product_release_date   = $request_release_date->input('product_release_date'); //what if there is no release date  

        //Creating the new product
        if ($product_release_date != NULL )
        {
            $product = Product::create([
                'product'       => $product_name,
                'status'        => $product_status,
                'description'   => $product_description,
                'created_at'    => $product_release_date,
                'updated_at'    => $date
            ]);
        }
        else 
        {
            $product = Product::create([
                'product'       => $product_name,
                'status'        => $product_status,
                'description'   => $product_description,
                'created_at'    => NULL,
                'updated_at'    => NULL
            ]);   
        }

        //Finding the companies with their ids and attach to the database
        $companies = Company::find($product_companies);
        $product->getCompaniesFromProduct()->attach($companies);
        
        //Finding the genres with their ids and attach to the database
        $genres = Genre::find($product_genres);
        $product->getGenresFromProduct()->attach($genres);
    }

    public function editProduct($id)
    {

        return view('product_edit');    
    }

    public function beforeEditProduct(Request $request_companies, Request $request_genres, $id)
    {
        //Just updates the product
        $product_companies  = $request_companies->input('product_companies'); 
        $product_genres     = $request_genres->input('product_genres');  
    }
}
