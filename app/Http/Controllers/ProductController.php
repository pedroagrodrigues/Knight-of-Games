<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function viewProduct()
    {
        $products = Product::where('id', $id)->get(); //finding the specific game
        // SELECT companies.company FROM products, product_has_companies, companies 
        //     where products.id = 1 AND products.id = product_has_companies.product_id and companies.id = product_has_companies.company_id
        // $companies = Product::where('id', $id)
        //->with('companies')->get();

        return view('product', ['products' => $products]);
    }

    public function createNewProduct()
    {
        
    }
}
