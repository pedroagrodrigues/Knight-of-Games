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


    public function createNewProduct(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $product_name           = $request->input('product_name');
        $product_description    = $request->input('product_description');
        $product_status         = $request->input('product_status');
        $product_companies      = $request->input('product_companies'); //must be a array in html format
        $product_genres         = $request->input('product_genres'); //must be a array in html format
        $product_release_date   = $request->input('product_release_date'); //what if there is no release date  
        $timestamp = strtotime($product_release_date);
        dd($product_name, $product_description, $product_status, $product_companies, $product_genres, $product_release_date, $timestamp);

        $find_product_name = Product::where('product', $product_name)->get(); 
        //If the does exists the product name or has the same characters in lower case
        if ($find_product_name || strtolower($product_name) == strtolower($find_product_name[0]->product))
        {
            echo "This product name exists in the database<br>";
            echo 'Click <a href = "/products">here</a> to return to the products list<br>';
        }
        else
        {
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
        
    }

    public function editProduct($id)
    {

        return view('product_edit');    
    }

    public function beforeEditProduct(Request $request, $id)
    {
        //Just updates the product
        $product_companies  = $request->input('product_companies'); 
        $product_genres     = $request->input('product_genres');  
    }
}
