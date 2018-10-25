<?php
/**
 * Created by PhpStorm.
 * User: Hadi
 * Date: 10/23/2018
 * Time: 2:07 AM
 */

namespace App\Traits;


use App\Models\Tag;

trait Taggable
{
    public function tags()
    {
        return $this->morphToMany(Tag::class , 'taggable','taggables','taggable_id' , 'tag_id');
    }
}