<?php
include 'components/adminheader.php';
require_once 'auth/profile.php';
?>

    <div class="offcanvas-wrap">

        <section class="py-8 bg-light">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 mx-auto">
                        <div class="card overflow-hidden bg-primary mb-5">
                            <div class="card-body inverted level-3">
                                <div class="row mb-5">
                                    <div class="col-lg-10">
                                        <span class="text-white eyebrow mb-1" id="greet"></span>
                                        <h2>Hello, <?php echo $_SESSION['firstName']; ?>!</h2>
                                    </div>
                                </div>
                            </div>
                            <img class="position-absolute top-100 start-100 translate-middle"
                            src="assets/images/svg/pattern.svg" alt="Image">
                        </div>

                        <section>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card bg-opaque-white">
                                        <div class="card-header">
                                            <div class="row g-2 g-xl-5 align-items-center">
                                                <div class="col-md-6">
                                                    <a href="summit-application" class="btn btn-with-icon btn-dark">
                                                        <i class="bi bi-arrow-left"></i> Go Back
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <h3 class="fs-6">Masterclass Registration</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $id = $_GET['id'];
                                                $select_query = "SELECT * FROM users WHERE id ='$id'";
                                                $result = mysqli_query($conn, $select_query);
                                                if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $id = $row['id'];
                                                    $firstName = $row['firstName'];
                                                    $lastName = $row['lastName'];
                                                    $email = $row['email'];
                                                    $phone = $row['phone'];
                                                    $brandName = $row['brandName'];
                                                    $instagram = $row['instagram'];
                                                    $regCode = $row['regCode'];
                                                    $dateCreated = $row['dateCreated'];
                                                    $date = strtotime($dateCreated);
                                        ?>
                                        <div class="card-body bg-white">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" required name="firstName" disabled value="<?php echo $firstName; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" required name="lastName" disabled value="<?php echo $lastName; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" required name="email" disabled value="<?php echo $email; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="tel" class="form-control" required name="phone" disabled value="<?php echo $phone; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="company" class="form-label">Brand Name</label>
                                                    <input type="text" class="form-control" required name="company" disabled value="<?php echo $brandName; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="company" class="form-label">Registration Code</label>
                                                    <input type="text" class="form-control" required name="company" disabled value="<?php echo $regCode; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="company" class="form-label">Registration Date</label>
                                                    <input type="text" class="form-control" required name="company" disabled value="<?php echo date('j F Y', $date); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            }
                                                }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>

    </div>


    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#quoteRequest').DataTable();
        } );
    </script>

</body>

</html>