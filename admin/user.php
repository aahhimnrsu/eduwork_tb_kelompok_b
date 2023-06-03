<?php $page = "User";
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
include '../proses/koneksi.php';
$query = mysqli_query($db, 'SELECT * FROM tb_user');
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
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php if(mysqli_num_rows($query) > 0) {?>
                <?php 
                  $no = 1;
                  while ($d= mysqli_fetch_array($query)) {      
                ?>
              <tr>
                <th><?= $no ?></th>
                <td><?= $d['nama']?></td>
                <td><?= $d['username']?></td>
                <td><?= $d['role']?></td>
                <td>
                <a href="edituser.php?id=<?php echo $d["id"]?>">Update</a> |
                <a href="proses/deleteuser.php?id=<?php echo $d["id"]?>">Delete</a>
                </td>
              </tr>
              <?php $no++;
            }
            } ?>
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