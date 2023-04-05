<!-- Header -->
<?php
    include_once ("../common/adminHeader.php");
    include_once ("../dbConnection.php");


//update
    if (isset($_REQUEST['requpdate'])) {
        //checking for Empty fileds
        if ($_REQUEST['course_name'] === "" || $_REQUEST['course_desc'] === "" ||
        $_REQUEST['course_author'] === "" || $_REQUEST['course_duration'] === "" ||
        $_REQUEST['course_original_price'] === "" || $_REQUEST['course_price'] === "" ||
        $_REQUEST['course_img'] === "") {
            //Checking id required Field is missing
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        } else {
            $course_id = filter_var($_REQUEST['course_id'], FILTER_SANITIZE_NUMBER_INT);
            $course_name = filter_var($_REQUEST['course_name'], FILTER_SANITIZE_STRING);
            $course_desc = filter_var($_REQUEST['course_desc'], FILTER_SANITIZE_STRING);
            $course_author = filter_var($_REQUEST['course_author'], FILTER_SANITIZE_STRING);
            $course_duration = filter_var($_REQUEST['course_duration'], FILTER_SANITIZE_STRING);
            $course_original_price = filter_var($_REQUEST['course_original_price'], FILTER_SANITIZE_NUMBER_INT );
            $course_price = filter_var($_REQUEST['course_price'], FILTER_SANITIZE_NUMBER_INT);
            // Check if uploaded file is an image
            $course_img = $_FILES['course_img']['name'];
            $course_img_temp = $_FILES['course_img']['tmp_name'];
            $img_folder = "../images/courseimg/".$course_img;
            move_uploaded_file($course_img_temp, $img_folder);

            $sql = "UPDATE `course` SET `course_id` = $course_id,`course_name` = $course_name,
             `course_desc` = $course_desc,`course_author` = $course_author,`course_img` = $course_img,
             `course_duration` = $course_duration,`course_price` = $course_price,
             `course_original_price` = $course_origional_price
             WHERE course_id = '$course_id'";
             
             try {
                if ($conn->query($sql) === true) {
                    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">UpdatedSuccessfully</div>';
                } else {
                    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"> Unable to Update</div>';
                }
            } catch (Exception $ex) {
                echo json_encode("Error executing DB update. " . $ex->getCode() . " - " . $ex->getMessage());
            }
        }
    }
?>




<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course</h3>
    <?php
    if(isset($_REQUEST['view'])) {
        $sql = "SELECT * FROM `course` WHERE course_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php
            if (isset($row['course_id'])) {
                echo $row['course_id'];
            };
            ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php
            if (isset($row['course_name'])) {
                echo $row['course_name'];
            };
            ?>">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" row=2 ><?php
            if (isset($row['course_desc'])) {
                echo $row['course_desc'];
            };
            ?></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author" value="<?php
            if (isset($row['course_author'])) {
                echo $row['course_author'];
            };
            ?>">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php
            if (isset($row['course_duration'])) {
                echo $row['course_duration'];
            };
            ?>">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Origional Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php
            if (isset($row['course_origional_price'])) {
                echo $row['course_origional_price'];
            };
            ?>">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php
            if (isset($row['course_price'])) {
                echo $row['course_price'];
            };
            ?>">
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <img src="<?php
            if (isset($row['course_img'])) {
                echo $row['course_img'];
            };
            ?>" alt="img" class="img-thumbnail">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
    </form>
</div>






<!-- Footer -->
<?php
    include_once("../common/adminFooter.php");
?>