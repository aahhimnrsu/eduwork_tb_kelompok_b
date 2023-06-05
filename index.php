<?php
$page = "Home";
include 'partials/header.php';
include 'proses/koneksi.php'; ?>

<!-- home -->
<section class="home">
	<!-- home bg -->
	<div class="owl-carousel home__bg">
		<div class="item home__cover" data-bg="assets/img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="assets/img/home/home__bg2.jpg"></div>
		<div class="item home__cover" data-bg="assets/img/home/home__bg3.jpg"></div>
		<div class="item home__cover" data-bg="assets/img/home/home__bg4.jpg"></div>
	</div>
	<!-- end home bg -->

	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php if (isset($_SESSION['status'])) { ?>
				<h4 class="home__title" style="font-size: 20px;"><b>Welcome, </b><?= $_SESSION['nama']?></h4>
			<?php } ?>
				<h1 class="home__title"><b>NEW </b>UPDATES </h1>

				<button class="home__nav home__nav--prev" type="button">
					<i class="icon ion-ios-arrow-round-back"></i>
				</button>
				<button class="home__nav home__nav--next" type="button">
					<i class="icon ion-ios-arrow-round-forward"></i>
				</button>
			</div>

			<div class="col-12">
				<div class="owl-carousel home__carousel">
					<?php
					include 'proses/koneksi.php';
					$no = 1;
					$query = mysqli_query($db, 'SELECT * FROM tb_film ORDER BY id desc LIMIT 8');
					while ($d = mysqli_fetch_array($query)) {
						$id = $d['id'];
						$cekrate = mysqli_query($db, "SELECT ROUND(AVG(rating),1) FROM tb_review WHERE id_film='$id'");
						$rate = $cekrate->fetch_assoc();
					?>
						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="assets/poster/<?= $d['poster'] ?>" alt="" height="375px">
									<a href="details.php?id=<?= $d['id'] ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details.php?id=<?= $d['id'] ?>"><?= $d['judul'] ?></a></h3>
									<span class="card__category">
										<a href="genre.php?genre=<?= $d['genre'] ?>"><?= $d['genre'] ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php foreach ($rate as $rate) {
																									print_r($rate);
																								} ?></span>
								</div>
							</div>
							<!-- end card -->
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end home -->

<!-- content -->
<section class="content">
	<div class="content__head">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- content title -->
					<h2 class="content__title">For You</h2>
					<!-- end content title -->

					<!-- content tabs nav -->
					<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">

						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a>
						</li>
					</ul>
					<!-- end content tabs nav -->

					<!-- content mobile tabs nav -->
					<div class="content__mobile-tabs" id="content__mobile-tabs">
						<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<input type="button" value="New items">
							<span></span>
						</div>

						<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
							<ul class="nav nav-tabs" role="tablist">

								<li class="nav-item"><a class="nav-link active" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>

								<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>
							</ul>
						</div>
					</div>
					<!-- end content mobile tabs nav -->
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<!-- content tabs -->
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
				<div class="row">
					<?php
					include 'proses/koneksi.php';
					$no = 1;
					$query = mysqli_query($db, 'SELECT * FROM tb_film WHERE jenis="Movie" ORDER BY id desc LIMIT 12');
					while ($d = mysqli_fetch_array($query)) {
						$id = $d['id'];
						$cekrate = mysqli_query($db, "SELECT ROUND(AVG(rating),1) FROM tb_review WHERE id_film='$id'");
						$rate = $cekrate->fetch_assoc();
					?>
						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<!-- card -->
							<div class="card">
								<div class="card__cover">
									<img src="assets/poster/<?= $d['poster'] ?>" alt="" height="250px">
									<a href="details.php?id=<?= $d['id'] ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details.php?id=<?= $d['id'] ?>"><?= $d['judul'] ?></a></h3>
									<span class="card__category">
										<a href="genre.php?genre=<?= $d['genre'] ?>"><?= $d['genre'] ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php foreach ($rate as $rate) {
																									print_r($rate);
																								} ?></span>
								</div>
							</div>
							<!-- end card -->
						</div>
						<!-- end card -->
					<?php
					}
					?>
				</div>
			</div>

			<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
				<div class="row">
				<?php
					include 'proses/koneksi.php';
					$no = 1;
					$query = mysqli_query($db, 'SELECT * FROM tb_film WHERE jenis="Series" ORDER BY id desc LIMIT 12');
					while ($d = mysqli_fetch_array($query)) {
						$id = $d['id'];
						$cekrate = mysqli_query($db, "SELECT ROUND(AVG(rating),1) FROM tb_review WHERE id_film='$id'");
						$rate = $cekrate->fetch_assoc();
					?>
						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<!-- card -->
							<div class="card">
								<div class="card__cover">
									<img src="assets/poster/<?= $d['poster'] ?>" alt="" height="250px">
									<a href="details.php?id=<?= $d['id'] ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details.php?id=<?= $d['id'] ?>"><?= $d['judul'] ?></a></h3>
									<span class="card__category">
										<a href="genre.php?genre=<?= $d['genre'] ?>"><?= $d['genre'] ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php foreach ($rate as $rate) {
																									print_r($rate);
																								} ?></span>
								</div>
							</div>
							<!-- end card -->
						</div>
						<!-- end card -->
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<!-- end content tabs -->
	</div>
</section>
<!-- end content -->
<?php include 'partials/footer.php' ?>