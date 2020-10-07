<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!-- mdb css -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> -->
      
    <title>@yield('title')</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light ">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
          <img  src="{{asset('storage/image/logo.png')}}" width="" height="75px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
            <!-- <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="/aboutus">About us</a>
            <a class="nav-link" href="#">Product</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
            <!-- <a class="nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="{{ url('/aboutus') }}">About us</a>
            <a class="nav-link" href="#">Product</a> -->
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/aboutus') }}">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/product') }}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">How to Buy</a>
              </li>
              
            </ul>
            
            </div>
        </div>  

    </div>
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        
    </nav>

    @yield('container')

    
    

<footer class="page-footer font-small white pt-4">
  <div class="container">
    <div class="container-fluid text-center text-md-left">

<!-- Grid row -->
      <div class="row">

  <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <!-- <img  src="{{asset('storage/image/logo.png')}}" width="" height="75px" alt=""> -->
          <h5 class="text-uppercase black-text">Quick Links</h5>
          <p class="p-footer">Home</p>
          <p class="p-footer">About Us</p>
          <p class="p-footer">Product</p>
          <p class="p-footer">How to Buy</p>


        </div>
        <!-- Grid column -->

        <!-- <hr class="clearfix w-100 d-md-none pb-3"> -->

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

          <!-- Content -->
          <!-- <h5 class="text-uppercase font-weight-bold black-text">Ekspresa</h5> -->
          <h5 class="text-uppercase black-text">Ekspresa</h5>
          <p class="p-footer">Jl. Palmerah Selatan 22--28 Jakarta</p>
          <p class="p-footer">Tlp. +62 21 548 3008, +62 21 548 0888</p>
          
          <p class="p-footer">Fax. +62 21 532 3662</p>
          <p class="p-footer">Email. marketing@gramediaprinting.com</p>

        </div>
        <!-- Grid column -->

      </div>
      <div class="div-footer">

          <!-- Grid column -->
          <div class="col-md-12">

            <div class="mb-2 text-center">

              <!-- Facebook -->
              <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg indigo-text mr-4"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter fa-lg light-blue-text mr-4"> </i>
              </a>
              <!-- Google +-->
              <!-- <a class="gplus-ic">
                <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
              </a> -->
              <!--Linkedin -->
              <!-- <a class="li-ic">
                <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
              </a> -->
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram fa-lg pink-text mr-4"> </i>
              </a>
              <!--Pinterest-->
              <!-- <a class="pin-ic">
                <i class="fab fa-pinterest fa-lg white-text"> </i>
              </a> -->

            </div>

          </div>
          <!-- Grid column -->

        </div>


      <!-- Grid row -->

      </div>
    <!-- Footer Text -->

    <!-- Copyright -->


    </div>
    <div class="footer-div text-center">© 2020 Copyright:
        <a href="/">Ekspresa</a>
    </div>

  </footer>
  <!-- Footer -->

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
      $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 1);
        $('.navbar-dark .navbar-nav > ul > li > a').toggleClass('scrolled', $(this).scrollTop() > 1);
      });
    </script>
  </body>
</html>