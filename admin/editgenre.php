<?php $page = "Genre";
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
                <div class="title">Edit Genre</div>
                <form action="proses/proseseditgenre.php" method="post" enctype="multipart/form-data">
                    <?php $id = $_GET['id'];
                    $data = mysqli_query($db, "SELECT * FROM tb_genre WHERE id='$id'");
                    while ($d = mysqli_fetch_array($data)) { ?>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                Genre
                                <input type="text" class="form-control" name="genre" placeholder="Enter Genre" value="<?= $d['genre'] ?>">
                                <input type="text" class="form-control" name="id" placeholder="Enter Genre" value="<?= $d['id'] ?>" hidden>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-sm">Update Genre</button>
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