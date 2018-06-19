<div class="col-md-6" style="float: left">
    <div class="card">
        <div class="card-header">What I have already bought</div>
        <div class="card-body">
            @foreach($collectionOrders as $order)
            <div class="card-block-hist" style="font-size: 16px;">
                <span style="font-size: 20px; margin-left: 100px;">{{$order->title}}</span>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <img src="images/{{$order->img_name}}" style="width: 125px; height: 125px; border-radius: 5px; margin: 5px;" alt="image">
                    </div>
                    <div class="col-7">
                        <span>Order number: {{$order->order_id}}</span>
                        <span>{{$order->description}}</span><br>
                        <span>Price:</span><i style="color: darkgreen; padding-left: 5px; padding-right: 5px; font-size: 16px;">{{$order->price}}</i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

