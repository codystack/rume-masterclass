<?php
include "./auth/account.php";
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Virtuosic">

    <link rel="icon" href="assets/images/favicon.png" type="image/png" /> 

    <link rel="stylesheet" href="assets/css/lib.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/font/stylesheet.css" />

    <title>Admin Login :: Rume John&trade;</title>
</head>

<body>

    <section class="bg-black overflow-hidden">
        <div class="py-15 py-xl-10 d-flex flex-column container level-3 min-vh-100">
            <div class="row align-items-center justify-content-center my-auto">
                <div class="col-md-10 col-lg-8 col-xl-5">
                    <div class="text-center mb-3">
                        <a href="./">
                            <img src="assets/images/rume-logo-light.png" width="200" alt="Logo">
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white text-center pb-0">
                            <h5 class="fs-4 mb-1">Sign In</h5>
                            <p>Login using the correct credentials</p>
                        </div>
                        <div class="card-body bg-white">
                            <?php
                                if (isset($_SESSION['error_message'])) {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-message text-center">
                                            <?php
                                            echo $_SESSION['error_message'];
                                            session_destroy();
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                    unset($_SESSION['error_message']);
                                }
                            ?>
                            <?php
                                if (isset($_SESSION['success_message'])) {
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                        <div class="alert-message text-center">
                                            <?php echo $_SESSION['success_message']; ?>
                                        </div>
                                    </div>
                                    <?php
                                    unset($_SESSION['success_message']);
                                }
                            ?>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="form-floating mb-2">
                                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="d-grid mb-2">
                                    <button type="submit" name="login_btn" class="btn btn-lg btn-black">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="background background-overlay" style="background-image: url('assets/images/bg.jpg')">
        </figure>
    </section>



    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/index.js"></script>

</body>

</html>