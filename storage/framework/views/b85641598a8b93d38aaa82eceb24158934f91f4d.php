<div class="container">
    <div class="row">
        <div class="col-sm-3 slider-left"></div>
        <div class="col-sm-9 header-top-right">
            <div class="homeslider">
                <div class="content-slide">
                    <?php 
                    $bannerArr = DB::table('banner')->where(['object_id' => 1, 'object_type' => 3])->orderBy('display_order', 'asc')->get();
                    ?>
                    <?php if($bannerArr): ?>
                    <ul id="contenhomeslider">
                      <?php foreach($bannerArr as $banner): ?>
                      <li>
                      <?php if($banner->ads_url !=''): ?>
                      <a href="<?php echo e($banner->ads_url); ?>">
                      <?php endif; ?>
                      <img alt="Funky roots" src="<?php echo e(Helper::showImage($banner->image_url)); ?>" title="Funky roots">
                      <?php if($banner->ads_url !=''): ?>
                      </a>
                      <?php endif; ?>
                      </li>
                      <?php endforeach; ?>                        
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>