
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{asset('img/logo.ico')}}" type="img/ico">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tcustom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kcustom.css') }}" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>
<body>
    <div id="loading">
      <img id="loading-image" src="{{asset('img/loading.gif')}}" alt="Loading..." />
    </div>
    <button onclick='window.scrollTo({top: 0, behavior: "smooth"});' id="myBtn" title="Go to top">
         <i class="bi bi-chevron-double-up"></i>
        </button>
     <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand text-primary" href="{{ route('home') }}">
                {{ __(' ') }}{{ config('app.name', 'Laravel') }} 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @guest
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
                                href="/about">{{ __('Contact') }}</a>
                            </li>
                        @else   
                        @if(Auth::user()->user_type != 'employer')
                       
                        <!-- <li class="nav-item">
                          <a class="nav-link"
                            href="{{ url('/') }}"><i class="bi bi-emoji-kiss"></i> {{ __(' Kids') }}</a>
                        </li>  
                        <li class="nav-item">
                          <a class="nav-link"
                            href="{{ url('/') }}"><i class="bi bi-cloud-plus"></i> {{ __(' Recently Added') }}</a>
                        </li>  -->
                        @else
                        
                        @endif

                        @endguest

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                          <a class="nav-link  " href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i>{{ __('  Sign In') }}</a>
                        </li>
                         <!-- @if (Route::has('register'))
                          <li class="nav-item">
                            <a class="nav-link " 
                              href="{{ route('register') }}">{{ __('Job Seeker Registration') }}
                            </a>
                          </li>
                        @endif  -->
                      @else
                      @if(Auth::user()->user_type == 'employer')
                          <li class="nav-item">
                          <a class="nav-link" 
                                href="{{ route('home') }}"><i class="bi bi-speedometer2"></i>{{ __(' Home') }}
                              </a>
                          </li><li class="nav-item">
                          <a class="nav-link" 
                                href="{{ route('job.create') }}">
                                <i class="bi bi-cloud-arrow-up-fill"></i>{{ __('  Upload') }}
                              </a>
                          </li>
                          @elseif(Auth::user()->user_type == 'admin')
                          @else
                          <li class="nav-item">
                          <a class="nav-link"
                            href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i>{{ __('  Home') }}</a>
                        </li>  
                          <!-- <li class="nav-item">
                          <a class="nav-link" 
                                href="{{ route('home') }}">{{ __('Report Problem') }}
                              </a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" 
                                href="{{ route('alljobs') }}">{{ __('Subscription') }}
                              </a>
                          </li> -->
                          @endif
                          <!-- <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          </form> -->
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" 
                            class="nav-link dropdown-toggle" 
                            href="#" role="button" 
                            data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false" v-pre>
                            @if(Auth::user()->user_type == 'employer')
                              <i class="bi bi-building"></i>{{ __(' ') }}{{ Auth::user()->company->cname }} 
                              <span class="caret"></span>
                            @elseif(Auth::user()->user_type == 'admin')
                            {{ __('  Adminstrator:   ') }}{{ Auth::user()->name }} 
                                <span class="caret"></span>
                            @else
                            <i class="bi bi-person-fill"></i>{{ __(' ') }}{{ Auth::user()->name }} 
                              <span class="caret"></span>
                            @endif
                          </a>  
                          <div class="dropdown-menu dropdown-menu-right" 
                              aria-labelledby="navbarDropdown">
                            @if(Auth::user()->user_type == 'employer')
                              <a class="dropdown-item" 
                                href="{{ route('company.edit') }}">
                                {{ __('Profile') }}
                              </a>
                              <a class="dropdown-item" 
                                 target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSc6ThThBXq2x0NFUVxugfXNB0L-gJZM8DqlPruWqynFH21x0w/viewform">{{ __('Feedback/Report') }}
                              </a>
                              <!-- <a class="dropdown-item" 
                                href="{{ route('applicant') }}">My Applicants
                              </a> 
                                          -->
                             @elseif(Auth::user()->user_type == 'admin')
                             <a class="dropdown-item" 
                                 target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSc6ThThBXq2x0NFUVxugfXNB0L-gJZM8DqlPruWqynFH21x0w/viewform">{{ __('Feedback/Report') }}
                              </a>
                             <!-- <a class="dropdown-item" 
                                href="{{ route('profile') }}">{{ __('Profile') }}
                              </a> -->
                            @else
                              <a class="dropdown-item" 
                                href="{{ route('profile') }}">{{ __('Profile') }}
                              </a>
                              <a class="dropdown-item" 
                                href="{{ route('subscription') }}">{{ __('Subscription') }}
                              </a>
                              <a class="dropdown-item" 
                                target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSc6ThThBXq2x0NFUVxugfXNB0L-gJZM8DqlPruWqynFH21x0w/viewform">{{ __('Feedback/Report') }}
                              </a>                              
                            @endif
                            <hr>
                            <a class="dropdown-item" 
                              href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              {{ __('Sign out') }}
                            </a>

                            <form id="logout-form" 
                                  action="{{ route('logout') }}" 
                                  method="POST" style="display: none;">
                              @csrf
                            </form>
                          </div>
                        </li>
                      @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
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
