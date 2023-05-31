<?php $page = "FAQ";
include 'partials/header.php' ?>
	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
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

	<!-- faq -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="faq">
						<h3 class="faq__title">How do I sign up for B-MOV?</h3>
						<p class="faq__text">Signing up for B-MOV is easy! Simply click on the "Sign Up" button located at the top right corner of our website. Fill in the required information, create a username and password, and you'll be ready to explore our vast film collection.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Can I watch movies offline on B-MOV?</h3>
						<p class="faq__text">Currently, B-MOV only supports online streaming, and offline viewing is not available. However, you can enjoy our extensive film library anytime, anywhere as long as you have an internet connection.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Are there subtitles available for non-English films?</h3>
						<p class="faq__text">Yes, we provide subtitles for non-English films whenever available. We strive to offer a seamless viewing experience for our diverse audience by including multilingual subtitles in popular languages.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Can I share my account with others?</h3>
						<p class="faq__text">B-MOV's terms of service allow for personal use only. Sharing your account with others is not permitted. Each account is intended for individual use, and sharing your account may result in suspension or termination.</p>
					</div>

				</div>
				
				<div class="col-12 col-md-6">
					<div class="faq">
						<h3 class="faq__title">How often is the film collection updated?</h3>
						<p class="faq__text">We are committed to providing our users with a fresh and diverse film selection. Our film collection is regularly updated with new releases and curated content. Check back frequently to discover the latest additions to our library.</p>
					</div>
					
					<div class="faq">
						<h3 class="faq__title">How can I contact B-MOV customer support?</h3>
						<p class="faq__text">If you have any questions, feedback, or encounter any issues while using B-MOV, our dedicated customer support team is here to assist you. Please visit our "Contact Us" page to find the relevant contact information or use the provided form to submit your inquiry.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Is B-MOV available on mobile devices?</h3>
						<p class="faq__text">Yes, B-MOV is designed to be compatible with a wide range of devices, including smartphones and tablets. You can enjoy seamless streaming on your mobile devices by accessing our website through a compatible web browser.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Can I cancel my B-MOV subscription anytime?</h3>
						<p class="faq__text">Absolutely! If you decide to cancel your B-MOV subscription, you can do so at any time. Simply visit the "Account Settings" page, where you'll find the option to manage your subscription. Follow the instructions provided to cancel your membership.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end faq -->
<?php include 'partials/footer.php' ?>