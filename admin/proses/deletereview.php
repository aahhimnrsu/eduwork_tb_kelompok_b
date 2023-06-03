<?php
include '../../proses/koneksi.php';

$id= $_GET['id'];

mysqli_query($db,"delete from tb_review where id='$id'");
header("location:../review.php")
?>