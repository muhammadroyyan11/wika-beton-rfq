<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up" style="width: 70%;">
        <div class="section-title">
            <h2>Portfolio</h2>
            <h3>Berikut adalah <span>Portfolio</span> kami</h3>
            <p style="width: auto; text-justify: distribute;">
            </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php
                    $jabatanArray = array();
                    foreach ($portfolio as $data):
                        if (!in_array($data["category"], $jabatanArray)) {
                            // Tampilkan elemen hanya jika belum ditampilkan sebelumnya
                            ?>
                            <li data-filter=".<?= strtolower(str_replace(' ', '-', $data["category"])) ?>">
                                <?= $data["category"] ?>
                            </li>
                            <?php
                            // Tambahkan nilai jabatan ke dalam array sementara
                            $jabatanArray[] = $data["category"];
                        }
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php foreach ($portfolio as $data): ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?= strtolower(str_replace(' ', '-', $data["category"])) ?>">
                    <img src="<?= base_url() ?>/_temp/uploads/img/<?= $data['image'] ?>" class="img-fluid" alt=""
                        style="height: auto; width: -moz-available;" />
                    <div class="portfolio-info">
                        <h4>
                            <?= $data['category'] ?>
                        </h4>
                        <p>
                            <?= $data['name_portfolio'] ?>
                        </p>
                        <a href="<?= base_url() ?>/_temp/uploads/img/<?= $data['image'] ?>" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="<?= $data['category'] ?>"><i
                                class="bx bx-plus"></i></a>
                        <a href="<?= site_url('portfolio/detail_portfolio?id=' . $data['id']) ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- End Portfolio Section -->