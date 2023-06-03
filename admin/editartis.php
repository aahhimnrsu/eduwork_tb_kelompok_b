<?php $page = "Artist";
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
                <div class="title">Edit Artist</div>
                <form action="proses/proseseditartis.php" method="post" enctype="multipart/form-data">
                    <?php $id = $_GET['id'];
                    $data = mysqli_query($db, "SELECT * FROM tb_artis WHERE id='$id'");
                    while ($d = mysqli_fetch_array($data)) { ?>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            Name
                            <input type="text" class="form-control" name="nama_artis" placeholder="Enter Name" value="<?= $d['nama_artis'] ?>">
                            <input type="text" class="form-control" name="id" placeholder="Enter Name" value="<?= $d['id'] ?>" hidden>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            Birth
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?= $d['tanggal_lahir'] ?>">
                        </div>
                        <div class="col-md-6">
                            City
                            <input type="text" class="form-control" name="asal_kota" placeholder="Enter City" value="<?= $d['asal_kota'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            Photo
                            <input type="file" class="form-control" name="foto" placeholder="Enter Year" value="<?= $d['foto'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            biography
                            <textarea name="biografi" class="form-control" rows="5"><?= $d['biografi'] ?></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm">Update Artist</button>
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