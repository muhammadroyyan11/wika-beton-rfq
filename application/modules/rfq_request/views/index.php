<!-- Zero configuration table -->
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?= ucwords($title_module) ?></h4>
          <div class="pull-right">
            <!-- <a href="<?= url("rfq_request/add") ?>" class="btn btn-success btn-flat"><i class="fa fa-file btn-icon-prepend"></i> Add</a> -->
            <button type="button" id="filter-show" class="btn btn-primary btn-flat"><i class="mdi mdi-backup-restore btn-icon-prepend"></i> Filter</button>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <?= $this->session->flashdata('pesan'); ?>
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

              </div>
              <div class="pull-right">
                <button type='button' class='btn btn-default btn-sm' id="filter-cancel"><?= cclang("cancel") ?></button>
                <button type="button" class="btn btn-primary btn-sm" id="filter">Filter</button>
              </div>
            </form>
            <div class="table-responsive">
              <table class="table display table-striped" name="table" id="table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
                    <th>No Id</th>
                    <th>No penawaran</th>
                    <th>Status penawaran</th>
                    <th>Pelanggan</th>
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
      "order": [0,'ASC'], //Initial no order.
      "ordering": true,
      "searching": false,
      "sort": true,
      "info": true,
      "bLengthChange": false,
      oLanguage: {
        sProcessing: '<i class="fa fa-spinner fa-spin fa-fw"></i> Loading...'
      },

      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "<?= url("rfq_request/json") ?>",
        "type": "POST",
        "data": function(data) {
          data.id = $("#id").val();
          data.no_penawaran = $("#no_penawaran").val();
          data.status_penawaran = $("#status_penawaran").val();
          data.pelanggan = $("#pelanggan").val();
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
          "orderable": true
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
          "targets": 17,
          "orderable": false
        },

        
        {
          "targets": 18,
          "orderable": false
        },
        
        {
          "targets": 18,
          "orderable": false
        },

        {
          "className": "text-center",
          "orderable": false,
          "targets": 19
        },
      ],
    });

    $("#reload").click(function() {
      $("#no_penawaran").val("");
      $("#status_penawaran").val("");
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
      $("#modalTitle").text('<?= cclang("confirm") ?>');
      $('#modalContent').html(`<p class="mb-4"><?= cclang("delete_description") ?></p>
                              <div class="pull-right">
  														<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'><?= cclang("cancel") ?></button>
  	                          <button type='button' class='btn btn-primary btn-sm' id='ya-hapus' data-id=` + $(this).attr('alt') + `  data-url=` + $(this).attr('href') + `><?= cclang("delete_action") ?></button>
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