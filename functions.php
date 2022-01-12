<?php

require 'koneksi.php';



function query($sql)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function register($data)
{
    global $koneksi;

    $nik = strtolower(stripslashes($data["nik"]));
    $nama = (stripslashes($data["nama"]));
    $username = (stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $telp = (stripslashes($data["telp"]));

    //menambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO tb_masyarakat VALUES('$nik', '$nama', '$username', '$password', '$telp') ");

    return mysqli_affected_rows($koneksi);
}

