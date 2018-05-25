<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class MoodPageController extends Controller
{
//    protected $category;

    public function __construct()
    {}

    public function index()
    {
        return view('landing_main_page');
    }

    public function show()
    {

    }


}
