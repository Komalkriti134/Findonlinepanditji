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
					<h4 class="ph-title"> Shop</h4>
					<ul class="lab-ul">
						<li><a href="index.php">Home</a></li>
						<li><a class="active">Shop Cart</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

		<!-- Shop Cart Page Section start here -->
		<div class="shop-cart padding-tb">
			<div class="container">
				<div class="section-wrapper mb-15">
					<div class="cart-top">
						<table>
							<thead>
								<tr>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-item">
										<div class="p-thumb">
											<a href="#"><img src="../Admin_Pandit/<?php echo $row[2];?>"style="width:100%"></a>
										</div>
										<div class="p-content">
											<a href="#"><?php echo $row[1];?></a>
										</div>
									</td>
									<td><?php echo $row[3];?></td>
									<td>
										<div class="cart-plus-minus">
											<div class="dec qtybutton">-</div>
											<input class="cart-plus-minus-box" type="text" name="qtybutton" value="3">
											<div class="inc qtybutton">+</div>
										</div>
									</td>
									<td><?php echo $row[3];?></td>
									<td>
										<a href="#"><img src="assets/images/del.png" alt="product"></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="cart-bottom">
						
						<div class="shiping-box">
							<div class="row">
								<div class="col-12">
									<div class="calculate-shiping w-100">
										<h4>Calculate Shipping</h4>
										<form class="billing_form row" action="payment-proccess.php" method="POST" id="contactForm" name="instamojo_payment">


						<div class="form-group col-md-6">
							<label for="first">Full Name (Required)*</label>
							<input type="text" class="form-control" id="first" name="name" placeholder="Full Name"  autocomplete="off">
						</div>
						<div class="form-group col-md-6">
							<label for="last">Phone Number (Required)*</label>
							<input type="text" maxlength="10" class="form-control" id="last" name="mobile_number" placeholder="Phone Number" autocomplete="off">
						</div>

						<div class="form-group col-md-12">
							<label for="email">Email Id (Required)*</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter Email id" autocomplete="off">
						</div>
						<div class="form-group col-md-12">
							<label for="city">Town / City *</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Town /City" autocomplete="off">
						</div>
						<div class="form-group col-md-6">
							<label for="state1">State / Country *</label>
							<input type="text" class="product_select1" id="state" name="State" placeholder="State / Country" autocomplete="off">
						
						</div>
						<div class="form-group col-md-6">
							<label for="zip">Pincode / pin (Required)*</label>
							<input type="text" class="form-control" maxlength="06" id="zip" name="pin" placeholder="Pincode / pin"autocomplete="off">
						</div>
						<div class="form-group col-md-12">
							<label for="address">Address (Required)*</label>
							<textarea class="form-control" name="address" id="address" rows="1" placeholder="Address" Required></textarea>
						</div>
						<div class="form-group col-md-12">
							<label for="phone">Add Nearby Famous Shop/Mall/Landmark</label>
							<input type="text" class="form-control" id="landmark" name="landmark" placeholder="Add Nearby Famous Shop/Mall/Landmark" autocomplete="off">

							<input type="hidden" value="<?php echo $row[3]; ?>" class="form-control" name="amount">
						</div>
						<div class=" col-12">
									<div class="cart-overview">
										<h4>Cart Totals</h4>
										<ul>
											
											<li>
												<span class="pull-left">Shipping and Handling</span>
												<p class="pull-right">Free Shipping</p>
											</li>
											<li>
												<span class="pull-left">Order Total</span>
												<p class="pull-right"><?php echo $row[3];?></p>
											</li>
										</ul>
									</div>
								</div>
						
						<br><br><br>
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">DELIVER HERE</button>
						</div>
					</form>									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Shop Cart Page Section ending here -->

<?php
include 'includefront/footer.php';
?>
	


