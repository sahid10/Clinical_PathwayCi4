<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('tambahpasien/store'); ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_pasien" class="form-label">Nama Pasien</label>
                            <input required type="text" class="form-control" id="nama_pasien" name="nama_pasien" autocomplete="off" placeholder="Masukan Nama Pasien">
                        </div>

                        <div class="mb-3">
                            <label for="nomr">Nomor Rekam Medis</label>
                            <input required type="text" class="form-control" id="nomr" name="nomr" placeholder="Masukan No. RM">
                        </div>

                        <div class="form-group">
                            <h6 class="card-title">Tanggal Masuk</h6>
                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                <input required type="date" class="form-control datetimepicker-input" name="masuk_rs" data-target="#reservationdatetime" />
                                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                    <!-- <div class="input-group-text"><i class="fa fa-calendar"></i></div> -->
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ruangan</label>
                            <select class="form-select mb-3" name="ruangan">
                                <option selected>Open this select menu</option>
                                <option>Camar Atas</option>
                                <option>Camar Bawah</option>
                                <option>Cendrawasih Atas</option>
                                <option>Cendrawasih Bawah</option>
                                <option>ICU</option>
                                <option>Instalasi Gawat Darurat</option>
                                <option>Kenari Atas</option>
                                <option>kenari Bawah</option>
                                <option>Kapodang Atas</option>
                                <option>Kapodang Bawah</option>
                                <option>Nuri</option>
                                <option>Perinatologi</option>
                                <option>VK</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kelas BPJS</label>
                            <select class="form-select mb-3" name="kelas_bpjs">
                                <option selected>Open this select menu</option>
                                <option>Kelas 1</option>
                                <option>Kelas 2</option>
                                <option>Kelas 3</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">DX Utama</label>
                            <select class="form-select mb-3" name="dxutama">
                                <option selected>Open this select menu</option>
                                <option>cerebral infarction (i63.9)</option>
                                <option>intracerebral haemorrhage(I61.9)</option>
                                <option>Diabetes Melitus Tipe 2 (E11.9)</option>
                                <option>Hipertensi Esensial (I10)</option>
                                <option>HIV (B24)</option>
                                <option>Tuberculosis (A15.2)</option>
                                <option>Henti Jantung, Cardiac Arrest (I46)</option>
                                <option>Kejang Demam (R56.0)</option>
                                <option>Perdarahan Post Partum (O72)</option>
                                <option>Pre Eklampsia (014.9)</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>