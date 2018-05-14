@extends('master')
@section('title', 'Best Product')

@section('content')
    <div class="">
        <div>
            <ul>
                <li>img</li>
                <li>img2</li>
                <li>img3</li>
            </ul>
        </div>

        <div class="">
            <h3>soluta nobis eleifend option</h3>
            <span class="brand">Brand: <a href="#">Sed do eiusmod </a></span>
            <br>
            <span class="">Product Code: Product 11</span>
            <p>when an unknown printer took a galley of type and scrambled it to make</p>
            <div class="">
                <span class="">Price:</span>
                <span class="">$110.00</span><span class="price-old">$100.00</span>
                <span class="">Ex Tax: $90.00</span><br>
                <span class=""><small>Price in reward points: 400</small></span><br>
            </div>
            <div class="det_nav1">
                <h4>Select a size :</h4>
                <div class=" sky-form col col-4">
                    <ul>
                        <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>
                        <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>
                        <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>
                        <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>
                    </ul>
                </div>
            </div>
            <div class="">
                <a href="#">buy</a>
            </div>
            <a href="#"><span>login to save in wishlist </span></a>
        </div>
    </div>
    <div>
        <div class="">
            <h6>Details</h6>
            <p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing
                elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem
                vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                Nam liber tempor cum soluta nobis eleifend option</p>
        </div>
    </div>
    <div>
        <h6>Related Products</h6>
        <div class="product">
            <div class="product-desc">
                <div class="product-img">
                    <img src="images/w8.jpg" class="img-responsive " alt=""/>
                </div>
                <div class="prod1-desc">
                    <h5><a class="product_link" href="#">Excepteur sint</a></h5>
                    <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="product_price">
                <span class="price-access">$597.51</span>
                <button class="button1"><span>Add to cart</span></button>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="product">
            <div class="product-desc">
                <div class="product-img">
                    <img src="images/w10.jpg" class="img-responsive " alt=""/>
                </div>
                <div class="prod1-desc">
                    <h5><a class="product_link" href="#">Excepteur sint</a></h5>
                    <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="product_price">
                <span class="price-access">$597.51</span>
                <button class="button1"><span>Add to cart</span></button>
            </div>
            <div class="clearfix"></div>


    </div>
@endsection
