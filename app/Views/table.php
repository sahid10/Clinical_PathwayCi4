<h6 class="card-title">Data Pasien</h6>
<table id="dataTableExample" class="table">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>NOMR</th>
            <th>Masuk RS</th>
            <th>Ruangan</th>
            <th>Kelas BPJS</th>
            <th>Dxutama</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?php echo $row['nama_pasien']; ?></td>
                <td><?php echo $row['NOMR']; ?></td>
                <td><?php echo $row['masuk_rs']; ?></td>
                <td><?php echo $row['ruangan']; ?></td>
                <td><?php echo $row['kelas_bpjs']; ?></td>
                <td><?php echo $row['dxutama']; ?></td>
                <td>
                    <div class="text-center">
                        <a href="<?php
                                    if ($row['kelas_bpjs'] == 'Kelas 1') {
                                        echo site_url('#') . 'detailpasien1?nomr=' . $row['NOMR'];
                                    } elseif ($row['kelas_bpjs'] == 'Kelas 2') {
                                        echo site_url('#') . 'detailpasien2?nomr=' . $row['NOMR'];
                                    } elseif ($row['kelas_bpjs'] == 'Kelas 3') {
                                        echo site_url('#') . 'detailpasien3?nomr=' . $row['NOMR'];
                                    }
                                    ?>">
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="btn-icon-prepend" data-feather="search"></i>
                                Detail
                            </button>
                        </a>

                        <a a href="<?= base_url('pasien/delete/' . $row['id']); ?>">
                            <button type="button" class="btn btn-danger btn-icon-text">
                                <i class="btn-icon-prepend" data-feather="delete"></i>
                                Hapus
                            </button>
                    </div>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>