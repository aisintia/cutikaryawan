<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-data_karyawan.xls");
?>

<table class="table mt-3" border ="1">
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>Tempat Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Almat</td>
        <td>Email</td>
        <td>Posisi</td>
        
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM data_karyawan ");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['tempat_tanggal_lahir'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['posisi'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>