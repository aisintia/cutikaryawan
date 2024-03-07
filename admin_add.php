<?php
include "db/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $email = $_POST['email'];

  $query = mysqli_query($koneksi, "INSERT INTO admin VALUES ('$username','$pass','$email')");
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
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <h1>Menambah Admin</h1>
      <form action="" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" id="password" name="password" class="form-control">
          <div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" id="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>