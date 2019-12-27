<?php

namespace App\Http\Controllers;

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
        $products = Product::where('id', $id)->get(); //finding the specific game
        // SELECT companies.company FROM products, product_has_companies, companies 
        //     where products.id = 1 AND products.id = product_has_companies.product_id and companies.id = product_has_companies.company_id
        $companies = Product::with(['companies'])->get();
        //$genres = Product::with('genres')->where('id', $id)->get();
        //$websites = Product::with('websites')->where('id', $id)->get();

        //$companies = $products->getCompaniesFromProduct()->get();

        return view('product', ['products' => $products, 'companies' => $companies]);
    }

    public function createProduct(  Request $request_name,   Request $request_description,
                                    Request $request_status, Request $request_companies, 
                                    Request $request_genres, Request $request_release    )
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

    public function editProduct(Request $request_companies, Request $request_genres, $id)
    {
        //Just updates de product
        $product_companies     = $request_companies->input('product_companies'); 
        $product_genres  = $request_genres->input('product_genres');  
    }
}
