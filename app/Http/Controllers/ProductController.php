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
        //$product_companies = 

        return view('product', ['products' => $products]);
    }

    public function createNewProduct()
    {
        
    }
}
