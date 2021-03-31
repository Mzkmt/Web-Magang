@extends('layout/sub')

@section('title', 'Ekspresa')

@section('container')
<link href="/css/main.css" rel="stylesheet">

<!-- <div class="imagehome" id="imagehome">
    <img id="image" src="{{asset('storage/image/headline4-resize.jpg')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">      
    <div class="text-block-transparent">
        <h1> How to Buy </h1> -->
    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p> -->
    <!-- </div>
</div> -->


<div class="imagehome" id="imagehome">
    <img id="image" src="{{asset('storage/image/headlinebuy.jpg')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">      
    <div class="text-block-transparent">
        <h1 style="margin: 0px;"> How to Buy </h1>
        
    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p> -->
        </div>
</div>
<!-- <div class="container"><br>
    <h4>
    1. Open ekspresa.co.id
    </h4>
    <h4>
    2. Select product to purchase
    </h4>
    <h4>
    3. Add to cart
    </h4>


</div> -->
<div class="container">
<div class="row" style="margin-top: 40px; margin-bottom:40px; ">
        <div class="col-md-12 col-sm-12" style="text-align:left;">
            <h4 style="margin-top: 10px;"> 1. Open ekspresa.co.id </h4>
            <img id="image" src="{{asset('storage/image/howtobuy1.png')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">  
            <h4 style="margin-top: 40px;"> 2. Login or register</h4>
            <img id="image" src="{{asset('storage/image/howtobuy2.png')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">     
            <h4 style="margin-top: 40px;"> 3. Select product to purchase and customize</h4>
            <img id="image" src="{{asset('storage/image/howtobuy3.png')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">  
            <h4 style="margin-top: 40px;"> 4. Add to cart </h4>
            <img id="image" src="{{asset('storage/image/howtobuy4.png')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">  
            <h4 style="margin-top: 40px;"> 5. Input address and payment </h4>
            <img id="image" src="{{asset('storage/image/howtobuy5.png')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">  
        </div>
    </div>
    <!-- <h4> 1. Open ekspresa.co.id </h4>
    <h4> 2. Select product to purchase </h4>
    <h4> 3. Add to cart </h4> -->
</div>


@endsection