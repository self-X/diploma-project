<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class HomeController extends Controller
{

    protected  $product;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->middleware('auth');
        $this->product = $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $userProducts =$user->products;
        $price=0;
        foreach ($userProducts as $product){
            $price += preg_replace("/[^0-9]/", '', $product->price);
        }
        $howMuch = count($userProducts);
        return view('home.home', [
            'myProd' => $userProducts,
            'sumOfProduct' => $howMuch,
            'price' => $price,
        ]);
    }
}
