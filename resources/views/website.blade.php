<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vdirect</title>
        <link rel="icon" href="{{asset('img/logo.ico')}}" type="img/ico">
        <link href="{{ asset('css/wcustom.css') }}" rel="stylesheet">


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body>
    <div id="loading">
      <img id="loading-image" src="{{asset('img/loading.gif')}}" alt="Loading..." />
    </div>
    <button onclick='window.scrollTo({top: 0, behavior: "smooth"});' id="myBtn" title="Go to top">
         <i class="bi bi-chevron-double-up"></i>
        </button>
    <!-------------------------------------------Navbar----------------------------------------------------------->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand text-primary" href="{{ route('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->

                     <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                              <a class="nav-link"
                                href="/">{{ __('Website') }}</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link"
                                href="/about">{{ __('About') }}</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link"
                                href="/contact">{{ __('Contact') }}</a>
                            </li>

                        </ul>

                    </ul>
                        <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                          <a class="nav-link  " href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i>{{ __('  Sign In') }}</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


<!-------------------------------------------Home-------------------------------------------------------------------->

<section class="part1">
    <div class="talk">
        <h1>Enjoy Entertainment.</h1>
        <p>Watch on smart TV, Chromecast, Phone, Personal Desktop
            and More....</p>
    </div>
    <div class="img">
        <img src="{{asset('img/part1.png')}}" alt="img1" class="image-fluid">
    </div>
</section>

<section class="part2">
    <div class="img">
        <img src="{{asset('img/part2.jpg')}}" alt="img1" class="image-fluid">
    </div>
    <div class="talk">
        <h1>Easy to use</h1>
        <p>Simple user interface that can be used by anyone.</p>
    </div>
</section>

<section class="part3">
    <div class="talk">
        <h1>Watch everywhere.</h1>
        <p>Stream unlimited videos on your phne, tablet, laptop.</p>
        </div>
        <div class="img">
            <img src="{{asset('img/part3.png')}}" alt="img1" class="image-fluid">
        </div>
</section>

<section class="part4">
    <div class="img">
        <img src="{{asset('img/2.jpg')}}" alt="img1" class="image-fluid">
    </div>
    <div class="talk">
        <h1>Kids Content Available.</h1>
        <p>Send kids on adventures with their favourite characters in a space made just for them—free with your membership.</p>
    </div>
</section>



<!-------------------------------------------Footer-------------------------------------------------------------------->
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">

      <!-- Section: Form -->
      <section class="foot p-4">
        <form action="">
          <!--Grid row-->

      <!-- Section: Form -->

      <!-- Section: Text -->
      <!-- Section: Text -->

      <!-- Section: Links -->
      <section class="links">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/faq" class="text-white">FAQ</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/privacy" class="text-white">Privacy Policy</a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/contact" class="text-white">Contact Us</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/terms" class="text-white">Terms & Conditions</a>
              </li>
            </ul>
          </div>
          <!--Grid column--><!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/about" class="text-white">About Project</a>
              </li>
            </ul>
          </div>
          <!--Grid column--><!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/company" class="text-white">Company Registration</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright of
      <a class="text-white" href=""> Vdirect Private Limited India</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
    <script>
      $(window).load(function() {
        $('#loading').remove();
      });
    </script>
    </body>

</html>
