<?php
include "../koneksi.php";
mysql_query("INSERT INTO jadwal_praktikum
(periode,semester,nama_praktikum,kelas,waktu,asisten)VALUES
('$_POST[periode]','$_POST[semester]','$_POST[nama_prak]','$_POST[kelas]','$_POST[waktu]','$_POST[asisten]')");
header('location:../admin_info_jadwal_praktikum.php');
?>