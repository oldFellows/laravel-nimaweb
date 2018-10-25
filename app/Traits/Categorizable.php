<?php
/**
 * Created by PhpStorm.
 * User: Hadi
 * Date: 10/19/2018
 * Time: 6:01 PM
 */

namespace App\Traits;


use App\Models\Category;

trait Categorizable
{
    public function categories()
    {
        return $this->morphToMany(Category::class , 'categorizable','categorizables','categorizable_id' , 'category_id');
    }
}