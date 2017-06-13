<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Colocation</title>

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


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">

    <!-- Latest compiled and minified JavaScript -->

    <!-- Scripts -->


</head>
<body>
  
    <div class="page-wrapper">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->

                    <div class="header-logo">
                        <a href="{{ url('/home') }}">
                            <img src="{{ asset('img/logo.png') }}"  alt="Logo">
                            <span>Colocation</span>
                        </a>
                    </div>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @if (Auth::guest())
                            <li><a href="{{ url('/login')}}">Publier</a></li>
                            <li><a href="{{ url('/offers')}}">Offres</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <div class="header-action">
                                <a href="{{ url('/login')}}" class="header-action-inner" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Publier">
                                    <i class="fa fa-plus"></i>
                                </a><!-- /.header-action-inner -->
                            </div>


                        @else

                            <li><a href="{{ url('/publish')}}">Publier</a></li>
                            <li><a href="{{ url('/offers')}}">Offres</a></li>
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                                    <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="height: 32px; width: 32px; position: absolute; border-radius: 50%; top:10px; left: 10px">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>



                                <ul class="dropdown-menu" role="menu">
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
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
           <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Superlist</h2>

                    <p>Superlist is directory template built upon Bootstrap and SASS to bring great experience in creation of directory.</p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Contact Information</h2>

                    <p>
                        Your Street 123, Melbourne, Australia<br>
                        +1-123-456-789, <a href="#">sample@example.com</a>
                    </p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Stay Connected</h2>

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
                &copy; 2015 All rights reserved. Created by <a href="#">Aviators</a>.
            </div><!-- /.footer-bottom-left -->

            <div class="footer-bottom-right">
                <ul class="nav nav-pills">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                    <li><a href="contact-1.html">Contact</a></li>
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
