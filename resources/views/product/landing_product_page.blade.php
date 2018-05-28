@extends('master')
@section('title', 'Best Product')

@section('content')
<style>
    .card-block{
        border: none;
    }
    .card-block:hover{
       border:  1px solid crimson;
        cursor: pointer;
    }

    .card-block-active{
        border:  1px solid crimson;
        cursor: pointer;
    }

</style>

<div class="container">
    <div class="row">
@foreach( $prod as $product)
        <div class="card box-shadow col-md-3 card-block " >
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
                        <a href="{{$categoryTitle}}/{{$product->id}}" class="btn btn-sm btn-dark">View</a>
                        <form action="/{{$categoryTitle}}/{{$product->id}}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-sm btn-outline-secondary">add +</button>
                        </form>
                    </div>
                    <small class="text-muted">{{$product->created_at}}</small>
                </div>
            </div>
        </div>
@endforeach
    </div>
</div>



@endsection
