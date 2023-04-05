<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once("../dbConnection.php");

$result = [
    "status" => 0,
    "message" => null
];

//Admin Login verification
//check SESSION
if (!isset($_SESSION['is_admin_login'])) {
    if (isset($_POST['checkLogemail']) && isset($_POST['adminLogEmail']) && isset($_POST['adminLogPassword'])) {
        $adminLogEmail = filter_var($_POST['adminLogEmail'], FILTER_SANITIZE_EMAIL);
        $adminLogPassword = filter_var($_POST['adminLogPassword'], FILTER_SANITIZE_STRING);
    
        $sql = "SELECT `admin_email`, `admin_password` FROM `admin` WHERE
        admin_email = '".mysqli_real_escape_string($conn, $adminLogEmail)."'
         AND admin_password = '".mysqli_real_escape_string($conn, $adminLogPassword)."'";
    
        $res = $conn->query($sql);
    
        $row = $res->num_rows;
    
        if ($row === 1) {
            $result['status'] = 1;
            $_SESSION['is_admin_login'] = true;
            $_SESSION['adminLogEmail'] = $adminLogEmail;
            $result['message'] = "Admin Login successfully";
        } elseif (($row === 0)) {
            $result['status'] = 0;
            $result['message'] = "Invalid email or password";
        } else {
            $result['message'] = "DB error";
        }
    }}
    echo json_encode($result);
?>