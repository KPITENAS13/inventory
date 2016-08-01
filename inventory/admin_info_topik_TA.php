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
                        <?php
                        include './components/sidebar1.php';
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head" style="text-align: center">
                                    <h2>
                                        Topik TA (Tugas Akhir)</h2>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Topik TA yang Sedang Berlangsung</h3>
                                </div>
                                <div class="module-body table">
                                    <div style="width: 100%; padding-bottom: 2%;" align="center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#DisarankanModal" style="width: 90%">
                                            <i class='menu-icon icon-pencil'></i> Tambah Topik TA
                                        </button>
                                    </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                           width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Peserta
                                                </th>
                                                <th>
                                                    Pembimbing 1
                                                </th>
                                                <th>
                                                    Pembimbing 2
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './components/admin_tabel_topik_TA_berlangsung.php';
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Peserta
                                                </th>
                                                <th>
                                                    Pembimbing 1
                                                </th>
                                                <th>
                                                    Pembimbing 2
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Topik TA yang Disarankan</h3>
                                </div>
                                <div class="module-body table">
                                    <div style="width: 100%; padding-bottom: 2%;" align="center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#DisarankanModal" style="width: 90%">
                                            <i class='menu-icon icon-pencil'></i> Tambah Topik TA
                                        </button>
                                    </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                           width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Peserta
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './components/admin_tabel_topik_TA_disarankan.php';
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Peserta
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
</html>

<!-- Modal -->
<div class="modal fade" id="BerlangsungModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Informasi Topik Tugas Akhir</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/insert_topik_ta_berlangsung.php" onsubmit="infoSimpan()">
                    <table style="width: 80%; margin-left: 10%">
                        <tr align="center">
                            <td><input name="judul" type="text" placeholder="Judul" style="width: 80%;"></td>
                        </tr>
                        <tr align="center">
                            <td><input name="peserta" type="text" placeholder="Peserta" style="width: 80%;"></td>
                        </tr>
                        <tr align="center">
                            <td><input name="pembimbing1" type="text" placeholder="Pembimbing 1" style="width: 80%;"></td>
                        </tr>
                        <tr align="center">
                            <td><input name="pembimbing2" type="text" placeholder="Pembimbing 2" style="width: 80%;"></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="DisarankanModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Informasi Topik Tugas Akhir</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/insert_topik_ta_disarankan.php" onsubmit="infoSimpan()">
                    <table style="width: 80%; margin-left: 10%">
                        <tr align="center">
                            <td><input name="judul" type="text" placeholder="Judul Tugas Akhir" style="width: 80%;"></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="PesertaModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Informasi Peserta Tugas Akhir</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/update_topik_ta_peserta_disarankan.php" onsubmit="infoSimpan()">
                    <table style="width: 80%; margin-left: 10%">
                        <tr align="center">
                            <td><input name="peserta" type="text" placeholder="Nama Peserta Topik Tugas Akhir" style="width: 80%;"></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>