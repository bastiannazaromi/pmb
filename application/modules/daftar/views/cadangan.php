<div class="panel panel-default">
    <div class="panel-heading field-label">E. Persyaratan Pendaftaran</div>
    <div class="panel-body">
        <div class="form-portlet donation-form-outer" style="background-color: white;">
            <div class="row clearfix">

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                    <div class="field-label">Scan Ijasah / Raport SLTA / Sederjat
                        <span class="required">*</span>
                    </div>
                    <input type="file" class="form-control" required name="ijasah">
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                    <div class="field-label">Scan Nilai Ujian Nasional
                        <span class="required">*</span>
                    </div>
                    <input type="file" class="form-control" required name="nilai_un">
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                    <div class="field-label">Scan Akta Kelahiran
                        <span class="required">*</span>
                    </div>
                    <input type="file" class="form-control" required name="akta">
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                    <div class="field-label">Scan KTP
                        <span class="required">*</span>
                    </div>
                    <input type="file" class="form-control" required name="ijasah">
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                    <div class="field-label">Scan Foto Berwarna (3x4)
                        <span class="required">*</span>
                    </div>
                    <input type="file" class="form-control" required name="foto">
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Data orang tua -->

<div class="panel panel-default">
    <div class="panel-heading field-label">D. Kebutuhan Khusus</div>
    <div class="panel-body">
        <div class="form-portlet donation-form-outer" style="background-color: white;">
            <div class="row clearfix">

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="causes sm-col5-center" style="border-radius: 10px; border-width: 3px">

                            <div class="causes-details clearfix">
                                <label class="field-label text-center">Ayah</label>
                                <div class="form-group field-label">
                                    <?php foreach ($keb_khusus as $hasil) : ?>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="<?= $hasil['id'] ; ?>"
                                                class="<?= $hasil['nama_kebutuhan'] == 'Tidak Ada' ? 'check_tidak_ada' : 'check_ada_1'; ?>"
                                                <?= $hasil['nama_kebutuhan'] == 'Tidak Ada' ? 'checked' : ''; ?>><?= $hasil['nama_kebutuhan'] ; ?></label>
                                    </div>
                                    <?php endforeach ; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="causes sm-col5-center" style="border-radius: 10px; border-width: 3px">

                            <div class="causes-details clearfix">
                                <label class="field-label text-center">Ibu</label>
                                <div class="form-group field-label">
                                    <?php foreach ($keb_khusus as $hasil) : ?>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="<?= $hasil['id'] ; ?>"
                                                class="<?= $hasil['nama_kebutuhan'] == 'Tidak Ada' ? 'check_tidak_ada' : 'check_ada_2'; ?>"
                                                <?= $hasil['nama_kebutuhan'] == 'Tidak Ada' ? 'checked' : ''; ?>><?= $hasil['nama_kebutuhan'] ; ?></label>
                                    </div>
                                    <?php endforeach ; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="causes sm-col5-center" style="border-radius: 10px; border-width: 3px">

                            <div class="causes-details clearfix">
                                <label class="field-label text-center">Wali</label>
                                <div class="form-group field-label">
                                    <?php foreach ($keb_khusus as $hasil) : ?>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="<?= $hasil['id'] ; ?>"
                                                class="<?= $hasil['nama_kebutuhan'] == 'Tidak Ada' ? 'check_tidak_ada' : 'check_ada_3'; ?>"
                                                <?= $hasil['nama_kebutuhan'] == 'Tidak Ada' ? 'checked' : ''; ?>><?= $hasil['nama_kebutuhan'] ; ?></label>
                                    </div>
                                    <?php endforeach ; ?>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading field-label">C. Biodata Orang Tua</div>
    <div class="panel-body">
        <div class="form-portlet donation-form-outer" style="background-color: white;">
            <div class="row clearfix">

                <div class="row">

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="causes sm-col5-center" style="border-radius: 10px; border-width: 3px">

                            <div class="causes-details clearfix">
                                <label class="field-label text-center">Ayah</label>
                                <div class="form-group">
                                    <label class="field-label">Nama <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" required placeholder="Nama"
                                        name="nama_ayah">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Tempat Lahir <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" required placeholder="Tempat lahir"
                                        name="tempat_ayah">
                                </div>

                                <div class="form-group">
                                    <label class="field-label">Tanggal Lahir <span class="required">*</span>
                                    </label>
                                    <input type="date" class="form-control" required placeholder="Tanggal lahir"
                                        name="tgl_lahir_ayah">
                                </div>

                                <div class="form-group">
                                    <label class="field-label">Pendidikan Terakhir <span class="required">*</span>
                                    </label>
                                    <select class="form-control" name="pd_akhir_ayah">
                                        <option value="">-- Pendidikan Terakhir --</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Pekerjaan <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" required placeholder="Pekerjaan"
                                        name="pekerjaan_ayah">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Penghasilan <span class="required">*</span>
                                    </label>
                                    <select class="form-control" name="penghasilan_ayah">
                                        <option value="">-- Penghasilan --</option>
                                        <?php foreach ($penghasilan as $hasil) : ?>
                                        <option value="<?= $hasil['id'] ; ?>">
                                            <?= $hasil['penghasilan'] ; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="causes sm-col5-center" style="border-radius: 10px; border-width: 3px">

                            <div class="causes-details clearfix">
                                <label class="field-label text-center">Ibu</label>
                                <div class="form-group">
                                    <label class="field-label">Nama <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" required placeholder="Nama" name="nama_ibu">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Tempat Lahir <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" required placeholder="Tempat lahir"
                                        name="tempat_ibu">
                                </div>

                                <div class="form-group">
                                    <label class="field-label">Tanggal Lahir <span class="required">*</span>
                                    </label>
                                    <input type="date" class="form-control" required placeholder="Tanggal lahir"
                                        name="tgl_lahir_ibu">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Pendidikan Terakhir <span class="required">*</span>
                                    </label>
                                    <select class="form-control" name="pd_akhir_ibu">
                                        <option>-- Pendidikan Terakhir --</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Pekerjaan <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" required placeholder="Pekerjaan"
                                        name="pekerjaan_ibu">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Penghasilan <span class="required">*</span>
                                    </label>
                                    <select class="form-control" name="penghasilan_ibu">
                                        <option value="">-- Penghasilan --</option>
                                        <?php foreach ($penghasilan as $hasil) : ?>
                                        <option value="<?= $hasil['id'] ; ?>">
                                            <?= $hasil['penghasilan'] ; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="causes sm-col5-center" style="border-radius: 10px; border-width: 3px">

                            <div class="causes-details clearfix">
                                <label class="field-label text-center">Wali</label>
                                <div class="form-group">
                                    <label class="field-label">Nama
                                    </label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama_wali">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Tempat Lahir
                                    </label>
                                    <input type="text" class="form-control" placeholder="Tempat lahir"
                                        name="tempat_wali">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Tanggal Lahir
                                    </label>
                                    <input type="date" placeholder="Tanggal lahir" name="tgl_lahir_wali">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Pendidikan Terakhir
                                    </label>
                                    <select class="form-control" name="pd_akhir_wali">
                                        <option>-- Pendidikan Terakhir --</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Pekerjaan <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Pekerjaan"
                                        name="pekerjaan_wali">
                                </div>
                                <div class="form-group">
                                    <label class="field-label">Penghasilan <span class="required">*</span>
                                    </label>
                                    <select class="form-control" name="penghasilan_wali">
                                        <option value="">-- Penghasilan --</option>
                                        <?php foreach ($penghasilan as $hasil) : ?>
                                        <option value="<?= $hasil['id'] ; ?>">
                                            <?= $hasil['penghasilan'] ; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>