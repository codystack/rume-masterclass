<?php
//Connect Database
include ('../config/db.php');

session_start();
if (!isset($_SESSION['email'])) {
    header('location: ./');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ./");
}

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="ThankGod Okoro">

    <link rel="icon" href="./assets/images/favicon.png" type="image/png" /> 

    <link rel="stylesheet" href="./assets/css/lib.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/font/stylesheet.css" />
    <link href="./assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <title>Admin Dashboard :: Rume John&trade;</title>
</head>

<body>