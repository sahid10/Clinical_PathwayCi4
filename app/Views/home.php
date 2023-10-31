<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Purchase: https://1.envato.market/nobleui_admin
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>S I N A P S</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="../../noble/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../noble/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../../noble/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="../../noble/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../../noble/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="../../noble/css/demo3/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="../../img/Logo.png" />

    <style>
        body {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .show-body {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->
        <?php echo view('layout/header'); ?>

        <!-- partial -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <?php echo view('table'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial:../../partials/_footer.html -->
        </div>
    </div>

    <?php echo view('layout/footer'); ?>

    <!-- core:js -->
    <script src="../../noble/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="../../noble/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../noble/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>

    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="../../noble/vendors/feather-icons/feather.min.js"></script>
    <script src="../../noble/js/template.js"></script>

    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="../../noble/js/data-table.js"></script>
    <script src="../../noble/js/datepicker.js"></script>
    <!-- End custom js for this page -->

    <script src="../../public/assets/plugins/jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Adding the show-body class to fade in the home page
            $("body").addClass("show-body");
        });
    </script>
</body>

</html>