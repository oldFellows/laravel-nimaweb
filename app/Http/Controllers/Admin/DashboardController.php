<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {

        $results = DB::table('article_views')
            ->select(DB::raw('sum(view_count) as total_view , article_id'))
            ->groupBy(DB::raw('article_id'))->get();


        $view_statistics = [];
        foreach ($results as $item)
        {
            $article = Article::find($item->article_id);
            $view_statistics[$article->title] = $item->total_view;
        }
        return view('admin.dashboard.index',compact('view_statistics'));
    }
}
