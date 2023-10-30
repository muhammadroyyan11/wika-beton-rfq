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
            <input type="number" class="form-control form-control-sm" placeholder="No hp" name="no_hp" id="no_hp" value="<?=$no_hp?>">
          </div>
        
          <div class="form-group">
            <label>Kebutuhan produk</label>
            <textarea class="form-control text-editor" rows="3" data-original-label="kebutuhan_produk" name="kebutuhan_produk" id="kebutuhan_produk"><?=$kebutuhan_produk?></textarea>
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
            </select>
          </div>
        
          <div class="form-group">
            <label>Sumber dana</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "APBN" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="APBN">
                APBN
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "APBD" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="APBD">
                APBD
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "SWASTA NASIONAL" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="SWASTA NASIONAL">
                SWASTA NASIONAL
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "SWASTA ASING" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="SWASTA ASING">
                SWASTA ASING
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "LOAN" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="LOAN">
                LOAN
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "INVESTASI" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="INVESTASI">
                INVESTASI
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "BUMN" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="BUMN">
                BUMN
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "BUMD" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="BUMD">
                BUMD
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "PEMERINTAH" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="PEMERINTAH">
                PEMERINTAH
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sumber_dana == "PEMERINTAH ASING" ? "checked":"")?> class="form-check-input" name="sumber_dana" value="PEMERINTAH ASING">
                PEMERINTAH ASING
                <i class="input-helper"></i>
              </label>
            </div>
            <div id="sumber_dana"></div>
          </div>
        
          <div class="form-group">
            <label>Sektor</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "AGROBISNIS" ? "checked":"")?> class="form-check-input" name="sektor" value="AGROBISNIS">
                AGROBISNIS
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "AIRPORT" ? "checked":"")?> class="form-check-input" name="sektor" value="AIRPORT">
                AIRPORT
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "ELECTRICITY" ? "checked":"")?> class="form-check-input" name="sektor" value="ELECTRICITY">
                ELECTRICITY
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "ENERGY" ? "checked":"")?> class="form-check-input" name="sektor" value="ENERGY">
                ENERGY
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "INDUSTRI" ? "checked":"")?> class="form-check-input" name="sektor" value="INDUSTRI">
                INDUSTRI
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "INFRASTRUKTUR" ? "checked":"")?> class="form-check-input" name="sektor" value="INFRASTRUKTUR">
                INFRASTRUKTUR
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "INFRASTRUKTUR ENERGI" ? "checked":"")?> class="form-check-input" name="sektor" value="INFRASTRUKTUR ENERGI">
                INFRASTRUKTUR ENERGI
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "INFRASTRUKTUR TAMBANG" ? "checked":"")?> class="form-check-input" name="sektor" value="INFRASTRUKTUR TAMBANG">
                INFRASTRUKTUR TAMBANG
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "JALAN DAN JEMBATAN" ? "checked":"")?> class="form-check-input" name="sektor" value="JALAN DAN JEMBATAN">
                JALAN DAN JEMBATAN
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "MARINE" ? "checked":"")?> class="form-check-input" name="sektor" value="MARINE">
                MARINE
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "PEKERJAAN UMUM" ? "checked":"")?> class="form-check-input" name="sektor" value="PEKERJAAN UMUM">
                PEKERJAAN UMUM
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "PEMERINTAHAN" ? "checked":"")?> class="form-check-input" name="sektor" value="PEMERINTAHAN">
                PEMERINTAHAN
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "PERHUBUNGAN" ? "checked":"")?> class="form-check-input" name="sektor" value="PERHUBUNGAN">
                PERHUBUNGAN
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "PERTAMBANGAN" ? "checked":"")?> class="form-check-input" name="sektor" value="PERTAMBANGAN">
                PERTAMBANGAN
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "POWER PLANT" ? "checked":"")?> class="form-check-input" name="sektor" value="POWER PLANT">
                POWER PLANT
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "PROPERTI" ? "checked":"")?> class="form-check-input" name="sektor" value="PROPERTI">
                PROPERTI
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "PROPERTI & COMMERCIAL" ? "checked":"")?> class="form-check-input" name="sektor" value="PROPERTI & COMMERCIAL">
                PROPERTI & COMMERCIAL
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "RAILWAY" ? "checked":"")?> class="form-check-input" name="sektor" value="RAILWAY">
                RAILWAY
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "SUMBER DAYA AIR" ? "checked":"")?> class="form-check-input" name="sektor" value="SUMBER DAYA AIR">
                SUMBER DAYA AIR
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($sektor == "SWASTA" ? "checked":"")?> class="form-check-input" name="sektor" value="SWASTA">
                SWASTA
                <i class="input-helper"></i>
              </label>
            </div>
            <div id="sektor"></div>
          </div>
        
          <div class="form-group">
            <label>Jenis proyek</label>
            <select class="form-control form-control-sm select2" data-placeholder=" -- Select -- " name="jenis_proyek" id="jenis_proyek">
              <option value=""></option>
              <option <?=($jenis_proyek == "Retail" ? "selected":"")?> value="Retail">Retail</option>
              <option <?=($jenis_proyek == "Project Based" ? "selected":"")?> value="Project Based">Project Based</option>
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
            <label>Koordinat maps</label>
            <input type="text" class="form-control form-control-sm" placeholder="Koordinat maps" name="koordinat" id="koordinat" value="<?=$koordinat?>">
          </div>
        
          <div class="form-group">
            <label>Jarak Batching Plant Menuju Site</label>
            <input type="text" class="form-control form-control-sm" placeholder="Jarak Batching Plant Menuju Site" name="batching_jarak" id="batching_jarak" value="<?=$batching_jarak?>">
          </div>
        
          <div class="form-group">
            <label>Metode pembayaran</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($metode_pembayaran == "Cash Before Delivery" ? "checked":"")?> class="form-check-input" name="metode_pembayaran" value="Cash Before Delivery">
                Cash Before Delivery
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($metode_pembayaran == "30% DP 70% Pelunasan" ? "checked":"")?> class="form-check-input" name="metode_pembayaran" value="30% DP 70% Pelunasan">
                30% DP 70% Pelunasan
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($metode_pembayaran == "SCF 120 Hari" ? "checked":"")?> class="form-check-input" name="metode_pembayaran" value="SCF 120 Hari">
                SCF 120 Hari
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($metode_pembayaran == "SCF 180 Hari" ? "checked":"")?> class="form-check-input" name="metode_pembayaran" value="SCF 180 Hari">
                SCF 180 Hari
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($metode_pembayaran == "Reguler 14 Hari" ? "checked":"")?> class="form-check-input" name="metode_pembayaran" value="Reguler 14 Hari">
                Reguler 14 Hari
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($metode_pembayaran == "Reguler 30 Hari" ? "checked":"")?> class="form-check-input" name="metode_pembayaran" value="Reguler 30 Hari">
                Reguler 30 Hari
                <i class="input-helper"></i>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" <?=($metode_pembayaran == "Reguler 60 Hari" ? "checked":"")?> class="form-check-input" name="metode_pembayaran" value="Reguler 60 Hari">
                Reguler 60 Hari
                <i class="input-helper"></i>
              </label>
            </div>
            <div id="metode_pembayaran"></div>
          </div>

          <div class="form-group">
            <label>Tambah lampiran</label>
            <input type="file" class="form-control" name="file">
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
