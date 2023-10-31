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

    <!-- <style>
        body {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .show-body {
            opacity: 1;
        }
    </style> -->
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->
        <?php echo view('layout/header'); ?>

        <!-- partial -->

        <div class="page-wrapper">
            <div class="page-content">
                <?php if ($dxutama == 'cerebral infarction (i63.9)') : ?>
                    <?= view('kelas1/cerebral-infarction'); ?>
                <?php elseif ($dxutama == 'intracerebral haemorrhage(I61.9)') : ?>
                    <?= view('kelas1/intracerebral-haemorrhage'); ?>
                <?php elseif ($dxutama == 'Diabetes Melitus Tipe 2 (E11.9)') : ?>
                    <?= view('kelas1/diabetes-melitus'); ?>
                <?php elseif ($dxutama == 'Hipertensi Esensial (I10)') : ?>
                    <?= view('kelas1/hipertensi-esensial'); ?>
                <?php elseif ($dxutama == 'HIV (B24)') : ?>
                    <?= view('kelas1/hiv'); ?>
                <?php elseif ($dxutama == 'Tuberculosis (A15.2)') : ?>
                    <?= view('kelas1/tuberculosis'); ?>
                <?php elseif ($dxutama == 'Henti Jantung, Cardiac Arrest (I46)') : ?>
                    <?= view('kelas1/henti-jantung'); ?>
                <?php elseif ($dxutama == 'Kejang Demam (R56.0)') : ?>
                    <?= view('kelas1/kejang-demam'); ?>
                <?php elseif ($dxutama == 'Perdarahan Post Partum (O72)') : ?>
                    <?= view('kelas1/perdarahan-post-partum'); ?>
                <?php elseif ($dxutama == 'Pre Eklampsia (014.9)') : ?>
                    <?= view('kelas1/pre-eklampsia'); ?>
                <?php else : ?>
                    <!-- Default view or error message if dxutama doesn't match any condition -->
                    <?= view('default'); ?>
                    <script>
                        alert('Silahkan pilih dx terlebih dahulu');
                    </script>
                <?php endif; ?>

            </div>
            <!-- partial:../../partials/_footer.html -->
        </div>

    </div>
    <!-- Maksimal harga DX Medis -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    var nilaisel1; // Declare the variable outside the event listener to make it accessible in both functions

    // Get the select element
    var selectOption2 = document.getElementById('selectOption2');
    var selectedOptionId = '';

    var sel1 = "<?php echo $dxutama; ?>"; // Use the PHP value directly

    // Calculate the initial nilai based on sel1
    switch (sel1) {
            case 'cerebral infarction (i63.9)':
                nilaisel1 = 3918600;
                break;
            case 'intracerebral haemorrhage(I61.9)':
                nilaisel1 = 3442900;
                break;
            case 'Diabetes Melitus Tipe 2 (E11.9)':
                nilaisel1 = 4663300;
                break;
            case 'Hipertensi Esensial (I10)':
                nilaisel1 = 2708200;
                break;
            case 'HIV (B24)':
                nilaisel1 = 4599400;
                break;
            case 'Tuberculosis (A15.2)':
                nilaisel1 = 5600200;
                break;
            case 'Henti Jantung, Cardiac Arrest (I46)':
                nilaisel1 = 3774900;
                break;
            case 'Kejang Demam (R56.0)':
                nilaisel1 = 3535900;
                break;
            case 'Perdarahan Post Partum (O72)':
                nilaisel1 = 2422600;
                break;
            case 'Pre Eklampsia (014.9)':
                nilaisel1 = 2801300;
                break;
            default:
                nilaisel1 = 0;
                break;
    }

    // Get the initial value of klaiminacbg
    // var klaiminacbgValue = nilaisel1;

    // Update the p element with the initial calculated value
    var klaiminacbg = document.getElementById('klaiminacbg');
    klaiminacbg.textContent = formatRupiah(nilaisel1);

    function formatRupiah(value) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(value);
    }

    // Function to calculate the total sum and display an alert if it reaches the 'nilaisel1' value
    function calculateSum() {
        var checkboxes = document.getElementsByTagName("input");
        var totalSum = 0;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                totalSum += biaya;
            }
        }

        var totalRupiah = formatRupiah(totalSum);

        document.getElementById("totalSum").innerHTML = "" + totalRupiah;

        if (totalSum >= (nilaisel1 + nilai)) { // Check if totalRupiah is greater than or equal to (nilaisel1 + nilai)
            Swal.fire({
                icon: 'warning',
                title: 'Total biaya sudah mencapai Klaim INA CBGS ' + formatRupiah(nilaisel1 + nilai) + '!',
                text: '',
                confirmButtonText: 'OK'
            });
        }
    }

    // Add an event listener to the second select element
    selectOption2.addEventListener('change', function() {
        // Get the selected option id
        var newSelectedOptionId = this.options[this.selectedIndex].id;

        // Check if a new option is selected and it's different from the current selection
        if (newSelectedOptionId && newSelectedOptionId !== selectedOptionId) {
            // Calculate the nilai based on the newSelectedOptionId
            switch (newSelectedOptionId) {
                case 'hemiplegi':
                nilai = 5324400;
                break;
            case 'congestive-heart-failure':
                nilai = 4719100;
                break;
            default:
                nilai = 0;
                break;
            }

            // Update the p element with the new calculated value
            klaiminacbgValue = nilai + nilaisel1;
            klaiminacbg.textContent = formatRupiah(klaiminacbgValue);

            // Update the selectedOptionId to the new selection
            selectedOptionId = newSelectedOptionId;

            // Call the calculateSum function to update the totalSum
            calculateSum();
        }
    });

</script>
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