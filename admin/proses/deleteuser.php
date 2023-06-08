<?php
include '../../proses/koneksi.php';

$id= $_GET['id'];

mysqli_query($db,"delete from tb_user where id='$id'");
header("location:../user.php")
?>