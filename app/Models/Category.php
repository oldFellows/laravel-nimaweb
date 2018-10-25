<?php

namespace App\Models;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';


    protected $guarded = ['category_id'];

    public $timestamps = false;

    public function articles()
    {
        return $this->morphedByMany(Article::class , 'categorizable' ,'categorizables', 'category_id' ,'categorizable_id');
    }
}
