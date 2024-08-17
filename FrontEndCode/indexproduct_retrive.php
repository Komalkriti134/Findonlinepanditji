<?php

  $product=mysqli_query($con,"select * from   Product order by product_rate desc limit 4");
if(mysqli_affected_rows($con)){
    while($data=mysqli_fetch_array($product)){
        ?>
       
       <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
									<div class="product-item-2">
										<div class="product-inner">
											<div class="product-thumb">
                                            <img src="../Admin_Pandit/<?php echo $data[2];?>"style="width:100%">
											</div>
											<div class="product-content">
												<a href="#"><h6><?php echo $data[1];?></h6></a>
												<div class="rating">
													<i class="far fa-star"></i>
													<i class="far fa-star"></i>
													<i class="far fa-star"></i>
													<i class="far fa-star"></i>
													<i class="far fa-star"></i>
												</div>
												<h6 class="price"><?php echo $data[3];?></h6>
												<div class="cart-option">
													<a href="product-single.php?proid=<?php echo $data[0];?>" class="lab-btn"><span>Add To Cart</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
				
<?php
    }
}

?>