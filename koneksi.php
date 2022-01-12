<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_ukk";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($konesi));

if (!$koneksi) {
    die("Koneksi Gagal");
}

// function register($data)
// {
//     global $koneksi;

//     $nik = strtolower(stripslashes($data["nik"]));
//     $nama = (stripslashes($data["nama"]));
//     $username = (stripslashes($data["username"]));
//     $password = mysqli_real_escape_string($koneksi, $data["password"]);
//     $telp = (stripslashes($data["telp"]));

//     //menambahkan user baru ke database
//     mysqli_query($koneksi, "INSERT INTO tb_masyarakat VALUES('$nik', '$nama', '$username', '$password', '$telp') ");

//     return mysqli_affected_rows($koneksi);
// }
