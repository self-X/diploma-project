@extends('master')
@section('title', $prod->title)

@section('content')
    <div style="position: fixed; z-index: 999;" id="responseToAddCard"></div>
    <div class="container">
        <div class="card flex-md-row  box-shadow h-md-250">
                <div style="padding: 25px;">
                    <img class="card-img-right flex-auto d-none d-lg-block d-block"
                             style="width: 450px ; height: 350px; "
                             src="/images/{{$prod->img_name}}"
                             alt="First slide"><br>
                    <h2 class="d-inline-block mb-2 text-dark">{{$prod->title}}</h2><br>
                    <div class="mb-1 text-muted">{{$prod->created_at}}</div>
                </div>
            {{--card1--}}
            <div class="card-body d-flex flex-column align-items-start">


                <div class="card box-shadow" style="width: 300px">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Price:</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{$prod->price}}
                            <small class="text-muted">/ mo</small>
                        </h1>
                        <form id="addCardForm" action="/{{$categoryTitle}}/{{$prod->id}}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn click  btn-dark"><b>ADD TO BAG</b></button>
                        </form>
                        <hr>
                        {{--<button type="button" data-toggle="modal" data-target="#makeOrder" class="btn btn-lg btn-block btn-success">BUY</button>--}}
                        <form action="/products/{{$categoryTitle}}/{{$prod->id}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleSelect1"><h4>Select a size :</h4></label>
                                <select class="form-control" name="size">
                                    <option value="L">L</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_J2qtLeKSx9H6I4RDIgzDga90"
                                    data-amount="{{$stripePrice}}"
                                    data-name="{{$prod->title}}"
                                    data-description="{{$prod->description}}"
                                    data-image="/images/{{$prod->img_name}}"
                                    data-locale="auto">
                            </script>
                        </form>
                    </div>
                    <div id="makeOrder" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h4 class="modal-title">Заголовок окна</h4>
                                <div class="modal-body">
                                    let`s buy!
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-dark" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @guest
                <a href="/login" class="badge-pill badge badge-info">login to save in wishlist</a>
                @endguest
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Details</h4>
            </div>
            <div class="card-body">
                <span class="">{{$prod->description}}</span>
            </div>
@endsection