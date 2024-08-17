<?php
include 'includefront/header.php';
include '../Admin_Pandit/include/connection.php';
?>
<!-- product category section start here -->
<!-- <section class="product-section relative padding-tb bg-ash">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-header"> -->


						<!-- Page Header Section Start Here -->
		<section class="page-header bg_img padding-tb">
			<div class="overlay"></div>
			<div class="container">
				<div class="page-header-content-area">
					<h4 class="ph-title">Puja</h4>
					<ul class="lab-ul">
						<li><a href="index.php">Home</a></li>
						<li><a class="active">puja</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

		<!-- about section start here -->
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
								<?php include 'Puja_retrive.php';?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br><br><br><br><br>
		  <!-- product category section ending here -->
		  <div class="contac-bottom">
					<div class="row justify-content-center">
					<div class="col-12">
						<div class="section-header">
							<h3>Book Pandit For puja</h3>
							<p>Conveniently customize proactive web services for leveraged
								interfaces without Globally</p>
						</div>
					</div>
						<div class="col-lg-12 ">
							<div class="contact-form">
								<form action="bookpandit.php" method="POST" id="commentform" class="comment-form">
									<input type="text" name="name" class="" placeholder="Name*" autocomplete="off">
									<input type="text" name="phone" class="" placeholder="phone*" autocomplete="off">
									<input type="email" name="email" class="" placeholder="Email*" autocomplete="off">
									<input type="text" name="subject" class="" placeholder="Subject*" autocomplete="off">
									<textarea name="address " id="role" cols="30" rows="9" placeholder="Address*" autocomplete="off"></textarea>
									<button type="submit"  name="bookpandit" class="lab-btn">
									<span>Submit Now</span>
									</button>
								</form>
						
							<?php
				if (isset($_GET['res'])) {
					$res = $_GET['res'];
					if ($res == 1) {
				?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Data has been Updated Successfully</strong>
						</div>
					<?php
					} else {
					?>
						<div class="alert alert-Danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times; </button>
							<strong>Fail to update</strong>
						</div>
				<?php
					}
				}
				?>
					</div>
						</div>
					</div>
				</div>
        
        <?php
include 'includefront/footer.php';
?>