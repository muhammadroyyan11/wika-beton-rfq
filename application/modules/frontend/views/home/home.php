<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center"
    style="background-image: url('<?= base_url() ?>_temp/uploads/img/<?= $company[0]['img_header'] ?>'); top left;">

    <!-- <section id="hero" class="d-flex align-items-center"
        style="background: url('<?= base_url() ?>/_temp/uploads/img/<?= $company['img_header'] ?>') top left;"> -->

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col">
                <h1> <span>Selamat Datang</span>
                </h1>
                <h1>
                    di
                    <?= $company[0]['name_company'] ?>
                </h1>
                <!-- <h2>
                    <?= $description[0]['desc_beranda'] ?>
                </h2> -->
                <div class="d-flex">
                    <a href="#about" class="btn-get-started scrollto">Profile</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0"
                    style="width: 250px; text-align: center;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><img src="assets/front/img/wika/READYMIX.png" alt="" style="width: 50px;"></i>
                        </div>
                        <h4 class="title"><a>Readymix</a></h4>
                        <p class="description">
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0"
                    style="width: 250px; text-align: center;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><img src="assets/front/img/wika/QUARRY.png" alt="" style="width: 50px;"></i>
                        </div>
                        <h4 class="title">
                            <a>Quarry</a>
                        </h4>
                        <p class="description">
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0"
                    style="width: 250px; text-align: center;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><img src="assets/front/img/wika/PRODUK_BETON_LAIN-LAIN.png" alt="" style="width: 50px;"></i>
                        </div>
                        <h4 class="title"><a>Produk Beton Lain-lain</a></h4>
                        <p class="description">
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0"
                    style="width: 250px; text-align: center;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><img src="assets/front/img/wika/JASA.png" alt="" style="width: 50px;"></i>
                        </div>
                        <h4 class="title"><a>Jasa</a></h4>
                        <p class="description">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Tentang Perusahaan</h2>
                <h3>
                    <?= $company[0]['name_company'] ?>
                </h3>
                <p style="width: auto; text-justify: auto;">
                    <?= $company[0]['desc_company'] ?>
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" style="hight: 510px;">
                    <img src="<?= base_url() ?>/_temp/uploads/img/<?= $company[0]['img_desc'] ?>" class="img-perusahaan"
                        alt="" />
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>
                        Visi Misi
                    </h3>
                    <p class="fst-italic">
                        "
                        <?= $company[0]['visi'] ?>
                        ".
                    </p>
                    <ul>
                        <li style="display: flex; align-items: start;">
                            <i class="bi bi-1-circle-fill"></i>
                            <p>
                                Menyediakan produk dan jasa yang berdaya saing dan memenuhi harapan Pelanggan
                            </p>
                        </li>
                        <li style="display: flex; align-items: start;">
                            <i class="bi bi-2-circle-fill"></i>
                            <p>
                                Memberikan nilai lebih melalui proses bisnis yang sesuai dengan persyaratan dan
                                harapan pemangku kepentingan
                            </p>
                        </li>
                        <li style="display: flex; align-items: start;">
                            <i class="bi bi-3-circle-fill"></i>
                            <p>
                                Menjalankan sistem manajemen dan teknologi yang tepat guna untuk meningkatkan
                                efisiensi, konsistensi mutu, keselamatan dan kesehatan kerja yang berwawasan
                                lingkungan
                            </p>
                        </li>
                        <li style="display: flex; align-items: start;">
                            <i class="bi bi-4-circle-fill"></i>
                            <p>
                                Tumbuh dan berkembang bersama mitra kerja secara sehat dan berkesinambungan
                            </p>
                        </li>
                        <li style="display: flex; align-items: start;">
                            <i class="bi bi-5-circle-fill"></i>
                            <p>
                                Mengembangkan kompetensi dan kesejahteraan Pegawai.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url() ?>assets/front/img/clients/client-1.png" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url() ?>assets/front/img/clients/client-2.png" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url() ?>assets/front/img/clients/client-3.png" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url() ?>assets/front/img/clients/client-4.png" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url() ?>assets/front/img/clients/client-5.png" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url() ?>assets/front/img/clients/client-6.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Clients Section -->
</main>
<!-- End #main -->