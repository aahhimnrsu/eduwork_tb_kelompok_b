<?php
include 'koneksi.php';

$id_film = $_POST['id_film'];
$id_user = $_POST['id_user'];


mysqli_query($db,"UPDATE tb_film SET wholikes=REPLACE(wholikes, '/$id_user/', '') WHERE id=$id_film");
mysqli_query($db,"UPDATE tb_film set `likes` = `likes`-1 where `id` = '$id_film'");

header('location:../details.php?id='.$id_film);