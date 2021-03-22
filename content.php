<!DOCTYPE html>
<html lang="en">
    <?php echo $head; ?>

<body id="page-top">

    <!--page wrapper-->
    <div id="wrapper">

        <!--sidebar-->
        <?php echo $sidebar; ?>
        <!--End of sidebar-->

        <!--Content wrapper-->
        <div id="content-wrapper" class="d-filex filex-column">

            <!--Main Content-->
            <div id="content">

                <!--Topbar-->
                <?php echo $staopbar; ?>
                <!--End of Topbar-->

                <!--Begin page Content-->
                <?php echo $content; ?>
                <!-- / .container-fluid-->

            </div>
            <!--End of Main Content-->

            <!--footer-->
            <?php echo $footer; ?>
            <!--End of footer-->

        </div>
        <!--End of Content wrapper-->

    </div>
    <!--End of page wrapper-->

    <!--Scroll to  top Button-->
    <a class="scroll-to-top roundad" herf="$page-top">
        <i class="fas fa-angel-up"></i>
    </a>

    <!--logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModelLabel" aria-hidden="true">
        <div class="modal-dialog role " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-titel" id="exampleModalLabel">ready to Leave?</h5>
                    <button class="close" type="button" data-dismi="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismi="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!--Bootstrap core JavaScript-->
    <script src="<?php echo base_url ('asset/vendor/jquery/Jquery.min.js') ?>" ></script>
    <script src="<?php echo base_url ('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>" ></script>

    <!--Core plugin JavaScript-->
    <script src="<?php echo base_url ('asset/vendor/jquery-easing/Jquery.easing.min.js') ?>" ></script>

    <!--Custom scripts for all pages-->
    <script src="<?php echo base_url ('asset/vendor/js/sb-admin-2.min.js') ?>" ></script>

</body>
</html>