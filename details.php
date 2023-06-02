<?php include 'partials/header.php'; ?>

<!-- details -->
<section class="section details">
	<!-- details background -->
	<div class="details__bg" data-bg="assets/img/home/home__bg.jpg"></div>
	<!-- end details background -->

	<!-- details content -->
	<div class="container">
		<div class="row">
			<?php include 'proses/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($db, "SELECT * FROM tb_film WHERE id='$id'");
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
									<img src="assets/img/covers/cover.jpg" alt="">
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
								<div class="card__content">
									<div class="card__wrap">
										<ul class="card__list">
											<li>HD</li>
											<li>1080p</li>
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Genre:</span> <?= $d['genre'] ?></li>
										<li><span>Release year:</span> <?= $d['tahun'] ?></li>
										<li><span>Country:</span> <a href="#"><?= $d['negara'] ?></a> </li>
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
					<video controls crossorigin playsinline poster="../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
						<!-- Video files -->
						<source src="https://www.youtube.com/watch?v=JfVOs4VSpmA" type="video/mp4">
						<!-- Fallback for browsers that don't support the <video> element -->
						<a href="https://www.youtube.com/watch?v=JfVOs4VSpmA" download>Download</a>
					</video>
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
										<li class="reviews__item">
											<div class="reviews__autor">
												<img class="reviews__avatar" src="assets/img/user.png" alt="">
												<span class="reviews__name">Best Marvel movie in my opinion</span>
												<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

												<span class="reviews__rating"><i class="icon ion-ios-star"></i>8.4</span>
											</div>
											<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</li>

										<li class="reviews__item">
											<div class="reviews__autor">
												<img class="reviews__avatar" src="assets/img/user.png" alt="">
												<span class="reviews__name">Best Marvel movie in my opinion</span>
												<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

												<span class="reviews__rating"><i class="icon ion-ios-star"></i>9.0</span>
											</div>
											<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</li>

										<li class="reviews__item">
											<div class="reviews__autor">
												<img class="reviews__avatar" src="assets/img/user.png" alt="">
												<span class="reviews__name">Best Marvel movie in my opinion</span>
												<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

												<span class="reviews__rating"><i class="icon ion-ios-star"></i>7.5</span>
											</div>
											<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</li>
									</ul>

									<form action="#" class="form">
										<input type="text" class="form__input" placeholder="Title">
										<textarea class="form__textarea" placeholder="Review"></textarea>
										<div class="form__slider">
											<div class="form__slider-rating" id="slider__rating"></div>
											<div class="form__slider-value" id="form__slider-value"></div>
										</div>
										<button type="button" class="form__btn">Send</button>
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

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<div class="card__cover">
								<img src="assets/img/covers/cover.jpg" alt="">
								<a href="#" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<div class="card__cover">
								<img src="assets/img/covers/cover2.jpg" alt="">
								<a href="#" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<div class="card__cover">
								<img src="assets/img/covers/cover3.jpg" alt="">
								<a href="#" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<div class="card__cover">
								<img src="assets/img/covers/cover4.jpg" alt="">
								<a href="#" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<div class="card__cover">
								<img src="assets/img/covers/cover5.jpg" alt="">
								<a href="#" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<div class="card__cover">
								<img src="assets/img/covers/cover6.jpg" alt="">
								<a href="#" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
			</div>
			<!-- end sidebar -->
		</div>
	</div>
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