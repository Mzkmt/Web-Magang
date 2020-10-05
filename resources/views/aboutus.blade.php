@extends('layout/sub')

@section('title', 'Ekspresa')

@section('container')
<link href="/css/main.css" rel="stylesheet">

<div class="imagehome" id="imagehome">
  <img id="image" src="{{asset('storage/image/headline1.jpg')}}">      
  <div class="text-block">
    <h4>Print</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
  </div>
</div>
<div class="imagehome" id="imagehome">
  <img id="image" src="{{asset('storage/image/headline2.jpg')}}">      
  <div class="text-block2">
    <h4>Service</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
  </div>
</div>

@endsection