<div class="row">
  <div class="col-md-12 col-xl-10 mx-auto animated fadeIn delay-2s">
    <div class="card-header">
      <b><?= ucwords($title_module) ?></b>
      <?php
      if ($status == 0) { ?>
        <div class="pull-right">
          <a href="<?= site_url('cpanel/rfq_request/approved/' . $id) ?>" class="btn btn-success btn-sm btn-flat"><i class="fa fa-check"></i>Approved</a>
          <a href="<?= site_url('cpanel/rfq_request/not_approved') ?>" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-times"></i>Not Approved</a>
        </div>
      <?php }
      ?>

    </div>
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <tr>
            <td>No penawaran</td>
            <td><?= $no_penawaran ?></td>
          </tr>
          <tr>
            <td>Nama perusahaan</td>
            <td><?= $nama_perusahaan ?></td>
          </tr>
          <tr>
            <td>Nama proyek</td>
            <td><?= $nama_proyek ?></td>
          </tr>
          <tr>
            <td>Nama owner</td>
            <td><?= $nama_owner ?></td>
          </tr>
          <tr>
            <td>Untuk perhatian</td>
            <td><?= $untuk_perhatian ?></td>
          </tr>
          <tr>
            <td>Email pelanggan</td>
            <td><?= $email_pelanggan ?></td>
          </tr>
          <tr>
            <td>No hp</td>
            <td><?= $no_hp ?></td>
          </tr>
          <tr>
            <td>Kebutuhan produk</td>
            <td><?= $kebutuhan_produk ?></td>
          </tr>
          <tr>
            <td>Suplai batching</td>
            <td><?= $suplai_batching ?></td>
          </tr>
          <tr>
            <td>Sumber dana</td>
            <td><?= $sumber_dana ?></td>
          </tr>
          <tr>
            <td>Sektor</td>
            <td><?= $sektor ?></td>
          </tr>
          <tr>
            <td>Jenis proyek</td>
            <td><?= $jenis_proyek ?></td>
          </tr>
          <tr>
            <td>Tanggal mulai</td>
            <td><?= $tanggal_mulai != "" ? date('d-m-Y', strtotime($tanggal_mulai)) : "" ?></td>
          </tr>
          <tr>
            <td>Tanggal selesai</td>
            <td><?= $tanggal_selesai != "" ? date('d-m-Y', strtotime($tanggal_selesai)) : "" ?></td>
          </tr>
          <tr>
            <td>Koordinat maps</td>
            <td><?= $koordinat ?></td>
          </tr>
          <tr>
            <td>Jarak Batching Plant Menuju Site</td>
            <td><?= $batching_jarak ?></td>
          </tr>
          <tr>
            <td>Metode pembayaran</td>
            <td><?= $metode_pembayaran ?></td>
          </tr>
          <tr>
            <td>Lampiran</td>
            <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat Lampiran</button></td>
          </tr>
        </table>

        <a href="<?= url($this->uri->segment(2)) ?>" class="btn btn-sm btn-danger mt-3"><?= cclang("back") ?></a>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lampiran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table>
          <?php
          if ($status == 1) { ?>
            <div class="pull-right">
              <a href="<?= site_url('cpanel/rfq_request/add_lampiran/'.$id) ?>" class="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-plus"></i> Tambah
              </a>
            </div>
          <?php } ?>
          <div class="table-responsive">
            <table class="table zero-configuration">
              <thead>
                <tr>
                  <th>No</th>
                  <th>File</th>
                  <th>Type</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($file as $key => $data) { ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['file'] ?></td>
                    <td><?= $data['type'] ?></td>
                    <td><a href="#" class="btn btn-secondary btn-sm">Download</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </table>
      </div>
    </div>
  </div>
</div>