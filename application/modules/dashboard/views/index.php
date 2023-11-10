<section id="dashboard-analytics">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card bg-analytics text-white">
          <div class="card-content">
            <div class="card-body text-center">
              <img src="<?= base_url() ?>assets/app-assets/images/elements/decore-left.png" class="img-left" alt="card-img-left">
              <img src="<?= base_url() ?>assets/app-assets/images/elements/decore-right.png" class="img-right" alt="card-img-right">
              <div class="avatar avatar-xl bg-primary shadow mt-0">
                <div class="avatar-content">
                  <i class="feather icon-award white font-large-1"></i>
                </div>
              </div>
              <div class="text-center">
                <h1 class="mb-2 text-white">Welcome <?= profile('name') ?>,</h1>
                <p class="m-auto w-75">Selamat datang di admin panel <strong>WIKA</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row match-height">
      <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <h4 class="card-title">RFQ Terbaru</h4>
            </div>
            <!-- <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Perusahaan</th>
                    <th>Nama Proyek</th>
                    <th>Nama Owner</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($newRFQ as $key => $data) {
                    # code...
                  }
                  ?>
                </tbody>
              </table>
            </div> -->
            <div class="init-loading grafik" style="height:400px;width:100%;"></div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
</div>
</div>