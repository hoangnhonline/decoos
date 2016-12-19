<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<!-- END Home slideder-->
<div class="option2 clearfix">
    <div class="content-page">
        <div class="container">
            <!-- featured category fashion -->
            <?php $countLoaiSp = 0; 
            $totalLoaiHot = count( $loaiSpHot );
            ?>
            <?php foreach( $loaiSpHot as $loai): ?>
               <?php $countLoaiSp++; ?>

                <?php if( $loai['home_style'] == 1 ): ?>
                <div class="category-featured" >
                    <nav class="navbar nav-menu show-brand" >
                      <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-brand" style="background-color:<?php echo e($loai['bg_color']); ?>"><a title="<?php echo e($loai['name']); ?>" href="<?php echo e(route('danh-muc-cha', $loai['slug'])); ?>"><img  alt="<?php echo e($loai['name']); ?>" class="lazy" data-original="<?php echo e(Helper::showImage($loai['icon_url'])); ?>" /><?php echo e($loai['name']); ?></a></div>
                          <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                          <ul class="nav navbar-nav"> 
                            <?php foreach( $loai['child'] as $cate): ?>
                            <?php if(!in_array($cate['id'], [27,28,29])): ?>
                            <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                      <div id="elevator-<?php echo e($countLoaiSp); ?>" class="floor-elevator">
                            <a href="#<?php echo e($countLoaiSp > 1 ? "elevator-".($countLoaiSp - 1)  : " "); ?>" class="btn-elevator up <?php echo e($countLoaiSp == 1 ? "disabled" : ""); ?> fa fa-angle-up"></a>
                            <a href="#<?php echo e($countLoaiSp < $totalLoaiHot ? "elevator-".($countLoaiSp + 1)  : " "); ?>" class="btn-elevator down <?php echo e($countLoaiSp == $totalLoaiHot ? "disabled" : ""); ?> fa fa-angle-down"></a>
                      </div>
                    </nav>
                   <div class="product-featured clearfix">
                        <div class="row">
                            <div class="col-sm-2 sub-category-wapper">
                                <?php if( count($loai['child']) <= 14 ): ?>
                                <ul class="sub-category-list">

                                    <?php foreach( $loai['child'] as $cate): ?>
                                    <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                                    <?php endforeach; ?>

                                </ul>
                                <?php else: ?>
                                <div class="owl-carousel-vertical" data-items="1" data-nav="true" data-dots="false" data-loop="false">
                                    <div class="item">
                                        <ul class="sub-category-list">
                                            <?php 
                                                $count = 0;
                                            ?>
                                            <?php foreach( $loai['child'] as $cate): ?>
                                            <?php $count++; ?>
                                            <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                                            <?php if($count == 14): ?>
                                                    </ul>
                                            </div>
                                            <div class="item">
                                                <ul class="sub-category-list">
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            
                                        </ul>
                                    </div>                                
                                </div>
                                <?php endif; ?>
                            </div>
                             <div class="col-sm-4 banner-waper">                            
                                <ul class="owl-intab owl-carousel" data-loop="<?php echo count($bannerArr[$loai['id']]) > 1 ?'true' : 'false'; ?>" data-items="1" data-autoplay="true" data-dots="false" <?php echo count($bannerArr[$loai['id']]) > 1 ? ' data-nav="true"' : ''; ?>>
                                    <?php if( !empty($bannerArr[$loai['id']])): ?>
                                        <?php foreach($bannerArr[$loai['id']] as $banner): ?>
                                            <li>
                                                <?php if($banner->type == 2): ?>
                                                <a href="<?php echo e($banner->ads_url); ?>">
                                                <?php endif; ?>
                                                <img src="<?php echo e(Helper::showImage($banner['image_url'])); ?>" alt="Image">
                                                <?php if($banner->type == 2): ?>
                                                </a>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>                                                    
                                </ul>
                            </div>
                            <div class="col-sm-6 col-right-tab">
                                <div class="product-featured-tab-content">
                                    <div class="tab-container">
                                        <div class="tab-panel active" id="tab-4">
                                           
                                           <ul class="product-list row">
                                           <?php foreach( $productArr[$loai['id']] as $product ): ?>
                                           <?php 
                                                if( $loai['is_hover'] == 1){                                                        
                                                    $tmp = isset($product['thuoc_tinh']) ? $product['thuoc_tinh'] : "";
                                                    $thuocTinhArr = json_decode($tmp, true);                                                     
                                                }

                                            ?>
                                                <li class="col-sm-4">
                                                    <div class="left-block">
                                                        <?php if($product['pro_style'] == 1 && $product['image_pro'] != '' && $loai['icon_km'] != ''): ?>
                                                        <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($loai['icon_km'])); ?>" alt="Sản phẩm có quà tặng">
                                                        <?php endif; ?>
                                                        <?php if($product['pro_style'] == 2 && $product['image_pro'] != ''): ?>
                                                        <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" alt="qua tang kem <?php echo e($product['name']); ?>">
                                                        <?php endif; ?>
                                                        <?php if( $product['is_sale'] == 1): ?>
                                                        <span class="discount"><?php echo e(100-round($product['price_sale']*100/$product['price'])); ?>%</span>
                                                        <?php endif; ?>
                                                        <a href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">
                                                        
                                                        <img class="img-responsive lazy lazy-img1" alt="<?php echo e($product['name']); ?>" data-original="<?php echo e(Helper::showImage($product['image_url'])); ?>" />
                                                        <?php if($product['pro_style'] == 1 && $product['image_pro'] != ''): ?>
                                                        <img class="img-responsive lazy-img2 lazy" alt="product" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" />
                                                        <?php endif; ?>
                                                        </a>
                                                        <?php if( $loai['is_hover'] == 1 && $product['pro_style'] == 0): ?>
                                                        <figure class="mask-info">
                                                            <?php foreach($hoverInfo[$loai['id']] as $info): ?>
                                                            <?php 
                                                            $tmpInfo = explode(",", $info->str_thuoctinh_id);         
                                                            ?>

                                                            <span><?php echo e($info->text_hien_thi); ?>: <?php
                                                            $countT = 0; $totalT = count($tmpInfo);
                                                            foreach( $tmpInfo as $tinfo){
                                                                $countT++;
                                                                if(isset($thuocTinhArr[$tinfo])){
                                                                    echo $thuocTinhArr[$tinfo];
                                                                    echo $countT < $totalT ? ", " : "";
                                                                }
                                                            }

                                                             ?></span>
                                                            <?php endforeach; ?>
                                                            <div class="btn-action">
                                                              <a class="btnorder" product-id=<?php echo e($product['id']); ?>>Đặt hàng</a>
                                                              <a class="viewdetail" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">Chi tiết</a>
                                                            </div>
                                                        </figure>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a title="<?php echo e($product['name']); ?>" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>"><?php echo e($product['name']); ?></a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">
                                                            <?php if($product['price'] > 0): ?>
                                                            <?php echo e($product['is_sale'] == 1 ? number_format($product['price_sale']) : number_format($product['price'])); ?>

                                                            <?php else: ?>
                                                            Liên hệ
                                                            <?php endif; ?>
                                                            </span>
                                                            <?php if( $product['is_sale'] == 1): ?>
                                                            <span class="price old-price"><?php echo e(number_format($product['price'])); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <?php if($product['price'] > 0): ?>
                                                        <a class="add_to_cart_button" product-id=<?php echo e($product['id']); ?>>Mua</a>
                                                        <?php endif; ?>
                                                    </div>

                                                </li>
                                            <?php endforeach; ?>
                                           </ul>
                                          
                                        </div>                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                <?php endif; ?>
                <?php if( $loai['home_style'] == 0 ): ?>
                <div class="category-featured">
                <nav class="navbar nav-menu show-brand">
                  <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-brand" style="background-color:<?php echo e($loai['bg_color']); ?>"><a title="<?php echo e($loai['name']); ?>" href="<?php echo e(route('danh-muc-cha', $loai['slug'])); ?>"><img  alt="<?php echo e($loai['name']); ?>" class="lazy" data-original="<?php echo e(Helper::showImage($loai['icon_url'])); ?>" /><?php echo e($loai['name']); ?></a></div>
                      <span class="toggle-menu"></span>  
                      <div class="collapse navbar-collapse">
                          <ul class="nav navbar-nav">
                            <?php foreach( $loai['child'] as $cate): ?>
                            <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                            <?php endforeach; ?>
                          </ul>
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
                                                <?php foreach( $productArr[$loai['id']] as $product ): ?>
                                                <?php 
                                                    if( $loai['is_hover'] == 1){                                                        
                                                        $tmp = isset($product['thuoc_tinh']) ? $product['thuoc_tinh'] : "";
                                                        $thuocTinhArr = json_decode($tmp, true);                                                     
                                                    }

                                                ?>
                                                    <li class="col-sm-2">
                                                        <div class="left-block">
                                                            <?php if($product['pro_style'] == 1 && $product['image_pro'] != '' && $loai['icon_km'] != ''): ?>
                                                            <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($loai['icon_km'])); ?>" alt="Sản phẩm có quà tặng">
                                                            <?php endif; ?>
                                                            <?php if($product['pro_style'] == 2 && $product['image_pro'] != ''): ?>
                                                            <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" alt="qua tang kem <?php echo e($product['name']); ?>">
                                                            <?php endif; ?>
                                                            <?php if( $product['is_sale'] == 1): ?>
                                                            <span class="discount"><?php echo e(100-round($product['price_sale']*100/$product['price'])); ?>%</span>
                                                            <?php endif; ?>
                                                            <a href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">
                                                            <img class="img-responsive lazy lazy-img1" alt="<?php echo e($product['name']); ?>" data-original="<?php echo e(Helper::showImage($product['image_url'])); ?>" /></a>
                                                                    <?php if($product['pro_style'] == 1 && $product['image_pro'] != ''): ?>
                                                                <img class="img-responsive lazy-img2 lazy" alt="product" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" />
                                                                <?php endif; ?>
                                                                </a>
                                                                <?php if( $loai['is_hover'] == 1 && $product['pro_style'] == 0): ?>
                                                            <figure class="mask-info">
                                                                <?php foreach($hoverInfo[$loai['id']] as $info): ?>
                                                                <?php 
                                                                $tmpInfo = explode(",", $info->str_thuoctinh_id);         
                                                                ?>

                                                                <span><?php echo e($info->text_hien_thi); ?>: <?php
                                                                $countT = 0; $totalT = count($tmpInfo);
                                                                foreach( $tmpInfo as $tinfo){
                                                                    $countT++;
                                                                    if(isset($thuocTinhArr[$tinfo])){
                                                                        echo $thuocTinhArr[$tinfo];
                                                                        echo $countT < $totalT ? ", " : "";
                                                                    }
                                                                }

                                                                 ?></span>
                                                                <?php endforeach; ?>
                                                                <div class="btn-action">
                                                                  <a class="btnorder" product-id=<?php echo e($product['id']); ?>>Đặt hàng</a>
                                                                  <a class="viewdetail" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">Chi tiết</a>
                                                                </div>
                                                            </figure>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="right-block">
                                                            <h5 class="product-name"><a title="<?php echo e($product['name']); ?>" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>"><?php echo e($product['name']); ?></a></h5>
                                                            <div class="content_price">
                                                                <span class="price product-price">
                                                                <?php if($product['price'] > 0): ?>
                                                                <?php echo e($product['is_sale'] == 1 ? number_format($product['price_sale']) : number_format($product['price'])); ?>

                                                                <?php else: ?>
                                                                Liên hệ
                                                                <?php endif; ?>
                                                                </span>
                                                                <?php if( $product['is_sale'] == 1): ?>
                                                                <span class="price old-price"><?php echo e(number_format($product['price'])); ?></span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <?php if($product['price'] > 0): ?>
                                                            <a class="add_to_cart_button" product-id=<?php echo e($product['id']); ?>>Mua</a>
                                                            <?php endif; ?>
                                                        </div>

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
                <?php if( $loai['home_style'] == 2 ): ?>
                <div class="category-featured">
                    <nav class="navbar nav-menu show-brand">
                      <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                           <div class="navbar-brand" style="background-color:<?php echo e($loai['bg_color']); ?>"><a title="<?php echo e($loai['name']); ?>" href="<?php echo e(route('danh-muc-cha', $loai['slug'])); ?>"><img class="lazy"  alt="<?php echo e($loai['name']); ?>" data-original="<?php echo e(Helper::showImage($loai['icon_url'])); ?>" /><?php echo e($loai['name']); ?></a></div>
                          <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">           
                          <ul class="nav navbar-nav">
                                <?php foreach( $loai['child'] as $cate): ?>
                                <?php if(!in_array($cate['id'], [27,28,29])): ?>
                                <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                      <div id="elevator-<?php echo e($countLoaiSp); ?>" class="floor-elevator">
                            <a href="#<?php echo e($countLoaiSp > 1 ? "elevator-".($countLoaiSp - 1)  : " "); ?>" class="btn-elevator up <?php echo e($countLoaiSp == 1 ? "disabled" : ""); ?> fa fa-angle-up"></a>
                            <a href="#<?php echo e($countLoaiSp < $totalLoaiHot ? "elevator-".($countLoaiSp + 1)  : " "); ?>" class="btn-elevator down <?php echo e($countLoaiSp == $totalLoaiHot ? "disabled" : ""); ?> fa fa-angle-down"></a>
                      </div>
                    </nav>
                   <div class="product-featured clearfix">
                        <div class="row">
                            <div class="col-sm-2 sub-category-wapper">
                                <?php if( count($loai['child']) <= 14 ): ?>
                                <ul class="sub-category-list">

                                    <?php foreach( $loai['child'] as $cate): ?>
                                    <?php if(!in_array($cate['id'], [27,28,29])): ?>
                                    <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php if($loai['id'] == 6): ?>
                                    <li><a title="Máy in" href="<?php echo e(route('danh-muc-cha', 'may-in')); ?>">Máy in</a></li>
                                    <li><a title="Máy scan" href="<?php echo e(route('danh-muc-cha', 'may-scan')); ?>">Máy scan</a></li>
                                    <li><a title="Máy fax" href="<?php echo e(route('danh-muc-cha', 'may-fax')); ?>">Máy fax</a></li>
                                    <li><a title="Máy chiếu" href="<?php echo e(route('danh-muc-cha', 'may-chieu')); ?>">Máy chiếu</a></li>
                                    <?php endif; ?>                                    
                                </ul>
                                <?php else: ?>
                                <div class="owl-carousel-vertical" data-items="1" data-nav="true" data-dots="false" data-loop="false">
                                    <div class="item">
                                        <ul class="sub-category-list">
                                            <?php 
                                                $count = 0;
                                            ?>
                                            <?php foreach( $loai['child'] as $cate): ?>
                                            <?php $count++; ?>
                                            <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                                            <?php if($count == 14): ?>
                                                    </ul>
                                            </div>
                                            <div class="item">
                                                <ul class="sub-category-list">
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            
                                        </ul>
                                    </div>                                
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-2 banner-waper">
                                <div class="banner-img">
                                    <ul class="owl-intab owl-carousel" data-loop="<?php echo count($bannerArr[$loai['id']]) > 1 ? 'true' : 'false'; ?>" data-items="1" data-autoplay="true" data-dots="false" <?php echo count($bannerArr[$loai['id']]) > 1 ? ' data-nav="true"' : ''; ?>>
                                        <?php if( !empty($bannerArr[$loai['id']])): ?>
                                            <?php foreach($bannerArr[$loai['id']] as $banner): ?>
                                                <li>
                                                    <?php if($banner->type == 2): ?>
                                                    <a href="<?php echo e($banner->ads_url); ?>">
                                                    <?php endif; ?>
                                                    <img src="<?php echo e(Helper::showImage($banner['image_url'])); ?>" alt="Image">
                                                    <?php if($banner->type == 2): ?>
                                                    </a>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>                                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8 col-right-tab">
                                <div class="product-featured-tab-content">
                                    <div class="tab-container">
                                        <div class="tab-panel active" id="tab-10">
                                         
                                                    <ul class="product-list row">
                                                        <?php foreach( $productArr[$loai['id']] as $product ): ?>
                                                            <?php 
                                                                if( $loai['is_hover'] == 1){                                                        
                                                                    $tmp = isset($product['thuoc_tinh']) ? $product['thuoc_tinh'] : "";
                                                                    $thuocTinhArr = json_decode($tmp, true);                                                     
                                                                }

                                                            ?>
                                                            <li class="col-md-3 col-sm-4">
                                                                <div class="left-block">
                                                                    <?php if($product['pro_style'] == 1 && $product['image_pro'] != '' && $loai['icon_km'] != ''): ?>
                                                                    <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($loai['icon_km'])); ?>" alt="Sản phẩm có quà tặng">
                                                                    <?php endif; ?>
                                                                    <?php if($product['pro_style'] == 2 && $product['image_pro'] != ''): ?>
                                                                    <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" alt="qua tang kem <?php echo e($product['name']); ?>">
                                                                    <?php endif; ?>
                                                                    <?php if( $product['is_sale'] == 1): ?>
                                                                    <span class="discount"><?php echo e(100-round($product['price_sale']*100/$product['price'])); ?>%</span>
                                                                    <?php endif; ?>
                                                                    <a href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">
                                                                    <img class="img-responsive lazy lazy-img1" alt="<?php echo e($product['name']); ?>" data-original="<?php echo e(Helper::showImage($product['image_url'])); ?>" />
                                                                    <?php if($product['pro_style'] == 1 && $product['image_pro'] != ''): ?>
                                                                    <img class="img-responsive lazy-img2 lazy" alt="product" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" />
                                                                    <?php endif; ?>
                                                                    </a>
                                                                    <?php if( $loai['is_hover'] == 1 && $product['pro_style'] == 0): ?>
                                                                    <figure class="mask-info">
                                                                        <?php foreach($hoverInfo[$loai['id']] as $info): ?>
                                                                        <?php 
                                                                        $tmpInfo = explode(",", $info->str_thuoctinh_id);         
                                                                        ?>

                                                                        <span><?php echo e($info->text_hien_thi); ?>: <?php
                                                                        $countT = 0; $totalT = count($tmpInfo);
                                                                        foreach( $tmpInfo as $tinfo){
                                                                            $countT++;
                                                                            if(isset($thuocTinhArr[$tinfo])){
                                                                                echo $thuocTinhArr[$tinfo];
                                                                                echo $countT < $totalT ? ", " : "";
                                                                            }
                                                                        }

                                                                         ?></span>
                                                                        <?php endforeach; ?>
                                                                        <div class="btn-action">
                                                                          <a class="btnorder" product-id=<?php echo e($product['id']); ?>>Đặt hàng</a>
                                                                          <a class="viewdetail" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">Chi tiết</a>
                                                                        </div>
                                                                    </figure>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <div class="right-block">
                                                                    <h5 class="product-name"><a title="<?php echo e($product['name']); ?>" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>"><?php echo e($product['name']); ?></a></h5>
                                                                    <div class="content_price">
                                                                        <span class="price product-price">
                                                                            <?php if($product['price'] > 0): ?>
                                                                            <?php echo e($product['is_sale'] == 1 ? number_format($product['price_sale']) : number_format($product['price'])); ?>

                                                                            <?php else: ?>
                                                                            Liên hệ
                                                                            <?php endif; ?>
                                                                        </span>
                                                                        <?php if( $product['is_sale'] == 1): ?>
                                                                        <span class="price old-price"><?php echo e(number_format($product['price'])); ?></span>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <?php if($product['price'] > 0): ?>
                                                                    <a class="add_to_cart_button" product-id=<?php echo e($product['id']); ?>>Mua</a>
                                                                    <?php endif; ?>
                                                                </div>

                                                            </li>
                                                        <?php endforeach; ?>
                                                       
                                                    </ul>
                                          
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                <?php endif; ?>
                <?php if( $loai['home_style'] == 3 ): ?>
                <div class="category-featured">
                    <nav class="navbar nav-menu show-brand">
                      <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                           <div class="navbar-brand" style="background-color:<?php echo e($loai['bg_color']); ?>"><a title="<?php echo e($loai['name']); ?>" href="<?php echo e(route('danh-muc-cha', $loai['slug'])); ?>"><img  alt="<?php echo e($loai['name']); ?>" class="lazy" data-original="<?php echo e(Helper::showImage($loai['icon_url'])); ?>" /><?php echo e($loai['name']); ?></a></div>
                          <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">           
                          <ul class="nav navbar-nav">
                                <?php foreach( $loai['child'] as $cate): ?>
                                <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                                <?php endforeach; ?>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                      <div id="elevator-<?php echo e($countLoaiSp); ?>" class="floor-elevator">
                            <a href="#<?php echo e($countLoaiSp > 1 ? "elevator-".($countLoaiSp - 1)  : " "); ?>" class="btn-elevator up <?php echo e($countLoaiSp == 1 ? "disabled" : ""); ?> fa fa-angle-up"></a>
                            <a href="#<?php echo e($countLoaiSp < $totalLoaiHot ? "elevator-".($countLoaiSp + 1)  : " "); ?>" class="btn-elevator down <?php echo e($countLoaiSp == $totalLoaiHot ? "disabled" : ""); ?> fa fa-angle-down"></a>
                      </div>
                    </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <?php if( count($loai['child']) <= 14 ): ?>
                        <ul class="sub-category-list">

                            <?php foreach( $loai['child'] as $cate): ?>
                            <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                            <?php endforeach; ?>

                        </ul>
                        <?php else: ?>
                        <div class="owl-carousel-vertical" data-items="1" data-nav="true" data-dots="false" data-loop="false">
                            <div class="item">
                                <ul class="sub-category-list">
                                    <?php 
                                        $count = 0;
                                    ?>
                                    <?php foreach( $loai['child'] as $cate): ?>
                                    <?php $count++; ?>
                                    <li><a title="<?php echo e($cate['name']); ?>" href="<?php echo e(route('danh-muc-con', [$loai['slug'], $cate['slug']])); ?>"><?php echo e($cate['name']); ?></a></li>
                                    <?php if($count == 14): ?>
                                            </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="sub-category-list">
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    
                                </ul>
                            </div>                                
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-10 col-right-tab banner-waper-left">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-14">                                    
                                    <div class="box-full clearfix">
                                        <ul class="product-list row">
                                            <li class="banner-waper hidden-xs">
                                                <ul class="owl-intab owl-carousel" data-loop="<?php echo count($bannerArr[$loai['id']]) > 1 ? 'true' : 'false'; ?>" data-items="1" data-autoplay="true" data-dots="false" <?php echo count($bannerArr[$loai['id']]) > 1 ? ' data-nav="true"' : ''; ?>>
                                                    <?php if( !empty($bannerArr[$loai['id']])): ?>
                                                    <?php foreach($bannerArr[$loai['id']] as $banner): ?>
                                                        <li>
                                                            <?php if($banner->type == 2): ?>
                                                            <a href="<?php echo e($banner->ads_url); ?>">
                                                            <?php endif; ?>
                                                            <img src="<?php echo e(Helper::showImage($banner['image_url'])); ?>" alt="Image">
                                                            <?php if($banner->type == 2): ?>
                                                            </a>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>     
                                                </ul>
                                            </li>
                                            <?php $count = 0; ?>
                                            <?php foreach( $productArr[$loai['id']] as $product ): ?>
                                            <?php $count++; ?>
                                            <?php if( $count <=3 ): ?>
                                                <?php 
                                                    if( $loai['is_hover'] == 1){                                                        
                                                        $tmp = isset($product['thuoc_tinh']) ? $product['thuoc_tinh'] : "";
                                                        $thuocTinhArr = json_decode($tmp, true);                                                     
                                                    }

                                                ?>
                                                <li>
                                                    <div class="left-block">
                                                        <?php if($product['pro_style'] == 1 && $product['image_pro'] != '' && $loai['icon_km'] != ''): ?>
                                                        <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($loai['icon_km'])); ?>" alt="Sản phẩm có quà tặng">
                                                        <?php endif; ?>
                                                        <?php if($product['pro_style'] == 2 && $product['image_pro'] != ''): ?>
                                                        <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" alt="qua tang kem <?php echo e($product['name']); ?>">
                                                        <?php endif; ?>
                                                        
                                                        <?php if( $product['is_sale'] == 1): ?>
                                                        <span class="discount"><?php echo e(100-round($product['price_sale']*100/$product['price'])); ?>%</span>
                                                        <?php endif; ?>
                                                        <a href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">
                                                        <img class="img-responsive lazy lazy-img1" alt="<?php echo e($product['name']); ?>" data-original="<?php echo e(Helper::showImage($product['image_url'])); ?>" />
                                                        <?php if($product['pro_style'] == 1 && $product['image_pro'] != ''): ?>
                                                        <img class="img-responsive lazy-img2 lazy" alt="product" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" />
                                                        <?php endif; ?>
                                                        </a>
                                                        <?php if( $loai['is_hover'] == 1 && $product['pro_style'] == 0): ?>
                                                        <figure class="mask-info">
                                                            <?php foreach($hoverInfo[$loai['id']] as $info): ?>
                                                            <?php 
                                                            $tmpInfo = explode(",", $info->str_thuoctinh_id);         
                                                            ?>

                                                            <span><?php echo e($info->text_hien_thi); ?>: <?php
                                                            $countT = 0; $totalT = count($tmpInfo);
                                                            foreach( $tmpInfo as $tinfo){
                                                                $countT++;
                                                                if(isset($thuocTinhArr[$tinfo])){
                                                                    echo $thuocTinhArr[$tinfo];
                                                                    echo $countT < $totalT ? ", " : "";
                                                                }
                                                            }

                                                             ?></span>
                                                            <?php endforeach; ?>
                                                            <div class="btn-action">
                                                              <a class="btnorder" product-id=<?php echo e($product['id']); ?>>Đặt hàng</a>
                                                              <a class="viewdetail" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">Chi tiết</a>
                                                            </div>
                                                        </figure>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a title="<?php echo e($product['name']); ?>" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>"><?php echo e($product['name']); ?></a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">
                                                            <?php if($product['price'] > 0): ?>
                                                            <?php echo e($product['is_sale'] == 1 ? number_format($product['price_sale']) : number_format($product['price'])); ?>

                                                            <?php else: ?>
                                                            Liên hệ
                                                            <?php endif; ?>
                                                            </span>
                                                            <?php if( $product['is_sale'] == 1): ?>
                                                            <span class="price old-price"><?php echo e(number_format($product['price'])); ?></span>
                                                            <?php endif; ?>


                                                        </div>
                                                        <?php if($product['price'] > 0): ?>
                                                        <a class="add_to_cart_button" product-id=<?php echo e($product['id']); ?>>Mua</a>
                                                        <?php endif; ?>
                                                    </div>

                                                </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>                                         
                                        </ul>
                                    </div>
                                    <div class="box-full clearfix">
                                        <ul class="product-list">
                                            <?php $count = 0; ?>
                                            <?php foreach( $productArr[$loai['id']] as $product ): ?>
                                            <?php $count++; ?>
                                            <?php 
                                                if( $loai['is_hover'] == 1){                                                        
                                                    $tmp = isset($product['thuoc_tinh']) ? $product['thuoc_tinh'] : "";
                                                    $thuocTinhArr = json_decode($tmp, true);                                                     
                                                }

                                            ?>
                                            <?php if( $count > 3 ): ?>

                                                <li>
                                                    <div class="left-block">
                                                        <?php if($product['pro_style'] == 1 && $product['image_pro'] != '' && $loai['icon_km'] != ''): ?>
                                                        <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($loai['icon_km'])); ?>" alt="Sản phẩm có quà tặng">
                                                        <?php endif; ?>
                                                        <?php if($product['pro_style'] == 2 && $product['image_pro'] != ''): ?>
                                                        <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" alt="qua tang kem <?php echo e($product['name']); ?>">
                                                        <?php endif; ?>
                                                        <?php if( $product['is_sale'] == 1): ?>
                                                        <span class="discount"><?php echo e(100-round($product['price_sale']*100/$product['price'])); ?>%</span>
                                                        <?php endif; ?>
                                                        <a href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">

                                                        <img class="img-responsive lazy lazy-img1" alt="<?php echo e($product['name']); ?>" src="<?php echo e(Helper::showImage($product['image_url'])); ?>" />
                                                        <?php if($product['pro_style'] == 1 && $product['image_pro'] != ''): ?>
                                                        <img class="img-responsive lazy-img2 lazy" alt="product" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" />
                                                        <?php endif; ?>
                                                        </a>
                                                        <?php if( $loai['is_hover'] == 1 && $product['pro_style'] == 0): ?>
                                                        <figure class="mask-info">
                                                            <?php foreach($hoverInfo[$loai['id']] as $info): ?>
                                                            <?php 
                                                            $tmpInfo = explode(",", $info->str_thuoctinh_id);         
                                                            ?>

                                                            <span><?php echo e($info->text_hien_thi); ?>: <?php
                                                            $countT = 0; $totalT = count($tmpInfo);
                                                            foreach( $tmpInfo as $tinfo){
                                                                $countT++;
                                                                echo $thuocTinhArr[$tinfo];
                                                                echo $countT < $totalT ? ", " : "";
                                                            }

                                                             ?></span>
                                                            <?php endforeach; ?>
                                                            <div class="btn-action">
                                                              <a class="btnorder" product-id=<?php echo e($product['id']); ?>>Đặt hàng</a>
                                                              <a class="viewdetail" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>">Chi tiết</a>
                                                            </div>
                                                        </figure>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a title="<?php echo e($product['name']); ?>" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>"><?php echo e($product['name']); ?></a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">
                                                                <?php if($product['price'] > 0): ?>
                                                                <?php echo e($product['is_sale'] == 1 ? number_format($product['price_sale']) : number_format($product['price'])); ?>

                                                                <?php else: ?>
                                                                Liên hệ
                                                                <?php endif; ?>

                                                            </span>
                                                            <?php if( $product['is_sale'] == 1): ?>
                                                            <span class="price old-price"><?php echo e(number_format($product['price'])); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <?php if($product['price'] > 0): ?>
                                                        <a class="add_to_cart_button" product-id=<?php echo e($product['id']); ?>>Mua</a>
                                                        <?php endif; ?>
                                                    </div>

                                                </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>       
                                          
                                       </ul>
                                    </div>
                                </div>
                               
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

