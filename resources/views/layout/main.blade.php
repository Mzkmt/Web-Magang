<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">

    <!-- fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    
    <!-- mdb css -->

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
    <!-- Google Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
    <!-- Bootstrap core CSS -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Material Design Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> -->
      
    <title>@yield('title')</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
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

    
  
    <footer  style="background-color: #ffffff">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 text-center text-md-left ">
                    
                    <div class="py-0">
                        <!-- <h3 class="my-4 text-black">About<span class="mx-2 font-italic text-warning ">Eduonix</span></h3> -->
                        <div style="margin: 20px;">
                          <img src="{{asset('storage/image/logo.png')}}" width="" height="75px" alt="" >
                        </div>  
                        <p class="footer-links font-weight-bold">
                            <a class="text-black" href="{{ url('/') }}">Home</a>
                            |
                            <a class="text-black" href="{{ url('/aboutus') }}">About Us</a>
                            |
                            <a class="text-black" href="{{ url('/product') }}">Product</a>
                            |
                            <a class="text-black" href="#">How to Buy</a>
                        </p>
                        <p class="text-dark py-4 mb-4">&copy;2020 Ekspresa</p>
                    </div>
                </div>
                
                <div class="col-md-6 text-black text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-black"> <i class="fa fa-map-marker mx-2 "></i>
                              
                              Jl. Palmerah Selatan 22-28 Jakarta<br>
                              <!-- Tlp. +62 21 548 3008, +62 21 548 0888<br> -->
                              <!-- Fax. +62 21 532 3662<br> -->
                              <!-- Email. marketing@gramediaprinting.com</p> -->
                        </div>

                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> +62 21 548 3008, +62 21 548 0888</p>
                            <p><i class="fa fa-fax mx-2 "></i> +62 21 532 3662</p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope  mx-2"></i><a href="mailto:marketing@gramediaprinting.com">marketing@gramediaprinting.com</a></p>
                        </div>  
                    </div>  
                </div>
                
                <!-- <div class="col-md-4 text-black my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">About the Company</span>
					            <p class="text-warning my-2" >We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
                    <div class="py-2">
                        <a href="#"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fab fa-google-plus fa-2x text-danger mx-3"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
                    </div>
                </div> -->
            </div>  
        </div>
     </footer>
     <!-- end of footer -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> -->
  </body>
</html>
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