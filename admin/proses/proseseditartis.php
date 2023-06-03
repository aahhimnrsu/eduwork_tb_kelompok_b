<?php
include '../../proses/koneksi.php';

$id = $_POST['id'];
$nama_artis = $_POST['nama_artis'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$asal_kota = $_POST['asal_kota'];
$biografi = $_POST['biografi'];
$target_dir = "../../assets/fotoartis/";
$target_file = $target_dir . $_FILES["foto"]["name"];
$file = $_FILES["foto"]["name"];

if ($file != "") {
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["Tambah"])) {
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check !== false) {
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
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "webp"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & WEBP files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {

            mysqli_query($db, "UPDATE tb_artis SET id='$id', nama_artis='$nama_artis', tanggal_lahir='$tanggal_lahir', asal_kota='$asal_kota', biografi='$biografi', foto='$file' WHERE id='$id'");
            header('location:../artis.php');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    mysqli_query($db, "UPDATE tb_artis SET id='$id', nama_artis='$nama_artis', tanggal_lahir='$tanggal_lahir', asal_kota='$asal_kota', biografi='$biografi' WHERE id='$id'");
    header('location:../artis.php');
}
