<?php
session_start();
?>
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
                <?php
                if (empty($_SESSION['username'])) {
                    include './components/navbar1.php';
                } else {
                    include './components/navbar2.php';
                }
                ?>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php
                        if (empty($_SESSION['username'])) {
                            include './components/sidebar1.php';
                        } else if ($_SESSION['username'] == "Admin") {
                            include './components/sidebar2.php';
                        } else {
                            include './components/sidebar3.php';
                        }
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">

                            <div class="module">
                                <div class="module-body table">
                                    <div class="panel panel-warning" style="height: 80vh;">
                                        <div class="panel-heading" align="center">
                                            <h3 class="panel-title">Monitoring CCTV</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div id="kiri" style="width:49%; float:left; height:69vh;">
                                                <div id="kiriatas" style="width:100%; height:34vh;">
                                                    <a data-toggle="modal" data-target="#myModal">
                                                        <video width="100%" height="100%" controls>
                                                            <source src="video/video1.MP4" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </a>
                                                </div>
                                                <div id="kiribawah" style="width:100%; height:34vh; margin-top:1vh;">
                                                    <video width="100%" height="100%" controls>
                                                        <source src="video/video2.MP4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                            <div id="kanan" style="width:49%; float:right; height:69vh;">
                                                <div id="kananatas" style="width:100%; height:34vh;">
                                                    <img style="-webkit-user-select: none; width:100% ; height:100%" src="http://10.224.137.145:8080/video" alt="CCTV Has Been Disconnected">
                                                </div>
                                                <div id="kananbawah" style="width:100%; height:34vh; margin-top:1vh;">
                                                    <video width="100%" height="100%" controls>
                                                        <source src="video/video4.MP4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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