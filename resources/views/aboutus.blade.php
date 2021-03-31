@extends('layout/sub')

@section('title', 'Ekspresa')

@section('container')
<link href="/css/main.css" rel="stylesheet">

<div class="imagehome" id="imagehome">
    <img id="image" src="{{asset('storage/image/headlineaboutus.jpg')}} " style="min-height: 150px; object-fit:cover; object-position: left ;">      
    <div class="text-block-transparent">
        <h1 style="margin: 0px;"> About Us </h1>


        
    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p> -->
    </div>
</div>
<div class="container">
  <div class="row" style="margin-top: 40px; margin-bottom:40px; ">
    
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:center;" href="{{ url('/aboutus') }}" >
            <img class="img-fluid" src="{{asset('storage/image/logo.png')}}"width="275px" height="" alt="" style="margin-left:auto; margin-right:auto;">
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12" style="text-align:left;" href="{{ url('/aboutus') }}" >
      <h4>
        Ekspresa didirikan pada tahun 2021 sebagai salah satu bisnis Kompas Gramedia, PT. Gramedia telah membuktikan dirinya sebagai salah satu perusahaan penyedia jasa cetak terkemuka di Indonesia.
        <br><br>PT. Gramedia yang kini lebih dikenal dengan nama Ekspresa terus mengembangkan bisnisnya, baik di Indonesia maupun di pasar Internasional.

      </h4>

            <!-- <p style="margin-top:10px;"> Jilid Spiral </p> <br> -->
      </div>
    <!-- <h4>
    Ekspresa didirikan pada tahun 2021 sebagai salah satu bisnis Kompas Gramedia, PT. Gramedia telah membuktikan dirinya sebagai salah satu perusahaan penyedia jasa cetak terkemuka di Indonesia.
    <br><br>PT. Gramedia yang kini lebih dikenal dengan nama Ekspresa terus mengembangkan bisnisnya, baik di Indonesia maupun di pasar Internasional.

    </h4> -->
  </div>
</div>
<!-- 
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
</div> -->




@endsection