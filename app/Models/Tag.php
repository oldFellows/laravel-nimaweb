<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'tag_id';


    protected $guarded = ['tag_id'];

    public $timestamps = false;

    public function articles()
    {
        return $this->morphedByMany(Article::class , 'taggable' ,'taggables', 'tag_id' ,'taggable_id');
    }
}
