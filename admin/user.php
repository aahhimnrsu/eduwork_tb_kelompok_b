<?php $page = "User";
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php' ?>

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
        <div class="title"><a class="btn btn-primary btn-sm font-weight-bold text-light">+ Add User</a></div>
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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
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