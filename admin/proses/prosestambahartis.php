<?php
include '../../proses/koneksi.php';

$target_dir = "../../assets/fotoartis/";
$target_file = $_FILES["foto"]["name"];
$nama_artis = $_POST['nama_artis'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$asal_kota = $_POST['asal_kota'];
$biografi = $_POST['biografi'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["Tambah"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
  
// Check file size
if ($_FILES["foto"]["size"] > 5000000) {
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
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
      
      mysqli_query($db, "insert into tb_artis values('','$nama_artis','$tanggal_lahir','$asal_kota','$biografi','$target_file')");
      header('location:../artis.php');
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
}
