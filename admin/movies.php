<?php $page = "Movies";
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
        <div class="title"><a href="tambahmovies.php" class="btn btn-primary btn-sm font-weight-bold text-light">+ Add New Movies</a></div>
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="myTable">
            <thead>
              <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                  $no = 1;
                  $query = mysqli_query($db, 'SELECT * FROM tb_film WHERE jenis="Movie"');
                  if(mysqli_num_rows($query) > 0) {
                  while ($data= mysqli_fetch_array($query)) {      
                ?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $data["judul"]?></td>
                    <td><?php echo $data["genre"]?></td>
                    <td><?php echo $data["tahun"]?></td>
                    <td>
                      <a href="editfilm.php?id=<?php echo $data["id"]?>">Update</a> |
                      <a href="proses/deletefilm.php?id=<?php echo $data["id"]?>">Delete</a>
                    </td>                                     
                  </tr>
                <?php $no++; }?>
              <?php } ?>
            </tbody>
          </table>
        </div>
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