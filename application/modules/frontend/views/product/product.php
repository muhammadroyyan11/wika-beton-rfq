<section id="services" class="services">
    <div class="container" data-aos="fade-up" style="width: 70%;">
        <div class="section-title">
            <h2>Produk & Jasa</h2>
            <h3>Berikut adalah <span>Produk & Jasa</span> kami</h3>
            <p style="width: auto; text-justify: distribute;">
            <?= $header_product[0]['desc_header']  ?>
            </p>
        </div>

        <div class="container">
            <?php foreach ($product as $data): ?>
                <div class="row mt-3 data-aos" fade-up"">
                    <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 100%;">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">
                                    <?= $data['name'] ?>
                                </a></h4>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="icon-box bg-service"
                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?= base_url() ?>/_temp/uploads/img/<?= $data['img'] ?>');">
                            <p class="align-items-start" style="font-size: 16px;">
                                <?= $data['description'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>