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
        $genreID = Company::where('id', $id)->get();
        //$companyID = DB::table('companies')->where('companies.id', $id)->first();
        return view('genre/{id}', ['companies' => $companyID]);
    }

    public function createNewGenre(Request $request, $id)
    {
        
    }
}
