<?php
include_once("../dbConnection.php");

//Insert student
$result = [
    "status" => 0,
    "message" => null
];

if (isset($_POST['operation']) && $_POST['operation'] === "email_validation") {
    //Checking Email already registered
    if (isset($_POST['std_email'])) {
        $std_email = filter_var($_POST['std_email'], FILTER_SANITIZE_EMAIL);

        $sql = "SELECT std_email FROM student WHERE std_email = '".mysqli_real_escape_string($conn, $std_email)."'";
        
        $res = $conn->query($sql);
        $row = $res->num_rows;
        if ($row > 0) {
            $result['message'] = "Email is not available!";
        } else {
            $result['message'] = "Email is available for registration";
            $result['status'] = 1;
        }
    } else {
        $result['message'] = "You need to provide email";
    }
} else {
    if (isset($_POST['std_name']) && isset($_POST['std_email']) && isset($_POST['std_password'])) {
        // Clean the input from POST parameters. User can enter malicious content, so you should clean inputs.
        $std_name = filter_var($_POST['std_name'], FILTER_SANITIZE_STRING);
        $std_email = filter_var($_POST['std_email'], FILTER_SANITIZE_EMAIL);
        $std_password = filter_var($_POST['std_password'], FILTER_SANITIZE_STRING);
    
        // DB data should be escaped to properly store strings with apostrophes and quotes.
        $sql = "INSERT INTO `student` (`std_name`, `std_email`, `std_password`)
            VALUES ('" . mysqli_real_escape_string($conn, $std_name) . "', '" .
             mysqli_real_escape_string($conn, $std_email) . "', '" .
             mysqli_real_escape_string($conn, $std_password) . "')";
    
    
        try {
            if ($conn->query($sql) == true) {
                $result['message'] = "Ok";
                $result['status'] = 1;
            } else {
                $result['message'] = "Failed";
                $result['status'] = 0;
            }
        } catch (Exception $ex) {
            echo json_encode("Error executing DB update. " . $ex->getCode() . " - " . $ex->getMessage());
        }
    } else {
        $result['message'] = "You didn't enter all the required values.";
    }
}

echo json_encode($result);
?>