<?php include 'partials/header.php';
include 'proses/koneksi.php';
?>

<!-- details -->
<section class="section details">
	<!-- details background -->
	<div class="details__bg" data-bg="assets/img/home/home__bg.jpg"></div>
	<!-- end details background -->

	<!-- details content -->
	<div class="container">
		<div class="row">
			<?php
			$id = $_GET['id'];
			$data = mysqli_query($db, "SELECT * FROM tb_film WHERE id='$id'");
			if (isset($_SESSION['status'])) {
			$id_user = $_SESSION['id'];
			$ceklike = mysqli_query($db, "SELECT wholikes FROM tb_film WHERE id='$id' AND wholikes LIKE '%/$id_user/%'");
			$like = mysqli_fetch_array($ceklike);
			};
			$cekrate = mysqli_query($db, "SELECT ROUND(AVG(rating),1) FROM tb_review WHERE id_film='$id'");
			$rate = $cekrate->fetch_assoc();
			while ($d = mysqli_fetch_array($data)) { ?>
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title"><?= $d['judul'] ?></h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="card card--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
								<div class="card__cover">
									<img src="assets/poster/<?= $d['poster'] ?>" alt="<?= $d['poster'] ?>">
									<?php if (isset($_SESSION['status'])) { ?>
										<?php if ($like == NULL) { ?>
											<form action="proses/proseslike.php" method="POST" style="margin-top: 20px;">
												<input type="text" name="id_film" value="<?= $id ?>" hidden>
												<input type="text" class="form__input" name="id_user" hidden value="<?= $_SESSION['id'] ?>">
												<button name="like" type="submit" class="header__sign-in" style="color: white; font-weight: 700; width: 100%; margin-left: 0px;">❤️ Like This Film</button>
											</form>
										<?php } else { ?>
											<form action="proses/prosesunlike.php" method="POST" style="margin-top: 20px;">
												<input type="text" name="id_film" value="<?= $id ?>" hidden>
												<input type="text" class="form__input" name="id_user" hidden value="<?= $_SESSION['id'] ?>">
												<button name="unlike" type="submit" class="button__unlike" style="color: white; font-weight: 700; width: 100%; margin-left: 0px;">❤️ Unlike This Film</button>
											</form>
										<?php } ?>
									<?php } ?>
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php foreach ($rate as $rate) {
																										print_r($rate);
																									} ?></span>
										<ul class="card__list">
											<li>HD</li>
											<li>1080p</li>
										</ul>
										<span class="card__rate" style="margin-left: 10px;"><i class="icon ion-ios-heart"></i><?= $d['likes'] ?> Likes</span>
									</div>

									<ul class="card__meta">
										<li><span>Genre:</span> <?= $d['genre'] ?></li>
										<li><span>Release year:</span> <?= $d['tahun'] ?></li>
										<li><span>Country:</span><?= $d['negara'] ?></li>
										<li><span>Main Character:</span><?= $d['artis'] ?></li>
									</ul>

									<div class="card__description card__description--details">
										<?= $d['deskripsi'] ?>
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<div class="col-12 col-xl-6">
					<iframe width="600px" height="320px" src="<?= $d['link_video'] ?>">
					</iframe>
				</div>
				<!-- end player -->

				<div class="col-12">
					<div class="details__wrap">
						<!-- availables -->
						<div class="details__devices">
							<span class="details__devices-title">Available on devices:</span>
							<ul class="details__devices-list">
								<li><i class="icon ion-logo-apple"></i><span>IOS</span></li>
								<li><i class="icon ion-logo-android"></i><span>Android</span></li>
								<li><i class="icon ion-logo-windows"></i><span>Windows</span></li>
								<li><i class="icon ion-md-tv"></i><span>Smart TV</span></li>
							</ul>
						</div>
						<!-- end availables -->

						<!-- share -->
						<div class="details__share">
							<span class="details__share-title">Share with friends:</span>

							<ul class="details__share-list">
								<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
								<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
								<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
								<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
							</ul>
						</div>
						<!-- end share -->
					</div>
				</div>
		</div>
	<?php } ?>
	</div>
	<!-- end details content -->
</section>
<!-- end details -->

