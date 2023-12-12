<div class="row">
  <div class="col-md-12 col-xl-10 mx-auto animated fadeIn delay-2s">
    <div class="card-header bg-primary text-white">
      <?=ucwords($title_module)?>
    </div>
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
        <tr>
          <td>No penawaran</td>
          <td><?=$no_penawaran?></td>
        </tr>
        <tr>
          <td>Pelanggan</td>
          <td><?=$pelanggan?></td>
        </tr>
        <tr>
          <td>Nama perusahaan</td>
          <td><?=$nama_perusahaan?></td>
        </tr>
        <tr>
          <td>Nama proyek</td>
          <td><?=$nama_proyek?></td>
        </tr>
        <tr>
          <td>Nama owner</td>
          <td><?=$nama_owner?></td>
        </tr>
        <tr>
          <td>Untuk perhatian</td>
          <td><?=$untuk_perhatian?></td>
        </tr>
        <tr>
          <td>Email pelanggan</td>
          <td><?=$email_pelanggan?></td>
        </tr>
        <tr>
          <td>No hp</td>
          <td><?=$no_hp?></td>
        </tr>
        <tr>
          <td>Kebutuhan produk</td>
          <td><?=$kebutuhan_produk?></td>
        </tr>
        <tr>
          <td>Suplai batching</td>
          <td><?=$suplai_batching?></td>
        </tr>
        <tr>
          <td>Jarak</td>
          <td><?=$jarak?></td>
        </tr>
        <tr>
          <td>Sumber dana</td>
          <td><?=$sumber_dana?></td>
        </tr>
        <tr>
          <td>Sektor</td>
          <td><?=$sektor?></td>
        </tr>
        <tr>
          <td>Jenis proyek</td>
          <td><?=$jenis_proyek?></td>
        </tr>
      <tr>
        <td>Tanggal mulai</td>
        <td><?=$tanggal_mulai != "" ? date('d-m-Y',strtotime($tanggal_mulai)):""?></td>
      </tr>
      <tr>
        <td>Tanggal selesai</td>
        <td><?=$tanggal_selesai != "" ? date('d-m-Y',strtotime($tanggal_selesai)):""?></td>
      </tr>
        <tr>
          <td>Koordinat</td>
          <td><?=$koordinat?></td>
        </tr>
        <tr>
          <td>Batching jarak</td>
          <td><?=$batching_jarak?></td>
        </tr>
        <tr>
          <td>Metode pembayaran</td>
          <td><?=$metode_pembayaran?></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><?=$status?></td>
        </tr>
        </table>

        <a href="<?=url($this->uri->segment(2))?>" class="btn btn-sm btn-danger mt-3"><?=cclang("back")?></a>
      </div>
    </div>
  </div>
</div>
