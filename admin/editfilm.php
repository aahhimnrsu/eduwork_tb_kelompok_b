<?php $page = "";
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
include '../proses/koneksi.php';
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
                <div class="title">Edit Film</div>
                <form action="proses/proseseditfilm.php" method="post" enctype="multipart/form-data">
                    <?php $id = $_GET['id'];
                    $data = mysqli_query($db, "SELECT * FROM tb_film WHERE id='$id'");
                    while ($d = mysqli_fetch_array($data)) { ?>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                Title
                                <input type="text" class="form-control" name="judul" placeholder="Enter Title" value="<?= $d['judul']?>">
                                <input type="text" class="form-control" name="id" placeholder="Enter Title" value="<?= $d['id']?>" hidden>
                                <input type="text" class="form-control" name="jenis" placeholder="Enter Title" value="<?= $d['jenis']?>" hidden>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Genre
                                <select name="genre" class="form-control">
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($db, 'SELECT * FROM tb_genre');
                                    while ($opt = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $opt['genre'] ?>"><?= $opt['genre'] ?></option>
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
                                    while ($opt = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $opt['nama_artis'] ?>"><?= $opt['nama_artis'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Release Date
                                <input type="text" class="form-control" name="tahun" placeholder="Enter Year" value="<?= $d['tahun']?>">
                            </div>
                            <div class="col-md-6">
                                Country
                                <input type="text" class="form-control" name="negara" placeholder="Enter Country" value="<?= $d['negara']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Embed Trailer Link From Youtube
                                <input type="text" class="form-control" name="link_video" placeholder="Enter Embed Trailer Link From Youtube" value="<?= $d['link_video']?>">
                            </div>
                            <div class="col-md-6">
                                Poster
                                <input type="file" class="form-control" name="poster" value="<?= $d['poster']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                Synopsis
                                <textarea name="deskripsi" class="form-control" rows="5"><?= $d['deskripsi']?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button class="btn btn-primary btn-sm"> Update Film</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
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