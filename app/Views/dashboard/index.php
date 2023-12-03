<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Admin | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <?= view('component/css') ?>

</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= view('component/header') ?>
        <?= view('component/sidebar') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">


            <!-- End Page-content -->
            <!-- footer -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?= view('component/js') ?>
</body>

</html>