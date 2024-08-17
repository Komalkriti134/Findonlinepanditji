<?php
include 'includefront/header.php';
include '../Admin_Pandit/include/connection.php';
?>



<!-- Page Header Section Start Here -->
<section class="page-header bg_img padding-tb">
			<div class="overlay"></div>
			<div class="container">
				<div class="page-header-content-area">
					<h4 class="ph-title">Our Pandit</h4>
					<ul class="lab-ul">
						<li><a href="index.php">Home</a></li>
						<li><a class="active">Pandit jii</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->
             
        <!-- Feature section start here -->
		<section class="feature-section padding-tb">
			<div class="container">

				<div class="row text-center justify-content-center">
                <div class="col-12">
						<div class="section-header">
							<h3>OUR PANDIT JII</h3>
							<p>Conveniently customize proactive web services for leveraged
								interfaces without Globally </p>
						</div>
					</div>
                    <?php

                     $query=mysqli_query($con,"select * from   panditjii_category ");
                     if(mysqli_affected_rows($con)){
                     while($row=mysqli_fetch_array($query)){
                    ?>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">

                    
							<div class="lab-inner">
								<div class="lab-thumb">
                                <img src="../Admin_Pandit/<?php echo $row[2];?>"style="width:100%">
								</div>
								<div class="lab-content">
									<h6><?php echo $row[1];?></h6>
									<p><?php echo $row[4];?> </p>
								</div>
							</div>
    
						</div>
					</div>
                    <?php
                  }
                 }
              ?>
				</div>
			</div>

         
		</section>

		<!-- Feature section ending here -->
            
        <!-- product category section ending here -->
		<div class="contac-bottom">
					<div class="row justify-content-center">
					<div class="col-12">
						<div class="section-header">
							<h3>Book Pandit jii</h3>
							<p>Conveniently customize proactive web services for leveraged
								interfaces without Globally</p>
						</div>
					</div>
						<div class="col-lg-12 ">
							<div class="contact-form">
						
								<form class="comment-form" action="bookpandit.php" method="POST"  enctype="multipart/form-data">
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
					
        
<?php
include 'includefront/footer.php';
?>