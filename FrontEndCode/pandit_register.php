<?php

include 'includefront/header.php'; 
?>

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-12 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <!-- <img src="../../assets/images/logo.svg"> -->
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="phoneno" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <input type="Password" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="Password" class="form-control form-control-lg" id="exampleInputEmail1" placeholder=" Confirm Password">
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                      <option>Country</option>
                      <option>United States of America</option>
                      <option>United Kingdom</option>
                      <option>India</option>
                      <option>Germany</option>
                      <option>Argentina</option>
                    </select>
                  </div>
                 
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <!-- <div class="mt-3">
                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="../../Dashboard.php">SIGN UP</a>
                  </div> -->
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="pandit_login.php" class="text-primary">Login</a>
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
    <!-- container-scroller -->
    
<?php

include 'includefront/footer.php'; 
?>