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
                            <form class="filter" method="post" action=" ">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="text" placeholder="Keyword" class="form-control" name="term" id="term"> 
                                        </div><!-- /.form-group -->
                                       
                                    </div><!-- /.col-* -->
                                     <div class="col-sm-2 center">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i>Checher</button>
                                    </div><!-- /.col-* -->

                                    
                                   
                                </div><!-- /.row -->

                                <hr>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="filter-actions">
                                            <b>Trier par Type :</b>
                                            <a href="/offers/?type=Studio" style="margin-left: 5px"><i class="fa fa-home"></i>Studio</a>
                                            <a href="/offers/?type=Appartement"><i class="fa fa-home"></i> Appartement</a>
                                            <a href="/offers/?type=Villa"><i class="fa fa-home"></i> Villa</a>
                                            <b> Trier par Prix :</b>
                                            <a href="/offers/?sort=desc" style="margin-left: 5px"><i class="fa fa-arrow-down"></i> Desc</a>
                                        <a href="/offers/?sort=asc" ><i class="fa fa-arrow-up"></i> Asc</a>

                                        </div><!-- /.filter-actions -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-4">
                                        <a href="/offers" class="btn btn-primary pull-right"><i class="fa fa-close"></i> Reset</a>
                                    </div><!-- /.col-* -->
                                </div><!-- /.row -->
                            </form>


                            <div class="cards-row">
                                @foreach($offers as $myoffer)
                                <div class="card-row offre {{$myoffer->type}}">
                                    <div class="card-row-inner">
                                        <div class="card-row-image" data-background-image="{{ asset('img/product-6.jpg') }}">
                                            <div class="card-row-label"><a href="offerdetails/{{$myoffer->id}}">{{$myoffer->type}}</a></div><!-- /.card-row-label -->

                                            <div class="card-row-price">{{$myoffer->prix}} / Mois</div><!-- -->

                                        </div><!-- /.card-row-image -->

                                        <div class="card-row-body">
                                            <h2 class="card-row-title"><a href="offerdetails/{{$myoffer->id}}">{{$myoffer->titre}}</a></h2>
                                            <div class="card-row-content"><p>{{$myoffer->description}}</p></div><!-- /.card-row-content -->
                                        </div><!-- /.card-row-body -->

                                        <div class="card-row-properties">
                                            <dl>

                                                <dd>Prix</dd><dt>{{$myoffer->nuit}} / Nuit</dt>



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



                            <div class="center" style="font-size:16px">

                                {{$offers->Links()}}

                            </div><!-- /.pagination -->



                        </div><!-- /.content -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div>
@endsection
