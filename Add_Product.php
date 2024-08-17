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
                    <h4 class="card-title">Add Product</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="user"  method="POST" action="CRUD_Product.php" enctype="multipart/form-data">
            <div class="form-group">
          
            <?php
           $proid="";
           $query = mysqli_query($con,"select * FROM product order by product_id desc limit 1");
           if(mysqli_affected_rows($con)>0){
            $row=mysqli_fetch_array($query);
            $proid=$row[0];
            $part1=substr($proid,0,6);
            $part2=substr($proid,6);
            if($part2<9){
                $part2++;
               $proid=$part1.'000'.$part2;
            }
            else if($part2<99){
                    $part2++;
              $proid= $part1.'00'.$part2;
              }
            else if($part2<999){
                    $part2++;
              $proid=$part1.'0'.$part2;
              }
            }
            else{
                $proid='PANPRO0001';
            }
           ?>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1"> Category ID</label> -->
                        <input type="text" class="form-control" value="<?php echo $proid;?>" name="Proid" id="exampleInputName1" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1"> Category Name</label> -->
                        <input type="text" name="product_name" class="form-control" id="exampleInputName2" placeholder=" Product Name" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="file" class="form-control " id="exampleRepeatPassword" placeholder="select Image" name="product_photo" required>
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="product_rate" class="form-control" id="exampleInputName3" placeholder="Product rate" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="product_weight" class="form-control" id="exampleInputName4" placeholder="Product weight" autocomplete="off">
                      </div>
                      
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="product_code" class="form-control" id="exampleInputName6" placeholder="Product Code" autocomplete="off">
                      </div>

                      <div class="form-group">
                     <textarea type="text" class="form-control " id="description" name="product_description" placeholder="Write about your puja" required></textarea>
                     <script>
                      CKEDITOR.replace("description");
                     </script>
                     </div>
                      <Button type="submit" class="btn btn-primary btn-user btn-block" name="btnAddpro">
                    Add Product
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