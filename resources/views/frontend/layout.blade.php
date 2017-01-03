<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en-US" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en-US" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="en-US" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Decoos</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="index,follow" />
  <!-- <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon"> -->
  <link rel="icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon">

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/responsive.css') }}">
  <!-- ===== Font ===== -->
  <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/icofont.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=vietnamese" rel="stylesheet">
  <!-- ===== Skitter ===== -->
  <link href="{{ URL::asset('assets/skitter-master/css/skitter.styles.css') }}" type="text/css" media="all" rel="stylesheet" />
  <!-- ===== Animate CSS ===== -->
  <link href="{{ URL::asset('assets/css/animate.min.css') }}" type="text/css" media="all" rel="stylesheet" />
  <!-- ===== Owl CSS ===== -->
  <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all" rel="stylesheet" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <link href='{{ URL::asset('assets/css/animations-ie-fix.css') }}' rel='stylesheet'>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <div class="wrapper">

    <div class="loading-container" id="loading">
          <div class="loading-inner">
              <span class="loading-1"></span>
              <span class="loading-2"></span>
              <span class="loading-3"></span>
          </div>
    </div>
    <!-- preloader -->

    <div class="menu-fixed">
      <ul class="menu-fixed-child">
        <li><a href="">Hướng Dẫn Mua Hàng</a></li>
        <li><a href="">Sơ Đồ Trang</a></li>
        <li><a href="">Về Chúng Tôi</a></li>
      </ul>
    </div>

    @include('frontend.partials.main-header')
    <!-- end header -->

    @yield('slider')

    @yield('content')    

    <div class="block-partners">
      <div class="container">
        <div class="block-title block-title-b2">
          <h2>{{ trans('text.partner') }}</h2>
        </div><!-- end title -->
      </div>
      <div class="block-contents">
        <div class="container">
          <div class="slide-partners">
            <ul  class="owl-carousel owl-theme" data-nav="false" data-dots="false" data-margin="0" data-autoplayTimeout="700" data-autoplay="true" data-loop="true" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":2},"768":{"items":3},"800":{"items":3},"992":{"items":7}}'>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners1.jpg') }}" alt="partners1"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners2.jpg') }}" alt="partners2"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners3.jpg') }}" alt="partners3"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners4.jpg') }}" alt="partners4"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners5.jpg') }}" alt="partners5"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners6.jpg') }}" alt="partners6"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners6.jpg') }}" alt="partners7"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners1.jpg') }}" alt="partners7"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners2.jpg') }}" alt="partners6"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners3.jpg') }}" alt="partners5"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners4.jpg') }}" alt="partners4"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners5.jpg') }}" alt="partners3"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners6.jpg') }}" alt="partners2"></li>
              <li class="item"><img src="{{ URL::asset('assets/images/partners/partners6.jpg') }}" alt="partners7"></li>
            </ul>
          </div>
        </div>
      </div><!-- end contents -->
    </div><!-- end partners -->

    <footer>
      <div class="container">
        <div class="menu-footer">
          <ul>
            <li><a href="{{ route('home') }}" class="active">{{ $lang == 'vi' ? "Trang chủ" : "Home" }}</a></li>
            <li><a href="{{ $lang == 'vi' ? route('pages', 'gioi-thieu') : route('pages', 'about-us')}}">{{ $lang == 'vi' ? "Giới thiệu" : "About us" }}</a></li>
          @foreach($loaiSp as $loai)
          <li><a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loai->slug_vi]) : route('danh-muc-cha', [$loai->slug_en]) }}">{{ $lang == 'vi' ? $loai->name_vi : $loai->name_en }}</a></li>
          @endforeach
          <li><a href="">Fanpage</a></li>
          <li><a href="{{ $lang == 'vi' ? route('contact-vi') : route('contact-en') }}">{{ $lang == 'vi' ? "Liên hệ" : "Contact us" }}</a></li>
          <li><a href="{{ $lang == 'vi' ? route('pages', 'huong-dan-mua-hang') : route('pages', 'shopping-guide')}}">{{ $lang == 'vi' ? "Hướng dẫn mua hàng" : "Shopping guide" }}</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-content">
        
      </div>
      <div class="develop">
        <div class="container">
          <p class="text-center">2016 © Copyright by <a href="#"><b>Decoos</b></a> - All rights reserved.</p>
        </div>
      </div>
    </footer>

    <a id="return-to-top" class="td-scroll-up" href="javascript:void(0)">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
      </a>
      <!-- RETURN TO TOP -->

  </div><!-- end wrapper -->

  <!-- ===== JS ===== -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- ===== Skitter ===== -->
  <script type="text/javascript" src="{{ URL::asset('assets/skitter-master/js/jquery.easing.1.3.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/skitter-master/js/jquery.skitter.min.js') }}"></script>
  <!-- Sticky -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.sticky.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/lazy.js') }}"></script>
  <!-- JS WOW -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
  <!-- JS WOW -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
  <!-- ===== Main ===== -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>

  <script>
    $('.box_skitter_large').skitter({
      theme: 'square',
      numbers: false,
      dots: false,
      navigation: true,
      progressbar: true,
      with_animations: ['cube', 'cubeRandom', 'block', 'cubeStop', 'cubeHide', 'cubeSize', 'horizontal', 'showBars', 'showBarsRandom', 'tube', 'fade', 'fadeFour', 'paralell', 'blind', 'blindHeight', 'blindWidth', 'directionTop', 'directionBottom', 'directionRight', 'directionLeft', 'cubeStopRandom', 'cubeSpread', 'cubeJelly', 'glassCube', 'glassBlock', 'circles', 'circlesInside', 'circlesRotate', 'cubeShow', 'upBars', 'downBars', 'hideBars', 'swapBars', 'swapBarsBack', 'swapBlocks', 'cut', 'random', 'randomSmart']
    });
  </script>
  
  <script type="text/javascript">
    $(document).ready(function(){
      $("img.lazy").lazyload();
      $('img.lang').click(function(){
        $.ajax({
          url : '{{ route('set-lang') }}',
          type : 'GET',
          data : {
            lang : $(this).data('lang')
          },
          success : function(){
            location.href = "{{ route('home') }}";
          }
        });
      });
    });

  </script>
  @yield('javascript')

</body>
</html>