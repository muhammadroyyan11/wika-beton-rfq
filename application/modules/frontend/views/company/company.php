<!-- ======= Company Section ======= -->
<section id="company" class="company section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Struktur Perusahaan</h2>
            <h3><?= $company[0]['name_company'] ?></h3>
            <p style="width: auto; text-justify: auto;">
                Struktur Organisasi Perusahaan <?= $company[0]['name_company'] ?>
            </p>
        </div>

        <div class="structureOrganisation">
            <div class="col" data-aos="fade-right" data-aos-delay="100" style="hight: 510px;">
                <img src="<?= base_url() ?>/_temp/uploads/img/<?= $struktur_organisasi[0]['image'] ?>"
                    class="img-perusahaan" alt="" />
            </div>
            <!-- <p>
                <?= $struktur_organisasi[0]['description'] ?>
            </p> -->
        </div>
    </div>
</section>
<!-- End Company Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up" style="width: 70%;">
        <div class="section-title">
            <h2>Struktur Manajemen Perusahaan</h2>
            <h3>Berikut adalah <span>Struktur Manajemen Perusahaan</span> kami</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua Jabatan</li>
                    <?php
                    $jabatanArray = array();
                    foreach ($pimpinan as $data):
                        if (!in_array($data["jabatan"], $jabatanArray)) {
                            // Tampilkan elemen hanya jika belum ditampilkan sebelumnya
                            ?>
                            <li data-filter=".<?= strtolower(str_replace(' ', '-', $data["jabatan"])) ?>">
                                <?= $data["jabatan"] ?>
                            </li>
                            <?php
                            // Tambahkan nilai jabatan ke dalam array sementara
                            $jabatanArray[] = $data["jabatan"];
                        }
                    endforeach;
                    ?>
                    <!-- <li data-filter=".filter-spv">Supervisi</li>
                    <li data-filter=".filter-worker">Pekerja</li> -->
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($pimpinan as $data): ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?= strtolower(str_replace(' ', '-', $data["jabatan"])) ?>">
                    <img src="<?= base_url() ?>/_temp/uploads/img/<?= $data['image'] ?>" class="img-fluid" alt=""
                        style="height: auto; width: -moz-available;" />
                    <div class="portfolio-info">
                        <h4>
                            <?= $data['jabatan'] ?>
                        </h4>
                        <p>
                            <?= $data['nama'] ?>
                        </p>
                        <a href="<?= base_url() ?>/_temp/uploads/img/<?= $data['image'] ?>" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="<?= $data['jabatan'] ?>" style="right: 10px;"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->