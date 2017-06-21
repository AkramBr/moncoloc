@extends('layouts.app')

@section('content')

    <div class="main" >
<div class="main-inner">
            <div class="container">

        <div class="row">
            <div class="document-title">
                <h1>Publier</h1>

                <ul class="breadcrumb">
                    <li><a href="#">Colocation</a></li>
                    <li><a href="#">Publier</a></li>
                </ul>
            </div><!-- /.document-title -->

            <div class="col-md-12">

                <form action="publish" method="post">

                    <div class="form-group col-md-12">

                        {{ csrf_field() }}





                            <div class="col-sm-12 col-lg-12">
                                <div class="content">
                                    <div class="page-title">
                                        <h1>Ajouter une offre</h1>
                                    </div>

                                    <div class="background-white p30 mb30">
                                        <h3 class="page-title">Description</h3>
                                        <div class="form-group">
                                            <input name="titre" class="form-control" type="text" placeholder="Titre">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <input name="prop" class="form-control" type="text" placeholder="Nom du propriétaire">
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <textarea name="description" class="form-control" placeholder="Listing Description" rows="8"></textarea><div class="textarea-resize"></div>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.box -->

                                    <div class="background-white p30 mb30">
                                        <h3 class="page-title">Attribues</h3>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <select name="type" class="form-control">
                                                        <option> Type</option>
                                                        <option>Appartement</option>
                                                        <option>Villa</option>
                                                        <option>Studio</option>
                                                    </select>
                                                </div><!-- /.form-group -->


                                                <div class="form-group">
                                                    <select name="ville" class="form-control">
                                                        <option>Ville</option>
                                                        <option>Tunis</option>
                                                        <option>Ariana</option>
                                                        <option>Bizerte</option>
                                                        <option>Sousse</option>
                                                        <option>Monastir</option>
                                                        <option>Sidi-Bouzid</option>
                                                        <option>Gafsa</option>
                                                        <option>Mehdia</option>
                                                        <option>Sfax</option>
                                                        <option>Gabes</option>
                                                        <option>Kasserine</option>
                                                        <option>Jendouba</option>
                                                        <option>Tatouine</option>
                                                        <option> Ben Arous</option>
                                                        <option>Mannouba</option>
                                                        <option>Kairouan</option>
                                                        <option>Nabeul</option>
                                                    </select>
                                                </div><!-- /.form-group -->

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input class="form-control" type="text" name="nuit" placeholder="Prix/nuit">
                                                </div><!-- /.form-group -->
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input class="form-control" type="text" name="prix" placeholder="Prix/mois">
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-* -->


                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                                    <input class="form-control" type="text" name="adresse" placeholder="Addresse">
                                                </div><!-- /.form-group -->

                                                   <div class="form-group">
                                                    <select name="chambre" class="form-control">
                                                        <option>Nombre de Chambre</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                    </select>
                                                </div><!-- /.form-group -->

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                    <input class="form-control" type="text" placeholder="Phone" name="phone">
                                                </div><!-- /.form-group -->

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                                    <input class="form-control" type="text" placeholder="E-mail" name="mail">
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-* -->
                                        </div><!-- /.row -->
                                    </div><!-- /.box -->
<div class="background-white p30 mt30 mb30">
    
    <iframe
  width="100%"
  height="350"
  frameborder="0" style="border:0"
  src="https://google-developers.appspot.com/maps/documentation/javascript/examples/full/places-searchbox" allowfullscreen>
</iframe>

</div>

                                    <div class="background-white p30 mb30">
                                        <h3 class="page-title">Options</h3>

                                        <ul class="amenities">
                                            <li class="checkbox"><input type="checkbox" name="meuble" id="amenity-1"> <label for="amenity-1">Meuble</label></li>
                                            <li class="checkbox"><input type="checkbox" name="tv" id="amenity-2"> <label for="amenity-2">Tv</label></li>
                                            <li class="checkbox"><input type="checkbox" name="wifi" id="amenity-3"> <label for="amenity-3">Wifi</label></li>
                                            <li class="checkbox"><input type="checkbox" name="bain" id="amenity-4"> <label for="amenity-4">Salle de Bain</label></li>
                                            <li class="checkbox"><input type="checkbox" name="cuisine" id="amenity-5"> <label for="amenity-5">Cuisine</label></li>
                                            <li class="checkbox"><input type="checkbox" name="fumeur" id="amenity-6"> <label for="amenity-6">Fumeur</label></li>
                                            <li class="checkbox"><input type="checkbox" name="parking" id="amenity-7"> <label for="amenity-7">Parking</label></li>
                                            <li class="checkbox"><input type="checkbox" name="clim" id="amenity-8"> <label for="amenity-8">Climatisation</label></li>

                                        </ul>
                                    </div>

                                    <div class="center">
                                        <button type="submit" class="btn btn-primary btn-md">Publier</button>
                                    </div><!-- /.center -->

                                </div><!-- /.content -->
                            </div><!-- /.col-* -->

                        </div><!-- /.row -->





                </form>

            </div>
        </div>
</div>
</div>
    </div>
@endsection
