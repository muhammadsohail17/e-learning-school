<?php
if(!isset($_SESSION)){
    session_start();
}

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
                $result['message'] = "User Registered successfully!";
                $result['status'] = 1;
            } else {
                $result['message'] = "User Registration Failed!";
                $result['status'] = 0;
            }
        } catch (Exception $ex) {
            echo json_encode("Error executing DB update. " . $ex->getCode() . " - " . $ex->getMessage());
        }
    } else {
        $result['message'] = "You didn't enter all the required values.";
    }
}

//student Login verification
//check SESSION
if(!isset($_SESSION['is_login'])){
if (isset($_POST['checkLogemail']) && isset($_POST['stdLogEmail']) && isset($_POST['stdLogPassword'])) {
    $stdLogEmail = filter_var($_POST['stdLogEmail'], FILTER_SANITIZE_EMAIL);
    $stdLogPassword = filter_var($_POST['stdLogPassword'], FILTER_SANITIZE_STRING);

    $sql = "SELECT std_email, std_password FROM student WHERE std_email = '".mysqli_real_escape_string($conn, $stdLogEmail)."' AND std_password = '".mysqli_real_escape_string($conn, $stdLogPassword)."'";

    $res = $conn->query($sql);

    $row = $res->num_rows;

    if ($row === 1) {
        json_encode($result['status'] = 1);
        $_SESSION['is_login'] = true;
        $_SESSION['stdLogEmail'] = $stdLogEmail;
        $result['message'] = "User Login successfully";
    } elseif ($row === 0) {
        json_encode($result['status'] = 0);
        $result['message'] = "Invalid email or password";
    } else {
        $result['message'] = "There is some error.!";
    }
}
}

echo json_encode($result);
?>