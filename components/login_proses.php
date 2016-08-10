<?php
include "../koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from mahasiswa WHERE id = '$username' AND pin = '$password'";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);

if ($username == "admin" and $password == "admin") {
    session_start();
    $_SESSION['username'] = "Admin";
    header("location:../index.php");
} else {
    if ($row['id'] == $username AND $row['pin'] == $password) {
        session_start();
        $_SESSION['username'] = $row['nama'];
        header("location:../index.php");
    }  else {
        echo "<script>window.history.back(-1);"
            . "alert('Maaf ID atau Kata sandi salah !');"
            . "</script>";
    }
}
?>