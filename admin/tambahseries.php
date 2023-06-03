<?php $page = "Series";
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php' ?>

<?php
require("../proses/koneksi.php");

$query = mysqli_query($db, 'SELECT * FROM tb_film WHERE jenis="Movie"');
?>

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><?= $page ?></h2>
        </div>
    </div>

    <!-- Card Section -->
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="block">
                <div class="title">Add New Series</div>
                <form action="proses/prosestambahseries.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            Title
                            <input type="text" class="form-control" name="judul" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                            Genre
                            <select name="genre" class="form-control">
                                <?php
                                $no = 1;
                                $query = mysqli_query($db, 'SELECT * FROM tb_genre');
                                while ($d = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?= $d['genre']?>"><?= $d['genre']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Main Character
                            <select name="artis" class="form-control">
                                <?php
                                $no = 1;
                                $query = mysqli_query($db, 'SELECT * FROM tb_artis');
                                while ($d = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?= $d['nama_artis']?>"><?= $d['nama_artis']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            Year
                            <input type="text" class="form-control" name="tahun" placeholder="Enter Year">
                        </div>
                        <div class="col-md-6">
                            Country
                            <input type="text" class="form-control" name="negara" placeholder="Enter Country">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            Embed Trailer Link From Youtube
                            <input type="text" class="form-control" name="link_video" placeholder="Enter Embed Trailer Link From Youtube">
                        </div>
                        <div class="col-md-6">
                            Poster
                            <input type="file" class="form-control" name="poster" placeholder="Enter Poster">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            Synopsis
                            <textarea name="synopsis" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm">+ Add New Series</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
</section>
<!-- End Card Section -->

<!-- Content -->
<!-- End Content -->

<?php include 'partials/footer.php' ?>
<script>
    let table = new DataTable('#myTable');
</script>