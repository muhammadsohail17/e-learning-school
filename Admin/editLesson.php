<!-- Header -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
    include_once ("../common/adminHeader.php");
    include_once ("../dbConnection.php");

    if (isset($_SESSION['is_admin_login'])) {
        $adminEmail = $_SESSION['adminLogEmail'];
    } else {
        echo "<script>location.href='../index.php'; </script>";
    }
    
//update
    if (isset($_REQUEST['requpdate'])) {
        //checking for Empty fileds
        if ($_REQUEST['lesson_id'] === "" || $_REQUEST['lesson_name'] === "" || $_REQUEST['lesson_desc'] === "" ||
        $_REQUEST['course_id'] === "" || $_REQUEST['course_name'] === "") {
            //msg displayed required Field is missing
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        } else {
            //Assigning User values to Variable
            $lesson_id = filter_var($_REQUEST['lesson_id'], FILTER_SANITIZE_NUMBER_INT);
            $lesson_name = filter_var($_REQUEST['lesson_name'], FILTER_SANITIZE_STRING);
            $lesson_desc = filter_var($_REQUEST['lesson_desc'], FILTER_SANITIZE_STRING);
            $course_id = filter_var($_REQUEST['course_id'], FILTER_SANITIZE_NUMBER_INT);
            $course_name = filter_var($_REQUEST['course_name'], FILTER_SANITIZE_STRING);
            $lesson_link = '../lessonvid/'. $_FILES['lesson_link']['name'];

            $sql = "UPDATE lesson SET lesson_id = '".mysqli_real_escape_string($conn, $lesson_id)."',
            lesson_name = '".mysqli_real_escape_string($conn, $lesson_name)."',
            lesson_desc = '".mysqli_real_escape_string($conn, $lesson_desc)."',
            course_id = '".mysqli_real_escape_string($conn, $course_id)."',
            course_name = '".mysqli_real_escape_string($conn, $course_name)."',
            lesson_link = '".mysqli_real_escape_string($conn, $lesson_link)."'
            WHERE lesson_id = '$lesson_id'";
             
             try {
                if ($conn->query($sql) === true) {
                    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
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
    <h3 class="text-center">Update Lessson Details</h3>
    <?php
    if (isset($_REQUEST['edit'])) {
        $sql = "SELECT * FROM `lesson` WHERE lesson_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="lesson_id">Lesson ID</label>
            <input type="text" class="form-control" id="lesson_id" name="lesson_id" value="<?php
            if (isset($row['lesson_id'])) {
                echo $row['lesson_id'];
            }
            ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php
            if (isset($row['lesson_name'])) {
                echo $row['lesson_name'];
            }
            ?>">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Course Description</label>
            <textarea class="form-control" id="lesson_desc" name="lesson_desc" row=2 ><?php
            if (isset($row['lesson_desc'])) {
                echo $row['lesson_desc'];
            }
            ?></textarea>
        </div>
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php
            if (isset($row['course_id'])) {
                echo $row['course_id'];
            }
            ?>">
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php
            if (isset($row['course_name'])) {
                echo $row['course_name'];
            }
            ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_link">Lesson Link</label>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php
            if (isset($row['lesson_link'])) {
                echo $row['lesson_link'];
            }
            ?>" allowfullscreen title="video"></iframe>
            </div>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
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