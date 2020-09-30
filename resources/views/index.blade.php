@extends('layout/main')

@section('title', 'Ekspresa')

@section('container')
<link href="/css/main.css" rel="stylesheet">
<!-- <video src="/ekspresa.mp4" autoplay="true" loop="true"> -->
<!-- <img src="{{asset('storage/headline2.jpg')}}"> -->


<!-- <div>
<video autoplay muted loop src="{{asset('storage/video/video.mp4')}}" id="homeVideo">
</div>
<div class ="movieOverlay">
    <h1>Ekspresa</h1>
</div> -->

<!-- 
<br>
<img src="{{asset('storage/image/headline2.jpg')}}">
<div class="container">
    <div>
        <h1> Home page....</h1> 
    </div>
</div> -->


<header class="v-header container">
    <div class="fullscreen-video-wrap">
        <video autoplay muted loop src="{{asset('storage/video/video.mp4')}}" id="homeVideo">
        </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
      <h1>Ekspresa</h1>
      <p>Pesan sekarang juga!</p>
      <a class="btn">Go to shop</a>
    </div>
  </header>

  <section class="section section-a">
    <div class="container">
      <h2>Section A</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
    </div>
  </section>

  <section class="section section-b">
    <div class="container">
      <h2>Section B</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
    </div>
  </section>
@endsection