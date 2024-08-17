<?php
  include 'include/header.php';
  include 'include/sidebar.php';
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Product</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="user"  method="POST" action="CRUD_Product.php" enctype="multipart/form-data">
            <div class="form-group">
          
            <?php
           $proid=$_GET['Proid'];
           $query = mysqli_query($con,"select * FROM product where product_id = '$proid'");
           if(mysqli_affected_rows($con)>0){
            $row=mysqli_fetch_array($query);
           }
           ?>
                       <div class="form-group">
                        <!-- <label for="exampleInputName1"> Category ID</label> -->
                        <input type="text" class="form-control" value="<?php echo $proid;?>" name="Proid" id="exampleInputName1" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1"> Category Name</label> -->
                        <input type="text" name="product_name" class="form-control" id="exampleInputName2" value="<?php echo $row[1];?>" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="file" class="form-control " id="exampleRepeatPassword" value="<?php echo $row[2];?>" name="product_photo" required>
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="product_rate" class="form-control" id="exampleInputName3" value="<?php echo $row[3];?>" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="product_weight" class="form-control" id="exampleInputName4" value="<?php echo $row[4];?>" autocomplete="off">
                      </div>
                      
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="product_code" class="form-control" id="exampleInputName6" value="<?php echo $row[6];?>" autocomplete="off">
                      </div>

                      <div class="form-group">
                     <textarea type="text" class="form-control " id="description" name="product_description" placeholder="Write about your puja" required ><?php echo $row[5];?></textarea>
                     <script>
                      CKEDITOR.replace("description");
                     </script>
                     </div>
                      <Button type="submit" class="btn btn-primary btn-user btn-block" name="btnupdpro">
                    Edit Product
                </Button>
                      <!-- <button class="btn btn-light">Cancel</button> -->
                    </form>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <?php
  include 'include/footer.php';
?>