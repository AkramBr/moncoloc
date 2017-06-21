
<!DOCTYPE html>

<html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

   <link href="{{('http://fonts.googleapis.com/css?family=Nunito:300,400,700') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('libraries/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/colorbox/example1/colorbox.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/bootstrap-fileinput/fileinput.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/superlist.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/xx-icon" href="{{ asset('img/favicon.png') }}">

    <title>Colocation de Logement en Tunisie</title>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/2/intl/fr_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/2/intl/fr_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/2/intl/fr_ALL/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttp%3A%2F%2Fpreview.byaviators.com%2Ftemplate%2Fsuperlist%2Findex-image.html&amp;callback=_xdc_._xjl9i1&amp;token=5417"></script></head>


<body class="" >
<div class="page-wrapper">
    
    <header class="header header-transparent">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
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
                            </li>
                        </ul> @endif

                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->




    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-150">
    <div class="hero-image">
    <div class="hero-image-inner" style="background-image: url('img/slider-large-3.jpg');">
        <div class="hero-image-content">
            <div class="container" align="center">
                <h1>Colocation de logement</h1>

                <p>Trouver facilemnt une Colocationationationationation <br> sur le premier premier site de colocation en Tunisie .</p>

                <a href="{{'/offers'}}" class="btn btn-primary btn-lg">Voir les offres</a>
            </div><!-- /.container -->

        </div><!-- /.hero-image-content -->

       
    </div><!-- /.hero-image-inner -->
</div><!-- /.hero-image -->

</div>

<div class="container">
    

    <div class="page-header">
    <h1>Les dernieres offres</h1>
    <p>Liste des dernieres offres<br>pubier sur le site.</p>
</div><!-- /.page-header -->

<div class="cards-simple-wrapper">
    <div class="row">
    @foreach($offers as $offer)
            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="img/tmp/product-6.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                        <h2><a href="offerdetails/{{$offer->id}}">{{$offer->Titre}}</a></h2>
                            <h2><a href="offerdetails/{{$offer->id}}">{{$offer->ville}}</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                
                                <a href="offerdetails/{{$offer->id}}" class="fa fa-search"></a>
                                
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">{{$offer->type}}</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
            @endforeach
                  
            

    </div><!-- /.row -->
</div><!-- /.cards-simple-wrapper -->
    


    <div class="block background-secondary fullwidth mt80 mb-80 pt60 pb60">

        <div class="row">
    <div class="col-sm-12">
        <div class="contact-info-wrapper">
            <h2>Avez vous des questions?</h2>

            <div class="contact-info">
                <span class="contact-info-item">
                    <i class="fa fa-at"></i>
                    <span>contact@colocation.com</span>
                </span><!-- /.contact-info-item -->

                <span class="contact-info-item">
                    <i class="fa fa-phone"></i>
                    <span>+216 00 0000 000</span>
                </span><!-- /.contact-info-item -->
            </div><!-- /.contact-info-->
        </div><!-- /.contact-info-wrapper -->
    </div><!-- /.col-* -->
</div><!-- /.row -->

    </div>


    <div class="block background-white fullwidth mt80 mb-80">
        <div class="categories">
    <ul>
        <li>
            <a href="/offers/?type=Villa" class="categories-link"><i class="fa fa-home"></i> Villa</a>
            <ul>
                <li class="all"><a href="/offers/?type=Villa">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>
        <li>
            <a href="/offers/?type=Appartement" class="categories-link"><i class="fa fa-home"></i> Appartement</a>
            <ul>
                
                <li class="all"><a href="/offers/?type=Appartement">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="/offers/?type=Studio" class="categories-link"><i class="fa fa-home"></i> Studio</a>
            <ul>
                
                <li class="all"><a href="/offers/?type=Studio">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>
    </ul>
    </div><!-- /.categories -->

    </div>

</div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

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
                    <li><a href="#">Home</a></li>
                    
                    <li><a href="{{ url('/contact')}}">Contact</a></li>
                </ul><!-- /.nav -->
            </div><!-- /.footer-bottom-right -->
        </div><!-- /.container -->
    </div>
</footer>

</div><!-- /.page-wrapper -->


<script src="{{ asset('/js/jquery.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/map.js')}}" type="text/javascript"></script>

<script src="{{ asset('/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js')}}" type="text/javascript"></script>
<script src="{{ asset('/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js')}}" type="text/javascript"></script>
<script src="{{ asset('/libraries/bootstrap-sass/javascripts/bootstrap/transition.js')}}" type="text/javascript"></script>
<script src="{{ asset('/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js')}}" type="text/javascript"></script>
<script src="{{ asset('/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js')}}" type="text/javascript"></script>
<script src="{{ asset('/libraries/bootstrap-sass/javascripts/bootstrap/tab.js')}}" type="text/javascript"></script>
<script src="{{ asset('/libraries/bootstrap-sass/javascripts/bootstrap/alert.js')}}" type="text/javascript"></script>

<script src="{{ asset('/libraries/colorbox/jquery.colorbox-min.js')}}" type="text/javascript"></script>

<script src="{{ asset('/libraries/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/libraries/flot/jquery.flot.spline.js')}}" type="text/javascript"></script>

<script src="{{ asset('/libraries/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>



<script type="text/javascript" src="{{ asset('/libraries/owl.carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{ asset('/libraries/bootstrap-fileinput/fileinput.min.js')}}"></script>

<script src="{{ asset('/js/superlist.js')}}" type="text/javascript"></script>



<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div></body></html>