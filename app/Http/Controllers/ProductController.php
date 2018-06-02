<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Command\DumpCommand;
use Stripe\Stripe;
use App\Exceptions\Handler;
use App\Product;
use App\Category;
use App\User;
use Mockery\Exception;

class ProductController extends Controller
{
    protected $products;
    protected $category;
    private $stripeApiKey;

    public function __construct(Product $prod, Category $category)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $this->stripeApiKey = Stripe::$apiKey;
        $this->products = $prod;
        $this->category = $category;
    }


    public function index($category)
    {
        $category = $this->category->getByTitle($category);
        if (!empty($category)){
            return view('product.landing_product_page', [
                'prod' => $this->products->getProductsByCategory($category->id),
                'categoryTitle' => $category->title,
            ]);
        }
        return back();
    }


    public function add($category, Product $product)
    {
        if (Auth::check()){
                $user = Auth::user();
                if ($user->products->find($product)){
                    return ['success'=>'alert alert-warning', 'message' => 'you have already it on your bag'];
                }
                $product->users()->attach($user);
                return ['success' => 'alert alert-success', 'message' =>'your product has been added'];

        }else{
            return ['success' => 'alert alert-danger', 'message' =>'please login to add something to your bag'];
        }

    }

    public function buy($category, Product $product, Request $request)
    {

        if (Auth::check()){
//            try {
//                $stripePrice = preg_replace("/[^0-9]/", '', $product->price) * 100;
//                $response = Auth::user()->charge($stripePrice);
//                dump($request);
//                dump($response);
//            } catch (Exception $e) {
//                dump($e->getMessage());
//                return back();
//            }


// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:

//            $token = $_POST['stripeToken'];
//
//            $charge = \Stripe\Charge::create([
//                'amount' => 999,
//                'currency' => 'usd',
//                'description' => 'Example charge',
//                'source' => $token,
//            ]);

            $charge =Auth::user()->charge(1500,[
                'currency' => 'usd',
                'description' => 'Example charge',
                'source' =>$request->stripeToken,
            ]);
            dump($charge);
        }
        die('STOP');
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($category, Product $product)
    {

        if (!empty($category) && $category == $product->getTitleOfCategory($category)){
//            $short_description = array_slice(explode(' ', $product->description),0, 8);
//            $short_description = implode(' ',$short_description).'...';
            $stripePrice = preg_replace("/[^0-9]/", '', $product->price) * 100;
            return view('product.detail', [
                'prod' => $product,
                'stripePrice' => $stripePrice,
                'categoryTitle' => $category
            ]);
        }
        return back();
    }

    public function edit()
    {

    }

    public function update()
    {

    }


    public function destroy()
    {

    }
}
