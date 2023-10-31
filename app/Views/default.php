<?php echo view('script/script'); ?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Data Pasien</h3>

        <div class="card-tools">

        </div>
    </div>
    <form action="<?= base_url('insertceklist/save2'); ?>" method="post">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th style="text-align:center;">Nama Pasien</th>
                        <th style="text-align:center;">No. RM</th>
                        <th style="text-align:center;">Tgl. Masuk</th>
                        <th style="text-align:center;">Tgl. Keluar</th>
                        <th style="text-align:center;">DX Medis Utama</th>
                        <th style="text-align:center;">DX Medis Sekunder</th>
                        <th style="text-align:center;">ICD 10</th>
                        <th style="text-align:center;">ICD 9</th>
                        <th style="text-align:center;">Kelas BPJS</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td style="text-align:center;"><?php echo $nama_pasien; ?></td>
                        <td style="text-align:center;"><?php echo $nomr; ?></td>
                        <td style="text-align:center;"><?php echo $masuk_rs; ?></td>
                        <td style="text-align:center;">
                            <?php
                            // Get the selected date (assuming it's in the format 'Y-m-d')
                            $masuk_rs; // Replace this with your selected date

                            // Convert the selected date to a DateTime object
                            $dateTime = new DateTime($masuk_rs);

                            // Add 6 days to the selected date
                            $exitDate = $dateTime->modify('+6 days');

                            // Format the exit date as desired (e.g., 'Y-m-d')
                            $formattedExitDate = $exitDate->format('Y-m-d');

                            // echo "Selected Date: $selectedDate<br>";
                            echo "$formattedExitDate";
                            ?>
                        </td>
                        <td style="text-align:center;">
                            ---

                            <input disabled class="form-control" type="text" value="<?= $dxutama ? $dxutama : '' ?>" id="dxutamatext" style="display:none;">

                        </td>

                        <td style="text-align:center;">
                            ---
                        </td>
                        <td style=" text-align:center;">-
                        </td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;"><?php echo $kelas_bpjs; ?></td>

                    </tr>
            </table>