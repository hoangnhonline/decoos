<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
            <a href="" title="Đơn hàng của tôi">Thông báo của tôi</a>
        </div>
        <!-- ./breadcrumb -->
        <div class="row">
            <?php echo $__env->make('frontend.account.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">Thông báo của tôi</span>
                    </h1>
                               
                    <div class="dashboard-order have-margin" style="margin-top:15px">
                        <div>

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Khuyến mãi hấp dẫn</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Thông tin đơn hàng</a></li>                           
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                
                                <div class="account-notify">
                                <?php if(!empty($notiOrder)): ?>
                                   <?php foreach($notiSale as $noti): ?>
                                   <div class="item ">
                                      <div class="account-notify-date">
                                         <strong><?php echo e(date('d/m/Y', strtotime($noti['created_at']))); ?></strong>
                                      </div>
                                      <div class="account-notify-content">
                                         <p><?php echo $noti['content']; ?>
                                            <a target="_blank" href="<?php echo e($noti['event_url']); ?>" style="color:#EC1C24;margin-left:10px">Chi tiết</a>                   
                                         </p>
                                      </div>
                                   </div>
                                   <?php endforeach; ?>
                                   <?php endif; ?>
                                   <div class="list-pager">
                                   </div>
                                </div>                               

                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="account-notify">
                                <?php if(!empty($notiOrder)): ?>
                                 <?php foreach($notiOrder as $noti): ?>
                                   <div class="item ">
                                      <div class="account-notify-date">
                                         <strong><?php echo e(date('d/m/Y', strtotime($noti['created_at']))); ?></strong>
                                      </div>
                                      <div class="account-notify-content">
                                         <p><?php echo $noti['content']; ?></p>
                                      </div>
                                   </div>
                                   <?php endforeach; ?>
                            <?php endif; ?>
                            </div>
                            </div>                            
                          </div>

                        </div>

                    </div>
            </div>
        </div><!-- /.page-content -->
    </div>
</div>
<style type="text/css">    
    .dashboard-order.have-margin {
        margin-bottom: 20px;
    }   
    table.table-responsive thead tr th {
        display: table-cell;
        padding: 8px;
        background: #f8f8f8;
        font-weight: 500;    
    }
    table.table-responsive tbody tr td{
        font-size: 14px !important;
    }
</style>
<div class="clearfix"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('javascript'); ?>
   <script type="text/javascript">
    $(document).ready(function() {

    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>