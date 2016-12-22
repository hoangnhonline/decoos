@extends('frontend.layout')

@section('content')
<div class="block-headline-detail container">
  <ul class="breadcrumb breadcrumb-customize">
      <li><a href="index.html">Trang Chủ</a></li>
      <li><a href="#">Sản Phẩm</a></li>
      <li><a href="#">Thắt Lưng Nam</a></li>
      <li><a href="#">Dây lưng Louis Vuitton thời trang cao cấp TLN176</a></li>
  </ul>
</div>
<div class="container page">
    <div class="row">
      
  @include('frontend.detail.sidebar')

  <div class="block-main col-lg-9 col-md-8 col-sm-8">
    <div class="page-view">

      <div class="title-page">
        <h2 class="page-title">Chi Tiết Album</h2>
      </div>

      <div class="clearfix"></div>

      <div class="albumdetail">
        <div class="contentdetail">
          <h1>Ví Nam Bóp Nam Thời Trang</h1>
          <ul id="imageGallery" class="imageGallery_ct">
            <li data-thumb="images/products/that_lung_nam/1.jpg" data-src="images/products/that_lung_nam/1.jpg">
              <img src="images/products/that_lung_nam/1.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/2.jpg" data-src="images/products/that_lung_nam/2.jpg">
              <img src="images/products/that_lung_nam/2.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/3.jpg" data-src="images/products/that_lung_nam/3.jpg">
              <img src="images/products/that_lung_nam/3.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/4.jpg" data-src="images/products/that_lung_nam/4.jpg">
              <img src="images/products/that_lung_nam/4.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/5.jpg" data-src="images/products/that_lung_nam/5.jpg">
              <img src="images/products/that_lung_nam/5.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/6.jpg" data-src="images/products/that_lung_nam/6.jpg">
              <img src="images/products/that_lung_nam/6.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/7.jpg" data-src="images/products/that_lung_nam/7.jpg">
              <img src="images/products/that_lung_nam/7.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/8.jpg" data-src="images/products/that_lung_nam/8.jpg">
              <img src="images/products/that_lung_nam/8.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/1.jpg" data-src="images/products/that_lung_nam/1.jpg">
              <img src="images/products/that_lung_nam/1.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/2.jpg" data-src="images/products/that_lung_nam/2.jpg">
              <img src="images/products/that_lung_nam/2.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/3.jpg" data-src="images/products/that_lung_nam/3.jpg">
              <img src="images/products/that_lung_nam/3.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/4.jpg" data-src="images/products/that_lung_nam/4.jpg">
              <img src="images/products/that_lung_nam/4.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/5.jpg" data-src="images/products/that_lung_nam/5.jpg">
              <img src="images/products/that_lung_nam/5.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/6.jpg" data-src="images/products/that_lung_nam/6.jpg">
              <img src="images/products/that_lung_nam/6.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/7.jpg" data-src="images/products/that_lung_nam/7.jpg">
              <img src="images/products/that_lung_nam/7.jpg" />
            </li>
            <li data-thumb="images/products/that_lung_nam/8.jpg" data-src="images/products/that_lung_nam/8.jpg">
              <img src="images/products/that_lung_nam/8.jpg" />
            </li>
            </li>
          </ul>

          <div class="ttin_tag">
            <div class="top_tt">
              <img src="images/icon_ttin_tag.png" class="ttin_left_tag">
              <div class="chu_tag">
                <a href="#">dây nịt nam</a>,
                <a href="#">day nit nam</a>,
                <a href="h#">day lung nam</a>,
                <a href="h#">dây lưng nam</a>,
                <a href="#">thắt lưng nam</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!--/ end product-view -->
  </div><!--/ end block-main -->

  <div class="clearfix"></div>
    </div>
  </div>

@endsection
@section('javascript')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=843110792495973";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style type="text/css">
    .fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style], .fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] 
{
       width: 100% !important;
}
</style>
<!-- Js zoom -->
<script src="{{ URL::asset('assets/js/jquery.zoom.min.js') }}"></script>
<!-- Js bxslider -->
<script src="{{ URL::asset('assets/js/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".bxslider").bxSlider({
        pagerCustom: '.pro-thumb-img',
        nextText: '<i class="icofont icofont-rounded-right"></i>',
        prevText: '<i class="icofont icofont-rounded-left"></i>'
    });

    $(".pro-thumb-img").bxSlider({
        slideMargin: 10,
        maxSlides: 4,
        pager: false,
        controls: false,
        slideWidth: 75,
        infiniteLoop: false
    });
  });
</script>
@endsection