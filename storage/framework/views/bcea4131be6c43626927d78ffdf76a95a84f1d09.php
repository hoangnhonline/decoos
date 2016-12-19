<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="robots" content="index,follow"/>
        <meta http-equiv="content-language" content="en"/>
        <meta name="description" content="<?php echo $__env->yieldContent('site_description'); ?>"/>
        <meta name="keywords" content="<?php echo $__env->yieldContent('site_keywords'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <link rel="shortcut icon" href="<?php echo $__env->yieldContent('favicon'); ?>" type="image/x-icon"/>
        <link rel="canonical" href="<?php echo e(url()->current()); ?>"/>        
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
        <meta property="og:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
        <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
        <meta property="og:site_name" content="iCho.vn" />
        <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
        <meta property="og:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
        <meta name="twitter:title" content="<?php echo $__env->yieldContent('title'); ?>" />        
        <meta name="twitter:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/lib/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/lib/font-awesome/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/lib/select2/css/select2.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/lib/jquery.bxslider/jquery.bxslider.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/lib/owl.carousel/owl.carousel.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/lib/jquery-ui/jquery-ui.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/animate.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/reset.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/style.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/responsive.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/custom.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/sweetalert2.min.css')); ?>">
        <link href="<?php echo e(URL::asset('assets/css/square/red.css')); ?>" rel="stylesheet">
    </head>
    <body <?php echo e(\Request::route()->getName() == "home" ? "class=home" : ""); ?>>
        <?php echo $__env->yieldContent('header'); ?>
        <?php echo $__env->yieldContent('slider'); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->yieldContent('footer'); ?>

      <!--<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>-->
      <!-- Script-->
      <input type="hidden" id="route-ajax-login-fb" value="<?php echo e(route('ajax-login-by-fb')); ?>">
      <input type="hidden" id="route-cap-nhat-thong-tin" value="<?php echo e(route('cap-nhat-thong-tin')); ?>">
      <input type="hidden" id="fb-app-id" value="<?php echo e(env('FACEBOOK_APP_ID')); ?>">
      <input type="hidden" id="route-register-customer-ajax" value="<?php echo e(route('register-customer-ajax')); ?>">
      <input type="hidden" id="route-register-newsletter" value="<?php echo e(route('register.newsletter')); ?>">
      <input type="hidden" id="route-add-to-cart" value="<?php echo e(route('them-sanpham')); ?>" />
      <input type="hidden" id="route-cart" value="<?php echo e(route('gio-hang')); ?>" />

      <input type="hidden" id="route-auth-login-ajax" value="<?php echo e(route('auth-login-ajax')); ?>">
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/lib/jquery/jquery-1.11.2.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/lib/select2/js/select2.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/lib/jquery.bxslider/jquery.bxslider.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/lib/owl.carousel/owl.carousel.min.js')); ?>"></script>
      <?php if(\Request::route()->getName() == "chi-tiet"): ?>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/lib/jquery.elevatezoom.js')); ?>"></script>
      <?php endif; ?>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/js/jquery.actual.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/lib/jquery-ui/jquery-ui.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('assets/js/sweetalert2.min.js')); ?>"></script>
      <?php if(\Request::route()->getName() == "chi-tiet"): ?>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/lib/fancyBox/jquery.fancybox.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/js/readmore.min.js')); ?>"></script>
      <?php endif; ?>
      <script src="<?php echo e(URL::asset('assets/js/icheck.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/js/lazy.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(URL::asset('assets/js/theme-script.js')); ?>"></script>
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', '<?php echo e($settingArr['google_analystic']); ?>', 'auto');
      ga('send', 'pageview');

      </script>
      <?php if(\Request::route()->getName() == "home"): ?>
      <script type="text/javascript">
          $(document).ready(function(){
              $.ajax({
                type: "GET",
                url: '<?php echo e(route("load-slider")); ?>',              
                success: function(data) {
                    $('#home-slider').html(data);
                    var slider = $('#contenhomeslider').bxSlider(
                        {
                            nextText:'<i class="fa fa-angle-right"></i>',
                            prevText:'<i class="fa fa-angle-left"></i>',
                            auto: true,
                        }

                    );
                    
                }              
              });
              <?php if(Session::get('userId') > 0): ?>
              $.ajax({
                type: "GET",
                url: '<?php echo e(route("count-message")); ?>',              
                success: function(count) {
                    if(parseInt(count) > 0){
                      $('#countNoti').html(count).show();
                    }
                }              
              });              
              <?php endif; ?>

          });

      </script>
      <?php endif; ?>
      <?php echo $__env->yieldContent('javascript'); ?>      
      
       <!-- Hỗ trơ trực tuyến Facebook -->
  <div class="contact-face" style="">
          <div class="title_quancaog" style="background: #d0021b;color: #fff;padding: 3px 10px;cursor:pointer;">
          <p class="xclose" style="display: none;margin: 0;" onclick="closeface();"><i class="fa fa-minus" aria-hidden="true" style="margin-right: 10px;"></i>Hỗ trợ trực tuyến</p>
          <p class="xopen" style="margin: 0;" onclick="openface();"><i class="fa fa-envelope-o" style="margin-right: 10px;" aria-hidden="true"></i>Để lại lời nhắn</p>
      </div>
      <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/www.icho.vn" data-width="320px" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
          <div class="fb-xfbml-parse-ignore">
              <blockquote cite="https://www.facebook.com/www.icho.vn">
                  <a href="https://www.facebook.com/www.icho.vn">iCho.vn</a>
              </blockquote>
          </div>
      </div>
  </div>
  </body>
</html>
