<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM jadwal_lab");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[no_ruang]</td>
            <td>$r[kegiatan]</td>
            <td>$r[waktu]</td>
            <td>$r[penanggungjawab]</td>
            <td><a href='admin/delete_jadwal_lab.php?kode=$r[id]'> Hapus </a></td>
        </tr>";
}
?>