<?php

include '../koneksi.php';
require("reader.php"); // php excel reader
$file = "temp.xls";
$per = $_GET['periode'];
$kls = $_GET['kelas'];
$pra = $_GET['praktikum'];

$connection = new Spreadsheet_Excel_Reader(); // our main object
$connection->read($file);

//cek jumlah mahasiswa
$jmlmhs = 0;
$stat = 0;
$row = 2;
while ($stat == 0) {
    if (!empty($connection->sheets[0]["cells"][$row][1])) {
        $jmlmhs++;
        $row++;
    } else {
        $stat = 1;
    }
}

//cek jumlah pertemuan
$jmlpertemuan = 0;
$stat = 0;
$col = 3;
while (true) {
    if (!empty($connection->sheets[0]["cells"][2][$col])) {
        $jmlpertemuan++;
        $col++;
    } else {
        $stat = 1;
        break;
    }
}

//mahasiswa
$startrow = 2;
$endrow = $jmlmhs;
$col1 = 1;
//pertemuan
$awal = 3;
$akhir = $jmlpertemuan + $awal;

for ($i = $startrow; $i <= $endrow + 1; $i++) { //looping sebanyak jumlah mahasiswa
    $hadir = 0;
    for ($j = $awal; $j <= $akhir; $j++) { //looping sebanyak jumlah pertemuan
        $temp = 1;
        $temp = $connection->sheets[0]["cells"][$i][$j];
        if ($temp == "Hadir") { //cek kehadiran
            $hadir++;
        }
    }
    $nrp =  $connection->sheets[0]["cells"][$i][$col1]; // so we get [2][3] and [3][3]
    $presentase = (100*$hadir)/$jmlpertemuan;
    mysql_query("INSERT INTO absensi 
    (nrp,nama_praktikum,periode,kelas,presentase)VALUES 
    ('$nrp','$pra','$per','$kls',$presentase)");
}

unlink($file);
header('location:../admin_absensi.php');

?>