@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-12 col-md-offset-1 ">
                <img src="/uploads/avatars/{{$user->avatar}}" style="height: 150px; width: 150px; float: left;  border-radius: 50%; margin-right: 25px;">
                <h2>{{$user->name}}'s Profile</h2>
                <form action="/profile" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-9">
                    {{ csrf_field() }}
                        <label>Update Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"><br/><br/>

                           

                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </div>
                </form>

            </div>
            <div class="col-sm-8 col-lg-11 col-md-offset-1">
                        <div class="content">
                            <div class="page-title">
    <h1>Edit Profile</h1>
</div><!-- /.page-title -->


<div class="background-white p20 mb30">
<form action="/profile" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <h3 class="page-title">
        Contact Information

        <input type="submit" class="btn btn-primary btn-xs pull-right">
    </h3>

    <div class="row">
        <div class="form-group col-sm-6">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div><!-- /.form-group -->

        <div class="form-group col-sm-6">
            <label>Age</label>
            <input type="text" class="form-control" name="age" value="{{$user->age}}">
        </div><!-- /.form-group -->

        <div class="form-group col-sm-6">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
        </div><!-- /.form-group -->

        <div class="form-group col-sm-6">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
        </div><!-- /.form-group -->
    </div><!-- /.row -->
    </form>
</div>

<br>

                        </div><!-- /.content -->
                    </div>
        </div>
    </div>




@endsection