<!-- content -->
<section class="content">
	<div class="content__head">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- content title -->
					<h2 class="content__title">Discover</h2>
					<!-- end content title -->

					<!-- content tabs nav -->
					<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a>
						</li>
					</ul>
					<!-- end content tabs nav -->

					<!-- content mobile tabs nav -->
					<div class="content__mobile-tabs" id="content__mobile-tabs">
						<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<input type="button" value="Comments">
							<span></span>
						</div>

						<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
							<ul class="nav nav-tabs" role="tablist">

								<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a></li>

							</ul>
						</div>
					</div>
					<!-- end content mobile tabs nav -->
				</div>
			</div>
		</div>
	</div>

	<?php if (isset($_SESSION['status'])) { ?>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 col-xl-8">
					<!-- content tabs -->
					<div class="tab-content" id="myTabContent">

						<div class="tab-pane fade show active" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<ul class="reviews__list">
											<?php
											$review = mysqli_query($db, "SELECT tb_review.*, tb_user.nama as nama FROM tb_review LEFT JOIN tb_user ON tb_review.id_user = tb_user.id WHERE id_film='$id'");
											while ($r = mysqli_fetch_array($review)) { ?>
												<li class="reviews__item">
													<div class="reviews__autor">
														<img class="reviews__avatar" src="assets/img/user.png" alt="">
														<span class="reviews__name"><?= $r['subject'] ?></span>
														<span class="reviews__time"><?= $r['terakhir_diubah'] ?> by <?= $r['nama'] ?></span>

														<span class="reviews__rating"><i class="icon ion-ios-star"></i><?= $r['rating'] ?></span>
													</div>
													<p class="reviews__text"><?= $r['review'] ?></p>
												</li>
											<?php
											}
											?>
										</ul>

										<form action="proses/prosesreview.php" method="post" class="form">
											<input type="text" class="form__input" name="id_user" hidden value="<?= $_SESSION['id'] ?>">
											<input type="text" class="form__input" name="id_film" hidden value="<?= $id ?>">
											<input type="text" class="form__input" name="subject" placeholder="Subject">
											<textarea class="form__textarea" placeholder="Review" name="review"></textarea>
											<input type="number" class="form__input" placeholder="Rating" min="0" max="10" step="0.1" style="margin-top: 10px; width:20%;" name="rating">
											<button type="submit" class="form__btn" onclick="myFunction()">Send</button>
											<script>
												function myFunction() {
													alert("Thank you for the rating!");
												}
											</script>

										</form>
									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>

					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">You may also like...</h2>
						</div>
						<!-- end section title -->
						<?php
						$datas = mysqli_query($db, "SELECT * FROM tb_film WHERE id='$id'");
						$alldata = mysqli_fetch_assoc($datas);
						$genre = $alldata['genre'];
						$sug = mysqli_query($db, "SELECT * FROM tb_film WHERE genre='$genre' AND id!='$id'");
						while ($s = mysqli_fetch_array($sug)) {
							$id = $s['id'];
							$cekrates = mysqli_query($db, "SELECT ROUND(AVG(rating),1) FROM tb_review WHERE id_film='$id'");
							$rates = $cekrates->fetch_assoc(); ?>
							<!-- card -->
							<div class="col-6 col-sm-4 col-lg-6">
								<div class="card">
									<div class="card__cover">
										<img src="assets/poster/<?= $s['poster'] ?>" alt="" height="250px">
										<a href="details.php?id=<?= $s['id'] ?>" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?= $s['judul'] ?></a></h3>
										<span class="card__category">
											<a href="genre.php?genre=<?= $s['genre'] ?>"><?= $s['genre'] ?></a>
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php foreach ($rates as $rates) {
																										print_r($rates);
																									} ?></span>
									</div>
								</div>
							</div>
							<!-- end card -->
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- end sidebar -->
	<?php } else { ?>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 col-xl-8">
					<!-- content tabs -->
					<div class="tab-content" id="myTabContent">

						<div class="tab-pane fade show active" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<ul class="reviews__list">
											<?php
											$review = mysqli_query($db, "SELECT tb_review.*, tb_user.nama as nama FROM tb_review LEFT JOIN tb_user ON tb_review.id_user = tb_user.id WHERE id_film='$id'");
											while ($r = mysqli_fetch_array($review)) { ?>
												<li class="reviews__item">
													<div class="reviews__autor">
														<img class="reviews__avatar" src="assets/img/user.png" alt="">
														<span class="reviews__name"><?= $r['subject'] ?></span>
														<span class="reviews__time"><?= $r['terakhir_diubah'] ?> by <?= $r['nama'] ?></span>

														<span class="reviews__rating"><i class="icon ion-ios-star"></i><?= $r['rating'] ?></span>
													</div>
													<p class="reviews__text"><?= $r['review'] ?></p>
												</li>
											<?php
											}
											?>
										</ul>
									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>

					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">You may also like...</h2>
						</div>
						<!-- end section title -->
						<?php
						$datas = mysqli_query($db, "SELECT * FROM tb_film WHERE id='$id'");
						$alldata = mysqli_fetch_assoc($datas);
						$genre = $alldata['genre'];
						$sug = mysqli_query($db, "SELECT * FROM tb_film WHERE genre='$genre' AND id!='$id'");
						while ($s = mysqli_fetch_array($sug)) {
							$id = $s['id'];
							$cekrates = mysqli_query($db, "SELECT ROUND(AVG(rating),1) FROM tb_review WHERE id_film='$id'");
							$rates = $cekrates->fetch_assoc(); ?>
							<!-- card -->
							<div class="col-6 col-sm-4 col-lg-6">
								<div class="card">
									<div class="card__cover">
										<img src="assets/poster/<?= $s['poster'] ?>" alt="" height="250px">
										<a href="details.php?id=<?= $s['id'] ?>" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?= $s['judul'] ?></a></h3>
										<span class="card__category">
											<a href="genre.php?genre=<?= $s['genre'] ?>"><?= $s['genre'] ?></a>
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php foreach ($rates as $rates) {
																										print_r($rates);
																									} ?></span>
									</div>
								</div>
							</div>
							<!-- end card -->
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- end sidebar -->
	<?php } ?>
</section>
<!-- end content -->

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>

	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">

		<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
		<!-- don't modify these 3 pswp__item elements, data is added later on. -->
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">

			<div class="pswp__top-bar">

				<!--  Controls are self-explanatory. Order can be changed. -->

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

				<!-- Preloader -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>

			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>
<?php include 'partials/footer.php' ?>