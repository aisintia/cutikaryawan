<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-permintaan_cuti.xls");
?>

<table class="table mt-3" border ="1">
    <tr>
        <td>Id Permintaan</td>
        <td>Nama</td>
        <td>Mulai Tanggal</td>
        <td>Tanggal Berakhir</td>
        <td>Tinggalkan Jenis</td>
        <td>Alasan</td>

    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM permintaan_cuti ");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
                <td><?php echo $data['id_permintaan'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['mulai_tanggal'] ?></td>
                <td><?php echo $data['tanggal_berakhir'] ?></td>
                <td><?php echo $data['tinggalkan_jenis'] ?></td>
                <td><?php echo $data['alasan'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>