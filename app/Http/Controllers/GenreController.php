<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres', ['genres' => $genres]);
    }

    public function viewGenre($id)
    {
        $genres = Genre::where('id', $id)->get();
        //need to indicate the games that belongs to the specified genre

        return view('genre', ['genres' => $genres]);
    }

    public function createNewGenre(Request $request_name)
    {
        $date = date('Y-m-d H:i:s');
        $genres = Genres::create([
            'genre'       => $product_name,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
    }
}
