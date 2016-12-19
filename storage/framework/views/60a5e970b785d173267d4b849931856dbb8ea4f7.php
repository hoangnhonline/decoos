<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="columns-container">
    <div class="container" id="columns">        
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo e(route('home')); ?>" title="Trở về trang chủ">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="<?php echo e(route('danh-muc-cha', $rsLoai->slug)); ?>" title="<?php echo e($rsCate->name); ?>"><?php echo e($rsLoai->name); ?></a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="<?php echo e(route('danh-muc-con', [$rsLoai->slug, $rsCate->slug])); ?>" title="<?php echo e($rsCate->name); ?>"><?php echo e($rsCate->name); ?></a>            
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page"><?php echo e($detail->name); ?></span>
        </div>
        <!-- ./breadcrumb -->
        
        <div class="page-content">
            <!-- row -->
        <div class="row">
            
            <!-- Center colunm-->
            <div class="col-sm-9" id="product-detail">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src="<?php echo e(Helper::showImage($hinhArr[0]['image_url'])); ?>" data-zoom-image="<?php echo e(Helper::showImage($hinhArr[0]['image_url'])); ?>"/>
                                    </div>
                                    <?php if( !empty( $hinhArr )): ?>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                            <?php foreach( $hinhArr as $hinh ): ?>
                                            <li>
                                                <a href="#" data-image="<?php echo e(Helper::showImage($hinh['image_url'])); ?>" data-zoom-image="<?php echo e(Helper::showImage($hinh['image_url'])); ?>">
                                                    <img id="product-zoom"  src="<?php echo e(Helper::showImage($hinh['image_url'])); ?>" /> 
                                                </a>
                                            </li>
                                            <?php endforeach; ?>                   
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-sm-6">
                                <h1 class="product-name"><?php echo e($detail->name); ?> <?php echo e($detail->name_extend); ?></h1>
                                <div class="product-price-group">
                                    <?php if($detail->price > 0): ?>
                                      <?php if( $detail->is_sale == 1): ?>
                                      <span class="price"><?php echo e(number_format($detail->price_sale)); ?> đ</span>
                                      <span class="old-price"><?php echo e(number_format($detail->price)); ?> đ</span>
                                      <span class="discount">-<?php echo e($detail->sale_percent ? $detail->sale_percent : 
                                                                  100-round($detail->price_sale*100/$detail->price)); ?>%</span>
                                      <?php else: ?>
                                      <span class="price"><?php echo e(number_format($detail->price)); ?> đ</span>
                                      <?php endif; ?>
                                    <?php else: ?>
                                    <span class="price">Liên hệ</span>
                                    <?php endif; ?>
                                    
                                </div>
                                <?php if( $detail->khuyen_mai != ''): ?>
                                <div class="promotion-info">
                                    <div class="body-content">
                                        <h3>Khuyến mãi</h3>
                                        <?php echo $detail->khuyen_mai; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if( $detail->mo_ta != ''): ?>
                                <div class="infofollow">
                                    <div class="vez-description" itemprop="description">
                                        <?php echo $detail->mo_ta ; ?>
                                    </div>                          
                                </div>
                                <?php endif; ?>
                                <div class="info-orther">
                                    <!--<p>Mã sản phẩm: #453217907</p>-->
                                    <p>Danh mục: <a href="<?php echo e(route('danh-muc-con', [$rsLoai->slug, $rsCate->slug])); ?>" class="link"><?php echo e($rsCate->name); ?></a></p>
                                </div>
                                <div class="form-action">
                                    <?php if($detail->price > 0): ?>
                                    <div class="button-group">
                                        <button type="button" class="btn-add-cart-on-product-detail btnMuaDetail" product-id="<?php echo e($detail->id); ?>">MUA NGAY
                                        <?php if($rsLoai->phi_dich_vu > 0): ?>
                                        <span>(Giá sản phẩm không bao gồm chi phí lắp đặt)</span>
                                        <?php endif; ?>
                                        </button>
                                    </div>
                                    <?php else: ?>
                                    <div class="button-group">
                                        <button type="button" class="btn-add-cart-on-product-detail">TẠM HẾT HÀNG<span>Liên hệ đặt hàng và nhận giá tốt nhất</span></button>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                <!--<div class="buycall">
                                  <p>
                                      <span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
                                          <i class="fa fa-phone fa-stack-1x" aria-hidden="true"></i>
                                      </span>
                                      Mua online giá sỉ: <strong>1900 636 975</strong> (7:30 - 20:00)
                                  </p>                                  
                                  <p>
                                      <span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
                                          <i class="fa fa-truck fa-stack-1x" aria-hidden="true"></i>
                                      </span>
                                      <span>Miễn phí vận chuyển cho hóa đơn trên 150.000 vnđ</span> 
                                  </p>
                                </div>-->
                                
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();" class="link"><i class="fa fa-print"></i> Print</a>
                                        <a href="#" class="link" onclick="e_friend(); return false;"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
            <?php if( !empty($phuKienArr) ): ?>
            <!-- Left colunm -->
            <div class="column col-sm-3">
                <!-- block best sellers -->
                <div class="best-sell">
                    <h3 class="title-bold">Phụ kiện kèm theo</h3>
                    <ul class="products-block">
                        <?php foreach( $phuKienArr as $sp_id): ?>
                        <?php if( isset($productArr[$sp_id]) ): ?>
                        <li>
                            <div class="products-block-left">
                                <a href="<?php echo e(route('chi-tiet', $productArr[$sp_id]->slug )); ?>">
                                    <img src="<?php echo e(Helper::showImage( $productArr[$sp_id]->image_url)); ?>" alt="<?php echo e($productArr[$sp_id]->name); ?> <?php echo e($productArr[$sp_id]->name_extend); ?>" title="<?php echo e($productArr[$sp_id]->name); ?> <?php echo e($productArr[$sp_id]->name_extend); ?>">
                                </a>
                            </div>
                            <div class="products-block-right">
                                <h3 class="product-name">
                                    <a href="<?php echo e(route('chi-tiet', $productArr[$sp_id]->slug )); ?>" title="<?php echo e($productArr[$sp_id]->name); ?> <?php echo e($productArr[$sp_id]->name_extend); ?>"><?php echo e($productArr[$sp_id]->name); ?> <?php echo e($productArr[$sp_id]->name_extend); ?></a>
                                </h3>
                                <p class="product-price"><?php echo e($productArr[$sp_id]->is_sale == 1 ? number_format($productArr[$sp_id]->price_sale) : number_format($productArr[$sp_id]->price)); ?>đ</p>
                                <button type="button" class="add_to_cart_button" product-id="<?php echo e($sp_id); ?>">Mua</button>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- ./block best sellers  -->
            </div>
            <!-- ./left colunm -->
            <?php else: ?>
            <div class="col-sm-3">
                <div class="additional">
                  <div class="detail-benefits-support">
  
                    <label class="detail-lb-loiich clearfix"><strong>Ưu đãi dành cho khách hàng mua Online:</strong></label>
                    <div class="left detail-support">                        
                        <span>
                            <i class="fa fa-check-circle"></i>
                            Dịch vụ giao hàng tận nơi
                        </span>
                        <span>
                            <i class="fa fa-check-circle"></i>
                            Tư vấn online miễn phí
                        </span>
                        <span>
                            <i class="fa fa-check-circle"></i>
                            Bảo hành chính hãng
                        </span>
                        <span>
                            <i class="fa fa-check-circle"></i>
                            <a href="/chinh-sach-doi-tra.html" target="_blank">
                                Chính sách đổi trả
                            </a>
                        </span>
                    </div>
        
                    <div class="left detail-benefits">
                        <div class="detail-benefit-box">
                            <a href="javascript:void(0)" class="detail-call">
                                <strong><i class="fa fa-phone"></i>1900 636 975</strong>
                            </a><br>
                            <a href="skype:ndqtam?chat" class="detail-consulting">
                                <strong><i class="fa fa-comments-o"></i>Chat tư vấn</strong>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
        </div>
        <!-- ./row-->
        
        <div class="">
        
          <!-- tab product --> 
          <?php if( $detail->chi_tiet != ''): ?>                       
          <div class="product-tab">
              <ul class="nav-tab">
                  <li class="active">
                      <a aria-expanded="false" data-toggle="tab" href="#productdetail">Chi tiết sản phẩm</a>
                  </li>
                  <?php if( !empty( $thuocTinhArr )): ?>
                  <li>
                      <a aria-expanded="true" data-toggle="tab" href="#thongtinkythuat">Thông số kỹ thuật</a>
                  </li>
                  <?php endif; ?>
              </ul>
              <div class="tab-container">
                  <div id="productdetail" class="tab-panel active product-content-detail content-read-more" style="text-align:justify">
                      <div id="content-chitiet">
                      <?php echo ($detail->chi_tiet); ?>                     
                      </div>
                  </div>
                  <?php if( !empty( $thuocTinhArr )): ?>
                  <div id="thongtinkythuat" class="tab-panel">  
                      <div id="content-thongso">                    
                     <table class="table table-responsive table-bordered">
                      <?php foreach($thuocTinhArr as $loaithuoctinh): ?>
                        <tr style="background-color:#CCC">
                          <td colspan="2"><?php echo e($loaithuoctinh['name']); ?></td>
                        </tr>
                        <?php if( !empty($loaithuoctinh['child'])): ?>
                          <?php foreach( $loaithuoctinh['child'] as $thuoctinh): ?>
                          <tr>
                            <td width="150"><?php echo e($thuoctinh['name']); ?></td>
                            <td><span><?php echo e(isset($spThuocTinhArr[$thuoctinh['id']]) ?  $spThuocTinhArr[$thuoctinh['id']] : ""); ?></span></td>
                          </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      </table>  
                      </div>                  
                  </div>
                  <?php endif; ?>
              </div>
          </div>
          <?php endif; ?>
          <!-- ./tab product -->
            <?php if( !empty($tuongtuArr) ): ?>
          <!-- box product -->
            <div class="page-product-box">
                <h3 class="heading">Sản phẩm tương tự</h3>
                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "20" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                    <?php foreach( $tuongtuArr as $sp_id): ?>
                        <?php if( isset($productArr[$sp_id]) ): ?>
                        <li>
                        <div class="product-container">
                            <div class="left-block">
                                <?php if($productArr[$sp_id]->is_sale == 1): ?>
                                <span class="discount">
                                  -<?php echo e($productArr[$sp_id]->sale_percent ? $productArr[$sp_id]->sale_percent : 
                                                                100-round($productArr[$sp_id]->price_sale*100/$productArr[$sp_id]->price)); ?>%</span>
                                <?php endif; ?>
                                <a href="<?php echo e(route('chi-tiet', $productArr[$sp_id]->slug )); ?>">
                                  <img class="img-responsive" alt="<?php echo e($productArr[$sp_id]->name); ?> <?php echo e($productArr[$sp_id]->name_extend); ?>" src="<?php echo e(Helper::showImage( $productArr[$sp_id]->image_url)); ?>" alt="<?php echo e($productArr[$sp_id]->name); ?> <?php echo e($productArr[$sp_id]->name_extend); ?>" />
                                </a>
                                <!--<figure class="mask-info">
                                    <span>Màn hình: Retina HD, 5.5 inches</span><span>HĐH: iOS 9</span><span>CPU: A9 64 bit, RAM 2GB</span><span>Camera: 12.0MP, 1 SIM</span><span>Dung lượng pin: 2750 mAh</span>
                                    <div class="btn-action">
                                      <a class="btnorder" href="#">Đặt hàng</a>
                                      <a class="viewdetail" href="#">Chi tiết</a>
                                    </div>
                                </figure>-->
                            </div>
                            <div class="right-block">
                                <h3 class="product-name"><a href="<?php echo e(route('chi-tiet', $productArr[$sp_id]->slug )); ?>"><?php echo e($productArr[$sp_id]->name); ?> <?php echo e($productArr[$sp_id]->name_extend); ?></a></h3>
                                <div class="content_price">
                                    <?php if( $productArr[$sp_id]->is_sale == 1): ?>
                                    <span class="price product-price"><?php echo e(number_format($productArr[$sp_id]->price_sale)); ?></span>
                                    <span class="price old-price"><?php echo e(number_format($productArr[$sp_id]->price)); ?></span>
                                    <?php else: ?>
                                    <span class="price product-price"><?php echo e(number_format($productArr[$sp_id]->price)); ?></span>                                    
                                    <?php endif; ?>
                                </div>
                                
                                <?php $str_sosanh = $detail->id.'-'.$sp_id; ?>
                                <a href="<?php echo e(route('so-sanh', ['id' => $str_sosanh])); ?>" class="compare-txt"> So sánh chi tiết</a>
                                
                                <a rel="nofollow" href="javascript:void(0)" class="add_to_cart_button" product-id="<?php echo e($sp_id); ?>">Mua</a>
                            </div>
                        </div>
                    </li> 
                        <?php endif; ?>
                        <?php endforeach; ?>
                                      
                    
                </ul>
            </div>
            <!-- ./box product -->
            <?php endif; ?>
            <!-- box product -->
            <?php if( $lienquanArr->count() > 0): ?>
            <div class="page-product-box">
                <h3 class="heading">Sản phẩm liên quan</h3>
                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "20" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                     <?php foreach( $lienquanArr as $product): ?>
                        
                        <li>
                        <div class="product-container">
                            <div class="left-block">
                                <?php if($product->is_sale == 1): ?>
                                <span class="discount">
                                  -<?php echo e($product->sale_percent ? $product->sale_percent : 
                                                                100-round($product->price_sale*100/$product->price)); ?>%</span>
                                <?php endif; ?>
                                <a href="<?php echo e(route('chi-tiet', $product->slug )); ?>">
                                  <img class="img-responsive" alt="<?php echo e($product->name); ?> <?php echo e($product->name_extend); ?>" src="<?php echo e(Helper::showImage( $product->image_url)); ?>" alt="<?php echo e($product->name); ?> <?php echo e($product->name_extend); ?>" />
                                </a>
                                <!--<figure class="mask-info">
                                    <span>Màn hình: Retina HD, 5.5 inches</span><span>HĐH: iOS 9</span><span>CPU: A9 64 bit, RAM 2GB</span><span>Camera: 12.0MP, 1 SIM</span><span>Dung lượng pin: 2750 mAh</span>
                                    <div class="btn-action">
                                      <a class="btnorder" href="#">Đặt hàng</a>
                                      <a class="viewdetail" href="#">Chi tiết</a>
                                    </div>
                                </figure>-->
                            </div>
                            <div class="right-block">
                                <h3 class="product-name"><a href="<?php echo e(route('chi-tiet', $product->slug )); ?>"><?php echo e($product->name); ?> <?php echo e($product->name_extend); ?></a></h3>
                                <div class="content_price">
                                    <?php if( $product->is_sale == 1): ?>
                                    <span class="price product-price"><?php echo e(number_format($product->price_sale)); ?></span>
                                    <span class="price old-price"><?php echo e(number_format($product->price)); ?></span>
                                    <?php else: ?>
                                    <span class="price product-price"><?php echo e(number_format($product->price)); ?></span>                                    
                                    <?php endif; ?>
                                </div>
                                
                                <?php $str_sosanh = $detail->id.'-'.$product->sp_id; ?>
                                <a href="<?php echo e(route('so-sanh', ['id' => $str_sosanh])); ?>" class="compare-txt"> So sánh chi tiết</a>
                                
                                <a rel="nofollow" href="javascript:void(0)" class="add_to_cart_button" product-id="<?php echo e($product->sp_id); ?>">Mua</a>
                            </div>
                        </div>
                    </li> 
                        
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <!-- ./box product -->
        
        </div>
                     
        </div><!-- /.page-content -->   
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript_page'); ?>
<script type="text/javascript">
  

</script>
<?php $__env->stopSection(); ?>