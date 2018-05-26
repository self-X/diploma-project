<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            ]);
        }
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
        dd($category , $product);
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
