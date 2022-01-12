<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>Halaman Petugas</title>
</head>

<body>
  <div class="container">
    <div class="jumbotron bg-primary text-white">
      <h1 class="display-4">Hello,  <b><?= $_SESSION['nama_petugas']?></b></h1>
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg bg-danger" href="logout.php" role="button">Logout</a>
    </div>

  </div>
</body>

</html>