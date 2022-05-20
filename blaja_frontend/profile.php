<?php include 'includes/header-main.php' ?>
<div class="profile-page">
    <div class="container-fluid px-lg-5 py-3 border-bottom">
        <div class="container">
            <div class="nav d-flex align-items-center justify-content-between py-3">
            <a href='index.php' class="logo"><img src="images/logo-dark.png" width='140' alt=""></a>

                <div class="btn"><a href='signin.php' class="btn text-dark fw-bold">Sign In</a></div>
            </div>
        </div>

    </div>
    <div class="container py-5 profile-card">
        <h2 class="fw-bold mb-5">Personal Info</h2>
        <div class="row mb-4">
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="form-group">
                            <label class='fw-bold mb-1' for="">Full Name</label>
                            <input type="text" class="form-control" placeholder='Full Name'>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="form-group">
                            <label class='fw-bold mb-1' for="">Email</label>
                            <input type="text" class="form-control" placeholder='Email'>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="form-group">
                            <label class='fw-bold mb-1' for="">Job Title</label>
                            <input type="text" class="form-control" placeholder='Job Title'>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="form-group">
                            <label class='fw-bold mb-1' for="">Phone Number</label>
                            <input type="text" class="form-control" placeholder='Phone Number'>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="form-group">
                            <label class='fw-bold mb-1' for="">Gender</label>
                            <label class="wrap w-100">
                                <select class="form-control " aria-label=".form-select-sm example">
                                    <option selected="">Course Category</option>
                                    <option value="Pre-school">Pre-school</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><label class='fw-bold mb-1' for="">Change Password</label></div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='Old Password'>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='New Password'>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='Retype New Password'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 mb-3 mb-sm-5 mb-lg-0">
                 <!--  -->
                 <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"><i class="fas fa-pencil-alt"></i></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(images/user.png);">
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <div class="d-flex">
            <a href="profiles.php" class="btn btn-rounded btn-outline-secondary btn-lg px-4 me-3">Cancel</a>
            <a href="profiles.php" class="btn btn-rounded btn-site-red btn-lg px-5">Save</a>
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
                        <li><a href="#">Contact us</a></li>
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