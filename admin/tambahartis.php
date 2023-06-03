<?php $page = "Artist";
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
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
                <div class="title">Add New Artist</div>
                <form action="proses/prosestambahartis.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            Name
                            <input type="text" class="form-control" name="nama_artis" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            Birth
                            <input type="date" class="form-control" name="tanggal_lahir">
                        </div>
                        <div class="col-md-6">
                            City
                            <input type="text" class="form-control" name="asal_kota" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            Photo
                            <input type="file" class="form-control" name="foto" placeholder="Enter Year">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            biography
                            <textarea name="biografi" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm">+ Add New Artist</button>
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