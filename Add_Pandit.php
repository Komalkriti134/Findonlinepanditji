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
                    <h4 class="card-title">Add Pandit Category</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="user"  method="POST" action="CRUD_PanditCategory.php" enctype="multipart/form-data">
            <div class="form-group">
          
            <?php
           $catid="";
           $query = mysqli_query($con,"select * FROM Panditjii_Category order by panditjii_id desc limit 1");
           if(mysqli_affected_rows($con)>0){
            $row=mysqli_fetch_array($query);
            $catid=$row[0];
            $part1=substr($catid,0,6);
            $part2=substr($catid,6);
            if($part2<9){
                $part2++;
               $catid=$part1.'000'.$part2;
            }
            else if($part2<99){
                    $part2++;
              $catid= $part1.'00'.$part2;
              }
            else if($part2<999){
                    $part2++;
              $catid=$part1.'0'.$part2;
              }
            }
            else{
                $catid='PANDIT0001';
            }
           ?>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1"> Category ID</label> -->
                        <input type="text" class="form-control" value="<?php echo $catid;?>" name="Catid" id="exampleInputName1" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1"> Category Name</label> -->
                        <input type="text" name="Panditjii_name" class="form-control" id="exampleInputName2" placeholder=" Panditjii Name" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="Panditjii_charges" class="form-control" id="exampleInputName3" placeholder="Panditjii charges " autocomplete="off">
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="number" name="Panditjii_phoneno" class="form-control" id="exampleInputName4" placeholder="Panditjii phoneno" autocomplete="off">
                      </div>

                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="file" class="form-control " id="exampleRepeatPassword" placeholder="select Image" name="Panditimage" required>
                      </div>
                      
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="Panditjii_experties" class="form-control" id="exampleInputName6" placeholder="Panditjii experties" autocomplete="off">
                      </div>

                      <!-- <div class="form-group"> -->
            <!-- <textarea type="text" class="form-control " id="description" name="description" placeholder="Write about your puja" required></textarea>
            <script>
                CKEDITOR.replace("description");
            </script> -->
        </div>
                      <Button type="submit" class="btn btn-primary btn-user btn-block" name="btnAddpan">
                    Add Pandit
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