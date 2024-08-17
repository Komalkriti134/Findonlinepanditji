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
                    <h4 class="card-title">Edit Pandit Category</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="user"  method="POST" action="CRUD_PanditCategory.php" enctype="multipart/form-data">
            <div class="form-group">
          
            <?php
           $catid=$_GET['Catid'];
           $query = mysqli_query($con,"select * FROM Panditjii_Category where panditjii_id = '$catid'");
           if(mysqli_affected_rows($con)>0){
            $row=mysqli_fetch_array($query);
           }
           ?>
                       <div class="form-group">
                        <!-- <label for="exampleInputName1"> Category ID</label> -->
                        <input type="text" class="form-control" value="<?php echo $catid;?>" name="Catid" id="exampleInputName1" readonly>
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1"> Category Name</label> -->
                        <input type="text" name="Panditjii_name" class="form-control" id="exampleInputName2" value="<?php echo $row[1];?>" required>
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="Panditjii_charges" class="form-control" id="exampleInputName3" value="<?php echo $row[5];?>" required>
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="number" name="Panditjii_phoneno" class="form-control" id="exampleInputName4" value="<?php echo $row[3];?>" required>
                      </div>

                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="file" class="form-control " id="exampleRepeatPassword" value="<?php echo $row[2];?>" name="Panditimage" required>
                      </div>
                      
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Category Code</label> -->
                        <input type="text" name="Panditjii_experties" class="form-control" id="exampleInputName6" value="<?php echo $row[4];?>" required>
                      </div>

                      <!-- <div class="form-group"> -->
            <!-- <textarea type="text" class="form-control " id="description" name="description" placeholder="Write about your puja" required></textarea>
            <script>
                CKEDITOR.replace("description");
            </script> -->
        </div>
                      <Button type="submit" class="btn btn-primary btn-user btn-block" name="btnupdpan">
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