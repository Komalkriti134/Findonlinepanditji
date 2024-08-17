<?php

include 'includefront/header.php'; 
?>

<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper style=text-center">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-12 mx-auto">
              <div class="auth-form-light text-center p-5">
                <div class="brand-logo">
                  <!-- <img src="assets/images/product/02.jpg"> -->
                </div>
                <h4>Hello! Login Here</h4>
                <h6 class="font-weight-light  text-center">Sign in to continue.</h6>
                <form class="pt-3" enctype="multipart/form-data" method="post" action="Loginregister.php">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg"name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                  <Button type="submit"class="btn btn-primary btn-user btn-block" name="btnlogin">
                                    Login
                                </Button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="pandit_register.php" class="text-primary">Register here</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   
<?php

include 'includefront/footer.php'; 
?>