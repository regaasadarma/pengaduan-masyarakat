<?php
require 'koneksi.php';
require 'functions.php';
if (isset($_POST['register'])) {

  if (register($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan!')
            document.location='index.php'
            </script>";
  } else {
    echo mysqli_error($koneksi);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dist/css/login.css">
</head>

<body>
  <form class="form-signin" method="POST" action="">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card mx-auto" style="width: fit-content;">
            <div class="col-lg-12">
              <div class="card-body">
                <div class="brand-wrapper text-center">
                  <i class=" fa-3x  fas fa-book-reader" style="padding-right:10px"></i> <a href="" class="text-dark font-weight-bold me-2" style="font-size: 30px;">Pengaduan Masyarakat</a>
                </div>
                <p class="login-card-description text-center">Create your account</p>
                <form action="#!">
                  <div class="form-group">

                    <div class="form-group">
                      <label for="nik" class="sr-only">Masukan NIK</label>
                      <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Nik" required>
                    </div>
                    <div>
                      <label for="nama" class="sr-only">Masukan Nama</label>
                      <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" required>
                    </div>

                    <div class="form-group mb-4">
                      <label for="username" class="sr-only">Username</label>
                      <input type="username" name="username" id="username" class="form-control" placeholder="Masukan Username" required>
                    </div>

                    <div class="form-group mb-4">
                      <label for="password" class="sr-only">Masukan Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" required>
                    </div>

                    <div class="form-group mb-4">
                      <label for="telp" class="sr-only">telp</label>
                      <input type="number" name="telp" id="telp" class="form-control" placeholder="Masukan No Telepon" required>
                    </div>

                    <input class="btn btn-block login-btn mb-4" name="register" type="submit" value="Register">
                </form>
                <p class="login-card-footer-text mb-0">Have already an account? <a href="index.php" class="text-reset">Login here</a></p>

              </div>
            </div>
          </div>
        </div>
        <!-- <div class="card login-card">
        <img src="assets/brand/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </form>
</body>

</html>