@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="/uploads/avatars/{{$user->avatar}}" style="height: 150px; width: 150px; float: left;  border-radius: 50%; margin-right: 25px;">
                <h2>{{$user->name}}'s Profile</h2>
                <form action="/profile" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-9">
                    {{ csrf_field() }}
                        <label>Update Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"><br/><br/>

                            <label>Name:</label>
                            <input type="text" class="form-control" value="{{$user->name}}"><br>
                        <label>Email:</label>
                        <input type="text" class="form-control" value="{{$user->email}}"><br>

                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </div>
                </form>

            </div>
        </div>
    </div>
@endsection