<div id="content-wrap">
    <div class="container">
        <!-- Baner bottom -->
        <div class="row banner-bottom">
            <div class="col-sm-6 item-left">
                <div class="banner-boder-zoom">
                    <?php $banner = DB::table('banner')->where(['object_id' => 3, 'object_type' => 3])->orderBy('display_order', 'asc')->first(); 

                    ?>
                    <?php if($banner): ?>
                    <a href="#"><img alt="ads" class="img-responsive lazy" data-original="<?php echo e(Helper::showImage($banner->image_url)); ?>" /></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-6 item-right">
                <div class="banner-boder-zoom">
                    <?php $banner = DB::table('banner')->where(['object_id' => 4, 'object_type' => 3])->orderBy('display_order', 'asc')->first(); ?>
                    <?php if($banner): ?>
                    <a href="#"><img alt="ads" class="img-responsive lazy" data-original="<?php echo e(Helper::showImage($banner->image_url)); ?>" /></a>
                    <?php endif; ?>
                    <?php unset($banner); ?>
                </div>
            </div>
        </div>
        <!-- end banner bottom -->

        <!-- blog list -->
        <div class="blog-list">
            <h2 class="page-heading">
                <span class="page-heading-title">Tin công nghệ</span>
            </h2>
            <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="false" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                    <?php if( $articlesArr ): ?>
                        <?php foreach( $articlesArr as $articles ): ?>
                        <li>
                            <div class="post-thumb image-hover2">
                                <a href="<?php echo e(route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id])); ?>">
                                    <img data-original="<?php echo e(Helper::showImage($articles->image_url)); ?>" alt="<?php echo e($articles->title); ?>" style="max-height:145px;" class="lazy"></a>
                            </div>
                            <div class="post-desc">
                                <h3 class="post-title">
                                    <a href="<?php echo e(route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id])); ?>"><?php echo e($articles->title); ?></a>
                                </h3>
                                <div class="post-meta">
                                    <span class="date"><?php echo e(date('d-m-Y', strtotime($articles->created_at))); ?></span>
                                   
                                </div>
                                <div class="readmore">
                                    <a href="<?php echo e(route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id])); ?>">Chi tiết</a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                </ul>
            </div>
        </div>
        <!-- ./blog list -->

    </div> <!-- /.container -->
</div> <!-- /.content-wrap -->
<?php $__env->stopSection(); ?>