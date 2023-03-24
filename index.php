<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome css-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?
family=Montserrat:wght@100&family=Ubuntu:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
 <!-- Custom CSS -->
 <link rel="stylesheet" href="css/style.css">
    <title>iSchool</title>
</head>

<body>
<!-- Start Navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">iSchool</a>
  <span class="navbar-text">Learn and implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
   data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Courses</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Payment Status</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">My Profile</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Signup</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Feedback</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<!-- End Navigation -->

<!-- Start video background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
    <video playsinline autoplay muted loop>
        <source src="video/computers.mp4">
    </video>
    <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to iSchool</h1>
        <small class="my-contant">Learn and Implement</small><br>
        <a href="#" class="btn btn-danger mt-3">Get Started</a>
    </div>
</div>
<!-- End video background -->

<!-- Start text banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i>100+ online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fa-solid fa-users mr-3"></i>Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fa-regular fa-keyboard mr-3"></i>Lifetime access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fa-solid fa-dollar-sign mr-3"></i>Money Back Guarantee*</h5>
        </div>
    </div>
</div>
<!-- End text banner -->

<!-- Start Most Popular Course-->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>
    <!--Start Most Popular First Card-->
    <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px">
            <div class="card">
                <img src="images/laptop.jpg" class="card-img-top" alt="laptop"/>
                <div class="card-body">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text">Lorem ipsum dolor sit.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolder">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
        </div>
    </a>
    <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px">
            <div class="card">
                <img src="images/laptop.jpg" class="card-img-top" alt="laptop"/>
                <div class="card-body">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text">Lorem ipsum dolor sit.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolder">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
        </div>
    </a>
    <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px">
            <div class="card">
                <img src="images/laptop.jpg" class="card-img-top" alt="laptop"/>
                <div class="card-body">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text ">Lorem ipsum dolor sit.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolder">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
        </div>
    </a>
    </div>
<!--End Most Popular First Card-->
   <!--Start Most Popular Second Card-->
   <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/programming.png" class="card-img-top" alt="Python"/>
                <div class="card-body">
                    <h5 class="card-title">Learn Python</h5>
                    <p class="card-text">Lorem ipsum dolor sit.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 3000</del></small>
                    <span class="font-weight-bolder">&#8377 300</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
               </div>
            </div>
        </a>
        <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/programming.png" class="card-img-top" alt="Python"/>
                <div class="card-body">
                    <h5 class="card-title">Learn Python</h5>
                    <p class="card-text">Lorem ipsum dolor sit.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 3000</del></small>
                    <span class="font-weight-bolder">&#8377 300</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
               </div>
            </div>
        </a>
        <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/programming.png" class="card-img-top" alt="Python"/>
                <div class="card-body">
                    <h5 class="card-title">Learn Python</h5>
                    <p class="card-text">Lorem ipsum dolor sit.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 3000</del></small>
                    <span class="font-weight-bolder">&#8377 300</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
               </div>
            </div>
        </a>
   </div>
<!--End Most Popular Second Card-->
<div class="text-center m-2">
    <a class="btn btn-danger btn-sm" href="#">View All Course</a>
</div>
</div>
<!-- End Most Popular Course-->
    



<!-- Jquery and bootstrap Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>