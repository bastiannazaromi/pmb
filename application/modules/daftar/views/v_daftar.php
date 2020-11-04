<section class="donation-section">
    <div class="container">

        <div class="donation-form-outer" style="background-color: white;">

            <?php if ($this->session->flashdata('flash-error')) : ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <?= $this->session->flashdata('flash-error') ; ?>
            </div>
            <?php endif ; ?>

            <!--Form Portlet-->
            <div class="row">
                <div class="col-xl-12">
                    <form action="<?= base_url('pendaftaran/submit'); ?>" method="post">
                        <div class="header field-label text-center">
                            <h3>FORM PENDAFTARAN</h3>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading field-label">A. Biodata Calon Mahasiswa</div>
                            <div class="panel-body">
                                <div class="form-portlet donation-form-outer" style="background-color: white;">
                                    <div class="row clearfix">

                                        <input type="hidden"
                                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                            value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_token">

                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="field-label">NIK <span class="required">*</span>
                                                        </div>
                                                        <input type="text" class="form-control" required
                                                            placeholder="NIK" name="nik" maxlength="16"
                                                            value="<?= set_value('nik') ; ?>">
                                                        <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Nama <span class="required">*</span>
                                                        </div>
                                                        <input type="text" class="form-control" required
                                                            placeholder="Nama lengkap" name="nama"
                                                            style="text-transform:uppercase"
                                                            value="<?= set_value('nama') ; ?>">
                                                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Tempat Lahir <span
                                                                class="required">*</span>
                                                        </div>
                                                        <input type="text" class="form-control" required
                                                            placeholder="Tanggal lahir" name="tempat"
                                                            style="text-transform:uppercase"
                                                            value="<?= set_value('tempat') ; ?>">
                                                        <?= form_error('tempat', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Tanggal Lahir <span
                                                                class="required">*</span>
                                                        </div>
                                                        <input type="date" class="form-control" id="tgl_lahir" required
                                                            name="tgl_lahir" value="<?= set_value('tgl_lahir') ; ?>">
                                                        <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Agama <span class="required">*</span>
                                                        </div>
                                                        <select class="form-control" name="agama">
                                                            <option value="">-- Pilih Agama --</option>
                                                            <option value="ISLAM"
                                                                <?= set_value('agama') == 'ISLAM' ? 'selected="selected"' : ''; ?>>
                                                                ISLAM</option>
                                                            <option value="KRISTEN PROTESTAN"
                                                                <?= set_value('agama') == 'KRISTEN PROTESTAN' ? 'selected="selected"' : ''; ?>>
                                                                KRISTEN PROTESTAN</option>
                                                            <option value="KRISTEN KATOLIK"
                                                                <?= set_value('agama') == 'KRISTEN KATOLIK' ? 'selected="selected"' : ''; ?>>
                                                                KRISTEN KATOLIK</option>
                                                            <option value="HINDU"
                                                                <?= set_value('agama') == 'HINDU' ? 'selected="selected"' : ''; ?>>
                                                                HINDU</option>
                                                            <option value="BUDDHA"
                                                                <?= set_value('agama') == 'BUDDHA' ? 'selected="selected"' : ''; ?>>
                                                                BUDDHA</option>
                                                            <option value="KONGHUCHU"
                                                                <?= set_value('agama') == 'KONGHUCHU' ? 'selected="selected"' : ''; ?>>
                                                                KONGHUCHU </option>
                                                        </select>
                                                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Alamat <span class="required">*</span>
                                                        </div>
                                                        <textarea required class="form-control" name="alamat"
                                                            style="height: 150px;"><?= set_value('alamat') ; ?></textarea>
                                                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="field-label">Jenis Kelamin <span
                                                                class="required">*</span></div>
                                                        <select class="form-control" name="jk">
                                                            <option value="">-- Pilih Jenis Kelamin --</option>
                                                            <option value="L"
                                                                <?= set_value('jk') == 'L' ? 'selected="selected"' : ''; ?>>
                                                                LAKI - LAKI</option>
                                                            <option value="P"
                                                                <?= set_value('jk') == 'P' ? 'selected="selected"' : ''; ?>>
                                                                PEREMPUAN</option>
                                                        </select>
                                                        <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Status <span class="required">*</span>
                                                        </div>
                                                        <select class="form-control" name="status">
                                                            <option value="">-- Pilih Status --</option>
                                                            <option value="LAJANG"
                                                                <?= set_value('status') == 'LAJANG' ? 'selected="selected"' : ''; ?>>
                                                                LAJANG</option>
                                                            <option value="MENIKAH"
                                                                <?= set_value('status') == 'MENIKAH' ? 'selected="selected"' : ''; ?>>
                                                                MENIKAH</option>
                                                        </select>
                                                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Tempat Tinggal <span
                                                                class="required">*</span></div>
                                                        <select class="form-control" name="jns_tinggal">
                                                            <option value="">-- Pilih Tempat Tinggal --</option>
                                                            <option value="Bersama Orang Tua"
                                                                <?= set_value('jns_tinggal') == 'Bersama Orang Tua' ? 'selected="selected"' : ''; ?>>
                                                                Bersama Orang Tua</option>
                                                            <option value="Wali"
                                                                <?= set_value('jns_tinggal') == 'Wali' ? 'selected="selected"' : ''; ?>>
                                                                Wali</option>
                                                            <option value="Kost"
                                                                <?= set_value('jns_tinggal') == 'Kost' ? 'selected="selected"' : ''; ?>>
                                                                Kost</option>
                                                            <option value="Asrama"
                                                                <?= set_value('jns_tinggal') == 'Asrama' ? 'selected="selected"' : ''; ?>>
                                                                Asrama</option>
                                                            <option value="Panti Asuhan"
                                                                <?= set_value('jns_tinggal') == 'Panti Asuhan' ? 'selected="selected"' : ''; ?>>
                                                                Panti Asuhan</option>
                                                        </select>
                                                        <?= form_error('jns_tinggal', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">No. Telpon / Whatsapp <span
                                                                class="required">*</span>
                                                        </div>
                                                        <input type="number" class="form-control" required
                                                            placeholder="No. Telepon" maxlength="14" name="no_hp"
                                                            value="<?= set_value('no_hp') ; ?>">
                                                        <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="field-label">Email <span class="required">*</span>
                                                        </div>
                                                        <input type="email" class="form-control" required
                                                            placeholder="Email" name="email"
                                                            value="<?= set_value('email') ; ?>">
                                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Penerima KPS <span
                                                                class="required">*</span></div>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="kps" value="Ya"
                                                                        <?= set_value('kps') == 'Ya' ? 'checked' : ''; ?>>Ya
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="kps" value="Tidak"
                                                                        <?= set_value('kps') == 'Tidak' ? 'checked' : ''; ?>>TIdak
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?= form_error('kps', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading field-label">B. Pendidikan Terakhir Calon Mahasiswa</div>
                            <div class="panel-body">
                                <div class="form-portlet donation-form-outer" style="background-color: white;">
                                    <div class="row clearfix">

                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="field-label">NPSN Sekolah <span
                                                                class="required">*</span></div>
                                                        <input type="number" class="form-control" id="npsn" required
                                                            placeholder="NPSN Sekolah" name="npsn_sekolah">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="field-label">Nama Sekolah <span
                                                                class="required">*</span></div>
                                                        <input type="text" class="form-control" required
                                                            placeholder="Nama Sekolah" id="nama_sekolah"
                                                            name="nama_sekolah" style="text-transform:uppercase"
                                                            value="<?= set_value('nama_sekolah') ; ?>">
                                                        <?= form_error('nama_sekolah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Provinsi <span
                                                                class="required">*</span></div>
                                                        <select class="form-control" name="provinsi" id="provinsi">
                                                            <option value="">-- Pilih Provinsi --</option>
                                                            <?php foreach($provinsi as $hasil) : ?>
                                                            <option value="<?= $hasil->id_prov ; ?>"
                                                                <?= set_value('provinsi') == $hasil->id_prov ? 'selected="selected"' : ''; ?>>
                                                                <?= $hasil->nama ; ?>
                                                            </option>
                                                            <?php endforeach ; ?>
                                                        </select>
                                                        <?= form_error('provinsi', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Kab / Kota <span
                                                                class="required">*</span></div>
                                                        <select class="form-control" name="kab_kota" id="kab_kota">
                                                            <option value="">-- Pilih Kab / Kota --</option>
                                                        </select>
                                                        <?= form_error('kab_kota', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="field-label">Jurusan <span class="required">*</span>
                                                        </div>
                                                        <input type="text" class="form-control" required
                                                            placeholder="Jurusan" name="jurusan"
                                                            value="<?= set_value('jurusan') ; ?>">
                                                        <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="field-label">Tahun Lulus <span
                                                                class="required">*</span></div>
                                                        <input type="number" class="form-control" required
                                                            placeholder="Tahun Lulus" id="tahun_lulus"
                                                            name="tahun_lulus"
                                                            value="<?= set_value('tahun_lulus') ; ?>">
                                                        <?= form_error('tahun_lulus', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading field-label">C. Program Studi Yang Dipilih</div>
                                    <div class="panel-body">
                                        <div class="form-portlet donation-form-outer" style="background-color: white;">
                                            <div class="row clearfix">

                                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                    <div class="field-label">Program Studi <span
                                                            class="required">*</span>
                                                    </div>
                                                    <select class="form-control" name="prodi" id="prodi">
                                                        <option>-- Pilih Program Studi --</option>
                                                        <?php foreach($prodi as $hasil) : ?>
                                                        <option value="<?= $hasil->kd_prodi ; ?>"
                                                            <?= set_value('prodi') == $hasil->kd_prodi ? 'selected="selected"' : ''; ?>>
                                                            <?= $hasil->nama ; ?>
                                                        </option>
                                                        <?php endforeach ; ?>
                                                    </select>
                                                    <?= form_error('prodi', '<small class="text-danger">', '</small>'); ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading field-label">D. Kelas Yang Dipilih</div>
                                    <div class="panel-body">
                                        <div class="form-portlet donation-form-outer" style="background-color: white;">
                                            <div class="row clearfix">
                                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                    <div class="field-label">Kelas <span class="required">*</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="kelas" value="1"
                                                                    <?= set_value('kelas') == '1' ? 'checked' : ''; ?>>Regular
                                                                (
                                                                Pagi
                                                                )
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="kelas" value="2"
                                                                    <?= set_value('kelas') == '2' ? 'checked' : ''; ?>>Regular
                                                                (
                                                                Malam )
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="kelas" value="3"
                                                                    <?= set_value('kelas') == '3' ? 'checked' : ''; ?>>Konversi
                                                            </label>
                                                        </div>
                                                        <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading field-label">Sumber Informasi / Yang Mereferensikan</div>
                                    <div class="panel-body">
                                        <div class="form-portlet donation-form-outer" style="background-color: white;">
                                            <div class="row clearfix">
                                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                    <div class="field-label">Dapat Informasi Dari ? <span
                                                            class="required">*</span>
                                                    </div>
                                                    <select class="form-control" name="sumber_info" id="provinsi">
                                                        <option value="">-- Sumber Informasi --</option>
                                                        <option value="Iklan Koran"
                                                            <?= set_value('sumber_info') == 'Iklan Koran' ? 'selected="selected"' : ''; ?>>
                                                            Iklan Koran
                                                        </option>
                                                        <option value="Iklan Radio"
                                                            <?= set_value('sumber_info') == 'Iklan Radio' ? 'selected="selected"' : ''; ?>>
                                                            Iklan Radio
                                                        </option>
                                                        <option value="Teman Mahasiswa PHB"
                                                            <?= set_value('sumber_info') == 'Teman Mahasiswa PHB' ? 'selected="selected"' : ''; ?>>
                                                            Teman Mahasiswa PHB
                                                        </option>
                                                        <option value="Teman Non Mahasiswa PHB"
                                                            <?= set_value('sumber_info') == 'Teman Non Mahasiswa PHB' ? 'selected="selected"' : ''; ?>>
                                                            Teman Non Mahasiswa PHB
                                                        </option>
                                                        <option value="Keluarga Civitas PHB"
                                                            <?= set_value('sumber_info') == 'Keluarga Civitas PHB' ? 'selected="selected"' : ''; ?>>
                                                            Kelauarga Civitas PHB
                                                        </option>
                                                        <option value="Keluarga Non Civitas PHB"
                                                            <?= set_value('sumber_info') == 'Keluarga Non Civitas PHB' ? 'selected="selected"' : ''; ?>>
                                                            Keluarga Non Civitas
                                                            PHB
                                                        </option>
                                                        <option value="Media Sosial"
                                                            <?= set_value('sumber_info') == 'Media Sosial' ? 'selected="selected"' : ''; ?>>
                                                            Teman Non Mahasiswa PHB
                                                        </option>
                                                        <option value="Baliho / Spanduk"
                                                            <?= set_value('sumber_info') == 'Baliho / Spanduk' ? 'selected="selected"' : ''; ?>>
                                                            Baliho / Spanduk
                                                        </option>
                                                        <option value="Guru SLTA"
                                                            <?= set_value('sumber_info') == 'Guru SLTA' ? 'selected="selected"' : ''; ?>>
                                                            Guru SLTA
                                                        </option>
                                                    </select>
                                                    <?= form_error('sumber_info', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Daftar</button>
                        </div>
                    </form>
                </div>

            </div>



        </div>
    </div>
</section>

<script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery-1.11.1.min.js"></script>

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
            url: "<?= base_url('pendaftaran/kabupaten'); ?>",
            type: 'post',
            dataType: 'json',
            data: dataJson,
            success: function(result) {
                $("#csrf_token").val(result.token);

                let option = [];
                let kabupaten = [];
                option.push('<option value="">-- Pilih Kab / Kota --</option>');
                $(result.kabupaten).each(function(i) {
                    option.push('<option value="' + result.kabupaten[i].id_kab +
                        '">' +
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
            url: "<?= base_url('pendaftaran/get_npsn'); ?>",
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