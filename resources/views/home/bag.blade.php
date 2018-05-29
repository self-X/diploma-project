<div class="col-md-6" style="float: left">
    <div class="card">
        <div class="card-header">My Bag</div>
        <div class="card-body">
        @foreach($myProd as $myProduct)
            <div class="card-block-bag" style="font-size: 16px;">
                <span style="font-size: 20px; margin-left: 100px;">{{$myProduct->title}}</span>
                <div class="row">
                    <div class="col-5 col-sm-3col-5 col-sm-3">
                        <img src="images/{{$myProduct->img_name}}" style="width: 125px; height: 125px; border-radius: 5px; margin: 5px;" alt="image">
                    </div>
                    <div class="col-7">
                        <span>{{$myProduct->description}}</span><br>
                        <b>Price:</b><i style="color: blue; padding-left: 5px; padding-right: 5px; font-size: 16px;">{{$myProduct->price}}</i>
                        <button class="btn btn-success btn-lg " style="float: right; margin: 5px;">Buy</button>
                    </div>
                </div>
            </div>
                <br>
        @endforeach
        </div>
    </div>
</div>