<section id="services" class="services">
    <div class="container" data-aos="fade-up" style="width: 70%;">
        <div class="section-title">
            <h2>Produk & Jasa</h2>
            <h3>Berikut adalah <span>Produk & Jasa</span> kami</h3>
            <p style="width: auto; text-justify: distribute;">
                <?= $description[0]['desc_product'] ?>
            </p>
        </div>

        <div class="container">
            <?php foreach ($product as $key => $data): ?>
            <div class="row mt-3 data-aos" fade-up>
                <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box" style="width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#pricelist_modal<?= $key ?>">
                        <div class="icon">
                            <img src="<?= base_url() ?>/_temp/uploads/img/<?= $data['img_icon'] ?>"
                                alt="<?= $data['id'] ?>" style="width: 50px;">
                        </div>
                        <h4><a href="#"><?= $data['name'] ?></a></h4>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="icon-box bg-service"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?= base_url() ?>/_temp/uploads/img/<?= $data['img'] ?>');">
                        <p class="align-items-start" style="font-size: 16px;"><?= $data['description'] ?></p>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="pricelist_modal<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" style="width: fit-content;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="" id="modalContent<?= $key ?>" style="text-align: center;">
                            <img src="<?= base_url() ?>/_temp/uploads/img/<?= $data['img_pricelist'] ?>"
                                alt="<?= $data['id'] ?>" style="height: 900px; text-align: center;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
