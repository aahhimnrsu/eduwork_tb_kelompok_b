<?php
include '../../proses/koneksi.php';

$id= $_GET['id'];

mysqli_query($db,"delete from tb_genre where id='$id'");
header("location:../genre.php")
?>