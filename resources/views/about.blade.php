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
                          <a class="nav-link  " href="{{ route('login') }}"> <i class="bi bi-box-arrow-in-right"></i>{{ __('  Sign In') }}</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
        <div class="p-4"> 
    <h1>About</h1>
    <br>
    <h3 style="text-align: center; ">Welcome To <span id="W_Name1">Vdirect</span></h3><br>
    <p class='text-justify'>
        Streaming media is multimedia that is delivered and consumed in a continuous manner from a source, with little or no intermediate storage in network elements. Streaming refers to the delivery method of content, rather than the content itself. Livestreaming is the real-time delivery of content during production, much as live television broadcasts content via television channels. Livestreaming requires a form of source media, an encoder to digitize the content, a media publisher, and a content delivery network to distribute and deliver the content. So, this Video Streaming Service Website is developed in PHP using Laravel framework for entertainment purpose.
        This system is about uploading and streaming videos and movies on an online platform that any user can access anywhere and at any time. They can access their favorite Movies or Series at any location using their browser and internet. Users must pay the subscription fee to access the site because the movies and series are being uploaded by the company who spend on making them so they could earn from the views and ads user are seeing and subscribing for.
        The main purpose of the project is to entertain users at any place and at any time, nowadays the television broadband charges fees and can be accessed only on one location, but the video sites can be accessed at any time and place. So, this is the advantage of internet and sites. The sites storage of the data has been planned. Using the constructs of Apache Server and all the user interfaces have been designed using the PHP Laravel technologies. The database connectivity is planned to use the “MySQL Connection” methodology. The standards of security and data protective mechanism have been given a big choice for proper usage. The site takes care of different modules and their associated reports, which are produced as per the applicable strategies and standards that are put forwarded by the administrative staff.
    </p>
    <p class='text-justify'><span id="W_Name2">Vdirect</span> is a Professional <span id="W_Type1">Entertainment </span> Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of <span id="W_Type2">Entertainment </span>, with a focus on dependability and <span id="W_Spec">Online </span>. We're working to turn our passion for <span id="W_Type3">Entertainment </span> into a booming <a href="https://www.blogearns.com" rel="do-follow" style="color:inherit; text-decoration: none;">online website</a>. We hope you enjoy our <span id="W_Type4">Entertainment </span> as much as we enjoy offering them to you.</p>
<br>


        </div>
    </div>
<!-------------------------------------------Footer-------------------------------------------------------------------->
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->

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
