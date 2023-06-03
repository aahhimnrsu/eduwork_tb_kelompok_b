<?php
include '../../proses/koneksi.php';

$id = $_POST['id'];
$genre = $_POST['genre'];
$terakhir_diubah = date("Y-m-d");

mysqli_query($db, "UPDATE tb_genre SET id='$id', genre='$genre', terakhir_diubah='$terakhir_diubah' WHERE id='$id'");
header('location:../genre.php');
