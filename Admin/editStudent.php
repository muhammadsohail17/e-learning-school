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
        if ($_REQUEST['std_id'] === "" || $_REQUEST['std_name'] === "" || $_REQUEST['std_email'] === "" ||
        $_REQUEST['std_password'] === "" || $_REQUEST['std_occ'] === "") {
            //msg displayed required Field is missing
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        } else {
            //Assigning User values to Variable
            $std_id = filter_var($_REQUEST['std_id'], FILTER_SANITIZE_NUMBER_INT);
            $std_name = filter_var($_REQUEST['std_name'], FILTER_SANITIZE_STRING);
            $std_email = filter_var($_REQUEST['std_email'], FILTER_SANITIZE_EMAIL);
            $std_password = filter_var($_REQUEST['std_password'], FILTER_SANITIZE_STRING);
            $std_occ = filter_var($_REQUEST['std_occ'], FILTER_SANITIZE_STRING);

            $sql = "UPDATE student SET std_id = '".mysqli_real_escape_string($conn, $std_id)."',
             std_name = '".mysqli_real_escape_string($conn, $std_name)."',
             std_email = '".mysqli_real_escape_string($conn, $std_email)."',
             std_password = '".mysqli_real_escape_string($conn, $std_password)."',
             std_occ = '".mysqli_real_escape_string($conn, $std_occ)."'
             WHERE std_id = '$std_id'";
             
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
    <h3 class="text-center">Update Student Detail</h3>
    <?php
    if (isset($_REQUEST['edit'])) {
        $sql = "SELECT * FROM `student` WHERE std_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="std_id">ID</label>
            <input type="text" class="form-control" id="std_id" name="std_id" value="<?php
            if(isset($row['std_id'])){
                echo $row['std_id'];
            }
            ?>" readonly>
        </div>
        <div class="form-group">
            <label for="std_name">Name</label>
            <input type="text" class="form-control" id="std_name" name="std_name" value="<?php
            if(isset($row['std_name'])){
                echo $row['std_name'];
            }
            ?>">
        </div>
        <div class="form-group">
            <label for="std_email">Email</label>
            <input type="text" class="form-control" id="std_email" name="std_email" value="<?php
            if(isset($row['std_email'])){
                echo $row['std_email'];
            }
            ?>">
        </div>
        <div class="form-group">
            <label for="std_password">Password</label>
            <input type="text" class="form-control" id="std_password" name="std_password" value="<?php
            if(isset($row['std_password'])){
                echo $row['std_password'];
            }
            ?>">
        </div>
        <div class="form-group">
            <label for="std_occ">Occupation</label>
            <input type="text" class="form-control" id="std_occ" name="std_occ" value="<?php
            if(isset($row['std_occ'])){
                echo $row['std_occ'];
            }
            ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if (isset($msg)) {echo $msg;}?>
    </form>
</div>



<!-- Footer -->
<?php
    include_once("../common/adminFooter.php");
?>