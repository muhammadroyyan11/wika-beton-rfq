<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= ucwords($title_module) ?></h4>
                    <div class="pull-right">
                        <a href="<?= url('portfolio/add') ?>" class="btn btn-success btn-flat"><i
                                class="fa fa-file btn-icon-prepend"></i> Add</a>
                        <button type="button" id="filter-show" class="btn btn-primary btn-flat"><i
                                class="mdi mdi-backup-restore btn-icon-prepend"></i> Filter</button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <form autocomplete="off" class="content-filter">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" id="client_name" class="form-control form-control-sm"
                                        placeholder="Client name" />
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" id="category" class="form-control form-control-sm"
                                        placeholder="Category" />
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="date" id="project_date" class="form-control form-control-sm"
                                        placeholder="Project date" />
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" id="pic" class="form-control form-control-sm"
                                        placeholder="Pic" />
                                </div>

                            </div>
                            <div class="pull-right">
                                <button type='button' class='btn btn-default btn-sm'
                                    id="filter-cancel"><?= cclang('cancel') ?></button>
                                <button type="button" class="btn btn-primary btn-sm" id="filter">Filter</button>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display" name="table" id="table"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Name portfolio</th>
                                        <th>Desc portfolio</th>
                                        <th>Image</th>
                                        <th>Client name</th>
                                        <th>Category</th>
                                        <th>Project date</th>
                                        <th>Pic</th>
                                        <th>Jabatan</th>
                                        <th>Rate quality</th>
                                        <th>Rate awareness</th>
                                        <th>Rate service</th>
                                        <th>Rate professionalism</th>
                                        <th>Rate facility</th>
                                        <th>Rate project focus</th>
                                        <th>Rate safety aspect</th>
                                        <th>Rate competitiveness</th>
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
            "info": true,
            "bLengthChange": false,
            oLanguage: {
                sProcessing: '<i class="fa fa-spinner fa-spin fa-fw"></i> Loading...'
            },

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?= url('portfolio/json') ?>",
                "type": "POST",
                "data": function(data) {
                    data.client_name = $("#client_name").val();
                    data.category = $("#category").val();
                    data.project_date = $("#project_date").val();
                    data.pic = $("#pic").val();
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
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[7]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "targets": 8,
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[8]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "targets": 9,
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[9]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "targets": 10,
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[10]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "targets": 11,
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[11]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "targets": 12,
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[12]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "targets": 13,
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[13]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "targets": 14,
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[14]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "targets": 15,
                    "orderable": false,
                    "render": function(data, type, row) {
                        var stars = '';
                        for (var i = 0; i < row[15]; i++) {
                            stars += '<i class="ion-ios7-star"></i>';
                        }
                        return stars;
                    }
                },

                {
                    "className": "text-center",
                    "orderable": false,
                    "targets": 16
                },
            ],
        });

        $("#reload").click(function() {
            $("#client_name").val("");
            $("#category").val("");
            $("#project_date").val("");
            $("#pic").val("");
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
            $("#modalTitle").text('<?= cclang('confirm') ?>');
            $('#modalContent').html(`<p class="mb-4"><?= cclang('delete_description') ?></p>
                              <div class="pull-right">
  														<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'><?= cclang('cancel') ?></button>
  	                          <button type='button' class='btn btn-primary btn-sm' id='ya-hapus' data-id=` + $(this)
                .attr('alt') + `  data-url=` + $(this).attr('href') + `><?= cclang('delete_action') ?></button>
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
