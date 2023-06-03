<?php $page = "Home";
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
include '../proses/koneksi.php';
$totalmovies = mysqli_query($db, 'SELECT COUNT(*) FROM tb_film WHERE jenis="Movie"'); 
$totalseries = mysqli_query($db, 'SELECT COUNT(*) FROM tb_film WHERE jenis="Series"'); 
$totalakun = mysqli_query($db, 'SELECT COUNT(*) FROM tb_user'); 
$totalreview = mysqli_query($db, 'SELECT COUNT(*) FROM tb_review'); 
$totalgenre = mysqli_query($db, 'SELECT COUNT(*) FROM tb_genre'); 
$totalartist = mysqli_query($db, 'SELECT COUNT(*) FROM tb_artis'); 
$movies = $totalmovies->fetch_assoc();
$series = $totalseries->fetch_assoc();
$akun = $totalakun->fetch_assoc();
$review = $totalreview->fetch_assoc();
$genre = $totalgenre->fetch_assoc();
$artist = $totalartist->fetch_assoc();
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
      <div class="row">
        
        <div class="col-md-4 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>List Movies</strong>
              </div>
              <div class="number dashtext-2"><?php foreach ($movies as $movies) {
                                    print_r($movies);
                                  } ?> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>List Series</strong>
              </div>
              <div class="number dashtext-3"><?php foreach ($series as $series) {
                                    print_r($series);
                                  } ?> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Review</strong>
              </div>
              <div class="number dashtext-4"><?php foreach ($review as $review) {
                                    print_r($review);
                                  } ?> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-list"></i></div><strong>Genre</strong>
              </div>
              <div class="number dashtext-4"><?php foreach ($genre as $genre) {
                                    print_r($genre);
                                  } ?> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-user-outline"></i></div><strong>Artist</strong>
              </div>
              <div class="number dashtext-4"><?php foreach ($artist as $artist) {
                                    print_r($artist);
                                  } ?> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-user"></i></div><strong>Registered User</strong>
              </div>
              <div class="number dashtext-4"><?php foreach ($akun as $akun) {
                                    print_r($akun);
                                  } ?> </div>
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