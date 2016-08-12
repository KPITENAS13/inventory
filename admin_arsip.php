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
                                <div class="module-head">
                                    <h3>Arsip Dokumen Laboratorium</h3>
                                </div>
                                <div class="module-body table">
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                           width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Tanggal Upload
                                                </th>
                                                <th>
                                                    Kategori
                                                </th>
                                                <th>
                                                    Download
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
                                                    Judul
                                                </th>
                                                <th>
                                                    Tanggal Upload
                                                </th>
                                                <th>
                                                    Kategori
                                                </th>
                                                <th>
                                                    Download
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div style="width: 100%; padding-top: 2%;" align="center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#UploadModal" style="width: 90%">
                                            <i class='menu-icon icon-pencil'></i> Tambah File Dokumentasi
                                        </button>
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
</html>

<!-- Modal -->
<div class="modal fade" id="UploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Informasi Praktikum</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/upload.php" enctype="multipart/form-data">
                    <table style="width: 80%; margin-left: 10%">
                        <tr align="center">
                            <td><input class="form-inline" name="file" type="file" placeholder="File" style="width: 80%;"></td>
                        </tr>
                        <tr align="center">
                            <td><input name="semester" type="text" placeholder="Semester" style="width: 80%;"></td>
                        </tr>
                        <tr align="center">
                            <td><input name="nama_prak" type="text" placeholder="Nama Praktikum" style="width: 80%;"></td>
                        </tr>
                        <tr align="center">
                            <td><input name="kelas" type="text" placeholder="Kelas" style="width: 80%;"></td>
                        </tr>
                        <tr align="center">
                            <td><input name="waktu" type="text" placeholder="Waktu" style="width: 80%;"></td>
                        </tr>
                        <tr align="center">
                            <td><input name="asisten" type="text" placeholder="Koordinator" style="width: 80%;"></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>