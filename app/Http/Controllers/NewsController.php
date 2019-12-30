<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news', ['news' => $news]);
    }

    public function viewNews($id)
    {
        $news = News::where($id)->get();
        return view('new', ['news' => $news]);
    }

    public function beforeCreateNews()
    {
        return view('news_create');
    }

    public function createNews( Request $request_title, Request $request_author, 
                                Request $request_body, Request $request_tags    )
    {
        $date = date('Y-m-d H:i:s');
        $title  = $request_title->input('news_title');
        $author = $request_author->input('news_author');
        $body   = $request_body->input('news_body');
        $tags   = $request_tags->input('news_tags');

        $news = News::create([
            'title'     => $title,
            'author'    => $author,
            'body'      => $body,
            'tags'      => $tags,
            'created_at'=> $date,
            'updated_at'=> $date 
        ]);
    }
}
