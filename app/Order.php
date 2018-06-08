<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Category;
class Order extends Model
{
    protected $fillable = [
        'user_email', 'product_id',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function getUserByEmail($email)
    {
        return User::where('email', $email);
    }

    public function addOrder($email, $product_id)
    {
        return $this->create([
            'user_email' => $email,
            'product_id' => $product_id
        ]);
    }

}
