<?php
include "db/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM data_karyawan WHERE id='$id'");

if ($query){
    echo "<script>
        window.location = 'dashboard.php?dashboard=data_karyawan&aksi=edit-berhasil';
    </script>";
} 