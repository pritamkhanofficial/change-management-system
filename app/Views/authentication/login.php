<!doctype html>
<html lang="en">
<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 May 2023 17:17:57 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Login | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/assets/images/favicon.ico') ?>">

    <!-- Bootstrap Css -->
    <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->

    <link href="<?= base_url('public/assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/js/toastr.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('public/assets/css/app.min.css') ?>" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sign in to continue</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="<?= base_url('public/assets/images/profile-img.png') ?>" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?= base_url('public/assets/images/logo-light.svg') ?>" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="#" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?= base_url('public/assets/images/logo.svg') ?>" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">

                                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail');  ?></div>
                                <?php endif  ?>

                                <?php
                                $attributes = ['class' => 'form-horizontal', 'id' => 'loginForm'];
                                echo form_open('login', $attributes);
                                ?>

                                <div class="mb-3">
                                    <label for="username" class="form-label">username</label>
                                    <input type="username" name="username" class="form-control" id="username"
                                        placeholder="username" required>
                                    <span class="text-danger"><?= validation_show_error('username') ?></span>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <!-- <div class="input-group auth-pass-inputgroup"> -->
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter password" aria-label="Password"
                                        aria-describedby="password-addon" required>
                                    <br>
                                    <span class="text-danger"><?= validation_show_error('password') ?></span>
                                    <!-- <button class="btn btn-light " type="button" id="ppasswordassword-addon"><i
                                            class="mdi mdi-eye-outline"></i></button> -->
                                    <!-- </div> -->
                                </div>
                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit"
                                        value="submit" name="submit">login In</button>

                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end account-pages -->

            <!-- JAVASCRIPT -->
            <script src="<?= base_url('public/assets/libs/jquery/jquery.min.js') ?>"></script>
            <script src="<?= base_url('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
            <script src="<?= base_url('public/assets/libs/metismenu/metisMenu.min.js') ?>"></script>
            <script src="<?= base_url('public/assets/libs/simplebar/simplebar.min.js') ?>"></script>
            <script src="<?= base_url('public/assets/libs/node-waves/waves.min.js') ?>"></script>
            <!-- // toastr.min.js -->

            <!-- App js -->
            <script src="<?= base_url('public/assets/js/app.js') ?>"></script>
            <script src="<?= base_url('public/assets/js/toastr.min.js') ?>"></script>
</body>
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

</html>