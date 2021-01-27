@extends('layout/sub')

@section('title', 'Ekspresa')

@section('container')
<link href="/css/main.css" rel="stylesheet">

<div class="imagehome" id="imagehome">
    <img id="image" src="{{asset('storage/image/headlineproduct.jpg')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">      
    <div class="text-block-transparent">
        <h1> Product </h1>
        
    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p> -->
        </div>
</div>
<div class="container">
    <div class="row" style="margin-top: 40px; margin-bottom:40px; ">
        <div class="col-md-12 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}">
            <h2 style="margin:10px; text-align: center;"> Buku </h2>
        </div>
    </div>

    <div class="row" style="margin-top: 40px; margin-bottom:40px;">
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/product-resize-perfect1.jpg')}}"width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-perfect2.jpg')}}"width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p style="margin-top:10px;"> Jilid Lem </p> <br>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/product-resize-spiral1.jpg')}}"width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-spiral2.jpg')}}"width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p style="margin-top:10px;"> Jilid Spiral </p> <br>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/product-resize-kawat1.jpg')}}"width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-kawat2.jpg')}}"width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p style="margin-top:10px;"> Jilid Kawat </p> <br>
        </div> 
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/product-resize-lembenang1.jpg')}}"width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-lembenang2.jpg')}}" width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p style="margin-top:10px;"> Jilid Lem Benang </p> <br>
        </div>
    </div>


    <div class="row" style="margin-top: 40px; margin-bottom:40px; ">
        <div class="col-md-12 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}">
            <h2 style="margin:10px; text-align: center;"> Marketing Colateral</h2>
        </div>
    </div>

    <div class="row" style="margin-top: 40px; margin-bottom:40px;">
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/product-resize-kartunama1.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-kartunama2.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p style="margin-top:10px;"> Kartu Nama </p> <br>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/flyer.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <!-- <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-spiral2.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;"> -->
            <p style="margin-top:10px;"> Flyer </p> <br>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/brosur.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <!-- <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-kawat2.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;"> -->
            <p style="margin-top:10px;"> Brosur </p> <br>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/poster.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <!-- <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-lembenang2.jpg')}}" width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;"> -->
            <p style="margin-top:10px;"> Poster </p> <br>
        </div> 
        
    </div>
    



    <div class="row" style="margin-top: 40px; margin-bottom:40px; ">
        <div class="col-md-12 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}">
            <h2 style="margin:10px; text-align: center;"> Sticker </h2>
        </div>
    </div>

    <div class="row" style="margin-top: 40px; margin-bottom:40px;">
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/sticker.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <!-- <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-perfect2.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;"> -->
            <p style="margin-top:10px;"> Sticker Potong Jadi </p> <br>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/sticker.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <!-- <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-spiral2.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;"> -->
            <p style="margin-top:10px;"> Sticker Punch </p> <br>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/sticker.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <!-- <img class="img-fluid image-hover" src="{{asset('storage/image/product-resize-kawat2.jpg')}}"width="300px" height="" alt="" style="margin-left:auto; margin-right:auto;"> -->
            <p style="margin-top:10px;"> Sticker Punch Setengah </p> <br>
        </div> 
        
    </div>



</div>




@endsection