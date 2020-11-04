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
        <div id="tab-general">
            <div class="row mtxl">
                <div class="col-lg-10">
                    <div class="timeline-centered timeline-md">
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 1</span><span>22 October 2020</span></time>
                                <div class="timeline-icon <?=  $bukti_tf->status == 1 ? 'bg-green' : 'bg-red' ; ?> "><i
                                        class="fa fa-shopping-cart"></i></div>
                                <div class="timeline-label bg-white">
                                    <div class="panel <?=  $bukti_tf->status == 1 ? 'panel-green' : 'panel-red' ; ?>">
                                        <div class="panel-heading field-label">Notifikasi Pembayaran
                                        </div>
                                        <div class="panel-body">
                                            <p>Anda belum melakukan pembayaran pendaftaran</p>
                                            <button type="button"
                                                class="btn <?=  $bukti_tf->status == 1 ? 'btn-green' : 'btn-red' ; ?> btn-outlined mtxl"
                                                data-toggle="modal" data-target="#modalUpload"><i
                                                    class="fa fa-upload"></i>
                                                Bukti Pembayaran</button>
                                            <?php if ($bukti_tf) : ?>
                                            <a href="<?= base_url('upload/berkasMhs/buktiTf/') . $bukti_tf->nama_file ; ?>"
                                                class="btn btn-green btn-outlined mtxl">Cek File</a>
                                            <?php endif ; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 2</span><span>15 October 2020</span></time>
                                <div class="timeline-icon bg-red"><i class="fa fa-user"></i></div>
                                <div class="timeline-label bg-white">
                                    <div class="panel panel-red">
                                        <div class="panel-heading field-label">Kelengkapan Info Pendaftaran
                                        </div>
                                        <div class="panel-body">
                                            <p>Pengisian dinyatakan lengkap apabila anda mengisikan data sbb :</p>
                                            <ol style="padding-left: 25px;">
                                                <li>Data Pribadi</li>
                                                <li>Data Tempat Tinggal dan Orang Tua</li>
                                                <li>Data Sekolah</li>
                                                <li>Kebutuhan Khusus</li>
                                            </ol>
                                            <p>Lengkapilah Isian tersebut termasuk Upload KTP/SIM, dan ijazah anda</p>
                                            <a href="<?= base_url('dashboard/lengkapi_data') ; ?>"
                                                class="btn btn-red btn-outlined mtxl">Yuk lengkapi !</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 3</span><span>15 October 2020</span></time>
                                <div class="timeline-icon bg-red"><i class="fa fa-folder-open"></i></div>
                                <div class="timeline-label bg-white">
                                    <div class="panel panel-red">
                                        <div class="panel-heading field-label">Verifikasi Dokumen Oleh Petugas PMB
                                        </div>
                                        <div class="panel-body">
                                            <p>Data sudah diverifikasi petugas, data anda sudah sesuai syarat
                                                pendaftaran.
                                                Informasi ujian akan di infokan melalui SMS, mohon gunakan nomor telpon
                                                yang
                                                anda daftarkan sesuai nomor telpon yang anda miliki.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 4</span><span>15 October 2020</span></time>
                                <div class="timeline-icon bg-red"><i class="fa fa-file"></i></div>
                                <div class="timeline-label bg-white">
                                    <div class="panel panel-red">
                                        <div class="panel-heading field-label">KARTU UJIAN
                                        </div>
                                        <div class="panel-body">
                                            <p>Sedang Menunggu Proses.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 5</span><span>15 October 2020</span></time>
                                <div class="timeline-icon bg-red"><i class="fa fa-graduation-cap"></i></div>
                                <div class="timeline-label bg-white">
                                    <div class="panel panel-red">
                                        <div class="panel-heading field-label">Pengumuman Kelulusan
                                        </div>
                                        <div class="panel-body">
                                            <p>Sedang menungu proses verifikasi ujian.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END CONTENT-->
</div>

<!--Modal Default-->
<div id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true"
    class="modal fade">
    <div class="modal-dialog">
        <form action="<?= base_url('dashboard/buktiTf'); ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header bg-red">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-default-label" class="modal-title">Bukti Pembayaran</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                        value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="form-group">
                        <label for="buktiTf">Upload File</label>
                        <input type="file" class="form-control" name="buktiTf" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <button type="submit" class="btn btn-red">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>