<?php $page = "Home";
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
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <strong>Selamat Datang</strong>
                Admin
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>List Movies</strong>
              </div>
              <div class="number dashtext-2">375</div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>List Series</strong>
              </div>
              <div class="number dashtext-3">140</div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-user"></i></div><strong>Registered User</strong>
              </div>
              <div class="number dashtext-4">41</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Card Section -->

  <!-- Content -->
  <!-- End Content -->

  <?php include 'partials/footer.php' ?>