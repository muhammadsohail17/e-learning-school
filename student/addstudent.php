<?php
include_once("../dbConnection.php");

if (isset($_POST['std_name']) && isset($_POST['std_email']) && isset($_POST['std_password'])) {
    // Clean the input from POST parameters. User can enter malicious content, so you should clean inputs.
    $std_name = filter_var($_POST['std_name'], FILTER_SANITIZE_STRING);
    $std_email = filter_var($_POST['std_email'], FILTER_SANITIZE_EMAIL);
    $std_password = filter_var($_POST['std_password'], FILTER_SANITIZE_STRING);

    // DB data should be escaped to properly store strings with apostrophes and quotes.
    $sql = "INSERT INTO `student` (`std_name`, `std_email`, `std_password`)
        VALUES ('" . mysqli_real_escape_string($conn, $std_name) . "', '" . mysqli_real_escape_string($conn, $std_email) . "', '" . mysqli_real_escape_string($conn, $std_password) . "')";


    try {
        if ($conn->query($sql) == true) {
            echo json_encode("Ok");
        } else {
            echo json_encode("Failed");
        }
    } catch (Exception $ex) {
        echo json_encode("Error executing DB update. " . $ex->getCode() . " - " . $ex->getMessage());
    }
} else {
    echo json_encode("You didn't enter all the required values.");
}
?>