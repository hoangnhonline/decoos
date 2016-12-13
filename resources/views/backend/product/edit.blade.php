@extends('layout.backend')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sản phẩm    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('product.index') }}">Sản phẩm</a></li>
      <li class="active">Chỉnh sửa</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('product.index', ['loai_id' => $detail->loai_id, 'cate_id' => $detail->cate_id]) }}" style="margin-bottom:5px">Quay lại</a>
    <a class="btn btn-primary btn-sm" href="{{ route('chi-tiet', $detail->slug_vi ) }}" target="_blank" style="margin-top:-6px"><i class="fa fa-eye" aria-hidden="true"></i> Xem</a>
    <form role="form" method="POST" action="{{ route('product.update') }}" id="dataForm">
    <div class="row">
      <!-- left column -->
      <input type="hidden" name="id" value="{{ $detail->id }}">
      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Chỉnh sửa</h3>
          </div>
          <!-- /.box-header -->               
            {!! csrf_field() !!}          
            <div class="box-body">
                @if(Session::has('message'))
                <p class="alert alert-info" >{{ Session::get('message') }}</p>
                @endif
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin VI</a></li>
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
                            @foreach( $loaiSpArr as $value )
                            <option value="{{ $value->id }}"
                            <?php 
                            if( old('loai_id') && old('loai_id') == $value->id ){ 
                              echo "selected";
                            }else if( $detail->loai_id == $value->id ){
                              echo "selected";
                            }else{
                              echo "";
                            }
                            ?>

                            >{{ $value->name }}</option>
                            @endforeach
                          </select>
                        </div>
                          <div class="form-group col-md-6 none-padding pleft-5">
                          <label for="email">Danh mục con<span class="red-star">*</span></label>

                          <select class="form-control" name="cate_id" id="cate_id">
                            <option value="">--Chọn--</option>
                            @foreach( $cateArr as $value )
                            <option value="{{ $value->id }}" 
                              <?php 
                            if( old('cate_id') && old('cate_id') == $value->id ){ 
                              echo "selected";
                            }else if( $detail->cate_id == $value->id ){
                              echo "selected";
                            }else{
                              echo "";
                            }
                            ?>
                            >{{ $value->name }}</option>
                            @endforeach
                          </select>
                        </div>  
                        <div class="form-group" >                  
                          <label>Mã <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="code" id="code" value="{{ old('code') ? old('code') : $detail->code }}">
                        </div>
                        <div class="form-group" >                  
                          <label>Tên <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name_vi" id="name_vi" value="{{ old('name') ? old('name_vi') : $detail->name_vi }}">
                        </div>
                        <div class="form-group">                  
                          <label>Slug <span class="red-star">*</span></label>                  
                          <input type="text" class="form-control" name="slug_vi" id="slug_vi" value="{{ old('slug_vi') ? old('slug_vi') : $detail->slug_vi }}">
                        </div>                        
                        <div class="col-md-6 none-padding">
                          <div class="checkbox">
                              <label><input type="checkbox" name="is_hot" value="1" {{ $detail->is_hot == 1 ? "checked" : "" }}> Sản phẩm HOT </label>
                          </div>                          
                        </div>
                        <div class="col-md-6 none-padding pleft-5">
                            <div class="checkbox">
                              <label><input type="checkbox" name="is_sale" value="1" {{ $detail->is_sale == 1 ? "checked" : "" }}> Sản phẩm sale </label>
                          </div>
                        </div>
                        <div class="form-group" >                  
                            <label>Giá<span class="red-star">*</span></label>
                            <input type="text" class="form-control" name="price" id="price" value="{{ old('price') ? old('price') : $detail->price}}">
                        </div>
                        <div class="form-group col-md-6 none-padding" >                  
                            <label>Giá sale</label>
                            <input type="text" class="form-control" name="price_sale" id="price_sale" value="{{ old('price_sale') ? old('price_sale') : $detail->price_sale }}">
                        </div>
                        <div class="form-group col-md-6 none-padding pleft-5" >                  
                            <label>Phần trăm sale (%) </label>
                            <input type="text" class="form-control" name="sale_percent" id="sale_percent" value="{{ old('price_sale') ? old('sale_percent') : $detail->sale_percent }}">
                        </div>
                        <div class="form-group">
                          <label>Chi tiết</label>
                          <textarea class="form-control" rows="10" name="content_vi" id="content_vi">{{ old('content_vi') ? old('content_vi') : $detail->content_vi }}</textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end thong tin co ban-->                    
                    <div role="tabpanel" class="tab-pane" id="homeEn">                          
                        <div class="form-group" >                  
                          <label>Name <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name_en" id="name_en" value="{{ old('name_en') ? old('name_en') : $detail->name_en }}">
                        </div>
                        <div class="form-group">                  
                          <label>Slug <span class="red-star">*</span></label>                  
                          <input type="text" class="form-control" name="slug_en" id="slug_en" value="{{ old('slug_en') ? old('slug_en') : $detail->slug_en }}">
                        </div>                        
                        
                        <div class="form-group">
                          <label>Detail</label>
                          <textarea class="form-control" rows="10" name="content_en" id="content_en">{{ old('content_en') ? old('content_en') : $detail->content_en }}</textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end thong tin co ban-->       
                     <div role="tabpanel" class="tab-pane" id="settings">
                        <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                         
                          <div class="col-md-12" style="text-align:center">                            
                            
                            <input type="file" id="file-image"  style="display:none" multiple/>
                         
                            <button class="btn btn-primary" id="btnUploadImage" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                            <div class="clearfix"></div>
                            <div id="div-image" style="margin-top:10px">                              
                              @if( $hinhArr )
                                @foreach( $hinhArr as $k => $hinh)
                                  <div class="col-md-3">
                                    <img class="img-thumbnail" src="{{ Helper::showImage($hinh) }}" style="width:100%">
                                    <div class="checkbox">                                   
                                      <label><input type="radio" name="thumbnail_id" class="thumb" value="{{ $k }}" {{ $detail->thumbnail_id == $k ? "checked" : "" }}> Ảnh đại diện </label>
                                      <button class="btn btn-danger btn-sm remove-image" type="button" data-value="{{  $hinh }}" data-id="{{ $k }}" >Xóa</button>
                                    </div>
                                    <input type="hidden" name="image_id[]" value="{{ $k }}">
                                  </div>
                                @endforeach
                              @endif

                            </div>
                          </div>
                          <div style="clear:both"></div>
                        </div>

                     </div><!--end hinh anh-->                   
                  </div>

                </div>
                  
            </div>
            <div class="box-footer">            
              <button type="button" class="btn btn-default" id="btnLoading" style="display:none"><i class="fa fa-spin fa-spinner"></i></button>
              <button type="submit" class="btn btn-primary" id="btnSave">Lưu</button>
              <a class="btn btn-default" class="btn btn-primary" href="{{ route('product.index', ['loai_id' => $detail->loai_id, 'cate_id' => $detail->cate_id])}}">Hủy</a>
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
              <input type="hidden" name="meta_id" value="{{ $detail->meta_id }}">
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
                            <input type="text" class="form-control" name="meta_title_vi" id="meta_title_vi" value="{{ !empty((array)$meta) ? $meta->title_vi : "" }}">
                          </div>
                          <!-- textarea -->
                          <div class="form-group">
                            <label>Thẻ desciption</label>
                            <textarea class="form-control" rows="6" name="meta_description_vi" id="meta_description_vi">{{ !empty((array)$meta) ? $meta->description_vi : "" }}</textarea>
                          </div>  

                          <div class="form-group">
                            <label>Thẻ keywords</label>
                            <textarea class="form-control" rows="4" name="meta_keywords_vi" id="meta_keywords_vi">{{ !empty((array)$meta) ? $meta->keywords_vi : "" }}</textarea>
                          </div>  
                          <div class="form-group">
                            <label>Nội dung tùy chỉnh</label>
                            <textarea class="form-control" rows="6" name="custom_text_vi" id="custom_text_vi">{{ !empty((array)$meta) ? $meta->custom_text_vi : ""  }}</textarea>
                          </div>
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="seoEn">                        
                        <div class="form-group">
                            <label>Meta title </label>
                            <input type="text" class="form-control" name="meta_title_en" id="meta_title_en" value="{{ !empty((array)$meta) ? $meta->title_en : "" }}">
                          </div>
                          <!-- textarea -->
                          <div class="form-group">
                            <label>Meta desciption</label>
                            <textarea class="form-control" rows="6" name="meta_description_en" id="meta_description_en">{{ !empty((array)$meta) ? $meta->description_en : "" }}</textarea>
                          </div>  

                          <div class="form-group">
                            <label>Meta keywords</label>
                            <textarea class="form-control" rows="4" name="meta_keywords_en" id="meta_keywords_en">{{ !empty((array)$meta) ? $meta->keywords_en : "" }}</textarea>
                          </div>  
                          <div class="form-group">
                            <label>Custom text</label>
                            <textarea class="form-control" rows="6" name="custom_text_en" id="custom_text_en">{{ !empty((array)$meta) ? $meta->custom_text_en : ""  }}</textarea>
                          </div>
                    </div><!--end thong tin co ban--> 
                   
                  </div>

                </div>             
            
          </div>
        <!-- /.box -->     

      </div>
      <!--/.col (left) -->      
    </div>
