<?php $page = "Review";
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
include '../proses/koneksi.php';
$query = mysqli_query($db, 'SELECT tb_review.*, tb_film.judul as judul, tb_user.nama as nama FROM tb_film JOIN tb_review ON tb_review.id_film = tb_film.id JOIN  tb_user  ON tb_review.id_user = tb_user.id');
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
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="myTable">
            <thead>
              <tr>
                <th>No.</th>
                <th>User</th>
                <th>Movie</th>
                <th>Review</th>
                <th>Rating</th>
                <th>Posted</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if(mysqli_num_rows($query) > 0) {?>
                <?php 
                  $no = 1;
                  while ($data= mysqli_fetch_array($query)) {      
                ?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $data["nama"]?></td>
                    <td><?php echo $data["judul"]?></td>
                    <td><?php echo $data["review"]?></td>
                    <td><?php echo $data["rating"]?></td>
                    <td><?php echo $data["terakhir_diubah"]?></td>
                    <td>
                      <a href="proses/deletereview.php?id=<?php echo $data["id"]?>">Delete</a>
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