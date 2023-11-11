<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>
        <?= $company[0]['name_company'] ?>
    </title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?= base_url() ?>/_temp/uploads/img/<?= $company[0]['img_logo'] ?>" rel="icon" />
    <link href="<?= base_url() ?>/_temp/uploads/img/<?= $company[0]['img_logo'] ?>" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/front/vendor/aos/aos.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/front/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- include summernote css/js -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
    


    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/front/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo">
                <a href="<?= site_url('home') ?>" class="logo"><img
                        src="<?= base_url() ?>/_temp/uploads/img/<?= $company[0]['img_logo'] ?>" alt="" /></a>
                <a href="<?= site_url('home') ?>" style="font-size: 14px;">
                    <?= $company[0]['name_company'] ?>
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="nav-link scrollto active"' : 'nav-link scrollto' ?> href="home">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a <?= $this->uri->segment(1) == 'company' || $this->uri->segment(1) == 'home#about' ? 'class="nav-link scrollto active"' : 'nav-link scrollto' ?> role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Perusahaan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= site_url('home#about') ?>">Tentang Perusahaan</a>
                            </li>
                            <li><a class="dropdown-item" href="<?= site_url('company') ?>">Struktur Perusahaan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a <?= $this->uri->segment(1) == 'product' ? 'class="nav-link scrollto active"' : 'nav-link scrollto' ?> href="<?= site_url('product') ?>">Produk &
                            Jasa</a>
                    </li>
                    <li>
                        <a <?= $this->uri->segment(1) == 'portfolio' ? 'class="nav-link scrollto active"' : 'nav-link scrollto' ?> href="<?= site_url('portfolio') ?>">Portfolio</a>
                    </li>
                    <li>
                        <a <?= $this->uri->segment(1) == 'contact' ? 'class="nav-link scrollto active"' : 'nav-link scrollto' ?> href="<?= site_url('contact') ?>">Hubungi
                            Kami</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            <a href="<?= site_url('login') ?>" class="btn btn-primary w-200">
                Login
            </a>
        </div>
    </header>
    <!-- End Header -->
    <?= $contents ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-maps" style="width: 80%;">
            <iframe class="mb-4 mb-lg-0 rounded-5"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3635.8278290307626!2d107.32933686040643!3d-6.407082490159274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697506e082a525%3A0xcd79bfed173657e4!2sPabrik%20Wika%20Beton%20Karawang%20Timur!5e0!3m2!1sen!2sid!4v1697704517544!5m2!1sen!2sid"
                frameborder="0" style="border: 0; width: 100%; height: 384px" allowfullscreen></iframe>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>
                            <?= $footer_alamat_utama[0]['name'] ?><span>.</span>
                        </h3>
                        <a href="<?= $footer_alamat_utama[0]['maps'] ?>" target="_blank">
                            <?= $footer_alamat_utama[0]['street'] ?>
                        </a>
                        <br /><br />
                        <p>
                            <strong>Phone:</strong>
                            <?= $footer_alamat_utama[0]['no_hp'] ?><br />
                            <strong>Email:</strong>
                            <?= $footer_alamat_utama[0]['email'] ?><br />
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Alamat Cabang</h4>
                        <ul>
                            <?php foreach ($footer_alamat_cabang as $key => $data): ?>
                                <li style="align-items: flex-start;">
                                    <i class="bx bx-chevron-right" style="margin-top: 3px;"></i>
                                    <div class="row">
                                        <p style="margin-bottom: 0px;">
                                            <?= $data['name'] ?>
                                        </p>
                                        <a href="<?= $data['description'] ?>" target="_blank" style="line-height: 17px;">
                                            <?= $data['streets'] ?>
                                        </a>
                                    </div>

                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li style="align-items: flex-start;">
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= site_url('home#about') ?>">Tentang Perusahaan</a>
                            </li>
                            <li style="align-items: flex-start;">
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= site_url('company') ?>">Struktur Perusahaan</a>
                            </li>
                            <li style="align-items: flex-start;">
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= site_url('product') ?>">Produk &
                                    Jasa</a>
                            </li>
                            <li style="align-items: flex-start;">
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= site_url('portfolio') ?>">Portfolio</a>
                            </li>
                            <li style="align-items: flex-start;">
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= site_url('contact') ?>">Hubungi
                                    Kami</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Hubungi Kami di Social Media</h4>
                        <p>
                            kalian dapat mengikuti info dari kami di social media dibawah
                        </p>
                        <div class="social-links mt-3">
                            <?php foreach ($social_network as $key => $data): ?>
                                <a href="<?= $data['link'] ?>" class="<?= $data['name'] ?>" target="_blank"><i
                                        class="<?= $data['icon'] ?>"></i></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>
                        <?= $company[0]['name_company'] ?>
                    </span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Build by <strong>Bisa Karya</strong>
                2023
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/front/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>assets/front/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/front/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/front/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/front/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>assets/front/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/front/js/main.js"></script>

    <!-- JS File -->
    <script src="<?= base_url() ?>assets/front/js/form.js"></script>
    <!-- <script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script> -->
    <script src="https://kobis.id/assets/ckeditor/ckeditor.js"></script>

    <script>
       var ckeditor = CKEDITOR.replace('editor1', {
            height: '300px'
        });

        // var ckeditor = CKEDITOR.replace('posting', {
        //     height: '600px',
        //     filebrowserUploadUrl: 'https://kobis.id/posting/upload_image',
        //     filebrowserUploadMethod: "form"
        // });


        CKEDITOR.disableAutoInline = true;
        CKEDITOR.inline('editable');

        function changeImage(element, newImageSrc) {
            var iconElement = element.querySelector('.icon img');
            iconElement.src = newImageSrc;
        }
    </script>
</body>

</html>