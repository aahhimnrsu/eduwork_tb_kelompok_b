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
                <div class="title">Edit User</div>
                <form action="proses/prosesedituser.php" method="post" enctype="multipart/form-data">
                    <?php $id = $_GET['id'];
                    $data = mysqli_query($db, "SELECT * FROM tb_user WHERE id='$id'");
                    while ($d = mysqli_fetch_array($data)) { ?>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Name
                                <input type="text" class="form-control" name="nama" placeholder="Enter Name" value="<?= $d['nama'] ?>">
                                <input type="text" class="form-control" name="id" placeholder="Enter Name" value="<?= $d['id'] ?>" hidden>
                            </div>
                            <div class="col-md-6">
                                Username
                                <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?= $d['username'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Role
                                <select name="role" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                Password
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" value="<?= $d['password'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-sm">Update User</button>
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