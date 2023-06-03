<?php
include '../../proses/koneksi.php';

$genre = $_POST['genre'];
$terakhir_diubah = date("Y-m-d");

mysqli_query($db, "insert into tb_genre values('','$genre', '$terakhir_diubah')");
header('location:../genre.php');