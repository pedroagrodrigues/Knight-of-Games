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
        $productID = Product::where('id', $id)->get();
        //$companyID = DB::table('companies')->where('companies.id', $id)->first();
        return view('products/{id}', ['products' => $productID]);
    }

    public function createNewProduct()
    {
        
    }
}
