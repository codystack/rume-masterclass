<?php
session_start();
// Connect database
include "./config/db.php";

// Login script
if (isset($_POST['login_btn'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);

    $password = sha1($password);
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;

        $_SESSION['success_message'] = "Login Successful, you're been redirected...";
        header('location: dashboard');
    }else {
        $_SESSION['error_message'] = "Incorrect Login Details".mysqli_error($conn);
        echo "<meta http-equiv='refresh' content='3; URL=./'>";
    }
}
