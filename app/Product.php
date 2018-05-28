<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Product extends Model
{


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function  getProductsByCategory($categoryId)
    {
        return $this->all()->where('category_id', $categoryId);
    }

    public function  getTitleOfCategory($category)
    {
        return $this->category()->where('title', $category)->first()->title;
    }


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_product');
    }


}
