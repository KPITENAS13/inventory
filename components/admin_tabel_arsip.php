<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM file WHERE kategori='$_GET[kategori]'");
while ($r = mysql_fetch_array($q)) {
    $file = substr($r[path], 3);
    echo "
        <tr>
            <td><a href='$file'>$r[nama_file]</a></td>
            <td>$r[tanggal_upload]</td>
            <td>
            <a href='admin/delete_arsip.php?id=$r[id]&&path=$r[path]'> <i class='menu-icon icon-remove'></i> Hapus </a> 
            <a href='admin_arsip.php?id=$r[id]&&path=$r[path]'> <i class='menu-icon icon-remove'></i> Hapus </a> 
            </td>
        </tr>";
}
?>