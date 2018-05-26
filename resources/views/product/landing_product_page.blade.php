@extends('master')
@section('title', 'Best Product')

@section('content')

{{--@include('product.detail')--}}

<style>
    .card-block{
        border: none;
    }
    .card-block:hover{
       border:  1px solid crimson;
        cursor: pointer;
    }

</style>

<div class="container">
    <div class="row">
@foreach( $prod as $product)
        <div class="card box-shadow col-md-3 card-block" >
            <img class="card-img-top" style=" padding:5px; height: 200px;" src="{{asset('images/'.$product->img_name)}}">
            <div class="card-body">
                <p class="card-text" style="font-size: 18px;">{{$product->title}}</p>
                <span>{{$product->price}}</span>
                @if($product->isAvailable)
                    <span>Available</span>
                @else
                    <span>Disable</span>
                @endif
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">add +</button>
                    </div>
                    <small class="text-muted">{{$product->created_at}}</small>
                </div>
            </div>
        </div>
@endforeach


    </div>
</div>



@endsection
