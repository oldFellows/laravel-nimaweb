<?php

namespace App;

use App\Traits\Categorizable;
use App\Traits\Taggable;
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

}
