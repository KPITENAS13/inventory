<?php

include "../koneksi.php";
$id = $_POST['id'];
$password = $_POST['password'];
$kode = strlen($id);

if ($kode == 4) {
    $query = "select * from dosen WHERE nid = '$id' AND sandi = '$password'";
    $hasil = mysql_query($query);
    $row = mysql_fetch_array($hasil);
    if ($row['nid'] == $id AND $row['sandi'] == $password) {
        session_start();
        $_SESSION['username'] = $row['nama'];
        $_SESSION['keterangan'] = "Dosen";
        header("location:../index.php");
    } else {
        header("location:../index.php");
    }
} else if ($kode == 9) {
    $query2 = "select * from mahasiswa WHERE id = '$id' AND pin = '$password'";
    $hasil2 = mysql_query($query2);
    $row2 = mysql_fetch_array($hasil2);
    if ($row2['id'] == $id AND $row2['pin'] == $password) {
        session_start();
        $_SESSION['username'] = $row2['nama'];
        $_SESSION['keterangan'] = "Mahasiswa";
        header("location:../index.php");
    }  else {
        echo "<script>window.history.back(-1);"
            . "alert('Maaf ID atau Kata sandi salah !');"
            . "</script>";
    }
} else {
    session_start();
    $_SESSION['username'] = "Admin";
    $_SESSION['keterangan'] = "Admin";
    header("location:../index.php");
}

?>