<!-- Start admin Header -->
<?php
include_once("../common/adminHeader.php");
?>
<!-- End admin Header -->
            <!-- Start Card -->
    <div class="col-sm-9 mt-5">
        <div class="row mx-5 text-center">
            <div class="col-sm-4 mt-5">
                <div class="card text-white bg-danger mb-3" style="max: width 18rem;">
                    <div class="card-header">Courses</div>
                    <div class="card-body">
                        <h4 class="card-title">5</h4>
                        <a class="btn text-white" href="#">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card text-white bg-success mb-3" style="max: width 18rem;">
                    <div class="card-header">Students</div>
                    <div class="card-body">
                        <h4 class="card-title">25</h4>
                        <a class="btn text-white" href="#">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card text-white bg-info mb-3" style="max: width 18rem;">
                    <div class="card-header">Sold</div>
                    <div class="card-body">
                        <h4 class="card-title">3</h4>
                        <a class="btn text-white" href="#">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 mx-5 text-center">
            <!-- Table -->
            <p class="bg-dark text-white p-2">Course Ordered</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Course ID</th>
                        <th scope="col">Student Email</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">22</th>
                            <td>100</td>
                            <td>sohail@gmail.com</td>
                            <td>30/3/23</td>
                            <td>2000</td>
                            <td><button class="btn btn-secondary" type="submit" name="delete" value="Delete">
                                <i class="fa-solid fa-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
    <!-- End Side Bar -->

    <!-- admin Footer -->
    <?php
    include_once("../common/adminFooter.php");
    ?>
    <!-- admin Footer -->