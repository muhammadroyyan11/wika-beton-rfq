<!-- Zero configuration table -->
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?=ucwords($title_module)?></h4>
          <div class="pull-right">
                          <a href="<?=url("rfq_request/add")?>" class="btn btn-success btn-flat"><i class="fa fa-file btn-icon-prepend"></i> Add</a>
                                      <button type="button" id="filter-show" class="btn btn-primary btn-flat"><i class="mdi mdi-backup-restore btn-icon-prepend"></i> Filter</button>
                      </div>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <form autocomplete="off" class="content-filter">
              <div class="row">
                                  <div class="form-group col-md-6">
                                          <input type="text" id="no_penawaran" class="form-control form-control-sm" placeholder="No penawaran" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="nama_perusahaan" class="form-control form-control-sm" placeholder="Nama perusahaan" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="nama_proyek" class="form-control form-control-sm" placeholder="Nama proyek" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="nama_owner" class="form-control form-control-sm" placeholder="Nama owner" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="untuk_perhatian" class="form-control form-control-sm" placeholder="Untuk perhatian" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="email_pelanggan" class="form-control form-control-sm" placeholder="Email pelanggan" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="no_hp" class="form-control form-control-sm" placeholder="No hp" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="kebutuhan_produk" class="form-control form-control-sm" placeholder="Kebutuhan produk" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <select class="form-control form-control-sm select2" data-placeholder=" -- Select Suplai batching -- " name="suplai_batching" id="suplai_batching">
                        <option value=""></option>
                                                  <option value="Batching Plant Karawang">Batching Plant Karawang</option>
                                                  <option value="Batching Plant Walini">Batching Plant Walini</option>
                                                  <option value="Batching Plant Cakung">Batching Plant Cakung</option>
                                                  <option value="Batching Plant Cilegon">Batching Plant Cilegon</option>
                                                  <option value="Batching Plant Ancol">Batching Plant Ancol</option>
                                                  <option value="Batching Plant On Site">Batching Plant On Site</option>
                                              </select>
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="jarak" class="form-control form-control-sm" placeholder="Jarak" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <label class="mb-0">Sumber dana</label>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="APBN">
                            APBN                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="APBD">
                            APBD                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="SWASTA NASIONAL">
                            SWASTA NASIONAL                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="SWASTA ASING">
                            SWASTA ASING                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="LOAN">
                            LOAN                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="INVESTASI">
                            INVESTASI                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="BUMN">
                            BUMN                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="BUMD">
                            BUMD                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="PEMERINTAH">
                            PEMERINTAH                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sumber_dana" name="sumber_dana" value="PEMERINTAH ASING">
                            PEMERINTAH ASING                            <i class="input-helper"></i>
                          </label>
                        </div>
                                                            </div>

                                  <div class="form-group col-md-6">
                                          <label class="mb-0">Sektor</label>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="AGROBISNIS">
                            AGROBISNIS                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="AIRPORT">
                            AIRPORT                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="ELECTRICITY">
                            ELECTRICITY                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="ENERGY">
                            ENERGY                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="INDUSTRI">
                            INDUSTRI                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="INFRASTRUKTUR">
                            INFRASTRUKTUR                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="INFRASTRUKTUR ENERGI">
                            INFRASTRUKTUR ENERGI                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="INFRASTRUKTUR TAMBANG">
                            INFRASTRUKTUR TAMBANG                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="JALAN DAN JEMBATAN">
                            JALAN DAN JEMBATAN                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="MARINE">
                            MARINE                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="PEKERJAAN UMUM">
                            PEKERJAAN UMUM                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="PEMERINTAHAN">
                            PEMERINTAHAN                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="PERHUBUNGAN">
                            PERHUBUNGAN                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="PERTAMBANGAN">
                            PERTAMBANGAN                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="POWER PLANT">
                            POWER PLANT                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="PROPERTI">
                            PROPERTI                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="PROPERTI & COMMERCIAL">
                            PROPERTI & COMMERCIAL                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="RAILWAY">
                            RAILWAY                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="SUMBER DAYA AIR">
                            SUMBER DAYA AIR                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="sektor" name="sektor" value="SWASTA">
                            SWASTA                            <i class="input-helper"></i>
                          </label>
                        </div>
                                                            </div>

                                  <div class="form-group col-md-6">
                                          <select class="form-control form-control-sm select2" data-placeholder=" -- Select Jenis proyek -- " name="jenis_proyek" id="jenis_proyek">
                        <option value=""></option>
                                                  <option value="Retail">Retail</option>
                                                  <option value="Project Based">Project Based</option>
                                              </select>
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="date" id="tanggal_mulai" class="form-control form-control-sm" placeholder="Tanggal mulai" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="date" id="tanggal_selesai" class="form-control form-control-sm" placeholder="Tanggal selesai" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="koordinat" class="form-control form-control-sm" placeholder="Koordinat maps" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <input type="text" id="batching_jarak" class="form-control form-control-sm" placeholder="Jarak Batching Plant Menuju Site" />
                                      </div>

                                  <div class="form-group col-md-6">
                                          <label class="mb-0">Metode pembayaran</label>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="metode_pembayaran" name="metode_pembayaran" value="Cash Before Delivery">
                            Cash Before Delivery                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="metode_pembayaran" name="metode_pembayaran" value="30% DP 70% Pelunasan">
                            30% DP 70% Pelunasan                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="metode_pembayaran" name="metode_pembayaran" value="SCF 120 Hari">
                            SCF 120 Hari                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="metode_pembayaran" name="metode_pembayaran" value="SCF 180 Hari">
                            SCF 180 Hari                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="metode_pembayaran" name="metode_pembayaran" value="Reguler 14 Hari">
                            Reguler 14 Hari                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="metode_pembayaran" name="metode_pembayaran" value="Reguler 30 Hari">
                            Reguler 30 Hari                            <i class="input-helper"></i>
                          </label>
                        </div>
                                              <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="metode_pembayaran" name="metode_pembayaran" value="Reguler 60 Hari">
                            Reguler 60 Hari                            <i class="input-helper"></i>
                          </label>
                        </div>
                                                            </div>

                              </div>
              <div class="pull-right">
                <button type='button' class='btn btn-default btn-sm' id="filter-cancel"><?=cclang("cancel")?></button>
                <button type="button" class="btn btn-primary btn-sm" id="filter">Filter</button>
              </div>
            </form>
            <div class="table-responsive">
              <table class="table display" name="table" id="table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
							<th>No penawaran</th>
							<th>Nama perusahaan</th>
							<th>Nama proyek</th>
							<th>Nama owner</th>
							<th>Untuk perhatian</th>
							<th>Email pelanggan</th>
							<th>No hp</th>
							<th>Kebutuhan produk</th>
							<th>Suplai batching</th>
							<th>Sumber dana</th>
							<th>Sektor</th>
							<th>Jenis proyek</th>
							<th>Tanggal mulai</th>
							<th>Tanggal selesai</th>
							<th>Koordinat maps</th>
							<th>Jarak Batching Plant Menuju Site</th>
							<th>Metode pembayaran</th>
                    <th>#</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<script type="text/javascript">
  $(document).ready(function() {
    var table;
    //datatables
    table = $('#table').DataTable({

      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.
      "ordering": true,
      "searching": false,
      "sort":true,
      "info": true,
      "bLengthChange": false,
      oLanguage: {
        sProcessing: '<i class="fa fa-spinner fa-spin fa-fw"></i> Loading...'
      },

      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "<?= url("rfq_request/json")?>",
        "type": "POST",
         "data": function(data) {
                                          data.no_penawaran = $("#no_penawaran").val();
                                                        data.nama_perusahaan = $("#nama_perusahaan").val();
                                                        data.nama_proyek = $("#nama_proyek").val();
                                                        data.nama_owner = $("#nama_owner").val();
                                                        data.untuk_perhatian = $("#untuk_perhatian").val();
                                                        data.email_pelanggan = $("#email_pelanggan").val();
                                                        data.no_hp = $("#no_hp").val();
                                                        data.kebutuhan_produk = $("#kebutuhan_produk").val();
                                                        data.suplai_batching = $("#suplai_batching").val();
                                                        data.jarak = $("#jarak").val();
                                                        data.sumber_dana = $("#sumber_dana:checked").val();
                                                        data.sektor = $("#sektor:checked").val();
                                                        data.jenis_proyek = $("#jenis_proyek").val();
                                                        data.tanggal_mulai = $("#tanggal_mulai").val();
                                                        data.tanggal_selesai = $("#tanggal_selesai").val();
                                                        data.koordinat = $("#koordinat").val();
                                                        data.batching_jarak = $("#batching_jarak").val();
                                                        data.metode_pembayaran = $("#metode_pembayaran:checked").val();
                                    }
              },

      //Set column definition initialisation properties.
      "columnDefs": [
        
					{
            "targets": 0,
            "orderable": false
          },

					{
            "targets": 1,
            "orderable": false
          },

					{
            "targets": 2,
            "orderable": false
          },

					{
            "targets": 3,
            "orderable": false
          },

					{
            "targets": 4,
            "orderable": false
          },

					{
            "targets": 5,
            "orderable": false
          },

					{
            "targets": 6,
            "orderable": false
          },

					{
            "targets": 7,
            "orderable": false
          },

					{
            "targets": 8,
            "orderable": false
          },

					{
            "targets": 9,
            "orderable": false
          },

					{
            "targets": 10,
            "orderable": false
          },

					{
            "targets": 11,
            "orderable": false
          },

					{
            "targets": 12,
            "orderable": false
          },

					{
            "targets": 13,
            "orderable": false
          },

					{
            "targets": 14,
            "orderable": false
          },

					{
            "targets": 15,
            "orderable": false
          },

					{
            "targets": 16,
            "orderable": false
          },

        {
          "className": "text-center",
          "orderable": false,
          "targets": 17
        },
      ],
    });

    $("#reload").click(function() {
                        $("#no_penawaran").val("");
                  $("#nama_perusahaan").val("");
                  $("#nama_proyek").val("");
                  $("#nama_owner").val("");
                  $("#untuk_perhatian").val("");
                  $("#email_pelanggan").val("");
                  $("#no_hp").val("");
                  $("#kebutuhan_produk").val("");
                  $("#suplai_batching").val("");
                  $("#jarak").val("");
                  $("#sumber_dana").val("");
                  $("#sektor").val("");
                  $("#jenis_proyek").val("");
                  $("#tanggal_mulai").val("");
                  $("#tanggal_selesai").val("");
                  $("#koordinat").val("");
                  $("#batching_jarak").val("");
                  $("#metode_pembayaran").val("");
                    table.ajax.reload();
    });

          $(document).on("click", "#filter-show", function(e) {
        e.preventDefault();
        $(".content-filter").slideDown();
      });

      $(document).on("click", "#filter", function(e) {
        e.preventDefault();
        $("#table").DataTable().ajax.reload();
      })

      $(document).on("click", "#filter-cancel", function(e) {
        e.preventDefault();
        $(".content-filter").slideUp();
      });
    
    $(document).on("click", "#delete", function(e) {
      e.preventDefault();
      $('.modal-dialog').addClass('modal-sm');
      $("#modalTitle").text('<?=cclang("confirm")?>');
      $('#modalContent').html(`<p class="mb-4"><?=cclang("delete_description")?></p>
                              <div class="pull-right">
  														<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'><?=cclang("cancel")?></button>
  	                          <button type='button' class='btn btn-primary btn-sm' id='ya-hapus' data-id=` + $(this).attr('alt') + `  data-url=` + $(this).attr('href') + `><?=cclang("delete_action")?></button>
  														</div>`);
      $("#modalGue").modal('show');
    });


    $(document).on('click', '#ya-hapus', function(e) {
      $(this).prop('disabled', true)
        .text('Processing...');
      $.ajax({
        url: $(this).data('url'),
        type: 'POST',
        cache: false,
        dataType: 'json',
        success: function(json) {
          $('#modalGue').modal('hide');
          swal(json.msg, {
            icon: json.type_msg
          });
          $('#table').DataTable().ajax.reload();
        }
      });
    });


  });
</script>