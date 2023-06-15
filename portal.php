<?php
session_start();
include "./components/header.php";
require_once "./controller/reg.php";
?>

    <div class="viewport">
        <div class="image image-overlay" style="background-image:url(assets/images/bg.jpg)"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-md-6 col-lg-5">
                    <div class="accordion-group accordion-group-portal" data-accordion-group>
                        <div class="accordion" data-accordion>
                            <div class="accordion-control" data-control>
                                <h5>Join the masterclass</h5>
                            </div>
                            <div class="accordion-content" data-content>
                                <div class="accordion-content-wrapper">
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput3">First name</label>
                                            <input type="text" class="form-control" name="firstName" placeholder="John">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput3">Last name</label>
                                            <input type="text" class="form-control" name="lastName" placeholder="Doe">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput3">Email address</label>
                                            <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput3">Phone</label>
                                            <input type="tel" class="form-control" name="phone" placeholder="08012345678">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput4">Brand name</label>
                                            <input type="text" class="form-control" name="brandName" placeholder="johndoe photography">
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-block" name="register_btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/app.js"></script>

    <?php
        if (isset($_SESSION['success_message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['success_message_title']; ?>",
                    text: "<?php echo $_SESSION['success_message']; ?>",
                    icon: "success",
                    buttons: false,
                    timer: 4000
                }).then(function() {
                    window.location = "regSuccess";
                });
            </script>
            <?php
            unset($_SESSION['success_message']);
        }
    ?>

    <?php
        if (isset($_SESSION['message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['message_title']; ?>",
                    text: "<?php echo $_SESSION['message']; ?>",
                    icon: "error",
                    buttons: false,
                    timer: 3000
                }).then(function() {
                    window.location = "./";
                });
            </script>
            <?php
            unset($_SESSION['message']);
        }
    ?>

    <?php
        if (isset($_SESSION['user_message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['user_message_title']; ?>",
                    text: "<?php echo $_SESSION['user_message']; ?>",
                    icon: "error",
                    buttons: false,
                    timer: 5000
                }).then(function() {
                    window.location = "portal";
                });
            </script>
            <?php
            unset($_SESSION['user_message']);
        }
    ?>

  </body>
</html>