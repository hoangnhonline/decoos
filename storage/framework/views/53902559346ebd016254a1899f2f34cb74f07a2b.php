<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.partials.main-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.partials.home-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<!-- END Home slideder-->
<div class="option2 clearfix">
    <div class="content-page" style="margin-top:0px">
        <div class="container">
            <!-- featured category fashion -->
            <?php $countLoaiSp = 0; 
            $totalLoaiHot = count( $loaiSpHot );
            ?>
            <?php foreach( $cateArr as $cate): ?>
                <?php if( !empty( $productArr[$cate->id])): ?> 
                <?php $countLoaiSp++; ?>          
                <div class="category-featured">
                    <nav class="navbar nav-menu show-brand">
                      <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-brand" style="background-color:<?php echo e($cate->bg_color); ?>">
                            <a href="<?php echo e(route('danh-muc-con', [$rs->slug, $cate->slug])); ?>"><?php echo e($cate->name); ?></a>
                            </div>
                          <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">           
                          
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                       <div id="elevator-<?php echo e($countLoaiSp); ?>" class="floor-elevator">
                            <a href="#<?php echo e($countLoaiSp > 1 ? "elevator-".($countLoaiSp - 1)  : " "); ?>" class="btn-elevator up <?php echo e($countLoaiSp == 1 ? "disabled" : ""); ?> fa fa-angle-up"></a>
                            <a href="#<?php echo e($countLoaiSp < $totalLoaiHot ? "elevator-".($countLoaiSp + 1)  : " "); ?>" class="btn-elevator down <?php echo e($countLoaiSp == $totalLoaiHot ? "disabled" : ""); ?> fa fa-angle-down"></a>
                      </div>
                    </nav>
                   <div class="product-featured clearfix">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-10">
                                        <div class="col-sm-12 category-list-product" style="padding-right:0;">
                                            <ul class="product-list">
                                                <?php foreach( $productArr[$cate->id] as $product ): ?>
                                                <?php 
                                                    if( $rs->is_hover == 1){                    
                                                        $tmp = isset($product['thuoc_tinh']) ? $product['thuoc_tinh'] : "";
                                                        $thuocTinhArr = json_decode($tmp, true);
                                                    }
                                                ?>
                                                <li class="col-sm-2">
                                                    <?php echo $__env->make('frontend.cate.per-product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                </li>
                                            <?php endforeach; ?>
                                                
                                            </ul>
                                        </div>
                                </div>                               
                            </div>
                        </div>

                   </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>



        </div>
    </div><!-- end /.content-page -->
</div><!-- end /.option2 -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>