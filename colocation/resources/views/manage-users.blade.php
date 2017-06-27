@extends('layouts.app')

@section('content')

      
        <div class="main">
            <div class="outer-admin">
                <div class="wrapper-admin">
                    <div class="sidebar-admin">
                        <ul>
                            <li class="active"><a href="#"><i class="fa fa-cog"></i></a></li>
                            
                        </ul>
                    </div><!-- /.sidebar-admin-->

                    <div class="sidebar-secondary-admin">
                        <ul>
                         <li >
                                <a href="{{ url('/admin')}}">
                                    <span class="icon"><i class="fa fa-tachometer"></i></span>
                                    <span class="title">Dashboard</span>
                                    <span class="subtitle">Gérer Votre site</span>
                                </a>
                            </li>

                            <li  class="active">
                                <a href="{{ url('/manage-users')}}">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="title">Utilisateur </span>
                                    <span class="subtitle">Gérer les utilisateurs</span>
                                </a>
                            </li>

                            <li >
                                <a href="{{ url('/manage-offers')}}">
                                    <span class="icon"><i class="fa fa-table"></i></span>
                                    <span class="title">Offres</span>
                                    <span class="subtitle">Gérer les offres</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="icon"><i class="fa fa-sign-out"></i></span>
                                    <span class="title">Logout </span>
                                    <span class="subtitle">Sortir de la seesion</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <span class="icon"><i class="fa fa-bell"></i></span>
                                    <span class="title">Notifications</span>
                                    <span class="subtitle">Alert messages</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </li>
                        </ul>
                    </div><!-- /.sidebar-secondary-admin -->

                    <div class="content-admin">
                        <div class="content-admin-wrapper">
                            <div class="content-admin-main">
                                <div class="content-admin-main-inner">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="page-title">
                                                    <h1>Gestion d'utilisateur</h1>
                                                </div><!-- /.page-title -->

                                                

                                                

                                                <div class="background-white p20 mb50">
                                                    <h2 class="page-title">Tous les utilisateurss</h2>

                                                    <table class="table table-hover mb0">
                                                        <caption></caption>
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                         @foreach($users as $myuser)

                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>{{$myuser->id}}</td>
                                                            <td>{{$myuser->name}}</td>
                                                            <td>{{$myuser->email}}</td>
                                                             <td class="right">
                                                                <a href="#" class="btn btn-xs btn-primary">Edit</a>
                                                                <a href="deleteuser/{{$myuser->id}}" class="btn btn-xs btn-danger">Remove</a>
                                                            </td>
                                                        </tr>

                                                    @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="center" style="font-size:16px">

                                                        {{$users->Links()}}

                                                    </div>
                                                    
                                                </div>

                                               
                                            </div>

                                        </div>
                                    </div><!-- /.container-fluid -->
                                </div><!-- /.content-admin-main-inner -->
                            </div><!-- /.content-admin-main -->

                            <div class="content-admin-footer">
                                <div class="container-fluid">
                                    <div class="content-admin-footer-inner">
                                        © 2017 All rights reserved. Created by <a href="#">Akram</a>.
                                    </div><!-- /.content-admin-footer-inner -->
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-footer  -->
                        </div><!-- /.content-admin-wrapper -->
                    </div><!-- /.content-admin -->
                </div><!-- /.wrapper-admin -->
            </div><!-- /.outer-admin -->
        </div><!-- /.main -->
@endsection
