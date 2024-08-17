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
                    <h4 class="card-title">Home</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="user" method="post" action="home_CRUD.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="slogan"  placeholder="Enter your Slogan">
                                     </div>
                                     <div class="col-sm-6">
                                        <input type="text" class="form-control" name="SloganText"  placeholder="your text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="desc1"  placeholder="Description1">
                                     </div>
                                     <!-- <div class="col-sm-8">
                                        <input type="text" class="form-control" name="descText1"  placeholder="Write about your company">
                                    </div> -->
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="desc2"  placeholder="Description2">
                                     </div>
                                     <!-- <div class="col-sm-8">
                                        <input type="text" class="form-control" name="descText2"  placeholder="Write about your company">
                                    </div> -->
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="desc3"  placeholder="Description3">
                                     </div>
                                </div>
                               
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="desc4"  placeholder="Description3">
                                     </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="desc5"  placeholder="Description3">
                                     </div>
                                </div>
                                
                                <button type="submit" name="btnHome" class="btn btn-primary btn-user btn-block">
                                    Home page Setting
                                </button>
                                <hr>
                            </form>

                            <!-- <?php
                            
                            if(isset($_GET['res'])){
                                $res=$_GET['res'];
                                if($res==1){
                                    ?>
                                    <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>
                              Data has been updated sucessfully !!!
                              </strong>
                              
                              </div>
                                    <?php
                                }
                                else{
                                    ?>
                                    <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>
                              Fail to update data !!!
                              </strong>
                              
                              </div>
                                    <?php
                                }
                            }
                            ?> -->
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <?php
  include 'include/footer.php';
?>