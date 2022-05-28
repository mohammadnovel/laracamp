<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\Article;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tours = Tour::all();
        $articles = Article::orderBy('created_at', 'desc')->limit(4)->get();
        return view('welcome', compact(
            'tours',
            'articles',
        ));
    }

    public function detailArticle($id)
    {
        $article = Article::find($id);
        return view('article-detail', compact(
            'article'
        ));
    }

}
