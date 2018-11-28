<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guarded = [];


    public const NEW = 1;
    public const ACCEPTED = 2;
    public const REJECTED = 3;
    public const ADMIN_ANSWERS = 4;


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
