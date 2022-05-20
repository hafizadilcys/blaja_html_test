<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Client Panel</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="images/logo_ugi.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <div class="body-container">

 <!-- Dashboard Basics -->
<div class="dashboard">
    <aside class="dashboard-aside">
        <div class="dashboard-aside-close"><i class="fas fa-times"></i></div>
        <div class="dashboard-aside-top">
            <div class="dashboard-logo"><img src="images/logo.png" alt=""></div>
            <div class="dashboard-nav">
                <ul>
                    <li class='active'><a href="dashboard.php"><i class="fas fa-th-large"></i> Dashboard</a></li>
                    <li><a href="upload-courses.php"><i class="fas fa-cloud-upload-alt"></i> Upload Courses</a></li>
                    <li><a href="your-courses.php"><i class="fas fa-book"></i> Your Courses</a></li>
                    <li><a href="students.php"><i class="fas fa-graduation-cap"></i> Students</a></li>
                    <li><a href="transaction-history.php"><i class="fas fa-comment-dollar"></i> Transaction History</a></li>
                    <li><a href="check-student-exam.php"><i class="fas fa-file-invoice"></i> Check Student Exam</a></li>
                    <li><a href="marks-for-quiz.php"><i class="fas fa-file-signature"></i> Marks for Quiz</a></li>
                    <li><a href="student-account.php"><i class="fas fa-user-graduate"></i> Student Account</a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-aside-bottom">
            <div class="dashboard-nav">
                <ul>
                    <li><a href="index.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
                </ul>
            </div>
        </div>

    </aside>
    <main class="dashboard-main">
        <div class="dashboard-header">
            <div class="search d-flex align-items-center me-2">
                <div class="mbl-menu  d-flex d-xl-none me-2"><i class="fas fa-bars"></i></div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="input-group-text"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="user-info">
                <div class="user-notification">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="user-meta">
                    <div class="profile-dp">
                        <img src="images/user.png" alt="">
                    </div>
                    <div class="meta d-none d-md-block">
                        <div class="name">Martin Alex</div>
                        <div class="designation">UI/UX Designer</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-content">

  