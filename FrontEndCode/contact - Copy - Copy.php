<?php
include 'includefront/header.php';
?>

	

		<!-- Page Header Section Start Here -->
		<section class="page-header bg_img padding-tb">
			<div class="overlay"></div>
			<div class="container">
				<div class="page-header-content-area">
					<h4 class="ph-title">Contact us</h4>
					<ul class="lab-ul">
						<li><a href="index.php">Home</a></li>
						<li><a class="active">Contact us</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

		<!-- Contact Us Section Start Here -->
		<div class="contact-section padding-tb">
			<div class="container">
				<div class="contac-top">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-lg-6 col-12">
							<div class="contact-item">
								<div class="contact-icon">
									<i class="icofont-google-map"></i>
								</div>
								<div class="contact-details">
									<p>kallu chowk,Noora Hazaribagh</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-12">
							<div class="contact-item">
								<div class="contact-icon">
									<i class="icofont-phone"></i>
								</div>
								<div class="contact-details">
									<p>+6299096362,+8987548941</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-12">
							<div class="contact-item">
								<div class="contact-icon">
									<i class="icofont-envelope"></i>
								</div>
								<div class="contact-details">
									<p>komal@gmail.com www.panditjii.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contac-bottom">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-12">
							<div class="location-map">
								<div id="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.196988863968!2d85.3577806149859!3d23.988819984472393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f49c036234b4b5%3A0x35c7cccef50592b9!2sMatwari%20Chowk%2C%20Matwari%2C%20Hazaribagh%2C%20Jharkhand%20825301!5e0!3m2!1sen!2sin!4v1629384908702!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="contact-form">
							<form class="comment-form" action="Contact_Crud.php" method="POST" id="commentform"   autocomplete="off" enctype="multipart/form-data">	
									<input type="text" name="name" class="" placeholder="Name*" autocomplete="off">
									<input type="email" name="email" class="" placeholder="Email*" autocomplete="off">
									<input type="text" name="subject" class="" placeholder="Subject*" autocomplete="off">
									<textarea name="message" id="role" cols="30" rows="9" placeholder="Message*" autocomplete="off"></textarea>
									<button type="submit"name="btncontact" class="lab-btn">
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
			</div>
		</div>
		<!-- Contact Us Section ENding Here -->

<?php
include 'includefront/footer.php';
?>
	