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
                                                    <a href="dashboard" class="btn btn-with-icon btn-dark">
                                                        <i class="bi bi-arrow-left"></i> Go Back
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <h3 class="fs-6">Designers Application</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body bg-white">
                                            <div class="table-responsive table-body">
                                                <table class="table" id="quoteRequest">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">SN</th>
                                                            <th scope="col">Brand Name</th>
                                                            <th scope="col">Date Registered</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col" class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $quote_id = 1;
                                                    $select_query = "SELECT * FROM designers ORDER BY date ASC";
                                                    $result = mysqli_query($conn, $select_query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                            $id = $row['id'];
                                                            $phoneNum = $row['phoneNum'];
                                                            $brandName = $row['brandName'];
                                                            $email = $row['email'];
                                                            $date= $row['date'];
                                                            $dateRegistered = strtotime($date);
                                                        echo "<tr>";
                                                            echo "<td>" .$quote_id. "</td>";
                                                            echo "<th scope=\"row\">" .$brandName. "</th>";
                                                            echo "<td>" .date('j F Y', $dateRegistered). "</td>";
                                                            echo "<td>" .$phoneNum. "</td>";
                                                            echo "<td class=\"text-center\">" 
                                                            ."<a href=\"view-designers-application?id=$id\" class=\"btn btn-with-icon btn-sm btn-dark\">
                                                                <i class=\"bi bi-eye\"></i> View
                                                            </a>".
                                                            "</td>";
                                                        "</tr>";
                                                        $quote_id++;
                                                        }
                                                    }else {
                                                        echo "<td><p>No Requests Yet!</p></td>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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