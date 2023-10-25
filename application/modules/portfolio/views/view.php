<div class="row">
  <div class="col-md-12 col-xl-10 mx-auto animated fadeIn delay-2s">
    <div class="card-header bg-primary text-white">
      <?=ucwords($title_module)?>
    </div>
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
        <tr>
          <td>Name portfolio</td>
          <td><?=$name_portfolio?></td>
        </tr>
        <tr>
          <td>Desc portfolio</td>
          <td><?=$desc_portfolio?></td>
        </tr>
        <tr>
          <td>Image</td>
          <td><?=is_image($image)?></td>
        </tr>
        <tr>
          <td>Client name</td>
          <td><?=$client_name?></td>
        </tr>
        <tr>
          <td>Category</td>
          <td><?=$category?></td>
        </tr>
      <tr>
        <td>Project date</td>
        <td><?=$project_date != "" ? date('d-m-Y',strtotime($project_date)):""?></td>
      </tr>
        </table>

        <a href="<?=url($this->uri->segment(2))?>" class="btn btn-sm btn-danger mt-3"><?=cclang("back")?></a>
      </div>
    </div>
  </div>
</div>
