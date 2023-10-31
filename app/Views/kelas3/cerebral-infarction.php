<?php echo view('script/cerebral-infarction'); ?>

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
                            <select class="form-control" id="selectOption" name="dxutama">
                                <option value="" selected disabled>Pilih DX Medis Utama</option>
                                <option id="cerebral-infarction" <?= ($dxutama == 'cerebral infarction (i63.9)') ? 'selected' : '' ?> value="cerebral infarction (i63.9)">cerebral infarction (i63.9)</option>
                                <option id="intracerebral-haemorrhage" <?= ($dxutama == 'intracerebral haemorrhage(I61.9)') ? 'selected' : '' ?> value="intracerebral haemorrhage(I61.9)">intracerebral haemorrhage(I61.9)</option>
                                <option id="diabetes-melitus" <?= ($dxutama == 'Diabetes Melitus Tipe 2 (E11.9)') ? 'selected' : '' ?> value="Diabetes Melitus Tipe 2 (E11.9)">Diabetes Melitus Tipe 2 (E11.9)</option>
                                <option id="hipertensi-esensial" <?= ($dxutama == 'Hipertensi Esensial (I10)') ? 'selected' : '' ?> value="Hipertensi Esensial (I10)">Hipertensi Esensial (I10)</option>
                                <option id="hiv" <?= ($dxutama == 'HIV (B24)') ? 'selected' : '' ?> value="HIV (B24)">HIV (B24)</option>
                                <option id="tuberculosis" <?= ($dxutama == 'Tuberculosis (A15.2)') ? 'selected' : '' ?> value="Tuberculosis (A15.2)">Tuberculosis (A15.2)</option>
                                <option id="henti-jantung" <?= ($dxutama == 'Henti Jantung, Cardiac Arrest (I46)') ? 'selected' : '' ?> value="Henti Jantung, Cardiac Arrest (I46)">Henti Jantung, Cardiac Arrest (I46)</option>
                                <option id="kejang-demam" <?= ($dxutama == 'Kejang Demam (R56.0)') ? 'selected' : '' ?> value="Kejang Demam (R56.0)">Kejang Demam (R56.0)</option>
                                <option id="perdarahan-post-partum" <?= ($dxutama == 'Perdarahan Post Partum (O72)') ? 'selected' : '' ?> value="Perdarahan Post Partum (O72)">Perdarahan Post Partum (O72)</option>
                                <option id="pre-eklampsia" <?= ($dxutama == 'Pre Eklampsia (014.9)') ? 'selected' : '' ?> value="Pre Eklampsia (014.9)">Pre Eklampsia (014.9)</option>
                                <option id="stroke" <?= ($dxutama == 'Stroke') ? 'selected' : '' ?> value="Stroke">Stroke</option>
                                <!-- <option id=" cerebral-infarction">cerebral infarction (i63.9)</option>
                                <option id="intracerebral-haemorrhage">intracerebral haemorrhage(I61.9)</option> -->
                            </select>

                            <input disabled class="form-control" type="text" value="<?= $dxutama ? $dxutama : '' ?>" id="dxutamatext" style="display:none;">

                        </td>

                        <td style="text-align:center;">
                            <select class="form-control" id="selectOption2" name="dxsekunder">
                                <option value="" selected>Pilih DX Medis Sekunder</option>
                                <option id="hemiplegi" <?= ($dxsekunder == 'hemiplegi(G81)') ? 'selected' : '' ?> value="hemiplegi(G81)">hemiplegi(G81)</option>
                                <option id="congestive-heart-failure" <?= ($dxsekunder == 'Congestive heart failure (I50.0)') ? 'selected' : '' ?> value="Congestive heart failure (I50.0)">Congestive heart failure (I50.0)</option>
                            </select></th>
                        </td>
                        <td style=" text-align:center;">-
                        </td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">3</td>

                    </tr>
            </table>

            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered">

                        <thead>
                            <tr>
                                <th rowspan=" 2">No.</th>
                                <th rowspan="2">Kegiatan</th>
                                <th rowspan="2">Uraian Kegiatan</th>
                                <th colspan="6" class="text-center">Hari</th>
                                <!-- <th rowspan="2">Keterangan</th> -->
                                <th rowspan="2">Biaya</th>
                            </tr>

                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- Nomor 1 -->
                            <input type="hidden" name="nomr" value="<?= esc($nomr); ?>">
                            <tr>
                                <td rowspan="5">1</td>
                                <td rowspan="2">Asesment awal Medis</td>
                                <td>Dokter IGD</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya1 == 15000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a11" name="biaya1" value="15000" onchange="hitungTotal()" checked>
                                            <label for="customCheckbox1a11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a11" name="biaya1" value="15000" onchange="hitungTotal()">
                                            <label for="customCheckbox1a11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya2 == 15000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a12" name="biaya2" value="15000" onchange="hitungTotal()" checked>
                                            <label for="customCheckbox1a12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a12" name="biaya2" value="15000" onchange="hitungTotal()">
                                            <label for="customCheckbox1a12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya3 == 15000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a13" name="biaya3" value="15000" onchange="hitungTotal()" checked>
                                            <label for="customCheckbox1a13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a13" name="biaya3" value="15000" onchange="hitungTotal()">
                                            <label for="customCheckbox1a13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya4 == 15000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a14" name="biaya4" value="15000" onchange="hitungTotal()" checked>
                                            <label for="customCheckbox1a14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a14" name="biaya4" value="15000" onchange="hitungTotal()">
                                            <label for="customCheckbox1a14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya5 == 15000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a15" name="biaya5" value="15000" onchange="hitungTotal()" checked>
                                            <label for="customCheckbox1a15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a15" name="biaya5" value="15000" onchange="hitungTotal()">
                                            <label for="customCheckbox1a15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya6 == 15000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a16" name="biaya6" value="15000" onchange="hitungTotal()" checked>
                                            <label for="customCheckbox1a16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a16" name="biaya6" value="15000" onchange="hitungTotal()">
                                            <label for="customCheckbox1a16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->

                                <?php echo view('total/total'); ?>
                            </tr>

                            <tr>
                                <td>DPJP</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya7 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a21" name="biaya7" value="20000" onchange="hitungTotal2()" checked>
                                            <label for="customCheckbox1a21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a21" name="biaya7" value="20000" onchange="hitungTotal2()">
                                            <label for="customCheckbox1a21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya8 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a22" name="biaya8" value="20000" onchange="hitungTotal2()" checked>
                                            <label for="customCheckbox1a22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a22" name="biaya8" value="20000" onchange="hitungTotal2()">
                                            <label for="customCheckbox1a22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya9 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a23" name="biaya9" value="20000" onchange="hitungTotal2()" checked>
                                            <label for="customCheckbox1a23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a23" name="biaya9" value="20000" onchange="hitungTotal2()">
                                            <label for="customCheckbox1a23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya10 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a24" name="biaya10" value="20000" onchange="hitungTotal2()" checked>
                                            <label for="customCheckbox1a24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a24" name="biaya10" value="20000" onchange="hitungTotal2()">
                                            <label for="customCheckbox1a24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya11 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a25" name="biaya11" value="20000" onchange="hitungTotal2()" checked>
                                            <label for="customCheckbox1a25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a25" name="biaya11" value="20000" onchange="hitungTotal2()">
                                            <label for="customCheckbox1a25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya12 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a26" name="biaya12" value="20000" onchange="hitungTotal2()" checked>
                                            <label for="customCheckbox1a26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1a26" name="biaya12" value="20000" onchange="hitungTotal2()">
                                            <label for="customCheckbox1a26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total2'); ?>

                            <tr>
                                <td rowspan="3">Asesment awal Keperawatan</td>
                                <td>IGD / Poli</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya13 == 5000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b11" name="biaya13" value="5000" onchange="hitungTotal3()" checked>
                                            <label for="customCheckbox1b11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b11" name="biaya13" value="5000" onchange="hitungTotal3()">
                                            <label for="customCheckbox1b11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya14 == 5000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b12" name="biaya14" value="5000" onchange="hitungTotal3()" checked>
                                            <label for="customCheckbox1b12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b12" name="biaya14" value="5000" onchange="hitungTotal3()">
                                            <label for="customCheckbox1b12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya15 == 5000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b13" name="biaya15" value="5000" onchange="hitungTotal3()" checked>
                                            <label for="customCheckbox1b13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b13" name="biaya15" value="5000" onchange="hitungTotal3()">
                                            <label for="customCheckbox1b13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya16 == 5000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b14" name="biaya16" value="5000" onchange="hitungTotal3()" checked>
                                            <label for="customCheckbox1b14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b14" name="biaya16" value="5000" onchange="hitungTotal3()">
                                            <label for="customCheckbox1b14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya17 == 5000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b15" name="biaya17" value="5000" onchange="hitungTotal3()" checked>
                                            <label for="customCheckbox1b15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b15" name="biaya17" value="5000" onchange="hitungTotal3()">
                                            <label for="customCheckbox1b15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya18 == 5000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b16" name="biaya18" value="5000" onchange="hitungTotal3()" checked>
                                            <label for="customCheckbox1b16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b16" name="biaya18" value="5000" onchange="hitungTotal3()">
                                            <label for="customCheckbox1b16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->

                                <!-- Display the total in an HTML <td> element -->
                                <?php echo view('total/total3'); ?>
                            </tr>

                            <tr>
                                <td>Poli Klinik</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya19 == 2500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b21" name="biaya19" value="2500" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox1b21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b21" name="biaya19" value="2500" onchange="hitungTotal4()">
                                            <label for="customCheckbox1b21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya20 == 2500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b22" name="biaya20" value="2500" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox1b22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b22" name="biaya20" value="2500" onchange="hitungTotal4()">
                                            <label for="customCheckbox1b22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya21 == 2500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b23" name="biaya21" value="2500" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox1b23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b23" name="biaya21" value="2500" onchange="hitungTotal4()">
                                            <label for="customCheckbox1b23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya22 == 2500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b24" name="biaya22" value="2500" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox1b24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b24" name="biaya22" value="2500" onchange="hitungTotal4()">
                                            <label for="customCheckbox1b24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya23 == 2500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b25" name="biaya23" value="2500" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox1b25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b25" name="biaya23" value="2500" onchange="hitungTotal4()">
                                            <label for="customCheckbox1b25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya24 == 2500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b26" name="biaya24" value="2500" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox1b26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1b26" name="biaya24" value="2500" onchange="hitungTotal4()">
                                            <label for="customCheckbox1b26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total4'); ?>
                            </tr>

                            <tr>

                                <td>Rawat Inap</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya25 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1231" name="biaya25" value="13000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox1231" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1231" name="biaya25" value="13000" onchange="hitungTotal5()">
                                            <label for="customCheckbox1231" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya26 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1232" name="biaya26" value="13000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox1232" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1232" name="biaya26" value="13000" onchange="hitungTotal5()">
                                            <label for="customCheckbox1232" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya27 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1233" name="biaya27" value="13000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox1233" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1233" name="biaya27" value="13000" onchange="hitungTotal5()">
                                            <label for="customCheckbox1233" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya28 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1234" name="biaya28" value="13000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox1234" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1234" name="biaya28" value="13000" onchange="hitungTotal5()">
                                            <label for="customCheckbox1234" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya29 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1235" name="biaya29" value="13000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox1235" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1235" name="biaya29" value="13000" onchange="hitungTotal5()">
                                            <label for="customCheckbox1235" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya30 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1236" name="biaya30" value="13000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox1236" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox1236" name="biaya30" value="13000" onchange="hitungTotal5()">
                                            <label for="customCheckbox1236" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total5'); ?>
                            </tr>

                            <!-- Nomor 2 -->
                            <tr>
                                <td rowspan="13">2</td>
                                <td rowspan="13">Laboratorium</td>

                            </tr>
                            <tr>

                                <td>Darah Lengkap</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya31 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2111" name="biaya31" value="56000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2111" name="biaya31" value="56000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya32 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2112" name="biaya32" value="56000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2112" name="biaya32" value="56000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya33 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2113" name="biaya33" value="56000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2113" name="biaya33" value="56000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya34 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2114" name="biaya34" value="56000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2114" name="biaya34" value="56000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya35 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2115" name="biaya35" value="56000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2115" name="biaya35" value="56000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya36 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2116" name="biaya36" value="56000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2116" name="biaya36" value="56000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total6'); ?>
                            </tr>


                            <tr>

                                <td>Ureum Kriatin</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya37 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2121" name="biaya37" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2121" name="biaya37" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya38 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2122" name="biaya38" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2122" name="biaya38" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya39 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2123" name="biaya39" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2123" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2123" name="biaya39" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2123" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya40 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2124" name="biaya40" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2124" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2124" name="biaya40" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2124" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya41 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2125" name="biaya41" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2125" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2125" name="biaya41" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2125" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya42 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2126" name="biaya42" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2126" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2126" name="biaya42" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2126" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total7'); ?>
                            </tr>

                            <tr>

                                <td>GDS</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya43 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2131" name="biaya43" value="24000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox2131" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2131" name="biaya43" value="24000" onchange="hitungTotal8()">
                                            <label for="customCheckbox2131" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya44 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2132" name="biaya44" value="24000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox2132" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2132" name="biaya44" value="24000" onchange="hitungTotal8()">
                                            <label for="customCheckbox2132" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya45 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2133" name="biaya45" value="24000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox2133" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2133" name="biaya45" value="24000" onchange="hitungTotal8()">
                                            <label for="customCheckbox2133" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya46 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2134" name="biaya46" value="24000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox2134" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2134" name="biaya46" value="24000" onchange="hitungTotal8()">
                                            <label for="customCheckbox2134" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya47 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2135" name="biaya47" value="24000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox2135" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2135" name="biaya47" value="24000" onchange="hitungTotal8()">
                                            <label for="customCheckbox2135" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya48 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2136" name="biaya48" value="24000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox2136" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2136" name="biaya48" value="24000" onchange="hitungTotal8()">
                                            <label for="customCheckbox2136" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total8'); ?>
                            </tr>


                            <tr>
                                <td>Elektrolit</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya49 == 91000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2141" name="biaya49" value="91000" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox2141" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2141" name="biaya49" value="91000" onchange="hitungTotal9()">
                                            <label for="customCheckbox2141" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya50 == 91000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2142" name="biaya50" value="91000" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox2142" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2142" name="biaya50" value="91000" onchange="hitungTotal9()">
                                            <label for="customCheckbox2142" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya51 == 91000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2143" name="biaya51" value="91000" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox2143" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2143" name="biaya51" value="91000" onchange="hitungTotal9()">
                                            <label for="customCheckbox2143" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya52 == 91000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2144" name="biaya52" value="91000" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox2144" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2144" name="biaya52" value="91000" onchange="hitungTotal9()">
                                            <label for="customCheckbox2144" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya53 == 91000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2145" name="biaya53" value="91000" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox2145" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2145" name="biaya53" value="91000" onchange="hitungTotal9()">
                                            <label for="customCheckbox2145" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya54 == 91000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2146" name="biaya54" value="91000" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox2146" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2146" name="biaya54" value="91000" onchange="hitungTotal9()">
                                            <label for="customCheckbox2146" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total9'); ?>
                            </tr>

                            <tr>
                                <td>Asam Urat</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya55 == 14500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2151" name="biaya55" value="14500" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox2151" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2151" name="biaya55" value="14500" onchange="hitungTotal10()">
                                            <label for="customCheckbox2151" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya56 == 14500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2152" name="biaya56" value="14500" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox2152" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2152" name="biaya56" value="14500" onchange="hitungTotal10()">
                                            <label for="customCheckbox2152" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya57 == 14500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2153" name="biaya57" value="14500" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox2153" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2153" name="biaya57" value="14500" onchange="hitungTotal10()">
                                            <label for="customCheckbox2153" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya58 == 14500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2154" name="biaya58" value="14500" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox2154" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2154" name="biaya58" value="14500" onchange="hitungTotal10()">
                                            <label for="customCheckbox2154" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya59 == 14500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2155" name="biaya59" value="14500" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox2155" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2155" name="biaya59" value="14500" onchange="hitungTotal10()">
                                            <label for="customCheckbox2155" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya60 == 14500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2156" name="biaya60" value="14500" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox2156" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2156" name="biaya60" value="14500" onchange="hitungTotal10()">
                                            <label for="customCheckbox2156" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total10'); ?>
                            </tr>


                            <tr>
                                <td>GDP</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya61 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2161" name="biaya61" value="24000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox2161" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2161" name="biaya61" value="24000" onchange="hitungTotal11()">
                                            <label for="customCheckbox2161" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya62 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2162" name="biaya62" value="24000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox2162" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2162" name="biaya62" value="24000" onchange="hitungTotal11()">
                                            <label for="customCheckbox2162" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya63 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2163" name="biaya63" value="24000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox2163" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2163" name="biaya63" value="24000" onchange="hitungTotal11()">
                                            <label for="customCheckbox2163" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya64 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2164" name="biaya64" value="24000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox2164" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2164" name="biaya64" value="24000" onchange="hitungTotal11()">
                                            <label for="customCheckbox2164" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya65 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2165" name="biaya65" value="24000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox2165" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2165" name="biaya65" value="24000" onchange="hitungTotal11()">
                                            <label for="customCheckbox2165" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya66 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2166" name="biaya66" value="24000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox2166" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2166" name="biaya66" value="24000" onchange="hitungTotal11()">
                                            <label for="customCheckbox2166" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total11'); ?>
                            </tr>

                            <tr>
                                <td>GD2PP</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya67 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2171" name="biaya67" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox2171" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2171" name="biaya67" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox2171" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya68 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2172" name="biaya68" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox2172" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2172" name="biaya68" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox2172" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya69 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2173" name="biaya69" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox2173" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2173" name="biaya69" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox2173" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya70 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2174" name="biaya70" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox2174" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2174" name="biaya70" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox2174" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya71 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2175" name="biaya71" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox2175" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2175" name="biaya71" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox2175" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya72 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2176" name="biaya72" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox2176" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2176" name="biaya72" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox2176" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total12'); ?>
                            </tr>


                            <tr>
                                <td>LDL</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya73 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2181" name="biaya73" value="0" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox2181" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2181" name="biaya73" value="0" onchange="hitungTotal13()">
                                            <label for="customCheckbox2181" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya74 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2182" name="biaya74" value="0" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox2182" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2182" name="biaya74" value="0" onchange="hitungTotal13()">
                                            <label for="customCheckbox2182" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya75 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2183" name="biaya75" value="0" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox2183" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2183" name="biaya75" value="0" onchange="hitungTotal13()">
                                            <label for="customCheckbox2183" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya76 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2184" name="biaya76" value="0" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox2184" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2184" name="biaya76" value="0" onchange="hitungTotal13()">
                                            <label for="customCheckbox2184" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya77 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2185" name="biaya77" value="0" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox2185" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2185" name="biaya77" value="0" onchange="hitungTotal13()">
                                            <label for="customCheckbox2185" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya78 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2186" name="biaya78" value="0" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox2186" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2186" name="biaya78" value="0" onchange="hitungTotal13()">
                                            <label for="customCheckbox2186" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total13'); ?>
                            </tr>

                            <tr>
                                <td>HDL</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya79 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2191" name="biaya79" value="29000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox2191" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2191" name="biaya79" value="29000" onchange="hitungTotal14()">
                                            <label for="customCheckbox2191" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya80 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2192" name="biaya80" value="29000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox2192" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2192" name="biaya80" value="29000" onchange="hitungTotal14()">
                                            <label for="customCheckbox2192" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya81 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2193" name="biaya81" value="29000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox2193" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2193" name="biaya81" value="29000" onchange="hitungTotal14()">
                                            <label for="customCheckbox2193" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya82 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2194" name="biaya82" value="29000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox2194" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2194" name="biaya82" value="29000" onchange="hitungTotal14()">
                                            <label for="customCheckbox2194" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya83 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2195" name="biaya83" value="29000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox2195" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2195" name="biaya83" value="29000" onchange="hitungTotal14()">
                                            <label for="customCheckbox2195" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya84 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2196" name="biaya84" value="29000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox2196" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2196" name="biaya84" value="29000" onchange="hitungTotal14()">
                                            <label for="customCheckbox2196" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total14'); ?>
                            </tr>

                            <tr>
                                <td>Trigliserida</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya85 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21101" name="biaya85" value="24000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox21101" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21101" name="biaya85" value="24000" onchange="hitungTotal15()">
                                            <label for="customCheckbox21101" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya86 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21102" name="biaya86" value="24000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox21102" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21102" name="biaya86" value="24000" onchange="hitungTotal15()">
                                            <label for="customCheckbox21102" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya87 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21103" name="biaya87" value="24000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox21103" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21103" name="biaya87" value="24000" onchange="hitungTotal15()">
                                            <label for="customCheckbox21103" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya88 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21104" name="biaya88" value="24000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox21104" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21104" name="biaya88" value="24000" onchange="hitungTotal15()">
                                            <label for="customCheckbox21104" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya89 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21105" name="biaya89" value="24000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox21105" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21105" name="biaya89" value="24000" onchange="hitungTotal15()">
                                            <label for="customCheckbox21105" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya90 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21106" name="biaya90" value="24000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox21106" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21106" name="biaya90" value="24000" onchange="hitungTotal15()">
                                            <label for="customCheckbox21106" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total15'); ?>
                            </tr>


                            <tr>
                                <td>Kolesterol Total</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya91 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21111" name="biaya91" value="24000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox21111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21111" name="biaya91" value="24000" onchange="hitungTotal16()">
                                            <label for="customCheckbox21111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya92 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21112" name="biaya92" value="24000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox21112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21112" name="biaya92" value="24000" onchange="hitungTotal16()">
                                            <label for="customCheckbox21112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya93 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21113" name="biaya93" value="24000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox21113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21113" name="biaya93" value="24000" onchange="hitungTotal16()">
                                            <label for="customCheckbox21113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya94 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21114" name="biaya94" value="24000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox21114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21114" name="biaya94" value="24000" onchange="hitungTotal16()">
                                            <label for="customCheckbox21114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya95 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21115" name="biaya95" value="24000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox21115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21115" name="biaya95" value="24000" onchange="hitungTotal16()">
                                            <label for="customCheckbox21115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya96 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21116" name="biaya96" value="24000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox21116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21116" name="biaya96" value="24000" onchange="hitungTotal16()">
                                            <label for="customCheckbox21116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total16'); ?>
                            </tr>

                            <tr>
                                <td>EKG</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya97 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21121" name="biaya97" value="40000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox21121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21121" name="biaya97" value="40000" onchange="hitungTotal17()">
                                            <label for="customCheckbox21121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya98 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21122" name="biaya98" value="40000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox21122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21122" name="biaya98" value="40000" onchange="hitungTotal17()">
                                            <label for="customCheckbox21122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya99 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21213" name="biaya99" value="40000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox21213" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21213" name="biaya99" value="40000" onchange="hitungTotal17()">
                                            <label for="customCheckbox21213" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya100 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21214" name="biaya100" value="40000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox21214" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21214" name="biaya100" value="40000" onchange="hitungTotal17()">
                                            <label for="customCheckbox21214" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya101 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21215" name="biaya101" value="40000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox21215" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21215" name="biaya101" value="40000" onchange="hitungTotal17()">
                                            <label for="customCheckbox21215" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya102 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21216" name="biaya102" value="40000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox21216" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox21216" name="biaya102" value="40000" onchange="hitungTotal17()">
                                            <label for="customCheckbox21216" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total17'); ?>
                            </tr>


                            <!-- Nomor 3 -->
                            <tr>
                                <td rowspan="2">3</td>
                                <td rowspan="2">Radiologi / Imaging</td>
                                <td>RO Thorax</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya103 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31112" name="biaya103" value="133500" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31112" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31112" name="biaya103" value="133500" onchange="hitungTotal18()">
                                            <label for="customCheckbox31112" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya104 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31111" name="biaya104" value="93300" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31111" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31111" name="biaya104" value="93300" onchange="hitungTotal18()">
                                            <label for="customCheckbox31111" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>

                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya105 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31122" name="biaya105" value="133500" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31122" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31122" name="biaya105" value="133500" onchange="hitungTotal18()">
                                            <label for="customCheckbox31122" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>

                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya106 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31121" name="biaya106" value="93300" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31121" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31121" name="biaya106" value="93300" onchange="hitungTotal18()">
                                            <label for="customCheckbox31121" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>

                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya107 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31132" name="biaya107" value="133500" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31132" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31132" name="biaya107" value="133500" onchange="hitungTotal18()">
                                            <label for="customCheckbox31132" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>

                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya108 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31131" name="biaya108" value="93300" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31131" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31131" name="biaya108" value="93300" onchange="hitungTotal18()">
                                            <label for="customCheckbox31131" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>

                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya109 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31142" name="biaya109" value="133500" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31142" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31142" name="biaya109" value="133500" onchange="hitungTotal18()">
                                            <label for="customCheckbox31142" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>

                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya110 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31141" name="biaya110" value="93300" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31141" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31141" name="biaya110" value="93300" onchange="hitungTotal18()">
                                            <label for="customCheckbox31141" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>

                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya111 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31152" name="biaya111" value="133500" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31152" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31152" name="biaya111" value="133500" onchange="hitungTotal18()">
                                            <label for="customCheckbox31152" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>

                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya112 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31151" name="biaya112" value="93300" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31151" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31151" name="biaya112" value="93300" onchange="hitungTotal18()">
                                            <label for="customCheckbox31151" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>

                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya113 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31162" name="biaya113" value="133500" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31162" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31162" name="biaya113" value="133500" onchange="hitungTotal18()">
                                            <label for="customCheckbox31162" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>

                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya114 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31161" name="biaya114" value="93300" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox31161" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31161" name="biaya114" value="93300" onchange="hitungTotal18()">
                                            <label for="customCheckbox31161" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>

                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total18'); ?>
                            </tr>


                            <tr>

                                <td>CT Scan Kepala</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya115 == 670000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31211" name="biaya115" value="670000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31211" class="custom-control-label">Non</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31211" name="biaya115" value="670000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31211" class="custom-control-label">Non</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya115 == 500000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31212" name="biaya115" value="500000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31212" class="custom-control-label">Kontras</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31212" name="biaya115" value="500000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31212" class="custom-control-label">Kontras</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya116 == 670000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31221" name="biaya116" value="670000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31221" class="custom-control-label">Non</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31221" name="biaya116" value="670000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31221" class="custom-control-label">Non</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya116 == 500000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31222" name="biaya116" value="500000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31222" class="custom-control-label">Kontras</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31222" name="biaya116" value="500000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31222" class="custom-control-label">Kontras</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya117 == 670000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31231" name="biaya117" value="670000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31231" class="custom-control-label">Non</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31231" name="biaya117" value="670000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31231" class="custom-control-label">Non</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya117 == 500000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31232" name="biaya117" value="500000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31232" class="custom-control-label">Kontras</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31232" name="biaya117" value="500000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31232" class="custom-control-label">Kontras</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya118 == 670000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31241" name="biaya118" value="670000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31241" class="custom-control-label">Non</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31241" name="biaya118" value="670000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31241" class="custom-control-label">Non</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya118 == 500000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31242" name="biaya118" value="500000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31242" class="custom-control-label">Kontras</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31242" name="biaya118" value="500000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31242" class="custom-control-label">Kontras</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya119 == 670000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31251" name="biaya119" value="670000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31251" class="custom-control-label">Non</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31251" name="biaya119" value="670000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31251" class="custom-control-label">Non</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya119 == 500000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31252" name="biaya119" value="500000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31252" class="custom-control-label">Kontras</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31252" name="biaya119" value="500000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31252" class="custom-control-label">Kontras</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya120 == 670000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31261" name="biaya120" value="670000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31261" class="custom-control-label">Non</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31261" name="biaya120" value="670000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31261" class="custom-control-label">Non</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya120 == 500000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31262" name="biaya120" value="500000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox31262" class="custom-control-label">Kontras</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox31262" name="biaya120" value="500000" onchange="hitungTotal19()">
                                            <label for="customCheckbox31262" class="custom-control-label">Kontras</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total19'); ?>
                            </tr>

                            <!-- Nomor 4 -->
                            <tr>
                                <td>4</td>
                                <td>Konsultasi</td>
                                <td>DPJP</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya121 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4111" name="biaya121" value="27000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox4111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4111" name="biaya121" value="27000" onchange="hitungTotal20()">
                                            <label for="customCheckbox4111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya122 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4112" name="biaya122" value="27000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox4112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4112" name="biaya122" value="27000" onchange="hitungTotal20()">
                                            <label for="customCheckbox4112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya123 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4113" name="biaya123" value="27000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox4113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4113" name="biaya123" value="27000" onchange="hitungTotal20()">
                                            <label for="customCheckbox4113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya124 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4114" name="biaya124" value="27000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox4114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4114" name="biaya124" value="27000" onchange="hitungTotal20()">
                                            <label for="customCheckbox4114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya125 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4115" name="biaya125" value="27000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox4115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4115" name="biaya125" value="27000" onchange="hitungTotal20()">
                                            <label for="customCheckbox4115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya126 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4116" name="biaya126" value="27000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox4116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4116" name="biaya126" value="27000" onchange="hitungTotal20()">
                                            <label for="customCheckbox4116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total20'); ?>
                            </tr>

                            <!-- Nomor 5 -->
                            <tr>
                                <td rowspan="4">5</td>
                                <td rowspan="4">Asesmen Lanjutan</td>
                                <td>Medis</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya127 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5111" name="biaya127" value="0" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5111" name="biaya127" value="0" onchange="hitungTotal21()">
                                            <label for="customCheckbox5111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya128 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5112" name="biaya128" value="0" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5112" name="biaya128" value="0" onchange="hitungTotal21()">
                                            <label for="customCheckbox5112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya129 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5113" name="biaya129" value="0" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5113" name="biaya129" value="0" onchange="hitungTotal21()">
                                            <label for="customCheckbox5113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya130 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5114" name="biaya130" value="0" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5114" name="biaya130" value="0" onchange="hitungTotal21()">
                                            <label for="customCheckbox5114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya131 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5115" name="biaya131" value="0" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5115" name="biaya131" value="0" onchange="hitungTotal21()">
                                            <label for="customCheckbox5115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya132 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5116" name="biaya132" value="0" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5116" name="biaya132" value="0" onchange="hitungTotal21()">
                                            <label for="customCheckbox5116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total21'); ?>
                            </tr>

                            <tr>
                                <td>Keperawatan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya133 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5121" name="biaya133" value="13000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox5121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5121" name="biaya133" value="13000" onchange="hitungTotal22()">
                                            <label for="customCheckbox5121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya134 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5122" name="biaya134" value="13000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox5122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5122" name="biaya134" value="13000" onchange="hitungTotal22()">
                                            <label for="customCheckbox5122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya135 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5123" name="biaya135" value="13000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox5123" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5123" name="biaya135" value="13000" onchange="hitungTotal22()">
                                            <label for="customCheckbox5123" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya136 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5124" name="biaya136" value="13000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox5124" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5124" name="biaya136" value="13000" onchange="hitungTotal22()">
                                            <label for="customCheckbox5124" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya137 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5125" name="biaya137" value="13000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox5125" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5125" name="biaya137" value="13000" onchange="hitungTotal22()">
                                            <label for="customCheckbox5125" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya138 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5126" name="biaya138" value="13000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox5126" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5126" name="biaya138" value="13000" onchange="hitungTotal22()">
                                            <label for="customCheckbox5126" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total22'); ?>
                            </tr>

                            <tr>
                                <td>Gizi</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya139 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5131" name="biaya139" value="0" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox5131" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5131" name="biaya139" value="0" onchange="hitungTotal23()">
                                            <label for="customCheckbox5131" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya140 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5132" name="biaya140" value="0" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox5132" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5132" name="biaya140" value="0" onchange="hitungTotal23()">
                                            <label for="customCheckbox5132" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya141 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5133" name="biaya141" value="0" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox5133" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5133" name="biaya141" value="0" onchange="hitungTotal23()">
                                            <label for="customCheckbox5133" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya142 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5134" name="biaya142" value="0" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox5134" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5134" name="biaya142" value="0" onchange="hitungTotal23()">
                                            <label for="customCheckbox5134" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya143 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5135" name="biaya143" value="0" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox5135" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5135" name="biaya143" value="0" onchange="hitungTotal23()">
                                            <label for="customCheckbox5135" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya144 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5136" name="biaya144" value="0" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox5136" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5136" name="biaya144" value="0" onchange="hitungTotal23()">
                                            <label for="customCheckbox5136" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total23'); ?>
                            </tr>

                            <tr>
                                <td>Farmasi</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya145 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5141" name="biaya145" value="0" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox5141" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5141" name="biaya145" value="0" onchange="hitungTotal24()">
                                            <label for="customCheckbox5141" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya146 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5142" name="biaya146" value="0" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox5142" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5142" name="biaya146" value="0" onchange="hitungTotal24()">
                                            <label for="customCheckbox5142" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya147 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5143" name="biaya147" value="0" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox5143" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5143" name="biaya147" value="0" onchange="hitungTotal24()">
                                            <label for="customCheckbox5143" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya148 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5144" name="biaya148" value="0" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox5144" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5144" name="biaya148" value="0" onchange="hitungTotal24()">
                                            <label for="customCheckbox5144" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya149 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5145" name="biaya149" value="0" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox5145" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5145" name="biaya149" value="0" onchange="hitungTotal24()">
                                            <label for="customCheckbox5145" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya150 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5146" name="biaya150" value="0" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox5146" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5146" name="biaya150" value="0" onchange="hitungTotal24()">
                                            <label for="customCheckbox5146" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total24'); ?>
                            </tr>

                            <!-- Nomor 6 -->
                            <tr>
                                <td rowspan="21">6</td>
                                <td rowspan="8">a. Injeksi</td>
                                <td>Inj. Piracetam</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya151 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61111" name="biaya151" value="0" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61111" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61111" name="biaya151" value="0" onchange="hitungTotal25()">
                                            <label for="customRadio61111" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya151 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61112" name="biaya151" value="9057" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61112" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61112" name="biaya151" value="9057" onchange="hitungTotal25()">
                                            <label for="customRadio61112" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya151 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61113" name="biaya151" value="18114" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61113" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61113" name="biaya151" value="18114" onchange="hitungTotal25()">
                                            <label for="customRadio61113" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya151 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61114" name="biaya151" value="27171" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61114" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61114" name="biaya151" value="27171" onchange="hitungTotal25()">
                                            <label for="customRadio61114" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya152 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61121" name="biaya152" value="0" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61121" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61121" name="biaya152" value="0" onchange="hitungTotal25()">
                                            <label for="customRadio61121" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya152 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61122" name="biaya152" value="9057" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61122" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61122" name="biaya152" value="9057" onchange="hitungTotal25()">
                                            <label for="customRadio61122" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya152 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61123" name="biaya152" value="18114" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61123" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61123" name="biaya152" value="18114" onchange="hitungTotal25()">
                                            <label for="customRadio61123" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya152 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61124" name="biaya152" value="27171" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61124" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61124" name="biaya152" value="27171" onchange="hitungTotal25()">
                                            <label for="customRadio61124" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya153 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61131" name="biaya153" value="0" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61131" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61131" name="biaya153" value="0" onchange="hitungTotal25()">
                                            <label for="customRadio61131" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya153 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61132" name="biaya153" value="9057" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61132" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61132" name="biaya153" value="9057" onchange="hitungTotal25()">
                                            <label for="customRadio61132" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya153 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61133" name="biaya153" value="18114" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61133" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61133" name="biaya153" value="18114" onchange="hitungTotal25()">
                                            <label for="customRadio61133" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya153 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61134" name="biaya153" value="27171" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61134" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61134" name="biaya153" value="27171" onchange="hitungTotal25()">
                                            <label for="customRadio61134" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya154 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61141" name="biaya154" value="0" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61141" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61141" name="biaya154" value="0" onchange="hitungTotal25()">
                                            <label for="customRadio61141" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya154 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61142" name="biaya154" value="9057" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61142" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61142" name="biaya154" value="9057" onchange="hitungTotal25()">
                                            <label for="customRadio61142" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya154 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61143" name="biaya154" value="18114" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61143" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61143" name="biaya154" value="18114" onchange="hitungTotal25()">
                                            <label for="customRadio61143" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya154 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61144" name="biaya154" value="27171" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61144" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61144" name="biaya154" value="27171" onchange="hitungTotal25()">
                                            <label for="customRadio61144" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya155 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61151" name="biaya155" value="0" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61151" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61151" name="biaya155" value="0" onchange="hitungTotal25()">
                                            <label for="customRadio61151" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya155 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61152" name="biaya155" value="9057" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61152" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61152" name="biaya155" value="9057" onchange="hitungTotal25()">
                                            <label for="customRadio61152" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya155 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61153" name="biaya155" value="18114" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61153" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61153" name="biaya155" value="18114" onchange="hitungTotal25()">
                                            <label for="customRadio61153" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya155 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61154" name="biaya155" value="27171" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61154" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61154" name="biaya155" value="27171" onchange="hitungTotal25()">
                                            <label for="customRadio61154" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya156 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61161" name="biaya156" value="0" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61161" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61161" name="biaya156" value="0" onchange="hitungTotal25()">
                                            <label for="customRadio61161" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya156 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61162" name="biaya156" value="9057" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61162" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61162" name="biaya156" value="9057" onchange="hitungTotal25()">
                                            <label for="customRadio61162" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya156 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61163" name="biaya156" value="18114" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61163" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61163" name="biaya156" value="18114" onchange="hitungTotal25()">
                                            <label for="customRadio61163" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya156 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61164" name="biaya156" value="27171" onchange="hitungTotal25()" checked>
                                            <label for="customRadio61164" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61164" name="biaya156" value="27171" onchange="hitungTotal25()">
                                            <label for="customRadio61164" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total25'); ?>
                            </tr>

                            <tr>
                                <td>Inj. Citicolin</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya157 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61211" name="biaya157" value="0" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61211" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61211" name="biaya157" value="0" onchange="hitungTotal26()">
                                            <label for="customRadio61211" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya157 == 19980) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61212" name="biaya157" value="19980" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61212" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61212" name="biaya157" value="19980" onchange="hitungTotal26()">
                                            <label for="customRadio61212" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya157 == 39960) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61213" name="biaya157" value="39960" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61213" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61213" name="biaya157" value="39960" onchange="hitungTotal26()">
                                            <label for="customRadio61213" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya157 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61214" name="biaya157" value="27171" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61214" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61214" name="biaya157" value="27171" onchange="hitungTotal26()">
                                            <label for="customRadio61214" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya158 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61221" name="biaya158" value="0" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61221" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61221" name="biaya158" value="0" onchange="hitungTotal26()">
                                            <label for="customRadio61221" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya158 == 19980) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61222" name="biaya158" value="19980" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61222" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61222" name="biaya158" value="19980" onchange="hitungTotal26()">
                                            <label for="customRadio61222" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya158 == 39960) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61223" name="biaya158" value="39960" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61223" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61223" name="biaya158" value="39960" onchange="hitungTotal26()">
                                            <label for="customRadio61223" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya158 == 59940) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61224" name="biaya158" value="59940" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61224" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61224" name="biaya158" value="59940" onchange="hitungTotal26()">
                                            <label for="customRadio61224" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya159 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61231" name="biaya159" value="0" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61231" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61231" name="biaya159" value="0" onchange="hitungTotal26()">
                                            <label for="customRadio61231" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya159 == 19980) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61232" name="biaya159" value="19980" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61232" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61232" name="biaya159" value="19980" onchange="hitungTotal26()">
                                            <label for="customRadio61232" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya159 == 39960) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61233" name="biaya159" value="39960" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61233" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61233" name="biaya159" value="39960" onchange="hitungTotal26()">
                                            <label for="customRadio61233" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya159 == 59940) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61234" name="biaya159" value="59940" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61234" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61234" name="biaya159" value="59940" onchange="hitungTotal26()">
                                            <label for="customRadio61234" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya160 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61241" name="biaya160" value="0" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61241" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61241" name="biaya160" value="0" onchange="hitungTotal26()">
                                            <label for="customRadio61241" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya160 == 19980) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61242" name="biaya160" value="19980" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61242" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61242" name="biaya160" value="19980" onchange="hitungTotal26()">
                                            <label for="customRadio61242" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya160 == 39960) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61243" name="biaya160" value="39960" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61243" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61243" name="biaya160" value="39960" onchange="hitungTotal26()">
                                            <label for="customRadio61243" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya160 == 59940) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61244" name="biaya160" value="59940" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61244" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61244" name="biaya160" value="59940" onchange="hitungTotal26()">
                                            <label for="customRadio61244" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya161 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61251" name="biaya161" value="0" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61251" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61251" name="biaya161" value="0" onchange="hitungTotal26()">
                                            <label for="customRadio61251" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya161 == 19980) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61252" name="biaya161" value="19980" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61252" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61252" name="biaya161" value="19980" onchange="hitungTotal26()">
                                            <label for="customRadio61252" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya161 == 39960) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61253" name="biaya161" value="39960" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61253" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61253" name="biaya161" value="39960" onchange="hitungTotal26()">
                                            <label for="customRadio61253" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya161 == 59940) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61254" name="biaya161" value="59940" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61254" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61254" name="biaya161" value="59940" onchange="hitungTotal26()">
                                            <label for="customRadio61254" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya162 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61261" name="biaya162" value="0" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61261" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61261" name="biaya162" value="0" onchange="hitungTotal26()">
                                            <label for="customRadio61261" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya162 == 19980) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61262" name="biaya162" value="19980" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61262" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61262" name="biaya162" value="19980" onchange="hitungTotal26()">
                                            <label for="customRadio61262" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya162 == 39960) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61263" name="biaya162" value="39960" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61263" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61263" name="biaya162" value="39960" onchange="hitungTotal26()">
                                            <label for="customRadio61263" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya162 == 59940) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61264" name="biaya162" value="59940" onchange="hitungTotal26()" checked>
                                            <label for="customRadio61264" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61264" name="biaya162" value="59940" onchange="hitungTotal26()">
                                            <label for="customRadio61264" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total26'); ?>
                            </tr>

                            <tr>
                                <td>Inj. Mecobalamin</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya163 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61311" name="biaya163" value="0" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61311" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61311" name="biaya163" value="0" onchange="hitungTotal27()">
                                            <label for="customRadio61311" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya163 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61312" name="biaya163" value="9057" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61312" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61312" name="biaya163" value="9057" onchange="hitungTotal27()">
                                            <label for="customRadio61312" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya163 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61313" name="biaya163" value="18114" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61313" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61313" name="biaya163" value="18114" onchange="hitungTotal27()">
                                            <label for="customRadio61313" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya163 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61314" name="biaya163" value="27171" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61314" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61314" name="biaya163" value="27171" onchange="hitungTotal27()">
                                            <label for="customRadio61314" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya164 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61321" name="biaya164" value="0" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61321" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61321" name="biaya164" value="0" onchange="hitungTotal27()">
                                            <label for="customRadio61321" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya164 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61322" name="biaya164" value="9057" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61322" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61322" name="biaya164" value="9057" onchange="hitungTotal27()">
                                            <label for="customRadio61322" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya164 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61323" name="biaya164" value="18114" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61323" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61323" name="biaya164" value="18114" onchange="hitungTotal27()">
                                            <label for="customRadio61323" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya164 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61324" name="biaya164" value="27171" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61324" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61324" name="biaya164" value="27171" onchange="hitungTotal27()">
                                            <label for="customRadio61324" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya165 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61331" name="biaya165" value="0" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61331" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61331" name="biaya165" value="0" onchange="hitungTotal27()">
                                            <label for="customRadio61331" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya165 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61332" name="biaya165" value="9057" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61332" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61332" name="biaya165" value="9057" onchange="hitungTotal27()">
                                            <label for="customRadio61332" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya165 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61333" name="biaya165" value="18114" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61333" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61333" name="biaya165" value="18114" onchange="hitungTotal27()">
                                            <label for="customRadio61333" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya165 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61334" name="biaya165" value="27171" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61334" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61334" name="biaya165" value="27171" onchange="hitungTotal27()">
                                            <label for="customRadio61334" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya166 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61341" name="biaya166" value="0" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61341" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61341" name="biaya166" value="0" onchange="hitungTotal27()">
                                            <label for="customRadio61341" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya166 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61342" name="biaya166" value="9057" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61342" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61342" name="biaya166" value="9057" onchange="hitungTotal27()">
                                            <label for="customRadio61342" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya166 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61343" name="biaya166" value="18114" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61343" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61343" name="biaya166" value="18114" onchange="hitungTotal27()">
                                            <label for="customRadio61343" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya166 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61344" name="biaya166" value="27171" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61344" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61344" name="biaya166" value="27171" onchange="hitungTotal27()">
                                            <label for="customRadio61344" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya167 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61351" name="biaya167" value="0" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61351" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61351" name="biaya167" value="0" onchange="hitungTotal27()">
                                            <label for="customRadio61351" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya167 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61352" name="biaya167" value="9057" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61352" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61352" name="biaya167" value="9057" onchange="hitungTotal27()">
                                            <label for="customRadio61352" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya167 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61353" name="biaya167" value="18114" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61353" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61353" name="biaya167" value="18114" onchange="hitungTotal27()">
                                            <label for="customRadio61353" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya167 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61354" name="biaya167" value="27171" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61354" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61354" name="biaya167" value="27171" onchange="hitungTotal27()">
                                            <label for="customRadio61354" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya168 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61361" name="biaya168" value="0" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61361" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61361" name="biaya168" value="0" onchange="hitungTotal27()">
                                            <label for="customRadio61361" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya168 == 9057) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61362" name="biaya168" value="9057" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61362" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61362" name="biaya168" value="9057" onchange="hitungTotal27()">
                                            <label for="customRadio61362" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya168 == 18114) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61363" name="biaya168" value="18114" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61363" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61363" name="biaya168" value="18114" onchange="hitungTotal27()">
                                            <label for="customRadio61363" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya168 == 27171) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61364" name="biaya168" value="27171" onchange="hitungTotal27()" checked>
                                            <label for="customRadio61364" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61364" name="biaya168" value="27171" onchange="hitungTotal27()">
                                            <label for="customRadio61364" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total27'); ?>
                            </tr>

                            <tr>
                                <td>Inj. Ranitidin</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya169 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61411" name="biaya169" value="0" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61411" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61411" name="biaya169" value="0" onchange="hitungTotal28()">
                                            <label for="customRadio61411" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya169 == 1270) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61412" name="biaya169" value="1270" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61412" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61412" name="biaya169" value="1270" onchange="hitungTotal28()">
                                            <label for="customRadio61412" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya169 == 2540) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61413" name="biaya169" value="2540" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61413" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61413" name="biaya169" value="2540" onchange="hitungTotal28()">
                                            <label for="customRadio61413" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya169 == 3810) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61414" name="biaya169" value="3810" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61414" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61414" name="biaya169" value="3810" onchange="hitungTotal28()">
                                            <label for="customRadio61414" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya170 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61421" name="biaya170" value="0" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61421" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61421" name="biaya170" value="0" onchange="hitungTotal28()">
                                            <label for="customRadio61421" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya170 == 1270) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61422" name="biaya170" value="1270" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61422" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61422" name="biaya170" value="1270" onchange="hitungTotal28()">
                                            <label for="customRadio61422" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya170 == 2540) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61423" name="biaya170" value="2540" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61423" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61423" name="biaya170" value="2540" onchange="hitungTotal28()">
                                            <label for="customRadio61423" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya170 == 3810) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61424" name="biaya170" value="3810" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61424" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61424" name="biaya170" value="3810" onchange="hitungTotal28()">
                                            <label for="customRadio61424" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya171 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61431" name="biaya171" value="0" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61431" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61431" name="biaya171" value="0" onchange="hitungTotal28()">
                                            <label for="customRadio61431" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya171 == 1270) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61432" name="biaya171" value="1270" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61432" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61432" name="biaya171" value="1270" onchange="hitungTotal28()">
                                            <label for="customRadio61432" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya171 == 2540) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61433" name="biaya171" value="2540" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61433" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61433" name="biaya171" value="2540" onchange="hitungTotal28()">
                                            <label for="customRadio61433" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya171 == 3810) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61434" name="biaya171" value="3810" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61434" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61434" name="biaya171" value="3810" onchange="hitungTotal28()">
                                            <label for="customRadio61434" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya172 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61441" name="biaya172" value="0" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61441" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61441" name="biaya172" value="0" onchange="hitungTotal28()">
                                            <label for="customRadio61441" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya172 == 1270) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61442" name="biaya172" value="1270" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61442" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61442" name="biaya172" value="1270" onchange="hitungTotal28()">
                                            <label for="customRadio61442" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya172 == 2540) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61443" name="biaya172" value="2540" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61443" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61443" name="biaya172" value="2540" onchange="hitungTotal28()">
                                            <label for="customRadio61443" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya172 == 3810) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61444" name="biaya172" value="3810" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61444" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61444" name="biaya172" value="3810" onchange="hitungTotal28()">
                                            <label for="customRadio61444" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya173 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61451" name="biaya173" value="0" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61451" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61451" name="biaya173" value="0" onchange="hitungTotal28()">
                                            <label for="customRadio61451" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya173 == 1270) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61452" name="biaya173" value="1270" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61452" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61452" name="biaya173" value="1270" onchange="hitungTotal28()">
                                            <label for="customRadio61452" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya173 == 2540) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61453" name="biaya173" value="2540" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61453" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61453" name="biaya173" value="2540" onchange="hitungTotal28()">
                                            <label for="customRadio61453" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya173 == 3810) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61454" name="biaya173" value="3810" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61454" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61454" name="biaya173" value="3810" onchange="hitungTotal28()">
                                            <label for="customRadio61454" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya174 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61461" name="biaya174" value="0" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61461" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61461" name="biaya174" value="0" onchange="hitungTotal28()">
                                            <label for="customRadio61461" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya174 == 1270) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61462" name="biaya174" value="1270" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61462" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61462" name="biaya174" value="1270" onchange="hitungTotal28()">
                                            <label for="customRadio61462" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya174 == 2540) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61463" name="biaya174" value="2540" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61463" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61463" name="biaya174" value="2540" onchange="hitungTotal28()">
                                            <label for="customRadio61463" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya174 == 3810) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61464" name="biaya174" value="3810" onchange="hitungTotal28()" checked>
                                            <label for="customRadio61464" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61464" name="biaya174" value="3810" onchange="hitungTotal28()">
                                            <label for="customRadio61464" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total28'); ?>
                            </tr>

                            <tr>
                                <td>Inj. OMZ</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya175 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61511" name="biaya175" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61511" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61511" name="biaya175" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61511" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya175 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61512" name="biaya175" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61512" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61512" name="biaya175" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61512" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya175 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61513" name="biaya175" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61513" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61513" name="biaya175" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61513" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya175 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61514" name="biaya175" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61514" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61514" name="biaya175" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61514" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya176 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61521" name="biaya176" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61521" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61521" name="biaya176" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61521" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya176 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61522" name="biaya176" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61522" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61522" name="biaya176" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61522" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya176 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61523" name="biaya176" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61523" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61523" name="biaya176" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61523" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya176 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61524" name="biaya176" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61524" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61524" name="biaya176" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61524" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya177 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61531" name="biaya177" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61531" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61531" name="biaya177" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61531" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya177 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61532" name="biaya177" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61532" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61532" name="biaya177" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61532" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya177 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61533" name="biaya177" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61533" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61533" name="biaya177" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61533" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya177 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61534" name="biaya177" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61534" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61534" name="biaya177" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61534" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya178 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61541" name="biaya178" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61541" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61541" name="biaya178" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61541" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya178 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61542" name="biaya178" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61542" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61542" name="biaya178" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61542" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya178 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61543" name="biaya178" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61543" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61543" name="biaya178" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61543" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya178 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61544" name="biaya178" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61544" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61544" name="biaya178" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61544" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya179 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61551" name="biaya179" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61551" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61551" name="biaya179" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61551" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya179 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61552" name="biaya179" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61552" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61552" name="biaya179" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61552" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya179 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61553" name="biaya179" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61553" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61553" name="biaya179" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61553" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya179 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61554" name="biaya179" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61554" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61554" name="biaya179" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61554" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya180 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61561" name="biaya180" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61561" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61561" name="biaya180" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61561" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya180 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61562" name="biaya180" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61562" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61562" name="biaya180" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61562" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya180 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61563" name="biaya180" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61563" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61563" name="biaya180" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61563" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya180 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61564" name="biaya180" value="0" onchange="hitungTotal29()" checked>
                                            <label for="customRadio61564" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61564" name="biaya180" value="0" onchange="hitungTotal29()">
                                            <label for="customRadio61564" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total29'); ?>
                            </tr>

                            <tr>
                                <td>Inj. Furosemid</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya181 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61611" name="biaya181" value="0" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61611" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61611" name="biaya181" value="0" onchange="hitungTotal30()">
                                            <label for="customRadio61611" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya181 == 2216) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61612" name="biaya181" value="2216" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61612" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61612" name="biaya181" value="2216" onchange="hitungTotal30()">
                                            <label for="customRadio61612" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya181 == 4432) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61613" name="biaya181" value="4432" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61613" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61613" name="biaya181" value="4432" onchange="hitungTotal30()">
                                            <label for="customRadio61613" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya181 == 6648) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61614" name="biaya181" value="6648" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61614" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61614" name="biaya181" value="6648" onchange="hitungTotal30()">
                                            <label for="customRadio61614" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya182 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61621" name="biaya182" value="0" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61621" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61621" name="biaya182" value="0" onchange="hitungTotal30()">
                                            <label for="customRadio61621" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya182 == 2216) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61622" name="biaya182" value="2216" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61622" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61622" name="biaya182" value="2216" onchange="hitungTotal30()">
                                            <label for="customRadio61622" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya182 == 4432) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61623" name="biaya182" value="4432" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61623" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61623" name="biaya182" value="4432" onchange="hitungTotal30()">
                                            <label for="customRadio61623" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya182 == 6648) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61624" name="biaya182" value="6648" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61624" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61624" name="biaya182" value="6648" onchange="hitungTotal30()">
                                            <label for="customRadio61624" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya183 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61631" name="biaya183" value="0" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61631" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61631" name="biaya183" value="0" onchange="hitungTotal30()">
                                            <label for="customRadio61631" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya183 == 2216) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61632" name="biaya183" value="2216" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61632" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61632" name="biaya183" value="2216" onchange="hitungTotal30()">
                                            <label for="customRadio61632" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya183 == 4432) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61633" name="biaya183" value="4432" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61633" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61633" name="biaya183" value="4432" onchange="hitungTotal30()">
                                            <label for="customRadio61633" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya183 == 6648) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61634" name="biaya183" value="6648" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61634" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61634" name="biaya183" value="6648" onchange="hitungTotal30()">
                                            <label for="customRadio61634" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya184 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61641" name="biaya184" value="0" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61641" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61641" name="biaya184" value="0" onchange="hitungTotal30()">
                                            <label for="customRadio61641" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya184 == 2216) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61642" name="biaya184" value="2216" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61642" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61642" name="biaya184" value="2216" onchange="hitungTotal30()">
                                            <label for="customRadio61642" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya184 == 4432) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61643" name="biaya184" value="4432" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61643" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61643" name="biaya184" value="4432" onchange="hitungTotal30()">
                                            <label for="customRadio61643" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya184 == 6648) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61644" name="biaya184" value="6648" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61644" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61644" name="biaya184" value="6648" onchange="hitungTotal30()">
                                            <label for="customRadio61644" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya185 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61651" name="biaya185" value="0" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61651" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61651" name="biaya185" value="0" onchange="hitungTotal30()">
                                            <label for="customRadio61651" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya185 == 2216) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61652" name="biaya185" value="2216" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61652" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61652" name="biaya185" value="2216" onchange="hitungTotal30()">
                                            <label for="customRadio61652" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya185 == 4432) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61653" name="biaya185" value="4432" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61653" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61653" name="biaya185" value="4432" onchange="hitungTotal30()">
                                            <label for="customRadio61653" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya185 == 6648) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61654" name="biaya185" value="6648" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61654" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61654" name="biaya185" value="6648" onchange="hitungTotal30()">
                                            <label for="customRadio61654" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya186 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61661" name="biaya186" value="0" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61661" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61661" name="biaya186" value="0" onchange="hitungTotal30()">
                                            <label for="customRadio61661" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya186 == 2216) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61662" name="biaya186" value="2216" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61662" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61662" name="biaya186" value="2216" onchange="hitungTotal30()">
                                            <label for="customRadio61662" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya186 == 4432) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61663" name="biaya186" value="4432" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61663" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61663" name="biaya186" value="4432" onchange="hitungTotal30()">
                                            <label for="customRadio61663" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya186 == 6648) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61664" name="biaya186" value="6648" onchange="hitungTotal30()" checked>
                                            <label for="customRadio61664" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio61664" name="biaya186" value="6648" onchange="hitungTotal30()">
                                            <label for="customRadio61664" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total30'); ?>
                            </tr>

                            <tr>
                                <td>Novorapid</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya325 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6171" name="biaya325" value="114392" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox6171" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6171" name="biaya325" value="114392" onchange="hitungTotal54()">
                                            <label for="customCheckbox6171" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya326 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6172" name="biaya326" value="114392" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox6172" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6172" name="biaya326" value="114392" onchange="hitungTotal54()">
                                            <label for="customCheckbox6172" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya327 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6173" name="biaya327" value="114392" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox6173" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6173" name="biaya327" value="114392" onchange="hitungTotal54()">
                                            <label for="customCheckbox6173" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya328 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6174" name="biaya328" value="114392" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox6174" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6174" name="biaya328" value="114392" onchange="hitungTotal54()">
                                            <label for="customCheckbox6174" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya329 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6175" name="biaya329" value="114392" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox6175" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6175" name="biaya329" value="114392" onchange="hitungTotal54()">
                                            <label for="customCheckbox6175" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya330 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6176" name="biaya330" value="114392" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox6176" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6176" name="biaya330" value="114392" onchange="hitungTotal54()">
                                            <label for="customCheckbox6176" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total54'); ?>
                            </tr>

                            <tr>
                                <td>Levemir</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya331 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6181" name="biaya331" value="100741" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox6181" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6181" name="biaya331" value="100741" onchange="hitungTotal55()">
                                            <label for="customCheckbox6181" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya332 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6182" name="biaya332" value="100741" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox6182" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6182" name="biaya332" value="100741" onchange="hitungTotal55()">
                                            <label for="customCheckbox6182" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya333 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6183" name="biaya333" value="100741" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox6183" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6183" name="biaya333" value="100741" onchange="hitungTotal55()">
                                            <label for="customCheckbox6183" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya334 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6184" name="biaya334" value="100741" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox6184" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6184" name="biaya334" value="100741" onchange="hitungTotal55()">
                                            <label for="customCheckbox6184" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya335 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6185" name="biaya335" value="100741" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox6185" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6185" name="biaya335" value="100741" onchange="hitungTotal55()">
                                            <label for="customCheckbox6185" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya336 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6186" name="biaya336" value="100741" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox6186" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6186" name="biaya336" value="100741" onchange="hitungTotal55()">
                                            <label for="customCheckbox6186" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total55'); ?>
                            </tr>

                            <tr>
                                <td rowspan="4">b. Infus</td>
                                <td>Asering</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya187 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6211" name="biaya187" value="10500" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox6211" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6211" name="biaya187" value="10500" onchange="hitungTotal31()">
                                            <label for="customCheckbox6211" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya188 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6212" name="biaya188" value="10500" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox6212" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6212" name="biaya188" value="10500" onchange="hitungTotal31()">
                                            <label for="customCheckbox6212" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya189 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6213" name="biaya189" value="10500" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox6213" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6213" name="biaya189" value="10500" onchange="hitungTotal31()">
                                            <label for="customCheckbox6213" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya190 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6214" name="biaya190" value="10500" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox6214" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6214" name="biaya190" value="10500" onchange="hitungTotal31()">
                                            <label for="customCheckbox6214" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya191 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6215" name="biaya191" value="10500" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox6215" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6215" name="biaya191" value="10500" onchange="hitungTotal31()">
                                            <label for="customCheckbox6215" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya192 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6216" name="biaya192" value="10500" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox6216" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6216" name="biaya192" value="10500" onchange="hitungTotal31()">
                                            <label for="customCheckbox6216" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total31'); ?>
                            </tr>

                            <tr>
                                <td>Manitol</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya193 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6221" name="biaya193" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox6221" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6221" name="biaya193" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox6221" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya194 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6222" name="biaya194" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox6222" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6222" name="biaya194" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox6222" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya195 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6223" name="biaya195" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox6223" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6223" name="biaya195" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox6223" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya196 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6224" name="biaya196" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox6224" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6224" name="biaya196" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox6224" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya197 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6225" name="biaya197" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox6225" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6225" name="biaya197" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox6225" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya198 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6226" name="biaya198" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox6226" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6226" name="biaya198" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox6226" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total32'); ?>
                            </tr>

                            <tr>
                                <td>Nacl 3%</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya313 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6231" name="biaya313" value="29221" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox6231" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6231" name="biaya313" value="29221" onchange="hitungTotal52()">
                                            <label for="customCheckbox6231" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya314 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6232" name="biaya314" value="29221" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox6232" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6232" name="biaya314" value="29221" onchange="hitungTotal52()">
                                            <label for="customCheckbox6232" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya315 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6233" name="biaya315" value="29221" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox6233" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6233" name="biaya315" value="29221" onchange="hitungTotal52()">
                                            <label for="customCheckbox6233" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya316 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6234" name="biaya316" value="29221" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox6234" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6234" name="biaya316" value="29221" onchange="hitungTotal52()">
                                            <label for="customCheckbox6234" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya317 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6235" name="biaya317" value="29221" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox6235" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6235" name="biaya317" value="29221" onchange="hitungTotal52()">
                                            <label for="customCheckbox6235" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya318 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6236" name="biaya318" value="29221" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox6236" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6236" name="biaya318" value="29221" onchange="hitungTotal52()">
                                            <label for="customCheckbox6236" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total52'); ?>
                            </tr>

                            <tr>
                                <td>KCL</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya319 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6241" name="biaya319" value="29221" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox6241" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6241" name="biaya319" value="29221" onchange="hitungTotal53()">
                                            <label for="customCheckbox6241" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya320 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6242" name="biaya320" value="29221" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox6242" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6242" name="biaya320" value="29221" onchange="hitungTotal53()">
                                            <label for="customCheckbox6242" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya321 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6243" name="biaya321" value="29221" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox6243" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6243" name="biaya321" value="29221" onchange="hitungTotal53()">
                                            <label for="customCheckbox6243" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya322 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6244" name="biaya322" value="29221" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox6244" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6244" name="biaya322" value="29221" onchange="hitungTotal53()">
                                            <label for="customCheckbox6244" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya323 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6245" name="biaya323" value="29221" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox6245" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6245" name="biaya323" value="29221" onchange="hitungTotal53()">
                                            <label for="customCheckbox6245" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya324 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6246" name="biaya324" value="29221" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox6246" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6246" name="biaya324" value="29221" onchange="hitungTotal53()">
                                            <label for="customCheckbox6246" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total53'); ?>
                            </tr>

                            <tr>
                                <td rowspan="8">c. Obat Oral</td>
                                <td>Antiplatelet</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya199 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63111" name="biaya199" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63111" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63111" name="biaya199" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63111" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya199 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63112" name="biaya199" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63112" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63112" name="biaya199" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63112" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya199 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63113" name="biaya199" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63113" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63113" name="biaya199" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63113" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya199 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63114" name="biaya199" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63114" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63114" name="biaya199" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63114" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya200 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63121" name="biaya200" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63121" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63121" name="biaya200" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63121" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya200 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63122" name="biaya200" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63122" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63122" name="biaya200" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63122" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya200 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63123" name="biaya200" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63123" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63123" name="biaya200" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63123" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya200 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63124" name="biaya200" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63124" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63124" name="biaya200" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63124" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya201 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63131" name="biaya201" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63131" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63131" name="biaya201" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63131" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya201 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63132" name="biaya201" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63132" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63132" name="biaya201" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63132" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya201 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63133" name="biaya201" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63133" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63133" name="biaya201" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63133" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya201 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63134" name="biaya201" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63134" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63134" name="biaya201" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63134" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya202 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63141" name="biaya202" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63141" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63141" name="biaya202" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63141" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya202 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63142" name="biaya202" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63142" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63142" name="biaya202" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63142" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya202 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63143" name="biaya202" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63143" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63143" name="biaya202" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63143" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya202 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63144" name="biaya202" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63144" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63144" name="biaya202" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63144" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya203 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63151" name="biaya203" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63151" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63151" name="biaya203" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63151" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya203 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63152" name="biaya203" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63152" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63152" name="biaya203" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63152" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya203 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63153" name="biaya203" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63153" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63153" name="biaya203" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63153" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya203 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63154" name="biaya203" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63154" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63154" name="biaya203" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63154" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya204 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63161" name="biaya204" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63161" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63161" name="biaya204" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63161" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya204 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63162" name="biaya204" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63162" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63162" name="biaya204" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63162" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya204 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63163" name="biaya204" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63163" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63163" name="biaya204" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63163" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya204 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63164" name="biaya204" value="0" onchange="hitungTotal33()" checked>
                                            <label for="customRadio63164" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63164" name="biaya204" value="0" onchange="hitungTotal33()">
                                            <label for="customRadio63164" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total33'); ?>
                            </tr>

                            <tr>
                                <td>Simvasatatin</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya205 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63211" name="biaya205" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63211" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63211" name="biaya205" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63211" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya205 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63212" name="biaya205" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63212" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63212" name="biaya205" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63212" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya205 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63213" name="biaya205" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63213" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63213" name="biaya205" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63213" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya205 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63214" name="biaya205" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63214" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63214" name="biaya205" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63214" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya206 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63221" name="biaya206" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63221" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63221" name="biaya206" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63221" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya206 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63222" name="biaya206" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63222" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63222" name="biaya206" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63222" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya206 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63223" name="biaya206" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63223" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63223" name="biaya206" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63223" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya206 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63224" name="biaya206" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63224" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63224" name="biaya206" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63224" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya207 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63231" name="biaya207" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63231" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63231" name="biaya207" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63231" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya207 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63232" name="biaya207" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63232" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63232" name="biaya207" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63232" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya207 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63233" name="biaya207" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63233" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63233" name="biaya207" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63233" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya207 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63234" name="biaya207" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63234" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63234" name="biaya207" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63234" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya208 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63241" name="biaya208" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63241" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63241" name="biaya208" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63241" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya208 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63242" name="biaya208" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63242" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63242" name="biaya208" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63242" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya208 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63243" name="biaya208" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63243" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63243" name="biaya208" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63243" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya208 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63244" name="biaya208" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63244" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63244" name="biaya208" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63244" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya209 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63251" name="biaya209" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63251" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63251" name="biaya209" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63251" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya209 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63252" name="biaya209" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63252" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63252" name="biaya209" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63252" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya209 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63253" name="biaya209" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63253" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63253" name="biaya209" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63253" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya209 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63254" name="biaya209" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63254" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63254" name="biaya209" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63254" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya210 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63261" name="biaya210" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63261" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63261" name="biaya210" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63261" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya210 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63262" name="biaya210" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63262" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63262" name="biaya210" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63262" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya210 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63263" name="biaya210" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63263" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63263" name="biaya210" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63263" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya210 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63264" name="biaya210" value="0" onchange="hitungTotal34()" checked>
                                            <label for="customRadio63264" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63264" name="biaya210" value="0" onchange="hitungTotal34()">
                                            <label for="customRadio63264" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total34'); ?>
                            </tr>

                            <tr>
                                <td>Amlodipin/Candesartan</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya211 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63311" name="biaya211" value="0" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63311" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63311" name="biaya211" value="0" onchange="hitungTotal35()">
                                            <label for="customRadio63311" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya211 == 352) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63312" name="biaya211" value="352" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63312" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63312" name="biaya211" value="352" onchange="hitungTotal35()">
                                            <label for="customRadio63312" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya211 == 704) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63313" name="biaya211" value="704" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63313" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63313" name="biaya211" value="704" onchange="hitungTotal35()">
                                            <label for="customRadio63313" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya211 == 1056) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63314" name="biaya211" value="1056" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63314" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63314" name="biaya211" value="1056" onchange="hitungTotal35()">
                                            <label for="customRadio63314" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya212 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63321" name="biaya212" value="0" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63321" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63321" name="biaya212" value="0" onchange="hitungTotal35()">
                                            <label for="customRadio63321" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya212 == 352) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63322" name="biaya212" value="352" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63322" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63322" name="biaya212" value="352" onchange="hitungTotal35()">
                                            <label for="customRadio63322" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya212 == 704) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63323" name="biaya212" value="704" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63323" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63323" name="biaya212" value="704" onchange="hitungTotal35()">
                                            <label for="customRadio63323" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya212 == 1056) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63324" name="biaya212" value="1056" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63324" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63324" name="biaya212" value="1056" onchange="hitungTotal35()">
                                            <label for="customRadio63324" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya213 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63331" name="biaya213" value="0" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63331" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63331" name="biaya213" value="0" onchange="hitungTotal35()">
                                            <label for="customRadio63331" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya213 == 352) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63332" name="biaya213" value="352" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63332" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63332" name="biaya213" value="352" onchange="hitungTotal35()">
                                            <label for="customRadio63332" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya213 == 704) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63333" name="biaya213" value="704" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63333" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63333" name="biaya213" value="704" onchange="hitungTotal35()">
                                            <label for="customRadio63333" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya213 == 1056) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63334" name="biaya213" value="1056" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63334" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63334" name="biaya213" value="1056" onchange="hitungTotal35()">
                                            <label for="customRadio63334" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya214 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63341" name="biaya214" value="0" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63341" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63341" name="biaya214" value="0" onchange="hitungTotal35()">
                                            <label for="customRadio63341" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya214 == 352) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63342" name="biaya214" value="352" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63342" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63342" name="biaya214" value="352" onchange="hitungTotal35()">
                                            <label for="customRadio63342" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya214 == 704) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63343" name="biaya214" value="704" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63343" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63343" name="biaya214" value="704" onchange="hitungTotal35()">
                                            <label for="customRadio63343" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya214 == 1056) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63344" name="biaya214" value="1056" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63344" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63344" name="biaya214" value="1056" onchange="hitungTotal35()">
                                            <label for="customRadio63344" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya215 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63351" name="biaya215" value="0" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63351" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63351" name="biaya215" value="0" onchange="hitungTotal35()">
                                            <label for="customRadio63351" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya215 == 352) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63352" name="biaya215" value="352" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63352" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63352" name="biaya215" value="352" onchange="hitungTotal35()">
                                            <label for="customRadio63352" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya215 == 704) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63353" name="biaya215" value="704" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63353" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63353" name="biaya215" value="704" onchange="hitungTotal35()">
                                            <label for="customRadio63353" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya215 == 1056) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63354" name="biaya215" value="1056" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63354" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63354" name="biaya215" value="1056" onchange="hitungTotal35()">
                                            <label for="customRadio63354" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya216 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63361" name="biaya216" value="0" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63361" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63361" name="biaya216" value="0" onchange="hitungTotal35()">
                                            <label for="customRadio63361" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya216 == 352) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63362" name="biaya216" value="352" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63362" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63362" name="biaya216" value="352" onchange="hitungTotal35()">
                                            <label for="customRadio63362" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya216 == 704) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63363" name="biaya216" value="704" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63363" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63363" name="biaya216" value="704" onchange="hitungTotal35()">
                                            <label for="customRadio63363" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya216 == 1056) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63364" name="biaya216" value="1056" onchange="hitungTotal35()" checked>
                                            <label for="customRadio63364" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63364" name="biaya216" value="1056" onchange="hitungTotal35()">
                                            <label for="customRadio63364" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total35'); ?>
                            </tr>

                            <tr>
                                <td>CPG</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya217 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63411" name="biaya217" value="0" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63411" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63411" name="biaya217" value="0" onchange="hitungTotal36()">
                                            <label for="customRadio63411" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya217 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63412" name="biaya217" value="697" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63412" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63412" name="biaya217" value="697" onchange="hitungTotal36()">
                                            <label for="customRadio63412" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya217 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63413" name="biaya217" value="1394" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63413" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63413" name="biaya217" value="1394" onchange="hitungTotal36()">
                                            <label for="customRadio63413" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya217 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63414" name="biaya217" value="2091" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63414" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63414" name="biaya217" value="2091" onchange="hitungTotal36()">
                                            <label for="customRadio63414" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya218 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63421" name="biaya218" value="0" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63421" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63421" name="biaya218" value="0" onchange="hitungTotal36()">
                                            <label for="customRadio63421" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya218 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63422" name="biaya218" value="697" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63422" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63422" name="biaya218" value="697" onchange="hitungTotal36()">
                                            <label for="customRadio63422" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya218 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63423" name="biaya218" value="1394" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63423" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63423" name="biaya218" value="1394" onchange="hitungTotal36()">
                                            <label for="customRadio63423" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya218 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63424" name="biaya218" value="2091" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63424" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63424" name="biaya218" value="2091" onchange="hitungTotal36()">
                                            <label for="customRadio63424" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya219 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63431" name="biaya219" value="0" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63431" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63431" name="biaya219" value="0" onchange="hitungTotal36()">
                                            <label for="customRadio63431" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya219 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63432" name="biaya219" value="697" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63432" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63432" name="biaya219" value="697" onchange="hitungTotal36()">
                                            <label for="customRadio63432" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya219 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63433" name="biaya219" value="1394" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63433" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63433" name="biaya219" value="1394" onchange="hitungTotal36()">
                                            <label for="customRadio63433" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya219 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63434" name="biaya219" value="2091" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63434" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63434" name="biaya219" value="2091" onchange="hitungTotal36()">
                                            <label for="customRadio63434" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya220 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63441" name="biaya220" value="0" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63441" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63441" name="biaya220" value="0" onchange="hitungTotal36()">
                                            <label for="customRadio63441" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya220 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63442" name="biaya220" value="697" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63442" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63442" name="biaya220" value="697" onchange="hitungTotal36()">
                                            <label for="customRadio63442" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya220 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63443" name="biaya220" value="1394" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63443" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63443" name="biaya220" value="1394" onchange="hitungTotal36()">
                                            <label for="customRadio63443" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya220 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63444" name="biaya220" value="2091" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63444" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63444" name="biaya220" value="2091" onchange="hitungTotal36()">
                                            <label for="customRadio63444" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya221 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63451" name="biaya221" value="0" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63451" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63451" name="biaya221" value="0" onchange="hitungTotal36()">
                                            <label for="customRadio63451" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya221 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63452" name="biaya221" value="697" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63452" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63452" name="biaya221" value="697" onchange="hitungTotal36()">
                                            <label for="customRadio63452" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya221 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63453" name="biaya221" value="1394" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63453" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63453" name="biaya221" value="1394" onchange="hitungTotal36()">
                                            <label for="customRadio63453" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya221 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63454" name="biaya221" value="2091" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63454" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63454" name="biaya221" value="2091" onchange="hitungTotal36()">
                                            <label for="customRadio63454" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya222 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63461" name="biaya222" value="0" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63461" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63461" name="biaya222" value="0" onchange="hitungTotal36()">
                                            <label for="customRadio63461" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya222 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63462" name="biaya222" value="697" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63462" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63462" name="biaya222" value="697" onchange="hitungTotal36()">
                                            <label for="customRadio63462" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya222 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63463" name="biaya222" value="1394" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63463" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63463" name="biaya222" value="1394" onchange="hitungTotal36()">
                                            <label for="customRadio63463" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya222 == 1) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63464" name="biaya222" value="2091" onchange="hitungTotal36()" checked>
                                            <label for="customRadio63464" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63464" name="biaya222" value="2091" onchange="hitungTotal36()">
                                            <label for="customRadio63464" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total36'); ?>
                            </tr>

                            <tr>
                                <td>Mecobalamin</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya223 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63511" name="biaya223" value="0" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63511" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63511" name="biaya223" value="0" onchange="hitungTotal37()">
                                            <label for="customRadio63511" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya223 == 806) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63512" name="biaya223" value="806" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63512" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63512" name="biaya223" value="806" onchange="hitungTotal37()">
                                            <label for="customRadio63512" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya223 == 1612) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63513" name="biaya223" value="1612" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63513" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63513" name="biaya223" value="1612" onchange="hitungTotal37()">
                                            <label for="customRadio63513" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya223 == 2418) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63514" name="biaya223" value="2418" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63514" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63514" name="biaya223" value="2418" onchange="hitungTotal37()">
                                            <label for="customRadio63514" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya224 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63521" name="biaya224" value="0" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63521" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63521" name="biaya224" value="0" onchange="hitungTotal37()">
                                            <label for="customRadio63521" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya224 == 806) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63522" name="biaya224" value="806" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63522" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63522" name="biaya224" value="806" onchange="hitungTotal37()">
                                            <label for="customRadio63522" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya224 == 1612) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63523" name="biaya224" value="1612" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63523" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63523" name="biaya224" value="1612" onchange="hitungTotal37()">
                                            <label for="customRadio63523" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya224 == 2418) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63524" name="biaya224" value="2418" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63524" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63524" name="biaya224" value="2418" onchange="hitungTotal37()">
                                            <label for="customRadio63524" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya225 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63531" name="biaya225" value="0" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63531" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63531" name="biaya225" value="0" onchange="hitungTotal37()">
                                            <label for="customRadio63531" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya225 == 806) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63532" name="biaya225" value="806" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63532" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63532" name="biaya225" value="806" onchange="hitungTotal37()">
                                            <label for="customRadio63532" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya225 == 1612) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63533" name="biaya225" value="1612" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63533" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63533" name="biaya225" value="1612" onchange="hitungTotal37()">
                                            <label for="customRadio63533" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya225 == 2418) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63534" name="biaya225" value="2418" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63534" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63534" name="biaya225" value="2418" onchange="hitungTotal37()">
                                            <label for="customRadio63534" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya226 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63541" name="biaya226" value="0" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63541" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63541" name="biaya226" value="0" onchange="hitungTotal37()">
                                            <label for="customRadio63541" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya226 == 806) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63542" name="biaya226" value="806" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63542" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63542" name="biaya226" value="806" onchange="hitungTotal37()">
                                            <label for="customRadio63542" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya226 == 1612) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63543" name="biaya226" value="1612" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63543" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63543" name="biaya226" value="1612" onchange="hitungTotal37()">
                                            <label for="customRadio63543" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya226 == 2418) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63544" name="biaya226" value="2418" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63544" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63544" name="biaya226" value="2418" onchange="hitungTotal37()">
                                            <label for="customRadio63544" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya227 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63551" name="biaya227" value="0" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63551" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63551" name="biaya227" value="0" onchange="hitungTotal37()">
                                            <label for="customRadio63551" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya227 == 806) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63552" name="biaya227" value="806" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63552" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63552" name="biaya227" value="806" onchange="hitungTotal37()">
                                            <label for="customRadio63552" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya227 == 1612) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63553" name="biaya227" value="1612" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63553" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63553" name="biaya227" value="1612" onchange="hitungTotal37()">
                                            <label for="customRadio63553" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya227 == 2418) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63554" name="biaya227" value="2418" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63554" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63554" name="biaya227" value="2418" onchange="hitungTotal37()">
                                            <label for="customRadio63554" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya228 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63561" name="biaya228" value="0" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63561" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63561" name="biaya228" value="0" onchange="hitungTotal37()">
                                            <label for="customRadio63561" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya228 == 806) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63562" name="biaya228" value="806" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63562" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63562" name="biaya228" value="806" onchange="hitungTotal37()">
                                            <label for="customRadio63562" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya228 == 1612) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63563" name="biaya228" value="1612" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63563" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63563" name="biaya228" value="1612" onchange="hitungTotal37()">
                                            <label for="customRadio63563" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya228 == 2418) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63564" name="biaya228" value="2418" onchange="hitungTotal37()" checked>
                                            <label for="customRadio63564" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio63564" name="biaya228" value="2418" onchange="hitungTotal37()">
                                            <label for="customRadio63564" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total37'); ?>
                            </tr>

                            <tr>
                                <td>Metformin</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya337 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62611" name="biaya337" value="0" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62611" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62611" name="biaya337" value="0" onchange="hitungTotal56()">
                                            <label for="customRadio62611" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya337 == 266) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62612" name="biaya337" value="266" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62612" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62612" name="biaya337" value="266" onchange="hitungTotal56()">
                                            <label for="customRadio62612" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya337 == 532) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62613" name="biaya337" value="532" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62613" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62613" name="biaya337" value="532" onchange="hitungTotal56()">
                                            <label for="customRadio62613" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya337 == 798) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62614" name="biaya337" value="798" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62614" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62614" name="biaya337" value="798" onchange="hitungTotal56()">
                                            <label for="customRadio62614" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya338 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62621" name="biaya338" value="0" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62621" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62621" name="biaya338" value="0" onchange="hitungTotal56()">
                                            <label for="customRadio62621" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya338 == 266) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62622" name="biaya338" value="266" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62622" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62622" name="biaya338" value="266" onchange="hitungTotal56()">
                                            <label for="customRadio62622" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya338 == 532) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62623" name="biaya338" value="532" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62623" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62623" name="biaya338" value="532" onchange="hitungTotal56()">
                                            <label for="customRadio62623" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya338 == 798) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62624" name="biaya338" value="798" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62624" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62624" name="biaya338" value="798" onchange="hitungTotal56()">
                                            <label for="customRadio62624" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya339 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62631" name="biaya339" value="0" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62631" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62631" name="biaya339" value="0" onchange="hitungTotal56()">
                                            <label for="customRadio62631" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya339 == 266) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62632" name="biaya339" value="266" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62632" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62632" name="biaya339" value="266" onchange="hitungTotal56()">
                                            <label for="customRadio62632" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya339 == 532) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62633" name="biaya339" value="532" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62633" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62633" name="biaya339" value="532" onchange="hitungTotal56()">
                                            <label for="customRadio62633" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya339 == 798) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62634" name="biaya339" value="798" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62634" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62634" name="biaya339" value="798" onchange="hitungTotal56()">
                                            <label for="customRadio62634" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya340 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62641" name="biaya340" value="0" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62641" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62641" name="biaya340" value="0" onchange="hitungTotal56()">
                                            <label for="customRadio62641" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya340 == 266) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62642" name="biaya340" value="266" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62642" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62642" name="biaya340" value="266" onchange="hitungTotal56()">
                                            <label for="customRadio62642" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya340 == 532) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62643" name="biaya340" value="532" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62643" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62643" name="biaya340" value="532" onchange="hitungTotal56()">
                                            <label for="customRadio62643" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya340 == 798) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62644" name="biaya340" value="798" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62644" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62644" name="biaya340" value="798" onchange="hitungTotal56()">
                                            <label for="customRadio62644" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya341 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62651" name="biaya341" value="0" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62651" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62651" name="biaya341" value="0" onchange="hitungTotal56()">
                                            <label for="customRadio62651" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya341 == 266) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62652" name="biaya341" value="266" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62652" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62652" name="biaya341" value="266" onchange="hitungTotal56()">
                                            <label for="customRadio62652" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya341 == 532) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62653" name="biaya341" value="532" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62653" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62653" name="biaya341" value="532" onchange="hitungTotal56()">
                                            <label for="customRadio62653" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya341 == 798) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62654" name="biaya341" value="798" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62654" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62654" name="biaya341" value="798" onchange="hitungTotal56()">
                                            <label for="customRadio62654" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya342 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62661" name="biaya342" value="0" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62661" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62661" name="biaya342" value="0" onchange="hitungTotal56()">
                                            <label for="customRadio62661" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya342 == 266) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62662" name="biaya342" value="266" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62662" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62662" name="biaya342" value="266" onchange="hitungTotal56()">
                                            <label for="customRadio62662" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya342 == 532) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62663" name="biaya342" value="532" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62663" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62663" name="biaya342" value="532" onchange="hitungTotal56()">
                                            <label for="customRadio62663" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya342 == 798) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62664" name="biaya342" value="798" onchange="hitungTotal56()" checked>
                                            <label for="customRadio62664" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62664" name="biaya342" value="798" onchange="hitungTotal56()">
                                            <label for="customRadio62664" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total56'); ?>
                            </tr>

                            <tr>
                                <td>Acarbose</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya343 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62711" name="biaya343" value="0" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62711" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62711" name="biaya343" value="0" onchange="hitungTotal57()">
                                            <label for="customRadio62711" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya343 == 900) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62712" name="biaya343" value="900" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62712" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62712" name="biaya343" value="900" onchange="hitungTotal57()">
                                            <label for="customRadio62712" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya343 == 1800) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62713" name="biaya343" value="1800" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62713" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62713" name="biaya343" value="1800" onchange="hitungTotal57()">
                                            <label for="customRadio62713" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya343 == 2700) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62714" name="biaya343" value="2700" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62714" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62714" name="biaya343" value="2700" onchange="hitungTotal57()">
                                            <label for="customRadio62714" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya344 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62721" name="biaya344" value="0" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62721" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62721" name="biaya344" value="0" onchange="hitungTotal57()">
                                            <label for="customRadio62721" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya344 == 900) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62722" name="biaya344" value="900" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62722" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62722" name="biaya344" value="900" onchange="hitungTotal57()">
                                            <label for="customRadio62722" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya344 == 1800) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62723" name="biaya344" value="1800" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62723" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62723" name="biaya344" value="1800" onchange="hitungTotal57()">
                                            <label for="customRadio62723" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya344 == 2700) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62724" name="biaya344" value="2700" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62724" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62724" name="biaya344" value="2700" onchange="hitungTotal57()">
                                            <label for="customRadio62724" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya345 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62731" name="biaya345" value="0" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62731" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62731" name="biaya345" value="0" onchange="hitungTotal57()">
                                            <label for="customRadio62731" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya345 == 900) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62732" name="biaya345" value="900" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62732" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62732" name="biaya345" value="900" onchange="hitungTotal57()">
                                            <label for="customRadio62732" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya345 == 1800) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62733" name="biaya345" value="1800" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62733" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62733" name="biaya345" value="1800" onchange="hitungTotal57()">
                                            <label for="customRadio62733" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya345 == 2700) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62734" name="biaya345" value="2700" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62734" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62734" name="biaya345" value="2700" onchange="hitungTotal57()">
                                            <label for="customRadio62734" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya346 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62741" name="biaya346" value="0" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62741" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62741" name="biaya346" value="0" onchange="hitungTotal57()">
                                            <label for="customRadio62741" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya346 == 900) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62742" name="biaya346" value="900" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62742" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62742" name="biaya346" value="900" onchange="hitungTotal57()">
                                            <label for="customRadio62742" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya346 == 1800) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62743" name="biaya346" value="1800" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62743" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62743" name="biaya346" value="1800" onchange="hitungTotal57()">
                                            <label for="customRadio62743" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya346 == 2700) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62744" name="biaya346" value="2700" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62744" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62744" name="biaya346" value="2700" onchange="hitungTotal57()">
                                            <label for="customRadio62744" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya347 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62751" name="biaya347" value="0" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62751" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62751" name="biaya347" value="0" onchange="hitungTotal57()">
                                            <label for="customRadio62751" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya347 == 900) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62752" name="biaya347" value="900" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62752" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62752" name="biaya347" value="900" onchange="hitungTotal57()">
                                            <label for="customRadio62752" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya347 == 1800) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62753" name="biaya347" value="1800" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62753" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62753" name="biaya347" value="1800" onchange="hitungTotal57()">
                                            <label for="customRadio62753" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya347 == 2700) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62754" name="biaya347" value="2700" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62754" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62754" name="biaya347" value="2700" onchange="hitungTotal57()">
                                            <label for="customRadio62754" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya348 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62761" name="biaya348" value="0" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62761" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62761" name="biaya348" value="0" onchange="hitungTotal57()">
                                            <label for="customRadio62761" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya348 == 900) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62762" name="biaya348" value="900" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62762" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62762" name="biaya348" value="900" onchange="hitungTotal57()">
                                            <label for="customRadio62762" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya348 == 1800) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62763" name="biaya348" value="1800" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62763" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62763" name="biaya348" value="1800" onchange="hitungTotal57()">
                                            <label for="customRadio62763" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya348 == 2700) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62764" name="biaya348" value="2700" onchange="hitungTotal57()" checked>
                                            <label for="customRadio62764" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62764" name="biaya348" value="2700" onchange="hitungTotal57()">
                                            <label for="customRadio62764" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total57'); ?>

                            </tr>

                            <tr>

                                <td>Glimepirid</td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya349 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62811" name="biaya349" value="0" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62811" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62811" name="biaya349" value="0" onchange="hitungTotal58()">
                                            <label for="customRadio62811" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya349 == 147) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62812" name="biaya349" value="147" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62812" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62812" name="biaya349" value="147" onchange="hitungTotal58()">
                                            <label for="customRadio62812" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya349 == 294) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62813" name="biaya349" value="294" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62813" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62813" name="biaya349" value="294" onchange="hitungTotal58()">
                                            <label for="customRadio62813" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya349 == 441) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62814" name="biaya349" value="441" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62814" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62814" name="biaya349" value="441" onchange="hitungTotal58()">
                                            <label for="customRadio62814" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya350 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62821" name="biaya350" value="0" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62821" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62821" name="biaya350" value="0" onchange="hitungTotal58()">
                                            <label for="customRadio62821" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya350 == 147) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62822" name="biaya350" value="147" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62822" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62822" name="biaya350" value="147" onchange="hitungTotal58()">
                                            <label for="customRadio62822" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya350 == 294) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62823" name="biaya350" value="294" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62823" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62823" name="biaya350" value="294" onchange="hitungTotal58()">
                                            <label for="customRadio62823" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya350 == 441) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62824" name="biaya350" value="441" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62824" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62824" name="biaya350" value="441" onchange="hitungTotal58()">
                                            <label for="customRadio62824" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya351 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62831" name="biaya351" value="0" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62831" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62831" name="biaya351" value="0" onchange="hitungTotal58()">
                                            <label for="customRadio62831" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya351 == 147) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62832" name="biaya351" value="147" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62832" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62832" name="biaya351" value="147" onchange="hitungTotal58()">
                                            <label for="customRadio62832" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya351 == 294) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62833" name="biaya351" value="294" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62833" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62833" name="biaya351" value="294" onchange="hitungTotal58()">
                                            <label for="customRadio62833" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya351 == 441) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62834" name="biaya351" value="441" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62834" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62834" name="biaya351" value="441" onchange="hitungTotal58()">
                                            <label for="customRadio62834" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya352 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62841" name="biaya352" value="0" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62841" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62841" name="biaya352" value="0" onchange="hitungTotal58()">
                                            <label for="customRadio62841" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya352 == 147) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62842" name="biaya352" value="147" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62842" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62842" name="biaya352" value="147" onchange="hitungTotal58()">
                                            <label for="customRadio62842" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya352 == 294) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62843" name="biaya352" value="294" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62843" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62843" name="biaya352" value="294" onchange="hitungTotal58()">
                                            <label for="customRadio62843" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya352 == 441) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62844" name="biaya352" value="441" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62844" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62844" name="biaya352" value="441" onchange="hitungTotal58()">
                                            <label for="customRadio62844" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya353 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62851" name="biaya353" value="0" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62851" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62851" name="biaya353" value="0" onchange="hitungTotal58()">
                                            <label for="customRadio62851" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya353 == 147) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62852" name="biaya353" value="147" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62852" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62852" name="biaya353" value="147" onchange="hitungTotal58()">
                                            <label for="customRadio62852" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya353 == 294) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62853" name="biaya353" value="294" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62853" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62853" name="biaya353" value="294" onchange="hitungTotal58()">
                                            <label for="customRadio62853" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya353 == 441) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62854" name="biaya353" value="441" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62854" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62854" name="biaya353" value="441" onchange="hitungTotal58()">
                                            <label for="customRadio62854" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>


                                <td>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya354 == 0) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62861" name="biaya354" value="0" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62861" class="custom-control-label">-</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62861" name="biaya354" value="0" onchange="hitungTotal58()">
                                            <label for="customRadio62861" class="custom-control-label">-</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya354 == 147) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62862" name="biaya354" value="147" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62862" class="custom-control-label">1X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62862" name="biaya354" value="147" onchange="hitungTotal58()">
                                            <label for="customRadio62862" class="custom-control-label">1X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya354 == 294) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62863" name="biaya354" value="294" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62863" class="custom-control-label">2X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62863" name="biaya354" value="294" onchange="hitungTotal58()">
                                            <label for="customRadio62863" class="custom-control-label">2X</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if ($biaya354 == 441) { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62864" name="biaya354" value="441" onchange="hitungTotal58()" checked>
                                            <label for="customRadio62864" class="custom-control-label">3X</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="radio" id="customRadio62864" name="biaya354" value="441" onchange="hitungTotal58()">
                                            <label for="customRadio62864" class="custom-control-label">3X</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total58'); ?>
                            </tr>

                            <tr>
                                <td rowspan="1">d. Oksigenasi</td>
                                <td>3 lpm</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya229 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6411" name="biaya229" value="0" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox6411" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6411" name="biaya229" value="0" onchange="hitungTotal38()">
                                            <label for="customCheckbox6411" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya230 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6412" name="biaya230" value="0" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox6412" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6412" name="biaya230" value="0" onchange="hitungTotal38()">
                                            <label for="customCheckbox6412" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya231 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6413" name="biaya231" value="0" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox6413" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6413" name="biaya231" value="0" onchange="hitungTotal38()">
                                            <label for="customCheckbox6413" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya232 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6414" name="biaya232" value="0" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox6414" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6414" name="biaya232" value="0" onchange="hitungTotal38()">
                                            <label for="customCheckbox6414" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya233 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6415" name="biaya233" value="0" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox6415" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6415" name="biaya233" value="0" onchange="hitungTotal38()">
                                            <label for="customCheckbox6415" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya234 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6416" name="biaya234" value="0" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox6416" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6416" name="biaya234" value="0" onchange="hitungTotal38()">
                                            <label for="customCheckbox6416" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total38'); ?>
                            </tr>

                            <!-- Nomor 7 -->
                            <tr>
                                <td rowspan="14">7</td>
                                <td rowspan="1">a. DPJP</td>
                                <td>Asesmen Ulang</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya235 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7111" name="biaya235" value="45000" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox7111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7111" name="biaya235" value="45000" onchange="hitungTotal39()">
                                            <label for="customCheckbox7111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya236 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7112" name="biaya236" value="45000" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox7112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7112" name="biaya236" value="45000" onchange="hitungTotal39()">
                                            <label for="customCheckbox7112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya237 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7113" name="biaya237" value="45000" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox7113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7113" name="biaya237" value="45000" onchange="hitungTotal39()">
                                            <label for="customCheckbox7113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya238 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7114" name="biaya238" value="45000" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox7114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7114" name="biaya238" value="45000" onchange="hitungTotal39()">
                                            <label for="customCheckbox7114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya239 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7115" name="biaya239" value="45000" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox7115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7115" name="biaya239" value="45000" onchange="hitungTotal39()">
                                            <label for="customCheckbox7115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya240 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7116" name="biaya240" value="45000" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox7116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7116" name="biaya240" value="45000" onchange="hitungTotal39()">
                                            <label for="customCheckbox7116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total39'); ?>

                            </tr>

                            <tr>

                                <td rowspan="2">b. Non DPJP</td>
                                <td>DPJP Sekunder</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya241 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7211" name="biaya241" value="45000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox7211" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7211" name="biaya241" value="45000" onchange="hitungTotal40()">
                                            <label for="customCheckbox7211" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya242 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7212" name="biaya242" value="45000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox7212" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7212" name="biaya242" value="45000" onchange="hitungTotal40()">
                                            <label for="customCheckbox7212" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya243 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7213" name="biaya243" value="45000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox7213" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7213" name="biaya243" value="45000" onchange="hitungTotal40()">
                                            <label for="customCheckbox7213" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya244 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7214" name="biaya244" value="45000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox7214" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7214" name="biaya244" value="45000" onchange="hitungTotal40()">
                                            <label for="customCheckbox7214" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya245 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7215" name="biaya245" value="45000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox7215" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7215" name="biaya245" value="45000" onchange="hitungTotal40()">
                                            <label for="customCheckbox7215" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya246 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7216" name="biaya246" value="45000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox7216" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7216" name="biaya246" value="45000" onchange="hitungTotal40()">
                                            <label for="customCheckbox7216" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total40'); ?>

                            </tr>

                            <tr>


                                <td>DU</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya247 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7221" name="biaya247" value="27000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox7221" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7221" name="biaya247" value="27000" onchange="hitungTotal41()">
                                            <label for="customCheckbox7221" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya248 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7222" name="biaya248" value="27000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox7222" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7222" name="biaya248" value="27000" onchange="hitungTotal41()">
                                            <label for="customCheckbox7222" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya249 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7223" name="biaya249" value="27000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox7223" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7223" name="biaya249" value="27000" onchange="hitungTotal41()">
                                            <label for="customCheckbox7223" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya250 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7224" name="biaya250" value="27000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox7224" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7224" name="biaya250" value="27000" onchange="hitungTotal41()">
                                            <label for="customCheckbox7224" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya251 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7225" name="biaya251" value="27000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox7225" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7225" name="biaya251" value="27000" onchange="hitungTotal41()">
                                            <label for="customCheckbox7225" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya252 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7226" name="biaya252" value="27000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox7226" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7226" name="biaya252" value="27000" onchange="hitungTotal41()">
                                            <label for="customCheckbox7226" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total41'); ?>
                            </tr>

                            <tr>
                                <td rowspan="4">c. Keperawatan</td>

                                <td>Asuhan Keperawatan</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya253 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7311" name="biaya253" value="13000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox7311" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7311" name="biaya253" value="13000" onchange="hitungTotal42()">
                                            <label for="customCheckbox7311" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya254 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7312" name="biaya254" value="13000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox7312" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7312" name="biaya254" value="13000" onchange="hitungTotal42()">
                                            <label for="customCheckbox7312" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya255 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7313" name="biaya255" value="13000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox7313" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7313" name="biaya255" value="13000" onchange="hitungTotal42()">
                                            <label for="customCheckbox7313" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya256 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7314" name="biaya256" value="13000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox7314" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7314" name="biaya256" value="13000" onchange="hitungTotal42()">
                                            <label for="customCheckbox7314" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya257 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7315" name="biaya257" value="13000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox7315" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7315" name="biaya257" value="13000" onchange="hitungTotal42()">
                                            <label for="customCheckbox7315" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya258 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7316" name="biaya258" value="13000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox7316" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7316" name="biaya258" value="13000" onchange="hitungTotal42()">
                                            <label for="customCheckbox7316" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total42'); ?>

                            </tr>

                            <td>Discharge Planning</td>

                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya259 == 19600) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7321" name="biaya259" value="19600" onchange="hitungTotal43()" checked>
                                        <label for="customCheckbox7321" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7321" name="biaya259" value="19600" onchange="hitungTotal43()">
                                        <label for="customCheckbox7321" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya260 == 19600) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7322" name="biaya260" value="19600" onchange="hitungTotal43()" checked>
                                        <label for="customCheckbox7322" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7322" name="biaya260" value="19600" onchange="hitungTotal43()">
                                        <label for="customCheckbox7322" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya261 == 19600) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7323" name="biaya261" value="19600" onchange="hitungTotal43()" checked>
                                        <label for="customCheckbox7323" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7323" name="biaya261" value="19600" onchange="hitungTotal43()">
                                        <label for="customCheckbox7323" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya262 == 19600) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7324" name="biaya262" value="19600" onchange="hitungTotal43()" checked>
                                        <label for="customCheckbox7324" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7324" name="biaya262" value="19600" onchange="hitungTotal43()">
                                        <label for="customCheckbox7324" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya263 == 19600) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7325" name="biaya263" value="19600" onchange="hitungTotal43()" checked>
                                        <label for="customCheckbox7325" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7325" name="biaya263" value="19600" onchange="hitungTotal43()">
                                        <label for="customCheckbox7325" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya264 == 19600) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7326" name="biaya264" value="19600" onchange="hitungTotal43()" checked>
                                        <label for="customCheckbox7326" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7326" name="biaya264" value="19600" onchange="hitungTotal43()">
                                        <label for="customCheckbox7326" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <!-- <td> -</td> -->
                            <?php echo view('total/total43'); ?>

                            </tr>

                            <td>Monit. ITBSM</td>

                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya265 == 28100) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7331" name="biaya265" value="28100" onchange="hitungTotal44()" checked>
                                        <label for="customCheckbox7331" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7331" name="biaya265" value="28100" onchange="hitungTotal44()">
                                        <label for="customCheckbox7331" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya266 == 28100) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7332" name="biaya266" value="28100" onchange="hitungTotal44()" checked>
                                        <label for="customCheckbox7332" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7332" name="biaya266" value="28100" onchange="hitungTotal44()">
                                        <label for="customCheckbox7332" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya267 == 28100) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7333" name="biaya267" value="28100" onchange="hitungTotal44()" checked>
                                        <label for="customCheckbox7333" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7333" name="biaya267" value="28100" onchange="hitungTotal44()">
                                        <label for="customCheckbox7333" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya268 == 28100) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7334" name="biaya268" value="28100" onchange="hitungTotal44()" checked>
                                        <label for="customCheckbox7334" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7334" name="biaya268" value="28100" onchange="hitungTotal44()">
                                        <label for="customCheckbox7334" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya269 == 28100) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7335" name="biaya269" value="28100" onchange="hitungTotal44()" checked>
                                        <label for="customCheckbox7335" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7335" name="biaya269" value="28100" onchange="hitungTotal44()">
                                        <label for="customCheckbox7335" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya270 == 28100) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7336" name="biaya270" value="28100" onchange="hitungTotal44()" checked>
                                        <label for="customCheckbox7336" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7336" name="biaya270" value="28100" onchange="hitungTotal44()">
                                        <label for="customCheckbox7336" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <!-- <td> -</td> -->
                            <?php echo view('total/total44'); ?>

                            </tr>

                            <td>KDM</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya271 == 50800) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7341" name="biaya271" value="50800" onchange="hitungTotal45()" checked>
                                        <label for="customCheckbox7341" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7341" name="biaya271" value="50800" onchange="hitungTotal45()">
                                        <label for="customCheckbox7341" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya272 == 50800) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7342" name="biaya272" value="50800" onchange="hitungTotal45()" checked>
                                        <label for="customCheckbox7342" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7342" name="biaya272" value="50800" onchange="hitungTotal45()">
                                        <label for="customCheckbox7342" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya273 == 50800) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7343" name="biaya273" value="50800" onchange="hitungTotal45()" checked>
                                        <label for="customCheckbox7343" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7343" name="biaya273" value="50800" onchange="hitungTotal45()">
                                        <label for="customCheckbox7343" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya274 == 50800) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7344" name="biaya274" value="50800" onchange="hitungTotal45()" checked>
                                        <label for="customCheckbox7344" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7344" name="biaya274" value="50800" onchange="hitungTotal45()">
                                        <label for="customCheckbox7344" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya275 == 50800) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7345" name="biaya275" value="50800" onchange="hitungTotal45()" checked>
                                        <label for="customCheckbox7345" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7345" name="biaya275" value="50800" onchange="hitungTotal45()">
                                        <label for="customCheckbox7345" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya276 == 50800) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7346" name="biaya276" value="50800" onchange="hitungTotal45()" checked>
                                        <label for="customCheckbox7346" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7346" name="biaya276" value="50800" onchange="hitungTotal45()">
                                        <label for="customCheckbox7346" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <!-- <td> -</td> -->
                            <?php echo view('total/total45'); ?>
                            </tr>

                            <tr>
                                <td rowspan="6">d. Fisioterapi</td>
                                <td>-</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya277 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7411" name="biaya277" value="26000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox7411" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7411" name="biaya277" value="26000" onchange="hitungTotal46()">
                                            <label for="customCheckbox7411" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya278 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7412" name="biaya278" value="26000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox7412" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7412" name="biaya278" value="26000" onchange="hitungTotal46()">
                                            <label for="customCheckbox7412" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya279 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7413" name="biaya279" value="26000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox7413" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7413" name="biaya279" value="26000" onchange="hitungTotal46()">
                                            <label for="customCheckbox7413" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya280 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7414" name="biaya280" value="26000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox7414" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7414" name="biaya280" value="26000" onchange="hitungTotal46()">
                                            <label for="customCheckbox7414" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya281 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7415" name="biaya281" value="26000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox7415" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7415" name="biaya281" value="26000" onchange="hitungTotal46()">
                                            <label for="customCheckbox7415" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya282 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7416" name="biaya282" value="26000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox7416" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7416" name="biaya282" value="26000" onchange="hitungTotal46()">
                                            <label for="customCheckbox7416" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total46'); ?>

                            </tr>

                            <td>Bobath</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya283 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7421" name="biaya283" value="31500" onchange="hitungTotal47()" checked>
                                        <label for="customCheckbox7421" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7421" name="biaya283" value="31500" onchange="hitungTotal47()">
                                        <label for="customCheckbox7421" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya284 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7422" name="biaya284" value="31500" onchange="hitungTotal47()" checked>
                                        <label for="customCheckbox7422" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7422" name="biaya284" value="31500" onchange="hitungTotal47()">
                                        <label for="customCheckbox7422" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya285 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7423" name="biaya285" value="31500" onchange="hitungTotal47()" checked>
                                        <label for="customCheckbox7423" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7423" name="biaya285" value="31500" onchange="hitungTotal47()">
                                        <label for="customCheckbox7423" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya286 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7424" name="biaya286" value="31500" onchange="hitungTotal47()" checked>
                                        <label for="customCheckbox7424" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7424" name="biaya286" value="31500" onchange="hitungTotal47()">
                                        <label for="customCheckbox7424" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya287 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7425" name="biaya287" value="31500" onchange="hitungTotal47()" checked>
                                        <label for="customCheckbox7425" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7425" name="biaya287" value="31500" onchange="hitungTotal47()">
                                        <label for="customCheckbox7425" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya288 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7426" name="biaya288" value="31500" onchange="hitungTotal47()" checked>
                                        <label for="customCheckbox7426" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7426" name="biaya288" value="31500" onchange="hitungTotal47()">
                                        <label for="customCheckbox7426" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <!-- <td> -</td> -->
                            <?php echo view('total/total47'); ?>

                            </tr>

                            <td>PNF</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya289 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7431" name="biaya289" value="31500" onchange="hitungTotal48()" checked>
                                        <label for="customCheckbox7431" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7431" name="biaya289" value="31500" onchange="hitungTotal48()">
                                        <label for="customCheckbox7431" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya290 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7432" name="biaya290" value="31500" onchange="hitungTotal48()" checked>
                                        <label for="customCheckbox7432" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7432" name="biaya290" value="31500" onchange="hitungTotal48()">
                                        <label for="customCheckbox7432" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya291 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7433" name="biaya291" value="31500" onchange="hitungTotal48()" checked>
                                        <label for="customCheckbox7433" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7433" name="biaya291" value="31500" onchange="hitungTotal48()">
                                        <label for="customCheckbox7433" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya292 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7434" name="biaya292" value="31500" onchange="hitungTotal48()" checked>
                                        <label for="customCheckbox7434" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7434" name="biaya292" value="31500" onchange="hitungTotal48()">
                                        <label for="customCheckbox7434" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya293 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7435" name="biaya293" value="31500" onchange="hitungTotal48()" checked>
                                        <label for="customCheckbox7435" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7435" name="biaya293" value="31500" onchange="hitungTotal48()">
                                        <label for="customCheckbox7435" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya294 == 31500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7436" name="biaya294" value="31500" onchange="hitungTotal48()" checked>
                                        <label for="customCheckbox7436" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7436" name="biaya294" value="31500" onchange="hitungTotal48()">
                                        <label for="customCheckbox7436" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <!-- <td> -</td> -->
                            <?php echo view('total/total48'); ?>
                            </tr>

                            <td>Aktif</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya295 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7441" name="biaya295" value="18500" onchange="hitungTotal49()" checked>
                                        <label for="customCheckbox7441" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7441" name="biaya295" value="18500" onchange="hitungTotal49()">
                                        <label for="customCheckbox7441" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya296 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7442" name="biaya296" value="18500" onchange="hitungTotal49()" checked>
                                        <label for="customCheckbox7442" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7442" name="biaya296" value="18500" onchange="hitungTotal49()">
                                        <label for="customCheckbox7442" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya297 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7443" name="biaya297" value="18500" onchange="hitungTotal49()" checked>
                                        <label for="customCheckbox7443" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7443" name="biaya297" value="18500" onchange="hitungTotal49()">
                                        <label for="customCheckbox7443" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya298 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7444" name="biaya298" value="18500" onchange="hitungTotal49()" checked>
                                        <label for="customCheckbox7444" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7444" name="biaya298" value="18500" onchange="hitungTotal49()">
                                        <label for="customCheckbox7444" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya299 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7445" name="biaya299" value="18500" onchange="hitungTotal49()" checked>
                                        <label for="customCheckbox7445" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7445" name="biaya299" value="18500" onchange="hitungTotal49()">
                                        <label for="customCheckbox7445" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya300 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7446" name="biaya300" value="18500" onchange="hitungTotal49()" checked>
                                        <label for="customCheckbox7446" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7446" name="biaya300" value="18500" onchange="hitungTotal49()">
                                        <label for="customCheckbox7446" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <!-- <td> -</td> -->
                            <?php echo view('total/total49'); ?>

                            </tr>

                            <td>Pasif</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya301 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7451" name="biaya301" value="18500" onchange="hitungTotal50()" checked>
                                        <label for="customCheckbox7451" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7451" name="biaya301" value="18500" onchange="hitungTotal50()">
                                        <label for="customCheckbox7451" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya302 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7452" name="biaya302" value="18500" onchange="hitungTotal50()" checked>
                                        <label for="customCheckbox7452" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7452" name="biaya302" value="18500" onchange="hitungTotal50()">
                                        <label for="customCheckbox7452" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya303 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7453" name="biaya303" value="18500" onchange="hitungTotal50()" checked>
                                        <label for="customCheckbox7453" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7453" name="biaya303" value="18500" onchange="hitungTotal50()">
                                        <label for="customCheckbox7453" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya304 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7454" name="biaya304" value="18500" onchange="hitungTotal50()" checked>
                                        <label for="customCheckbox7454" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7454" name="biaya304" value="18500" onchange="hitungTotal50()">
                                        <label for="customCheckbox7454" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya305 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7455" name="biaya305" value="18500" onchange="hitungTotal50()" checked>
                                        <label for="customCheckbox7455" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7455" name="biaya305" value="18500" onchange="hitungTotal50()">
                                        <label for="customCheckbox7455" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya306 == 18500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7456" name="biaya306" value="18500" onchange="hitungTotal50()" checked>
                                        <label for="customCheckbox7456" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7456" name="biaya306" value="18500" onchange="hitungTotal50()">
                                        <label for="customCheckbox7456" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <!-- <td> -</td> -->
                            <?php echo view('total/total50'); ?>
                            </tr>

                            <td>Breathing Exercise</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya307 == 26500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7461" name="biaya307" value="26500" onchange="hitungTotal51()" checked>
                                        <label for="customCheckbox7461" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7461" name="biaya307" value="26500" onchange="hitungTotal51()">
                                        <label for="customCheckbox7461" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya309 == 26500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7462" name="biaya309" value="26500" onchange="hitungTotal51()" checked>
                                        <label for="customCheckbox7462" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7462" name="biaya309" value="26500" onchange="hitungTotal51()">
                                        <label for="customCheckbox7462" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya309 == 26500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7463" name="biaya309" value="26500" onchange="hitungTotal51()" checked>
                                        <label for="customCheckbox7463" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7463" name="biaya309" value="26500" onchange="hitungTotal51()">
                                        <label for="customCheckbox7463" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya310 == 26500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7464" name="biaya310" value="26500" onchange="hitungTotal51()" checked>
                                        <label for="customCheckbox7464" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7464" name="biaya310" value="26500" onchange="hitungTotal51()">
                                        <label for="customCheckbox7464" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya311 == 26500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7465" name="biaya311" value="26500" onchange="hitungTotal51()" checked>
                                        <label for="customCheckbox7465" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7465" name="biaya311" value="26500" onchange="hitungTotal51()">
                                        <label for="customCheckbox7465" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($biaya312 == 26500) { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7466" name="biaya312" value="26500" onchange="hitungTotal51()" checked>
                                        <label for="customCheckbox7466" class="custom-control-label"></label>
                                    <?php } else { ?>
                                        <input class="form-check-input" type="checkbox" id="customCheckbox7466" name="biaya312" value="26500" onchange="hitungTotal51()">
                                        <label for="customCheckbox7466" class="custom-control-label"></label>
                                    <?php
                                    } ?>
                                </div>
                            </td>
                            <!-- <td> -</td> -->
                            <?php echo view('total/total51'); ?>
                            </tr>

                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th colspan="8" class="text-center"></th>
                                <th class="text-center">TOTAL BIAYA</th>
                                <td>
                                    <?php echo view('total/totalbiaya'); ?>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="8" class="text-center"></th>
                                <th class="text-center">KLAIM INA CBGS</th>
                                <td>
                                    <p id="klaiminacbg"></p>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="d-grid gap-2">
                        <td>
                            <!-- <input type=button value="Proses" onclick="proses()"> -->
                            <button type="submit" value="Save" name="submit" class="btn btn-success">SIMPAN</button>
                        </td>
                    </div>
                </div>
    </div>

    </form>
</div>
<!-- /.card-body -->
</div>