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
                                <div class="timeline-icon bg-red"><i class="fa fa-shopping-cart"></i></div>
                                <div class="timeline-label bg-red">
                                    <h4 class="timeline-title">Notifikasi Pembayaran</h4>

                                    <p>Anda belum melakukan pembayaran pendaftaran !</p>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 2</span><span>15 October 2020</span></time>
                                <div class="timeline-icon bg-red"><i class="fa fa-user"></i></div>
                                <div class="timeline-label bg-red">
                                    <h4 class="timeline-title">Kelengkapan Info Pendaftaran</h4>

                                    <p>Pengisian dinyatakan lengkap apabila anda mengisikan data sbb :</p>
                                    <ol style="padding-left: 25px;">
                                        <li>Data Pribadi</li>
                                        <li>Data Tempat Tinggal dan Orangtua</li>
                                        <li>Data Sekolah</li>
                                        <li>Kebutuhan Khusus</li>
                                    </ol>
                                    <p>Lengkapilah Isian tersebut termasuk Upload KTP/SIM, dan ijazah anda</p>
                                    <a href="#" class="btn btn-default mtxl">Yuk lengkapi !</a>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 3</span><span>15 October 2020</span></time>
                                <div class="timeline-icon bg-green"><i class="fa fa-folder-open"></i></div>
                                <div class="timeline-label bg-green">
                                    <h4 class="timeline-title">Verifikasi Dokumen Oleh Petugas PMB</h4>

                                    <p>Data sudah diverifikasi petugas, data anda sudah sesuai syarat pendaftaran.
                                        Informasi ujian akan di infokan melalui SMS, mohon gunakan nomor telpon yang
                                        anda daftarkan sesuai nomor telpon yang anda miliki.</p>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 4</span><span>15 October 2020</span></time>
                                <div class="timeline-icon bg-red"><i class="fa fa-file"></i></div>
                                <div class="timeline-label bg-red">
                                    <h4 class="timeline-title">KARTU UJIAN</h4>

                                    <p>Sedang Menunggu Proses.</p>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time">
                                    <span>Step 5</span><span>15 October 2020</span></time>
                                <div class="timeline-icon bg-red"><i class="fa fa-graduation-cap"></i></div>
                                <div class="timeline-label bg-red">
                                    <h4 class="timeline-title">Pengumuman Kelulusan</h4>

                                    <p>Sedang menungu proses verifikasi ujian.</p>
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