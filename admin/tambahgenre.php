<?php $page = "Genre";
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
                <div class="title">Add New Genre</div>
                <form action="proses/prosestambahgenre.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            Genre
                            <input type="text" class="form-control" name="genre" placeholder="Enter Genre">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm">+ Add New Genre</button>
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