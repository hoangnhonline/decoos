<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.partials.main-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.partials.home-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php 
$vangLaiArr  = Session::get('vanglai');
?>
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo e(route('home')); ?>" title="Trở về trang chủ">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="#" title="Giỏ hàng">Giỏ hàng</a>
        </div>
        <!-- ./breadcrumb -->
        <div class="page-content">
          <!-- row -->
          <div class="shipping-address-page">

                <div class="shipping-header">
                  <div class="row bs-wizard">
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 bs-wizard-step complete">
                      <div class="text-center bs-wizard-stepnum"> <span>Đăng Nhập</span> </div>
                      <div class="progress">
                        <div class="progress-bar"></div>
                      </div>
                      <span class="bs-wizard-dot">1</span> </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 bs-wizard-step complete">
                      <div class="text-center bs-wizard-stepnum"> <span class="hidden-xs">Địa Chỉ Giao Hàng</span> <span class="visible-xs-inline-block">Địa Chỉ</span> </div>
                      <div class="progress">
                        <div class="progress-bar"></div>
                      </div>
                      <span class="bs-wizard-dot">2</span> </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 bs-wizard-step active">
                      <div class="text-center bs-wizard-stepnum"> <span class="hidden-xs">Thanh Toán &amp; Đặt Mua</span> <span class="visible-xs-inline-block">Thanh Toán</span> </div>
                      <div class="progress">
                        <div class="progress-bar"></div>
                      </div>
                      <span class="bs-wizard-dot">3</span> </div>
                  </div>
                </div>

                <div class="row visible-lg-block">
                  <div class="col-lg-12">
                    <h3 style="font-size:15px">3. Thanh Toán & Đặt Mua</h3>
                  </div>
                </div>

                <div class="row row-style-2">
                  <div class="col-lg-8 has-padding">
                    <div class="panel panel-default payment">
                      <div class="panel-body">
                        <form class="form-horizontal hide-block" role="form" id="form-payment" action="<?php echo e(route('dat-hang')); ?>" method="post">
                          <?php echo e(csrf_field()); ?>                        
                          
                          <ul class="wc_payment_methods payment_methods methods">
                                   
                          <div class="form-group row">
                            <h4 class="col-lg-12 is-mt">Hình thức thanh toán :</h4>
                          </div>

                            <li class="wc_payment_method payment_method_cod">
                             <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="1" checked="checked" data-order_button_text="">
                             <label for="payment_method_cod">
                             Giao hàng và thu tiền tại nhà     </label>
                             <div class="payment_box payment_method_cod" style="display: block;">
                                <p>Quý khách có thể trả tiền mặt khi giao hàng</p>
                             </div>
                             <p style="color:red;padding-left:20px;margin-top:-5px; margin-bottom:10px">Phí COD : <strong><?php echo e(number_format($phi_cod)); ?>&nbsp;₫</strong></p>
                          </li>
                          <li class="wc_payment_method payment_method_bacs">
                             <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="2">
                             <label for="payment_method_bacs">
                             Chuyển khoản ngân hàng     </label>
                             <div class="payment_box payment_method_bacs" >
                                <div class="box-info-payment">
                                   <div class="info-payment-top">
                                      Quý khách có thể lựa chọn chuyển khoản tới 1 trong những ngân hàng sau:
                                   </div>
                                   <div class="info-payment-center">
                                      <ul>
                                         <li class="info-payment-item">
                                            <div class="payment-thumb">
                                               <img src="http://vshop24.com/images/acb_logo.png">
                                            </div>
                                            <div class="payment-detail">
                                               <div class="payment-bankname">Ngân Hàng Thương Mại Cổ Phần Á Châu - Chi Nhánh Thủ Đức</div>
                                               <div class="payment-detail-row">                                                 
                                                  <div class="detail-row row-name"><b>Chủ tài khoản:</b> <span class="row-txt">Chi Nhánh Thủ Đức - Công ty cổ phần IPL</span></div>
                                                  <div class="detail-row row-number"><b>Số TK:</b> <span class="row-txt">82901409</span></div>
                                               </div>
                                            </div>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </li>                          
                          </ul>
                          
                          <div id="bookcare-option"> </div>
                          <div class="form-group row end">
                            <div class="col-lg-6">
                              <button type="button" id="btn-placeorder" class="btn btn-block btn-default btn-checkout">ĐẶT MUA</button>
                              <button type="button" class="btn btn-default" id="btnLoading" style="display:none;margin-left:15px"><i class="fa fa-spin fa-spinner"></i></button>
                              <p class="note">Bạn vui lòng kiểm tra lại đơn hàng trước khi Đặt Mua</p>
                            </div>
                          </div>
                          <input type="hidden" name="phi_giao_hang" value="<?php echo e($phi_giao_hang); ?>">
                          <input type="hidden" name="phi_cod" value="<?php echo e($phi_cod); ?>">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="panel panel-default cart">
                      <div class="panel-body">
                        <div class="order"> <span class="title"> Địa chỉ giao hàng </span> <a href="<?php echo e(route('shipping-step-2')); ?>" class="btn btn-default btn-custom1">Sửa</a> </div>
                        <div class="information">
                          <?php if($is_vanglai == 1): ?>
                            <h6><?php echo e($vangLaiArr['full_name']); ?></h6>
                            <p class="end">
                                <?php if( isset( $vangLaiArr['city_id'] )): ?>
                                  <?php echo e(Helper::getName($vangLaiArr['city_id'], 'city')); ?>,
                                <?php endif; ?>
                                <?php if( isset( $vangLaiArr['district_id'] )): ?>
                                  <?php echo e(Helper::getName($vangLaiArr['district_id'], 'district')); ?>,
                                <?php endif; ?>
                                 <?php if( isset( $vangLaiArr['ward_id'] )): ?>
                                  <?php echo e(Helper::getName($vangLaiArr['ward_id'], 'ward')); ?>,
                                <?php endif; ?>
                                <?php echo e($vangLaiArr['address']); ?>

                                <br>
                                ĐT: <?php echo e($vangLaiArr['phone']); ?><br>
                            </p>                            
                          <?php else: ?>
                            <h6><?php echo e($customer->full_name); ?></h6>
                            <p class="end">
                            <?php if(isset( $customer->tinh->name )): ?>
                              <?php echo e($customer->tinh->name); ?>,
                            <?php endif; ?>
                            <?php if(isset( $customer->huyen->name )): ?>
                              <?php echo e($customer->huyen->name); ?>,
                            <?php endif; ?>
                            <?php if(isset( $customer->xa->name )): ?>
                              <?php echo e($customer->xa->name); ?>,
                            <?php endif; ?>
                            <?php echo e($customer->address); ?><br>
                              ĐT: <?php echo e($customer->phone); ?><br>
                              </p>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div id="panel-cart">
                      <div class="panel panel-default cart">
                        <div class="panel-body">
                          <div class="order"> <span class="title">Đơn hàng</span> <span class="title"> (<?php echo e(array_sum($getlistProduct)); ?> sản phẩm)</span> <a href="<?php echo e(route('gio-hang')); ?>" class="btn btn-default btn-custom1">Sửa</a> </div>
                          <div class="product">
                          	<?php $total = 0; ?>
                          	<?php foreach($arrProductInfo as $product): ?>
                            <div class="item">
                              <p class="title"><strong><?php echo e($getlistProduct[$product->id]); ?> x</strong><a href="#" target="_blank" class="link"><?php echo e($product->name); ?></a></p>
                              <p class="price">
                              <?php $price = $product->is_sale ? $product->price_sale : $product->price; ?>

                                <span><?php echo e(number_format( $getlistProduct[$product->id]*$price )); ?>&nbsp;₫ </span>
                                </p>
                            </div>                            
                        	<?php endforeach; ?>
                          </div>                                                    
                          <p class="shipping"> Phí dịch vụ: <span><?php echo e(number_format( $totalServiceFee )); ?>&nbsp;₫</span> </p>
                          <p class="shipping" style="border-bottom: 1px solid #c9c9c9;padding-bottom:5px"> Phí vận chuyển: <span id="phi_giao"><?php echo e(number_format( $phi_giao_hang )); ?>&nbsp;₫</span> </p>                        
                          <input type="hidden" id="phiCod" value="<?php echo e($phi_cod); ?>">
                          <p class="total"> Tạm Tính: <span id="total_amount" style="font-weight:bold"><?php echo e(number_format( $totalAmount)); ?>&nbsp;₫ </span> </p>
                          <p class="shipping"> Phí COD: <span id="phi_giao"><?php echo e(number_format( $phi_cod )); ?>&nbsp;₫</span> </p>
                          <p class="total2"> Thành tiền: <span id="total_amount"><?php echo e(number_format( $totalAmount + $phi_cod)); ?>&nbsp;₫ </span> </p>
                          <input type="hidden" id="totalAmount" value="<?php echo e($totalAmount); ?>">
                          <p class="text-right"> <i>(Đã bao gồm VAT)</i> </p>
                        </div>
                      </div>
                      <?php if( $phi_giao_hang == 0): ?>
                      <div class="popover bottom tikixu">
                        <div class="arrow"></div>
                        <div class="popover-content">
                          <p class="ship">Đơn hàng bạn sẽ được miễn phí vận chuyển.</p>
                        </div>
                      </div>
                      <?php endif; ?>
                    </div>

                  </div>
                </div>

           </div><!-- /.shipping-address-page -->

        </div><!-- /.page-content -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('javascript'); ?>
   <script type="text/javascript">
    $(document).ready(function() {
      $('.btn-checkout').click(function(){
        $(this).attr('disabled', 'disabled').html('<i class="fa fa-spin fa-spinner"></i> Đang xử lý...');        
        var payment_method = $('input[name=payment_method]:checked').val();
        $.ajax({
          url: "<?php echo e(route('dat-hang')); ?>",
          method: "POST",
          data : {
            payment_method : payment_method,
            phi_giao_hang : '<?php echo e($phi_giao_hang); ?>',
            phi_cod : '<?php echo e($phi_cod); ?>',
          },
          success : function(data){            
            location.href = "<?php echo e(route('thanh-cong')); ?>";
          }
        });
      })
    })
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>