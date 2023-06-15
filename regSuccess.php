<?php
session_start();

require_once "config/db.php";
if (!isset($_SESSION['email'])) {
    header('location: ./');
}
if (isset($_GET['close'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ./");
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Masterclass by Rume John Photography&trade;</title>
    <meta name="author" content="ThankGod Okoro">
	<meta name="description" content="Rume John is a Beauty portrait ,fashion and wedding photographer based in Nigeria.">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/vendor.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>

    <style>
        @supports (animation: grow .5s cubic-bezier(.25, .25, .25, 1) forwards) {
            .tick {
                stroke-opacity: 0;
                stroke-dasharray: 29px;
                stroke-dashoffset: 29px;
                animation: draw .5s cubic-bezier(.25, .25, .25, 1) forwards;
                animation-delay: .6s
            }

            .circle {
                fill-opacity: 0;
                stroke: #219a00;
                stroke-width: 16px;
                transform-origin: center;
                transform: scale(0);
                animation: grow 1s cubic-bezier(.25, .25, .25, 1.25) forwards;   
            }   
        }

        @keyframes grow {
            60% {
                transform: scale(.8);
                stroke-width: 4px;
                fill-opacity: 0;
            }
            100% {
                transform: scale(.9);
                stroke-width: 8px;
                fill-opacity: 1;
                fill: #219a00;
            }
        }

        @keyframes draw {
            0%, 100% { stroke-opacity: 1; }
            100% { stroke-dashoffset: 0; }
        }

    </style>

  </head>
  <body style="background-image:url(assets/images/bg2.jpg); background-repeat: no-repeat; background-size: cover;">

        <div class="image">
            <div class="container">
                <div class="row justify-content-center align-items-center vh-100">
                    <div class="col-md-12 col-lg-8">
                        <div class="boxed p-2 p-lg-3">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col text-center">
                                        <div class="svg-container">    
                                            <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                                <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                                                <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                                            </svg>
                                        </div>
                                        <p class="h4 mt-2 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="100">Registration Successful</p>
                                        <p class="h6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="100">Registration Code: <b><?php echo $_SESSION['regCode']; ?></b></p>
                                        <p class="mb-3 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">
                                            Hello, <b><?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?></b> you're about to join the biggest and most detailed Portrait Lighting and Retouching Masterclass by Rume John. Complete your registration by making payment with the account information below.
                                        </p>
                                        <p>
                                            <b>Account Name:</b> <br>Rume John
                                            <br><b>Account Number:</b> <br>0124017040
                                            <br><b>Bank:</b> <br>GTCO
                                        </p>
                                        <p>
                                        <b><span class="text-red">NB:</span></b> Send payment receipt and Registration Code <br>to <a href="https://wa.me/message/FU5MAU7XE7KUO1" class="text-dark">+234 916 138 3263</a> via WhatsApp.<br>Also make a screenshot or print this page for safe keep.
                                        </p>
                                        <div class="text-center pb-1 mt-15">
                                            <button type="button" class="btn btn-info text-white" onclick="window.print()">
                                                <span class="btn-inner--text">Print</span>
                                            </button>
                                            <a href="close" class="btn btn-danger text-white">
                                                <span class="btn-inner--text">Close</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/app.js"></script>

  </body>
</html>