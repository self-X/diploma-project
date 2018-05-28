<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;

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
            $user = Auth::user();
            $product->users()->attach($user);
            return back();

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
