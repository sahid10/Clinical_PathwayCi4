<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINAPS</title>

    <!-- Add SweetAlert2 library -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script> -->
    <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel='icon' href='img/Logo.png'>

    <style>
        body {
            background-image: url('img/Background3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .spinner-grow {
            display: none;
        }

        .loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        .loader {
            position: relative;
            display: flex;
        }

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
    <?php if (!empty($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <div id="login_loading" class="loader" role="status" style="display: none;">
        <span class="sr-only">Loading...</span>
    </div>
    <div id="login-box" class="login-box" style="display:none">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <a href="#" class="brand-link d-flex justify-content-center">
                <img src="img/Logo.png" alt="SINAPS LOGO" class="" style="opacity: .8; height:200px;">
            </a>
            <div class="card-header text-center">
                <a href="#" class="h5"><b>Sensus Terintegrasi dan Akurat Pasien Stroke</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> -->
                <form method="post" action="<?php echo base_url('login'); ?>">
                    <div class="input-group mb-3">
                        <input type="text" id="username" name="username" required class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" required class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" value="Login" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
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
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/jszip/jszip.min.js"></script>
    <script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url('/assets/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="assets/dist/js/demo.js"></script> -->
    <!-- Page specific script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    </script>
</body>

</html>