@extends('master')
@section('title', 'MOOD')
@section('content')
    {{----}}
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" style=" height: 550px;
      background: url('images/categories/kids/kids.jpg') 100% 80% no-repeat; background-size: cover; ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Best for kids</h1>
            <p class="lead font-weight-normal" style="font-size: 20px;">The best for children with LOVE</p>
            <a class="btn btn-dark" style="width: 300px" href="#">KIDS</a>
        </div>
    </div>
{{----}}
    <style>
        .text-hover-color-darkred{color:black}
        .text-dark-hover-color-yeloow{color:black}
        .text-hover-color-darkred:hover{color: darkred;}
        .text-dark-hover-color-hotpink{color: white;}
        .text-dark-hover-color-orange{color: white}
        .text-dark-hover-color-hotpink:hover{color: hotpink;}
        .text-dark-hover-color-yeloow:hover{ color: yellow;}
        .text-dark-hover-color-orange:hover{color: orange}

        .image{
            overflow:hidden;
        }
        .image img {
            -moz-transition: all 1s ease-out;
            -o-transition: all 1s ease-out;
            -webkit-transition: all 1s ease-out;
        }

        .image img:hover{
            -webkit-transform: scale(1.3);
            -moz-transform: scale(1.3);
            -o-transform: scale(1.3);
        }

        .mood-btn{
            border: 1px solid white;
            color: white;
            font-size: 24px;
        }
        .mood-btn:hover{
            border: 1px solid aqua;
            color: aqua;
        }

    </style>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="cursor: pointer; ">
        <a href="#" class="text-dark-hover-color-hotpink bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="text-decoration: none">
            <div>
                <h2 class="display-5">ACCESSORIES</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/accessories/access.png" style="width: 95.5%; z-index: 100;  " alt="accessories">
            </div>
        </a>
        <a href="#" class="text-hover-color-darkred  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="background: lightblue; text-decoration: none">
            <div>
                <h2 class="display-5">GLASSES</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/glasses/g-glass.jpg"  style="width: 100%" alt="glasses">

            </div>
        </a>

    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="cursor: pointer;" >

        <a href="#" class="text-dark-hover-color-orange mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="background: #8a6d3b; text-decoration: none">
            <div>
                <h2 class="display-5">BAGS</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/bags/bags.jpg"  style="width: 100%" alt="shoes">
            </div>
        </a>

        <a href="#" class="text-dark-hover-color-yeloow mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center  overflow-hidden" style="background:burlywood; text-decoration: none">
            <div>
                <h2 class="display-5">FOOTWEAR</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/shoes/shoes2.png"  style="width: 84%" alt="shoes">
            </div>
        </a>
    </div>

    <div class=" d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="cursor: pointer;" >
        <a href="#" class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-dark overflow-hidden" style="background:lightgray; text-decoration: none">
            <div class="my-3 p-3">
                <h2 class="display-5">T-SHORT</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/tshorts/tshort3.png"  style="width: 87%" alt="t-short">
            </div>
        </a>
        <a href="#" class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="text-decoration: none">
            <div class="my-3 py-3">
                <h2 class="display-5">SWEATER</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="image" style="width: 100%;">
                <img src="/images/categories/sweaters/sweater.jpg"  style="width: 79%" alt="sweater">
            </div>
        </a>
    </div>

@endsection

