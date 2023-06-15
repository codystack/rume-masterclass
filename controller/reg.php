<?php
// Connect Database
require_once "config/db.php";


//Registration Query
if (isset($_POST['register_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $brandName = $conn->real_escape_string($_POST['brandName']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $regCode = 'RJMC'.rand(1000, 9999);


    $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_message_title'] = "User Already Exist!";
        $_SESSION['user_message'] = "Please contact admin modification and validation";
    }

    // Finally, insert details into database
    $query = "INSERT INTO users (email, brandName, phone, firstName, lastName, regCode) 
                VALUES('$email', '$brandName', '$phone', '$firstName', '$lastName', '$regCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['success_message_title']  = "Registration Successful👋";
        $_SESSION['success_message']    = "You're being redirected";
        $_SESSION['regCode'] = $regCode;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['brandName'] = $brandName;
    }else {
        $_SESSION['message_title']  = "Registration Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }

}