@extends('master')
@section('title', 'MOOD')
@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" style=" height: 600px;
      background: url('images/categories/kids/kids.jpg') 100% 80% no-repeat; background-size: cover; ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">BEST FOR KIDS</h1>
            <p class="lead font-weight-normal" style="font-size: 20px;">The best for kids with love </p>
            <a class="btn btn-dark" style="width: 300px" href="/products/kids">KIDS</a>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="cursor: pointer; ">
        <a href="/products/accessories"
           class="text-dark-hover-color-hotpink bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
           style="text-decoration: none">
            <div>
                <h2 class="display-5">ACCESSORIES</h2>
                <p class="lead">Take a brand new things.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/accessories/access.png" style="width: 95.5%; z-index: 100;  "
                     alt="accessories">
            </div>
        </a>
        <a href="/products/glasses" class="text-hover-color-darkred  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
           style="background: lightblue; text-decoration: none">
            <div>
                <h2 class="display-5">GLASSES</h2>
                <p class="lead">Elegant brand new glasses.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/glasses/g-glass.jpg" style="width: 100%" alt="glasses">

            </div>
        </a>

    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="cursor: pointer;">

        <a href="/products/bags" class="text-dark-hover-color-orange mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
           style="background: #8a6d3b; text-decoration: none">
            <div>
                <h2 class="display-5">BAGS</h2>
                <p class="lead">Stylish leather handbags.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/bags/bags.jpg" style="width: 100%" alt="shoes">
            </div>
        </a>

        <a href="/products/footwear" class="text-dark-hover-color-yeloow mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center  overflow-hidden"
           style="background:burlywood; text-decoration: none">
            <div>
                <h2 class="display-5">FOOTWEAR</h2>
                <p class="lead">Quality branded shoes.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/shoes/shoes2.png" style="width: 84%" alt="shoes">
            </div>
        </a>
    </div>

    <div class=" d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="cursor: pointer;">
        <a href="/products/t-shirt" class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-dark overflow-hidden"
           style="background:lightgray; text-decoration: none">
            <div class="my-3 p-3">
                <h2 class="display-5">T-SHORT</h2>
                <p class="lead">Brand new T-shirts.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/tshorts/tshort3.png" style="width: 87%" alt="t-short">
            </div>
        </a>
        <a href="/products/sweater" class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
           style="text-decoration: none">
            <div class="my-3 py-3">
                <h2 class="display-5">SWEATER</h2>
                <p class="lead">Nice and warm sweaters.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/sweaters/sweater.jpg" style="width: 79%" alt="sweater">
            </div>
        </a>
    </div>

@endsection

