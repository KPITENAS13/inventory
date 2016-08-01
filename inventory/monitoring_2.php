<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab IF</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Lab IF </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-home"></i></a></li>
                            <li><a href="#"><i class="icon-user"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="beranda.php">Login</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="info_jadwal_lab.php"><i class="menu-icon icon-table"></i> Jadwal Penggunaan Lab </a></li>
                                <li><a href="info_jadwal_praktikum.php"><i class="menu-icon icon-list"></i> Jadwal Praktikum </a></li>
                                <li><a href="info_topik_TA.php"><i class="menu-icon icon-list-alt"></i> Topik TA </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="info_daftar_nilai.php"><i class="menu-icon icon-bar-chart"></i> Daftar Nilai Lab </a></li>
                                <li><a href=""><i class="menu-icon icon-book"></i> Absensi </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="monitoring.php"><i class="menu-icon icon-laptop"></i> Monitoring </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                        </i> Account </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-signin"></i> Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-save"></i> Register </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-phone"></i> Contact Us </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module-head" style="text-align: center">
                                <h3>
                                    Jadwal Penggunaan Lab Teknik Informatika</h3>
                            </div>
                            <div class="module">
                                <div class="module-body table">
                                    <table border="1" style="width: 100%">
                                        <tr>
                                            <td style="">
                                                <a data-toggle="modal" data-target="#myModal">
                                                    <video width="360px" height="240px" controls>
                                                        <source src="video/video1.MP4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </a>
                                            </td>
                                            <td>Laboratorium Dasar Komputer (2402)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:100%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Camera 01</h4>
                </div>
                <div class="modal-body">
                    <video width="100%" height="100%" controls>
                        <source src="vid/movie1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="modal-footer">
                    <p>Laboratorium Pemrograman Dasar</p>
                </div>
            </div>
        </div>
    </div>