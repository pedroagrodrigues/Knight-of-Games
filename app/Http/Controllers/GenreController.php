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
        //$products = Genre::with('getProductsFromGenre')->where('id', $id)->get();
        return view('genre', ['genres' => $genres]);
    }

    public function beforeCreateNewGenre(Request $request)
    {
        return view('genre_create');
    }

    public function createNewGenre(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $genre_name = $request->input('genre_name');

        if ($genre_name != NULL)
        {
            $find_genre = Genre::where('genre', $genre_name)->get();
            if (!$find_genre && strtolower($genre_name) != strtolower($find_genre[0]->genre))
            {
                $genres = Genre::create([
                    'genre'       => $genre_name,
                    'created_at'    => $date,
                    'updated_at'    => $date
                ]);
                echo "The New Genre Type inserted<br>";
            }
            else echo "The Genre Type already contains in the database<br>";
        }
        else 
        {
            echo "The is no Genre inserted<br>";
        }
        echo 'Click <a href="/genres">here</a> to return to the genres list<br>';
    }
}
