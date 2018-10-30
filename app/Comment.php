<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guarded = [];

    //self referential relationship
    public function commentable()
    {
        return $this->morphTo();
    }


    //for handle reply to comments
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

}
