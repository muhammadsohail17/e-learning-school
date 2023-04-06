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
    $adminEmail = $_SESSION['adminLogEmail'];
    if (isset($_REQUEST['adminPassUpdatebtn'])) {
        if (($_REQUEST['admin_password'] === "")) {
            //msg displayed if required field is missing
            $passMsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
        } else {
            $sql = "SELECT * FROM `admin` WHERE admin_email = '$adminEmail'";
            $result = $conn->query($sql);
            if ($result->num_rows === 1) {
                $adminPassword = $_REQUEST['admin_password'];
                $sql = "UPDATE `admin` SET admin_password = '$adminPassword' WHERE admin_email = '$adminEmail'";
             try {
                if ($conn->query($sql) === true) {
                    $passMsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
                } else {
                    $passMsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"> Unable to Update</div>';
                }
            } catch (Exception $ex) {
                echo json_encode("Error executing DB update. " . $ex->getCode() . " - " . $ex->getMessage());
            }
        }
        }
    }
?>

<div class="col-sm-9 my-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php echo $adminEmail?>" readonly>
                </div>
                <div class="form-group">
                    <label for="admin_password">New Password</label>
                    <input type="text" class="form-control" id="admin_password" name="admin_password"
                      placeholder="New Password">
                </div>
                <button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdatebtn">Update</button>
                <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                <?php if (isset($passMsg)) {echo $passMsg;}?>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
    include_once("../common/adminFooter.php");
?>