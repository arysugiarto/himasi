<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-book"></i> <span>Buku Tamu</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">

                        <h2>Login</h2>
                    </div>
                </div>

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Menu</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                            </li>
                            <li><a href="data.php"><i class="fa fa-table"></i> Data Buku <span class="fa fa-chevron-down"></span></a></li>
                            <li><a><i class="fa fa-user"></i> Profile<span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a><i class="glyphicon glyphicon-earphone"></i> Contact <span class="fa fa-chevron-down"></span></a>

                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                    </div>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                </li>
                            </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row tile_count">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

                </div>
            </div>
            <!-- /top tiles -->

                    <!-- jQuery -->
                    <script src="../vendors/jquery/dist/jquery.min.js"></script>
                    <!-- Bootstrap -->
                    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                    <!-- FastClick -->
                    <script src="../vendors/fastclick/lib/fastclick.js"></script>
                    <!-- NProgress -->
                    <script src="../vendors/nprogress/nprogress.js"></script>
                    <!-- Chart.js -->
                    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
                    <!-- gauge.js -->
                    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
                    <!-- bootstrap-progressbar -->
                    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
                    <!-- iCheck -->
                    <script src="../vendors/iCheck/icheck.min.js"></script>
                    <!-- Skycons -->
                    <script src="../vendors/skycons/skycons.js"></script>
                    <!-- Flot -->
                    <script src="../vendors/Flot/jquery.flot.js"></script>
                    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
                    <script src="../vendors/Flot/jquery.flot.time.js"></script>
                    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
                    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
                    <!-- Flot plugins -->
                    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
                    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
                    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
                    <!-- DateJS -->
                    <script src="../vendors/DateJS/build/date.js"></script>
                    <!-- JQVMap -->
                    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
                    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
                    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
                    <!-- bootstrap-daterangepicker -->
                    <script src="../vendors/moment/min/moment.min.js"></script>
                    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

                    <!-- Custom Theme Scripts -->
                    <script src="../build/js/custom.min.js"></script>

</body>
</html>

