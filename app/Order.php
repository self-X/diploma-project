<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
class Order extends Model
{
    protected $fillable = [
        'mail_customer'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function getUserByEmail($email)
    {
        return User::where('email', $email);
    }

}
