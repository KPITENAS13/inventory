<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM file");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[nama_file]</td>
            <td>$r[tanggal_upload]</td>
            <td>$r[kategori]</td>
            <td><a href='admin/delete_arsip.php?id=$r[id]&&path=$r[path]'> <i class='menu-icon icon-remove'></i> Hapus </a> </td>
        </tr>";
}
?>