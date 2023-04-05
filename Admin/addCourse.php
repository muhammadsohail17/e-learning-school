<!-- Header -->
<?php
    include_once ("../common/adminHeader.php");
    include_once ("../dbConnection.php");

    // $result = [
    //     "message" => null
    // ];

    if (isset($_REQUEST['courseSubmitBtn'])) {
        //checking for empty fileds
        if ($_REQUEST['course_name'] === "" || $_REQUEST['course_desc'] === "" ||
        $_REQUEST['course_author'] === "" || $_REQUEST['course_duration'] === "" ||
        $_REQUEST['course_original_price'] === "" || $_REQUEST['course_price'] === "" ||
        $_REQUEST['course_img'] === "") {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        } else {
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

            $sql = "INSERT INTO `course`(`course_name`, `course_desc`, `course_author`,
             `course_img`, `course_duration`, `course_price`, `course_origional_price`)
             VALUES ('".mysqli_real_escape_string($conn, $course_name)."',
             '".mysqli_real_escape_string($conn, $course_desc)."',
             '".mysqli_real_escape_string($conn, $course_author)."',
             '".mysqli_real_escape_string($conn, $img_folder)."',
             '".mysqli_real_escape_string($conn, $course_duration)."',
             '".mysqli_real_escape_string($conn, $course_price)."',
             '".mysqli_real_escape_string($conn, $course_original_price)."')";
             try {
                if ($conn->query($sql) === true) {
                    // $result['message'] = "<div class='alert alert-danger col-sm-6 ml-5 mt-2'> Unable to add Course!</div>";
                    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Added Successfully</div>';
                } else {
                    // $result['message'] = "<div class='alert alert-danger col-sm-6 ml-5 mt-2'> Unable to add Course!</div>";
                    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"> Unable to add Course</div>';
                }
            } catch (Exception $ex) {
                echo json_encode("Error executing DB update. " . $ex->getCode() . " - " . $ex->getMessage());
            }
        }
    }
?>

<?php
include_once("./courseForm.php");
?>

<!-- Footer -->
<?php
    include_once("../common/adminFooter.php");
?>