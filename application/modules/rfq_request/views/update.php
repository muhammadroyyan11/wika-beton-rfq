<div class="row">
  <div class="col-md-12 col-xl-10 mx-auto animated fadeIn delay-2s">
    <div class="card m-b-30">
      <div class="card-header bg-primary text-white">
        <?=ucwords($title_module)?>
      </div>
      <div class="card-body">
          <form action="<?=$action?>" method="POST" autocomplete="off">
          
          <div class="form-group">
            <label>No penawaran</label>
            <input type="text" class="form-control form-control-sm" placeholder="No penawaran" name="no_penawaran" id="no_penawaran" value="<?=$no_penawaran?>">
          </div>

          <div class="form-group">
            <label>Deadline</label>
            <input type="date" class="form-control form-control-sm" placeholder="deadline" name="deadline" id="deadline" value="<?=$deadline?>">
          </div>
          <div class="form-group">
            <label>SBU</label>
            <select name="sbu" id="" class="form-control">
                <option value="">-- Silahkan Pilih --</option>
                <option value="RD" <?= $sbu == 'RD' ? 'selected' : '' ?>>RD</option>
                <option value="QR" <?= $sbu == 'QR' ? 'selected' : '' ?>>QR</option>
                <option value="OT" <?= $sbu == 'OT' ? 'selected' : '' ?>>OT</option>
                <option value="SV" <?= $sbu == 'SV' ? 'selected' : '' ?>>SV</option>
              </select>
          </div>
          <div class="form-group">
            <label>NPP</label>
            <input type="text" class="form-control form-control-sm" placeholder="npp" name="npp" id="npp" value="<?=$npp?>">
          </div>

          <div class="form-group">
            <label>Status penawaran</label>
            <!-- <input type="text" class="form-control form-control-sm" placeholder="Pelanggan" name="sbu" id="no_penawaran" value="<?= $no_penawaran ?>"> -->
            <select name="status_penawaran" id="" class="form-control">
              <option value="">-- Silahkan Pilih --</option>
              <option value="Diperoleh" <?= $status_penawaran == 'Diperoleh' ? 'selected' : '' ?>>Diperoleh</option>
              <option value="On Going" <?= $status_penawaran == 'On Going' ? 'selected' : '' ?>>On Going</option>
              <option value="Gagal Diperoleh" <?= $status_penawaran == 'Gagal Diperoleh' ? 'selected' : '' ?>>Gagal Diperoleh</option>
              <option value="Penyusunan HPP" <?= $status_penawaran == 'Penyusunan HPP' ? 'selected' : '' ?>>Penyusunan HPP</option>
            </select>
          </div>

          <div class="form-group">
            <label>Pelanggan</label>
            <select name="pelanggan" id="" class="form-control">
                <option value="">-- Silahkan Pilih --</option>
                <option value="WIKA" <?= $pelanggan == 'WIKA' ? 'selected' : '' ?>>WIKA</option>
                <option value="NON WIKA" <?= $pelanggan == 'NON WIKA' ? 'selected' : '' ?>>NON WIKA</option>
              </select>
          </div>

          <div class="form-group">
            <label>Untuk Perhatian</label>
            <input type="text" class="form-control form-control-sm" placeholder="Untuk Perhatian" name="untuk_perhatian"
              id="untuk_perhatian" value="<?= $untuk_perhatian ?>">
          </div>
        
          <div class="form-group">
            <label>Nama perusahaan</label>
            <input type="text" class="form-control form-control-sm" placeholder="Nama perusahaan" name="nama_perusahaan" id="nama_perusahaan" value="<?=$nama_perusahaan?>">
          </div>

          <div class="form-group">
            <label>Email Pelanggan</label>
            <input type="text" class="form-control form-control-sm" placeholder="Email Pelanggan" name="email_pelanggan"
              id="email_pelanggan" value="<?= $email_pelanggan ?>">
          </div>
        
          <div class="form-group">
            <label>Nama proyek</label>
            <input type="text" class="form-control form-control-sm" placeholder="Nama proyek" name="nama_proyek" id="nama_proyek" value="<?=$nama_proyek?>">
          </div>
        
          <div class="form-group">
            <label>Nama owner</label>
            <input type="text" class="form-control form-control-sm" placeholder="Nama owner" name="nama_owner" id="nama_owner" value="<?=$nama_owner?>">
          </div>
    
          <div class="form-group">
            <label>Kebutuhan produk</label>
            <textarea class="form-control" rows="3" name="kebutuhan_produk" id="ckeditor300"><?=$kebutuhan_produk?></textarea>
          </div>
          
          <div class="form-group">
              <label>Wilayah</label>
              <select class="form-control" data-placeholder=" -- Select -- "
                  name="wilayah" id="wilayah">
                  <option value="Banten" <?= $wilayah == 'Banten' ? 'selected' : '' ?>>Banten</option>
                  <option value="DKI Jakarta" <?= $wilayah == 'DKI Jakarta' ? 'selected' : '' ?>>DKI Jakarta</option>
                  <option value="Jawa Barat" <?= $wilayah == 'Jawa Barat' ? 'selected' : '' ?>>Jawa Barat</option>
              </select>
          </div>

          <div class="form-group">
            <label>Omzet Kontrak</label>
            <input type="number" class="form-control" rows="3" name="omzet_kontrak" id="omzet_kontrak" value="<?=$omzet_kontrak?>">
          </div>

          <div class="form-group">
            <label>Omzet Penjualan</label>
            <input type="number" class="form-control" rows="3" name="omzet_penjualan" id="omzet_penjualan" value="<?=$omzet_penjualan?>">
          </div>

          <div class="form-group">
            <label>Termin</label>
            <input type="number" class="form-control" rows="3" name="termin" id="termin" value="<?=$termin?>">
          </div>


          <div class="form-group">
            <label>Tindak Lanjut</label>
            <input type="text" class="form-control" rows="3" name="tindak_lanjut" id="tindak_lanjut" value="<?=$tindak_lanjut?>">
          </div>
          
          <div class="form-group">
              <label>Status Gagal</label>
              <select class="form-control form-control-sm select2" data-placeholder=" -- Select -- "
                  name="status_gagal" id="status_gagal">
                  <option value="C1" <?= $status_gagal == 'C1' ? 'selected' : '' ?>>C1</option>
                  <option value="C2" <?= $status_gagal == 'C2' ? 'selected' : '' ?>>C2</option>
                  <option value="C3" <?= $status_gagal == 'C3' ? 'selected' : '' ?>>C3</option>
                  <option value="C4" <?= $status_gagal == 'C4' ? 'selected' : '' ?>>C4</option>
                  <option value="C5" <?= $status_gagal == 'C5' ? 'selected' : '' ?>>C5</option>
                  <option value="C6" <?= $status_gagal == 'C6' ? 'selected' : '' ?>>C6</option>
              </select>
          </div>

          <input type="hidden" name="submit" value="update">

          <div class="text-right">
            <a href="<?=url($this->uri->segment(2))?>" class="btn btn-sm btn-danger"><?=cclang("cancel")?></a>
            <button type="submit" id="submit"  class="btn btn-sm btn-primary"><?=cclang("update")?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $("#form").submit(function(e){
  e.preventDefault();
  var me = $(this);
  $("#submit").prop('disabled',true).html('Loading...');
  $(".form-group").find('.text-danger').remove();
  $.ajax({
        url             : me.attr('action'),
        type            : 'post',
        data            :  new FormData(this),
        contentType     : false,
        cache           : false,
        dataType        : 'JSON',
        processData     :false,
        success:function(json){
          if (json.success==true) {
            location.href = json.redirect;
            return;
          }else {
            $("#submit").prop('disabled',false)
                        .html('<?=cclang("save")?>');
            $.each(json.alert, function(key, value) {
              var element = $('#' + key);
              $(element)
              .closest('.form-group')
              .find('.text-danger').remove();
              $(element).after(value);
            });
          }
        }
      });
  });
</script>

<script>
  var ckeditor = CKEDITOR.replace('ckeditor300', {
    height: '300px'
  });
</script>