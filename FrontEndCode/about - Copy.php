<?php
include 'includefront/header.php';
include '../Admin_Pandit/include/connection.php';
?>
<?php
$row = "";
$query = mysqli_query($con, "select * FROM about");
if (mysqli_affected_rows($con) > 0) {
	$row = mysqli_fetch_array($query);
}
?>
		<!-- Page Header Section Start Here -->
		<section class="page-header bg_img padding-tb">
			<div class="overlay"></div>
			<div class="container">
				<div class="page-header-content-area">
					<h4 class="ph-title">About us</h4>
					<ul class="lab-ul">
						<li><a href="index.php">Home</a></li>
						<li><a class="active">About</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

		<!-- about section start here -->
		<section class="about-section bg_img relative padding-tb">
			<div class="container">
				<div class="row align-items-center mb-15">
					<div class="col-lg-6 col-12">
						<div class="about-thumb">
							<img src="assets/images/products/product/sindur.jpg" alt="about-thumb">
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-wrapper">
							<div class="about-title">
								<h2><span class="d-lg-block"><?php echo $row[1];?> </span></h2>
								<p><?php echo $row[2];?></p>
							</div>
							<div class="about-content">
								<ul class="lab-ul list-group">
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[3];?></li>
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[4];?></li>
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[5];?></li>
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[6];?></li>
									<li class="list-group-item py-1 px-0 border-none"><?php echo $row[7];?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- about section ending here -->

		<!-- Feature section start here -->
		<section class="feature-section">
			<div class="container">
				<div class="row text-center justify-content-center">
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/feature/05.png" alt="Feature Image">
								</div>
								<div class="lab-content">
									<h6>Products Range</h6>
									<p>Conveniently customize recaptiualize
										focused inter without globally </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/feature/02.png" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>Quality Matters</h6>
									<p>Conveniently customize recaptiualize
										focused inter without globally </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/feature/03.png" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>Free Shipping</h6>
									<p>Conveniently customize recaptiualize
										focused inter without globally </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/feature/04.png" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>Customer Satisfaction</h6>
									<p>Conveniently customize recaptiualize
										focused inter without globally </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature section ending here -->

		<!--History section start here -->
		<section class="history-section padding-tb">
			<div class="container">
				<div class="history-header section-header text-left">
					<h2>History</h2>
					<h2>Puja Traditions</h2>
				</div>
				<div class="history-content">
					<div class="row mb-15">
						<div class="col-xl-8 col-12">
							<div class="history-items">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="lab-item">
											<div class="lab-inner">
												<div class="lab-thumb">
													<img src="assets/images/about/history/01.jpg" alt="history-img">
												</div>
												<div class="lab-content">
													<!-- <div class="history-left">
														<h2 class="mb-0">Since</h2>
														<h2 class="mb-lg-0"><span>1985</span></h2>
													</div> -->
													<div class="history-right">
														<p class="mb-0">Continually productize compelling quality elated them
															setting up to website with all them imperdiet molestieo continually
															productize compelling quality for packedq for packed with all elated
															themes setting up to website and creating pages compelling quality
															for packed with all elated themes setting up to website .
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="lab-item">
											<div class="lab-inner">
												<div class="lab-thumb">
													<img src="assets/images/about/history/01.jpg" alt="history-img">
												</div>
												<div class="lab-content">
													<!-- <div class="history-left">
														<h2 class="mb-0">Since</h2>
														<h2 class="mb-lg-0"><span>1987</span></h2>
													</div> -->
													<div class="history-right">
														<p class="mb-0">Continually productize compelling quality elated them
															setting up to website with all them imperdiet molestieo continually
															productize compelling quality for packedq for packed with all elated
															themes setting up to website and creating pages compelling quality
															for packed with all elated themes setting up to website .
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="achievement text-center mt-lg-0">
								<div class="achievement-title">
									<h3>Our Achievement</h3>
								</div>
								<div class="achievement-content">
									<div class="row justify-content-center">
										<div class="col-xl-6 col-lg-3 col-md-3 col-6">
											<div class="lab-item">
												<div class="lab-inner text-center">
													<div class="lab-thumb mb-3">
														<img src="assets/images/about/history/achievement/01.png"
															alt="Customer">
													</div>
													<div class="lab-content">
														<h3><span class="counter">6,200</span></h3>
														<h5>Customers</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-3 col-md-3 col-6">
											<div class="lab-item">
												<div class="lab-inner text-center">
													<div class="lab-thumb mb-3">
														<img src="assets/images/about/history/achievement/02.png"
															alt="Customer">
													</div>
													<div class="lab-content">
														<h3><span class="counter">400</span>+</h3>
														<h5>Award Won</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-3 col-md-3 col-6">
											<div class="lab-item">
												<div class="lab-inner text-center">
													<div class="lab-thumb mb-3">
														<img src="assets/images/about/history/achievement/03.png"
															alt="Customer">
													</div>
													<div class="lab-content">
														<h3><span class="counter">50</span>+</h3>
														<h5>Volunteer</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-3 col-md-3 col-6">
											<div class="lab-item">
												<div class="lab-inner text-center">
													<div class="lab-thumb mb-3">
														<img src="assets/images/about/history/achievement/icon.png"
															alt="Customer">
													</div>
													<div class="lab-content">
														<h3><span class="counter">40</span>k+</h3>
														<h5>Puja</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="history-navigation mt-3">
									<div class="history-button-prev">
										<i class="fas fa-arrow-left"></i>
									</div>
									<div class="history-button-next">
										<i class="fas fa-arrow-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--History section end here -->

		<!-- testimonial Section start here -->
		<section class="testimonial-section padding-tb pt-0">
			<div class="container">
				<div class="row mb-15">
					<div class="col-12">
						<div class="section-header">
							<h3>What Client Say Our Puja </h3>
							<p>Conveniently customize proactive web services for leveraged interfaces without Globally </p>
						</div>
					</div>
					<div class="col-12">
						<div class="testimonial-content">
							<div class="row">
								<div class="col-lg-4">
									<div class="lab-item testi-item-2">
										<div class="lab-inner">
											<div class="testi-top">
												<div class="testi-t-thumb">
													<img src="assets/images/testimonial/01.jpg" alt="author-image">
												</div>
												<div class="testi-t-content">
													<a href="#">
														<h6>Jeson smith</h6>
													</a>
													<p>Founder & CEO</p>
													<div class="rating">
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
													</div>
												</div>
											</div>
											<div class="testi-bottom">
												<p><img class="q1" src="assets/images/testimonial/q1.png" alt='"'>
													Continually Onceptualizef Technically invs
													Professionally monetizeturkeyf Testingdu
													Frofessionally oe-enablfunctaizede-come
													rce Onceptualize Technically initiatives.
													<img class="q2" src="assets/images/testimonial/q2.png" alt='"'>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="lab-item testi-item-2">
										<div class="lab-inner">
											<div class="testi-top">
												<div class="testi-t-thumb">
													<img src="assets/images/testimonial/02.jpg" alt="author-image">
												</div>
												<div class="testi-t-content">
													<a href="#">
														<h6>Sahjahan Sagor</h6>
													</a>
													<p>Founder & CEO</p>
													<div class="rating">
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
													</div>
												</div>
											</div>
											<div class="testi-bottom">
												<p><img class="q1" src="assets/images/testimonial/q1.png" alt='"'>
													Continually Onceptualizef Technically invs
													Professionally monetizeturkeyf Testingdu
													Frofessionally oe-enablfunctaizede-come
													rce Onceptualize Technically initiatives.
													<img class="q2" src="assets/images/testimonial/q2.png" alt='"'>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="lab-item testi-item-2">
										<div class="lab-inner">
											<div class="testi-top">
												<div class="testi-t-thumb">
													<img src="assets/images/testimonial/03.jpg" alt="author-image">
												</div>
												<div class="testi-t-content">
													<a href="#">
														<h6>Alisha Kabir</h6>
													</a>
													<p>Founder & CEO</p>
													<div class="rating">
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
													</div>
												</div>
											</div>
											<div class="testi-bottom">
												<p><img class="q1" src="assets/images/testimonial/q1.png" alt='"'>
													Continually Onceptualizef Technically invs
													Professionally monetizeturkeyf Testingdu
													Frofessionally oe-enablfunctaizede-come
													rce Onceptualize Technically initiatives.
													<img class="q2" src="assets/images/testimonial/q2.png" alt='"'>
												</p>
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
		<!-- testimonial Section end here -->


<?php
include 'includefront/footer.php';
?>