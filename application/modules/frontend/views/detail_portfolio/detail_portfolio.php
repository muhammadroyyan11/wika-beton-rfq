<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Portfolio Details</h2>
            <ol>
                <li><a href="<?= site_url('home') ?>">Home</a></li>
                <li><a href="<?= site_url('portfolio') ?>">Portfolio</a></li>
                <li>Portfolio Details</li>
            </ol>
        </div>

    </div>
</section><!-- Breadcrumbs Section -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>/_temp/uploads/img/<?= $detail_portfolio['image'] ?>" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>:
                            <?= $detail_portfolio['category'] ?>
                        </li>
                        <li><strong>Client</strong>:
                            <?= $detail_portfolio['client_name'] ?>
                        </li>
                        <li><strong>Project date</strong>:
                            <?= $detail_portfolio['project_date'] ?>
                        </li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2><?= $detail_portfolio['name_portfolio'] ?></h2>
                    <p style="text-align: justify;">
                        <?= $detail_portfolio['desc_portfolio'] ?>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->