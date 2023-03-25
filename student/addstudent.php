<?php
include_once("../dbConnection.php");

if(isset($_POST['std_name']) && isset($_POST['std_email']) && isset($_POST['std_password'])) {
    $std_name = $_POST['std_name'];
    $std_email = $_POST['std_email'];
    $std_password = $_POST['std_password'];

    $sql = "INSERT INTO student (std_name, std_email, std_password) VALUES ('$std_name', '$std_email', '$std_password')";

    if($conn->query($sql) == true) {
        echo json_encode("Ok");
    } else {
        echo json_encode("Fialed");
    }
}
?>