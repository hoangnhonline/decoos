<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sản phẩm    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo e(route('product.index')); ?>">Sản phẩm</a></li>
      <li class="active">Thêm mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="<?php echo e(route('product.index')); ?>" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="<?php echo e(route('product.store')); ?>" id="dataForm">
    <div class="row">
      <!-- left column -->

      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thêm mới</h3>
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
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin VN</a></li>
                    <li role="presentation"><a href="#homeEn" aria-controls="homeEn" role="tab" data-toggle="tab">Thông tin EN</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hình ảnh</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="form-group col-md-6 none-padding">
                          <label for="email">Danh mục cha<span class="red-star">*</span></label>
                          <select class="form-control" name="loai_id" id="loai_id">
                            <option value="">--Chọn--</option>
                            <?php foreach( $loaiSpArr as $value ): ?>
                            <option value="<?php echo e($value->id); ?>" <?php echo e($value->id == old('loai_id') || $value->id == $loai_id ? "selected" : ""); ?>><?php echo e($value->name_vi); ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                          <div class="form-group col-md-6 none-padding pleft-5">
                          <label for="email">Danh mục con<span class="red-star">*</span></label>

                          <select class="form-control" name="cate_id" id="cate_id">
                            <option value="">--Chọn--</option>
                            <?php foreach( $cateArr as $value ): ?>
                            <option value="<?php echo e($value->id); ?>" <?php echo e($value->id == old('cate_id') || $value->id == $cate_id ? "selected" : ""); ?>><?php echo e($value->name_vi); ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>  
                        <div class="form-group" >                  
                          <label>Mã <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="code" id="code" value="<?php echo e(old('code')); ?>">
                        </div>
                        <div class="form-group" >                  
                          <label>Tên <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name_vi" id="name_vi" value="<?php echo e(old('name_vi')); ?>">
                        </div>
                        <div class="form-group">                  
                          <label>Slug <span class="red-star">*</span></label>                  
                          <input type="text" class="form-control" name="slug_vi" id="slug_vi" value="<?php echo e(old('slug_vi')); ?>">
                        </div>                       
                        <div class="col-md-6 none-padding">
                          <div class="checkbox">
                              <label><input type="checkbox" name="is_hot" alue="1"> Sản phẩm HOT </label>
                          </div>                          
                        </div>
                        <div class="col-md-6 none-padding pleft-5">
                            <div class="checkbox">
                              <label><input type="checkbox" name="is_sale" alue="1"> Sản phẩm SALE </label>
                          </div>
                        </div>
                        <div class="form-group" >                  
                            <label>Giá<span class="red-star">*</span></label>
                            <input type="text" class="form-control" name="price" id="price" value="<?php echo e(old('price')); ?>">
                        </div>
                        <div class="form-group col-md-6 none-padding" >                  
                            <label>Giá sale</label>
                            <input type="text" class="form-control" name="price_sale" id="price_sale" value="<?php echo e(old('price_sale')); ?>">
                        </div>
                        <div class="form-group col-md-6 none-padding pleft-5" >                  
                            <label>Phần trăm sale (%) </label>
                            <input type="text" class="form-control" name="sale_percent" id="sale_percent" value="<?php echo e(old('price_sale')); ?>">
                        </div>
                         <div class="form-group">
                          <label>Chi tiết</label>
                          <textarea class="form-control" rows="10" name="content_vi" id="content_vi"><?php echo e(old('content_vi')); ?></textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="homeEn">                        
                        <div class="form-group" >                  
                          <label>Name <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name_en" id="name_en" value="<?php echo e(old('name_en')); ?>">
                        </div>
                        <div class="form-group">                  
                          <label>Slug <span class="red-star">*</span></label>                  
                          <input type="text" class="form-control" name="slug_en" id="slug_en" value="<?php echo e(old('slug_en')); ?>">
                        </div>
                         <div class="form-group">
                          <label>Detail</label>
                          <textarea class="form-control" rows="10" name="content_en" id="content_en"><?php echo e(old('content_en')); ?></textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end thong tin co ban--> 
                     <div role="tabpanel" class="tab-pane" id="settings">
                        <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                         
                          <div class="col-md-12" style="text-align:center">                            
                            
                            <input type="file" id="file-image"  style="display:none" multiple/>
                         
                            <button class="btn btn-primary" id="btnUploadImage" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                            <div class="clearfix"></div>
                            <div id="div-image" style="margin-top:10px"></div>
                          </div>
                          <div style="clear:both"></div>
                        </div>

                     </div><!--end hinh anh--> 
                  </div>

                </div>
                  
            </div>
            <div class="box-footer">             
              <button type="button" class="btn btn-default" id="btnLoading" style="display:none"><i class="fa fa-spin fa-spinner"></i></button>
              <button type="submit" class="btn btn-primary" id="btnSave" onclick="return validateData(); ">Lưu</button>
              <a class="btn btn-default" class="btn btn-primary" href="<?php echo e(route('product.index')); ?>">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-4">      
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
 <input type="hidden" name="image_pro" id="image_pro" value="<?php echo e(old('image_pro')); ?>"/> 
 <input type="hidden" name="pro_name" id="pro_name" value="<?php echo e(old('pro_name')); ?>"/>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<input type="hidden" id="route_upload_tmp_image_multiple" value="<?php echo e(route('image.tmp-upload-multiple')); ?>">
