@extends('layouts.app')

@section('content')
  <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    
    <div class="document-title">
        <h1>Contact</h1>

        <ul class="breadcrumb">
            <li><a href="#">Colocation</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div><!-- /.document-title -->



                    <div class="row">
    <div class="col-sm-4">
        <h3>Addresss</h3>

        <p>
            Rue 7301, El Menzah 9,<br>
            Tunis, Tunisie
        </p>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
        <h3>Contacts</h3>

        <p>
            +216 00 000 000<br>
            Contact@colocation.com
        </p>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
        <h3>Social Profiles</h3>

        <ul class="social-links nav nav-pills">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
    </div><!-- /.col-sm-4 -->
</div><!-- /.row -->

<div class="background-white p30 mt30 mb30">
    
    <iframe
  width="100%"
  height="350"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAr_S8VFq96I-q4jqwzF2ysvPXG8dd70vI
    &q=Methys+Carthage" allowfullscreen>
</iframe>

</div>

<h3>Envoyer un message si vous besoin d'aide!</h3>

<div class="contact-form-wrapper clearfix background-white p30">
    <form class="contact-form" method="post" action="{{ url('/offers')}}">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="contact-form-name">Nom</label>
                    <input type="text" name="name" id="contact-form-name" class="form-control">
                </div><!-- /.form-group -->
            </div><!-- /.col-* -->

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="contact-form-subject">Objet</label>
                    <input type="text" name="subject" id="contact-form-subject" class="form-control">
                </div><!-- /.form-group -->
            </div><!-- /.col-* -->

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="contact-form-email">E-mail</label>
                    <input type="text" name="email" id="contact-form-email" class="form-control">
                </div><!-- /.form-group -->
            </div><!-- /.col-* -->
        </div><!-- /.row -->

        <div class="form-group">
            <label for="contact-form-message">Message</label>
            <textarea class="form-control" id="contact-form-message" rows="6"></textarea><div class="textarea-resize"></div>
        </div><!-- /.form-group -->

        <button class="btn btn-primary pull-right">Envoyer</button>
    </form><!-- /.contact-form -->
</div><!-- /.contact-form-wrapper -->

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div>
@endsection
