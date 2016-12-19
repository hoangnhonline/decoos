<div class="col-sm-3" id="left_column">
  <!-- block category -->
      <div class="block left-module">
          <p class="title_block">Thông tin tài khoản</p>
          <div class="block_content">
              <!-- layered -->
              <div class="layered layered-category">
                  <div class="layered-content">
                      <ul class="tree-menu">
                          <li <?php echo e(\Request::route()->getName() == "order-history" || \Request::route()->getName() == "order-detail" ? "class=active" : ""); ?>>
                              <a href="<?php echo e(route('order-history')); ?>" title="Đơn hàng của tôi"> Đơn hàng của tôi</a>
                          </li>
                          <li <?php echo e(\Request::route()->getName() == "notification" ? "class=active" : ""); ?>>
                              <a href="<?php echo e(route('notification')); ?>" title="Thông báo của tôi"> Thông báo của tôi</a>
                          </li>
                          <li>
                              <a href="<?php echo e(route('user-logout')); ?>" title="Thoát tài khoản">Thoát tài khoản </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <!-- ./layered -->
          </div>
      </div>
      <!-- ./block category  -->
      <!-- Banner silebar -->
      <?php echo $__env->make('frontend.partials.banner-slidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- ./Banner silebar -->
</div> 