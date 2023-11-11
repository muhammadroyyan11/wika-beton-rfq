<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up" style="width: 70%;">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="section-title">
            <h2>Contact</h2>
            <h3><span>Contact Us</span></h3>
        </div>

        <div class="row mt-2" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>
                        <?= $footer_alamat_utama[0]['street'] ?>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>
                        <?= $footer_alamat_utama[0]['email'] ?>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>
                        <?= $footer_alamat_utama[0]['no_hp'] ?>
                    </p>
                </div>
            </div>
        </div>
        <br><br>

        <div class="text-center">
            <div class="section-title">
                <h2>RFQ</h2>
                <h3><span>Request For Quotation</span></h3>
            </div>
        </div>

        <div class="row mt-2" data-aos="fade-up" data-aos-delay="100">
            <form action="<?= site_url('contact/add_action') ?>" method="post" enctype='multipart/form-data'>
                <div class="row mt-2">
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" id="name" placeholder="" />
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Untuk Perhatian (u.p.)</label>
                        <input type="text" name="untuk_perhatian" class="form-control" name="email" id="email" placeholder="" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nomer Handphone</label>
                        <input type="number" name="no_hp" class="form-control" id="name" placeholder="" />
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Email Pelanggan</label>
                        <input type="email" name="email" class="form-control" name="email" id="email" placeholder="" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nama Proyek</label>
                        <input type="text" name="nama_proyek" class="form-control" required id="name" placeholder="" />
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nama Perusahan Project Owner</label>
                        <input type="text" class="form-control" name="project_owner" required id="email" placeholder="" />
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Proyek</label>
                    <select class="form-select" name="jenis_proyek" required aria-label="Default select example">
                        <option selected>Pilih proyek</option>
                        <option value="Retail">Retail</option>
                        <option value="Project Based">Project Based</option>
                    </select>
                </div>
                <div class="row mt-2">
                    <div class="col form-group">
                        <label for="datetime" class="form-label">Jangka Waktu Pelaksanaan Proyek Dimulai</label>
                        <input type="date" class="form-control" required name="tanggal_mulai" placeholder="" />
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Jangka Waktu Pelaksanaan Proyek
                            Berakhir</label>
                        <input type="date" class="form-control" required name="tanggal_selesai" placeholder="" />
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Sumber Dana Proyek</label>
                        <select class="form-select" name="sumber_dana" required aria-label="Default select example">
                            <option selected>Pilih sumber dana proyek</option>
                            <option value="APBN">APBN</option>
                            <option value="APBD">APBD</option>
                            <option value="SWASTA NASIONAL">SWASTA NASIONAL</option>
                            <option value="SWASTA ASING">SWASTA ASING</option>
                            <option value="LOAN">LOAN</option>
                            <option value="INVESTASI">INVESTASI</option>
                            <option value="BUMN">BUMN</option>
                            <option value="BUMD">BUMD</option>
                            <option value="PEMERINTAH">PEMERINTAH</option>
                            <option value="PEMERINTAH ASING">PEMERINTAH ASING</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Sektor</label>
                        <select class="form-select" name="sektor" required aria-label="Default select example">
                            <option selected>Pilih sektor</option>
                            <option value="AGROBISNIS">AGROBISNIS</option>
                            <option value="AIRPORT">AIRPORT</option>
                            <option value="ELECTRICITY">ELECTRICITY</option>
                            <option value="ENERGY">ENERGY</option>
                            <option value="INDUSTRI">INDUSTRI</option>
                            <option value="INFRASTRUKTUR">INFRASTRUKTUR</option>
                            <option value="INFRASTRUKTUR ENERGI">INFRASTRUKTUR ENERGI</option>
                            <option value="INFRASTRUKTUR TAMBANG">INFRASTRUKTUR TAMBANG</option>
                            <option value="JALAN DAN JEMBATAN">JALAN DAN JEMBATAN</option>
                            <option value="MARINE">MARINE</option>
                            <option value="PEKERJAAN UMUM">PEKERJAAN UMUM</option>
                            <option value="PEMERINTAHAN">PEMERINTAHAN</option>
                            <option value="PERHUBUNGAN">PERHUBUNGAN</option>
                            <option value="PERTAMBANGAN">PERTAMBANGAN</option>
                            <option value="POWER PLANT">POWER PLANT</option>
                            <option value="PROPERTI">PROPERTI</option>
                            <option value="PROPERTI & COMMERCIAL">PROPERTI & COMMERCIAL</option>
                            <option value="RAILWAY">RAILWAY</option>
                            <option value="SUMBER DAYA AIR">SUMBER DAYA AIR</option>
                            <option value="SWASTA">SWASTA</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="exampleFormControlInput1" class="form-label">Lampiran Dokumen Teknis (BoQ, Shopdrawing,
                        RKS, dll.) jika lebih dari 1 maka di .zip</label>
                    <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>

                <div class="row mt-2">
                    <div class="col form-group">
                        <label for="datetime" class="form-label">Koordinat Lokasi Proyek</label><br>
                        <label for="datetime" class="form-label">(Share Location)</label>
                        <input type="text" required class="form-control" name="koordinat" id="text" placeholder="Koordinat Lokasi Proyek" />
                    </div>
                    <!-- <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Kebutuhan Produk</label><br>
                        <label for="exampleFormControlInput1" class="form-label"></label>
                       
                        <textarea name="" id="" cols="30" row mt-2s="10"></textarea>
                    </div> -->
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Jarak</label><br>
                        <label for="exampleFormControlInput1" class="form-label">Batching Plant Menuju Site </label>
                        <input type="text" required class="form-control" name="jarak" id="text" placeholder="Jarak Batching Plant Menuju Site" />
                    </div>
                </div>

                <br>
                <div class="form-group" style="margin-top: 5px;">
                    <label for="exampleFormControlInput1" class="form-label">Kebutuhan Produk(Spesifikasi/Mutu, FA/NFA,
                        Slump dan Vol)</label>
                    <textarea name="kebutuhan_produk" class="form-control editor1" id="editor1" cols="50" row mt-2s="10"></textarea>
                </div>

                <div class="row mt-2">
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Suplai Batching Plant dari</label>
                        <select class="form-select" name="suplai_select" id="batchingPlantSelect" aria-label="Default select example">
                            <option selected>Pilih Batching Plant</option>
                            <option value="Batching Plant Karawang">Batching Plant Karawang</option>
                            <option value="Batching Plant Walini">Batching Plant Walini</option>
                            <option value="Batching Plant Cakung">Batching Plant Cakung</option>
                            <option value="Batching Plant Cilegon">Batching Plant Cilegon</option>
                            <option value="Batching Plant Ancol">Batching Plant Ancol</option>
                            <option value="Batching Plant On Site">Batching Plant On Site</option>
                            <option value="other">Other</option>
                        </select>
                        <input type="text" name="suplai_text" class="form-control mt-2" id="otherBatchingPlantInput" placeholder="Masukkan nama Batching Plant" style="display:none;">
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlInput1" class="form-label">Metode Pembayaran</label>
                        <select class="form-select" name="pembayaran_select" id="methodPaymentSelect" aria-label="Default select example">
                            <option value="NULL">Pilih Metode Pembayaran</option>
                            <option value="Cash Before Delivery">Cash Before Delivery</option>
                            <option value="30% DP 70% Pelunasan">30% DP 70% Pelunasan</option>
                            <option value="SCF 120 Hari">SCF 120 Hari</option>
                            <option value="SCF 180 Hari">SCF 180 Hari</option>
                            <option value="Reguler 14 Hari">Reguler 14 Hari</option>
                            <option value="Reguler 30 Hari">Reguler 30 Hari</option>
                            <option value="Reguler 60 Hari">Reguler 60 Hari</option>
                            <option value="other">Other</option>
                        </select>
                        <input type="text" name="pembayaran_text" class="form-control mt-2" id="otherMethodPaymentInput" placeholder="Masukkan metode pembayaran" style="display:none;">
                    </div>
                </div>

                <!-- <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                        Your message has been sent. Thank you!
                    </div>
                </div> -->
                <br>
                <div class="text-center d-grid gap-2">
                    <button class="btn btn-block btn-primary" type="submit">Send Message</button>
                </div>
            </form>
        </div>
</section>
<!-- End Contact Section -->