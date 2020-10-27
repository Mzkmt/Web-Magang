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


<!-- <header class="v-header container">
    <div class="fullscreen-video-wrap">
        <video autoplay muted loop src="{{asset('storage/video/video.mp4')}}" id="homeVideo">
        </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
      <h1>Ekspresa</h1>
      <p>Pesan sekarang juga!</p>
      <a class="btn" target="_blank" href="//www.ekspresa.co.id">Go to shop</a>
    </div>
</header> -->

<header>
  <div class="overlay"></div>
  <video src="{{asset('storage/video/video.mp4')}}" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <!-- <video autoplay muted loop  id="homeVideo"> -->
    <!-- <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4"> -->
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Ekspresa</h1>
        <p class="lead mb-0">Pesan sekarang juga!</p>
        <a class="btn" target="_blank" href="//www.ekspresa.co.id">Go to shop</a>
      </div>
    </div>
  </div>
</header>

<div class="imagehome" id="imagehome">
  <img id="image" class="img-fluid img-fluid1"  src="{{asset('storage/image/headline1.jpg')}}">      
  <div class="text-block ">
    <h4>Print</h4>
    <p>Hasil print kualitas tinggi dengan teknologi canggih</p>
  </div>
</div>
<div class="imagehome" id="imagehome">
  <img id="image" class="img-fluid img-fluid2" src="{{asset('storage/image/headline2.jpg')}}">      
  <!-- <div class="text-block2 d-none d-md-block"> -->
  <div class="text-block2">
    <h4>Service</h4>
    <p>Menyediakan layanan mulai dari awal design, cetak, sampai distribusi</p>
  </div>
</div>
  
  

  <!-- <section class="section section-b">
    <div class="container">
      <h2>Section B</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
    </div>
  </section> -->
@endsection