<?php
include 'includefront/header.php';
include '../Admin_Pandit/include/connection.php';
?>
<?php
$row = "";
$query = mysqli_query($con, "select * FROM home_setting");
if (mysqli_affected_rows($con) > 0) {
	$row = mysqli_fetch_array($query);
}
?>
		<!-- Banner Section Start Here -->
		<section class="banner">
			<div class="banner-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="banner-slider-part"
							style="background-image: url(assets/images/banner/bg-images/01.jpg);">
							<div class="overlay"></div>
							<div class="container">
								<div class="row flex-row-reverse justify-content-center align-items-center">
									<div class="col-12">
										<div class="banner-content">
											<h1 class="banner-title"><B class="d-lg-block">We are Here to Perform</B>
												All Rituals for You!!! </h1>
											<a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="banner-slider-part"
							style="background-image: url(assets/images/banner/bg-images/02.jpg);">
							<div class="overlay"></div>
							<div class="container">
								<div class="row flex-row-reverse justify-content-center align-items-center">
									<div class="col-12">
										<div class="banner-content">
											<h1 class="banner-title"><B class="d-lg-block">Namaste!
                                              Welcome to SmartPuja.</B>
												All Rituals for You!!! </h1>
											<a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="banner-slider-part"
							style="background-image: url(assets/images/banner/bg-images/01.jpg);">
							<div class="overlay"></div>
							<div class="container">
								<div class="row flex-row-reverse justify-content-center align-items-center">
									<div class="col-12">
										<div class="banner-content">
											<h1 class="banner-title"><B class="d-lg-block">We are Here to Perform</B>
												All Rituals for You!!! </h1>
											<a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</section>
		<!-- Banner Section Ending Here -->

		<!-- about section start here -->
		<section class="about-section relative padding-tb bg-ash">
			<div class="container">
				<div class="row mb-15">
					<div class="col-xl-7 col-12">
						<div class="about-left-part">
							<div class="about-item">
								<div class="about-inner">
									<div class="about-thumb">
										<img src="assets/images/about/05.jpg" alt="about">
									</div>
									<div class="about-content">
										<div class="ac-thumb">
											<img src="assets/images/about/01.jpg" alt="about Image">
										</div>
										<div class="ac-content">
											<h6>Daily Puja</h6>
											<p>Continually Aggregate web interfaces</p>
										</div>
									</div>
								</div>
							</div>
							<div class="about-item">
								<div class="about-inner">
									<div class="about-thumb">
										<img src="assets/images/about/06.jpg" alt="about">
									</div>
									<div class="about-content">
										<div class="ac-thumb">
											<img src="assets/images/about/02.jpg" alt="about Image">
										</div>
										<div class="ac-content">
											<h6>Ritual puja</h6>
											<p>Continually Aggregate web interfaces</p>
										</div>
									</div>
								</div>
							</div>
							<div class="about-item">
								<div class="about-inner">
									<div class="about-thumb">
										<img src="assets/images/about/07.jpg" alt="about">
									</div>
									<div class="about-content">
										<div class="ac-thumb">
											<img src="assets/images/about/03.jpg" alt="about Image">
										</div>
										<div class="ac-content">
											<h6>Daily Ceremony</h6>
											<p>Continually Aggregate web interfaces</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-12">
						<div class="about-wrapper p-0">
							<div class="about-title">
								<h2><span class="d-lg-block"><?php echo $row[1];?></span></h2>
							</div>
							<div class="about-content">
								<p><?php echo $row[2];?></p>
								<ul class="lab-ul list-group mb-3">
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[3];?></li>
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[4];?></li>
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[5];?></li>
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[6];?> </li>
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[7];?></li>
								</ul>
								<!-- <a href="#" class="lab-btn mt-2"><span>Read More</span></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- about section ending here -->

		<!-- Feature section start here -->
		<section class="feature-section padding-tb">
			<div class="container">
				<div class="row text-center justify-content-center">
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/products/product/kumkum.jpg" alt="Feature Image">
								</div>
								<div class="lab-content">
									<h6>Natarual </h6>
									<p>Continually aggregate friction web interfaces thout </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/products/product/chandan.jpg" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>Pure Sandal</h6>
									<p>Continually aggregate friction web interfaces thout </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/products/product/haldi.jpg" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>100% Organic </h6>
									<p>Continually aggregate friction web interfaces thout </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/products/product/03.jpg" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>Stone</h6>
									<p>Continually aggregate friction web interfaces thout </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature section ending here -->

		<!-- product category section start here -->
		<section class="product-section relative padding-tb bg-ash">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="section-header">
							<h3>Puja Products</h3>
							<p>Conveniently customize proactive web services for leveraged
								interfaces without Globally </p>
						</div>
					</div>
					<div class="col-12">
						<div class="section-wrapper">
							<div class="row justify-content-center mb-15-none">

								<?php include 'indexproduct_retrive.php';?>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center mt-3 mb-2">
					<a href="product-page.php" class="lab-btn"><span>Shop Now</span></a>
				</div>
			</div>
		</section>
		<!-- product category section ending here -->

		<!-- Gallery section start here -->
		<section class="gallery-section padding-tb">
			<div class="container-fluid p-0 m-0">
				<div class="row">
					<div class="col-12">
						<div class="section-header">
							<h3> Our Gallery</h3>
							<p>Conveniently customize proactive web services for leveraged
								interfaces without Globally </p>
						</div>
					</div>
					<div class="col-12">
						<div class="gallery-content">
							<div class="gallery-grid text-center">
								<a href="assets/images/gallery/01.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="assets/images/gallery/01.jpg" alt="gallery-image">
								</a>
								<a href="assets/images/gallery/02.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="assets/images/gallery/02.jpg" alt="gallery-image">
								</a>
								<a href="assets/images/gallery/03.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="assets/images/gallery/03.jpg" alt="gallery-image">
								</a>
								<a href="assets/images/gallery/04.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="assets/images/gallery/04.jpg" alt="gallery-image">
								</a>
								<a href="assets/images/gallery/05.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="assets/images/gallery/05.jpg" alt="gallery-image">
								</a>
								<a href="assets/images/gallery/06.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="assets/images/gallery/06.jpg" alt="gallery-image">
								</a>
								<a href="assets/images/gallery/07.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="assets/images/gallery/07.jpg" alt="gallery-image">
								</a>
								<a href="assets/images/gallery/08.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="assets/images/gallery/08.jpg" alt="gallery-image">
								</a>
							</div>
							<div class="gallery-btn text-center mt-5">
								<a href="#" class="lab-btn"><span>Load Gallery</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Gallery section ends here -->

		<!--Video Section Start here-->
		<div class="video-section padding-tb bg-ash">
			<div class="container">
				<div class="video-section-wrapper mb-15">
					<div class="video-content">
						<img src="assets/images/bg-images/video-bg1.jpg" alt="Video-background">
						<a href="" data-rel="lightcase"><img src="assets/images/bg-images/yt-icon.png" alt="Play"></a>
					</div>
				</div>
			</div>
		</div>
		<!--Video Section Ending here-->

		<!--Chicken Life-cycle start here-->
		<section class="chicken-life-cycle padding-tb">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-12">
						<div class="lab-item">
							<div class="lab-thumb"><img src="assets/images/about/02.jpg" alt="chicken-life-cycle"></div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="lab-item">
							<div class="lab-content">
								<h3>Services</h3>
								<p>We arrange the ritual worship of lord occasion.
								</p>
								<div class="row mt-5">
									<div class="col-12">
										<div class="life-cycle-item d-flex flex-wrap">
											<div class="lci-left">
												01
											</div>
											<div class="lci-right">
												<h6>Satnarayan Puja</h6>
												<p>We arrange the ritual worship of Lord Vishnu or sri satnarayan puja on any special occasion.</p>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="life-cycle-item d-flex flex-wrap">
											<div class="lci-left">
												02
											</div>
											<div class="lci-right">
												<h6>Premium Services</h6>
												<p>We provides premium pandit for performing puja & all religious services at any place of customer's choice.</p>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="life-cycle-item d-flex flex-wrap">
											<div class="lci-left">
												03
											</div>
											<div class="lci-right">
												<h6>Puja samagri kit</h6>
												<p>Our clients can easily prebook all pooja & samagri kit as per their puja requirement & type of puja.</p>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="life-cycle-item d-flex flex-wrap">
											<div class="lci-left">
												04
											</div>
											<div class="lci-right">
												<h6>Vivaah puja</h6>
												<p>On this special occasion we arrange grand of thanking the almightly & taking blessings.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Chicken Life-cycle Ending here-->

		<!-- blog section start here -->
		<section class="blog-section relative padding-tb bg-ash">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-header">
							<h3>Our Recent Puja</h3>
							<p>Conveniently customize proactive web services for leveraged
								interfaces without Globally</p>
						</div>
					</div>
					<div class="col-12">
						<div class="section-wrapper">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="card border-none">
										<img src="assets/images/blog/01.jpg" class="card-img-top" alt="blog">
										<div class="card-body p-1 mt-3">
											<a href="#">
												<h6 class="card-title">God Hanuman</h6>
											</a>
											<p class="card-text mb-3">Tuesday is a day of Lord Hanuman. On this day, Hanuman Ji must be offered prayers so that he can fulfill all your wishes.</p>
											<div class="text-btn">
												<a href="blog-single.php"><span>Read More</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="card border-none">
										<img src="assets/images/blog/02.jpg" class="card-img-top" alt="blog">
										<div class="card-body p-1 mt-3">
											<a href="#">
												<h6 class="card-title">God Ganesha</h6>
											</a>
											<p class="card-text mb-3">The Rinn harta mantra or the Rhinaharta mantra is the Lord Ganesh mantra for wealth and prosperity in life as Lord Ganesha is requested.</p>
											<div class="text-btn">
												<a href="blog-single.php"><span>Read More</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="card border-none">
										<img src="assets/images/blog/03.jpg" class="card-img-top" alt="blog">
										<div class="card-body p-1 mt-3">
											<a href="#">
												<h6 class="card-title">God Suryadev</h6>
											</a>
											<p class="card-text mb-3">Surya Deva or Sun god is an important deity worshipped by the Hindus. ... benefits out of mantras and chanting, we need to chant mantras To invoke the Sun God, Surya Mantras are chanted everyday by devotees.</p>
											<div class="text-btn">
												<a href="blog-single.php">Read More<span></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- blog section ending here -->

		<!-- sponsor section start here -->
		<div class="sponsor-section padding-tb">
			<div class="container">
				<div class="section-wrapper">
					<div class="sponsor-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/god.jpg" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/horse.jpg" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/kamal.jpg" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/shiv.jpg" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/om.jpg" alt="sponsor"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- sponsor section ending here -->

<?php
include 'includefront/footer.php';
?>