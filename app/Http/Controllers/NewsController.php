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

    public function createNews(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $title  = $request->input('news_title');
        $author = $request->input('news_author');
        $body   = $request->input('news_body');
        $tags   = $request->input('news_tags');

        $find_news = News::where('title', $title);
        if ($title != NULL && $author != NULL && $body != NULL)
        {
            if(!$find_news && strtolower($title)!=strtolower($find_news[0]->title))
            {
                $news = News::create([
                    'title'     => $title,
                    'author'    => $author,
                    'body'      => $body,
                    'tags'      => $tags,
                    'created_at'=> $date,
                    'updated_at'=> $date 
                ]);
            }
            else 
            {
                echo "The title exists in the database<br>";
            }
        }
        else 
        {
            echo "There is missing field(s): ";      
            if ($title == NULL)
            {
                echo "News Title ";
            }
            if ($author == NULL)
            {
                echo "News Author ";
            }
            if ($body == NULL)
            {
                echo "News Body ";
            }
            echo "<br>";
        }
        
    }
}
