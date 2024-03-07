<?php include 'db/koneksi.php' ?>
<?php
if (isset($_GET['aksi'])) {
  if ($_GET['aksi'] == "hapus-berhasil") {
    echo "
        <div class='alert alert-primary' role='alert'>
            Data Berhasil Dihapus!
        </div>
        ";
  }
  if ($_GET['aksi'] == "add-berhasil") {
    echo "
        <div class='alert alert-success' role='alert'>
            Data Berhasil Ditambahkan!
        </div>
        ";
  }
}
?>
<div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <h6 class="mb-0">Data Karyawan</h6>
        </div>
        <div class="col-8 text-end">
          <form action="" method="get" class="form-inline">
            <div class="row">
              <div class="col-5">
                <input type="text" class="form-control" placeholder="Cari" aria-label="First name" name="cari">
                <input type="hidden" class="form-control" placeholder="Cari" aria-label="First name" name="dashboard" value="data_karyawan">
              </div>
              <div class="col-2">
                <input type="submit" class="btn bg-gradient-primary" value="Cari" aria-label="Last name">
              </div>
          </form>
          <div class="col-4">
            <a class="btn bg-gradient-dark mb-0" href="?dashboard=data_karyawan-add"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add New </a>
          </div>
          <div class="col-1">
            <a class="btn bg-gradient-dark mb-0" href="data_karyawan_excel.php"><i class="fas fa-file-excel"></i></a>
          </div>

        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <div class="row">
        <div class="col-md-12 mb-md-0 mb-4">
          <table class="table mt-3">
            <tr>
              <td>Id</td>
              <td>Nama</td>
              <td>Tempat Tanggal Lahir</td>
              <td>Jenis Kelamin</td>
              <td>Alamat</td>
              <td>Email</td>
              <td>Posisi</td>
              <td>Aksi</td>
            </tr>
            <?php if (isset($_GET['cari'])) : ?>
              <?php $cari = $_GET['cari'] ?>
              <?php $query = mysqli_query($koneksi, "select * from data_karyawan where nama like '%" . $cari . "%'"); ?>
            <?php else : ?>
              <?php $query = mysqli_query($koneksi, "SELECT * FROM data_karyawan");  ?>
            <?php endif ?>
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
                  <td>
                    <a href="dashboard.php?dashboard=data_karyawan-edit&id=<?php echo $data['id'] ?>">Edit</a>
                    <a href="dashboard.php?dashboard=data_karyawan-delete&id=<?php echo $data['id'] ?>">Hapus</a>
                  </td>
                </tr>
              <?php endwhile ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>