<?php
include '../../proses/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

mysqli_query($db, "UPDATE tb_user SET id='$id', nama='$nama', username='$username', password='$password', role='$role' WHERE id='$id'");
header('location:../user.php');
