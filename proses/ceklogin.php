<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($db,"select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);
 
if($cek > 0){
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../admin/index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['role']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['role'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:../index.php?status=true");
 
	// cek jika user login sebagai pengurus
	}
}else{
	header("location:../signin.php?pesan=gagal");
}
