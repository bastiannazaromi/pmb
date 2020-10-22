<section class="donation-section">
    <div class="container">

        <div class="donation-form-outer" style="background-color: white;">

            <?php if ($this->session->flashdata('flash-sukses')) : ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <?= $this->session->flashdata('flash-sukses') ; ?>
            </div>
            <?php endif ; ?>

            <!--Form Portlet-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="panel panel-info">
                        <div class="panel-heading field-label">Informasi No. Pendafataran dan Akun Login</div>
                        <div class="panel-body">
                            <div class="form-portlet donation-form-outer" style="background-color: white;">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="field-label">No. Pendaftaran (Virtual Akun)
                                                    </div>
                                                    <label class="text-black"><?= $akun['virtualAkun'] ; ?></label>
                                                </div>

                                                <div class="form-group">
                                                    <div class="field-label">Akun Login Anda
                                                    </div>
                                                    <label class="text-black">Username :
                                                        <?= $akun['username'] ; ?></label><br>
                                                    <label class="text-black">Password :
                                                        <?= $akun['password'] ; ?></label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="text-center"><a href="<?= base_url('dashboard/login') ; ?>"
                            class="thm-btn mt_30 mb_30">Login</a>
                    </div>
                </div>

            </div>



        </div>
    </div>
</section>