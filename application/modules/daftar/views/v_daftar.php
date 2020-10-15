<section class="donation-section">
    <div class="container">

        <div class="donation-form-outer" style="background-color: white;">
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

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">NIK <span class="required">*</span></div>
                                            <input type="text" class="form-control" required placeholder="NIK"
                                                name="nik" maxlength="16">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Nama <span class="required">*</span></div>
                                            <input type="text" class="form-control" required placeholder="Nama lengkap"
                                                name="nama" style="text-transform:uppercase">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Tempat Lahir <span class="required">*</span>
                                            </div>
                                            <input type="text" class="form-control" required placeholder="Tanggal lahir"
                                                name="tempat" style="text-transform:uppercase">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Tanggal Lahir <span class="required">*</span>
                                            </div>
                                            <input type="date" class="form-control" id="tgl_lahir" required
                                                name="tgl_lahir">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Agama <span class="required">*</span></div>
                                            <select class="form-control" name="agama">
                                                <option value="">-- Pilih Agama --</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="KRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
                                                <option value="KRISTEN KATOLIK">KRISTEN KATOLIK</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="BUDDHA">BUDDHA</option>
                                                <option value="KONGHUCHU">KONGHUCHU </option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Jenis Kelamin <span class="required">*</span></div>
                                            <select class="form-control" name="jk">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="LAKI - LAKI">LAKI - LAKI</option>
                                                <option value="PEREMPUAN">PEREMPUAN</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Status <span class="required">*</span></div>
                                            <select class="form-control" name="status">
                                                <option value="">-- Pilih Status --</option>
                                                <option value="LAJANG">LAJANG</option>
                                                <option value="MENIKAH">MENIKAH</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Jenis Tinggal <span class="required">*</span></div>
                                            <select class="form-control" name="jns_tinggal">
                                                <option value="">-- Pilih Jenis Tinggal --</option>
                                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                                <option value="Wali">Wali</option>
                                                <option value="Kost">Kost</option>
                                                <option value="Asrama">Asrama</option>
                                                <option value="Panti Asuhan">Panti Asuhan</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">No. Telpon / Whatsapp <span
                                                    class="required">*</span>
                                            </div>
                                            <input type="number" class="form-control" required placeholder="No. Telepon"
                                                maxlength="14" name="no_hp">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Email <span class="required">*</span></div>
                                            <input type="email" class="form-control" required placeholder="Email"
                                                name="email">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Alamat <span class="required">*</span></div>
                                            <textarea required class="form-control" name="alamat"
                                                style="height: 150px;"></textarea>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Penerima KPS <span class="required">*</span></div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="kps" value="Ya">Ya
                                                    </label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="kps" value="Tidak" checked>TIdak
                                                    </label>
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

                                        <div class="form-group col-lg-4 col-md-6 col-xs-12">
                                            <div class="field-label">Nama Sekolah <span class="required">*</span></div>
                                            <input type="text" class="form-control" required placeholder="Nama Sekolah"
                                                name="nama_sekolah" style="text-transform:uppercase">
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-xs-12">
                                            <div class="field-label">Provinsi <span class="required">*</span></div>
                                            <select class="form-control" name="provinsi" id="provinsi">
                                                <option value="">-- Pilih Provinsi --</option>
                                                <?php foreach($provinsi as $hasil) : ?>
                                                <option data-id_prov="<?= $hasil['id_prov'] ; ?>"
                                                    value="<?= $hasil['nama'] ; ?>"><?= $hasil['nama'] ; ?></option>
                                                <?php endforeach ; ?>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-xs-12">
                                            <div class="field-label">Kab / Kota <span class="required">*</span></div>
                                            <select class="form-control" name="kab_kota" id="kab_kota">
                                                <option value="">-- Pilih Kab / Kota --</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Jurusan <span class="required">*</span></div>
                                            <input type="text" class="form-control" required placeholder="Jurusan"
                                                name="jurusan">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <div class="field-label">Tahun Lulus <span class="required">*</span></div>
                                            <input type="number" class="form-control" required placeholder="Tahun Lulus"
                                                id="tahun_lulus" name="tahun_lulus">
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
                                                    <select class="form-control" name="provinsi" id="provinsi">
                                                        <option>-- Pilih Program Studi --</option>
                                                        <?php foreach($prodi as $hasil) : ?>
                                                        <option value="<?= $hasil['nama'] ; ?>"><?= $hasil['nama'] ; ?>
                                                        </option>
                                                        <?php endforeach ; ?>
                                                    </select>
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
                                                                <input type="radio" name="kelas" checked>Regular ( Pagi
                                                                )
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="kelas">Regular ( Malam )
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="kelas">Konversi
                                                            </label>
                                                        </div>
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
                                                        <option>-- Sumber Informasi --</option>
                                                        <option value="Iklan Koran">Iklan Koran
                                                        </option>
                                                        <option value="Iklan Radio">Iklan Radio
                                                        </option>
                                                        <option value="Teman Mahasiswa PHB">Teman Mahasiswa PHB
                                                        </option>
                                                        <option value="Teman Non Mahasiswa PHB">Teman Non Mahasiswa PHB
                                                        </option>
                                                        <option value="Kelauarga Civitas PHB">Kelauarga Civitas PHB
                                                        </option>
                                                        <option value="Keluarga Non Civitas PHB">Keluarga Non Civitas
                                                            PHB
                                                        </option>
                                                        <option value="Media Sosial">Teman Non Mahasiswa PHB
                                                        </option>
                                                        <option value="Baliho / Spanduk">Baliho / Spanduk
                                                        </option>
                                                        <option value="Guru SLTA">Guru SLTA
                                                        </option>
                                                    </select>
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
            console.log(i);

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

        let id_prov = $(this).find(':selected').data('id_prov');

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
                    option.push('<option value="' + result.kabupaten[i].nama +
                        '">' +
                        result.kabupaten[i].nama + '</option>');
                });

                $('#kab_kota').html(option.join(''));
            }
        });
    });

});
</script>