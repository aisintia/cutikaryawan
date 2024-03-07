<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12my-auto">
        <div class="cardborder-0">
          <div class="row">
            <div class="col-md-8">
              <div class="card-body">
                <img src="image/karyawan1.jpg" alt="">
              </div>
            </div>

            <div class="col-md-4">
              <div class="card-body">
                <div class="mb-5 text-center">
                  <h2 class="mt-5">LOGIN</h2>
                </div>
                <form action="login_proses.php" method="POST">
                  <div class="mb-3">
                    <input type="text" class="type email form-control" name="username">
                    <div class="form-text">masukan email atau username!</div>
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" name="password">
                    <div class="form-text">masukan Password!</div>
                  </div>

                  <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>