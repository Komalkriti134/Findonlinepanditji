<?php
include 'includefront/header.php';
include '../Admin_Pandit/include/connection.php';
?>

<?php
$proid=$_GET['proid'];
$row="";
$query = mysqli_query($con,"select * FROM  product where product_id='$proid'");
 if(mysqli_affected_rows($con)>0){
  $row=mysqli_fetch_array($query);
  }
?>  
		<!-- Page Header Section Start Here -->
		<section class="page-header bg_img padding-tb">
			<div class="overlay"></div>
			<div class="container">
				<div class="page-header-content-area">
					<h4 class="ph-title">Worship  Products Details</h4>
					<ul class="lab-ul">
						<li><a href="index.php">Home</a></li>
						<li><a class="active">Product Details</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

		<!-- Shop Page Section start here -->
		<section class="shop-single padding-tb">
			<div class="container">
				<div class="row justify-content-center mb-15">
					<div class="col-lg-10 col-12 sticky-widget">
						<div class="product-details">
							<div class="row align-items-center">
								<div class="col-md-6 col-12">
									<div class="product-thumb">
										<div class="swiper-container gallery-top">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="shop-item">
														<div class="shop-thumb">
															<img src="../Admin_Pandit/<?php echo $row[2];?>"style="width:70%">
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-12">
									<div class="post-content">
										<h4><?php echo $row[1];?></h4>
										<p class="rating">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											(3 review)
										</p>
										<h4>
										<?php echo $row[3];?>
										</h4>
										<h5>
											Product Description
										</h5>
										<p>
										<?php echo $row[5];?>
										</p>
										<form>
											<div class="select-product size">
												Product-Weight-
											<?php echo $row[4];?>
											</div>
											<div class="cart-plus-minus">
												<div class="dec qtybutton">-</div>
												<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
												<div class="inc qtybutton">+</div>
											</div>
											<div class="discount-code">
												<input type="text" placeholder="Enter Discount Code">
											</div>
					
										</form>
										<div class=" mt-3 mb-2">
					<a href="cart-page.php?proid=<?php echo $row[0];?>" class="lab-btn"><span>BUY NOW</span></a>
				</div>
									</div>
								</div>
							</div>
						</div>
						<div class="review">
							<ul class="agri-ul review-nav">
								<li class="desc" data-target="description-show">Description</li>
								<li class="rev active" data-target="review-content-show">Reviews 4</li>
							</ul>
							<div class="review-content review-content-show">
								<div class="review-showing">
									<ul class="agri-ul content">
										<li>
											<div class="post-thumb">
												<img src="assets/images/team/01.jpg" alt="shop">
											</div>
											<div class="post-content">
												<div class="entry-meta">
													<div class="posted-on">
														<a href="#">Britney Doe</a>
														<p>Posted on December 25, 2017 at 6:57 am</p>
													</div>
													<div class="rating">
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
												</div>
												<div class="entry-content">
													<p>Enthusiast build innovativ initiatives before lonterm high-impact
														awesome theme seo psd porta monetize covalent leadership after
														without resource.</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<img src="assets/images/team/02.jpg" alt="shop">
											</div>
											<div class="post-content">
												<div class="entry-meta">
													<div class="posted-on">
														<a href="#">Jonathan Doe</a>
														<p>Posted on December 25, 2017 at 6:57 am</p>
													</div>
													<div class="rating">
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
												</div>
												<div class="entry-content">
													<p>Enthusiast build innovativ initiatives before lonterm high-impact
														awesome theme seo psd porta monetize covalent leadership after
														without resource.</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<img src="assets/images/team/03.jpg" alt="shop">
											</div>
											<div class="post-content">
												<div class="entry-meta">
													<div class="posted-on">
														<a href="#">Mack Zucky</a>
														<p>Posted on December 25, 2017 at 6:57 am</p>
													</div>
													<div class="rating">
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
												</div>
												<div class="entry-content">
													<p>Enthusiast build innovativ initiatives before lonterm high-impact
														awesome theme seo psd porta monetize covalent leadership after
														without resource.</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<img src="assets/images/team/04.jpg" alt="shop">
											</div>
											<div class="post-content">
												<div class="entry-meta">
													<div class="posted-on">
														<a href="#">Jordi Albae</a>
														<p>Posted on December 25, 2017 at 6:57 am</p>
													</div>
													<div class="rating">
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
												</div>
												<div class="entry-content">
													<p>Enthusiast build innovativ initiatives before lonterm high-impact
														awesome theme seo psd porta monetize covalent leadership after
														without resource.</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="client-review">
										<div class="review-form">
											<div class="review-title">
												<h5>Add a Review</h5>
											</div>
											<form action="http://labartisan.net/demo/PoultryFarm/poultry-farm/action" class="row">
												<div class="col-md-4 col-12">
													<input type="text" name="name" placeholder="Full Name">
												</div>
												<div class="col-md-4 col-12">
													<input type="text" name="email" placeholder="Email Adress">
												</div>
												<div class="col-md-4 col-12">
													<div class="rating">
														<span class="rating-title">Your Rating : </span>
														<div class="rating">
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<textarea rows="8" placeholder="Type Here Message"></textarea>
												</div>
												<div class="col-12">
													<button class="defult-btn" type="submit">Submit Review</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="description">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
										exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
										irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
										pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
										deserunt mollit anim id est laborum.</p>
									<div class="post-item">
										<div class="post-thumb">
											<img src="assets/images/product/01.jpg" alt="shop">
										</div>
										<div class="post-content">
											<ul class="agri-ul">
												<li>
													Donec non est at libero vulputate rutrum.
												</li>
												<li>
													Morbi ornare lectus quis justo gravida semper.
												</li>
												<li>
													Pellentesque aliquet, sem eget laoreet ultrices.
												</li>
												<li>
													Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
												</li>
												<li>
													Donec a neque libero.
												</li>
												<li>
													Pellentesque aliquet, sem eget laoreet ultrices.
												</li>
												<li>
													Morbi ornare lectus quis justo gravida semper..
												</li>
											</ul>
										</div>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Shop Page Section ending here -->


<?php
include 'includefront/footer.php';
?>
	