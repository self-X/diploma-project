<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\Handler;
use App\Product;
use App\Category;
use Mockery\Exception;

class ProductController extends Controller
{
    protected $products;
    protected $category;

    public function __construct(Product $prod, Category $category)
    {
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
            return view('product.detail', [
                'prod' => $product,
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
