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

    if (isset($_REQUEST['newStdSubmitBtn'])) {
        //checking for empty fileds
        if ($_REQUEST['std_name'] === "" || $_REQUEST['std_email'] === "" ||
        $_REQUEST['std_password'] === "" || $_REQUEST['std_occ'] === "" ) {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        } else {
            $std_name = filter_var($_REQUEST['std_name'], FILTER_SANITIZE_STRING);
            $std_email = filter_var($_REQUEST['std_email'], FILTER_SANITIZE_EMAIL);
            $std_password = filter_var($_REQUEST['std_password'], FILTER_SANITIZE_STRING);
            $std_occ = filter_var($_REQUEST['std_occ'], FILTER_SANITIZE_STRING);

            $sql = "INSERT INTO `student`(`std_name`, `std_email`, `std_password`,
             `std_occ`)
             VALUES ('".mysqli_real_escape_string($conn, $std_name)."',
             '".mysqli_real_escape_string($conn, $std_email)."',
             '".mysqli_real_escape_string($conn, $std_password)."',
             '".mysqli_real_escape_string($conn, $std_occ)."')";
             try {
                if ($conn->query($sql) === true) {
                    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Successfully</div>';
                } else {
                    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"> Unable to add Student</div>';
                }
            } catch (Exception $ex) {
                echo json_encode("Error executing DB update. " . $ex->getCode() . " - " . $ex->getMessage());
            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="std_name">Name</label>
            <input type="text" class="form-control" id="std_name" name="std_name">
        </div>
        <div class="form-group">
            <label for="std_email">Email</label>
            <input type="text" class="form-control" id="std_email" name="std_email">
        </div>
        <div class="form-group">
            <label for="std_password">Password</label>
            <input type="text" class="form-control" id="std_password" name="std_password">
        </div>
        <div class="form-group">
            <label for="std_occ">Occupation</label>
            <input type="text" class="form-control" id="std_occ" name="std_occ">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="newStdSubmitBtn" name="newStdSubmitBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if (isset($msg)) {echo $msg;}?>
    </form>
</div>

<!-- Footer -->
<?php
    include_once("../common/adminFooter.php");
?>