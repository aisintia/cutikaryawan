<?php
include "db/koneksi.php";

$password = $_GET['password'];

$query = mysqli_query($koneksi, "DELETE FROM admin WHERE password='$password'");

if ($query){
    echo "<script>
        window.location = 'dashboard.php?dashboard=admin&aksi=edit-berhasil';
    </script>";
} 