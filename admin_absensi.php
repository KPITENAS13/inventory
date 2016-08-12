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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Lab IF </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="images/user.png" class="nav-avatar" />
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
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
                        <?php
                        include './components/sidebar1.php';
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>Absensi Praktikum</h3>
                                </div>
                                <div class="module-body table">
                                    <div style="width: 100%; padding-bottom: 2%;" align="center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#BerlangsungModal" style="width: 90%">
                                            <i class='menu-icon icon-pencil'></i> Upload File Absensi
                                        </button>
                                    </div>
                                    <div style="width: 60%; margin-left: 20%;">
                                        <div class="module">
                                            <div class="module-head" align="center">
                                                <h3>
                                                    Informasi Praktikum</h3>
                                            </div>
                                            <div class="module-body table">
                                                <form class="form-horizontal row-fluid">
                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">Periode</label>
                                                        <div class="controls">
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8">
                                                                <option value="">Select here..</option>
                                                                <option value="Category 1">2015/2016</option>
                                                                <option value="Category 2">2016/2017</option>
                                                                <option value="Category 3">2017/2018</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">Praktikum</label>
                                                        <div class="controls">
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8">
                                                                <option value="">Select here..</option>
                                                                <option value="Category 1">Pemrograman Dasar</option>
                                                                <option value="Category 2">Organisasi & Arsitektur Komputer</option>
                                                                <option value="Category 3">Jaringan Komputer</option>
                                                                <option value="Category 4">Pemrograman Robot Cerdas</option>
                                                                <option value="Category 5">Rekayasa Web</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">Kelas</label>
                                                        <div class="controls">
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8">
                                                                <option value="">Select here..</option>
                                                                <option value="Category 1">A</option>
                                                                <option value="Category 2">B</option>
                                                                <option value="Category 3">C</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                           width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    NRP
                                                </th>
                                                <th>
                                                    Nama
                                                </th>
                                                <th>
                                                    Presentase Kehadiran (%)
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    NRP
                                                </th>
                                                <th>
                                                    Nama
                                                </th>
                                                <th>
                                                    Presentase Kehadiran (%)
                                                </th>
                                            </tr>
                                        </tfoot>
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
