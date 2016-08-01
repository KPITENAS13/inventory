<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM topik_ta where status='disarankan'");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>
            <a href='admin/update_topik_ta_disarankan.php?kode=$r[id]'><i class='menu-icon icon-edit'></i></a> 
            <a href='admin/delete_topik_ta_disarankan.php?kode=$r[id]'><i class='menu-icon icon-trash'></i></a> $r[judul]
            </td>
            <td><a class='btn' data-toggle='modal' data-target='#PesertaModal'><i class='menu-icon icon-pencil'></i> Tambahkan </a></td>
        </tr>";
}
?>