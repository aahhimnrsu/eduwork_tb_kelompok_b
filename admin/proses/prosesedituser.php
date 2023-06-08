<?php
include '../../proses/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$role = $_POST['role'];

if($_POST['password'] != ""){
    mysqli_query($db, "UPDATE tb_user SET id='$id', nama='$nama', username='$username', password='$password', role='$role' WHERE id='$id'");
}else{
    mysqli_query($db, "UPDATE tb_user SET id='$id', nama='$nama', username='$username', role='$role' WHERE id='$id'");
}
header('location:../user.php');
