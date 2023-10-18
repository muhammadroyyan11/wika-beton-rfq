<div class="row">
  <div class="col-md-12 col-xl-10 mx-auto animated fadeIn delay-2s">
    <div class="card m-b-30">
      <div class="card-header bg-primary text-white">
        <?=ucwords($title_module)?>
      </div>
      <div class="card-body">
          <form action="<?=$action?>" id="form" autocomplete="off">
          
          <div class="form-group">
            <label>Name company</label>
            <input type="text" class="form-control form-control-sm" placeholder="Name company" name="name_company" id="name_company" value="<?=$name_company?>">
          </div>
        
          <div class="form-group">
            <label>Visi</label>
            <textarea class="form-control text-editor" rows="3" data-original-label="visi" name="visi" id="visi"><?=$visi?></textarea>
          </div>
        
          <div class="form-group">
            <label>Misi</label>
            <textarea class="form-control text-editor" rows="3" data-original-label="misi" name="misi" id="misi"><?=$misi?></textarea>
          </div>
        
          <div class="form-group">
            <label>Desc Company</label>
            <textarea class="form-control text-editor" rows="3" data-original-label="desc_company" name="desc_company" id="desc_company"><?=$desc_company?></textarea>
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
