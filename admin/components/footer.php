  <!-- footer -->
  <footer class="py-15 py-xl-10 bg-black inverted">
    <div class="container">
      <div class="row g-4 g-lg-5 mb-10">
        <div class="col-md-12 text-center">
          <a href="./" class="navbar-brand"><img src="assets/images/virtlogowhite.png" alt="Logo"></a>
        </div>
      </div>
      <div class="row align-items-center g-1 g-lg-6 text-muted">
        <div class="col-md-6 col-lg-6 order-lg-3 text-center text-md-end">
          <ul class="list-inline small">
            <li class="list-inline-item"><a href="" class="text-reset text-primary-hover">Terms of Use</a></li>
            <li class="list-inline-item ms-1"><a href="" class="text-reset text-primary-hover">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1 text-center text-md-start">
          <p class="small">© <script>document.write(new Date().getFullYear());</script> All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        if (isset($_SESSION['message'])) {
    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['message_title']; ?>",
                text: "<?php echo $_SESSION['message']; ?>",
                icon: "error",
                buttons: false,
                timer: 5000
            }).then(function() {
                window.location = "./fund-wallet";
            });
        </script>
    <?php
        unset($_SESSION['message']);
    }
    ?>

    <?php
        if (isset($_SESSION['success_message'])) {
            $id = $_GET['id'];
    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['success_message_title']; ?>",
                text: "<?php echo $_SESSION['success_message']; ?>",
                icon: "success",
                buttons: false,
                timer: 4000
            }).then(function() {
                window.location = "./quote";
            });
        </script>
    <?php
        unset($_SESSION['success_message']);
        }
    ?>

</body>

</html>