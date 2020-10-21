@extends('layout/sub')

@section('title', 'Ekspresa')

@section('container')
<link href="/css/main.css" rel="stylesheet">

<div class="imagehome" id="imagehome">
    <img id="image" src="{{asset('storage/image/headline3.jpg')}}">      
    <div class="text-block-transparent">
        <h1> Product </h1>
        
    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p> -->
        </div>
</div>
<div class="container">
    <!-- <div class="row" style="margin-top: 20px;">
        <div class="col-md-4" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img src="{{asset('storage/image/product-image1.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid kawat </p>
        </div>
        <div class="col-md-4" style="text-align:center;">
        <img src="{{asset('storage/image/product-image1.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid kawat </p>
        </div>
        <div class="col-md-4" style="text-align:center;">
            <img src="{{asset('storage/image/product-image1.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid kawat </p>
        </div>
    </div> -->
    <div class="row" style="margin-top: 40px;">
        <div class="col-md-4 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img src="{{asset('storage/image/product1-perfect1.jpg')}}"width="260px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="image-hover" src="{{asset('storage/image/product1-perfect2.jpg')}}"width="260px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid lem </p>
        </div>
        <div class="col-md-4 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img src="{{asset('storage/image/product-perfect-1.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="image-hover" src="{{asset('storage/image/product1-perfect-2.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid lem </p>
        </div>
        <div class="col-md-4 col-sm-12" style="text-align:center;">
            <img src="{{asset('storage/image/product-image1.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid kawat </p>
        </div>
    </div>
    <div class="row" style="margin-top: 40px; margin-bottom:40px;">
        <div class="col-md-4" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img src="{{asset('storage/image/product1-perfect-3.jpg')}}"width="260px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="image-hover" src="{{asset('storage/image/product1-perfect2.jpg')}}"width="260px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid lem </p>
        </div>
        <div class="col-md-4" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img src="{{asset('storage/image/product-perfect-1.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="image-hover" src="{{asset('storage/image/product1-perfect-2.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid lem </p>
        </div>
        <div class="col-md-4" style="text-align:center;">
            <img src="{{asset('storage/image/product-perfect1.jpg')}}"width="75%" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="image-hover" src="{{asset('storage/image/product-image1.jpg')}}"width="260px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid kawat </p>
        </div>
    </div>
    <div class="row" style="margin-top: 40px; margin-bottom:40px;">
        <div class="col-lg-4" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img src="{{asset('storage/image/product-spiral1.jpg')}}"width="250px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="image-hover" src="{{asset('storage/image/product-spiral2.jpg')}}"width="250px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid lem </p>
        </div>
        <div class="col-lg-4" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img src="{{asset('storage/image/product-kawat1.jpg')}}"width="250px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="image-hover" src="{{asset('storage/image/product-kawat2.jpg')}}"width="250px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid lem </p>
        </div>
        <div class="col-lg-4" style="text-align:center;">
            <img src="{{asset('storage/image/product-lembenang1.jpg')}}"width="250px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <img class="image-hover" src="{{asset('storage/image/product-lembenang2.jpg')}}" width="250px" height="" alt="" style="margin-left:auto; margin-right:auto;">
            <p> Buku jilid kawat </p>
            
        </div>
    </div>
</div>



@endsection