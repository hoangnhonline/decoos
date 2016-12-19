<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Danh mục cha      
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo e(route('loai-sp.index')); ?>">Danh mục cha</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default" href="<?php echo e(route('loai-sp.index')); ?>" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="<?php echo e(route('loai-sp.store')); ?>">
    <div class="row">
      <!-- left column -->

      <div class="col-md-7">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tạo mới</h3>
          </div>
          <!-- /.box-header -->               
            <?php echo csrf_field(); ?>


            <div class="box-body">
              <?php if(count($errors) > 0): ?>
                  <div class="alert alert-danger">
                      <ul>
                          <?php foreach($errors->all() as $error): ?>
                              <li><?php echo e($error); ?></li>
                          <?php endforeach; ?>
                      </ul>
                  </div>
              <?php endif; ?>
                 <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#infoVi" aria-controls="infoVi" role="tab" data-toggle="tab">VN</a></li>
                    <li role="presentation"><a href="#infoEn" aria-controls="infoEn" role="tab" data-toggle="tab">EN</a></li>                    
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="infoVi">
                           <!-- text input -->
                           
                        <div class="form-group">
                          <label>Tên danh mục <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name_vi" id="name_vi" value="<?php echo e(old('name_vi')); ?>">
                        </div>
                        <div class="form-group">
                          <label>Slug <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="slug_vi" id="slug_vi" value="<?php echo e(old('slug_vi')); ?>">
                        </div>
                          <div class="clearfix"></div>
                        <div class="form-group" style="margin-top:15px;padding-bottom:25px !important;">                         
                          <div class="checkbox col-md-12" >
                            <label>
                              <input type="checkbox" name="is_menu" value="1" <?php echo e(old('is_menu') == 1 ? "checked" : ""); ?>>
                              Hiện menu
                            </label>
                          </div>                 
                        </div>
                        <div class="clearfix"></div>
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Mô tả</label>
                          <textarea class="form-control" rows="4" name="description_vi" id="description_vi"><?php echo e(old('description_vi')); ?></textarea>
                        </div>
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="infoEn">                        
                          <!-- text input -->
                        <div class="form-group">
                          <label>Name <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name_en" id="name_en" value="<?php echo e(old('name_en')); ?>">
                        </div>
                        <div class="form-group">
                          <label>Slug <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="slug_en" id="slug_en" value="<?php echo e(old('slug_en')); ?>">
                        </div>                  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Description</label>
                          <textarea class="form-control" rows="4" name="description_en" id="description_en"><?php echo e(old('description_en')); ?></textarea>
                        </div>
                    </div><!--end thong tin co ban--> 
                   
                  </div>

                </div>       
                  
                
            </div>
            <!-- /.box-body -->        
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
              <a class="btn btn-default" class="btn btn-primary" href="<?php echo e(route('loai-sp.index')); ?>">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-5">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thông tin SEO</h3>
          </div>
          <!-- /.box-header -->
            <div class="box-body">
              <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#seoVi" aria-controls="seoVi" role="tab" data-toggle="tab">VN</a></li>
                    <li role="presentation"><a href="#seoEn" aria-controls="seoEn" role="tab" data-toggle="tab">EN</a></li>                    
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="seoVi">
                         <div class="form-group">
                            <label>Thẻ title </label>
                            <input type="text" class="form-control" name="meta_title_vi" id="meta_title_vi" value="<?php echo e(old('meta_title_vi')); ?>">
                          </div>
                          <!-- textarea -->
                          <div class="form-group">
                            <label>Thẻ desciption</label>
                            <textarea class="form-control" rows="6" name="meta_description_vi" id="meta_description_vi"><?php echo e(old('meta_description_vi')); ?></textarea>
                          </div>  

                          <div class="form-group">
                            <label>Thẻ keywords</label>
                            <textarea class="form-control" rows="4" name="meta_keywords_vi" id="meta_keywords_vi"><?php echo e(old('meta_keywords_vi')); ?></textarea>
                          </div>  
                          <div class="form-group">
                            <label>Nội dung tùy chỉnh</label>
                            <textarea class="form-control" rows="6" name="custom_text_vi" id="custom_text_vi"><?php echo e(old('custom_text_vi')); ?></textarea>
                          </div>
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="seoEn">                        
                        <div class="form-group">
                            <label>Meta title </label>
                            <input type="text" class="form-control" name="meta_title_en" id="meta_title_en" value="<?php echo e(old('meta_title_en')); ?>">
                          </div>
                          <!-- textarea -->
                          <div class="form-group">
                            <label>Meta desciption</label>
                            <textarea class="form-control" rows="6" name="meta_description_en" id="meta_description_en"><?php echo e(old('meta_description_en')); ?></textarea>
                          </div>  

                          <div class="form-group">
                            <label>Meta keywords</label>
                            <textarea class="form-control" rows="4" name="meta_keywords_en" id="meta_keywords_en"><?php echo e(old('meta_keywords_en')); ?></textarea>
                          </div>  
                          <div class="form-group">
                            <label>Custom text</label>
                            <textarea class="form-control" rows="6" name="custom_text_en" id="custom_text_en"><?php echo e(old('custom_text_en')); ?></textarea>
                          </div>
                    </div><!--end thong tin co ban--> 
                   
                  </div>

                </div>              
            
        </div>
        <!-- /.box -->     

      </div>
      <!--/.col (left) -->      
    </div>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<input type="hidden" id="route_upload_tmp_image" value="<?php echo e(route('image.tmp-upload')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript_page'); ?>
