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
  <!-- <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon"> -->

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
    @include('frontend.partials.main-header')
    <!-- end header -->

    @yield('slider')

    <div class="block-products">
      <div class="block-title block-title-b2">
        <div class="container">
          <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
            <li role="presentation" class="active"><a href="#spn" aria-controls="home" role="tab" data-toggle="tab">Sản Phẩm Mới</a></li>
            <li role="presentation"><a href="#sph" aria-controls="profile" role="tab" data-toggle="tab">Sản Phẩm HOT</a></li>
            <li role="presentation"><a href="#spkm" aria-controls="messages" role="tab" data-toggle="tab">Sản Phẩm Khuyến Mãi</a></li>
          </ul><!-- end nav tabs -->
        </div><!-- end title -->
      </div>
      <div class="block-contents">
        <div class="container">
          <div class="row">
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane fade in active" id="spn">

                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/pro_new/1.jpg') }}" alt="Bóp nam">
                        <!-- <img src="{{ URL::asset('assets/images/products/pro_new/1.jpg') }}" alt="Bóp nam" class="img_hover"> -->
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/pro_new/2.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/pro_new/3.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/pro_new/148066751795.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>

                <div class="container clearfix">
                  <a href="#" class="view-all pull-right">Xem tất cả</a>
                </div>
              </div><!-- end spn -->

              <div role="tabpanel" class="tab-pane fade" id="sph">
                Sản Phẩm HOT
              </div><!-- end sph -->

              <div role="tabpanel" class="tab-pane fade" id="spkm">
                Sản Phẩm Khuyến Mãi
              </div><!-- end spkm -->

            </div><!-- end tab panes -->
          </div>
        </div>
      </div><!-- end contents -->
    </div><!-- end products -->

    <div class="block-products">
      <div class="block-title block-title-b2">
        <div class="container">
          <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
            <li role="presentation" class="active"><a href="#tln" aria-controls="home" role="tab" data-toggle="tab">Thắt Lưng Nam</a></li>
            <li role="presentation"><a href="#tlnhh" aria-controls="profile" role="tab" data-toggle="tab">Thắt lưng nam hàng hiệu</a></li>
            <li role="presentation"><a href="#tlhm" aria-controls="messages" role="tab" data-toggle="tab">Thắt lưng Hermes</a></li>
            <li role="presentation"><a href="#tllv" aria-controls="messages" role="tab" data-toggle="tab">Thắt lưng Louis Vuitton</a></li>
            <li role="presentation"><a href="#dtldg" aria-controls="messages" role="tab" data-toggle="tab">Dây thắt lưng D &amp; G</a></li>

          </ul><!-- end nav tabs -->
        </div><!-- end title -->
      </div>
      <div class="block-contents">
        <div class="container">
          <div class="row">
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane fade in active" id="tln">

                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/that_lung_nam/1.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/that_lung_nam/2.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/that_lung_nam/3.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/that_lung_nam/4.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/that_lung_nam/5.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/that_lung_nam/6.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/that_lung_nam/7.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/that_lung_nam/8.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>

                <div class="container clearfix">
                  <a href="#" class="view-all pull-right">Xem tất cả</a>
                </div>
              </div><!-- end spn -->

              <div role="tabpanel" class="tab-pane fade" id="tlnhh">
                Thắt lưng nam hàng hiệu
              </div><!-- end sph -->

              <div role="tabpanel" class="tab-pane fade" id="tlhm">
                Thắt lưng Hermes
              </div><!-- end spkm -->

              <div role="tabpanel" class="tab-pane fade" id="tllv">
                Thắt lưng Louis Vuitton
              </div><!-- end spkm -->

              <div role="tabpanel" class="tab-pane fade" id="dtldg">
                Dây thắt lưng D &amp; G
              </div><!-- end spkm -->

            </div><!-- end tab panes -->
          </div>
        </div>
      </div><!-- end contents -->
    </div><!-- end products -->

    <div class="block-products">
      <div class="block-title block-title-b2">
        <div class="container">
          <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
            <li role="presentation" class="active"><a href="#vn" aria-controls="home" role="tab" data-toggle="tab">Ví Nam</a></li>
            <li role="presentation"><a href="#vnhh" aria-controls="profile" role="tab" data-toggle="tab">Ví Nam Hàng Hiệu</a></li>
            <li role="presentation"><a href="#vnd" aria-controls="messages" role="tab" data-toggle="tab">Ví Da Nam</a></li>
          </ul><!-- end nav tabs -->
        </div><!-- end title -->
      </div>
      <div class="block-contents">
        <div class="container">
          <div class="row">
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane fade in active" id="vn">

                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/1.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/2.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/3.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/4.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/5.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/6.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/7.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/8.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>

                <div class="container clearfix">
                  <a href="#" class="view-all pull-right">Xem tất cả</a>
                </div>
              </div><!-- end spn -->

              <div role="tabpanel" class="tab-pane fade" id="vnhh">
                Thắt lưng nam hàng hiệu
              </div><!-- end sph -->

              <div role="tabpanel" class="tab-pane fade" id="vnd">
                Thắt lưng Hermes
              </div><!-- end spkm -->

            </div><!-- end tab panes -->
          </div>
        </div>
      </div><!-- end contents -->
    </div><!-- end products -->

    <div class="block-products">
      <div class="block-title block-title-b2">
        <div class="container">
          <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
            <li role="presentation" class="active"><a href="#ddn" aria-controls="home" role="tab" data-toggle="tab">Dép Da Nam</a></li>
            <li role="presentation"><a href="#drmt" aria-controls="profile" role="tab" data-toggle="tab">Dr.Marten</a></li>
            <li role="presentation"><a href="#dsn" aria-controls="messages" role="tab" data-toggle="tab">Dép Sỏ Ngón</a></li>
          </ul><!-- end nav tabs -->
        </div><!-- end title -->
      </div>
      <div class="block-contents">
        <div class="container">
          <div class="row">
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane fade in active" id="ddn">

                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/1.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/2.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/3.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/4.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/5.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/6.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/7.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="products-item">
                    <div class="products-img">
                      <a href="#" class="" data-id="">
                        <img src="{{ URL::asset('assets/images/products/vi_nam/8.jpg') }}" alt="Bóp nam">
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">Bóp nam Decoos</a>
                      </h2>
                      <p class="products-info-price">
                        <span class="price-new">50.000</span>
                        <del class="price-old">100.000</del>
                      </p>
                      <div class="wishlist-compare">
                        <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                        <div class="compare"><span href="#" class="check-ss"></span></div>
                      </div>
                    </div>
                  </div><!-- end products-item -->
                </div>

                <div class="container clearfix">
                  <a href="#" class="view-all pull-right">Xem tất cả</a>
                </div>
              </div><!-- end spn -->

              <div role="tabpanel" class="tab-pane fade" id="drmt">
                Thắt lưng nam hàng hiệu
              </div><!-- end sph -->

              <div role="tabpanel" class="tab-pane fade" id="dsn">
                Thắt lưng Hermes
              </div><!-- end spkm -->

            </div><!-- end tab panes -->
          </div>
        </div>
      </div><!-- end contents -->
    </div><!-- end products -->

    <div class="block-news">
      <div class="block-title block-title-b2">
        <div class="container">
          <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
            <li role="presentation" class="active"><a href="#tln" aria-controls="home" role="tab" data-toggle="tab">Tin Tức Mới</a></li>
          </ul><!-- end nav tabs -->
        </div><!-- end title -->
      </div>
      <div class="block-contents">
        <div class="container">
          <div class="row">
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane fade in active" id="tln">

                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="news-item">
                    <div class="news-img">
                      <a href="#" title="">
                          <img src="{{ URL::asset('assets/images/news/1.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="news-info">
                      <h2 class="news-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="news-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="news-item">
                    <div class="news-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/2.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="news-info">
                      <h2 class="news-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="news-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="news-item">
                    <div class="news-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/3.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="news-info">
                      <h2 class="news-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="news-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="news-item">
                    <div class="news-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="news-info">
                      <h2 class="news-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="news-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>

                <div class="clearfix">
                  <a href="#" class="view-all pull-right">Xem tất cả</a>
                </div>
              </div><!-- end spn -->

            </div><!-- end tab panes -->
          </div>
        </div>
      </div><!-- end contents -->
    </div><!-- end news -->

    <div class="block-album">
      <div class="block-title block-title-b2">
        <div class="container">
          <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
            <li role="presentation" class="active"><a href="#bst" aria-controls="home" role="tab" data-toggle="tab">Bộ Sưu Tập</a></li>
          </ul><!-- end nav tabs -->
        </div><!-- end title -->
      </div>
      <div class="block-contents">
        <div class="container">
          <div class="row">
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane fade in active" id="bst">

                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="album-item">
                    <div class="album-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="album-info">
                      <h2 class="album-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="album-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="album-item">
                    <div class="album-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="album-info">
                      <h2 class="album-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="album-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="album-item">
                    <div class="album-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="album-info">
                      <h2 class="album-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="album-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="album-item">
                    <div class="album-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="album-info">
                      <h2 class="album-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="album-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>

                <div class="clearfix">
                  <a href="#" class="view-all pull-right">Xem tất cả</a>
                </div>
              </div><!-- end spn -->

            </div><!-- end tab panes -->
          </div>
        </div>
      </div><!-- end contents -->
    </div><!-- end album -->

    <div class="block-video">
      <div class="block-title block-title-b2">
        <div class="container">
          <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
            <li role="presentation" class="active"><a href="#bst" aria-controls="home" role="tab" data-toggle="tab">Bộ Sưu Tập</a></li>
          </ul><!-- end nav tabs -->
        </div><!-- end title -->
      </div>
      <div class="block-contents">
        <div class="container">
          <div class="row">
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane fade in active" id="bst">

                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="album-item">
                    <div class="album-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="album-info">
                      <h2 class="album-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="album-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="album-item">
                    <div class="album-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="album-info">
                      <h2 class="album-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="album-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="album-item">
                    <div class="album-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="album-info">
                      <h2 class="album-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="album-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="album-item">
                    <div class="album-img">
                      <a href="#" title="">
                            <img src="{{ URL::asset('assets/images/news/4.jpg') }}" alt="">
                          </a>
                    </div>
                    <div class="album-info">
                      <h2 class="album-info-name">
                        <a id="" class="" title="Bóp nam" href="#">Mua dây nịt thắt lưng hermes quận 3, tân bình, quận 10</a>
                      </h2>
                      <p class="album-contents">Mua thắt lưng hermes quận 3, Mua dây nịt hermes quận tân bình, Mua dây thắt lưng hermes quận 10, mua dây nịt hermes quận tân bình</p>
                    </div>
                  </div><!-- end news-item -->
                </div>

                <div class="clearfix">
                  <a href="#" class="view-all pull-right">Xem tất cả</a>
                </div>
              </div><!-- end spn -->

            </div><!-- end tab panes -->
          </div>
        </div>
      </div><!-- end contents -->
    </div><!-- end video -->

    <div class="block-partners">
      <div class="container">
        <div class="block-title block-title-b2">
          <h2>Đối Tác</h2>
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
            <li><a href="">Trang Chủ</a></li>
            <li><a href="">Giới Thiệu</a></li>
            <li><a href="">Thắt Lưng Nam</a></li>
            <li><a href="">Giày Nam</a></li>
            <li><a href="">Ví Nam</a></li>
            <li><a href="">Fanpage</a></li>
            <li><a href="">Liên Hệ</a></li>
            <li><a href="">Hướng Dẫn Mua Hàng</a></li>
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
    with_animations: ['cube', 'cubeRandom', 'block', 'cubeStop', 'cubeHide', 'cubeSize', 'horizontal', 'showBars', 'showBarsRandom', 'tube', 'fade', 'fadeFour', 'paralell', 'blind', 'blindHeight', 'blindWidth', 'directionTop', 'directionBottom', 'directionRight', 'directionLeft', 'cubeStopRandom', 'cubeSpread', 'cubeJelly', 'glassCube', 'glassBlock', 'circles', 'circlesInside', 'circlesRotate', 'cubeShow', 'upBars', 'downBars', 'hideBars', 'swapBars', 'swapBarsBack', 'swapBlocks', 'cut', 'random', 'randomSmart']
  });
  </script>

</body>
</html>