<input type="hidden" name="image_pro" id="image_pro" value="{{ $detail->image_pro }}"/> 
<input type="hidden" name="pro_name" id="pro_name" value="{{ old('pro_name') }}"/>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@include ('backend.product.search-modal')
<input type="hidden" id="route_upload_tmp_image_multiple" value="{{ route('image.tmp-upload-multiple') }}">
<input type="hidden" id="route_upload_tmp_image" value="{{ route('image.tmp-upload') }}">
<style type="text/css">
  .nav-tabs>li.active>a{
    color:#FFF !important;
    background-color: #3C8DBC !important;
  }

</style>
@stop
@section('javascript_page')
<script type="text/javascript">
function filterAjax(type){  
  var str_params = $('#formSearchAjax').serialize();
  $.ajax({
          url: '{{ route("product.ajax-search") }}',
          type: "POST",
          async: true,      
          data: str_params + '&search_type=' + type,
          beforeSend:function(){
            $('#contentSearch').html('<div style="text-align:center"><img src="{{ URL::asset('admin/dist/img/loading.gif')}}"></div>');
          },        
          success: function (response) {
            $('#contentSearch').html(response);
            $('#myModalSearch').modal('show');
            //$('.selectpicker').selectpicker();            
            //check lai nhung checkbox da checked
            if( type == "phukien"){
              var str_checked = $('#str_sp_phukien').val();
              tmpArr = str_checked.split(",");              
              for (i = 0; i < tmpArr.length; i++) { 
                  $('input.checkSelect[value="'+ tmpArr[i] +'"]').prop('checked', true);
              }
            }else if( type == "tuongtu"){
              var str_checked = $('#str_sp_tuongtu').val();
              tmpArr = str_checked.split(",");              
              for (i = 0; i < tmpArr.length; i++) { 
                  $('input.checkSelect[value="'+ tmpArr[i] +'"]').prop('checked', true);
              }
            }else{
              var str_checked = $('#str_sp_sosanh').val();
              tmpArr = str_checked.split(",");              
              for (i = 0; i < tmpArr.length; i++) { 
                  $('input.checkSelect[value="'+ tmpArr[i] +'"]').prop('checked', true);
              }
            }
          }
    });
}
$(document).on('click', '.remove-image', function(){
/*  var obj = $(this);
  var is_thumbnail = obj.parents('col-md-3').find("input[name=thumbnail_id]").is(":checked");
  console.log(is_thumbnail);
  */
  if( confirm ("Bạn có chắc chắn không ?")){
    $(this).parents('.col-md-3').remove();
  }
});
$(document).on('click', '.checkSelect', function(){
  var type = $('#search_type').val();
  var obj = $(this);
  if( type == "phukien"){
    var str_sp_phukien = $('#str_sp_phukien').val();
    if(obj.prop('checked') == true){
      str_sp_phukien += obj.val() + ',';
    }else{
      var str = obj.val() + ',';
      str_sp_phukien = str_sp_phukien.replace(str, '');
    }
    $('#str_sp_phukien').val(str_sp_phukien);
  }else if( type == "tuongtu"){
    var str_sp_tuongtu = $('#str_sp_tuongtu').val();
    if(obj.prop('checked') == true){
      str_sp_tuongtu += obj.val() + ',';
    }else{
      var str = obj.val() + ',';
      str_sp_tuongtu = str_sp_tuongtu.replace(str, '');
    }
    $('#str_sp_tuongtu').val(str_sp_tuongtu);
  }else{ // so sanh
    var str_sp_sosanh = $('#str_sp_sosanh').val();
    if(obj.prop('checked') == true){
      str_sp_sosanh += obj.val() + ',';
    }else{
      var str = obj.val() + ',';
      str_sp_sosanh = str_sp_sosanh.replace(str, '');
    }
    $('#str_sp_sosanh').val(str_sp_sosanh);
  }
});
$(document).on('click', '.btnRemoveRelated', function(){
  if( confirm ("Bạn có chắc chắn không ?")){
    var obj = $(this);
    var type = obj.attr('data-type');
    var value = obj.attr('data-value');
    var str_sp = $('#str_sp_' + type).val();
    console.log(str_sp);
      var str = value + ',';
      console.log(value);
      console.log(str);
      str_sp = str_sp.replace(str, '');
    console.log(str_sp);
    $('#str_sp_' + type).val(str_sp);
    $('#row-'+ type + '-' + value).remove();
    



  }
});
$(document).on('change', '#loai_id_search, #cate_id_search', function(){
  filterAjax($('#search_type').val());
});
$(document).on('click', '#btnSearchAjax', function(){
  filterAjax($('#search_type').val());
});
$(document).on('keypress', '#name_search', function(e){
  if(e.which == 13) {
      e.preventDefault();
      filterAjax($('#search_type').val());
  }
});
$(document).on('click', 'button.btnSaveSearch',function(){
  var type = $('#search_type').val();  
  if (type == "phukien"){
    str_value = $('#str_sp_phukien').val();
  }else if( type == "tuongtu"){
    str_value = $('#str_sp_tuongtu').val();
  }else{
    str_value = $('#str_sp_sosanh').val();
  }
  if( str_value != '' ){
    
    $.ajax({
          url: '{{ route("product.ajax-save-related") }}',
          type: "POST",
          async: true,      
          data: {          
            type : type,    
            str_value : str_value,
            _token: "{{ csrf_token() }}"
          },     
          success: function (response) {
            if (type == "phukien"){
              
              $('#dataPhuKien').html(response);

            }else if( type == "tuongtu"){

              $('#dataTuongTu').html(response);

            }else{

              $('#dataSoSanh').html(response);

            }
            $('#myModalSearch').modal('hide');
            
          }
    });
    
  }else{
    alert('Vui lòng chọn ít nhất 1 sản phẩm.');
    return false;
  }

});
    $(document).ready(function(){
      $('#btnUploadPro').click(function(){        
        $('#file-pro').click();
      });      
      var files = "";
      $('#file-pro').change(function(e){
         files = e.target.files;
         
         if(files != ''){
           var dataForm = new FormData();        
          $.each(files, function(key, value) {
             dataForm.append('file', value);
          });   
          
          dataForm.append('date_dir', 1);
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
                $('#thumbnail_image_pro').attr('src',$('#upload_url').val() + response.image_path);
                $( '#image_pro' ).val( response.image_path );
                $( '#pro_name' ).val( response.image_name );
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
      $('.btnLienQuan').click(function(){
        var type = $(this).attr('data-value');
        if( type == "phukien") {
          $('#label-search').html("phụ kiện đi kèm");
        }else if( type == "tuongtu" ){
          $('#label-search').html("sản phẩm tương tự");
        }else{
          $('#label-search').html("sản phẩm so sánh");
        }
        filterAjax(type);
      });      
      $('#loai_id').change(function(){
        location.href="{{ route('product.create') }}?loai_id=" + $(this).val();
      })
      $(".select2").select2();
      $('#dataForm').submit(function(){
        /*var no_cate = $('input[name="category_id[]"]:checked').length;
        if( no_cate == 0){
          swal("Lỗi!", "Chọn ít nhất 1 thể loại!", "error");
          return false;
        }
        var no_country = $('input[name="country_id[]"]:checked').length;
        if( no_country == 0){
          swal("Lỗi!", "Chọn ít nhất 1 quốc gia!", "error");
          return false;
        }        
        */
        //$('#btnSave').hide();
        $('#btnLoading').show();
      });
      var editor = CKEDITOR.replace( 'chi_tiet',{
          language : 'vi',
          height: 300,
          filebrowserBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=files') }}",
          filebrowserImageBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=images') }}",
          filebrowserFlashBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=flash') }}",
          filebrowserUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=files') }}",
          filebrowserImageUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=images') }}",
          filebrowserFlashUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=flash') }}"
      });
      var editor2 = CKEDITOR.replace( 'khuyen_mai',{
          language : 'vi',
          height : 100,
          toolbarGroups : [
            
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
            { name: 'links', groups: [ 'links' ] },           
            '/',
            
          ]
      });
      var editor3 = CKEDITOR.replace( 'mo_ta',{
          language : 'vi',
          height : 100,
          toolbarGroups : [
            
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
            { name: 'links', groups: [ 'links' ] },           
            '/',
            
          ]
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
       $('#name_extend').change(function(){
         var name = $.trim( $(this).val() );
         if( name != '' && $('#slug_extend').val() == ''){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug_extend').val( response.str );
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
@stop
