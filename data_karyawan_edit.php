<?php
include "db/koneksi.php";

$id = $_GET['id'];

$pilih = mysqli_query($koneksi, "SELECT * FROM data_karyawan WHERE 
id='$id'");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST['nama'];
  $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $posisi = $_POST['posisi'];

  $query = mysqli_query($koneksi, "UPDATE data_karyawan SET nama='$nama',tempat_tanggal_lahir= '$tempat_tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat',email='$email',posisi='$posisi'WHERE id='$id'");
  if ($query) {
    echo "<script>
    window.location = 'dashboard.php?dashboard=data_karyawan&aksi=edit-berhasil';
    </script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">

      <h1>Mengedit Data Karyawan</h1>
      <form action="" method="post">
        <?php
        while ($data = mysqli_fetch_array($pilih)) {
        ?>

         
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
           
          </div>
          <div class="mb-3">
            <label for="tempat_tanggal_lahir" class="form-label">Tempat Tanggal Lahir</label>
            <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control" value="<?php echo $data['tempat_tanggal_lahir'] ?>">
            
          </div>
          <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value = "Laki-Laki" >
            <label class="form-check-label" for="flexRadioDefault1">
              Laki-Laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" checked value = "Perempuan" >
            <label class="form-check-label" for="flexRadioDefault2">
              Perempuan
            </label>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>">
          
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="form-control" value="<?php echo $data['email'] ?>">
           
            <div>
              <div class="mb-3">
                <label for="posisi" class="form-label">Posisi</label>
                <input type="text" id="posisi" name="posisi" class="form-control" value="<?php echo $data['posisi'] ?>">
               
                <br>

                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <div>
                <?php } ?>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>