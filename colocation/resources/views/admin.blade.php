@extends('layouts.app')

@section('content')
    <div class="page-wrapper">

      




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
                         <li class="active">
                                <a href="{{ url('/admin')}}">
                                    <span class="icon"><i class="fa fa-tachometer"></i></span>
                                    <span class="title">Dashboard</span>
                                    <span class="subtitle">Gérer Votre site</span>
                                </a>
                            </li>

                            <li>
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
                                                    <h1>Bienvenue Admin</h1>
                                                </div><!-- /.page-title -->

                                                <div class="row">
        <div class="col-sm-12 col-lg-6">

            <div class="row">
                <div class="col-sm-6">
                    <div class="statusbox">
                        <h2>Total Users</h2>
                        <div class="statusbox-content">
                            <strong>{{$users->total()}}</strong>
                            <span>Updated 27/04/2015</span>
                        </div><!-- /.statusbox-content -->

                        <div class="statusbox-actions">
                            <a href="{{ url('/manage-users')}}"><i class="fa fa-eye"></i></a>
                          
                        </div><!-- /.statusbox-actions -->
                    </div><!-- /.statusbox -->
                </div>

                <div class="col-sm-6">
                    <div class="statusbox">
                        <h2>Total offers</h2>
                        <div class="statusbox-content">
                            <strong>{{$offers->total()}}</strong>
                            <span>Updated 27/04/2015</span>
                        </div><!-- /.statusbox-content -->

                        <div class="statusbox-actions">
                            <a href="{{ url('/manage-offers')}}"><i class="fa fa-eye"></i></a>
                           
                        </div><!-- /.statusbox-actions -->
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.col-* -->

      
    </div>

                                                

                                                
                                                <div class="row">
        <div class="col-sm-12 col-lg-6">
            <h3>Derniers Utilisateurs <a href="{{ url('/manage-users')}}">Voir tout les utlisateurs <i class="fa fa-chevron-right"></i></a></h3>

            <div class="users">
    <table class="table">
        <tbody>
            @foreach($users as $user)

            <tr>
                <td><a class="user" href="#"><img src="/uploads/avatars/{{$user->avatar}}" alt=""></a></td>
                <td class="hidden-xs visible-sm visible-md visible-lg">
                    <h2><a href="#">{{ $user->name}}</a></h2>
                    <h3>Membre Depuis: {{ $user->created_at}}</h3>
                </td>
                <td class="right">
                    <a href="#" class="btn btn-xs btn-primary">Edit</a>
                    <a href="#" class="btn btn-xs btn-danger">Remove</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div><!-- /.users -->

        </div><!-- /.col-* -->

        <div class="col-sm-12 col-lg-6">
            <h3>Derniers offres <a href="{{ url('/manage-offers')}}">Voir tout les offres <i class="fa fa-chevron-right"></i></a></h3>

            <div class="background-white p30 mb50">
    <div class="cards-system">
        

        
            @foreach($offers as $myoffer)
            <div class="card-system">
                <div class="card-system-inner">
                    <div class="card-system-image" data-background-image="{{ asset('img/product-6.jpg') }}" style="background-image: url(&quot;{{ asset('img/product-6.jpg') }});">
                        <a href="listing-detail.html"></a>
                    </div><!-- /.card-system-image -->

                    <div class="card-system-content">
                        <h2><a href="">{{$myoffer->titre}}</a></h2>
                        <h3>{{$myoffer->ville}}</h3>
                        <h3>Créer le: {{$myoffer->created_at}}</h3>
                        <a href="#" class="btn btn-primary btn-xs">Edit</a>
                        <a href="#" class="btn btn-secondary btn-xs">Ban</a>
                    </div>
                </div>
            </div><!-- /.card-system -->
         @endforeach
            
           
        
    </div><!-- /.cards-system -->
</div>

        </div><!-- /.col-* -->
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
    </div>@endsection
