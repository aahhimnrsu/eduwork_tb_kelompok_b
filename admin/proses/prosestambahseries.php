<?php
include '../../proses/koneksi.php';

$target_dir = "../../assets/poster/";
$judul = $_POST['judul'];
$target_file = $_FILES["poster"]["name"];
$jenis = "Series";
$genre = $_POST['genre'];
$artis = $_POST['artis'];
$deskripsi = $_POST['deskripsi'];
$tahun = $_POST['tahun'];
$negara = $_POST['negara'];
$link_video = $_POST['link_video'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["Tambah"])) {
  $check = getimagesize($_FILES["poster"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
  
// Check file size
if ($_FILES["poster"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "webp") {
  echo "Sorry, only JPG, JPEG, PNG & WEBP files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
      
      mysqli_query($db, "insert into tb_film values('','$target_file','$judul','$jenis','$genre','$artis','$deskripsi','$tahun','$negara','$link_video','' ,'')");
      header('location:../series.php');
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
}
