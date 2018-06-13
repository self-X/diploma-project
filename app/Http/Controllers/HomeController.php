<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Order;
use App\Category;
class HomeController extends Controller
{

    protected  $product;
    protected  $category;
    protected  $order;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product,Category $category, Order $order)
    {
        $this->middleware('auth');
        $this->product = $product;
        $this->category = $category;
        $this->order = $order;
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
        $categoryTitle = $this->category->where('id',$product->category_id)->first();
        $stripePrice = preg_replace("/[^0-9]/", '', $product->price) * 100;
        $howMuch = count($userProducts);
        return view('home.home', [
            'myProd' => $userProducts,
            'sumOfProduct' => $howMuch,
            'price' => $price,
            'categoryTitle' => $categoryTitle,
            'stripePrice' => $stripePrice,
            'collectionOrders' => $this->orderCollection(Auth::user()->email),
        ]);
    }


    public function orderCollection($email)
    {
        $answer = new Collection();
        $orders = $this->order->getOrdersByEmail($email);
        foreach ($orders as $order){
            $product = $order->product;
            $product->order_id = $order->id;
            $product->user_email =$order->user_email;
            $answer->push($product);
        }
            return $answer;
    }
}
