<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login </title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="assets/dist/css/login.css">
</head>

<body>
  <form class="form-signin" method="POST" action="cek_login.php">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card mx-auto" style="width: fit-content;">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="card-body">
                <div class="brand-wrapper text-center">
                  <i class=" fa-3x  fas fa-book-reader" style="padding-right:10px"></i> <a href="" class="text-dark font-weight-bold me-2" style="font-size: 30px;">Pengaduan Masyarakat</a>
                </div>
                <p class="login-card-description text-center">Sign into your account</p>
                <form action="#!">
                  <div class="form-group">
                    <label for="email" class="sr-only">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="***********">
                  </div>
                  <div class="form-prompt-wrapper">
                    <div class="custom-control custom-checkbox login-card-check-box mb-2">
                      <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                    <input class="btn btn-block login-btn mb-4" name="login" type="submit" value="Login">
                </form>
                <p class="login-card-footer-text mb-2">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </form>

</body>

</html>