<section class="rev_slider_wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php $i=1; foreach($slider as $hasil) : ?>
                    <li data-target="#myCarousel" data-slide-to="0" class="<?= $i == 1 ? 'active' : '' ; ?>"></li>
                    <?php  $i++; endforeach; ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="display:block;width:100%;overflow:hidden;">

                    <?php $i=1; foreach($slider as $hasil) : ?>
                    <div class="item <?= $i == 1 ? 'active' : '' ; ?>">
                        <img src="<?= base_url('/upload/slider/') . $hasil->foto_slider ; ?>" alt="Los Angeles"
                            height="100" class="img-thumbnail center-block">
                    </div>

                    <?php  $i++; endforeach; ?>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</section>

<!-- style="background-color: #e6e6e6;" -->

<section class="recent-causes sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center">
                    <div class="causes-details clearfix">
                        <div class="text-center">
                            <label class="btn-white btn-xs"><i class="fa fa-calendar fa-5x text-thm"></i></label>
                        </div>
                        <div class="text-center">
                            <p>Gelombang 1 Tahun akademik 2021/2022</p>
                            <a class="thm-btn inverse" href="<?= base_url('pendaftaran') ; ?>"
                                style="margin-left: 12px;">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center">
                    <div class="causes-details clearfix">
                        <div class="text-center">
                            <label class="btn-white btn-xs"><i class="fa fa-money fa-5x text-thm"></i></label>
                        </div>
                        <div class="text-center">
                            <p>Informasti Biaya Kuliah</p>
                            <a class="thm-btn inverse page-scroll" href="#biaya" style="margin-left: 12px;">Klik
                                Disini</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center">
                    <div class="causes-details clearfix">
                        <div class="text-center">
                            <label class="btn-white btn-xs"><i class="fa fa-trophy fa-5x text-thm"></i></label>
                        </div>
                        <div class="text-center">
                            <p>Pengumuman</p>
                            <a class="thm-btn inverse" href="#" style="margin-left: 12px;">Reg Pagi</a>
                            <a class="thm-btn inverse" href="#">Reg Malam</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="recent-causes sec-padding" id="biaya">
    <div class="container">
        <div class="sec-title text-center">
            <h2>INFORMASI BIAYA KULIAH</h2>
            <span class="decor"><span class="inner"></span></span>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center">
                    <div class="causes-details clearfix">
                        <?php foreach ($prodi as $hasil) : ?>
                        <p class="event-title"><a href="#" class="info-prodi" style="color: black;"
                                data-kd_prodi="<?= enkrip($hasil->kd_prodi) ; ?>"><?= $hasil->nama ; ?></a></p>
                        <?php endforeach ; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="causes sm-col5-center">
                    <div class="causes-details clearfix">
                        <h3 class="deskripsiProdi"></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni placeat veniam temporibus
                            similique itaque dicta fuga. Voluptas qui corrupti ab earum quae facilis minus, libero iste
                            magnam reprehenderit corporis ex maiores iure natus. Placeat odio, accusantium tenetur illum
                            unde quia corrupti alias temporibus sequi eos quos, iusto laudantium sapiente ipsum cum
                            provident eum doloribus est at! Nemo, eligendi id ex reprehenderit blanditiis error tenetur
                            suscipit eum facilis asperiores et ipsam molestiae necessitatibus. Necessitatibus hic fugit
                            repellendus maxime facilis? Fugit maiores repudiandae architecto quasi accusantium eos
                            aliquid pariatur, velit harum, dignissimos vitae alias cum, adipisci numquam sunt mollitia
                            porro id totam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recent-causes sec-padding" id="about">
    <div class="container">
        <div class="sec-title text-center">
            <h2>ABOUT</h2>
            <span class="decor"><span class="inner"></span></span>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center">
                    <div class="causes-details clearfix">
                        <?php foreach ($prodi as $hasil) : ?>
                        <p class="event-title"><a href="#" class="info-prodi" style="color: black;"
                                data-kd_prodi="<?= enkrip($hasil->kd_prodi) ; ?>"><?= $hasil->nama ; ?></a></p>
                        <?php endforeach ; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="causes sm-col5-center">
                    <div class="causes-details clearfix">
                        <h3 class="deskripsiProdi"></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni placeat veniam temporibus
                            similique itaque dicta fuga. Voluptas qui corrupti ab earum quae facilis minus, libero iste
                            magnam reprehenderit corporis ex maiores iure natus. Placeat odio, accusantium tenetur illum
                            unde quia corrupti alias temporibus sequi eos quos, iusto laudantium sapiente ipsum cum
                            provident eum doloribus est at! Nemo, eligendi id ex reprehenderit blanditiis error tenetur
                            suscipit eum facilis asperiores et ipsam molestiae necessitatibus. Necessitatibus hic fugit
                            repellendus maxime facilis? Fugit maiores repudiandae architecto quasi accusantium eos
                            aliquid pariatur, velit harum, dignissimos vitae alias cum, adipisci numquam sunt mollitia
                            porro id totam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery-1.11.1.min.js"></script>

<script>
$(document).ready(function() {

    let info_prodi = $('.info-prodi');

    $(info_prodi).each(function(i) {
        $(info_prodi[i]).click(function(e) {
            $('.deskripsiProdi').text($(info_prodi[i]).data('kd_prodi'));

            e.preventDefault();
        });
    });

});
</script>