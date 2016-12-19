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
            <a href="" title="Đơn hàng của tôi">Đơn hàng của tôi</a>
        </div>
        <!-- ./breadcrumb -->
        <div class="row">
            <?php echo $__env->make('frontend.account.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">Danh sách đơn hàng của tôi</span>
                    </h1>
                               
                    <div class="dashboard-order have-margin">
                        <table class="table-responsive table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    <span class="hidden-xs hidden-sm hidden-md">Mã ĐH</span>
                                    <span class="hidden-lg">Code</span>
                                </th>
                                <th>Ngày mua</th>
                                <th>Sản phẩm</th>
                                <th style="text-align:right">Tổng tiền</th>
                                <th>
                                    <span class="hidden-xs hidden-sm hidden-md">Trạng thái đơn hàng</span>
                                    <span class="hidden-lg">Trạng thái</span>
                                </th>
                                <!--                            <th></th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($orders as $order): ?>
                                <tr>
                                    <td style="text-align:center;"><a style="color:#ec1c24" href="<?php echo e(route('order-detail', $order->id)); ?>"><?php echo e(str_pad($order->id, 6, "0", STR_PAD_LEFT)); ?></a></td>
                                    <td><?php echo e(date('d/m/Y', strtotime($order->created_at))); ?></td>
                                    <td>                                        
                                    <?php foreach($order->order_detail()->get() as $detail): ?>
                                    
                                    <p><?php echo e(Helper::getName($detail->sp_id, 'san_pham')); ?></p>
                                    <?php endforeach; ?>
                                    </td>
                                    <td style="text-align:right"><?php echo e(number_format($order->tong_tien)); ?>&nbsp;₫</td>                                    
                                    <td style="text-align:center">
                                        <span class="order-status">
                                            <?php echo e($status[$order->status]); ?>

                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
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