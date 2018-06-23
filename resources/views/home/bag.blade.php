<div class="col-md-6" style="float: left">
    <div class="card">
        @if(isset($no_products))
            <div class="card-header">My Bag</div>
         <h3 style="padding: 25px;">no product yet.</h3>
        @else
            <div class="card-header">My Bag <span class="alert alert-dark" style="font-weight: 600;margin-left: 500px;">Total: {{$sumOfProduct}}
                    <span style="margin-left: 50px; ;"> For All: {{$price}}$</span></span></div>
            <div class="card-body">
                @foreach($myProd as $myProduct)
                    <div class="card-block-bag" style="font-size: 16px;">
                        <span style="font-size: 20px; margin-left: 100px;">{{$myProduct->title}}</span>
                        <div class="row">
                            <div class="col-5 col-sm-3">
                                <img src="images/{{$myProduct->img_name}}"
                                     style="width: 125px; height: 125px; border-radius: 5px; margin: 5px;" alt="image">
                            </div>
                            <div class="col-7">
                                <span>{{$myProduct->description}}</span><br>
                                <b>Price:</b><i
                                        style="color: blue; padding-left: 5px; padding-right: 5px; font-size: 16px;">{{$myProduct->price}}</i>
                                <form action="/products/{{$categoryTitle}}/{{$myProduct->id}}" method="POST">
                                    {{ csrf_field() }}
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_J2qtLeKSx9H6I4RDIgzDga90"
                                            data-amount="{{$stripePrice}}"
                                            data-name="{{$myProduct->title}}"
                                            data-description="{{$myProduct->description}}"
                                            data-image="/images/{{$myProduct->img_name}}"
                                            data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        @endif
    </div>
</div>