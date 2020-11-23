@extends('layout/sub')

@section('title', 'Ekspresa')

@section('container')
<link href="/css/main.css" rel="stylesheet">
<div class="imagehome" id="imagehome">
    <img id="image" src="{{asset('storage/image/headline5-resize.jpg')}}" style="min-height: 256px; object-fit:cover;">      
    <div class="text-block-transparent">
        <h1> How to Buy </h1>
    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p> -->
    </div>
</div>
<div class="container"><br>
    <h4>
    1. Open ekspresa.co.id
    </h4>
    <h4>
    2. Select product to purchase
    </h4>
    <h4>
    3. Add to cart
    </h4>


</div>

@endsection