<input type="hidden" id="route_upload_tmp_image" value="<?php echo e(route('image.tmp-upload')); ?>">
<style type="text/css">
  .nav-tabs>li.active>a{
    color:#FFF !important;
    background-color: #3C8DBC !important;
  }

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript_page'); ?>
<script type="text/javascript">
$(document).on('click', '.remove-image', function(){
  if( confirm ("Bạn có chắc chắn không ?")){
    $(this).parents('.col-md-3').remove();
  }
});
function validateData(){
  if($('#loai_id').val() == 0){
    alert('Chưa chọn danh mục cha.'); return false;
  }
  if($('#cate_id').val() == 0){
    alert('Chưa chọn danh mục con.'); return false; 
  }
  return true;  
}
    $(document).ready(function(){
         
      $('#loai_id').change(function(){
        var loai_id = $(this).val();
        
        $.ajax({
              url: "<?php echo e(route('cate.ajax-list-by-parent')); ?>",
              type: "POST",
              async: false,      
              data: {
                loai_id : loai_id
              },              
              success: function (response) {
                $('#cate_id').html(response);              
              }              
            });
      });
      $(".select2").select2();
      $('#dataForm').submit(function(){
        
        if( $('#loai_id').val() == 0){
          swal("Lỗi!", "Chưa chọn danh mục cha", "error");
          return false;
        }
       
        if( $('#cate_id').val() == 0){
          swal("Lỗi!", "Chưa chọn danh mục con", "error");
          return false;
        }  
        $('#btnSave').hide();
        $('#btnLoading').show();
      });
      var editor = CKEDITOR.replace( 'content_vi',{
          language : 'vi',
          height: 300,
          filebrowserBrowseUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/browse.php?type=files')); ?>",
          filebrowserImageBrowseUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/browse.php?type=images')); ?>",
          filebrowserFlashBrowseUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/browse.php?type=flash')); ?>",
          filebrowserUploadUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/upload.php?type=files')); ?>",
          filebrowserImageUploadUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/upload.php?type=images')); ?>",
          filebrowserFlashUploadUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/upload.php?type=flash')); ?>"
      });
      var editor2 = CKEDITOR.replace( 'content_en',{
          language : 'vi',
          height: 300,
          filebrowserBrowseUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/browse.php?type=files')); ?>",
          filebrowserImageBrowseUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/browse.php?type=images')); ?>",
          filebrowserFlashBrowseUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/browse.php?type=flash')); ?>",
          filebrowserUploadUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/upload.php?type=files')); ?>",
          filebrowserImageUploadUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/upload.php?type=images')); ?>",
          filebrowserFlashUploadUrl: "<?php echo e(URL::asset('/backend/dist/js/kcfinder/upload.php?type=flash')); ?>"
      });
      
      $('#btnUploadImage').click(function(){        
        $('#file-image').click();
      }); 
     
      var files = "";
      $('#file-image').change(function(e){
         files = e.target.files;
         
         if(files != ''){
           var dataForm = new FormData();        
          $.each(files, function(key, value) {
             dataForm.append('file[]', value);
          });   
          
          dataForm.append('date_dir', 0);
          dataForm.append('folder', 'tmp');

          $.ajax({
            url: $('#route_upload_tmp_image_multiple').val(),
            type: "POST",
            async: false,      
            data: dataForm,
            processData: false,
            contentType: false,
            success: function (response) {
                $('#div-image').append(response);
                if( $('input.thumb:checked').length == 0){
                  $('input.thumb').eq(0).prop('checked', true);
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
     

      $('#name_vi').change(function(){
         var name = $.trim( $(this).val() );
         if( name != '' ){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug_vi').val( response.str );
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
      $('#name_en').change(function(){
         var name = $.trim( $(this).val() );
         if( name != '' ){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug_en').val( response.str );
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