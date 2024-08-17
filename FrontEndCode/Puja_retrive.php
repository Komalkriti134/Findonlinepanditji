<?php

$pujaret=mysqli_query($con,"select * from Puja_Category");
if(mysqli_affected_rows($con)>0){
    while($data=mysqli_fetch_row($pujaret)){
        ?>

<div class="col-lg-4 col-sm-6 col-12">
									<div class="card border-none">
										<img src="../Admin_Pandit/<?php echo $data[4];?>"style="width:100%" class="card-img-top" alt="blog">
										<div class="card-body p-1 mt-3">
											<a href="#">
												<h6 class="card-title"><?php echo $data[1];?></h6>
											</a>
											<p class="card-text mb-3"><?php echo $data[5];?></p>
											<div class="text-btn">
												<!-- <a href="blog-single.php"><span>Read More</span></a> -->
											</div>
										</div>
									</div>
								</div>

   <?php
    }
}
?>