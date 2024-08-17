<?php
 include 'includefront/header.php';
 include '../Admin_Pandit/include/connection.php';

?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add User Pandit Category</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="user"  method="POST" action="CRUD_UserPanditCategory.php" enctype="multipart/form-data">
            <div class="form-group">
          
            <?php
           $catid="";
           $query = mysqli_query($con,"select * FROM User_Panditjii order by Userpanditjii_id desc limit 1");
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
                       
                        <input type="text" name="UserPanditjii_name" class="form-control" id="exampleInputName2" placeholder=" Panditjii Name" autocomplete="off">
                      </div>
                      <div class="form-group">
                       
                        <input type="text" name="UserPanditjii_charges" class="form-control" id="exampleInputName3" placeholder="Panditjii charges " autocomplete="off">
                      </div>
                      <div class="form-group">
                       
                        <input type="number" name="UserPanditjii_phoneno" class="form-control" id="exampleInputName4" placeholder="Panditjii phoneno" autocomplete="off">
                      </div>

                      <div class="form-group">
                       
                        <input type="file" class="form-control " id="exampleRepeatPassword" placeholder="select Image" name="Panditimage" required>
                      </div>
                      
                      <div class="form-group">
                      
                        <input type="text" name="UserPanditjii_experties" class="form-control" id="exampleInputName6" placeholder="Panditjii experties" autocomplete="off">
                      </div>

                     
        </div>
                      <Button type="submit" class="btn btn-primary btn-user btn-block" name="btnAddUser">
                    Add User Pandit
                </Button>
                     
                    </form>
                  </div>
                </div>
              </div>
          </div>
         
          <?php
  include 'includefront/footer.php';
?>