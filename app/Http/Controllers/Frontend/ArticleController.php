<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        session(['user_ip' => $request->getClientIp()]);
        $articles = Article::all()->sortKeysDesc();
        return view('frontend.article.index',compact('articles'));
    }

    public function single(Request $request , $id)
    {

        $article_item = Article::find($id);
        if ( !session()->has('user_ip') ) {
            $article_item->updateViewCounts();
        }

        return view('frontend.article.single' , compact('article_item'));
    }
}
