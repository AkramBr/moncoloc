@extends('layouts.app')

@section('content')
    <div class="page-wrapper">

        <header class="header header-minimal">
            <div class="header-wrapper">
                <div class="container-fluid">
                    <div class="header-inner">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="Logo">
                            </a>
                        </div><!-- /.header-logo -->

                        <div class="header-content">
                            <div class="header-bottom">
                                <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                                    <li>
                                        <a href="#">Home <i class="fa fa-chevron-down"></i></a>

                                        <ul class="sub-menu">
                                            <li><a href="index-video.html">Video v1</a></li>
                                            <li><a href="index-video-transparent-header.html">Video v2</a></li>
                                            <li><a href="index-google-map.html">Google Map V1</a></li>
                                            <li><a href="index-google-map-transparent-header.html">Google Map v2</a></li>
                                            <li><a href="index-image.html">Image v1</a></li>
                                            <li><a href="index.html">Image v2</a></li>
                                            <li><a href="index-bootstrap-slider.html">Boxed Slider</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Listing <i class="fa fa-chevron-down"></i></a>

                                        <ul class="sub-menu">
                                            <li><a href="listing-detail.html">Detail</a></li>
                                            <li><a href="listing-map.html">Row + Map</a></li>
                                            <li><a href="listing-grid.html">Grid</a></li>
                                            <li><a href="listing-grid-sidebar.html">Grid Sidebar</a></li>
                                            <li><a href="listing-row.html">Row</a></li>
                                            <li><a href="listing-row-sidebar.html">Row Sidebar</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-mega-menu ">
                                        <a href="#">Pages <i class="fa fa-chevron-down"></i></a>

                                        <ul class="mega-menu">
                                            <li>
                                                <a href="#">General</a>

                                                <ul>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="invoice.html">Invoice</a></li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="grid.html">Grid System</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#">User Account</a>

                                                <ul>
                                                    <li><a href="user-profile-edit.html">Profile Edit</a></li>
                                                    <li><a href="login.html">Login Form</a></li>
                                                    <li><a href="register.html">Register Form</a></li>
                                                    <li><a href="change-password.html">Change Password Form</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#">Miscellaneous</a>

                                                <ul>
                                                    <li><a href="sticky-footer.html">Sticky Footer</a></li>
                                                    <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                                                    <li><a href="error-403.html">403 - Forbidden</a></li>
                                                    <li><a href="error-404.html">404 - Not Found</a></li>
                                                    <li><a href="error-500.html">500 - Internal Error</a></li>
                                                </ul>
                                            </li>

                                            <li class="hidden-xs">
                                                <div class="special">
                                                    <a href="register.html">Sign Up Now</a>
                                                </div><!-- /.special-->
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Blog <i class="fa fa-chevron-down"></i></a>

                                        <ul class="sub-menu">
                                            <li><a href="blog-standard-right-sidebar.html">Standard Right Sidebar</a></li>
                                            <li><a href="blog-standard-left-sidebar.html">Standard Left Sidebar</a></li>
                                            <li><a href="blog-boxed.html">Boxed Style</a></li>
                                            <li><a href="blog-condensed.html">Condensed Style</a></li>
                                            <li><a href="blog-detail.html">Detail Fullwidth</a></li>
                                            <li><a href="blog-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                            <li><a href="blog-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                        </ul>
                                    </li>

                                    <li class="active">
                                        <a href="#">Admin <i class="fa fa-chevron-down"></i></a>

                                        <ul class="sub-menu">
                                            <li><a href="admin-dashboard.html">Dashboard</a></li>
                                            <li><a href="admin-grid.html">Grid System</a></li>
                                            <li><a href="admin-tables.html">Tables</a></li>
                                            <li><a href="admin-forms.html">Forms</a></li>
                                            <li><a href="admin-notifications.html">Notifications</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Contact <i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="contact-1.html">Contact v1</a></li>
                                            <li><a href="contact-2.html">Contact v2</a></li>
                                            <li><a href="contact-3.html">Contact v3</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>


                                <div class="header-nav-user">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <div class="user-image">
                                                <img src="assets/img/tmp/agent-2.jpg">
                                                <div class="notification"></div><!-- /.notification-->
                                            </div><!-- /.user-image -->

                                            <span class="header-nav-user-name">Natasha Samson</span> <i class="fa fa-chevron-down"></i>
                                        </button>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="user-profile-edit.html">Edit Profile</a></li>
                                            <li><a href="listing-submit.html">Submit Listing</a></li>
                                            <li><a href="change-password.html">Change Password</a></li>
                                        </ul>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.header-nav-user -->

                            </div><!-- /.header-bottom -->
                        </div><!-- /.header-content -->
                    </div><!-- /.header-inner -->
                </div><!-- /.container -->
            </div><!-- /.header-wrapper -->

            <div class="header-statusbar">
                <div class="header-statusbar-inner">
                    <div class="header-statusbar-left">
                        <h1>Dashboard</h1>

                        <div class="display-inline-block">
                            <div class="hidden-xs visible-lg">
                                <div class="header-statusbar-search">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                </div><!-- /.header-search -->
                            </div>
                        </div>
                    </div><!-- /.header-statusbar-left -->

                    <div class="header-statusbar-right">
                        <div class="hidden-xs visible-lg">
                            Navigation:
                            <ul class="breadcrumb">
                                <li><a href="#">Superlist</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Statistics</a></li>
                            </ul>
                        </div>
                    </div><!-- /.header-statusbar-right -->
                </div><!-- /.header-statusbar-inner -->
            </div><!-- /.header-statusbar -->
        </header><!-- /.header -->




        <div class="main">
            <div class="outer-admin">
                <div class="wrapper-admin">
                    <div class="sidebar-admin">
                        <ul>
                            <li class="active"><a href="#"><i class="fa fa-file"></i></a></li>
                            <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                            <li><a href="#"><i class="fa fa-flag-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-folder-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-bar-chart"></i></a></li>
                            <li><a href="#"><i class="fa fa-cog"></i></a></li>
                        </ul>
                    </div><!-- /.sidebar-admin-->

                    <div class="sidebar-secondary-admin">
                        <ul>
                            <li>
                                <a href="admin-dashboard.html">
                                    <span class="icon"><i class="fa fa-tachometer"></i></span>
                                    <span class="title">Dashboard</span>
                                    <span class="subtitle">Manage your website</span>
                                </a>
                            </li>

                            <li>
                                <a href="admin-forms.html">
                                    <span class="icon"><i class="fa fa-i-cursor"></i></span>
                                    <span class="title">Forms <span class="notification">3</span> </span>
                                    <span class="subtitle">View form styles</span>
                                </a>
                            </li>

                            <li class="active">
                                <a href="admin-tables.html">
                                    <span class="icon"><i class="fa fa-table"></i></span>
                                    <span class="title">Tables</span>
                                    <span class="subtitle">Default table style</span>
                                </a>
                            </li>

                            <li>
                                <a href="admin-grid.html">
                                    <span class="icon"><i class="fa fa-th"></i></span>
                                    <span class="title">Grid <span class="notification">2</span></span>
                                    <span class="subtitle">Bootstrap Grid</span>
                                </a>
                            </li>

                            <li>
                                <a href="admin-notifications.html">
                                    <span class="icon"><i class="fa fa-bell"></i></span>
                                    <span class="title">Notifications</span>
                                    <span class="subtitle">Alert messages</span>
                                </a>
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
                                                    <h1>Tables</h1>
                                                </div><!-- /.page-title -->

                                                <div class="background-white p20 mb50">
                                                    <h2 class="page-title">Basic Example</h2>

                                                    <table class="table mb0">
                                                        <caption>Optional table caption.</caption>
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="background-white p20 mb50">
                                                    <h2 class="page-title">Striped rows</h2>

                                                    <table class="table table-striped mb0">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="background-white p20 mb50">
                                                    <h2 class="page-title">Hovered Example</h2>

                                                    <table class="table table-hover mb0">
                                                        <caption>Optional table caption.</caption>
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="background-white p20">
                                                    <h2 class="page-title">Bordered table</h2>

                                                    <table class="table table-bordered mb0">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.container-fluid -->
                                </div><!-- /.content-admin-main-inner -->
                            </div><!-- /.content-admin-main -->

                            <div class="content-admin-footer">
                                <div class="container-fluid">
                                    <div class="content-admin-footer-inner">
                                        © 2015 All rights reserved. Created by <a href="#">Aviators</a>.
                                    </div><!-- /.content-admin-footer-inner -->
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-footer  -->
                        </div><!-- /.content-admin-wrapper -->
                    </div><!-- /.content-admin -->
                </div><!-- /.wrapper-admin -->
            </div><!-- /.outer-admin -->
        </div><!-- /.main -->
    </div>@endsection