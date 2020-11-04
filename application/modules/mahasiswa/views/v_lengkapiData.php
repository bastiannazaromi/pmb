<div id="page-wrapper">
    <!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title"><?= $content ; ?></div>
        </div>
        <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="<?= base_url('dashboard') ; ?>">Dashboard</a></li>
        </ol>

        <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->

    <div class="page-content">
        <div id="form-layouts" class="row">

            <div class="col-lg-12">

                <div style="background: transparent; border: 0; box-shadow: none !important"
                    class="tab-content pan mtl mbn responsive">
                    <div id="tab-form-actions" class="tab-pane fade active in">
                        <div class="row">
                            <form action="<?= base_url('dashboard/lengkapi_data/simpan'); ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="col-lg-12 form-horizontal">
                                    <div class="panel panel-blue">
                                        <div class="panel-heading">Data Calon Mahasiswa</div>
                                        <div class="panel-body pan">
                                            <div class="form-body pal">

                                                <input type="hidden"
                                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                                    value="<?php echo $this->security->get_csrf_hash(); ?>"
                                                    id="csrf_token">

                                                <div class="form-group"><label for="no_daftar"
                                                        class="col-md-3 control-label">Nomor
                                                        Pendaftaran
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="no_daftar" type="text" name="no_daftar"
                                                            placeholder="No. Pendaftaran" readonly required
                                                            class="form-control" value="<?= $this->virtualAkun ; ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group"><label for="nama"
                                                        class="col-md-3 control-label">Nama Calon Mahasiswa
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="nama" type="text" name="nama" required
                                                            placeholder="Nama Lengkap" class="form-control"
                                                            value="<?= $mahasiswa->nama ; ?>"
                                                            style="text-transform:uppercase" />
                                                    </div>
                                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="nik"
                                                        class="col-md-3 control-label">Nomor
                                                        KTP
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="nik" type="text" maxlength="16" name="nik"
                                                            placeholder="NIK" required class="form-control"
                                                            value="<?= $mahasiswa->nik ; ?>" />
                                                    </div>
                                                    <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tempat"
                                                        class="col-md-3 control-label">Tempat Lahir
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="tempat" name="tempat" type="text"
                                                            placeholder="Tempat Lahir" required class="form-control"
                                                            value="<?= $mahasiswa->tempat_lahir ; ?>"
                                                            style="text-transform:uppercase" />
                                                    </div>
                                                    <?= form_error('tempat', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tgl_lahir"
                                                        class="col-md-3 control-label">Tanggal Lahir
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="tgl_lahir" name="tgl_lahir" required type="date"
                                                            class="form-control"
                                                            value="<?= $mahasiswa->tgl_lahir ; ?>" />
                                                    </div>
                                                    <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="agama"
                                                        class="col-md-3 control-label">Agama
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" id="agama" name="agama">
                                                            <option value="">-- Pilih Agama --</option>
                                                            <option value="ISLAM"
                                                                <?= $mahasiswa->agama == 'ISLAM' ? 'selected="selected"' : ''; ?>>
                                                                ISLAM</option>
                                                            <option value="KRISTEN PROTESTAN"
                                                                <?= $mahasiswa->agama == 'KRISTEN PROTESTAN' ? 'selected="selected"' : ''; ?>>
                                                                KRISTEN PROTESTAN</option>
                                                            <option value="KRISTEN KATOLIK"
                                                                <?= $mahasiswa->agama == 'KRISTEN KATOLIK' ? 'selected="selected"' : ''; ?>>
                                                                KRISTEN KATOLIK</option>
                                                            <option value="HINDU"
                                                                <?= $mahasiswa->agama == 'HINDU' ? 'selected="selected"' : ''; ?>>
                                                                HINDU</option>
                                                            <option value="BUDDHA"
                                                                <?= $mahasiswa->agama == 'BUDDHA' ? 'selected="selected"' : ''; ?>>
                                                                BUDDHA</option>
                                                            <option value="KONGHUCHU"
                                                                <?= $mahasiswa->agama == 'KONGHUCHU' ? 'selected="selected"' : ''; ?>>
                                                                KONGHUCHU </option>
                                                        </select>
                                                    </div>
                                                    <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="jk"
                                                        class="col-md-3 control-label">Jenis
                                                        Kelamin
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="jk" name="jk">
                                                            <option value="">-- Pilih Jenis Kelamin --</option>
                                                            <option value="<?= enkrip('L') ; ?>"
                                                                <?= $mahasiswa->jk == 'L' ? 'selected="selected"' : ''; ?>>
                                                                Laki - laki</option>
                                                            <option value="<?= enkrip('P') ; ?>"
                                                                <?= $mahasiswa->jk == 'P' ? 'selected="selected"' : ''; ?>>
                                                                Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="status"
                                                        class="col-md-3 control-label">Status
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="">-- Pilih Status --</option>
                                                            <option value="LAJANG"
                                                                <?= $mahasiswa->status == 'LAJANG' ? 'selected="selected"' : ''; ?>>
                                                                LAJANG</option>
                                                            <option value="MENIKAH"
                                                                <?= $mahasiswa->status == 'MENIKAH' ? 'selected="selected"' : ''; ?>>
                                                                MENIKAH</option>
                                                        </select>
                                                    </div>
                                                    <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tempat_tinggal"
                                                        class="col-md-3 control-label">Tempat Tinggal
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="tempat_tinggal"
                                                            name="tempat_tinggal">
                                                            <option value="">-- Pilih Tempat Tinggal --</option>
                                                            <option value="Bersama Orang Tua"
                                                                <?= $mahasiswa->tempat_tinggal == 'Bersama Orang Tua' ? 'selected="selected"' : ''; ?>>
                                                                Bersama Orang Tua</option>
                                                            <option value="Wali"
                                                                <?= $mahasiswa->tempat_tinggal == 'Wali' ? 'selected="selected"' : ''; ?>>
                                                                Wali</option>
                                                            <option value="Kost"
                                                                <?= $mahasiswa->tempat_tinggal == 'Kost' ? 'selected="selected"' : ''; ?>>
                                                                Kost</option>
                                                            <option value="Asrama"
                                                                <?= $mahasiswa->tempat_tinggal == 'Asrama' ? 'selected="selected"' : ''; ?>>
                                                                Asrama</option>
                                                            <option value="Panti Asuhan"
                                                                <?= $mahasiswa->tempat_tinggal == 'Panti Asuhan' ? 'selected="selected"' : ''; ?>>
                                                                Panti Asuhan</option>
                                                        </select>
                                                    </div>
                                                    <?= form_error('tempat_tinggal', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="no_hp"
                                                        class="col-md-3 control-label">No
                                                        HP / WhatsApp
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="no_hp" type="number" required name="no_hp"
                                                            class="form-control" value="<?= $mahasiswa->no_hp ; ?>" />
                                                    </div>
                                                    <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="email"
                                                        class="col-md-3 control-label">Email
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" required name="email"
                                                            placeholder="Email" class="form-control"
                                                            value="<?= $mahasiswa->email ; ?>" />
                                                    </div>
                                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label class="col-md-3 control-label">Penerima
                                                        KPS
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <div class="col-lg-3">
                                                            <div class="radio mtx">
                                                                <label><input type="radio" name="kps" value="Ya"
                                                                        <?= $mahasiswa->kps == 'Ya' ? 'checked' : ''; ?> />
                                                                    Ya</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="radio mtx">
                                                                <label><input type="radio" name="kps" value="Tidak"
                                                                        <?= $mahasiswa->kps == 'Tidak' ? 'checked' : ''; ?> />
                                                                    Tidak</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?= form_error('kps', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="alamat"
                                                        class="col-md-3 control-label">Alamat <span
                                                            class='require'>*</span></label>

                                                    <div class="col-md-6"><textarea id="alamat" required name="alamat"
                                                            rows="3"
                                                            class="form-control"><?= $mahasiswa->alamat ; ?></textarea>
                                                    </div>
                                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="keb_khusus_mhs"
                                                        class="col-md-3 control-label">Kebutuhan Khusus
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" style="height: 300px;"
                                                            multiple="multiple" name="keb_khusus_mhs[]">
                                                            <option value="" disabled>Pilih Satu Atau Lebih (Tekan
                                                                Ctrl), Bila tida ada kebutuhan pilih (X)</option>
                                                            <?php foreach ($keb_khusus as $hasil) : ?>
                                                            <option value="<?= enkrip($hasil->id) ; ?>"
                                                                <?= in_array($hasil->id, $keb_mhs) ? 'selected="selected"' : '' ; ?>>
                                                                <?= $hasil->nama ; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <?= form_error('keb_khusus_mhs[]', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-horizontal">
                                    <div class="panel panel-blue">
                                        <div class="panel-heading">Data Asal Sekolah</div>
                                        <div class="panel-body pan">
                                            <div class="form-body pal">
                                                <div class="form-group"><label for="provinsi"
                                                        class="col-md-3 control-label">Provinsi
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="provinsi" id="provinsi">
                                                            <option value="">-- Pilih Provinsi --</option>
                                                            <?php foreach($provinsi as $hasil) : ?>
                                                            <option value="<?= enkrip($hasil->id_prov) ; ?>"
                                                                <?= $mahasiswa->provinsi == $hasil->id_prov ? 'selected="selected"' : ''; ?>>
                                                                <?= $hasil->nama ; ?>
                                                            </option>
                                                            <?php endforeach ; ?>
                                                        </select>
                                                    </div>
                                                    <?= form_error('provinsi', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="kab_kota"
                                                        class="col-md-3 control-label">Kabupaten
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="kab_kota" id="kab_kota">
                                                            <option value="<?= enkrip($mahasiswa->kab_kota) ; ?>">
                                                                <?=$mahasiswa->nama_kab ; ?></option>
                                                        </select>
                                                    </div>
                                                    <?= form_error('kab_kota', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="nama_sekolah"
                                                        class="col-md-3 control-label">NPSN Sekolah
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="npsn" type="text" name="npsn"
                                                            placeholder="NPSN Sekolah" required class="form-control"
                                                            value="<?= $mahasiswa->npsn ; ?>" />
                                                    </div>
                                                    <?= form_error('npsn', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="nama_sekolah"
                                                        class="col-md-3 control-label">Nama Sekolah
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="nama_sekolah" type="text" name="nama_sekolah"
                                                            placeholder="Nama Sekolah" required class="form-control"
                                                            value="<?= $mahasiswa->nama_sekolah ; ?>"
                                                            style="text-transform:uppercase" />
                                                    </div>
                                                    <?= form_error('nama_sekolah', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="jurusan"
                                                        class="col-md-3 control-label">Jurusan
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="jurusan" type="text" name="jurusan"
                                                            placeholder="Jurusan" class="form-control"
                                                            value="<?= $mahasiswa->jurusan ; ?>" />
                                                    </div>
                                                    <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tahun_lulus"
                                                        class="col-md-3 control-label">Tahun Lulus
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="tahun_lulus" type="number" name="tahun_lulus"
                                                            placeholder="Tahun lulus" class="form-control"
                                                            value="<?= $mahasiswa->tahun_lulus ; ?>" />
                                                    </div>
                                                    <?= form_error('tahun_lulus', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-horizontal">
                                    <div class="panel panel-blue">
                                        <div class="panel-heading">Berkas Scan PDF</div>
                                        <div class="panel-body pan">
                                            <div class="form-body pal">
                                                <div class="form-group"><label for="ijasah"
                                                        class="col-md-3 control-label">Ijasah / SKHU / SKL
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <input id="ijasah" type="file" name="ijasah"
                                                            class="form-control" />
                                                        <small
                                                            class="text-danger"><?= $this->session->flashdata('ijasah'); ?></small>
                                                    </div>
                                                    <?php if ($berkas->ijasah != null) : ?>
                                                    <a href="<?= base_url('upload/berkasMhs/ijasah/') . ($berkas->ijasah) ?>"
                                                        target="_blank" class="badge badge-success"><i
                                                            class="fa fa-check"></i>
                                                        Cek File</a>
                                                    <?php endif ; ?>
                                                </div>
                                                <div class="form-group"><label for="akta"
                                                        class="col-md-3 control-label">Akta Kelahiran
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <input type="file" id="akta" name="akta" class="form-control" />
                                                        <small
                                                            class="text-danger"><?= $this->session->flashdata('akta'); ?></small>
                                                    </div>
                                                    <?php if ($berkas->akta != null) : ?>
                                                    <a href="<?= base_url('upload/berkasMhs/akta/') . ($berkas->akta) ?>"
                                                        target="_blank" class="badge badge-success"><i
                                                            class="fa fa-check"></i>
                                                        Cek File</a>
                                                    <?php endif ; ?>
                                                </div>
                                                <div class="form-group"><label for="ktp"
                                                        class="col-md-3 control-label">KTP
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <input type="file" id="ktp" name="ktp" class="form-control" />
                                                        <small
                                                            class="text-danger"><?= $this->session->flashdata('ktp'); ?></small>
                                                    </div>
                                                    <?php if ($berkas->ktp != null) : ?>
                                                    <a href="<?= base_url('upload/berkasMhs/ktp/') . ($berkas->ktp) ?>"
                                                        target="_blank" class="badge badge-success"><i
                                                            class="fa fa-check"></i>
                                                        Cek File</a>
                                                    <?php endif ; ?>
                                                </div>
                                                <div class="form-group"><label for="kk"
                                                        class="col-md-3 control-label">Kartu Keluarga
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <input type="file" id="kk" name="kk" class="form-control" />
                                                        <small
                                                            class="text-danger"><?= $this->session->flashdata('kk'); ?></small>
                                                    </div>
                                                    <?php if ($berkas->kk != null) : ?>
                                                    <a href="<?= base_url('upload/berkasMhs/kk/') . ($berkas->kk) ?>"
                                                        target="_blank" class="badge badge-success"><i
                                                            class="fa fa-check"></i>
                                                        Cek File</a>
                                                    <?php endif ; ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-horizontal">
                                    <div class="panel panel-blue">
                                        <div class="panel-heading">Program Studi</div>
                                        <div class="panel-body pan">
                                            <div class="form-body pal">
                                                <div class="form-group"><label for="prodi"
                                                        class="col-md-3 control-label">Prodi
                                                        <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="prodi" id="prodi">
                                                            <option value="">-- Pilih Prodi --</option>
                                                            <?php foreach($prodi as $hasil) : ?>
                                                            <option value="<?= enkrip($hasil->kd_prodi) ; ?>"
                                                                <?= $mahasiswa->prodi == $hasil->kd_prodi ? 'selected="selected"' : ''; ?>>
                                                                <?= $hasil->nama ; ?>
                                                            </option>
                                                            <?php endforeach ; ?>
                                                        </select>
                                                    </div>
                                                    <?= form_error('prodi', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label class="col-md-3 control-label">Kelas
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-9">
                                                        <div class="col-lg-3">
                                                            <div class="radio mtx">
                                                                <label><input type="radio" name="kelas"
                                                                        value="<?= enkrip('1') ; ?>"
                                                                        <?= $mahasiswa->kelas == '1' ? 'checked' : ''; ?> />
                                                                    Regular ( Pagi )</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="radio mtx">
                                                                <label><input type="radio" name="kelas"
                                                                        value="<?= enkrip('2') ; ?>"
                                                                        <?= $mahasiswa->kelas == '2' ? 'checked' : ''; ?> />
                                                                    Regular ( Malam )</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="radio mtx">
                                                                <label><input type="radio" name="kelas"
                                                                        value="<?= enkrip('3') ; ?>"
                                                                        <?= $mahasiswa->kelas == '3' ? 'checked' : ''; ?> />
                                                                    Konversi</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-horizontal">
                                    <div class="panel panel-blue">
                                        <div class="panel-heading">Data Ibu</div>
                                        <div class="panel-body pan">
                                            <div class="form-body pal">
                                                <div class="form-group"><label for="nama_ibu"
                                                        class="col-md-3 control-label">Nama Ibu
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="nama_ibu" name="nama_ibu" type="text"
                                                            placeholder="Nama Lengkap" required class="form-control"
                                                            value="<?= $mahasiswa->nama_ibu ; ?>"
                                                            style="text-transform:uppercase" />
                                                    </div>
                                                    <?= form_error('nama_ibu', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tempat_ibu"
                                                        class="col-md-3 control-label">Tempat Lahir
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="tempat_ibu" name="tempat_ibu" type="text"
                                                            placeholder="Tempat Lahir" required class="form-control"
                                                            value="<?= $mahasiswa->tempat_ibu ; ?>"
                                                            style="text-transform:uppercase" />
                                                    </div>
                                                    <?= form_error('tempat_ibu', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tgl_lahir_ibu"
                                                        class="col-md-3 control-label">Tanggal Lahir
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="tgl_lahir_ibu" name="tgl_lahir_ibu" required
                                                            type="date" value="<?= $mahasiswa->tgl_lahir_ibu ; ?>"
                                                            class="form-control" />
                                                    </div>
                                                    <?= form_error('tgl_lahir_ibu', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="pekerjaan_ibu"
                                                        class="col-md-3 control-label">Pekerjaan
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="pekerjaan_ibu" name="pekerjaan_ibu" type="text"
                                                            placeholder="Pekerjaan" required class="form-control"
                                                            value="<?= $mahasiswa->pekerjaan_ibu ; ?>" />
                                                    </div>
                                                    <?= form_error('pekerjaan_ibu', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="pendidikan_ibu"
                                                        class="col-md-3 control-label">Pendidikan Terakhir
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" name="pendidikan_ibu">
                                                            <option>-- Pendidikan Terakhir --</option>
                                                            <option value="SD"
                                                                <?= $mahasiswa->pendidikan_ibu == "SD" ? 'selected="selected"' : ''; ?>>
                                                                SD</option>
                                                            <option value="SMP"
                                                                <?= $mahasiswa->pendidikan_ibu == "SMP" ? 'selected="selected"' : ''; ?>>
                                                                SMP</option>
                                                            <option value="SMA"
                                                                <?= $mahasiswa->pendidikan_ibu == "SMA" ? 'selected="selected"' : ''; ?>>
                                                                SMA</option>
                                                            <option value="D3"
                                                                <?= $mahasiswa->pendidikan_ibu == "D3" ? 'selected="selected"' : ''; ?>>
                                                                D3</option>
                                                            <option value="S1"
                                                                <?= $mahasiswa->pendidikan_ibu == "S1" ? 'selected="selected"' : ''; ?>>
                                                                S1</option>
                                                            <option value="S2"
                                                                <?= $mahasiswa->pendidikan_ibu == "S2" ? 'selected="selected"' : ''; ?>>
                                                                S2</option>
                                                        </select>
                                                    </div>
                                                    <?= form_error('pendidikan_ibu', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="penghasilan_ibu"
                                                        class="col-md-3 control-label">Penghasilan
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" name="penghasilan_ibu">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <?php foreach ($penghasilan as $hasil) : ?>
                                                            <option value="<?= enkrip($hasil->id) ; ?>"
                                                                <?= $mahasiswa->penghasilan_ibu == $hasil->id ? 'selected="selected"' : ''; ?>>
                                                                <?= $hasil->penghasilan ; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <?= form_error('penghasilan_ibu', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="keb_khusus_ibu"
                                                        class="col-md-3 control-label">Kebutuhan Khusus
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" style="height: 300px;"
                                                            multiple="multiple" name="keb_khusus_ibu[]">
                                                            <option value="" disabled>Pilih Satu Atau Lebih (Tekan
                                                                Ctrl), Bila tida ada kebutuhan pilih (X)</option>
                                                            <?php foreach ($keb_khusus as $hasil) : ?>
                                                            <option value="<?= enkrip($hasil->id) ; ?>"
                                                                <?= in_array($hasil->id, $keb_ibu) ? 'selected="selected"' : '' ; ?>>
                                                                <?= $hasil->nama ; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <?= form_error('keb_khusus_ibu[]', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 form-horizontal">
                                    <div class="panel panel-blue">
                                        <div class="panel-heading">Data Ayah</div>
                                        <div class="panel-body pan">
                                            <div class="form-body pal">
                                                <div class="form-group"><label for="nama_ayah"
                                                        class="col-md-3 control-label">Nama Ayah
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="nama_ayah" name="nama_ayah" type="text"
                                                            placeholder="Nama Lengkap" required class="form-control"
                                                            value="<?= $mahasiswa->nama_ayah ; ?>"
                                                            style="text-transform:uppercase" />
                                                    </div>
                                                    <?= form_error('nama_ayah', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tempat_ayah"
                                                        class="col-md-3 control-label">Tempat Lahir
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="tempat_ayah" name="tempat_ayah" type="text"
                                                            placeholder="Tempat Lahir" required class="form-control"
                                                            value="<?= $mahasiswa->tempat_ayah ; ?>"
                                                            style="text-transform:uppercase" />
                                                    </div>
                                                    <?= form_error('tempat_ayah', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tgl_lahir_ayah"
                                                        class="col-md-3 control-label">Tanggal Lahir
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="tgl_lahir_ayah" name="tgl_lahir_ayah" required
                                                            value="<?= $mahasiswa->tgl_lahir_ayah ; ?>" type="date"
                                                            class="form-control" />
                                                    </div>
                                                    <?= form_error('tgl_lahir_ayah', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="pekerjaan_ayah"
                                                        class="col-md-3 control-label">Pekerjaan
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <input id="pekerjaan_ayah" name="pekerjaan_ayah" type="text"
                                                            placeholder="Pekerjaan"
                                                            value="<?= $mahasiswa->pekerjaan_ayah ; ?>" required
                                                            class="form-control" />
                                                    </div>
                                                    <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="pendidikan_ayah"
                                                        class="col-md-3 control-label">Pendidikan Terakhir
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" name="pendidikan_ayah">
                                                            <option>-- Pendidikan Terakhir --</option>
                                                            <option value="SD"
                                                                <?= $mahasiswa->pendidikan_ayah == "SD" ? 'selected="selected"' : ''; ?>>
                                                                SD</option>
                                                            <option value="SMP"
                                                                <?= $mahasiswa->pendidikan_ayah == "SMP" ? 'selected="selected"' : ''; ?>>
                                                                SMP</option>
                                                            <option value="SMA"
                                                                <?= $mahasiswa->pendidikan_ayah == "SMA" ? 'selected="selected"' : ''; ?>>
                                                                SMA</option>
                                                            <option value="D3"
                                                                <?= $mahasiswa->pendidikan_ayah == "D3" ? 'selected="selected"' : ''; ?>>
                                                                D3</option>
                                                            <option value="S1"
                                                                <?= $mahasiswa->pendidikan_ayah == "S1" ? 'selected="selected"' : ''; ?>>
                                                                S1</option>
                                                            <option value="S2"
                                                                <?= $mahasiswa->pendidikan_ayah == "S2" ? 'selected="selected"' : ''; ?>>
                                                                S2</option>
                                                        </select>
                                                    </div>
                                                    <?= form_error('pendidikan_ayah', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="penghasilan_ayah"
                                                        class="col-md-3 control-label">Penghasilan
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" name="penghasilan_ayah">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <?php foreach ($penghasilan as $hasil) : ?>
                                                            <option value="<?= enkrip($hasil->id) ; ?>"
                                                                <?= $mahasiswa->penghasilan_ayah == $hasil->id ? 'selected="selected"' : ''; ?>>
                                                                <?= $hasil->penghasilan ; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <?= form_error('penghasilan_ayah', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="keb_khusus_ayah"
                                                        class="col-md-3 control-label">Kebutuhan Khusus
                                                        <span class='require'>*</span></label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" style="height: 300px;"
                                                            multiple="multiple" name="keb_khusus_ayah[]">
                                                            <option value="" disabled>Pilih Satu Atau Lebih (Tekan
                                                                Ctrl), Bila tida ada kebutuhan pilih (X)</option>
                                                            <?php foreach ($keb_khusus as $hasil) : ?>
                                                            <option value="<?= enkrip($hasil->id) ; ?>"
                                                                <?= in_array($hasil->id, $keb_ayah) ? 'selected="selected"' : '' ; ?>>
                                                                <?= $hasil->nama ; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <?= form_error('keb_khusus_ayah[]', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 form-horizontal">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Data Wali</div>
                                        <div class="panel-body pan">
                                            <div class="form-body pal">
                                                <div class="form-group"><label for="nama_wali"
                                                        class="col-md-3 control-label">Nama Wali</label>

                                                    <div class="col-md-6">
                                                        <input id="nama_wali" name="nama_wali" type="text"
                                                            placeholder="Nama Lengkap" class="form-control"
                                                            style="text-transform:uppercase"
                                                            value="<?= $mahasiswa->nama_wali ; ?>" />
                                                    </div>
                                                    <?= form_error('nama_wali', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tempat_wali"
                                                        class="col-md-3 control-label">Tempat Lahir</label>

                                                    <div class="col-md-6">
                                                        <input id="tempat_wali" name="tempat_wali" type="text"
                                                            placeholder="Tempat Lahir" class="form-control"
                                                            style="text-transform:uppercase"
                                                            value="<?= $mahasiswa->tempat_wali ; ?>" />
                                                    </div>
                                                    <?= form_error('tempat_wali', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="tgl_lahir_wali"
                                                        class="col-md-3 control-label">Tanggal Lahir</label>

                                                    <div class="col-md-6">
                                                        <input id="tgl_lahir_wali" name="tgl_lahir_wali" type="date"
                                                            value="<?= $mahasiswa->tgl_lahir_wali ; ?>"
                                                            class="form-control" />
                                                    </div>
                                                    <?= form_error('tgl_lahir_wali', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="pekerjaan_wali"
                                                        class="col-md-3 control-label">Pekerjaan</label>

                                                    <div class="col-md-6">
                                                        <input id="pekerjaan_wali" name="pekerjaan_wali" type="text"
                                                            value="<?= $mahasiswa->pekerjaan_wali ; ?>"
                                                            placeholder="Pekerjaan" class="form-control" />
                                                    </div>
                                                    <?= form_error('pekerjaan_wali', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="pendidikan_wali"
                                                        class="col-md-3 control-label">Pendidikan Terakhir</label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" name="pendidikan_wali">
                                                            <option>-- Pendidikan Terakhir --</option>
                                                            <option value="SD"
                                                                <?= $mahasiswa->pendidikan_wali == "SD" ? 'selected="selected"' : ''; ?>>
                                                                SD</option>
                                                            <option value="SMP"
                                                                <?= $mahasiswa->pendidikan_wali == "SMP" ? 'selected="selected"' : ''; ?>>
                                                                SMP</option>
                                                            <option value="SMA"
                                                                <?= $mahasiswa->pendidikan_wali == "SMA" ? 'selected="selected"' : ''; ?>>
                                                                SMA</option>
                                                            <option value="D3"
                                                                <?= $mahasiswa->pendidikan_wali == "D3" ? 'selected="selected"' : ''; ?>>
                                                                D3</option>
                                                            <option value="S1"
                                                                <?= $mahasiswa->pendidikan_wali == "S1" ? 'selected="selected"' : ''; ?>>
                                                                S1</option>
                                                            <option value="S2"
                                                                <?= $mahasiswa->pendidikan_wali == "S2" ? 'selected="selected"' : ''; ?>>
                                                                S2</option>
                                                        </select>
                                                    </div>
                                                    <?= form_error('pendidikan_wali', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group"><label for="penghasilan_wali"
                                                        class="col-md-3 control-label">Penghasilan</label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" name="penghasilan_wali">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <?php foreach ($penghasilan as $hasil) : ?>
                                                            <option value="<?= enkrip($hasil->id) ; ?>"
                                                                <?= $mahasiswa->penghasilan_wali == $hasil->id ? 'selected="selected"' : ''; ?>>
                                                                <?= $hasil->penghasilan ; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <?= form_error('penghasilan_wali', '<small class="text-danger">', '</small>'); ?>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END CONTENT-->
</div>

<script src="<?= base_url() ; ?>assets/admin/js/jquery-1.10.2.min.js"></script>

<script>
$(document).ready(function() {

    $('#tahun_lulus').change(function() {
        let tahun = new Date();
        let tahun_lulus = $(this).val();
        if (tahun_lulus > tahun.getFullYear()) {
            $(this).val("");
        }
    });

    $('#tgl_lahir').change(function() {
        let tahun = new Date();
        let tahun_lahir = new Date($(this).val());

        if ((tahun.getFullYear() - tahun_lahir.getFullYear()) < 15) {
            $(this).val("");
        }
    });

    $('#tgl_lahir_ibu').change(function() {
        let tahun = new Date();
        let tahun_lahir = new Date($(this).val());

        if ((tahun.getFullYear() - tahun_lahir.getFullYear()) < 25) {
            $(this).val("");
        }
    });

    $('#tgl_lahir_ayah').change(function() {
        let tahun = new Date();
        let tahun_lahir = new Date($(this).val());

        if ((tahun.getFullYear() - tahun_lahir.getFullYear()) < 25) {
            $(this).val("");
        }
    });


    let check_tidak_ada = $('.check_tidak_ada');
    let check_ada_1 = $('.check_ada_1');
    let check_ada_2 = $('.check_ada_2');
    let check_ada_3 = $('.check_ada_3');

    $(check_tidak_ada).each(function(i) {
        $(check_tidak_ada[i]).click(function() {

            if (i == 0) {
                if ($(this).is(":checked")) {
                    $(check_ada_1).prop("checked", false);
                } else {
                    $(check_ada_1).prop("checked", false);
                }
            } else if (i == 1) {
                if ($(this).is(":checked")) {
                    $(check_ada_2).prop("checked", false);
                } else {
                    $(check_ada_2).prop("checked", false);
                }
            } else {
                if ($(this).is(":checked")) {
                    $(check_ada_3).prop("checked", false);
                } else {
                    $(check_ada_3).prop("checked", false);
                }
            }


        });
    });

    $(check_ada_1).click(function() {
        if ($(this).is(":checked")) {
            $(check_tidak_ada[0]).prop("checked", false);
        } else {
            $(check_tidak_ada[0]).prop("checked", false);
        }
    });

    $(check_ada_2).click(function() {
        if ($(this).is(":checked")) {
            $(check_tidak_ada[1]).prop("checked", false);
        } else {
            $(check_tidak_ada[1]).prop("checked", false);
        }
    });

    $(check_ada_3).click(function() {
        if ($(this).is(":checked")) {
            $(check_tidak_ada[2]).prop("checked", false);
        } else {
            $(check_tidak_ada[2]).prop("checked", false);
        }
    });

    $('#provinsi').change(function() {
        let csrfName = $("#csrf_token").attr('name');
        let csrfHash = $("#csrf_token").val();

        let id_prov = $(this).val();

        let dataJson = {
            [csrfName]: csrfHash,
            id_prov: id_prov
        };

        $.ajax({
            url: "<?= base_url('dashboard/kabupaten'); ?>",
            type: 'post',
            dataType: 'json',
            data: dataJson,
            success: function(result) {
                $("#csrf_token").val(result.token);

                let option = [];
                let kabupaten = [];
                option.push('<option value="">-- Pilih Kab / Kota --</option>');
                $(result.kabupaten).each(function(i) {
                    option.push(
                        '<option value="<?= enkrip('result.kabupaten[i].id_kab') ; ?>">' +
                        result.kabupaten[i].nama + '</option>');
                });

                $('#kab_kota').html(option.join(''));
            }
        });
    });

    $('#npsn').change(function() {
        let csrfName = $("#csrf_token").attr('name');
        let csrfHash = $("#csrf_token").val();

        let npsn = $(this).val();

        let dataJson = {
            [csrfName]: csrfHash,
            npsn: npsn
        };

        $.ajax({
            url: "<?= base_url('dashboard/get_npsn'); ?>",
            type: 'post',
            dataType: 'json',
            data: dataJson,
            success: function(result) {
                $("#csrf_token").val(result.token);
                $("#nama_sekolah").val(result.nama_sekolah);
            }
        });
    });

});
</script>