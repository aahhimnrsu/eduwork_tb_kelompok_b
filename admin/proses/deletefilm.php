<?php
include '../../proses/koneksi.php';

$id= $_GET['id'];

mysqli_query($db,"delete from tb_film where id='$id'");
header("location:../movies.php")
?>