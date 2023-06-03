<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = "user";

mysqli_query($db, "insert into tb_user values('','$nama', '$username', '$password', '$role')");
header('location:../signin.php');