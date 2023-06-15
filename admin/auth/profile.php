<?php

// Connect database
include "../config/db.php";

    //Profile Update
    if(isset($_POST['update_profile_btn'])) {

        $firstName = $conn->real_escape_string($_POST['firstName']);
        $lastName = $conn->real_escape_string($_POST['lastName']);
        $email = $conn->real_escape_string($_POST['email']);

        $id = $_SESSION['id'];
        $sql=mysqli_query($conn,"SELECT * FROM admin where id='".$_SESSION['id']."'");
        $result=mysqli_fetch_array($sql);
        if($result>0)
        {
            $conn=mysqli_query($conn,"UPDATE admin SET firstName='$firstName', lastName='$lastName', firstName='$firstName', email='$email', where id='".$_SESSION['id']."'");
            $_SESSION['success_message'] = "Profile updated 👍";
            echo "<meta http-equiv='refresh' content='5; URL=account'>";
        }
        else
        {
            $_SESSION['error_message'] = "Error updating profile.".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='5; URL=account'>";
        }
    }