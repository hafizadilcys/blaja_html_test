<?php include 'includes/header-main.php' ?>
<div class="profiles-page">
  <div class="container-fluid px-lg-5">
    <div class="nav d-flex align-items-center justify-content-between py-3">
    <a href='index.php' class="logo"><img src="images/logo-white.png" width='140' alt=""></a>

    </div>
  </div>
  <div class="profiles-content d-flex flex-column justify-content-center align-items-center">
    <h2 class="text-white text-center mb-4">Manage Profiles</h2>
    <div class="profiles-list manage-list">
      <a href="profile.php" class="item"><img src="images/users/user1.png" alt=""> <p>Martin Alex</p> <span class="manage"><i class="fas fa-pencil-alt"></i></span></a>
      <a href="profile.php" class="item"><img src="images/users/user2.png" alt=""> <p>Martha</p> <span class="manage"><i class="fas fa-pencil-alt"></i></span></a>
      <a href="profile.php" class="item add-new"><img src="images/users/add-new.png" alt=""><p>Add Profile</p></a>
    </div>
    <a href="profiles.php" class="btn btn-outline-secondary text-uppercase px-3 mb-5">Done</a>
  </div>
</div>
<?php include 'includes/footer-main.php' ?>