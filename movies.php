<?php $page = "Movies";
include 'proses/koneksi.php';
include 'partials/header.php' ?>

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="assets/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title"><?= $page ?></h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active"><?= $page ?></li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- catalog -->
	<div class="catalog">
		<div class="container">
			<div class="row">
			<?php
			$batas = 12;
			$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
			$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

			$previous = $halaman - 1;
			$next = $halaman + 1;

			$data = mysqli_query($db, "SELECT * from tb_film where jenis='movies'");
			$jumlah_data = mysqli_num_rows($data);
			$total_halaman = ceil($jumlah_data / $batas);

			$dataBuah = mysqli_query($db, "SELECT * from tb_film where jenis='Movie' limit $halaman_awal, $batas");
			$nomor = $halaman_awal + 1;
			while ($d = mysqli_fetch_array($dataBuah)) {
			?>
				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="assets/img/covers/cover.jpg" alt="">
							<a href="details.php?id=<?= $d['id']?>" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?= $d['judul'] ?></a></h3>
							<span class="card__category">
								<a href="#"><?= $d['genre'] ?></a>
							</span>
						</div>
					</div>
				</div>
				<!-- end card -->
			<?php
			}
			?>

				<!-- paginator -->
				<div class="col-12">
					<ul class="paginator">
						<li class="paginator__item paginator__item--prev">
							<a  <?php if ($halaman > 1) {
									echo "href='?halaman=$Previous'";
								} ?>><i class="icon ion-ios-arrow-back"></i></a>
						</li>
						<?php for ($x = 1; $x <= $total_halaman; $x++) { ?>
						<li class="paginator__item"><a href="#">1</a></li>
						<?php } ?>
						<li class="paginator__item paginator__item--next">
							<a <?php if ($halaman < $total_halaman) {
									echo "href='?halaman=$next'";
								} ?>><i class="icon ion-ios-arrow-forward"></i></a>
						</li>
					</ul>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</div>
	<!-- end catalog -->
<?php include 'partials/footer.php' ?>