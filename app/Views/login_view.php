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

    <!-- Add SweetAlert2 library -->
    <!-- <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script> -->
    <script src="../../assets/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- core:css -->
    <!-- <link rel="stylesheet" href="../../../assets/vendors/core/core.css"> -->
    <link rel="stylesheet" href="../../noble/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <!-- <link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css"> -->
    <link rel="stylesheet" href="../../noble/fonts/feather-font/css/iconfont.css">

    <!-- <link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css"> -->
    <link rel="stylesheet" href="../../noble/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <!-- <link rel="stylesheet" href="../../../assets/css/demo1/style.css"> -->
    <link rel="stylesheet" href="../../noble/css/demo3/style.css">
    <!-- End layout styles -->
    <!-- <link rel="shortcut icon" href="../../../assets/images/favicon.png" /> -->
    <link rel='icon' href='img/Logo.png'>

    <style>
        body {
            background-image: url('../../img/Background4.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }

        .hide-body {
            opacity: 0;
        }

        .spinner-grow {
            display: none;
        }

        .loader {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        /* .loader {
            position: relative;
            display: flex;
        } */

        .loader:before,
        .loader:after {
            content: '';
            width: 15px;
            height: 15px;
            display: inline-block;
            position: relative;
            margin: 0 5px;
            border-radius: 50%;
            color: #65bfe6;
            background: currentColor;
            box-shadow: 50px 0, -50px 0;
            animation: left 1s infinite ease-in-out;
        }

        .loader:after {
            color: #e58c99;
            animation: right 1.1s infinite ease-in-out;
        }


        @keyframes right {

            0%,
            100% {
                transform: translateY(-10px)
            }

            50% {
                transform: translateY(10px)
            }
        }

        @keyframes left {

            0%,
            100% {
                transform: translateY(10px)
            }

            50% {
                transform: translateY(-10px)
            }
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div id="login_loading" class="loader" role="status" style="display: none;">
        <span class="sr-only"></span>
    </div>
    <div class="main-wrapper login-box" id="login-box" style="display:none">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">
                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">SINAPS</a>
                                        <h5 class="text-muted fw-normal mb-4">Sistem Terintegrasi dan Akurat Pasien RS</h5>
                                        <form method="post" action="<?php echo base_url('login'); ?>">
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" required class="form-control" autocomplete="current-password" placeholder="Password">
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" id="loginBtn" value="Login" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                                                    <i class="btn-icon-prepend" data-feather="log-in"></i>
                                                    Sign In
                                                </button>
                                            </div>
                                            <!-- <a href=" register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a> -->
                                        </form>

                                        <!-- Check for error message and show SweetAlert2 notification -->
                                        <?php
                                        $session = session();
                                        $error = $session->getFlashdata('error');
                                        if ($error) {
                                            echo '<script>
                                            Swal.fire({ 
                                            title: "Login Error",
                                            text: "' . $error . '",
                                            });
                                            </script>';
                                        } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- core:js -->
    <!-- <script src="../../../assets/vendors/core/core.js"></script> -->
    <script src="../../noble/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="../../noble/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../noble/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <!-- <script src="../../../assets/vendors/feather-icons/feather.min.js"></script> -->
    <script src="../../noble/vendors/feather-icons/feather.min.js"></script>

    <!-- <script src="../../../assets/js/template.js"></script> -->
    <script src="../../noble/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

    <!-- jQuery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE App -->
    <script src="../../noble/assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url('/assets/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="assets/dist/js/demo.js"></script> -->
    <!-- Page specific script -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to show the login loading spinner
            function showLoading() {
                $("#login_loading").fadeIn();
                $("#login-box").fadeOut();
            }

            // Function to hide the login loading spinner and show the login box with fade-out effect
            function hideLoading() {
                $("#login_loading").hide();
                $("#login-box").fadeIn(2000);
            }

            // Trigger the loading spinner when the page is loaded
            showLoading();

            // You can simulate an asynchronous login process here (e.g., using setTimeout)
            setTimeout(function() {
                // After the login process is complete, hide the loading spinner and show the login box
                hideLoading();
            }, 3000); // Replace 2000 with the time it takes to perform the actual login process
        });

        $(document).ready(function() {
            $("#loginBtn").on("click", function() {
                // Adding the hide-body class to fade out the login page
                $("body").addClass("hide-body");

                // Redirecting to the home page after a short delay
                setTimeout(function() {
                    window.location.href = "/";
                }, 500); // 500ms delay, matching the CSS transition time
            });
        });
    </script>

</body>

</html>