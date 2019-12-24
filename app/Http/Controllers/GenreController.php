<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('products', ['products' => $products]);
    }

    public function viewGenre($id)
    {
        $genres = DB::table('genres')->where('id', $id)->get();
        return view('genre', ['genres' => $genres]);
    }

    public function createNewGenre(Request $request_name)
    {
        
    }
}
