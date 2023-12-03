<!-- JAVASCRIPT -->
<script src="<?= base_url('public/assets/libs/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('public/assets/libs/metismenu/metisMenu.min.js') ?>"></script>
<script src="<?= base_url('public/assets/libs/simplebar/simplebar.min.js') ?>"></script>
<script src="<?= base_url('public/assets/libs/node-waves/waves.min.js') ?>"></script>
<!-- // toastr.min.js -->
<script src="<?= base_url('public/assets/js/toastr.min.js') ?>"></script>
<!-- App js -->
<script src="<?= base_url('public/assets/js/app.js') ?>"></script>

<script>
    $(document).ready(function() {
        <?php if (session()->getFlashdata('type')) { ?>
            toastr["<?= session()->getFlashdata('type') ?>"]("<?= session()->getFlashdata('message') ?>",
                "<?= session()->getFlashdata('title') ?>")

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        <?php } ?>
    });
</script>