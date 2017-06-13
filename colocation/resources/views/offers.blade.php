@extends('layouts.app')

@section('content')

    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">

                    <div class="document-title">
                        <h1>Les Offres</h1>

                        <ul class="breadcrumb">
                            <li><a href="#">Colocation</a></li>
                            <li><a href="#">Offres</a></li>
                        </ul>
                    </div><!-- /.document-title -->



                    <div class="col-sm-8 col-lg-12">
                        <div class="content">
                            <form class="filter" method="post" >
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <input type="text" placeholder="Keyword" class="form-control">
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" title="Type">
                                                <option class="type" id="all">Tout</option>
                                                <option class="type" id="Studio">Studio</option>
                                                <option class="type" id="Appartement">Appartement</option>
                                                <option class="type" id="Villa">Villa</option>

                                            </select>


                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" title="Ville">
                                                <option class="ville" id="Tunis">Tunis</option>
                                                <option class="ville" id="Ariana">Ariana</option>
                                                <option class="ville" id="Bizerte">Bizerte</option>
                                                <option class="ville" id="Sousse">Sousse</option>
                                                <option class="ville" id="Monastir">Monastir</option>
                                                <option class="ville" id="Sidi-Bouzid">Sidi-Bouzid</option>
                                                <option class="ville" id="Gafsa">Gafsa</option>
                                                <option class="ville" id="Mehdia">Mehdia</option>
                                                <option class="ville" id="Sfax">Sfax</option>
                                                <option class="ville" id="Gabes">Gabes</option>
                                                <option class="ville" id="Kasserine">Kasserine</option>
                                                <option class="ville" id="Jendouba">Jendouba</option>
                                                <option class="ville" id="Tatouine">Tatouine</option>
                                                <option class="ville" id="Ben-Arous"> Ben-Arous</option>
                                                <option class="ville" id="Mannouba">Mannouba</option>
                                                <option class="ville" id="Kairouan">Kairouan</option>
                                                <option class="ville" id="Nabeul">Nabeul</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->
                                </div><!-- /.row -->

                                <hr>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="filter-actions">
                                            <a href="/?type=Studio"><i class="fa fa-save"></i> Studio</a>
                                            <a href="/?type=Appartement"><i class="fa fa-save"></i> Appartement</a>
                                            <a href="/?type=Villa"><i class="fa fa-save"></i> Villa</a>
                                            <a href="/offers"><i class="fa fa-close"></i> Reset Filter</a>

                                        </div><!-- /.filter-actions -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary">Redefine Search Result</button>
                                    </div><!-- /.col-* -->
                                </div><!-- /.row -->
                            </form>


                            <div class="cards-row">
                                @foreach($offers as $myoffer)
                                <div class="card-row offre {{$myoffer->type}}">
                                    <div class="card-row-inner">
                                        <div class="card-row-image" data-background-image="{{ asset('img/product-6.jpg') }}">
                                            <div class="card-row-label"><a href="listing-detail.html">{{$myoffer->type}}</a></div><!-- /.card-row-label -->

                                            <div class="card-row-price">{{$myoffer->prix}} / night</div><!-- -->

                                        </div><!-- /.card-row-image -->

                                        <div class="card-row-body">
                                            <h2 class="card-row-title"><a href="offerdetails/{{$myoffer->id}}">{{$myoffer->adresse}}</a></h2>
                                            <div class="card-row-content"><p>{{$myoffer->description}}</p></div><!-- /.card-row-content -->
                                        </div><!-- /.card-row-body -->

                                        <div class="card-row-properties">
                                            <dl>

                                                <dd>Prix</dd><dt>{{$myoffer->prix}} / Nuit</dt>



                                                <dd>Type</dd><dt>{{$myoffer->type}}</dt>



                                                <dd>Adresse</dd><dt>{{$myoffer->adresse}}</dt>


                                                <dd>Rating</dd>
                                                <dt>
                                                <div class="card-row-rating">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div><!-- /.card-row-rating -->
                                                </dt>
                                            </dl>
                                        </div><!-- /.card-row-properties -->
                                    </div><!-- /.card-row-inner -->
                                </div><!-- /.card-row -->
                                @endforeach


                            </div><!-- /.cards-row -->



                            <div class="pager">
                                {{$offers->Links()}}

                            </div><!-- /.pagination -->


                        </div><!-- /.content -->
                    </div><!-- /.col-* -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div>
@endsection
