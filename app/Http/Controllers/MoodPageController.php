<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Validator;
class MoodPageController extends Controller
{
//    protected $category;

    public function __construct()
    {}

    public function index()
    {
        return view('landing_main_page');
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->only('search'),[
            'search' => 'required|string|max:255'
        ]);
        if ($validator){
            $product = Product::where('title', $request->search)->first();
            $stripePrice = preg_replace("/[^0-9]/", '', $product->price) * 100;
            return view('product.detail', [
                'prod' => $product,
                'stripePrice' => $stripePrice,
                'categoryTitle' => $product->category
            ]);
        }
    }

    public function show()
    {

    }


}
