<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--bootstrap css-->
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome css-->
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?
family=Montserrat:wght@100&family=Ubuntu:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
 <!-- Custom CSS -->
 <link rel="stylesheet" href="../css/adminstyle.css">
    <title>Admin</title>
</head>
<body>
    <!-- start Top Navbar -->
    <Nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color:#225470";>
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">E-Learning
        <small class="text-white">Admin Area</small></a>
    </Nav>
    <!-- End Top Navbar -->

    <!-- Start Side Bar -->
    <div class="container-fluid mb-5" style="margin-top:40px;" >
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="adminDashboard.php">
                            <i class="fa-solid fa-gauge"></i>
                            Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">
                            <i class="fa-solid fa-person-chalkboard"></i>
                            Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lessons.php">
                            <i class="fa-solid fa-person-chalkboard"></i>
                            Lessons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="students.php">
                            <i class="fa-solid fa-users"></i>
                            Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sellReport.php">
                                <i class="fas fa-tachometer-alt"></i>
                                Sell Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="fa-solid fa-credit-card"></i>
                                Payment Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="fa-solid fa-comment"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminChangePassword.php">
                                <i class="fas fa-key"></i>
                                Change Passsword
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>