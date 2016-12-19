<div class="left-block">
    <?php if($product['pro_style'] == 1 && $product['image_pro'] != '' && $rs->icon_km != ''): ?>
    <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($rs->icon_km)); ?>" alt="Sản phẩm có quà tặng">
    <?php endif; ?>
    <?php if($product['pro_style'] == 2 && $product['image_pro'] != ''): ?>
    <img class="gift-icon lazy" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" alt="qua tang kem <?php echo e($product['name']); ?>">
    <?php endif; ?>
    <?php if( $product['is_sale'] == 1): ?>
    <span class="discount">-<?php echo e(100-round($product['price_sale']*100/$product['price'])); ?>%</span>
    <?php endif; ?>
    <a href="<?php echo e(route('chi-tiet', $product['slug'])); ?>"><img class="img-responsive lazy-img1 lazy" alt="<?php echo e($product['name']); ?>" data-original="<?php echo e(Helper::showImage($product['image_url'])); ?>" /></a>
    <?php if($product['pro_style'] == 1 && $product['image_pro'] != ''): ?>
    <img class="img-responsive lazy-img2 lazy" alt="product" src="<?php echo e(Helper::showImage($product['image_pro'])); ?>" />
    <?php endif; ?>
    </a>                                    
    <?php if( $rs->is_hover == 1 && $product['pro_style'] == 0 && !empty($thuocTinhArr)): ?>
    <figure class="mask-info">
        <?php foreach($hoverInfo as $info): ?>
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
</div><!--left-->
<div class="right-block">
    <h2 class="product-name"><a title="<?php echo e($product['name']); ?>" href="<?php echo e(route('chi-tiet', $product['slug'])); ?>"><?php echo e($product['name']); ?></a></h2>
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
</div><!--right-->