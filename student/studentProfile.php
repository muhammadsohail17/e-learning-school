<?php
if(!isset($_SESSION)){
    session_start();
}

include_once("./stdInclude/header.php");
include_once("../dbConnection.php");

if(isset($_SESSION['is_login'])) {
    $stdLogEmail = $_SESSION['stdLogEmail'];
} else {
    echo "<script>location.href='../index.php';</script>";
}

$sql = "SELECT * FROM student WHERE std_email = '$std_email'";
$result = $conn->query($sql);
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $std_id = $row['std_id'];
    $std_name = $row['std_name'];
    $std_occ = $row['std_occ'];
    $std_img = $row['std_img'];
}

//Insert student
$result = [
    "status" => 0,
    "message" => null
];

if (isset($_REQUEST['updateStdNameBtn'])) {
    if ($_REQUEST['std_name'] === "") {
        //Msg displayed if required field is missing
        $passMsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    } else {
        $std_name = filter_var($_REQUEST['std_name'], FILTER_SANITIZE_STRING);
        $std_occ = filter_var($_REQUEST['std_occ'], FILTER_SANITIZE_STRING);
        $std_img = $_FILES['std_img']['name'];
        $std_img_temp = $_FILES['std_img']['tmp_name'];
        $img_folder = '../images/students/'. $std_img;
        move_uploaded_file($std_img_temp, $img_folder);
        $sql = "UPDATE student SET std_name = '$std_name', std_occ = '$std_occ', std_img = '$img_folder' WHERE std_email = '$std_email'";
        if($conn->query($sql) === TRUE) {
            $passMsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        } else {
            $passMsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
        }
    }
} else {
    
}
?>

<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="std_id">Student ID</label>
            <input type="text" class="form-control" id="std_id" name="std_id" value="<?php if(isset($std_id)) {
                echo $std_id; }?>" readonly>
        </div>
        <div class="form-group">
            <label for="std_name">Name</label>
            <input type="text" class="form-control" id="std_name" name="std_name" value="<?php if(isset($std_name)) {
                echo $std_name; }?>">
        </div>
        <div class="form-group">
            <label for="std_email">Email</label>
            <input type="email" class="form-control" id="std_email" name="std_email" value="<?php if(isset($std_email)) {
                echo $std_email; }?>" readonly>
        </div>
        <div class="form-group">
            <label for="std_occ">Occupation</label>
            <input type="email" class="form-control" id="std_occ" name="std_occ" value="<?php if(isset($std_occ)) {
                echo $std_occ; }?>" readonly>
        </div>
        <div class="form-group">
            <label for="std_img">Upload Image</label>
            <input type="file" class="form-control-file" id="std_img" name="std_img">
        </div>
        <button type="submit" class="btn btn-primary" name="updateStdNameBtn">Update</button>
        <?php if(isset($passMsg)) {echo $passMsg;}?>
    </form>
</div>

<?php
include_once("./stdInclude/footer.php");
?>