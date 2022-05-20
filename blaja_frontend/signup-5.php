<?php include 'includes/header-main.php' ?>
<div class="signup-page">
    <div class="container-fluid px-lg-5 py-3 border-bottom">
        <div class="nav d-flex align-items-center justify-content-between py-3">
        <a href='index.php' class="logo"><img src="images/logo-dark.png" width='140' alt=""></a>

            <div class="btn"><a href='signup.php' class="btn text-dark fw-bold">Sign In</a></div>
        </div>
     
    </div>
    <div class="container"> 
        <div class="signup-container my-2">
            <p class="steps">STEP 3 OF 3</p>
            <h4 class='fw-bold'>Set up your credit or debit card.</h4>
            <p class='mb-4'><img src="images/mastercard.png" width=30 alt=""> <img src="images/visa.png" width=30 alt=""> <img src="images/american-express.png" width=30 alt=""></p>
            <div class="form-group mb-3">
                <label for="" class='fw-bold mb-1'>First Name</label>
                <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group mb-3">
                <label for="" class='fw-bold mb-1'>Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group mb-3">
                <label for="" class='fw-bold mb-1'>Card Number</label>
                <input type="text" class="form-control" placeholder="Card Number">
            </div>
            <div class="form-group mb-3">
                <label for="" class='fw-bold mb-1'>Expiration Date (MM/YY)</label>
                <input type="text" class="form-control" placeholder="Expiration Date (MM/YY)">
            </div>
            <div class="form-group mb-3">
                <label for="" class='fw-bold mb-1'>Security Code (CVV)</label>
                <input type="text" class="form-control" placeholder="Security Code (CVV)">
            </div>
            <div class="alert alert-dark" role="alert">
                <div class="d-flex align-items-center">
                    <div class="col"><p class="fw-bold mb-1">Rs1,500/month</p><p class='mb-0'>Premium Plan</p></div>
                    <div class="col text-end fw-bold"><a href="signup-3.php">Change</a></div>
                </div>
            </div>
            <p class='bottom-text'>By checking the checkbox below, you agree to our Terms of Use, Privacy Statement, and that you are over 18. Netflix will automatically continue your membership and charge the monthly membership fee (currently Rs1,500) to your payment method until you cancel. You may cancel at any time to avoid future charges. </p>
            <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                    <label class="form-check-label" for="flexCheckChecked">
                      I Agree
                    </label>
                  </div>
            <a href="profiles.php" class="btn btn-site-red btn-lg d-block mb-4">Sign Up</a>
            
          
        </div>  
    </div> 
  
    <div class="footer ">
        <div class="container">
            <h3>Questions? Contact us.</h3>
            <div class="row">
                <div class="col-6 col-md-3 col-lg-2">
                    <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <ul>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <ul>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer-main.php' ?>