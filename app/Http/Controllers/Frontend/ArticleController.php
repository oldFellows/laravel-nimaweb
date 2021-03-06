<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::all()->sortByDesc('updated_at');
        return view('frontend.article.index', compact('articles'));
    }

    public function single(Request $request, $id)
    {

        $article_item = Article::find($id);

        $article_item->updateViewCounts();


        return view('frontend.article.single', compact('article_item'));
    }
}
