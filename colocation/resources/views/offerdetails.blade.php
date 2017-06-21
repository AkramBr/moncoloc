@extends('layouts.app')
<script src="{{URL::asset('asset/js/bootstrap.min.js')}}"></script>

@section('content')

    <br>    <div class="container">
        <div class="row detail-content">
            <div class="col-sm-7">
                <div class="detail-gallery">
                    <div class="detail-gallery-preview">
                        <a href="{{ asset('img/tmp/gallery-1.jpg')}}">
                            <img src="{{ asset('img/tmp/gallery-1.jpg')}}">
                        </a>
                    </div>

                    <ul class="detail-gallery-index">
                        <li class="detail-gallery-list-item active">
                            <a data-target="{{ asset('img/tmp/gallery-1.jpg')}}">
                                <img src="{{ asset('img/tmp/gallery-1.jpg')}}" alt="...">
                            </a>
                        </li>
                        <li class="detail-gallery-list-item active">
                            <a data-target="{{ asset('img/tmp/gallery-2.jpg')}}">
                                <img src="{{ asset('img/tmp/gallery-2.jpg')}}" alt="...">
                            </a>
                        </li>
                        <li class="detail-gallery-list-item active">
                            <a data-target="{{ asset('img/tmp/gallery-3.jpg')}}">
                                <img src="{{ asset('img/tmp/gallery-3.jpg')}}" alt="...">
                            </a>
                        </li>
                        <li class="detail-gallery-list-item active">
                            <a data-target="{{ asset('img/tmp/gallery-4.jpg')}}">
                                <img src="{{ asset('img/tmp/gallery-4.jpg')}}" alt="...">
                            </a>
                        </li>
                        <li class="detail-gallery-list-item active">
                            <a data-target="{{ asset('img/tmp/gallery-5.jpg')}}">
                                <img src="{{ asset('img/tmp/gallery-5.jpg')}}" alt="...">
                            </a>
                        </li>
                        <li class="detail-gallery-list-item active">
                            <a data-target="{{ asset('img/tmp/gallery-6.jpg')}}">
                                <img src="{{ asset('img/tmp/gallery-6.jpg')}}" alt="...">
                            </a>
                        </li>
                        <li class="detail-gallery-list-item active">
                            <a data-target="{{ asset('img/tmp/gallery-7.jpg')}}">
                                <img src="{{ asset('img/tmp/gallery-7.jpg')}}" alt="...">
                            </a>
                        </li>
                        <li class="detail-gallery-list-item active">
                            <a data-target="{{ asset('img/tmp/gallery-8.jpg')}}">
                                <img src="{{ asset('img/tmp/gallery-8.jpg')}}'" alt="...">
                            </a>
                        </li>
                    </ul>
                </div><!-- /.detail-gallery -->

                <h2>Nous Sommes Içi</h2>
                <div class="background-white p20">

                    <!-- Nav tabs -->
                    <ul id="listing-detail-location" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#simple-map-panel" aria-controls="simple-map-panel" role="tab" data-toggle="tab">
                                <i class="fa fa-map"></i>Map
                            </a>
                        </li>
                        
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="simple-map-panel">
                            <div class="detail-map">
                                <div class="map-position">
                                  <iframe
  width="100%"
  height="350"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAr_S8VFq96I-q4jqwzF2ysvPXG8dd70vI
    &q={{$offers->ville}},Tunisie" allowfullscreen>
</iframe><!-- /#map-property -->
                                </div><!-- /.map-property -->
                            </div><!-- /.detail-map -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="street-view-panel">
                            <div id="listing-detail-street-view"
                                 data-latitude="40.758896"
                                 data-longitude="-73.985135"
                                 data-heading="225"
                                 data-pitch="0"
                                 data-zoom="1">
                            </div>
                        </div>
                    </div>
                </div>

              <!--  <h2>Video</h2>
                <div class="detail-video">
                    <iframe src="https://player.vimeo.com/video/36911719?color=009f8b&amp;byline=0&amp;portrait=0" width="653" height="366" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div> /.detail-video -->

           

            </div><!-- /.col-sm-7 -->
            <h3>Propriétaire: <span class="text-secondary">{{$offers->prop}}</span></h3>
            <div class="col-sm-5">

                <div class="background-white p20">
                    <div class="detail-overview-hearts">
                        <i class="fa fa-calendar"></i> <strong>Publier le: </strong>{{$offers->created_at}}
                    </div>
                    <div class="detail-overview-rating">
                        <i class="fa fa-dollar"></i> <strong>Prix: </strong>{{$offers->prix}}/mois
                    </div>
                    <div class="detail-overview-rating">
                        <i class="fa fa-dollar"></i> <strong>Prix: </strong>{{$offers->nuit}}/nuit
                    </div>
                    

                    <div class="detail-actions row">
                        
                        <div class="col-sm-4">
                            <div class="btn btn-secondary btn-share"><i class="fa fa-share-square-o"></i> Share
                                <div class="share-wrapper">
                                    <ul class="share">
                                        <li><i class="fa fa-facebook"></i> Facebook</li>
                                        <li><i class="fa fa-twitter"></i> Twitter</li>
                                        <li><i class="fa fa-google-plus"></i> Google+</li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.col-sm-4 -->
                      
                    </div><!-- /.detail-actions -->
                </div>

                <h3>L'offre <span class="text-secondary">{{$offers->titre}}</span></h3>
                <div class="background-white p20">
                    <div class="detail-vcard">
                        

                        <div class="detail-contact">
                            <div class="detail-contact-email">
                                <i class="fa fa-envelope-o"></i> <a href="mailto:#">{{$offers->mail}}</a>
                            </div>
                            <div class="detail-contact-phone">
                                <i class="fa fa-mobile-phone"></i> <a href="tel:#">{{$offers->phone}}</a>
                            </div>
                            
                            <div class="detail-contact-address">
                                <i class="fa fa-map-o"></i>
                                {{$offers->adresse}}<br>
                                {{$offers->ville}},Tunisie
                            </div>
                        </div><!-- /.detail-contact -->
                    </div><!-- /.detail-vcard -->

                    <div class="detail-description">
                        <p>{{$offers->description}}.</p>
                       
                    </div>

                    <div class="detail-follow">
                        <h5>Follow Us:</h5>
                        <div class="follow-wrapper">
                            <a class="follow-btn facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="follow-btn youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a class="follow-btn twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="follow-btn tripadvisor" href="#"><i class="fa fa-tripadvisor"></i></a>
                            <a class="follow-btn google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div><!-- /.follow-wrapper -->
                    </div><!-- /.detail-follow -->
                </div>

              


                <h2>Options</h2>

                <div class="background-white p20">
                    <ul class="detail-amenities">
                        <li class="yes">WiFi</li>
                        <li class="no">Parking</li>
                        <li class="yes">Tv</li>
                        <li class="yes">Cuisine</li>
                        <li class="yes">Bain</li>
                        <li class="no">Cimatisiation</li>
                        <li class="yes">Meuble</li>
                        <li class="no">Fumeur</li>
                       
                    </ul>
                </div><!-- /.detail-amenities -->

              


               
            </div><!-- /.col-sm-5 -->

            
        </div><!-- /.row -->

    </div>
<br>
@endsection
