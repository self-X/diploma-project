<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
        return DB::table('products')->where('category_id', $categoryId)->paginate(8);
    }

    public function  getTitleOfCategory($category)
    {
        return $this->category()->where('title', $category)->first()->title;
    }


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_product');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
