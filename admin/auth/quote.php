<?php
// Connect database
include "./config/db.php";

//Send Support Request
if (isset($_POST['quote_request_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $jobTitle = $conn->real_escape_string($_POST['jobTitle']);
    $company = $conn->real_escape_string($_POST['company']);
    $billingAddress = $conn->real_escape_string($_POST['billingAddress']);
    $address = $conn->real_escape_string($_POST['address']);
    $city = $conn->real_escape_string($_POST['city']);
    $country = $conn->real_escape_string($_POST['country']);
    $stateProvinceRegion = $conn->real_escape_string($_POST['stateProvinceRegion']);
    $postalZipCode = $conn->real_escape_string($_POST['postalZipCode']);
    $role = $conn->real_escape_string($_POST['role']);
    $companyIndustry = $conn->real_escape_string($_POST['companyIndustry']);
    $inquiryNature = $conn->real_escape_string($_POST['inquiryNature']);
    $budget = $conn->real_escape_string($_POST['budget']);
    $timeFrame = $conn->real_escape_string($_POST['timeFrame']);
    $requestUrgency = $conn->real_escape_string($_POST['requestUrgency']);
    $referral = $conn->real_escape_string($_POST['referral']);
    $anyComment = $conn->real_escape_string($_POST['anyComment']);


    $query = "INSERT INTO quote (firstName, lastName, email, phone, jobTitle, company, billingAddress, address, city, country, stateProvinceRegion, postalZipCode, role, companyIndustry, inquiryNature, budget, timeFrame, requestUrgency, referral, anyComment)"
        . "VALUES ('$firstName', '$lastName', '$email', '$phone', '$jobTitle', '$company', '$billingAddress', '$address', '$city', '$country', '$stateProvinceRegion', '$postalZipCode', '$role', '$companyIndustry', '$inquiryNature', '$budget', '$timeFrame', '$requestUrgency', '$referral', '$anyComment')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        $_SESSION['success_message_title'] = "Quote Request Sent";
        $_SESSION['success_message'] = "Your request fora quotation has been sent 👍";
    }
    else {
        $error=$conn->error;
        $_SESSION['message_title'] = "Error Occurred";
        $_SESSION['message'] = $error;
    }

}