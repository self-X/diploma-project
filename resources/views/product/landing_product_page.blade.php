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

        <div class="card box-shadow col-md-3 card-block" >
            <img class="card-img-top" style=" padding:5px; height: 200px;" src="{{asset('images/1.jpg')}}">
            <div class="card-body">
                <p class="card-text" style="font-size: 18px;">Lorem ipsum 1 9aaa.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">add +</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>



    </div>
</div>



@endsection
