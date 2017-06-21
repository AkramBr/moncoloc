<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Colocation de Logement en Tunisie</title>

    <!-- Styles -->
    <link href="{{('http://fonts.googleapis.com/css?family=Nunito:300,400,700') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('libraries/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/colorbox/example1/colorbox.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/bootstrap-fileinput/fileinput.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/superlist.css') }}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->

    <!-- Optional theme -->


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <!-- Latest compiled and minified JavaScript -->

    <!-- Scripts -->


</head>
<body>
  
    <div class="page-wrapper">

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                
                <div class="header-inner">
                    <!-- Collapsed Hamburger -->
                  

                    <!-- Branding Image -->

                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('img/logo.png') }}"  alt="Logo">
                            <span>Colocation</span>
                        </a>
                    </div>

                
                <div class="header-content">
                    <div class="header-bottom">
                       

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                                                    <!-- Authentication Links -->

                        @if (Auth::guest())
                            <li><a href="{{ url('/')}}">ACCUEIL</a></li>
                            <li><a href="{{ url('/login')}}">PUBLIER</a></li>
                            <li><a href="{{ url('/offers')}}">OFFRES</a></li>
                            <li><a href="{{ url('/contact')}}">CONTACT</a></li>
                            <li><a href="{{ route('login') }}">LOGIN</a></li>
                            <li><a href="{{ route('register') }}">S'INSCRIRE</a></li></ul>
                    
                           


                        @else
                            <li><a href="{{ url('/')}}">ACCUEIL</a></li>

                            <li><a href="{{ url('/publish')}}">PUBLIER</a></li>
                            <li><a href="{{ url('/offers')}}">OFFRES</a></li>
                        <li><a href="{{ url('/contact')}}">CONTACT</a></li>
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left: 50px; text-transform: uppercase;">
                                    <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="height: 32px; width: 32px; position: absolute; border-radius: 50%; top:10px; left: 10px">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>



                                <ul class="sub-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/profile') }}">
                                            Profile
                                        </a>


                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>@endif
                        </ul> 

                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div><!-- /.header-bottom -->
                </div>
             </div>
            </div>
        </nav>

        @yield('content')
           <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Clocation</h2>

                    <p>Bienvuenue sur le premier site de colocation en Tunisie.</p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Contact Information</h2>

                    <p>
                        Tunis, Tunisie<br>
                        +216 00 000 000, <a href="#">contact@colocation.com</a>
                    </p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Retrouver nous sur:</h2>

                    <ul class="social-links nav nav-pills">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul><!-- /.header-nav-social -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-left">
                &copy; 2017 All rights reserved. Created by <a href="#">Akram</a>.
            </div><!-- /.footer-bottom-left -->

            <div class="footer-bottom-right">
                <ul class="nav nav-pills">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    
                    <li><a href="{{ url('/contact')}}">Contact</a></li>
                </ul><!-- /.nav -->
            </div><!-- /.footer-bottom-right -->
        </div><!-- /.container -->
    </div>
</footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/map.js') }}" type="text/javascript"></script>

<script src="{{ asset('libraries/bootstrap-sass/javascripts/bootstrap/collapse.js') }}" type="text/javascript"></script>
<script src="{{ asset('libraries/bootstrap-sass/javascripts/bootstrap/carousel.js') }}" type="text/javascript"></script>
<script src="{{ asset('libraries/bootstrap-sass/javascripts/bootstrap/transition.js') }}" type="text/javascript"></script>
<script src="{{ asset('libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js') }}" type="text/javascript"></script>
<script src="{{ asset('libraries/bootstrap-sass/javascripts/bootstrap/tab.js') }}" type="text/javascript"></script>
<script src="{{ asset('libraries/bootstrap-sass/javascripts/bootstrap/alert.js') }}" type="text/javascript"></script>

<script src="{{ asset('libraries/colorbox/jquery.colorbox-min.js') }}" type="text/javascript"></script>

<script src="{{ asset('libraries/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('libraries/flot/jquery.flot.spline.js') }}" type="text/javascript"></script>

<script src="{{ asset('libraries/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>


<script type="text/javascript" src="{{ asset('libraries/jquery-google-map/markerclusterer.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries/jquery-google-map/jquery-google-map.js') }}"></script>

<script type="text/javascript" src="{{ asset('/libraries/owl.carousel/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('/libraries/bootstrap-fileinput/fileinput.min.js') }}"></script>
<script src="{{ asset('js/superlist.js') }}" type="text/javascript"></script>
</body>
</html>
