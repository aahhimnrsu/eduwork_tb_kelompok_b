<?php
include '../../proses/koneksi.php';

$id= $_GET['id'];

mysqli_query($db,"delete from tb_artis where id='$id'");
header("location:../artis.php")
?>