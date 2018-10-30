<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleView extends Model
{
    protected $guarded = ['id'];
    protected $dates = [
        'view_date'
    ];
    public $timestamps = false;
}
