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
<div class="container">
    <h2 class="text-center my-4">Payment status</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-foem-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
</div>
<!-- End Main Content-->

<!--Start contact us-->
<?php
include_once('contactUs.php');
?>
<!--End contact us-->




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