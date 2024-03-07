<?php
include "db/koneksi.php";

$id_permintaan = $_GET['id_permintaan'];

$query = mysqli_query($koneksi, "DELETE FROM permintaan_cuti WHERE id_permintaan='$id_permintaan'");

if ($query){
     echo "<script>
        window.location = 'dashboard.php?dashboard=permintaan_cuti&aksi=edit-berhasil';
    </script>";
}