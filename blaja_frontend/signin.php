<?php include 'includes/header-main.php' ?>
<div class="signin-page">
    <div class="container-fluid px-lg-5">
        <div class="nav d-flex align-items-center justify-content-between py-3">
        <a href='index.php' class="logo"><img src="images/logo-white.png" width='140' alt=""></a>

        </div>
     
    </div>
    <div class="container"> 
        <div class="signin-container">
            <h2 class="mb-4">Sign In</h2>
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Email or phone number">
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control" placeholder="Email or phone number">
            </div>
            <a href='dashboard.php' class="btn btn-site-red btn-lg d-block mb-4">Sign In</a>
            <div class="d-flex justify-content-between mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Remember me
                    </label>
                  </div>

                  <p class="text-end"><a href="#">Need Help?</a></p>
            </div>

            <div class="signin-bottom">
                <div class="fb-login mb-3"><a href="#"><i class="fab fa-facebook"></i> Login with facebook</a></div>
                <p class="link">New to Blajaa? <a href="signup.php">Sign Up Now</a></p>
                <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repudiandae recusandae <a href="#">nam! Harum</a>.</p>
            </div>
        </div>
    </div> 
  
    <div class="footer">
        <div class="container">
            <h3>Questions? Contact us.</h3>
            <div class="row">
                <div class="col-6 col-md-3 col-lg-2">
                    <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <ul>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer-main.php' ?>