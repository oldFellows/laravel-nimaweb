<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortKeysDesc();
        return view('frontend.article.index',compact('articles'));
    }

    public function single($id)
    {
        $article_item = Article::find($id);

        return view('frontend.article.single' , compact('article_item'));
    }
}
