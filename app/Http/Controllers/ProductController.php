<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\Handler;
use App\Product;
use App\Category;
use App\User;
use Mockery\Exception;
use App\Http\Controllers\StripeService;

class ProductController extends Controller
{
    protected $products;
    protected $category;
    protected $stipeService;

    public function __construct(Product $prod, Category $category, StripeService $stripeService)
    {
        $this->products = $prod;
        $this->category = $category;
        $this->stipeService = $stripeService;
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

        $stripePrice = preg_replace("/[^0-9]/", '', $product->price)*100;
//        $this->stipeService->addNewCharge(Auth::user(), $stripePrice);
        $this->stipeService->test(Auth::user()->id);
            //fill order in database without user related but with user mail
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
