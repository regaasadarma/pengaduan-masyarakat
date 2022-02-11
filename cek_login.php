<?php
require 'koneksi.php';

$user = mysqli_escape_string($koneksi, $_POST['username']);
$pass = mysqli_escape_string($koneksi,$_POST['password'] );


$cek_user = mysqli_query($koneksi,"SELECT * FROM tb_petugas WHERE username = '$user' and password='$pass'");

$user_valid = mysqli_num_rows($cek_user);
 
if($user_valid > 0){
 
	$data = mysqli_fetch_assoc($cek_user);
	session_start();
	$_SESSION["nama_petugas"]=$data["nama_petugas"];
	$_SESSION["username"]=$data["username"];
	$_SESSION["telp"]=$data["telp"];
	$_SESSION["level"]=$data["level"];	


	if($data['level']=="admin"){
		header("location:admin/index.php");	
	}
	else if($data['level']=="petugas"){
		header("location:petugas.php");
	}
}else{
        echo "<script>alert('Maaf, Login Gagal, Username dan password anda tidak terdaftar!');document.location='index.php'</script>";

    }

$cek_user = mysqli_query($koneksi, "SELECT * FROM tb_masyarakat WHERE username = '$user' and password='$pass' ");
$user_valid = mysqli_num_rows($cek_user);

//uji jika uname terdaftar
if($user_valid > 0){
	$data = mysqli_fetch_assoc($cek_user);
	session_start();
	$_SESSION["nik"]=$data["nik"];
	$_SESSION["nama"]=$data["nama"];
	$_SESSION["username"]=$data["username"];
	$_SESSION["telp"]=$data["telp"];
   
 header('location:masyarakat.php');
        

    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";
    }