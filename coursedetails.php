<!-- Start Navigation -->
<?php
include_once('./common/header.php');
?>
<!-- End Navigation -->
<!-- start course page banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="images/books.jpg" alt="books" style="height:500px;width:100%; object-fit:cover; box-shadow:10px;"/>
    </div>
</div>
<!-- End course page banner-->

<!-- Start Main Content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="./images/laptop.jpg" class="card-img-top" alt="programming"/>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Learn any thing</h5>
                <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, non!</p>
                <p class="card-text">Duration: 10 Days</p>
                <form action="" method="post">
                    <p class="card-text d-inline">Price: <small><del>$&#36 2000</del></small><span class="font-weight-bolder">$&#36 200</span></p>
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 ">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson No</th>
                    <th scope="col">Lesson Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Introduction</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- End Main Content-->



<!--start about us section-->
<?php
include_once('./common/aboutUs.php');
?>
<!--End about us section-->
<!--Start footer section -->
<?php
include_once('./common/footer.php');
?>
<!--End footer section -->