<script type="text/javascript">
    $(document).ready(function(){
      $('#btnUploadMau').click(function(){ 
        $('#file-mau').click();
      });
      $('#btnUploadKm').click(function(){ 
        $('#file-km').click();
      });
      $('#btnUploadIcon').click(function(){        
        $('#file-icon').click();
      });
      $('#btnUploadBanner').click(function(){        
        $('#file-banner').click();
      });
      var files = "";
      $('#file-mau').change(function(e){
         files = e.target.files;
         
         if(files != ''){
           var dataForm = new FormData();        
          $.each(files, function(key, value) {
             dataForm.append('file', value);
          });   
          
          dataForm.append('date_dir', 0);
          dataForm.append('folder', 'tmp');

          $.ajax({
            url: $('#route_upload_tmp_image').val(),
            type: "POST",
            async: false,      
            data: dataForm,
            processData: false,
            contentType: false,
            success: function (response) {
              if(response.image_path){
                $('#thumbnail_mau').attr('src',$('#upload_url').val() + response.image_path);
                $( '#icon_mau' ).val( response.image_path );
                $( '#image_name_mau' ).val( response.image_name);
              }
              console.log(response.image_path);
                //window.location.reload();
            },
            error: function(response){                             
                var errors = response.responseJSON;
                for (var key in errors) {
                  
                }
                //$('#btnLoading').hide();
                //$('#btnSave').show();
            }
          });
        }
      });
      var filesIcon = '';
      $('#file-icon').change(function(e){
         filesIcon = e.target.files;
         
         if(filesIcon != ''){
           var dataForm = new FormData();        
          $.each(filesIcon, function(key, value) {
             dataForm.append('file', value);
          });
          
          dataForm.append('date_dir', 0);
          dataForm.append('folder', 'tmp');

          $.ajax({
            url: $('#route_upload_tmp_image').val(),
            type: "POST",
            async: false,      
            data: dataForm,
            processData: false,
            contentType: false,
            success: function (response) {
              if(response.image_path){
                $('#thumbnail_icon').attr('src',$('#upload_url').val() + response.image_path);                
                $('#icon_url').val( response.image_path );
                $('#icon_name' ).val( response.image_name );
              }
            },
            error: function(response){                             
                var errors = response.responseJSON;
                for (var key in errors) {
                  
                }
                //$('#btnLoading').hide();
                //$('#btnSave').show();
            }
          });
        }
      });

      var filesKm = '';
      $('#file-km').change(function(e){
         filesKm = e.target.files;
         
         if(filesKm != ''){
           var dataForm = new FormData();        
          $.each(filesKm, function(key, value) {
             dataForm.append('file', value);
          });
          
          dataForm.append('date_dir', 0);
          dataForm.append('folder', 'tmp');

          $.ajax({
            url: $('#route_upload_tmp_image').val(),
            type: "POST",
            async: false,      
            data: dataForm,
            processData: false,
            contentType: false,
            success: function (response) {
              if(response.image_path){
                $('#thumbnail_km').attr('src',$('#upload_url').val() + response.image_path);
                $('#icon_km').val( response.image_path );
                $('#image_name_km' ).val( response.image_name );
              }
              console.log(response.image_path);
                //window.location.reload();
            },
            error: function(response){                             
                var errors = response.responseJSON;
                for (var key in errors) {
                  
                }
                //$('#btnLoading').hide();
                //$('#btnSave').show();
            }
          });
        }
      });

      var filesBanner = '';
      $('#file-banner').change(function(e){
         filesBanner = e.target.files;
         
         if(filesBanner != ''){
           var dataForm = new FormData();        
          $.each(filesBanner, function(key, value) {
             dataForm.append('file', value);
          });
          
          dataForm.append('date_dir', 0);
          dataForm.append('folder', 'tmp');

          $.ajax({
            url: $('#route_upload_tmp_image').val(),
            type: "POST",
            async: false,      
            data: dataForm,
            processData: false,
            contentType: false,
            success: function (response) {
              if(response.image_path){
                $('#thumbnail_banner').attr('src',$('#upload_url').val() + response.image_path);
                $('#banner_menu').val( response.image_path );
                $('#banner_name' ).val( response.image_name);
              }
              console.log(response.image_path);
                //window.location.reload();
            },
            error: function(response){                             
                var errors = response.responseJSON;
                for (var key in errors) {
                  
                }
                //$('#btnLoading').hide();
                //$('#btnSave').show();
            }
          });
        }
      });
      
      $('#name').change(function(){
         var name = $.trim( $(this).val() );
         if( name != '' && $('#slug').val() == ''){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug').val( response.str );
                }                
              },
              error: function(response){                             
                  var errors = response.responseJSON;
                  for (var key in errors) {
                    
                  }
                  //$('#btnLoading').hide();
                  //$('#btnSave').show();
              }
            });
         }
      });

    });
    
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>