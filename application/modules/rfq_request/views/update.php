<div class="row">
  <div class="col-md-12 col-xl-10 mx-auto animated fadeIn delay-2s">
    <div class="card m-b-30">
      <div class="card-header bg-primary text-white">
        <?=ucwords($title_module)?>
      </div>
      <div class="card-body">
          <form action="<?=$action?>" id="form" autocomplete="off">
          
          <div class="form-group">
            <label>No penawaran</label>
            <input type="text" class="form-control form-control-sm" placeholder="No penawaran" name="no_penawaran" id="no_penawaran" value="<?=$no_penawaran?>">
          </div>
        
          <div class="form-group">
            <label>Pelanggan</label>
            <input type="text" class="form-control form-control-sm" placeholder="Pelanggan" name="pelanggan" id="pelanggan" value="<?=$pelanggan?>">
          </div>
        
          <div class="form-group">
            <label>Nama perusahaan</label>
            <input type="text" class="form-control form-control-sm" placeholder="Nama perusahaan" name="nama_perusahaan" id="nama_perusahaan" value="<?=$nama_perusahaan?>">
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
            <label>Untuk perhatian</label>
            <input type="text" class="form-control form-control-sm" placeholder="Untuk perhatian" name="untuk_perhatian" id="untuk_perhatian" value="<?=$untuk_perhatian?>">
          </div>
        
          <div class="form-group">
            <label>Email pelanggan</label>
            <input type="text" class="form-control form-control-sm" placeholder="Email pelanggan" name="email_pelanggan" id="email_pelanggan" value="<?=$email_pelanggan?>">
          </div>
        
          <div class="form-group">
            <label>No hp</label>
            <input type="text" class="form-control form-control-sm" placeholder="No hp" name="no_hp" id="no_hp" value="<?=$no_hp?>">
          </div>
        
          <div class="form-group">
            <label>Kebutuhan produk</label>
            <textarea class="form-control text-editor" rows="3" data-original-label="kebutuhan_produk" name="kebutuhan_produk" id="summernote"><?=$kebutuhan_produk?></textarea>
          </div>
        
          <div class="form-group">
            <label>Suplai batching</label>
            <select class="form-control form-control-sm select2" data-placeholder=" -- Select -- " name="suplai_batching" id="suplai_batching">
              <option value=""></option>
              <option <?=($suplai_batching == "Batching Plant Karawang" ? "selected":"")?> value="Batching Plant Karawang">Batching Plant Karawang</option>
              <option <?=($suplai_batching == "Batching Plant Walini" ? "selected":"")?> value="Batching Plant Walini">Batching Plant Walini</option>
              <option <?=($suplai_batching == "Batching Plant Cakung" ? "selected":"")?> value="Batching Plant Cakung">Batching Plant Cakung</option>
              <option <?=($suplai_batching == "Batching Plant Cilegon" ? "selected":"")?> value="Batching Plant Cilegon">Batching Plant Cilegon</option>
              <option <?=($suplai_batching == "Batching Plant Ancol" ? "selected":"")?> value="Batching Plant Ancol">Batching Plant Ancol</option>
              <option <?=($suplai_batching == "Batching Plant On Site" ? "selected":"")?> value="Batching Plant On Site">Batching Plant On Site</option>
              <option <?=($suplai_batching == "Other" ? "selected":"")?> value="Other">Other</option>
            </select>
          </div>
        
          <div class="form-group">
            <label>Jarak</label>
            <input type="text" class="form-control form-control-sm" placeholder="Jarak" name="jarak" id="jarak" value="<?=$jarak?>">
          </div>
        
          <div class="form-group">
            <label>Sumber dana</label>
            <select class="form-control form-control-sm select2" data-placeholder=" -- Select -- " name="sumber_dana" id="sumber_dana">
              <option value=""></option>
              <option <?=($sumber_dana == "APBN" ? "selected":"")?> value="APBN">APBN</option>
              <option <?=($sumber_dana == "APBD" ? "selected":"")?> value="APBD">APBD</option>
              <option <?=($sumber_dana == "SWASTA NASIONAL" ? "selected":"")?> value="SWASTA NASIONAL">SWASTA NASIONAL</option>
              <option <?=($sumber_dana == "SWASTA ASING" ? "selected":"")?> value="SWASTA ASING">SWASTA ASING</option>
              <option <?=($sumber_dana == "LOAN" ? "selected":"")?> value="LOAN">LOAN</option>
              <option <?=($sumber_dana == "INVESTASI" ? "selected":"")?> value="INVESTASI">INVESTASI</option>
              <option <?=($sumber_dana == "BUMN" ? "selected":"")?> value="BUMN">BUMN</option>
              <option <?=($sumber_dana == "BUMD" ? "selected":"")?> value="BUMD">BUMD</option>
              <option <?=($sumber_dana == "PEMERINTAH" ? "selected":"")?> value="PEMERINTAH">PEMERINTAH</option>
              <option <?=($sumber_dana == "PEMERINTAH ASING" ? "selected":"")?> value="PEMERINTAH ASING">PEMERINTAH ASING</option>
            </select>
          </div>
        
          <div class="form-group">
            <label>Sektor</label>
            <select class="form-control form-control-sm select2" data-placeholder=" -- Select -- " name="sektor" id="sektor">
              <option value=""></option>
              <option <?=($sektor == "AGROBISNIS" ? "selected":"")?> value="AGROBISNIS">AGROBISNIS</option>
              <option <?=($sektor == "AIRPORT" ? "selected":"")?> value="AIRPORT">AIRPORT</option>
              <option <?=($sektor == "ELECTRICITY" ? "selected":"")?> value="ELECTRICITY">ELECTRICITY</option>
              <option <?=($sektor == "ENERGY" ? "selected":"")?> value="ENERGY">ENERGY</option>
              <option <?=($sektor == "INDUSTRI" ? "selected":"")?> value="INDUSTRI">INDUSTRI</option>
              <option <?=($sektor == "INFRASTRUKTUR" ? "selected":"")?> value="INFRASTRUKTUR">INFRASTRUKTUR</option>
              <option <?=($sektor == "INFRASTRUKTUR ENERGI" ? "selected":"")?> value="INFRASTRUKTUR ENERGI">INFRASTRUKTUR ENERGI</option>
              <option <?=($sektor == "INFRASTRUKTUR TAMBANG" ? "selected":"")?> value="INFRASTRUKTUR TAMBANG">INFRASTRUKTUR TAMBANG</option>
              <option <?=($sektor == "JALAN DAN JEMBATAN" ? "selected":"")?> value="JALAN DAN JEMBATAN">JALAN DAN JEMBATAN</option>
              <option <?=($sektor == "MARINE" ? "selected":"")?> value="MARINE">MARINE</option>
              <option <?=($sektor == "PEKERJAAN UMUM" ? "selected":"")?> value="PEKERJAAN UMUM">PEKERJAAN UMUM</option>
              <option <?=($sektor == "PEMERINTAHAN" ? "selected":"")?> value="PEMERINTAHAN">PEMERINTAHAN</option>
              <option <?=($sektor == "PERHUBUNGAN" ? "selected":"")?> value="PERHUBUNGAN">PERHUBUNGAN</option>
              <option <?=($sektor == "PERTAMBANGAN" ? "selected":"")?> value="PERTAMBANGAN">PERTAMBANGAN</option>
              <option <?=($sektor == "POWER PLANT" ? "selected":"")?> value="POWER PLANT">POWER PLANT</option>
              <option <?=($sektor == "PROPERTI" ? "selected":"")?> value="PROPERTI">PROPERTI</option>
              <option <?=($sektor == "PROPERTI & COMMERCIAL" ? "selected":"")?> value="PROPERTI & COMMERCIAL">PROPERTI & COMMERCIAL</option>
              <option <?=($sektor == "RAILWAY" ? "selected":"")?> value="RAILWAY">RAILWAY</option>
              <option <?=($sektor == "SUMBER DAYA AIR" ? "selected":"")?> value="SUMBER DAYA AIR">SUMBER DAYA AIR</option>
              <option <?=($sektor == "SWASTA" ? "selected":"")?> value="SWASTA">SWASTA</option>
            </select>
          </div>
        
          <div class="form-group">
            <label>Jenis proyek</label>
            <select class="form-control form-control-sm select2" data-placeholder=" -- Select -- " name="jenis_proyek" id="jenis_proyek">
              <option value=""></option>
              <option <?=($jenis_proyek == "Retail" ? "selected":"")?> value="Retail">Retail</option>
              <option <?=($jenis_proyek == "Project based" ? "selected":"")?> value="Project based">Project based</option>
            </select>
          </div>
        
          <div class="form-group">
            <label>Tanggal mulai</label>
            <input type="date" class="form-control form-control-sm" placeholder="Tanggal mulai" name="tanggal_mulai" id="tanggal_mulai" value="<?=$tanggal_mulai?>">
          </div>
        
          <div class="form-group">
            <label>Tanggal selesai</label>
            <input type="date" class="form-control form-control-sm" placeholder="Tanggal selesai" name="tanggal_selesai" id="tanggal_selesai" value="<?=$tanggal_selesai?>">
          </div>
        
          <div class="form-group">
            <label>Koordinat</label>
            <input type="text" class="form-control form-control-sm" placeholder="Koordinat" name="koordinat" id="koordinat" value="<?=$koordinat?>">
          </div>
        
          <div class="form-group">
            <label>Batching jarak</label>
            <input type="text" class="form-control form-control-sm" placeholder="Batching jarak" name="batching_jarak" id="batching_jarak" value="<?=$batching_jarak?>">
          </div>
        
          <div class="form-group">
            <label>Metode pembayaran</label>
            <select class="form-control form-control-sm select2" data-placeholder=" -- Select -- " name="metode_pembayaran" id="metode_pembayaran">
              <option value=""></option>
              <option <?=($metode_pembayaran == "Cash Before Delivery" ? "selected":"")?> value="Cash Before Delivery">Cash Before Delivery</option>
              <option <?=($metode_pembayaran == "30% DP 70% Pelunasan" ? "selected":"")?> value="30% DP 70% Pelunasan">30% DP 70% Pelunasan</option>
              <option <?=($metode_pembayaran == "SCF 120 Hari" ? "selected":"")?> value="SCF 120 Hari">SCF 120 Hari</option>
              <option <?=($metode_pembayaran == "SCF 180 Hari" ? "selected":"")?> value="SCF 180 Hari">SCF 180 Hari</option>
              <option <?=($metode_pembayaran == "Reguler 14 Hari" ? "selected":"")?> value="Reguler 14 Hari">Reguler 14 Hari</option>
              <option <?=($metode_pembayaran == "Reguler 30 Hari" ? "selected":"")?> value="Reguler 30 Hari">Reguler 30 Hari</option>
              <option <?=($metode_pembayaran == "Reguler 60 Hari" ? "selected":"")?> value="Reguler 60 Hari">Reguler 60 Hari</option>
              <option <?=($metode_pembayaran == "Other" ? "selected":"")?> value="Other">Other</option>
            </select>
          </div>
        
          <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-sm" placeholder="Status" name="status" id="status" value="<?=$status?>">
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
  $('#summernote').summernote({
    tabsize: 2,
    height: 300
  });
</script>