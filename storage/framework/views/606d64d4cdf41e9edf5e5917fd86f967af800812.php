<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.partials.main-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.partials.home-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo e(route('home')); ?>" title="Trở về trang chủ">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="<?php echo e(route('gio-hang')); ?>" title="Giỏ hàng">Giỏ hàng</a>
        </div>
        <!-- ./breadcrumb -->
        <div class="page-content container">
          <!-- row -->
          <div class="cart-page row">

            <!-- Center colunm-->
            <div class="col-lg-8 col-md-12 cart-col-1">

                <div class="row title visible-md-block visible-lg-block">
                    <div class="col-lg-9 col-md-9">
                        <h5>Sản phẩm trong giỏ hàng</h5>
                        <span class="badge"><?php echo e(array_sum($getlistProduct)); ?></span>
                    </div>
                    <div class="col-lg-1 col-md-1"><h6>Giá mua</h6></div>
                    <div class="col-lg-1 col-md-1"><h6>Số lượng</h6></div>      
                    <div class="col-lg-1 col-md-1 end"><h6>Thành tiền</h6></div>
                </div>
                <?php
                  $total = 0;
                ?>

                <form id="shopping-cart" method="POST" action="<?php echo e(route('shipping-step-1')); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <?php if( $arrProductInfo->count() > 0): ?>
                  <?php foreach($arrProductInfo as $product): ?>
                  <?php 
                  $phi_dich_vu = DB::table('loai_sp')->where('id', $product->loai_id)->first()->phi_dich_vu;
                  ?>
                  <?php $price = $product->is_sale ? $product->price_sale : $product->price; ?>
                  <div class="row shopping-cart-item">
                    <div class="col-lg-3 col-md-2 col-xs-3">
                      <p class="image">
                      <!-- <span class="sale">-47%</span>  -->
                      <img class="img-responsive lazy" data-original="<?php echo e(Helper::showImage($product['image_url'])); ?>">
                      </p>
                    </div>
                    <div class="col-lg-6 col-md-6 c2 col-xs-9">
                      <p class="name">
                      <a href="" target="_blank"><?php echo e($product->name); ?></a>
                      </p>
                      <div class="row visible-xs-block visible-sm-block">
                        <div class="col-xs-6 col-sm-8">
                          <?php if($product->is_sale): ?>
                          <p class="price"><?php echo e(number_format($price)); ?>&nbsp;₫</p>
                          <?php else: ?>
                          <p class="price"><?php echo e(number_format($price)); ?>&nbsp;₫</p>
                          <?php endif; ?>
                        </div>
                        <div class="col-xs-6 col-sm-4 cart-col-3 quantity-block">
                           <select data-product-id="<?php echo e($product->id); ?>" class="form-control js-quantity-select quantity js-quantity-product">
                            <?php for($i = 1; $i <= 50; $i++ ): ?>
                            <option value="<?php echo e($i); ?>"
                            <?php if($i == $getlistProduct[$product->id]): ?>
                              selected
                            <?php endif; ?>
                            > <?php echo e($i); ?>

                              <?php if($i == 50): ?> + <?php endif; ?>
                            </option>
                            <?php endfor; ?>
                          </select>
                        </div>
                      </div>
                      <p class="action">
                        <a class="btn btn-link btn-item-delete" data-product-id="<?php echo e($product->id); ?>"> Xóa </a>
                        <?php if($phi_dich_vu > 0): ?>
                         <p class="mb05"><label class="checkbox-inline"><input type="checkbox" name="chon_dich_vu[<?php echo e($product->id); ?>]" value="1"> Giao hàng, lắp đặt và hướng dẫn sử dụng</label></p>
                        <p style="margin-left: 26px;">
                        <input type="hidden" name="phi_dich_vu[<?php echo e($product->id); ?>]" value="<?php echo e($phi_dich_vu); ?>">
                          <select name="so_dich_vu[<?php echo e($product->id); ?>]" class="form-control quantity-product" style="display:inline-block; padding: 3px; height: 25px; width: 50px;">
                            <?php for($i = 1; $i <= $getlistProduct[$product->id]; $i++ ): ?>
                            <option value="<?php echo e($i); ?>"              
                            > <?php echo e($i); ?>

                              <?php if($i == 50): ?> + <?php endif; ?>
                            </option>
                            <?php endfor; ?>
                          </select>
                          <span>x</span>
                          <label><strong class="text-bold"><?php echo e(number_format($phi_dich_vu)); ?> đ</strong></label><?php endif; ?>                          
                        </p>
                      </p>
                    </div>
                    <div class="col-lg-1 col-md-1 visible-md-block visible-lg-block">
                      
                      <?php if($product->is_sale): ?>
                      <p class="price"><?php echo e(number_format($price)); ?>&nbsp;₫</p>
                      <?php else: ?>
                      <p class="price"><?php echo e(number_format($price)); ?>&nbsp;₫</p>
                      <?php endif; ?>


                    </div>
                    <div class="col-lg-1 col-md-1 visible-md-block visible-lg-block quantity-block">
                      <!-- If product qty < 10, show select options -->
                      <select data-product-id="<?php echo e($product->id); ?>" class="form-control js-quantity-select quantity js-quantity-product">
                        <?php for($i = 1; $i <= 50; $i++ ): ?>
                        <option value="<?php echo e($i); ?>"
                        <?php if($i == $getlistProduct[$product->id]): ?>
                          selected
                        <?php endif; ?>
                        > <?php echo e($i); ?>

                          <?php if($i == 50): ?> + <?php endif; ?>
                        </option>
                        <?php endfor; ?>
                      </select>
                    </div>                   
                    <div class="col-lg-1 col-md-1 visible-md-block visible-lg-block end">
                      <p class="price3"><?php echo e(number_format($getlistProduct[$product->id]*$price)); ?>&nbsp;₫</p>
                    </div>
                  </div><!-- end /.shopping-cart-item -->
                  <?php $total += $getlistProduct[$product->id]*($price); ?>
                  <?php endforeach; ?>
                  <?php else: ?>
                  <p style="text-align:center;margin:15px">Chưa có sản phẩm nào trong giỏ hàng của bạn.</p>
                  <?php endif; ?>
                </form>

                <div class="row last" style="margin-top:10px">
                    <div class="col-lg-12 col-md-12">
                        <div class="all-new">
                            <a class="btn btn-default btn-gradient" href="<?php echo e(route('home')); ?>" style="margin-bottom:2px"><i class="fa fa-angle-left"></i> Tiếp tục mua sắm</a>
                            <?php if(!empty(Session::get('products'))): ?>
                            <a class="btn btn-default btn-gradient" style="margin-bottom:2px" onclick="return confirm('Xóa tất cả sản phẩm trong giỏ hàng?');" href="<?php echo e(route('xoa-gio-hang')); ?>"><i class="fa fa-trash-o"></i> Xóa toàn bộ giỏ hàng</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ./ Center colunm -->

            <!-- Left colunm -->
            <div class="col-lg-4 col-md-12 cart-col-2">
                <div id="right-affix" class="affix-top">
                  <div class="visible-lg-block">
                    <div class="panel panel-default fee">
                      <div class="panel-body">
                        <p class="total">Tổng cộng: <span><?php echo e(number_format($total)); ?>&nbsp;₫</span></p>
                        <p class="total2">Thành tiền: <span><?php echo e(number_format($total)); ?>&nbsp;₫ </span></p>
                        <p class="text-right"> <i>(Đã bao gồm VAT)</i> </p>
                      </div>
                    </div>
                   <?php if( $arrProductInfo->count() > 0): ?>                    
                    
                    <button type="button" class="btn btn-large btn-block btn-default btn-checkout"> TIẾN HÀNH ĐẶT HÀNG </button>
                    <?php endif; ?>                    
                  </div>
                  <div class="visible-xs-block">
                    <div class="panel panel-default fee">
                      <div class="panel-body">
                        <p class="total">Tổng cộng: <span><?php echo e(number_format($total)); ?>&nbsp;₫</span></p>
                        <p class="total2">Thành tiền: <span><?php echo e(number_format($total)); ?>&nbsp;₫ </span></p>
                        <p class="text-right"> <i>(Đã bao gồm VAT)</i> </p>
                      </div>
                    </div>
                  </div>
                  <?php if( $arrProductInfo->count() > 0): ?>
                  <div class="visible-xs-block">
                    <button type="button" class="btn btn-large btn-block btn-default btn-checkout"> TIẾN HÀNH ĐẶT HÀNG </button>
                  </div>
                  <?php endif; ?>
                </div>
            </div>
            <!-- ./left colunm -->
        </div><!-- ./row-->
        </div><!-- /.page-content -->
    </div>
</div>
<style type="text/css">
  .checkbox-inline, .radio-inline{
    padding-left: 0px !important;
  }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('javascript'); ?>
   <script type="text/javascript">
    $(document).ready(function() {
      $('#add_service').on('ifChecked', function(event){
          setServicesFee(1);
      });
      $('#add_service').on('ifUnchecked', function(event){
          setServicesFee(0);
      });
      $('.btn-checkout').click(function() {
        $('form#shopping-cart').submit();
        //location.href = "<?php echo e(route('shipping-step-1')); ?>";
      });

      $('.js-quantity-product').change(function() {
        var quantity = $(this).val();
        var id = $(this).attr('data-product-id');
        update_product_quantity(id, quantity);
      });

      $('.btn-item-delete').click(function() {
        var id = $(this).attr('data-product-id');
        update_product_quantity(id, 0);
      });


      
      function update_product_quantity(id, quantity) {
        $.ajax({
          url: "<?php echo e(route('update-sanpham')); ?>",
          method: "POST",
          data : {
            id: id,
            quantity : quantity
          },
          success : function(data){
            location.reload();
          },
          error : function(e) {
            alert( JSON.stringify(e));
          }
        });
      }
    })
  </script>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>