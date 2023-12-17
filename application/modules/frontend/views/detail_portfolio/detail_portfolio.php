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
                            <img src="<?= base_url() ?>/_temp/uploads/img/<?= $detail_portfolio['image'] ?>"
                                alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <table class="table-portfolio" id="table-portfolio">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 110px;"><strong>PIC</strong></td>
                                <td><strong>:</strong></td>
                                <td><?= $detail_portfolio['pic'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Jabatan</strong></td>
                                <td><strong>:</strong></td>
                                <td><?= $detail_portfolio['jabatan'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Category</strong></td>
                                <td><strong>:</strong></td>
                                <td><?= $detail_portfolio['category'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Client</strong></td>
                                <td><strong>:</strong></td>
                                <td><?= $detail_portfolio['client_name'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Project date</strong></td>
                                <td><strong>:</strong></td>
                                <td><?= $detail_portfolio['project_date'] ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <br>
                    <br>
                    <table>
                        <thead>
                        </thead>
                        <tbody>
                            <?php
                            // Function to render star rating
                            function renderStarRating($rate)
                            {
                                for ($i = 0; $i < $rate; $i++) {
                                    echo '<i class="bi bi-star-fill" style="color:orange;"></i>';
                                }
                            }
                            ?>
                            <tr>
                                <td style="width: 160px;"><strong>Quality</strong></td>
                                <td>
                                    <?php renderStarRating($detail_portfolio['rate_quality']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Awareness</strong></td>
                                <td>
                                    <?php renderStarRating($detail_portfolio['rate_awareness']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Service</strong></td>
                                <td>
                                    <?php renderStarRating($detail_portfolio['rate_service']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Professionalism</strong></td>
                                <td>
                                    <?php renderStarRating($detail_portfolio['rate_professionalism']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Facility</strong></td>
                                <td>
                                    <?php renderStarRating($detail_portfolio['rate_facility']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Project Focus</strong></td>
                                <td>
                                    <?php renderStarRating($detail_portfolio['rate_project_focus']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Safety Aspect</strong></td>
                                <td>
                                    <?php renderStarRating($detail_portfolio['rate_safety_aspect']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Competitiveness</strong></td>
                                <td>
                                    <?php renderStarRating($detail_portfolio['rate_competitiveness']); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
