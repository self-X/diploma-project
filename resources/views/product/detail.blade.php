@extends('master')
@section('title', $prod->title)

@section('content')
<div class="container">
    <div class="card flex-md-row  box-shadow h-md-250">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="width: 350px; height: 500px;">
                    <img class="card-img-right flex-auto d-none d-lg-block d-block w-100" src="/images/{{$prod->img_name}}"
                         alt="First slide">
                </div>
            </div>
            {{--
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            --}}
        </div>

        {{--card1--}}
        <div class="card-body d-flex flex-column align-items-start">
            <h2 class="d-inline-block mb-2 text-dark">{{$prod->title}}</h2>

            <span class="mb-1">Brand: <a href="#">Sed do eiusmod </a></span>

            <div class="mb-1 text-muted">{{$prod->created_at}}</div>

            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Price:</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{$prod->price}}
                        <small class="text-muted">/ mo</small>
                    </h1>
                    <h4>Select a size :</h4>
                    <div class="input-group form-check form-check-inline" style="color: hotpink; font-weight: 500;">
                        <ul>
                            <div class="form-check form-check-inline">
                                <input class="checkbox-my form-check-input" type="checkbox"
                                       id="inlineCheckbox1"
                                       value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">L</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="checkbox-my form-check-input" type="checkbox"
                                       id="inlineCheckbox2"
                                       value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">S</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="checkbox-my form-check-input" type="checkbox"
                                       id="inlineCheckbox1"
                                       value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="checkbox-my form-check-input" type="checkbox"
                                       id="inlineCheckbox2"
                                       value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">XL</label>
                            </div>
                            </li>
                        </ul>
                    </div>

                    <button type="button" class="btn btn-lg btn-block btn-dark">Add to card</button>

                </div>

            </div>

            <a href="#" class="badge-pill badge badge-info">login to save in wishlist</a>
        </div>
    </div>

    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Details</h4>
        </div>
        <div class="card-body">
                    <span class="">{{$prod->description}}</span>
        </div>

        <div class="card mb-4 box">
            <div class="card-header bg-white" style="cursor: pointer">
                <h4 class="my-0 font-weight-normal  text-center">Related Products</h4>
            </div>

            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Product 1</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Bootu veri gud
                    <small class="text-muted">discount 10%</small>
                </h1>
                <ul class="float-lg-left list-unstyled mt-3 mb-4" style="margin-right: 25px;">
                    <li>
                        <img style="height: 65px; height: 200px;" src="images/w10.jpg" class="img-responsive "
                             alt=""/>
                    </li>
                </ul>

                <ul class="list-unstyled mt-4">
                    <li>
                        <span class="mb-1">Brand: <a href="#">Sed do eiusmod </a></span>
                    </li>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</li>
                    <li class="mb-1 text-muted">Nov 12</li>
                    <li class="card-text" style="display: block; text-align: justify">
                        when an unknown printer took a galley of type and scrambled it to
                    </li>
                </ul>
                <div class="clearfix"></div>
                <button type="button" class="btn btn-success">Add to card</button>
                <span class="text-info" style="font-size: 20px; padding-left: 50px;">price: 210$</span>

            </div>

            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Product 1</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Bootu veri gud
                    <small class="text-muted">discount 10%</small>
                </h1>
                <ul class="float-lg-left list-unstyled mt-3 mb-4" style="margin-right: 25px;">
                    <li>
                        <img style="height: 65px; height: 200px;" src="images/w8.jpg" class="img-responsive "
                             alt=""/>
                    </li>
                </ul>

                <ul class="list-unstyled mt-4">
                    <li>
                        <span class="mb-1">Brand: <a href="#">Sed do eiusmod </a></span>
                    </li>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</li>
                    <li class="mb-1 text-muted">Nov 12</li>
                    <li class="card-text" style="display: block; text-align: justify">
                        when an unknown printer took a galley of type and scrambled it to
                    </li>
                </ul>
                <div class="clearfix"></div>
                <button type="button" class="btn btn-success">Add to card</button>
                <span class="text-info" style="font-size: 20px; padding-left: 50px;">price: 10$</span>

            </div>
        </div>
    </div>
</div>
@endsection