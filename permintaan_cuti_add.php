<?php
include "db/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST['nama'];
  $mulai_tanggal = $_POST['mulai_tanggal'];
  $tanggal_berakhir = $_POST['tanggal_berakhir'];
  $tinggalkan_jenis = $_POST['tinggalkan_jenis'];
  $alasan = $_POST['alasan'];

  $query = mysqli_query($koneksi, "INSERT INTO permintaan_cuti VALUES ('','$nama','$mulai_tanggal','$tanggal_berakhir','$tinggalkan_jenis','$alasan')");
  if ($query) {
    echo "berhasil";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menambah Permintaan Cuti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <h1>Menambah Permintaan cuti</h1>
      <form action="" method="post">
     
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" id="nama" name="nama" class="form-control">
        </div>
        <div class="mb-3">
          <label for="mulai_tanggal" class="form-label">Mulai Tanggal</label>
          <input type="date" id="mulai_tanggal" name="mulai_tanggal" class="form-control">
        </div>
        <div class="mb-3">
          <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
          <input type="date" id="tanggal_berakhir" name="tanggal_berakhir" class="form-control">
        </div>
        <div class="mb-3">
          <label for="tinggalkan_jenis" class="form-label">Tinggalkan Jenis</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tinggalkan_jenis" id="flexRadioDefault1" value="Sakit">
          <label class="form-check-label" for="flexRadioDefault1">
            Sakit
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tinggalkan_jenis" id="flexRadioDefault2" checked value="Izin">
          <label class="form-check-label" for="flexRadioDefault2">
            Izin
          </label>
        </div>
        <div class="mb-3">
          <label for="alasan" class="form-label">Alasan</label>
          <input type="text" id="alasan" name="alasan" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>