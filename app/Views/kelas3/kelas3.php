<?php echo view('script/script'); ?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Data Pasien</h3>

        <div class="card-tools">

        </div>
    </div>
    <form action="<?= base_url('insertceklist/save3'); ?>" method="post">
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
                            <?php echo $dxutama; ?>
                            <input type="hidden" name="dxutama" value="<?php echo $dxutama; ?>">
                        </td>

                        <td style="text-align:center;">
                            <select class="form-control" id="selectOption2" name="dxsekunder">
                                <option id="else" value="a" selected>Pilih DX Medis Sekunder</option>
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
        <!-- <div id="diabetes-melitus-div" class="form-group"> -->
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
                                <td rowspan="3">1</td>
                                <td rowspan="2">a. Asesment awal Medis</td>
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
                                <td>Dokter Spesialis</td>
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
                            </tr>

                            <tr>
                                <td rowspan="1">b. Asesment awal Keperawatan</td>
                                <td>Perawat Primer:<br>
                                Kondisi umum, tingkat kesadaran,<br> tanda-tanda vital, riwayat alergi, <br>skrining gizi, nyeri,status <br>  fungsional: bartel index, risiko jatuh,<br> risiko decubitus, kebutuhan edukasi dan budaya
                                </td>
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
                              <?php echo view('total/total3'); ?>
                            </tr>

                            <!-- Nomor 2 -->
                            <tr>
                                <td rowspan="4">2</td>
                                <td rowspan="4">Laboratorium</td>
                                <td>Darah Lengkap</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya19 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2111" name="biaya19" value="56000" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox2111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2111" name="biaya19" value="56000" onchange="hitungTotal4()">
                                            <label for="customCheckbox2111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya20 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2112" name="biaya20" value="56000" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox2112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2112" name="biaya20" value="56000" onchange="hitungTotal4()">
                                            <label for="customCheckbox2112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya21 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2113" name="biaya21" value="56000" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox2113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2113" name="biaya21" value="56000" onchange="hitungTotal4()">
                                            <label for="customCheckbox2113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya22 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2114" name="biaya22" value="56000" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox2114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2114" name="biaya22" value="56000" onchange="hitungTotal4()">
                                            <label for="customCheckbox2114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya23 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2115" name="biaya23" value="56000" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox2115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2115" name="biaya23" value="56000" onchange="hitungTotal4()">
                                            <label for="customCheckbox2115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya24 == 56000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2116" name="biaya24" value="56000" onchange="hitungTotal4()" checked>
                                            <label for="customCheckbox2116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2116" name="biaya24" value="56000" onchange="hitungTotal4()">
                                            <label for="customCheckbox2116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total4'); ?>
                            </tr>

                            <tr>
                                <td>GDP, GD2PP/GDBT</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya25 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2121" name="biaya25" value="24000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox2121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2121" name="biaya25" value="24000" onchange="hitungTotal5()">
                                            <label for="customCheckbox2121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya26 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2122" name="biaya26" value="24000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox2122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2122" name="biaya26" value="24000" onchange="hitungTotal5()">
                                            <label for="customCheckbox2122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya27 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2123" name="biaya27" value="24000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox2123" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2123" name="biaya27" value="24000" onchange="hitungTotal5()">
                                            <label for="customCheckbox2123" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya28 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2124" name="biaya28" value="24000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox2124" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2124" name="biaya28" value="24000" onchange="hitungTotal5()">
                                            <label for="customCheckbox2124" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya29 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2125" name="biaya29" value="24000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox2125" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2125" name="biaya29" value="24000" onchange="hitungTotal5()">
                                            <label for="customCheckbox2125" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya30 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2126" name="biaya30" value="24000" onchange="hitungTotal5()" checked>
                                            <label for="customCheckbox2126" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2126" name="biaya30" value="24000" onchange="hitungTotal5()">
                                            <label for="customCheckbox2126" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total5'); ?>
                            </tr>

                            <tr>
                                <td>HbA1c</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya31 == 146000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2131" name="biaya31" value="146000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2131" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2131" name="biaya31" value="146000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2131" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya32 == 146000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2132" name="biaya32" value="146000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2132" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2132" name="biaya32" value="146000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2132" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya33 == 146000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2133" name="biaya33" value="146000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2133" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2143" name="biaya33" value="146000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2133" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya34 == 146000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2134" name="biaya34" value="146000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2134" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2134" name="biaya34" value="146000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2134" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya35 == 146000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2135" name="biaya35" value="146000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2135" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2135" name="biaya35" value="146000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2135" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya36 == 146000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2136" name="biaya36" value="146000" onchange="hitungTotal6()" checked>
                                            <label for="customCheckbox2136" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2136" name="biaya36" value="146000" onchange="hitungTotal6()">
                                            <label for="customCheckbox2136" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total6'); ?>
                            </tr>

                            <tr>
                                <td>Ureum Kreatinin</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya37 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2141" name="biaya37" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2141" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2141" name="biaya37" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2141" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya38 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2142" name="biaya38" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2142" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2142" name="biaya38" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2142" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya39 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2143" name="biaya39" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2143" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2143" name="biaya39" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2143" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya40 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2144" name="biaya40" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2144" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2144" name="biaya40" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2144" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya41 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2145" name="biaya41" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2145" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2145" name="biaya41" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2145" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya42 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2146" name="biaya42" value="26500" onchange="hitungTotal7()" checked>
                                            <label for="customCheckbox2146" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2146" name="biaya42" value="26500" onchange="hitungTotal7()">
                                            <label for="customCheckbox2146" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total7'); ?>
                                
                            </tr>
                            <!-- Nomor 3 -->
                            <tr>
                                <td rowspan="5">3</td>
                                <td rowspan="5">Radiologi / Imaging</td>
                                <td>EKG</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya43 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3111" name="biaya43" value="40000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox3111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3111" name="biaya43" value="40000" onchange="hitungTotal8()">
                                            <label for="customCheckbox3111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya44 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3112" name="biaya44" value="40000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox3112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3112" name="biaya44" value="40000" onchange="hitungTotal8()">
                                            <label for="customCheckbox3112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya45 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3113" name="biaya45" value="40000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox3113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3113" name="biaya45" value="40000" onchange="hitungTotal8()">
                                            <label for="customCheckbox3113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya46 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3114" name="biaya46" value="40000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox3114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3114" name="biaya46" value="40000" onchange="hitungTotal8()">
                                            <label for="customCheckbox3114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya47 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3115" name="biaya47" value="40000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox3115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3115" name="biaya47" value="40000" onchange="hitungTotal8()">
                                            <label for="customCheckbox3115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya48 == 40000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3116" name="biaya48" value="40000" onchange="hitungTotal8()" checked>
                                            <label for="customCheckbox3116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3116" name="biaya48" value="40000" onchange="hitungTotal8()">
                                            <label for="customCheckbox3116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total8'); ?>
                              
                            </tr>

                            <tr>
                                <td>Rontgen Thorax</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya49 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3121" name="biaya49" value="133500" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3121" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3121" name="biaya49" value="133500" onchange="hitungTotal9()">
                                            <label for="customCheckbox3121" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya1049 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3121b" name="biaya1049" value="93300" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3121b" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3121b" name="biaya1049" value="93300" onchange="hitungTotal9()">
                                            <label for="customCheckbox3121b" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya50 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3122" name="biaya50" value="133500" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3122" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3122" name="biaya50" value="133500" onchange="hitungTotal9()">
                                            <label for="customCheckbox3122" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya1050 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3122b" name="biaya1050" value="93300" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3122b" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3122b" name="biaya1050" value="93300" onchange="hitungTotal9()">
                                            <label for="customCheckbox3122b" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya51 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3123" name="biaya51" value="133500" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3123" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3123" name="biaya51" value="133500" onchange="hitungTotal9()">
                                            <label for="customCheckbox3123" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya1051 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3123b" name="biaya1051" value="93300" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3123b" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3123b" name="biaya1051" value="93300" onchange="hitungTotal9()">
                                            <label for="customCheckbox3123b" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya52 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3124" name="biaya52" value="133500" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3124" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3124" name="biaya52" value="133500" onchange="hitungTotal9()">
                                            <label for="customCheckbox3124" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya1052 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3124b" name="biaya1052" value="93300" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3124b" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3124b" name="biaya1052" value="93300" onchange="hitungTotal9()">
                                            <label for="customCheckbox3124b" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya53 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3125" name="biaya53" value="133500" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3125" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3125" name="biaya53" value="133500" onchange="hitungTotal9()">
                                            <label for="customCheckbox3125" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya1053 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3125b" name="biaya1053" value="93300" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3125b" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3125b" name="biaya1053" value="93300" onchange="hitungTotal9()">
                                            <label for="customCheckbox3125b" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya54 == 133500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3126" name="biaya54" value="133500" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3126" class="custom-control-label">Besar</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3126" name="biaya54" value="133500" onchange="hitungTotal9()">
                                            <label for="customCheckbox3126" class="custom-control-label">Besar</label>
                                        <?php
                                        } ?>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya1054 == 93300) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3126b" name="biaya1054" value="93300" onchange="hitungTotal9()" checked>
                                            <label for="customCheckbox3126b" class="custom-control-label">Sedang</label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3126b" name="biaya1054" value="93300" onchange="hitungTotal9()">
                                            <label for="customCheckbox3126b" class="custom-control-label">Sedang</label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                 <?php echo view('total/total9'); ?>
                               
                            </tr>

                            <tr>
                                <td>Rontgen Pedis</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya55 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3131" name="biaya55" value="1000" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox3131" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3131" name="biaya55" value="1000" onchange="hitungTotal10()">
                                            <label for="customCheckbox3131" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya56 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3132" name="biaya56" value="1000" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox3132" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3132" name="biaya56" value="1000" onchange="hitungTotal10()">
                                            <label for="customCheckbox3132" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya57 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2183" name="biaya57" value="1000" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox2183" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox2183" name="biaya57" value="1000" onchange="hitungTotal10()">
                                            <label for="customCheckbox2183" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya58 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3134" name="biaya58" value="1000" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox3134" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3134" name="biaya58" value="1000" onchange="hitungTotal10()">
                                            <label for="customCheckbox3134" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya59 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3135" name="biaya5" value="1000" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox23139" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3135" name="biaya59" value="1000" onchange="hitungTotal10()">
                                            <label for="customCheckbox3135" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya60 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3136" name="biaya60" value="1000" onchange="hitungTotal10()" checked>
                                            <label for="customCheckbox3136" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3136" name="biaya60" value="1000" onchange="hitungTotal10()">
                                            <label for="customCheckbox3136" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                 <?php echo view('total/total10'); ?>
                               
                            </tr>

                            <tr>
                                <td>Pemeriksaan Ankle Brachial Index</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya61 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3141" name="biaya61" value="29000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox3141" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3141" name="biaya61" value="29000" onchange="hitungTotal11()">
                                            <label for="customCheckbox3141" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya62 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3142" name="biaya62" value="29000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox3142" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3142" name="biaya62" value="29000" onchange="hitungTotal11()">
                                            <label for="customCheckbox3142" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya63 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3143" name="biaya63" value="29000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox3143" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3143" name="biaya63" value="29000" onchange="hitungTotal11()">
                                            <label for="customCheckbox3143" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya64 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3144" name="biaya64" value="29000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox3144" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3144" name="biaya64" value="29000" onchange="hitungTotal11()">
                                            <label for="customCheckbox3144" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya65 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3145" name="biaya65" value="29000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox3145" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3145" name="biaya65" value="29000" onchange="hitungTotal11()">
                                            <label for="customCheckbox3145" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya66 == 29000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3146" name="biaya66" value="29000" onchange="hitungTotal11()" checked>
                                            <label for="customCheckbox3146" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3146" name="biaya66" value="29000" onchange="hitungTotal11()">
                                            <label for="customCheckbox3146" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total11'); ?>
                              
                            </tr>

                            <tr>
                                <td>Funduskopi</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya67 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3151" name="biaya67" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox3151" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3151" name="biaya67" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox3151" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya68 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3152" name="biaya68" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox3152" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3152" name="biaya68" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox3152" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya69 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3153" name="biaya69" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox3153" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3153" name="biaya69" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox3153" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya70 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3154" name="biaya70" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox3154" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3154" name="biaya70" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox3154" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya71 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3155" name="biaya71" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox3155" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3155" name="biaya71" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox3155" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya72 == 24000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3156" name="biaya72" value="24000" onchange="hitungTotal12()" checked>
                                            <label for="customCheckbox3156" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox3156" name="biaya72" value="24000" onchange="hitungTotal12()">
                                            <label for="customCheckbox3156" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                 <?php echo view('total/total12'); ?>
                               
                            </tr>

                            <!-- Nomor 4 -->
                            <tr>
                                <td rowspan="3">4</td>
                                <td rowspan="3">Konsultasi</td>
                                <td>Sp.PD</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya73 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4111" name="biaya73" value="17000" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox4111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4111" name="biaya73" value="17000" onchange="hitungTotal13()">
                                            <label for="customCheckbox4111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya74 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4112" name="biaya74" value="17000" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox4112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4112" name="biaya74" value="17000" onchange="hitungTotal13()">
                                            <label for="customCheckbox4112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya75 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4113" name="biaya75" value="17000" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox4113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4113" name="biaya75" value="17000" onchange="hitungTotal13()">
                                            <label for="customCheckbox4113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya76 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4114" name="biaya76" value="17000" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox4114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4114" name="biaya76" value="17000" onchange="hitungTotal13()">
                                            <label for="customCheckbox4114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya77 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4115" name="biaya77" value="17000" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox4115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4115" name="biaya77" value="17000" onchange="hitungTotal13()">
                                            <label for="customCheckbox4115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya78 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4116" name="biaya78" value="17000" onchange="hitungTotal13()" checked>
                                            <label for="customCheckbox4116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4116" name="biaya78" value="17000" onchange="hitungTotal13()">
                                            <label for="customCheckbox4116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total13'); ?>
                            </tr>

                            <tr>
                                <td>Sp.B</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya79 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4121" name="biaya79" value="17000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox4121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4121" name="biaya79" value="17000" onchange="hitungTotal14()">
                                            <label for="customCheckbox4121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya80 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4122" name="biaya80" value="17000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox4122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4122" name="biaya80" value="17000" onchange="hitungTotal14()">
                                            <label for="customCheckbox4122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya81 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4123" name="biaya81" value="17000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox4123" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbo4123" name="biaya81" value="17000" onchange="hitungTotal14()">
                                            <label for="customCheckbox4123" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya82 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4124" name="biaya82" value="17000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox4124" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4124" name="biaya82" value="17000" onchange="hitungTotal14()">
                                            <label for="customCheckbox4124" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya83 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4125" name="biaya83" value="17000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox4125" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4125" name="biaya83" value="17000" onchange="hitungTotal14()">
                                            <label for="customCheckbox4125" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya84 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4126" name="biaya84" value="17000" onchange="hitungTotal14()" checked>
                                            <label for="customCheckbox4126" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4126" name="biaya84" value="17000" onchange="hitungTotal14()">
                                            <label for="customCheckbox4126" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                 <?php echo view('total/total14'); ?>
                               
                            </tr>
                            <tr>
                                <td>Sp.M</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya85 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4131" name="biaya85" value="17000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox4131" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4131" name="biaya85" value="17000" onchange="hitungTotal15()">
                                            <label for="customCheckbox4131" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya86 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4132" name="biaya86" value="17000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox4132" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4132" name="biaya86" value="17000" onchange="hitungTotal15()">
                                            <label for="customCheckbox4132" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya87 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4133" name="biaya87" value="17000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox4133" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbo4133" name="biaya87" value="17000" onchange="hitungTotal15()">
                                            <label for="customCheckbox4133" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya88 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4134" name="biaya88" value="17000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox4134" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4134" name="biaya88" value="17000" onchange="hitungTotal15()">
                                            <label for="customCheckbox4134" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya89 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4135" name="biaya89" value="17000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox4135" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4135" name="biaya89" value="17000" onchange="hitungTotal15()">
                                            <label for="customCheckbox4135" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya90 == 17000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4136" name="biaya90" value="17000" onchange="hitungTotal15()" checked>
                                            <label for="customCheckbox4136" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox4136" name="biaya90" value="17000" onchange="hitungTotal15()">
                                            <label for="customCheckbox4136" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                 <?php echo view('total/total15'); ?>
                                
                            </tr>

                            <!-- Nomor 5 -->
                            <tr>
                                <td rowspan="6">5</td>
                                <td rowspan="2">a.  ASESMEN MEDIS</td>
                                <td>Dokter DPJP</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya91 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5111" name="biaya91" value="20000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox5111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5111" name="biaya91" value="20000" onchange="hitungTotal16()">
                                            <label for="customCheckbox5111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya92 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5112" name="biaya92" value="20000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox5112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5112" name="biaya92" value="20000" onchange="hitungTotal16()">
                                            <label for="customCheckbox5112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya93 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5113" name="biaya93" value="20000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox5113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5113" name="biaya93" value="20000" onchange="hitungTotal16()">
                                            <label for="customCheckbox5113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya94 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5114" name="biaya94" value="20000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox5114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5114" name="biaya94" value="20000" onchange="hitungTotal16()">
                                            <label for="customCheckbox5114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya95 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5115" name="biaya95" value="20000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox5115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5115" name="biaya95" value="20000" onchange="hitungTotal16()">
                                            <label for="customCheckbox5115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya96 == 20000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5116" name="biaya96" value="20000" onchange="hitungTotal16()" checked>
                                            <label for="customCheckbox5116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5116" name="biaya96" value="20000" onchange="hitungTotal16()">
                                            <label for="customCheckbox5116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total16'); ?>
                               
                            </tr>
                            <tr>
                                <td>Dokter Non DPJP/ dr. Ruangan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya97 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5121" name="biaya97" value="13000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox5121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5121" name="biaya97" value="13000" onchange="hitungTotal17()">
                                            <label for="customCheckbox5121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya98 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5122" name="biaya98" value="13000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox5122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5122" name="biaya98" value="13000" onchange="hitungTotal17()">
                                            <label for="customCheckbox5122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya99 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5123" name="biaya99" value="13000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox5123" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5123" name="biaya99" value="13000" onchange="hitungTotal17()">
                                            <label for="customCheckbox5123" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya100 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5124" name="biaya100" value="13000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox5124" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5124" name="biaya100" value="13000" onchange="hitungTotal17()">
                                            <label for="customCheckbox5124" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya101 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5125" name="biaya101" value="13000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox5125" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5125" name="biaya101" value="13000" onchange="hitungTotal17()">
                                            <label for="customCheckbox5125" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya102 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5126" name="biaya102" value="13000" onchange="hitungTotal17()" checked>
                                            <label for="customCheckbox5126" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5126" name="biaya102" value="13000" onchange="hitungTotal17()">
                                            <label for="customCheckbox5126" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total17'); ?>
                                
                            </tr>
                            <tr>
                                <td rowspan="1">b.  ASESMEN KEPERAWATAN</td>
                                <td>Perawat Penanggung Jawab Asuhan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya103 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b11" name="biaya103" value="13000" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox5b11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b11" name="biaya103" value="13000" onchange="hitungTotal18()">
                                            <label for="customCheckbox5b11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya104 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b12" name="biaya104" value="13000" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox5b12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b12" name="biaya104" value="13000" onchange="hitungTotal18()">
                                            <label for="customCheckbox5b12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya105 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b13" name="biaya105" value="13000" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox5b13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b13" name="biaya105" value="13000" onchange="hitungTotal18()">
                                            <label for="customCheckbox5b13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya106 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b14" name="biaya106" value="13000" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox5b14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b14" name="biaya106" value="13000" onchange="hitungTotal18()">
                                            <label for="customCheckbox5b14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya107 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b15" name="biaya107" value="13000" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox5b15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b15" name="biaya107" value="13000" onchange="hitungTotal18()">
                                            <label for="customCheckbox5b15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya108 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b16" name="biaya108" value="13000" onchange="hitungTotal18()" checked>
                                            <label for="customCheckbox5b16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5b16" name="biaya108" value="13000" onchange="hitungTotal18()">
                                            <label for="customCheckbox5b16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total18'); ?>
                               
                            </tr>
                            <tr>
                                <td rowspan="1">c.  ASESMEN GIZI</td>
                                <td>Tenaga Gizi (Nutrisionis/Dietisien)</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya109 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c11" name="biaya109" value="1000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox5c11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c11" name="biaya109" value="1000" onchange="hitungTotal19()">
                                            <label for="customCheckbox5c11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya110 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c12" name="biaya110" value="1000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox5c12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c12" name="biaya110" value="1000" onchange="hitungTotal19()">
                                            <label for="customCheckbox5c12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya111 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c13" name="biaya111" value="1000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox5c13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c13" name="biaya111" value="1000" onchange="hitungTotal19()">
                                            <label for="customCheckbox5c13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya112 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c14" name="biaya112" value="1000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox5c14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c14" name="biaya112" value="1000" onchange="hitungTotal19()">
                                            <label for="customCheckbox5c14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya113 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c15" name="biaya113" value="1000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox5c15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c15" name="biaya113" value="1000" onchange="hitungTotal19()">
                                            <label for="customCheckbox5c15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya114 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c16" name="biaya114" value="1000" onchange="hitungTotal19()" checked>
                                            <label for="customCheckbox5c16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5c16" name="biaya114" value="1000" onchange="hitungTotal19()">
                                            <label for="customCheckbox5c16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total19'); ?>
                                
                            </tr>
                            <tr>
                                <td rowspan="2">d.  ASESMEN FARMASI</td>
                                <td>Telaah Resep</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya115 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d11" name="biaya115" value="1000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox5d11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d11" name="biaya115" value="1000" onchange="hitungTotal20()">
                                            <label for="customCheckbox5d11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya116 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d12" name="biaya116" value="1000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox5d12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d12" name="biaya116" value="1000" onchange="hitungTotal20()">
                                            <label for="customCheckbox5d12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya117 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d13" name="biaya117" value="1000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox5d13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d13" name="biaya117" value="1000" onchange="hitungTotal20()">
                                            <label for="customCheckbox5d13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya118 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d14" name="biaya118" value="1000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox5d14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d14" name="biaya118" value="1000" onchange="hitungTotal20()">
                                            <label for="customCheckbox5d14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya119 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d15" name="biaya119" value="1000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox5d15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d15" name="biaya119" value="1000" onchange="hitungTotal20()">
                                            <label for="customCheckbox5d15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya120 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d16" name="biaya120" value="1000" onchange="hitungTotal20()" checked>
                                            <label for="customCheckbox5d16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d16" name="biaya120" value="1000" onchange="hitungTotal20()">
                                            <label for="customCheckbox5d16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total20'); ?>
                                
                            </tr>
                            <tr>
                                <td>Rekonsiliasi Obat</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya121 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d21" name="biaya121" value="1000" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5d21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d21" name="biaya121" value="1000" onchange="hitungTotal21()">
                                            <label for="customCheckbox5d21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya122 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d22" name="biaya122" value="1000" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5d22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d22" name="biaya122" value="1000" onchange="hitungTotal21()">
                                            <label for="customCheckbox5d22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya123 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d23" name="biaya123" value="1000" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5d23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d23" name="biaya123" value="1000" onchange="hitungTotal21()">
                                            <label for="customCheckbox5d23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya124 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d24" name="biaya124" value="1000" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5d24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d24" name="biaya124" value="1000" onchange="hitungTotal21()">
                                            <label for="customCheckbox5d24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya125 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d25" name="biaya125" value="1000" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5d25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d25" name="biaya125" value="1000" onchange="hitungTotal21()">
                                            <label for="customCheckbox5d25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya126 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d26" name="biaya126" value="1000" onchange="hitungTotal21()" checked>
                                            <label for="customCheckbox5d26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox5d26" name="biaya126" value="1000" onchange="hitungTotal21()">
                                            <label for="customCheckbox5d26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total21'); ?>
                                
                            </tr>
                            
                            <!-- Nomor 6 -->
                            <tr>
                                <td rowspan="6">6</td>
                                <td rowspan="1">a.  DIAGNOSIS MEDIS</td>
                                <td>Diabetes Mellitus Tipe 2</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya127 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a11" name="biaya127" value="1000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox6a11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a11" name="biaya127" value="1000" onchange="hitungTotal22()">
                                            <label for="customCheckbox6a11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya128 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a12" name="biaya128" value="1000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox6a12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a12" name="biaya128" value="1000" onchange="hitungTotal22()">
                                            <label for="customCheckbox6a12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya129 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a13" name="biaya129" value="1000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox6a13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a13" name="biaya129" value="1000" onchange="hitungTotal22()">
                                            <label for="customCheckbox6a13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya130 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a14" name="biaya130" value="1000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox6a14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a14" name="biaya130" value="1000" onchange="hitungTotal22()">
                                            <label for="customCheckbox6a14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya131 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a15" name="biaya131" value="1000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox6a15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a15" name="biaya131" value="1000" onchange="hitungTotal22()">
                                            <label for="customCheckbox6a15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya132 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a16" name="biaya132" value="1000" onchange="hitungTotal22()" checked>
                                            <label for="customCheckbox6a16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6a16" name="biaya132" value="1000" onchange="hitungTotal22()">
                                            <label for="customCheckbox6a16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total22'); ?>
                              
                            </tr>
                            <tr>
                                <td rowspan="4">b. DIAGNOSIS KEPERAWATAN</td>
                                <td>a. Kode SDKI (D0077) : Nyeri Akut</td>
                                <td>
                                <div class="custom-control custom-checkbox">
                                        <?php if ($biaya133 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba1" name="biaya133" value="1000" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox6ba1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba1" name="biaya133" value="1000" onchange="hitungTotal23()">
                                            <label for="customCheckbox6ba1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya134 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba2" name="biaya134" value="1000" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox6ba2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba2" name="biaya134" value="1000" onchange="hitungTotal23()">
                                            <label for="customCheckbox6ba2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya135 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba3" name="biaya135" value="1000" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox6ba3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba3" name="biaya135" value="1000" onchange="hitungTotal23()">
                                            <label for="customCheckbox6ba3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya136 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba4" name="biaya136" value="1000" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox6ba4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba4" name="biaya136" value="1000" onchange="hitungTotal23()">
                                            <label for="customCheckbox6ba4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya137 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba5" name="biaya137" value="1000" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox6ba5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba5" name="biaya137" value="1000" onchange="hitungTotal23()">
                                            <label for="customCheckbox6ba5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya138 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba6" name="biaya138" value="1000" onchange="hitungTotal23()" checked>
                                            <label for="customCheckbox6ba6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6ba6" name="biaya138" value="1000" onchange="hitungTotal23()">
                                            <label for="customCheckbox6ba6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total23'); ?>
                               
                            </tr>
                            <tr>

                                <td>b.  Kode SDKI (D0027) : Ketidakstabilan kadar glukosa darah</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya139 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb1" name="biaya139" value="1000" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox6bb1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb1" name="biaya139" value="1000" onchange="hitungTotal24()">
                                            <label for="customCheckbox6bb1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya140 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb2" name="biaya140" value="1000" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox6bb2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb2" name="biaya140" value="1000" onchange="hitungTotal24()">
                                            <label for="customCheckbox6bb2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya141 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb3" name="biaya141" value="1000" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox6bb3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb3" name="biaya141" value="1000" onchange="hitungTotal24()">
                                            <label for="customCheckbox6bb3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya142 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb4" name="biaya142" value="1000" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox6bb4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb4" name="biaya142" value="1000" onchange="hitungTotal24()">
                                            <label for="customCheckbox6bb4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya143 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb5" name="biaya143" value="1000" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox6bb5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb5" name="biaya143" value="1000" onchange="hitungTotal24()">
                                            <label for="customCheckbox6bb5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya144 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb6" name="biaya144" value="1000" onchange="hitungTotal24()" checked>
                                            <label for="customCheckbox6bb6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bb6" name="biaya144" value="1000" onchange="hitungTotal24()">
                                            <label for="customCheckbox6bb6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total24'); ?>
                                
                            </tr>
                            <tr>
                                <td>c.  Kode SDKI (D0023) : Hipovolemia</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya145 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc1" name="biaya145" value="1000" onchange="hitungTotal25()" checked>
                                            <label for="customCheckbox6bc1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc1" name="biaya145" value="1000" onchange="hitungTotal25()">
                                            <label for="customCheckbox6bc1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya146 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc2" name="biaya146" value="1000" onchange="hitungTotal25()" checked>
                                            <label for="customCheckbox6bc2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc2" name="biaya146" value="1000" onchange="hitungTotal25()">
                                            <label for="customCheckbox6bc2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya147 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc3" name="biaya147" value="1000" onchange="hitungTotal25()" checked>
                                            <label for="customCheckbox6bc3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc3" name="biaya147" value="1000" onchange="hitungTotal25()">
                                            <label for="customCheckbox6bc3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya148 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc4" name="biaya148" value="1000" onchange="hitungTotal25()" checked>
                                            <label for="customCheckbox6bc4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc4" name="biaya148" value="1000" onchange="hitungTotal25()">
                                            <label for="customCheckbox6bc4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya149 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc5" name="biaya149" value="1000" onchange="hitungTotal25()" checked>
                                            <label for="customCheckbox6bc5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc5" name="biaya149" value="1000" onchange="hitungTotal25()">
                                            <label for="customCheckbox6bc5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya150 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc6" name="biaya150" value="1000" onchange="hitungTotal25()" checked>
                                            <label for="customCheckbox6bc6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bc6" name="biaya150" value="1000" onchange="hitungTotal25()">
                                            <label for="customCheckbox6bc6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                     <!-- <td> -</td> -->
                                <?php echo view('total/total25'); ?>
                               
                            </tr>
                            <tr>
                                <td>d.  Kode ()</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya151 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd1" name="biaya151" value="1000" onchange="hitungTotal26()" checked>
                                            <label for="customCheckbox6bd1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd1" name="biaya151" value="1000" onchange="hitungTotal26()">
                                            <label for="customCheckbox6bd1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya152 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd2" name="biaya152" value="1000" onchange="hitungTotal26()" checked>
                                            <label for="customCheckbox6bd2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd2" name="biaya152" value="1000" onchange="hitungTotal26()">
                                            <label for="customCheckbox6bd2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya153 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd3" name="biaya153" value="1000" onchange="hitungTotal26()" checked>
                                            <label for="customCheckbox6bd3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd3" name="biaya153" value="1000" onchange="hitungTotal26()">
                                            <label for="customCheckbox6bd3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya154 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd4" name="biaya154" value="1000" onchange="hitungTotal26()" checked>
                                            <label for="customCheckbox6bd4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd4" name="biaya154" value="1000" onchange="hitungTotal26()">
                                            <label for="customCheckbox6bd4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya155 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd5" name="biaya155" value="1000" onchange="hitungTotal26()" checked>
                                            <label for="customCheckbox6bd5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd5" name="biaya155" value="1000" onchange="hitungTotal26()">
                                            <label for="customCheckbox6bd5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya156 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd6" name="biaya156" value="1000" onchange="hitungTotal26()" checked>
                                            <label for="customCheckbox6bd6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6bd6" name="biaya156" value="1000" onchange="hitungTotal26()">
                                            <label for="customCheckbox6bd6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                     <!-- <td> -</td> -->
                                <?php echo view('total/total26'); ?>
                               
                            </tr>

                            <tr>
                                <td rowspan="1">c.  DIAGNOSIS GIZI</td>
                                <td>Asupan makan peroral kurang <br>berkaitan dengan kesulitan makan<br> (tidak nafsu makan, mual, sakit perut) <br> ditandai dengan asupan kurang dari kebutuhan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya157 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c11" name="biaya157" value="1000" onchange="hitungTotal27()" checked>
                                            <label for="customCheckbox6c11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c11" name="biaya157" value="1000" onchange="hitungTotal27()">
                                            <label for="customCheckbox6c11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya158 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c12" name="biaya158" value="1000" onchange="hitungTotal27()" checked>
                                            <label for="customCheckbox6c12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c12" name="biaya158" value="1000" onchange="hitungTotal27()">
                                            <label for="customCheckbox6c12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya159 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c13" name="biaya159" value="1000" onchange="hitungTotal27()" checked>
                                            <label for="customCheckbox6c13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c13" name="biaya159" value="1000" onchange="hitungTotal27()">
                                            <label for="customCheckbox6c13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya160 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c14" name="biaya160" value="1000" onchange="hitungTotal27()" checked>
                                            <label for="customCheckbox6c14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c14" name="biaya160" value="1000" onchange="hitungTotal27()">
                                            <label for="customCheckbox6c14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya161 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c15" name="biaya161" value="1000" onchange="hitungTotal27()" checked>
                                            <label for="customCheckbox6c15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c15" name="biaya161" value="1000" onchange="hitungTotal27()">
                                            <label for="customCheckbox6c15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya162 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c16" name="biaya162" value="1000" onchange="hitungTotal27()" checked>
                                            <label for="customCheckbox6c16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox6c16" name="biaya162" value="1000" onchange="hitungTotal27()">
                                            <label for="customCheckbox6c16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                     <!-- <td> -</td> -->
                                <?php echo view('total/total27'); ?>
                                
                            </tr>

                            <!-- nomor 7 -->
                            <tr>
                                <td rowspan="4">7</td>
                                <td rowspan="4"> DISCHARGE PLANNING</td>
                                <td>Identifikasi Kebutuhan Edukasi <br>dan Latihan Selama Perawatan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya163 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7111" name="biaya163" value="114392" onchange="hitungTotal28()" checked>
                                            <label for="customCheckbox7111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7111" name="biaya163" value="114392" onchange="hitungTotal28()">
                                            <label for="customCheckbox7111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya164 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7112" name="biaya164" value="114392" onchange="hitungTotal28()" checked>
                                            <label for="customCheckbox7112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7112" name="biaya164" value="114392" onchange="hitungTotal28()">
                                            <label for="customCheckbox7112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya165 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7113" name="biaya165" value="114392" onchange="hitungTotal28()" checked>
                                            <label for="customCheckbox7113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7113" name="biaya165" value="114392" onchange="hitungTotal28()">
                                            <label for="customCheckbox7113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya166 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7114" name="biaya166" value="114392" onchange="hitungTotal28()" checked>
                                            <label for="customCheckbox7114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7114" name="biaya166" value="114392" onchange="hitungTotal28()">
                                            <label for="customCheckbox7114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya167 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7115" name="biaya167" value="114392" onchange="hitungTotal28()" checked>
                                            <label for="customCheckbox7115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7115" name="biaya167" value="114392" onchange="hitungTotal28()">
                                            <label for="customCheckbox7115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya168 == 114392) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7116" name="biaya168" value="114392" onchange="hitungTotal28()" checked>
                                            <label for="customCheckbox7116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7116" name="biaya168" value="114392" onchange="hitungTotal28()">
                                            <label for="customCheckbox7116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total28'); ?>
                               
                            </tr>

                            <tr>
                                <td>Identifikasi Kebutuhan di rumah</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya169 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7121" name="biaya169" value="100741" onchange="hitungTotal29()" checked>
                                            <label for="customCheckbox7121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7121" name="biaya169" value="100741" onchange="hitungTotal29()">
                                            <label for="customCheckbox7121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya170 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7122" name="biaya170" value="100741" onchange="hitungTotal29()" checked>
                                            <label for="customCheckbox7122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7122" name="biaya170" value="100741" onchange="hitungTotal29()">
                                            <label for="customCheckbox7122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya171 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7123" name="biaya171" value="100741" onchange="hitungTotal29()" checked>
                                            <label for="customCheckbox7123" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7123" name="biaya171" value="100741" onchange="hitungTotal29()">
                                            <label for="customCheckbox7123" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya172 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7124" name="biaya172" value="100741" onchange="hitungTotal29()" checked>
                                            <label for="customCheckbox7124" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7124" name="biaya172" value="100741" onchange="hitungTotal29()">
                                            <label for="customCheckbox7124" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya173 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7125" name="biaya173" value="100741" onchange="hitungTotal29()" checked>
                                            <label for="customCheckbox7125" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7125" name="biaya173" value="100741" onchange="hitungTotal29()">
                                            <label for="customCheckbox7125" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya174 == 100741) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7126" name="biaya174" value="100741" onchange="hitungTotal29()" checked>
                                            <label for="customCheckbox7126" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7126" name="biaya174" value="100741" onchange="hitungTotal29()">
                                            <label for="customCheckbox7126" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total29'); ?>
                                
                            </tr>

                            <tr>
                                <td>Hand Hygiene</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya175 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7131" name="biaya175" value="10500" onchange="hitungTotal30()" checked>
                                            <label for="customCheckbox7131" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7131" name="biaya175" value="10500" onchange="hitungTotal30()">
                                            <label for="customCheckbox7131" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya176 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7132" name="biaya176" value="10500" onchange="hitungTotal30()" checked>
                                            <label for="customCheckbox7132" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7132" name="biaya176" value="10500" onchange="hitungTotal30()">
                                            <label for="customCheckbox7132" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya177 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7133" name="biaya177" value="10500" onchange="hitungTotal30()" checked>
                                            <label for="customCheckbox7133" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7133" name="biaya177" value="10500" onchange="hitungTotal30()">
                                            <label for="customCheckbox7133" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya178 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7134" name="biaya178" value="10500" onchange="hitungTotal30()" checked>
                                            <label for="customCheckbox7134" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7134" name="biaya178" value="10500" onchange="hitungTotal30()">
                                            <label for="customCheckbox7134" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya179 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7135" name="biaya179" value="10500" onchange="hitungTotal30()" checked>
                                            <label for="customCheckbox7135" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7135" name="biaya179" value="10500" onchange="hitungTotal31()">
                                            <label for="customCheckbox7135" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya180 == 10500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7136" name="biaya180" value="10500" onchange="hitungTotal30()" checked>
                                            <label for="customCheckbox7136" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7136" name="biaya180" value="10500" onchange="hitungTotal30()">
                                            <label for="customCheckbox7136" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total30'); ?>
                                

                            </tr>

                            <tr>
                                <td>Kualitas hidup sehat</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya181 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7141" name="biaya181" value="29221" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox7141" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7141" name="biaya181" value="29221" onchange="hitungTotal31()">
                                            <label for="customCheckbox7141" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya182 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7142" name="biaya182" value="29221" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox7142" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7142" name="biaya182" value="29221" onchange="hitungTotal31()">
                                            <label for="customCheckbox7142" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya183 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7143" name="biaya183" value="29221" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox7143" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7143" name="biaya183" value="29221" onchange="hitungTotal31()">
                                            <label for="customCheckbox7143" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya184 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7144" name="biaya184" value="29221" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox7144" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7144" name="biaya184" value="29221" onchange="hitungTotal31()">
                                            <label for="customCheckbox7144" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya185 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7145" name="biaya185" value="29221" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox7145" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7145" name="biaya185" value="29221" onchange="hitungTotal31()">
                                            <label for="customCheckbox7145" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya186 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7146" name="biaya186" value="29221" onchange="hitungTotal31()" checked>
                                            <label for="customCheckbox7146" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox7146" name="biaya186" value="29221" onchange="hitungTotal31()">
                                            <label for="customCheckbox7146" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total31'); ?>
                               

                            </tr>
                            <!-- nomor 8 -->
                            <tr>
                                <td rowspan="11">8</td>
                                <td rowspan="3"> a. EDUKASI/ INFORMASI MEDIS</td>
                                <td>Penjelasan Diagnosis</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya187 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a11" name="biaya187" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox8a11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a11" name="biaya187" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox8a11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya188 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a12" name="biaya188" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox8a12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a12" name="biaya188" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox8a12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya189 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a13" name="biaya189" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox8a13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a13" name="biaya189" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox8a13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya190 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a14" name="biaya190" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox8a14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a14" name="biaya190" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox8a14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya191 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a15" name="biaya191" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox8a15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a15" name="biaya191" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox8a15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya192 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a16" name="biaya192" value="29221" onchange="hitungTotal32()" checked>
                                            <label for="customCheckbox8a16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a16" name="biaya192" value="29221" onchange="hitungTotal32()">
                                            <label for="customCheckbox8a16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total32'); ?>
                               
                            </tr>

                            <tr>
                                <td>Rencana Terapi</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya193 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a21" name="biaya193" value="29221" onchange="hitungTotal33()" checked>
                                            <label for="customCheckbox8a21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a21" name="biaya193" value="29221" onchange="hitungTotal33()">
                                            <label for="customCheckbox8a21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya194 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a22" name="biaya194" value="29221" onchange="hitungTotal33()" checked>
                                            <label for="customCheckbox8a22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a22" name="biaya194" value="29221" onchange="hitungTotal33()">
                                            <label for="customCheckbox8a22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya195 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a23" name="biaya195" value="29221" onchange="hitungTotal33()" checked>
                                            <label for="customCheckbox8a23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a23" name="biaya195" value="29221" onchange="hitungTotal33()">
                                            <label for="customCheckbox8a23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya196 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a24" name="biaya196" value="29221" onchange="hitungTotal33()" checked>
                                            <label for="customCheckbox8a24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a24" name="biaya196" value="29221" onchange="hitungTotal33()">
                                            <label for="customCheckbox8a24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya197 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a25" name="biaya197" value="29221" onchange="hitungTotal33()" checked>
                                            <label for="customCheckbox8a25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a25" name="biaya197" value="29221" onchange="hitungTotal33()">
                                            <label for="customCheckbox8a25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya198 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a26" name="biaya198" value="29221" onchange="hitungTotal33()" checked>
                                            <label for="customCheckbox8a26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a26" name="biaya198" value="29221" onchange="hitungTotal33()">
                                            <label for="customCheckbox8a26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total33'); ?>
                            </tr>

                            <tr>
                                <td>Informed Consent</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya199 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a31" name="biaya199" value="29221" onchange="hitungTotal34()" checked>
                                            <label for="customCheckbox8a31" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a31" name="biaya199" value="29221" onchange="hitungTotal34()">
                                            <label for="customCheckbox8a31" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya200 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a32" name="biaya200" value="29221" onchange="hitungTotal34()" checked>
                                            <label for="customCheckbox8a32" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a32" name="biaya200" value="29221" onchange="hitungTotal34()">
                                            <label for="customCheckbox8a32" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya201 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a23" name="biaya201" value="29221" onchange="hitungTotal34()" checked>
                                            <label for="customCheckbox8a23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a23" name="biaya201" value="29221" onchange="hitungTotal34()">
                                            <label for="customCheckbox8a23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya202 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a34" name="biaya202" value="29221" onchange="hitungTotal34()" checked>
                                            <label for="customCheckbox8a34" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a34" name="biaya202" value="29221" onchange="hitungTotal34()">
                                            <label for="customCheckbox8a34" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya203 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a35" name="biaya203" value="29221" onchange="hitungTotal34()" checked>
                                            <label for="customCheckbox8a35" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a35" name="biaya203" value="29221" onchange="hitungTotal34()">
                                            <label for="customCheckbox8a35" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya204 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a36" name="biaya204" value="29221" onchange="hitungTotal34()" checked>
                                            <label for="customCheckbox8a36" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8a36" name="biaya204" value="29221" onchange="hitungTotal34()">
                                            <label for="customCheckbox8a36" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total34'); ?>
                              
                            </tr>
                            <tr>
                                <td rowspan="1">b.  EDUKASI & KONSELING GIZI</td>
                                <td>Diberikan penekanan mengenai pentingnya keteraturan <br>jadwal makan, jenis dan jumlah kandungan kalori.</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya205 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b11" name="biaya205" value="29221" onchange="hitungTotal35()" checked>
                                            <label for="customCheckbox8b11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b11" name="biaya205" value="29221" onchange="hitungTotal35()">
                                            <label for="customCheckbox8b11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya206 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b12" name="biaya206" value="29221" onchange="hitungTotal35()" checked>
                                            <label for="customCheckbox8b12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b12" name="biaya206" value="29221" onchange="hitungTotal35()">
                                            <label for="customCheckbox8b12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya207 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b13" name="biaya207" value="29221" onchange="hitungTotal35()" checked>
                                            <label for="customCheckbox8b13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b13" name="biaya207" value="29221" onchange="hitungTotal35()">
                                            <label for="customCheckbox8b13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya208 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b14" name="biaya208" value="29221" onchange="hitungTotal35()" checked>
                                            <label for="customCheckbox8b14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b14" name="biaya208" value="29221" onchange="hitungTotal35()">
                                            <label for="customCheckbox8b14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya209 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b15" name="biaya209" value="29221" onchange="hitungTotal35()" checked>
                                            <label for="customCheckbox8b15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b15" name="biaya209" value="29221" onchange="hitungTotal35()">
                                            <label for="customCheckbox8b15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya210 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b16" name="biaya210" value="29221" onchange="hitungTotal35()" checked>
                                            <label for="customCheckbox8b16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8b16" name="biaya210" value="29221" onchange="hitungTotal35()">
                                            <label for="customCheckbox8b16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total35'); ?>
                                

                            </tr>

                            <tr>

                                <td rowspan="3">c.  EDUKASI KEPERAWATAN</td>
                                <td>a.  Hand Hygiene</td>
                                
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya211 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca1" name="biaya211" value="29221" onchange="hitungTotal36()" checked>
                                            <label for="customCheckbox8ca1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca1" name="biaya211" value="29221" onchange="hitungTotal36()">
                                            <label for="customCheckbox8ca1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya212 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca2" name="biaya212" value="29221" onchange="hitungTotal36()" checked>
                                            <label for="customCheckbox8ca2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca2" name="biaya212" value="29221" onchange="hitungTotal36()">
                                            <label for="customCheckbox8ca2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya213 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca3" name="biaya213" value="29221" onchange="hitungTotal36()" checked>
                                            <label for="customCheckbox8ca3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca3" name="biaya213" value="29221" onchange="hitungTotal36()">
                                            <label for="customCheckbox8ca3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya214 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca4" name="biaya214" value="29221" onchange="hitungTotal36()" checked>
                                            <label for="customCheckbox8ca4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca4" name="biaya214" value="29221" onchange="hitungTotal36()">
                                            <label for="customCheckbox8ca4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya215 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca5" name="biaya215" value="29221" onchange="hitungTotal36()" checked>
                                            <label for="customCheckbox8ca5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca5" name="biaya215" value="29221" onchange="hitungTotal36()">
                                            <label for="customCheckbox8ca5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya216 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca6" name="biaya216" value="29221" onchange="hitungTotal36()" checked>
                                            <label for="customCheckbox8ca6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8ca6" name="biaya216" value="29221" onchange="hitungTotal36()">
                                            <label for="customCheckbox8ca6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total36'); ?>
                            </tr>

                            <tr>

                                <td>b.  Edukasi Perawatan Kaki</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya217 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb1" name="biaya217" value="29221" onchange="hitungTotal37()" checked>
                                            <label for="customCheckbox8cb1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb1" name="biaya217" value="29221" onchange="hitungTotal37()">
                                            <label for="customCheckbox8cb1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya218 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb2" name="biaya218" value="29221" onchange="hitungTotal37()" checked>
                                            <label for="customCheckbox8cb2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb2" name="biaya218" value="29221" onchange="hitungTotal37()">
                                            <label for="customCheckbox8cb2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya219 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb3" name="biaya219" value="29221" onchange="hitungTotal37()" checked>
                                            <label for="customCheckbox8cb3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb3" name="biaya219" value="29221" onchange="hitungTotal37()">
                                            <label for="customCheckbox8cb3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya220 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb4" name="biaya220" value="29221" onchange="hitungTotal37()" checked>
                                            <label for="customCheckbox8cb4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb4" name="biaya220" value="29221" onchange="hitungTotal37()">
                                            <label for="customCheckbox8cb4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya221 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb5" name="biaya221" value="29221" onchange="hitungTotal37()" checked>
                                            <label for="customCheckbox8cb5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb5" name="biaya221" value="29221" onchange="hitungTotal37()">
                                            <label for="customCheckbox8cb5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya222 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb6" name="biaya222" value="29221" onchange="hitungTotal37()" checked>
                                            <label for="customCheckbox8cb6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cb6" name="biaya222" value="29221" onchange="hitungTotal37()">
                                            <label for="customCheckbox8cb6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total37'); ?>
                                
                            </tr>
                            <tr>

                                <td>c.  Menjaga kebersihan makanan dan peralatan makanan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya223 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc1" name="biaya223" value="29221" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox8cc1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc1" name="biaya223" value="29221" onchange="hitungTotal38()">
                                            <label for="customCheckbox8cc1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya224 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc2" name="biaya224" value="29221" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox8cc2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc2" name="biaya224" value="29221" onchange="hitungTotal38()">
                                            <label for="customCheckbox8cc2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya225 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc3" name="biaya225" value="29221" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox8cc3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc3" name="biaya225" value="29221" onchange="hitungTotal38()">
                                            <label for="customCheckbox8cc3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya226 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc4" name="biaya226" value="29221" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox8cc4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc4" name="biaya226" value="29221" onchange="hitungTotal38()">
                                            <label for="customCheckbox8cc4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya227 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc5" name="biaya227" value="29221" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox8cc5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc5" name="biaya227" value="29221" onchange="hitungTotal38()">
                                            <label for="customCheckbox8cc5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya228 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc6" name="biaya228" value="29221" onchange="hitungTotal38()" checked>
                                            <label for="customCheckbox8cc6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8cc6" name="biaya228" value="29221" onchange="hitungTotal38()">
                                            <label for="customCheckbox8cc6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total38'); ?>
                            </tr>

                            <tr>
                                <td rowspan="3">d.  EDUKASI   FARMASI</td>
                                <td>Informasi Obat </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya229 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d11" name="biaya229" value="29221" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox8d11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d11" name="biaya229" value="29221" onchange="hitungTotal39()">
                                            <label for="customCheckbox8d11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya230 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d12" name="biaya230" value="29221" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox8d12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d12" name="biaya230" value="29221" onchange="hitungTotal39()">
                                            <label for="customCheckbox8d12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya231 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d13" name="biaya231" value="29221" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox8d13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d13" name="biaya231" value="29221" onchange="hitungTotal39()">
                                            <label for="customCheckbox8d13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya232 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d14" name="biaya232" value="29221" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox8d14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d14" name="biaya232" value="29221" onchange="hitungTotal39()">
                                            <label for="customCheckbox8d14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya233 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d15" name="biaya233" value="29221" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox8d15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d15" name="biaya233" value="29221" onchange="hitungTotal39()">
                                            <label for="customCheckbox8d15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya234 == 29221) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d16" name="biaya234" value="29221" onchange="hitungTotal39()" checked>
                                            <label for="customCheckbox8d16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d16" name="biaya234" value="29221" onchange="hitungTotal39()">
                                            <label for="customCheckbox8d16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total39'); ?>
                            </tr>
                            <tr>

                                <td>Konseling obat</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya235 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d21" name="biaya235" value="1000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox8d21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d21" name="biaya235" value="1000" onchange="hitungTotal40()">
                                            <label for="customCheckbox8d21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya236 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d22" name="biaya236" value="1000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox8d22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d22" name="biaya236" value="1000" onchange="hitungTotal40()">
                                            <label for="customCheckbox8d22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya237 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d23" name="biaya237" value="1000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox8d23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d23" name="biaya237" value="1000" onchange="hitungTotal40()">
                                            <label for="customCheckbox8d23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya238 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d24" name="biaya238" value="1000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox8d24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d24" name="biaya238" value="1000" onchange="hitungTotal40()">
                                            <label for="customCheckbox8d24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya239 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d25" name="biaya239" value="1000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox8d25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d25" name="biaya239" value="1000" onchange="hitungTotal40()">
                                            <label for="customCheckbox8d25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya240 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d26" name="biaya240" value="1000" onchange="hitungTotal40()" checked>
                                            <label for="customCheckbox8d26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d26" name="biaya240" value="1000" onchange="hitungTotal40()">
                                            <label for="customCheckbox8d26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total40'); ?>

                            </tr>

                            <tr>
                                <td>Edukasi penggunaan insulin</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya241 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d31" name="biaya241" value="1000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox8d31" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d31" name="biaya241" value="1000" onchange="hitungTotal41()">
                                            <label for="customCheckbox8d31" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya242 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d32" name="biaya242" value="1000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox8d32" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d32" name="biaya242" value="1000" onchange="hitungTotal41()">
                                            <label for="customCheckbox8d32" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya243 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d33" name="biaya243" value="1000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox8d33" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d33" name="biaya243" value="1000" onchange="hitungTotal41()">
                                            <label for="customCheckbox8d33" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya244 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d34" name="biaya244" value="1000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox8d34" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d34" name="biaya244" value="1000" onchange="hitungTotal41()">
                                            <label for="customCheckbox8d34" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya245 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d35" name="biaya245" value="1000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox8d35" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d35" name="biaya245" value="1000" onchange="hitungTotal41()">
                                            <label for="customCheckbox8d35" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya246 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d36" name="biaya246" value="1000" onchange="hitungTotal41()" checked>
                                            <label for="customCheckbox8d36" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8d36" name="biaya246" value="1000" onchange="hitungTotal41()">
                                            <label for="customCheckbox8d36" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total41'); ?>
                                

                            </tr>

                            <tr>
                                <td rowspan="1">PENGISIAN FORMULIR INFORMASI<br> DAN EDUKASI TERINTEGRASI</td>
                                <td>Lembar edukasi terintegrasi</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya247 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8111" name="biaya247" value="1000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox8111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8111" name="biaya247" value="1000" onchange="hitungTotal42()">
                                            <label for="customCheckbox8111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya248 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8112" name="biaya248" value="1000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox8112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8112" name="biaya248" value="1000" onchange="hitungTotal42()">
                                            <label for="customCheckbox8112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya249 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8113" name="biaya249" value="1000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox8113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8113" name="biaya249" value="1000" onchange="hitungTotal42()">
                                            <label for="customCheckbox8113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya250 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8114" name="biaya250" value="1000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox8114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8114" name="biaya250" value="1000" onchange="hitungTotal42()">
                                            <label for="customCheckbox8114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya251 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8115" name="biaya251" value="1000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox8115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8115" name="biaya251" value="1000" onchange="hitungTotal42()">
                                            <label for="customCheckbox8115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya252 == 1000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8116" name="biaya252" value="1000" onchange="hitungTotal42()" checked>
                                            <label for="customCheckbox8116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox8116" name="biaya252" value="1000" onchange="hitungTotal42()">
                                            <label for="customCheckbox8116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total42'); ?>
                                
                            </tr>

                            <!-- Nomor 9 -->
                            <tr>
                                <td rowspan="9">9</td>
                                <td rowspan="4">a.  INJEKSI / INFUS</td>
                                <td>Insulin</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya253 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a11" name="biaya253" value="45000" onchange="hitungTotal43()" checked>
                                            <label for="customCheckbox9a11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a11" name="biaya253" value="45000" onchange="hitungTotal43()">
                                            <label for="customCheckbox9a11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya254 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a12" name="biaya254" value="45000" onchange="hitungTotal43()" checked>
                                            <label for="customCheckbox9a12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a12" name="biaya254" value="45000" onchange="hitungTotal43()">
                                            <label for="customCheckbox9a12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya255 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a13" name="biaya255" value="45000" onchange="hitungTotal43()" checked>
                                            <label for="customCheckbox9a13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a13" name="biaya255" value="45000" onchange="hitungTotal43()">
                                            <label for="customCheckbox9a13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya256 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a14" name="biaya256" value="45000" onchange="hitungTotal43()" checked>
                                            <label for="customCheckbox9a14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a14" name="biaya256" value="45000" onchange="hitungTotal43()">
                                            <label for="customCheckbox9a14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya257 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a15" name="biaya257" value="45000" onchange="hitungTotal43()" checked>
                                            <label for="customCheckbox9a15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a15" name="biaya257" value="45000" onchange="hitungTotal43()">
                                            <label for="customCheckbox9a15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya258 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a16" name="biaya258" value="45000" onchange="hitungTotal43()" checked>
                                            <label for="customCheckbox9a16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a16" name="biaya258" value="45000" onchange="hitungTotal43()">
                                            <label for="customCheckbox9a16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total43'); ?>
                                
                            </tr>

                            <tr>
                                <td>Inj. Mecobalamin</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya259 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a21" name="biaya259" value="45000" onchange="hitungTotal44()" checked>
                                            <label for="customCheckbox9a21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a21" name="biaya259" value="45000" onchange="hitungTotal44()">
                                            <label for="customCheckbox9a21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya260 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a22" name="biaya260" value="45000" onchange="hitungTotal44()" checked>
                                            <label for="customCheckbox9a22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a22" name="biaya260" value="45000" onchange="hitungTotal44()">
                                            <label for="customCheckbox9a22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya261 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a23" name="biaya261" value="45000" onchange="hitungTotal44()" checked>
                                            <label for="customCheckbox9a23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a23" name="biaya261" value="45000" onchange="hitungTotal44()">
                                            <label for="customCheckbox9a23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya262 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a24" name="biaya262" value="45000" onchange="hitungTotal44()" checked>
                                            <label for="customCheckbox9a24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a24" name="biaya262" value="45000" onchange="hitungTotal44()">
                                            <label for="customCheckbox9a24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya263 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a25" name="biaya263" value="45000" onchange="hitungTotal44()" checked>
                                            <label for="customCheckbox9a25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a25" name="biaya263" value="45000" onchange="hitungTotal44()">
                                            <label for="customCheckbox9a25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya264 == 45000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a26" name="biaya264" value="45000" onchange="hitungTotal44()" checked>
                                            <label for="customCheckbox9a26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a26" name="biaya264" value="45000" onchange="hitungTotal44()">
                                            <label for="customCheckbox9a26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total44'); ?>
                                
                            </tr>

                            <tr>
                                <td>Inj. Antiulkus Peptik</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya265 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a31" name="biaya265" value="27000" onchange="hitungTotal45()" checked>
                                            <label for="customCheckbox9a31" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a31" name="biaya265" value="27000" onchange="hitungTotal45()">
                                            <label for="customCheckbox9a31" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya266 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a32" name="biaya266" value="27000" onchange="hitungTotal45()" checked>
                                            <label for="customCheckbox9a32" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a32" name="biaya266" value="27000" onchange="hitungTotal45()">
                                            <label for="customCheckbox9a32" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya267 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a33" name="biaya267" value="27000" onchange="hitungTotal45()" checked>
                                            <label for="customCheckbox9a33" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a33" name="biaya267" value="27000" onchange="hitungTotal45()">
                                            <label for="customCheckbox9a33" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya268 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a34" name="biaya268" value="27000" onchange="hitungTotal45()" checked>
                                            <label for="customCheckbox9a34" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a34" name="biaya268" value="27000" onchange="hitungTotal45()">
                                            <label for="customCheckbox9a34" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya269 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a35" name="biaya269" value="27000" onchange="hitungTotal45()" checked>
                                            <label for="customCheckbox9a35" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a35" name="biaya269" value="27000" onchange="hitungTotal45()">
                                            <label for="customCheckbox9a35" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya270 == 27000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a36" name="biaya270" value="27000" onchange="hitungTotal45()" checked>
                                            <label for="customCheckbox9a36" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a36" name="biaya270" value="27000" onchange="hitungTotal45()">
                                            <label for="customCheckbox9a36" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total45'); ?>
                                
                            </tr>

                            <tr>
                                <td>Inj. Antiemetik</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya271 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a41" name="biaya271" value="13000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox9a41" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a41" name="biaya271" value="13000" onchange="hitungTotal46()">
                                            <label for="customCheckbox9a41" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya272 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a42" name="biaya272" value="13000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox9a42" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a42" name="biaya272" value="13000" onchange="hitungTotal42()">
                                            <label for="customCheckbox9a42" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya273 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a43" name="biaya273" value="13000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox9a43" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a43" name="biaya273" value="13000" onchange="hitungTotal46()">
                                            <label for="customCheckbox9a43" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya274 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a44" name="biaya274" value="13000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox9a44" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a44" name="biaya274" value="13000" onchange="hitungTotal46()">
                                            <label for="customCheckbox9a44" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya275 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a45" name="biaya275" value="13000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox9a45" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a45" name="biaya275" value="13000" onchange="hitungTotal46()">
                                            <label for="customCheckbox9a45" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya276 == 13000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a46" name="biaya276" value="13000" onchange="hitungTotal46()" checked>
                                            <label for="customCheckbox9a46" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9a46" name="biaya276" value="13000" onchange="hitungTotal46()">
                                            <label for="customCheckbox9a46" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total46'); ?>
                                
                            </tr>
                            <tr>
                                <td>b.  CAIRAN INFUS</td>
                                <td>RL/RA/ NaCl 0,9%</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya277 == 19600) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b11" name="biaya277" value="19600" onchange="hitungTotal47()" checked>
                                            <label for="customCheckbox9b11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b11" name="biaya277" value="19600" onchange="hitungTotal47()">
                                            <label for="customCheckbox9b11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya278 == 19600) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b12" name="biaya278" value="19600" onchange="hitungTotal47()" checked>
                                            <label for="customCheckbox9b12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b12" name="biaya278" value="19600" onchange="hitungTotal47()">
                                            <label for="customCheckbox9b12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya279 == 19600) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b13" name="biaya279" value="19600" onchange="hitungTotal47()" checked>
                                            <label for="customCheckbox9b13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b13" name="biaya279" value="19600" onchange="hitungTotal47()">
                                            <label for="customCheckbox9b13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya280 == 19600) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b14" name="biaya280" value="19600" onchange="hitungTotal47()" checked>
                                            <label for="customCheckbox9b14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b14" name="biaya280" value="19600" onchange="hitungTotal47()">
                                            <label for="customCheckbox9b14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya281 == 19600) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b15" name="biaya281" value="19600" onchange="hitungTotal47()" checked>
                                            <label for="customCheckbox9b15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b15" name="biaya281" value="19600" onchange="hitungTotal47()">
                                            <label for="customCheckbox9b15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya282 == 19600) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b16" name="biaya282" value="19600" onchange="hitungTotal47()" checked>
                                            <label for="customCheckbox9b16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9b16" name="biaya282" value="19600" onchange="hitungTotal47()">
                                            <label for="customCheckbox9b16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total47'); ?>
                                
                            </tr>
                            <tr>
                                <td rowspan="4">c.  OBAT ORAL</td>
                                <td>Metformin</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya283 == 28100) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c11" name="biaya283" value="28100" onchange="hitungTotal48()" checked>
                                            <label for="customCheckbox9c11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c11" name="biaya283" value="28100" onchange="hitungTotal48()">
                                            <label for="customCheckbox9c11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya284 == 28100) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c12" name="biaya284" value="28100" onchange="hitungTotal48()" checked>
                                            <label for="customCheckbox9c12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c12" name="biaya284" value="28100" onchange="hitungTotal48()">
                                            <label for="customCheckbox9c12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya285 == 28100) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c13" name="biaya285" value="28100" onchange="hitungTotal48()" checked>
                                            <label for="customCheckbox9c13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c13" name="biaya285" value="28100" onchange="hitungTotal48()">
                                            <label for="customCheckbox9c13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya286 == 28100) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c14" name="biaya286" value="28100" onchange="hitungTotal48()" checked>
                                            <label for="customCheckbox9c14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c14" name="biaya286" value="28100" onchange="hitungTotal48()">
                                            <label for="customCheckbox9c14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya287 == 28100) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c15" name="biaya287" value="28100" onchange="hitungTotal48()" checked>
                                            <label for="customCheckbox9c15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c15" name="biaya287" value="28100" onchange="hitungTotal48()">
                                            <label for="customCheckbox9c15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya288 == 28100) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c16" name="biaya288" value="28100" onchange="hitungTotal48()" checked>
                                            <label for="customCheckbox9c16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c16" name="biaya288" value="28100" onchange="hitungTotal48()">
                                            <label for="customCheckbox9c16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total48'); ?>
                            </tr>
                            <tr>
                                <td>Sulfoniurea</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya289 == 50800) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c21" name="biaya289" value="50800" onchange="hitungTotal49()" checked>
                                            <label for="customCheckbox9c21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c21" name="biaya289" value="50800" onchange="hitungTotal49()">
                                            <label for="customCheckbox9c21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya290 == 50800) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c22" name="biaya290" value="50800" onchange="hitungTotal49()" checked>
                                            <label for="customCheckbox9c22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c22" name="biaya290" value="50800" onchange="hitungTotal49()">
                                            <label for="customCheckbox9c22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya291 == 50800) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c23" name="biaya291" value="50800" onchange="hitungTotal49()" checked>
                                            <label for="customCheckbox9c23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c23" name="biaya291" value="50800" onchange="hitungTotal49()">
                                            <label for="customCheckbox9c23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya292 == 50800) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c24" name="biaya292" value="50800" onchange="hitungTotal49()" checked>
                                            <label for="customCheckbox9c24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c24" name="biaya292" value="50800" onchange="hitungTotal49()">
                                            <label for="customCheckbox9c24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya293 == 50800) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c25" name="biaya293" value="50800" onchange="hitungTotal49()" checked>
                                            <label for="customCheckbox9c25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c25" name="biaya293" value="50800" onchange="hitungTotal49()">
                                            <label for="customCheckbox9c25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya294 == 50800) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c26" name="biaya294" value="50800" onchange="hitungTotal49()" checked>
                                            <label for="customCheckbox9c26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c26" name="biaya294" value="50800" onchange="hitungTotal49()">
                                            <label for="customCheckbox9c26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total49'); ?>
                                

                            </tr>
                            <tr>
                                <td>Acarbose</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya295 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c31" name="biaya295" value="26000" onchange="hitungTotal50()" checked>
                                            <label for="customCheckbox9c31" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c31" name="biaya295" value="26000" onchange="hitungTotal50()">
                                            <label for="customCheckbox9c31" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya296 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c32" name="biaya296" value="26000" onchange="hitungTotal50()" checked>
                                            <label for="customCheckbox9c32" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c32" name="biaya296" value="26000" onchange="hitungTotal50()">
                                            <label for="customCheckbox9c32" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya297 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c33" name="biaya297" value="26000" onchange="hitungTotal50()" checked>
                                            <label for="customCheckbox9c33" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c33" name="biaya297" value="26000" onchange="hitungTotal50()">
                                            <label for="customCheckbox9c33" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya298 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c34" name="biaya298" value="26000" onchange="hitungTotal50()" checked>
                                            <label for="customCheckbox9c34" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c34" name="biaya298" value="26000" onchange="hitungTotal50()">
                                            <label for="customCheckbox9c34" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya299 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c35" name="biaya299" value="26000" onchange="hitungTotal50()" checked>
                                            <label for="customCheckbox9c35" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c35" name="biaya299" value="26000" onchange="hitungTotal50()">
                                            <label for="customCheckbox9c35" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya300 == 26000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c36" name="biaya300" value="26000" onchange="hitungTotal50()" checked>
                                            <label for="customCheckbox9c36" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c36" name="biaya300" value="26000" onchange="hitungTotal50()">
                                            <label for="customCheckbox9c36" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total50'); ?>
                                

                            </tr>
                            <tr>
                                <td>Pioglitazone</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya301 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c41" name="biaya301" value="31500" onchange="hitungTotal51()" checked>
                                            <label for="customCheckbox9c41" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c41" name="biaya301" value="31500" onchange="hitungTotal51()">
                                            <label for="customCheckbox9c41" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya302 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c42" name="biaya302" value="31500" onchange="hitungTotal51()" checked>
                                            <label for="customCheckbox9c42" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c42" name="biaya302" value="31500" onchange="hitungTotal51()">
                                            <label for="customCheckbox9c42" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya303 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c43" name="biaya303" value="31500" onchange="hitungTotal51()" checked>
                                            <label for="customCheckbox9c43" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c43" name="biaya303" value="31500" onchange="hitungTotal51()">
                                            <label for="customCheckbox9c43" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya304 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c44" name="biaya304" value="31500" onchange="hitungTotal51()" checked>
                                            <label for="customCheckbox9c44" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c44" name="biaya304" value="31500" onchange="hitungTotal51()">
                                            <label for="customCheckbox9c44" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya305 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c45" name="biaya305" value="31500" onchange="hitungTotal51()" checked>
                                            <label for="customCheckbox9c45" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c45" name="biaya305" value="31500" onchange="hitungTotal51()">
                                            <label for="customCheckbox9c45" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya306 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c46" name="biaya306" value="31500" onchange="hitungTotal51()" checked>
                                            <label for="customCheckbox9c46" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox9c46" name="biaya306" value="31500" onchange="hitungTotal51()">
                                            <label for="customCheckbox9c46" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total51'); ?>
                                
                            </tr>

                            <!-- nomor 10 -->
                            <tr>
                                <td rowspan="7">10</td>
                                <td rowspan="1">a.  TLI MEDIS</td>
                                <td>Terapi cairan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya307 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a11" name="biaya307" value="31500" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox10a11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a11" name="biaya307" value="31500" onchange="hitungTotal52()">
                                            <label for="customCheckbox10a11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya308 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a12" name="biaya308" value="31500" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox10a12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a12" name="biaya308" value="31500" onchange="hitungTotal52()">
                                            <label for="customCheckbox10a12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya309 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a13" name="biaya309" value="31500" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox10a13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a13" name="biaya309" value="31500" onchange="hitungTotal52()">
                                            <label for="customCheckbox10a13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya310 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a14" name="biaya310" value="31500" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox10a14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a14" name="biaya310" value="31500" onchange="hitungTotal52()">
                                            <label for="customCheckbox10a14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya311 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a15" name="biaya311" value="31500" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox10a15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a15" name="biaya311" value="31500" onchange="hitungTotal52()">
                                            <label for="customCheckbox10a15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya312 == 31500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a16" name="biaya312" value="31500" onchange="hitungTotal52()" checked>
                                            <label for="customCheckbox10a16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10a16" name="biaya312" value="31500" onchange="hitungTotal52()">
                                            <label for="customCheckbox10a16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total52'); ?>
                                
                            </tr>

                            <tr>
                                <td rowspan="4">b.  TLI KEPERAWATAN</td>
                                <td>a.  Kode SIKI (I.08238): Manajemen Nyeri</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya313 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba1" name="biaya313" value="18500" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox10ba1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba1" name="biaya313" value="18500" onchange="hitungTotal53()">
                                            <label for="customCheckbox10ba1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya314 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba2" name="biaya314" value="18500" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox10ba2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba2" name="biaya314" value="18500" onchange="hitungTotal53()">
                                            <label for="customCheckbox10ba2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya315 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba3" name="biaya315" value="18500" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox10ba3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba3" name="biaya315" value="18500" onchange="hitungTotal53()">
                                            <label for="customCheckbox10ba3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya316 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba4" name="biaya316" value="18500" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox10ba4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba4" name="biaya316" value="18500" onchange="hitungTotal53()">
                                            <label for="customCheckbox10ba4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya317 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba5" name="biaya317" value="18500" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox10ba5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba5" name="biaya317" value="18500" onchange="hitungTotal53()">
                                            <label for="customCheckbox10ba5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya318 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba6" name="biaya318" value="18500" onchange="hitungTotal53()" checked>
                                            <label for="customCheckbox10ba6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10ba6" name="biaya318" value="18500" onchange="hitungTotal53()">
                                            <label for="customCheckbox10ba6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total53'); ?>
                            </tr>
                            <tr>
                                <td>b.  Kode SIKI (I.03115): Manajemen hiperglikemia</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya319 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb1" name="biaya319" value="18500" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox10bb1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb1" name="biaya319" value="18500" onchange="hitungTotal54()">
                                            <label for="customCheckbox10bb1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya320 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb2" name="biaya320" value="18500" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox10bb2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb2" name="biaya320" value="18500" onchange="hitungTotal54()">
                                            <label for="customCheckbox10bb2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya321 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb3" name="biaya321" value="18500" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox10bb3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb3" name="biaya321" value="18500" onchange="hitungTotal54()">
                                            <label for="customCheckbox10bb3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya322 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb4" name="biaya322" value="18500" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox10bb4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb4" name="biaya322" value="18500" onchange="hitungTotal54()">
                                            <label for="customCheckbox10bb4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya323 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb5" name="biaya323" value="18500" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox10bb5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb5" name="biaya323" value="18500" onchange="hitungTotal54()">
                                            <label for="customCheckbox10bb5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya324 == 18500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb6" name="biaya324" value="18500" onchange="hitungTotal54()" checked>
                                            <label for="customCheckbox10bb6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bb6" name="biaya324" value="18500" onchange="hitungTotal54()">
                                            <label for="customCheckbox10bb6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total54'); ?>
                                
                            </tr>

                            <tr>
                                <td>c.  Kode SIKI (I.03116): Manajemen Hipovolemia</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya325 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc1" name="biaya325" value="26500" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox10bc1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc1" name="biaya325" value="26500" onchange="hitungTotal55()">
                                            <label for="customCheckbox10bc1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya326 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc2" name="biaya326" value="26500" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox10bc2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc2" name="biaya326" value="26500" onchange="hitungTotal55()">
                                            <label for="customCheckbox10bc2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya327 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc3" name="biaya327" value="26500" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox10bc3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc3" name="biaya327" value="26500" onchange="hitungTotal55()">
                                            <label for="customCheckbox10bc3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya328 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc4" name="biaya328" value="26500" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox10bc4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc4" name="biaya328" value="26500" onchange="hitungTotal55()">
                                            <label for="customCheckbox10bc4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya329 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc5" name="biaya329" value="26500" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox10bc5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc5" name="biaya329" value="26500" onchange="hitungTotal55()">
                                            <label for="customCheckbox10bc5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya330 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc6" name="biaya330" value="26500" onchange="hitungTotal55()" checked>
                                            <label for="customCheckbox10bc6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bc6" name="biaya330" value="26500" onchange="hitungTotal55()">
                                            <label for="customCheckbox10bc6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total55'); ?>
                                
                            </tr>
                            <tr>
                                <td>d.  Kode SIKI (0): </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya331 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd1" name="biaya331" value="26500" onchange="hitungTotal56()" checked>
                                            <label for="customCheckbox10bd1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd1" name="biaya331" value="26500" onchange="hitungTotal56()">
                                            <label for="customCheckbox10bd1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya332 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd2" name="biaya332" value="26500" onchange="hitungTotal56()" checked>
                                            <label for="customCheckbox10bd2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd2" name="biaya332" value="26500" onchange="hitungTotal56()">
                                            <label for="customCheckbox10bd2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya333 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd3" name="biaya333" value="26500" onchange="hitungTotal56()" checked>
                                            <label for="customCheckbox10bd3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd3" name="biaya333" value="26500" onchange="hitungTotal56()">
                                            <label for="customCheckbox10bd3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya334 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd4" name="biaya334" value="26500" onchange="hitungTotal56()" checked>
                                            <label for="customCheckbox10bd4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd4" name="biaya334" value="26500" onchange="hitungTotal56()">
                                            <label for="customCheckbox10bd4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya335 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd5" name="biaya335" value="26500" onchange="hitungTotal56()" checked>
                                            <label for="customCheckbox10bd5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd5" name="biaya335" value="26500" onchange="hitungTotal56()">
                                            <label for="customCheckbox10bd5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya336 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd6" name="biaya336" value="26500" onchange="hitungTotal56()" checked>
                                            <label for="customCheckbox10bd6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10bd6" name="biaya336" value="26500" onchange="hitungTotal56()">
                                            <label for="customCheckbox10bd6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total56'); ?>
                                
                            </tr>
                            <tr>
                                <td>c.  TLI GIZI</td>
                                <td>Diit tinggi serat, rendah gula <br>diberikan sesuai kemampuan pasien </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya337 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c11" name="biaya337" value="26500" onchange="hitungTotal57()" checked>
                                            <label for="customCheckbox10c11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c11" name="biaya337" value="26500" onchange="hitungTotal57()">
                                            <label for="customCheckbox10c11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya338 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c12" name="biaya338" value="26500" onchange="hitungTotal57()" checked>
                                            <label for="customCheckbox10c12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c12" name="biaya338" value="26500" onchange="hitungTotal57()">
                                            <label for="customCheckbox10c12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya339 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c13" name="biaya339" value="26500" onchange="hitungTotal57()" checked>
                                            <label for="customCheckbox10c13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c13" name="biaya339" value="26500" onchange="hitungTotal57()">
                                            <label for="customCheckbox10c13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya340 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c14" name="biaya340" value="26500" onchange="hitungTotal57()" checked>
                                            <label for="customCheckbox10c14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c14" name="biaya340" value="26500" onchange="hitungTotal57()">
                                            <label for="customCheckbox10c14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya341 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c15" name="biaya341" value="26500" onchange="hitungTotal57()" checked>
                                            <label for="customCheckbox10c15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c15" name="biaya341" value="26500" onchange="hitungTotal57()">
                                            <label for="customCheckbox10c15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya342 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c16" name="biaya342" value="26500" onchange="hitungTotal57()" checked>
                                            <label for="customCheckbox10c16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10c16" name="biaya342" value="26500" onchange="hitungTotal57()">
                                            <label for="customCheckbox10c16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total57'); ?>
                                
                            </tr>
                            <tr>
                                <td>d.  TLI FARMASI</td>
                                <td>Rekomendasi kepada DPJP</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya343 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d11" name="biaya343" value="26500" onchange="hitungTotal58()" checked>
                                            <label for="customCheckbox10d11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d11" name="biaya343" value="26500" onchange="hitungTotal58()">
                                            <label for="customCheckbox10d11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya344 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d12" name="biaya344" value="26500" onchange="hitungTotal58()" checked>
                                            <label for="customCheckbox10d12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d12" name="biaya344" value="26500" onchange="hitungTotal58()">
                                            <label for="customCheckbox10d12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya345 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d13" name="biaya345" value="26500" onchange="hitungTotal58()" checked>
                                            <label for="customCheckbox10d13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d13" name="biaya345" value="26500" onchange="hitungTotal58()">
                                            <label for="customCheckbox10d13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya346 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d14" name="biaya346" value="26500" onchange="hitungTotal58()" checked>
                                            <label for="customCheckbox10d14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d14" name="biaya346" value="26500" onchange="hitungTotal58()">
                                            <label for="customCheckbox10d14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya347 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d15" name="biaya347" value="26500" onchange="hitungTotal58()" checked>
                                            <label for="customCheckbox10d15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d15" name="biaya347" value="26500" onchange="hitungTotal58()">
                                            <label for="customCheckbox10d15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya348 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d16" name="biaya348" value="26500" onchange="hitungTotal58()" checked>
                                            <label for="customCheckbox10d16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox10d16" name="biaya348" value="26500" onchange="hitungTotal58()">
                                            <label for="customCheckbox10d16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total58'); ?>
                                
                            </tr>

                            <!-- nomor 11 -->
                            <tr>
                                <td rowspan="11">11</td>
                                <td>a.  DOKTER DPJP / NON DPJP</td>
                                <td>Asesmen Ulang & Review Verifikasi Rencana Asuhan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya349 == 22000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a11" name="biaya349" value="22000" onchange="hitungTotal59()" checked>
                                            <label for="customCheckbox11a11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a11" name="biaya349" value="22000" onchange="hitungTotal59()">
                                            <label for="customCheckbox11a11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya350 == 22000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a12" name="biaya350" value="22000" onchange="hitungTotal59()" checked>
                                            <label for="customCheckbox11a12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a12" name="biaya350" value="22000" onchange="hitungTotal59()">
                                            <label for="customCheckbox11a12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya351 == 22000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a13" name="biaya351" value="22000" onchange="hitungTotal59()" checked>
                                            <label for="customCheckbox11a13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a13" name="biaya351" value="22000" onchange="hitungTotal59()">
                                            <label for="customCheckbox11a13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya352 == 22000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a14" name="biaya352" value="22000" onchange="hitungTotal59()" checked>
                                            <label for="customCheckbox11a14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a14" name="biaya352" value="22000" onchange="hitungTotal59()">
                                            <label for="customCheckbox11a14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya353 == 22000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a15" name="biaya353" value="22000" onchange="hitungTotal59()" checked>
                                            <label for="customCheckbox11a15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a15" name="biaya353" value="22000" onchange="hitungTotal59()">
                                            <label for="customCheckbox11a15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya354 == 22000) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a16" name="biaya354" value="22000" onchange="hitungTotal59()" checked>
                                            <label for="customCheckbox11a16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11a16" name="biaya354" value="22000" onchange="hitungTotal59()">
                                            <label for="customCheckbox11a16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total59'); ?>
                                
                            </tr>
                            <tr>
                                <td rowspan="4">b.  KEPERAWATAN</td>
                                <td>a.  Monitoring Gula Darah Pasien</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya355 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba1" name="biaya355" value="26500" onchange="hitungTotal60()" checked>
                                            <label for="customCheckbox11ba1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba1" name="biaya355" value="26500" onchange="hitungTotal60()">
                                            <label for="customCheckbox11ba1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya356 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba2" name="biaya356" value="26500" onchange="hitungTotal60()" checked>
                                            <label for="customCheckbox11ba2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba2" name="biaya356" value="26500" onchange="hitungTotal60()">
                                            <label for="customCheckbox11ba2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya357 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba3" name="biaya357" value="26500" onchange="hitungTotal60()" checked>
                                            <label for="customCheckbox11ba3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba3" name="biaya357" value="26500" onchange="hitungTotal60()">
                                            <label for="customCheckbox11ba3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya358 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba4" name="biaya358" value="26500" onchange="hitungTotal60()" checked>
                                            <label for="customCheckbox11ba4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba4" name="biaya358" value="26500" onchange="hitungTotal60()">
                                            <label for="customCheckbox11ba4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya359 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba5" name="biaya359" value="26500" onchange="hitungTotal60()" checked>
                                            <label for="customCheckbox11ba5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba5" name="biaya359" value="26500" onchange="hitungTotal60()">
                                            <label for="customCheckbox11ba5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya360 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba6" name="biaya360" value="26500" onchange="hitungTotal60()" checked>
                                            <label for="customCheckbox11ba6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11ba6" name="biaya360" value="26500" onchange="hitungTotal60()">
                                            <label for="customCheckbox11ba6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total60'); ?>
                                
                            </tr>
                            <tr>
                                <td>b.  Monitoring tanda-tanda vital pasien</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya361 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb1" name="biaya361" value="26500" onchange="hitungTotal61()" checked>
                                            <label for="customCheckbox11bb1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb1" name="biaya361" value="26500" onchange="hitungTotal61()">
                                            <label for="customCheckbox11bb1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya362 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb2" name="biaya362" value="26500" onchange="hitungTotal61()" checked>
                                            <label for="customCheckbox11bb2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb2" name="biaya362" value="26500" onchange="hitungTotal61()">
                                            <label for="customCheckbox11bb2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya363 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb3" name="biaya363" value="26500" onchange="hitungTotal61()" checked>
                                            <label for="customCheckbox11bb3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb3" name="biaya363" value="26500" onchange="hitungTotal61()">
                                            <label for="customCheckbox11bb3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya364 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb4" name="biaya364" value="26500" onchange="hitungTotal61()" checked>
                                            <label for="customCheckbox11bb4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb4" name="biaya364" value="26500" onchange="hitungTotal61()">
                                            <label for="customCheckbox11bb4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya365 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb5" name="biaya365" value="26500" onchange="hitungTotal61()" checked>
                                            <label for="customCheckbox11bb5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb5" name="biaya365" value="26500" onchange="hitungTotal61()">
                                            <label for="customCheckbox11bb5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya366 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb6" name="biaya366" value="26500" onchange="hitungTotal61()" checked>
                                            <label for="customCheckbox11bb6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bb6" name="biaya366" value="26500" onchange="hitungTotal61()">
                                            <label for="customCheckbox11bb6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total61'); ?>
                                
                            </tr>
                            <tr>
                                <td>c.  Monitoring Intake dan output cairan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya367 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc1" name="biaya367" value="26500" onchange="hitungTotal62()" checked>
                                            <label for="customCheckbox11bc1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc1" name="biaya367" value="26500" onchange="hitungTotal62()">
                                            <label for="customCheckbox11bc1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya368 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc2" name="biaya368" value="26500" onchange="hitungTotal62()" checked>
                                            <label for="customCheckbox11bc2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc2" name="biaya368" value="26500" onchange="hitungTotal62()">
                                            <label for="customCheckbox11bc2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya369 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc3" name="biaya369" value="26500" onchange="hitungTotal62()" checked>
                                            <label for="customCheckbox11bc3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc3" name="biaya369" value="26500" onchange="hitungTotal62()">
                                            <label for="customCheckbox11bc3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya370 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc4" name="biaya370" value="26500" onchange="hitungTotal62()" checked>
                                            <label for="customCheckbox11bc4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc4" name="biaya370" value="26500" onchange="hitungTotal62()">
                                            <label for="customCheckbox11bc4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya371 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc5" name="biaya371" value="26500" onchange="hitungTotal62()" checked>
                                            <label for="customCheckbox11bc5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc5" name="biaya371" value="26500" onchange="hitungTotal62()">
                                            <label for="customCheckbox11bc5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya372 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc6" name="biaya372" value="26500" onchange="hitungTotal62()" checked>
                                            <label for="customCheckbox11bc6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bc6" name="biaya372" value="26500" onchange="hitungTotal62()">
                                            <label for="customCheckbox11bc6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total62'); ?>
                                
                            </tr>
                            <tr>
                                <td>d.  Monitoring Tanda Dehidrasi</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya373 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd1" name="biaya373" value="26500" onchange="hitungTotal63()" checked>
                                            <label for="customCheckbox11bd1" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd1" name="biaya373" value="26500" onchange="hitungTotal63()">
                                            <label for="customCheckbox11bd1" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya374 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd2" name="biaya374" value="26500" onchange="hitungTotal63()" checked>
                                            <label for="customCheckbox11bd2" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd2" name="biaya374" value="26500" onchange="hitungTotal63()">
                                            <label for="customCheckbox11bd2" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya375 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd3" name="biaya375" value="26500" onchange="hitungTotal63()" checked>
                                            <label for="customCheckbox11bd3" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd3" name="biaya375" value="26500" onchange="hitungTotal63()">
                                            <label for="customCheckbox11bd3" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya376 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd4" name="biaya376" value="26500" onchange="hitungTotal63()" checked>
                                            <label for="customCheckbox11bd4" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd4" name="biaya376" value="26500" onchange="hitungTotal63()">
                                            <label for="customCheckbox11bd4" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya377 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd5" name="biaya377" value="26500" onchange="hitungTotal63()" checked>
                                            <label for="customCheckbox11bd5" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd5" name="biaya377" value="26500" onchange="hitungTotal63()">
                                            <label for="customCheckbox11bd5" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya378 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd6" name="biaya378" value="26500" onchange="hitungTotal63()" checked>
                                            <label for="customCheckbox11bd6" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11bd6" name="biaya378" value="26500" onchange="hitungTotal63()">
                                            <label for="customCheckbox11bd6" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total63'); ?>
                                
                            </tr>
                            <tr>
                                <td rowspan="3">c.  GIZI</td>
                                <td>Monitoring asupan makan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya379 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c11" name="biaya379" value="26500" onchange="hitungTotal64()" checked>
                                            <label for="customCheckbox11c11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c11" name="biaya379" value="26500" onchange="hitungTotal64()">
                                            <label for="customCheckbox11c11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya380 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c12" name="biaya380" value="26500" onchange="hitungTotal64()" checked>
                                            <label for="customCheckbox11c12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c12" name="biaya380" value="26500" onchange="hitungTotal64()">
                                            <label for="customCheckbox11c12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya381 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c13" name="biaya381" value="26500" onchange="hitungTotal64()" checked>
                                            <label for="customCheckbox11c13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c13" name="biaya381" value="26500" onchange="hitungTotal64()">
                                            <label for="customCheckbox11c13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya382 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c14" name="biaya382" value="26500" onchange="hitungTotal64()" checked>
                                            <label for="customCheckbox11c14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c14" name="biaya382" value="26500" onchange="hitungTotal64()">
                                            <label for="customCheckbox11c14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya383 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c15" name="biaya383" value="26500" onchange="hitungTotal64()" checked>
                                            <label for="customCheckbox11c15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c15" name="biaya383" value="26500" onchange="hitungTotal64()">
                                            <label for="customCheckbox11c15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya384 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c16" name="biaya384" value="26500" onchange="hitungTotal64()" checked>
                                            <label for="customCheckbox11c16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c16" name="biaya384" value="26500" onchange="hitungTotal64()">
                                            <label for="customCheckbox11c16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total64'); ?>
                                
                            </tr>
                            <tr>
                                <td>Monitoring Biokimia</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya385 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c21" name="biaya385" value="26500" onchange="hitungTotal65()" checked>
                                            <label for="customCheckbox11c21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c21" name="biaya385" value="26500" onchange="hitungTotal65()">
                                            <label for="customCheckbox11c21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya386 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c22" name="biaya386" value="26500" onchange="hitungTotal65()" checked>
                                            <label for="customCheckbox11c22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c22" name="biaya386" value="26500" onchange="hitungTotal65()">
                                            <label for="customCheckbox11c22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya387 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c23" name="biaya387" value="26500" onchange="hitungTotal65()" checked>
                                            <label for="customCheckbox11c23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c23" name="biaya387" value="26500" onchange="hitungTotal65()">
                                            <label for="customCheckbox11c23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya388 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c24" name="biaya388" value="26500" onchange="hitungTotal65()" checked>
                                            <label for="customCheckbox11c24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c24" name="biaya388" value="26500" onchange="hitungTotal65()">
                                            <label for="customCheckbox11c24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya389 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c25" name="biaya389" value="26500" onchange="hitungTotal65()" checked>
                                            <label for="customCheckbox11c25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c25" name="biaya389" value="26500" onchange="hitungTotal65()">
                                            <label for="customCheckbox11c25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya390 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c26" name="biaya390" value="26500" onchange="hitungTotal65()" checked>
                                            <label for="customCheckbox11c26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c26" name="biaya390" value="26500" onchange="hitungTotal65()">
                                            <label for="customCheckbox11c26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total65'); ?>
                               
                            </tr>
                            <tr>
                                <td>Monitoring Fisik/klinis terkait gizi</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya391 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c31" name="biaya391" value="26500" onchange="hitungTotal66()" checked>
                                            <label for="customCheckbox11c31" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c31" name="biaya391" value="26500" onchange="hitungTotal66()">
                                            <label for="customCheckbox11c31" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya392 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c32" name="biaya392" value="26500" onchange="hitungTotal66()" checked>
                                            <label for="customCheckbox11c32" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c32" name="biaya392" value="26500" onchange="hitungTotal66()">
                                            <label for="customCheckbox11c32" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya393 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c33" name="biaya393" value="26500" onchange="hitungTotal66()" checked>
                                            <label for="customCheckbox11c33" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c33" name="biaya393" value="26500" onchange="hitungTotal66()">
                                            <label for="customCheckbox11c33" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya394 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c34" name="biaya394" value="26500" onchange="hitungTotal66()" checked>
                                            <label for="customCheckbox11c34" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c34" name="biaya394" value="26500" onchange="hitungTotal66()">
                                            <label for="customCheckbox11c34" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya395 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c35" name="biaya395" value="26500" onchange="hitungTotal66()" checked>
                                            <label for="customCheckbox11c35" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c35" name="biaya395" value="26500" onchange="hitungTotal66()">
                                            <label for="customCheckbox11c35" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya396 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c36" name="biaya396" value="26500" onchange="hitungTotal66()" checked>
                                            <label for="customCheckbox11c36" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11c36" name="biaya396" value="26500" onchange="hitungTotal66()">
                                            <label for="customCheckbox11c36" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total66'); ?>
                                
                            </tr>
                            <tr>
                                <td rowspan="3">d.  FARMASI</td>
                                <td>Monitoring interaksi obat</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya397 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d11" name="biaya397" value="26500" onchange="hitungTotal67()" checked>
                                            <label for="customCheckbox11d11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d11" name="biaya397" value="26500" onchange="hitungTotal67()">
                                            <label for="customCheckbox11d11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya398 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d12" name="biaya398" value="26500" onchange="hitungTotal67()" checked>
                                            <label for="customCheckbox11d12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d12" name="biaya398" value="26500" onchange="hitungTotal67()">
                                            <label for="customCheckbox11d12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya399 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d13" name="biaya399" value="26500" onchange="hitungTotal67()" checked>
                                            <label for="customCheckbox11d13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d13" name="biaya399" value="26500" onchange="hitungTotal67()">
                                            <label for="customCheckbox11d13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya400 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d14" name="biaya400" value="26500" onchange="hitungTotal67()" checked>
                                            <label for="customCheckbox11d14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d14" name="biaya400" value="26500" onchange="hitungTotal67()">
                                            <label for="customCheckbox11d14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya401 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d15" name="biaya401" value="26500" onchange="hitungTotal67()" checked>
                                            <label for="customCheckbox11d15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d15" name="biaya401" value="26500" onchange="hitungTotal67()">
                                            <label for="customCheckbox11d15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya402 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d16" name="biaya402" value="26500" onchange="hitungTotal67()" checked>
                                            <label for="customCheckbox11d16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d16" name="biaya402" value="26500" onchange="hitungTotal67()">
                                            <label for="customCheckbox11d16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total67'); ?>
                                
                            </tr>
                            <tr>
                                <td>Monitoring efek samping obat</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya403 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d21" name="biaya403" value="26500" onchange="hitungTotal68()" checked>
                                            <label for="customCheckbox11d21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d21" name="biaya403" value="26500" onchange="hitungTotal68()">
                                            <label for="customCheckbox11d21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya404 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d22" name="biaya404" value="26500" onchange="hitungTotal68()" checked>
                                            <label for="customCheckbox11d22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d22" name="biaya404" value="26500" onchange="hitungTotal68()">
                                            <label for="customCheckbox11d22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya405 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d23" name="biaya405" value="26500" onchange="hitungTotal68()" checked>
                                            <label for="customCheckbox11d23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d23" name="biaya405" value="26500" onchange="hitungTotal68()">
                                            <label for="customCheckbox11d23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya406 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d24" name="biaya406" value="26500" onchange="hitungTotal68()" checked>
                                            <label for="customCheckbox11d24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d24" name="biaya406" value="26500" onchange="hitungTotal68()">
                                            <label for="customCheckbox11d24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya407 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d25" name="biaya407" value="26500" onchange="hitungTotal68()" checked>
                                            <label for="customCheckbox11d25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d25" name="biaya407" value="26500" onchange="hitungTotal68()">
                                            <label for="customCheckbox11d25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya408 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d26" name="biaya408" value="26500" onchange="hitungTotal68()" checked>
                                            <label for="customCheckbox11d26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d26" name="biaya408" value="26500" onchange="hitungTotal68()">
                                            <label for="customCheckbox11d26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total68'); ?>
                                
                            </tr>
                            <tr>
                                <td>Pemantauan terapi obat</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya409 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d31" name="biaya409" value="26500" onchange="hitungTotal69()" checked>
                                            <label for="customCheckbox11d31" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d31" name="biaya409" value="26500" onchange="hitungTotal69()">
                                            <label for="customCheckbox11d31" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya410 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d32" name="biaya410" value="26500" onchange="hitungTotal69()" checked>
                                            <label for="customCheckbox11d32" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d32" name="biaya410" value="26500" onchange="hitungTotal69()">
                                            <label for="customCheckbox11d32" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya411 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d33" name="biaya411" value="26500" onchange="hitungTotal69()" checked>
                                            <label for="customCheckbox11d33" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d33" name="biaya411" value="26500" onchange="hitungTotal69()">
                                            <label for="customCheckbox11d33" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya412 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d34" name="biaya412" value="26500" onchange="hitungTotal69()" checked>
                                            <label for="customCheckbox11d34" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d34" name="biaya412" value="26500" onchange="hitungTotal69()">
                                            <label for="customCheckbox11d34" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya413 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d35" name="biaya413" value="26500" onchange="hitungTotal69()" checked>
                                            <label for="customCheckbox11d35" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d35" name="biaya413" value="26500" onchange="hitungTotal69()">
                                            <label for="customCheckbox11d35" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya414 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d36" name="biaya414" value="26500" onchange="hitungTotal69()" checked>
                                            <label for="customCheckbox11d36" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox11d36" name="biaya414" value="26500" onchange="hitungTotal69()">
                                            <label for="customCheckbox11d36" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total69'); ?>
                                
                            </tr>

                            <!-- nomor 12 -->
                            <tr>
                                <td rowspan="3">12</td>
                                <td>a.  MEDIS</td>
                                <td></td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya415 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a11" name="biaya415" value="26500" onchange="hitungTotal70()" checked>
                                            <label for="customCheckbox12a11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a11" name="biaya415" value="26500" onchange="hitungTotal70()">
                                            <label for="customCheckbox12a11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya416 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a12" name="biaya416" value="26500" onchange="hitungTotal70()" checked>
                                            <label for="customCheckbox12a12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a12" name="biaya416" value="26500" onchange="hitungTotal70()">
                                            <label for="customCheckbox12a12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya417 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a13" name="biaya417" value="26500" onchange="hitungTotal70()" checked>
                                            <label for="customCheckbox12a13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a13" name="biaya417" value="26500" onchange="hitungTotal70()">
                                            <label for="customCheckbox12a13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya418 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a14" name="biaya418" value="26500" onchange="hitungTotal70()" checked>
                                            <label for="customCheckbox12a14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a14" name="biaya418" value="26500" onchange="hitungTotal70()">
                                            <label for="customCheckbox12a14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya419 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a15" name="biaya419" value="26500" onchange="hitungTotal70()" checked>
                                            <label for="customCheckbox12a15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a15" name="biaya419" value="26500" onchange="hitungTotal70()">
                                            <label for="customCheckbox12a15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya420 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a16" name="biaya420" value="26500" onchange="hitungTotal70()" checked>
                                            <label for="customCheckbox12a16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12a16" name="biaya420" value="26500" onchange="hitungTotal70()">
                                            <label for="customCheckbox12a16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total70'); ?>
                                
                            </tr>
                            <tr>
                                <td>b.  KEPERAWATAN</td>
                                <td>Dibantu sebagian/ mandiri</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya421 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b21" name="biaya421" value="26500" onchange="hitungTotal71()" checked>
                                            <label for="customCheckbox12b21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b21" name="biaya421" value="26500" onchange="hitungTotal71()">
                                            <label for="customCheckbox12b21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya422 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b22" name="biaya422" value="26500" onchange="hitungTotal71()" checked>
                                            <label for="customCheckbox12b22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b22" name="biaya422" value="26500" onchange="hitungTotal71()">
                                            <label for="customCheckbox12b22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya423 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b23" name="biaya423" value="26500" onchange="hitungTotal71()" checked>
                                            <label for="customCheckbox12b23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b23" name="biaya423" value="26500" onchange="hitungTotal71()">
                                            <label for="customCheckbox12b23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya424 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b24" name="biaya424" value="26500" onchange="hitungTotal71()" checked>
                                            <label for="customCheckbox12b24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b24" name="biaya424" value="26500" onchange="hitungTotal71()">
                                            <label for="customCheckbox12b24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya425 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b25" name="biaya425" value="26500" onchange="hitungTotal71()" checked>
                                            <label for="customCheckbox12b25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b25" name="biaya425" value="26500" onchange="hitungTotal71()">
                                            <label for="customCheckbox12b25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya426 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b26" name="biaya426" value="26500" onchange="hitungTotal71()" checked>
                                            <label for="customCheckbox12b26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12b26" name="biaya426" value="26500" onchange="hitungTotal71()">
                                            <label for="customCheckbox12b26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total71'); ?>
                                
                            </tr>
                            <tr>
                                <td>c.  FISIOTERAPI</td>
                                <td></td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya427 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c11" name="biaya427" value="26500" onchange="hitungTotal72()" checked>
                                            <label for="customCheckbox12c11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c11" name="biaya427" value="26500" onchange="hitungTotal51()">
                                            <label for="customCheckbox12c11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya428 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c12" name="biaya428" value="26500" onchange="hitungTotal72()" checked>
                                            <label for="customCheckbox12c12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c12" name="biaya428" value="26500" onchange="hitungTotal72()">
                                            <label for="customCheckbox12c12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya429 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c13" name="biaya429" value="26500" onchange="hitungTotal72()" checked>
                                            <label for="customCheckbox12c13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c13" name="biaya429" value="26500" onchange="hitungTotal72()">
                                            <label for="customCheckbox12c13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya430 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c14" name="biaya430" value="26500" onchange="hitungTotal72()" checked>
                                            <label for="customCheckbox12c14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c14" name="biaya430" value="26500" onchange="hitungTotal72()">
                                            <label for="customCheckbox12c14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya431 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c15" name="biaya431" value="26500" onchange="hitungTotal72()" checked>
                                            <label for="customCheckbox12c15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c15" name="biaya431" value="26500" onchange="hitungTotal72()">
                                            <label for="customCheckbox12c15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya432 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c16" name="biaya432" value="26500" onchange="hitungTotal72()" checked>
                                            <label for="customCheckbox12c16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox12c16" name="biaya432" value="26500" onchange="hitungTotal72()">
                                            <label for="customCheckbox12c16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total72'); ?>
                                
                            </tr> 

                            <!-- nomor 13 -->
                            <tr>
                                <td rowspan="9">13</td>
                                <td rowspan="2">a.  MEDIS</td>
                                <td>Gula darah terkontrol</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya433 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a11" name="biaya433" value="26500" onchange="hitungTotal73()" checked>
                                            <label for="customCheckbox13a11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a11" name="biaya433" value="26500" onchange="hitungTotal73()">
                                            <label for="customCheckbox13a11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya434 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a12" name="biaya434" value="26500" onchange="hitungTotal73()" checked>
                                            <label for="customCheckbox13a12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a12" name="biaya434" value="26500" onchange="hitungTotal73()">
                                            <label for="customCheckbox13a12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya435 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a13" name="biaya435" value="26500" onchange="hitungTotal73()" checked>
                                            <label for="customCheckbox13a13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a13" name="biaya435" value="26500" onchange="hitungTotal73()">
                                            <label for="customCheckbox13a13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya436 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a14" name="biaya436" value="26500" onchange="hitungTotal73()" checked>
                                            <label for="customCheckbox13a14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a14" name="biaya436" value="26500" onchange="hitungTotal73()">
                                            <label for="customCheckbox13a14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya437 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a15" name="biaya437" value="26500" onchange="hitungTotal73()" checked>
                                            <label for="customCheckbox13a15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a15" name="biaya437" value="26500" onchange="hitungTotal73()">
                                            <label for="customCheckbox13a15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya438 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a16" name="biaya438" value="26500" onchange="hitungTotal73()" checked>
                                            <label for="customCheckbox13a16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a16" name="biaya438" value="26500" onchange="hitungTotal73()">
                                            <label for="customCheckbox13a16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total73'); ?>
                                
                            </tr>
                            <tr>
                                <td>Komplikasi DM tertangani</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya439 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a21" name="biaya439" value="26500" onchange="hitungTotal74()" checked>
                                            <label for="customCheckbox13a21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a21" name="biaya439" value="26500" onchange="hitungTotal74()">
                                            <label for="customCheckbox13a21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya440 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a22" name="biaya440" value="26500" onchange="hitungTotal74()" checked>
                                            <label for="customCheckbox13a22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a22" name="biaya440" value="26500" onchange="hitungTotal74()">
                                            <label for="customCheckbox13a22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya441 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a23" name="biaya441" value="26500" onchange="hitungTotal74()" checked>
                                            <label for="customCheckbox13a23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a23" name="biaya441" value="26500" onchange="hitungTotal74()">
                                            <label for="customCheckbox13a23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya442 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a24" name="biaya442" value="26500" onchange="hitungTotal74()" checked>
                                            <label for="customCheckbox13a24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a24" name="biaya442" value="26500" onchange="hitungTotal74()">
                                            <label for="customCheckbox13a24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya443 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a25" name="biaya443" value="26500" onchange="hitungTotal74()" checked>
                                            <label for="customCheckbox13a25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a25" name="biaya443" value="26500" onchange="hitungTotal74()">
                                            <label for="customCheckbox13a25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya444 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a26" name="biaya444" value="26500" onchange="hitungTotal74()" checked>
                                            <label for="customCheckbox13a26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13a26" name="biaya444" value="26500" onchange="hitungTotal74()">
                                            <label for="customCheckbox13a26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total74'); ?>
                                
                            </tr>
                            <tr>
                                <td rowspan="3">b.  KEPERAWATAN</td>
                                <td>Tanda vital dalam batas normal</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya445 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b11" name="biaya445" value="26500" onchange="hitungTotal75()" checked>
                                            <label for="customCheckbox13b11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b11" name="biaya445" value="26500" onchange="hitungTotal75()">
                                            <label for="customCheckbox13b11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya446 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b12" name="biaya446" value="26500" onchange="hitungTotal75()" checked>
                                            <label for="customCheckbox13b12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b12" name="biaya446" value="26500" onchange="hitungTotal75()">
                                            <label for="customCheckbox13b12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya447 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b13" name="biaya447" value="26500" onchange="hitungTotal75()" checked>
                                            <label for="customCheckbox13b13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b13" name="biaya447" value="26500" onchange="hitungTotal75()">
                                            <label for="customCheckbox13b13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya448 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b14" name="biaya448" value="26500" onchange="hitungTotal75()" checked>
                                            <label for="customCheckbox13b14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b14" name="biaya448" value="26500" onchange="hitungTotal75()">
                                            <label for="customCheckbox13b14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya449 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b15" name="biaya449" value="26500" onchange="hitungTotal75()" checked>
                                            <label for="customCheckbox13b15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b15" name="biaya449" value="26500" onchange="hitungTotal75()">
                                            <label for="customCheckbox13b15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya450 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b16" name="biaya450" value="26500" onchange="hitungTotal75()" checked>
                                            <label for="customCheckbox13b16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b16" name="biaya450" value="26500" onchange="hitungTotal75()">
                                            <label for="customCheckbox13b16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total75'); ?>
                            </tr>
                            <tr>
                                <td>Intake Output seimbang</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya451 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b21" name="biaya451" value="26500" onchange="hitungTotal76()" checked>
                                            <label for="customCheckbox13b21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b21" name="biaya451" value="26500" onchange="hitungTotal76()">
                                            <label for="customCheckbox13b21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>

                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya452 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b22" name="biaya452" value="26500" onchange="hitungTotal76()" checked>
                                            <label for="customCheckbox13b22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b22" name="biaya452" value="26500" onchange="hitungTotal76()">
                                            <label for="customCheckbox13b22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya453 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b23" name="biaya453" value="26500" onchange="hitungTotal76()" checked>
                                            <label for="customCheckbox13b23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b23" name="biaya453" value="26500" onchange="hitungTotal76()">
                                            <label for="customCheckbox13b23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya454 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b24" name="biaya454" value="26500" onchange="hitungTotal76()" checked>
                                            <label for="customCheckbox13b24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b24" name="biaya454" value="26500" onchange="hitungTotal76()">
                                            <label for="customCheckbox13b24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya455 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b25" name="biaya455" value="26500" onchange="hitungTotal76()" checked>
                                            <label for="customCheckbox13b25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b25" name="biaya455" value="26500" onchange="hitungTotal76()">
                                            <label for="customCheckbox13b25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya456 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b26" name="biaya456" value="26500" onchange="hitungTotal76()" checked>
                                            <label for="customCheckbox13b26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b26" name="biaya456" value="26500" onchange="hitungTotal76()">
                                            <label for="customCheckbox13b26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total76'); ?>
                                
                            </tr>
                            <tr>
                                <td>Tidak ada laporan nyeri</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya457 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b31" name="biaya457" value="26500" onchange="hitungTotal77()" checked>
                                            <label for="customCheckbox13b31" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b31" name="biaya457" value="26500" onchange="hitungTotal77()">
                                            <label for="customCheckbox13b31" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya458 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b32" name="biaya458" value="26500" onchange="hitungTotal77()" checked>
                                            <label for="customCheckbox13b32" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b32" name="biaya458" value="26500" onchange="hitungTotal77()">
                                            <label for="customCheckbox13b32" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya459 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b33" name="biaya459" value="26500" onchange="hitungTotal77()" checked>
                                            <label for="customCheckbox13b33" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b33" name="biaya459" value="26500" onchange="hitungTotal77()">
                                            <label for="customCheckbox13b33" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya460 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b34" name="biaya460" value="26500" onchange="hitungTotal77()" checked>
                                            <label for="customCheckbox13b34" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b34" name="biaya460" value="26500" onchange="hitungTotal77()">
                                            <label for="customCheckbox13b34" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya461 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b35" name="biaya461" value="26500" onchange="hitungTotal77()" checked>
                                            <label for="customCheckbox13b35" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b35" name="biaya461" value="26500" onchange="hitungTotal77()">
                                            <label for="customCheckbox13b35" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya462 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b36" name="biaya462" value="26500" onchange="hitungTotal77()" checked>
                                            <label for="customCheckbox13b36" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13b36" name="biaya462" value="26500" onchange="hitungTotal77()">
                                            <label for="customCheckbox13b36" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total77'); ?>
                                
                            </tr>
                            <tr>
                                <td rowspan="2">c.  GIZI</td>
                                <td>Asupan makanan > 80 %</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya463 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c11" name="biaya463" value="26500" onchange="hitungTotal78()" checked>
                                            <label for="customCheckbox13c11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c11" name="biaya463" value="26500" onchange="hitungTotal78()">
                                            <label for="customCheckbox13c11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya464 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c12" name="biaya464" value="26500" onchange="hitungTotal78()" checked>
                                            <label for="customCheckbox13c12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c12" name="biaya464" value="26500" onchange="hitungTotal78()">
                                            <label for="customCheckbox13c12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya465 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c13" name="biaya465" value="26500" onchange="hitungTotal78()" checked>
                                            <label for="customCheckbox13c13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c13" name="biaya465" value="26500" onchange="hitungTotal78()">
                                            <label for="customCheckbox13c13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya466 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c14" name="biaya466" value="26500" onchange="hitungTotal78()" checked>
                                            <label for="customCheckbox13c14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c14" name="biaya466" value="26500" onchange="hitungTotal78()">
                                            <label for="customCheckbox13c14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya467 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c15" name="biaya467" value="26500" onchange="hitungTotal78()" checked>
                                            <label for="customCheckbox13c15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c15" name="biaya467" value="26500" onchange="hitungTotal78()">
                                            <label for="customCheckbox13c15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya468 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c16" name="biaya468" value="26500" onchange="hitungTotal78()" checked>
                                            <label for="customCheckbox13c16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c16" name="biaya468" value="26500" onchange="hitungTotal78()">
                                            <label for="customCheckbox13c16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total78'); ?>
                                
                            </tr>  
                            <tr>
                                <td>Optimalisasi status gizi</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya469 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c21" name="biaya469" value="26500" onchange="hitungTotal79()" checked>
                                            <label for="customCheckbox13c21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c21" name="biaya469" value="26500" onchange="hitungTotal79()">
                                            <label for="customCheckbox13c21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya470 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c22" name="biaya470" value="26500" onchange="hitungTotal79()" checked>
                                            <label for="customCheckbox13c22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c22" name="biaya470" value="26500" onchange="hitungTotal79()">
                                            <label for="customCheckbox13c22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya471 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c23" name="biaya471" value="26500" onchange="hitungTotal79()" checked>
                                            <label for="customCheckbox13c23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c23" name="biaya471" value="26500" onchange="hitungTotal79()">
                                            <label for="customCheckbox13c23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya472 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c24" name="biaya472" value="26500" onchange="hitungTotal79()" checked>
                                            <label for="customCheckbox13c24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c24" name="biaya472" value="26500" onchange="hitungTotal79()">
                                            <label for="customCheckbox13c24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya473 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c25" name="biaya473" value="26500" onchange="hitungTotal79()" checked>
                                            <label for="customCheckbox13c25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c25" name="biaya473" value="26500" onchange="hitungTotal79()">
                                            <label for="customCheckbox13c25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya474 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c26" name="biaya474" value="26500" onchange="hitungTotal79()" checked>
                                            <label for="customCheckbox13c26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13c26" name="biaya474" value="26500" onchange="hitungTotal79()">
                                            <label for="customCheckbox13c26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total79'); ?>
                               
                            </tr>
                            <tr>
                                <td rowspan="2">d.  FARMASI</td>
                                <td>Terapi obat sesuai indikasi</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya475 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d11" name="biaya475" value="26500" onchange="hitungTotal80()" checked>
                                            <label for="customCheckbox13d11" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d11" name="biaya475" value="26500" onchange="hitungTotal80()">
                                            <label for="customCheckbox13d11" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya476 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d12" name="biaya476" value="26500" onchange="hitungTotal80()" checked>
                                            <label for="customCheckbox13d12" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d12" name="biaya476" value="26500" onchange="hitungTotal80()">
                                            <label for="customCheckbox13d12" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya477 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d13" name="biaya477" value="26500" onchange="hitungTotal80()" checked>
                                            <label for="customCheckbox13d13" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d13" name="biaya477" value="26500" onchange="hitungTotal80()">
                                            <label for="customCheckbox13d13" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya478 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d14" name="biaya478" value="26500" onchange="hitungTotal80()" checked>
                                            <label for="customCheckbox13d14" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d14" name="biaya478" value="26500" onchange="hitungTotal80()">
                                            <label for="customCheckbox13d14" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya479 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d15" name="biaya479" value="26500" onchange="hitungTotal80()" checked>
                                            <label for="customCheckbox13d15" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d15" name="biaya479" value="26500" onchange="hitungTotal80()">
                                            <label for="customCheckbox13d15" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya480 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d16" name="biaya480" value="26500" onchange="hitungTotal80()" checked>
                                            <label for="customCheckbox13d16" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d16" name="biaya480" value="26500" onchange="hitungTotal80()">
                                            <label for="customCheckbox13d16" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total80'); ?>
                               
                            </tr>
                            <tr>
                                <td>Obat rasional</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya481 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d21" name="biaya481" value="26500" onchange="hitungTotal81()" checked>
                                            <label for="customCheckbox13d21" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d21" name="biaya481" value="26500" onchange="hitungTotal81()">
                                            <label for="customCheckbox13d21" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya482 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d22" name="biaya482" value="26500" onchange="hitungTotal81()" checked>
                                            <label for="customCheckbox13d22" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d22" name="biaya482" value="26500" onchange="hitungTotal81()">
                                            <label for="customCheckbox13d22" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya483 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d23" name="biaya483" value="26500" onchange="hitungTotal81()" checked>
                                            <label for="customCheckbox13d23" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d23" name="biaya483" value="26500" onchange="hitungTotal81()">
                                            <label for="customCheckbox13d23" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya484 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d24" name="biaya484" value="26500" onchange="hitungTotal81()" checked>
                                            <label for="customCheckbox13d24" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d24" name="biaya484" value="26500" onchange="hitungTotal81()">
                                            <label for="customCheckbox13d24" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya485 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d25" name="biaya485" value="26500" onchange="hitungTotal81()" checked>
                                            <label for="customCheckbox13d25" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d25" name="biaya485" value="26500" onchange="hitungTotal81()">
                                            <label for="customCheckbox13d25" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya486 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d26" name="biaya486" value="26500" onchange="hitungTotal81()" checked>
                                            <label for="customCheckbox13d26" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox13d26" name="biaya486" value="26500" onchange="hitungTotal81()">
                                            <label for="customCheckbox13d26" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total81'); ?>
                                
                            </tr>

                            <!-- nomor 14 -->
                            <tr>
                                <td rowspan="3">14</td>
                                <td rowspan="3">KRITERIA PULANG</td>
                                <td>Tanda vital normal</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya487 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14111" name="biaya487" value="26500" onchange="hitungTotal82()" checked>
                                            <label for="customCheckbox14111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14111" name="biaya487" value="26500" onchange="hitungTotal82()">
                                            <label for="customCheckbox14111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya488 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14112" name="biaya488" value="26500" onchange="hitungTotal82()" checked>
                                            <label for="customCheckbox14112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14112" name="biaya488" value="26500" onchange="hitungTotal82()">
                                            <label for="customCheckbox14112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya489 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14113" name="biaya489" value="26500" onchange="hitungTotal82()" checked>
                                            <label for="customCheckbox14113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14113" name="biaya489" value="26500" onchange="hitungTotal82()">
                                            <label for="customCheckbox14113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya490 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14114" name="biaya490" value="26500" onchange="hitungTotal82()" checked>
                                            <label for="customCheckbox14114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14114" name="biaya490" value="26500" onchange="hitungTotal82()">
                                            <label for="customCheckbox14114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya491 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14115" name="biaya491" value="26500" onchange="hitungTotal82()" checked>
                                            <label for="customCheckbox14115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14115" name="biaya491" value="26500" onchange="hitungTotal82()">
                                            <label for="customCheckbox14115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya492 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14116" name="biaya492" value="26500" onchange="hitungTotal82()" checked>
                                            <label for="customCheckbox14116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14116" name="biaya492" value="26500" onchange="hitungTotal82()">
                                            <label for="customCheckbox14116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total82'); ?>
                                
                            </tr>
                            <tr>
                                <td>Sesuai NOC</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya493 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14121" name="biaya493" value="26500" onchange="hitungTotal83()" checked>
                                            <label for="customCheckbox14121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14121" name="biaya493" value="26500" onchange="hitungTotal83()">
                                            <label for="customCheckbox14121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya494 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14122" name="biaya494" value="26500" onchange="hitungTotal83()" checked>
                                            <label for="customCheckbox14122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14122" name="biaya494" value="26500" onchange="hitungTotal83()">
                                            <label for="customCheckbox14122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya495 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14123" name="biaya495" value="26500" onchange="hitungTotal83()" checked>
                                            <label for="customCheckbox14123" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14123" name="biaya495" value="26500" onchange="hitungTotal83()">
                                            <label for="customCheckbox14123" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya496 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14124" name="biaya496" value="26500" onchange="hitungTotal83()" checked>
                                            <label for="customCheckbox14124" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14124" name="biaya496" value="26500" onchange="hitungTotal83()">
                                            <label for="customCheckbox14124" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya497 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14125" name="biaya497" value="26500" onchange="hitungTotal83()" checked>
                                            <label for="customCheckbox14125" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14125" name="biaya497" value="26500" onchange="hitungTotal83()">
                                            <label for="customCheckbox14125" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya498 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14126" name="biaya498" value="26500" onchange="hitungTotal83()" checked>
                                            <label for="customCheckbox14126" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14126" name="biaya498" value="26500" onchange="hitungTotal83()">
                                            <label for="customCheckbox14126" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total83'); ?>
                               
                            </tr>
                            <tr>
                                <td></td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya499 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14131" name="biaya499" value="0" onchange="hitungTotal84()" checked>
                                            <label for="customCheckbox14131" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14131" name="biaya499" value="0" onchange="hitungTotal84()">
                                            <label for="customCheckbox14131" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya500 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14132" name="biaya500" value="0" onchange="hitungTotal84()" checked>
                                            <label for="customCheckbox14132" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14132" name="biaya500" value="0" onchange="hitungTotal84()">
                                            <label for="customCheckbox14132" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya501 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14133" name="biaya501" value="0" onchange="hitungTotal84()" checked>
                                            <label for="customCheckbox14133" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14133" name="biaya501" value="0" onchange="hitungTotal84()">
                                            <label for="customCheckbox14133" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya502 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14134" name="biaya502" value="0" onchange="hitungTotal84()" checked>
                                            <label for="customCheckbox14134" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14134" name="biaya502" value="0" onchange="hitungTotal84()">
                                            <label for="customCheckbox14134" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya503 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14135" name="biaya503" value="0" onchange="hitungTotal84()" checked>
                                            <label for="customCheckbox14135" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14135" name="biaya503" value="0" onchange="hitungTotal84()">
                                            <label for="customCheckbox14135" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya504 == 1) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14136" name="biaya504" value="0" onchange="hitungTotal84()" checked>
                                            <label for="customCheckbox14136" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox14136" name="biaya504" value="0" onchange="hitungTotal84()">
                                            <label for="customCheckbox14136" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total84'); ?>
                               
                            </tr>

                            <!-- nomor 15 -->
                            <tr>
                                <td rowspan="3">15</td>
                                <td rowspan="3">RENCANA PULANG/<br> EDUKASI PELAYANAN LANJUTAN</td>
                                <td>Resume medis dan Keperawatan</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya505 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15111" name="biaya505" value="26500" onchange="hitungTotal85()" checked>
                                            <label for="customCheckbox15111" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15111" name="biaya505" value="26500" onchange="hitungTotal85()">
                                            <label for="customCheckbox15111" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya506 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15112" name="biaya506" value="26500" onchange="hitungTotal85()" checked>
                                            <label for="customCheckbox15112" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15112" name="biaya506" value="26500" onchange="hitungTotal85()">
                                            <label for="customCheckbox15112" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya507 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15113" name="biaya507" value="26500" onchange="hitungTotal85()" checked>
                                            <label for="customCheckbox15113" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15113" name="biaya507" value="26500" onchange="hitungTotal85()">
                                            <label for="customCheckbox15113" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya508 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15114" name="biaya508" value="26500" onchange="hitungTotal85()" checked>
                                            <label for="customCheckbox15114" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15114" name="biaya508" value="26500" onchange="hitungTotal85()">
                                            <label for="customCheckbox15114" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya509 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15115" name="biaya509" value="26500" onchange="hitungTotal85()" checked>
                                            <label for="customCheckbox15115" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15115" name="biaya509" value="26500" onchange="hitungTotal85()">
                                            <label for="customCheckbox15115" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya510 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15116" name="biaya510" value="26500" onchange="hitungTotal85()" checked>
                                            <label for="customCheckbox15116" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15116" name="biaya510" value="26500" onchange="hitungTotal85()">
                                            <label for="customCheckbox15116" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total85'); ?>
                               
                            </tr>
                            <tr>
                                <td>Penjelasan diberikan sesuai <br>dengan keadaan umum pasien</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya511 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15121" name="biaya511" value="26500" onchange="hitungTotal86()" checked>
                                            <label for="customCheckbox15121" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15121" name="biaya511" value="26500" onchange="hitungTotal86()">
                                            <label for="customCheckbox15121" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya512 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15122" name="biaya512" value="26500" onchange="hitungTotal86()" checked>
                                            <label for="customCheckbox15122" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15122" name="biaya512" value="26500" onchange="hitungTotal86()">
                                            <label for="customCheckbox15122" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya513 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15123" name="biaya513" value="26500" onchange="hitungTotal86()" checked>
                                            <label for="customCheckbox15123" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15123" name="biaya513" value="26500" onchange="hitungTotal86()">
                                            <label for="customCheckbox15123" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya514 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15124" name="biaya514" value="26500" onchange="hitungTotal86()" checked>
                                            <label for="customCheckbox15124" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15124" name="biaya514" value="26500" onchange="hitungTotal86()">
                                            <label for="customCheckbox15124" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya515 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15125" name="biaya515" value="26500" onchange="hitungTotal86()" checked>
                                            <label for="customCheckbox15125" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15125" name="biaya515" value="26500" onchange="hitungTotal86()">
                                            <label for="customCheckbox15125" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya516 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15126" name="biaya516" value="26500" onchange="hitungTotal86()" checked>
                                            <label for="customCheckbox15126" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15126" name="biaya516" value="26500" onchange="hitungTotal86()">
                                            <label for="customCheckbox15126" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total86'); ?>
                                
                            </tr>
                            <tr>
                                <td>Surat pengantar kontrol</td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya517 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15131" name="biaya517" value="26500" onchange="hitungTotal87()" checked>
                                            <label for="customCheckbox15131" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15131" name="biaya517" value="26500" onchange="hitungTotal87()">
                                            <label for="customCheckbox15131" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya518 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15132" name="biaya518" value="26500" onchange="hitungTotal87()" checked>
                                            <label for="customCheckbox15132" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15132" name="biaya518" value="26500" onchange="hitungTotal87()">
                                            <label for="customCheckbox15132" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya519 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15133" name="biaya519" value="26500" onchange="hitungTotal87()" checked>
                                            <label for="customCheckbox15133" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15133" name="biaya519" value="26500" onchange="hitungTotal87()">
                                            <label for="customCheckbox15133" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya520 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15134" name="biaya520" value="26500" onchange="hitungTotal87()" checked>
                                            <label for="customCheckbox15134" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15134" name="biaya520" value="26500" onchange="hitungTotal87()">
                                            <label for="customCheckbox15134" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya521 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15135" name="biaya521" value="26500" onchange="hitungTotal87()" checked>
                                            <label for="customCheckbox15135" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15135" name="biaya521" value="26500" onchange="hitungTotal87()">
                                            <label for="customCheckbox15135" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($biaya522 == 26500) { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15136" name="biaya522" value="26500" onchange="hitungTotal87()" checked>
                                            <label for="customCheckbox15136" class="custom-control-label"></label>
                                        <?php } else { ?>
                                            <input class="form-check-input" type="checkbox" id="customCheckbox15136" name="biaya522" value="26500" onchange="hitungTotal87()">
                                            <label for="customCheckbox15136" class="custom-control-label"></label>
                                        <?php
                                        } ?>
                                    </div>
                                </td>
                                <!-- <td> -</td> -->
                                <?php echo view('total/total87'); ?>
                               
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
        <!-- </div> -->

        </form>
        </div>
    
        <!-- /.card-body -->
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
        nilaisel1 = 3506300;
        break;
    case 'Hipertensi Esensial (I10)':
        nilaisel1 = 2036300;
        break;
    case 'HIV (B24)':
        nilaisel1 = 3458200;
        break;
    case 'Tuberculosis (A15.2)':
        nilaisel1 = 4210700;
        break;
    case 'Henti Jantung, Cardiac Arrest (I46)':
        nilaisel1 = 2838300;
        break;
    case 'Kejang Demam (R56.0)':
        nilaisel1 = 2658600;
        break;
    case 'Perdarahan Post Partum (O72)':
        nilaisel1 = 1821500;
        break;
    case 'Pre Eklampsia (014.9)':
        nilaisel1 = 2106300;
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
            case 'diabetes':
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


