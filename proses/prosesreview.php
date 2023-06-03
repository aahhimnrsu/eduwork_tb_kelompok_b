<?php
include 'koneksi.php';

$id_film = $_POST['id_film'];
$id_user = $_POST['id_user'];
$subject = $_POST['subject'];
$review = $_POST['review'];
$rating = $_POST['rating'];
$terakhir_diubah = date("Y-m-d H:i:s");

mysqli_query($db, "insert into tb_review values('','$id_film', '$id_user', '$subject', '$review', '$rating', '$terakhir_diubah')");
header('location:../movies.php');