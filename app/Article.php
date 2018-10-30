<?php

namespace App;

use App\Models\ArticleView;
use App\Traits\Categorizable;
use App\Traits\Taggable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Categorizable;
    use Taggable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function updateViewCounts()
    {

        $isViewExistForToday = ArticleView::where('article_id', $this->id)->whereDate('view_date', Carbon::today())->first();
        if ($isViewExistForToday && $isViewExistForToday instanceof ArticleView && !session()->has('user_ip')) {
            $isViewExistForToday->increment('view_count');
        } else {
            ArticleView::create([
                'article_id' => $this->id,
                'view_count' => 1,
                'view_date' => Carbon::now(),
            ]);
        }

    }
}


