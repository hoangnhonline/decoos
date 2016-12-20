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

<div class="container">
  <div class="row">
@include('frontend.detail.sidebar')

<div class="block-main col-lg-9 col-md-8 col-sm-8">
  <div class="product-view">

    <div class="title-page">
      <h2 class="page-title">Chi Tiết Sản Phẩm</h2>
    </div>

    <div class="clearfix"></div>

    <div class="block-slide-proview">
      <div class="product-img-box col-md-5 col-sm-5 col-xs-12">        
        @if( !empty( $hinhArr ))
        <div class="bxslider product-img-gallery">
            @foreach( $hinhArr as $hinh )
            <div class="item">
                <img src="{{ Helper::showImage($hinh['image_url']) }}" alt="#" />
            </div>
            @endforeach
        </div>
        <div class="product-img-thumb">
            <div id="gallery_01" class="pro-thumb-img">
                <?php $i = 0; ?>
                @foreach( $hinhArr as $hinh )
                <
                <div class="item">
                    <a href="#" data-slide-index="{{ $i }}">
                        <img src="{{ Helper::showImage($hinh['image_url']) }}" alt="#" />
                    </a>
                </div>
                <?php $i++; ?>
                @endforeach
            </div>
        </div>
        @endif
      </div><!--/ end product-img-box -->
      <div class="product-shop col-md-7 col-sm-7 col-xs-12">
                        <div class="product-name">
                            <h1 class="name-product-detail">{{ $lang == "vi" ? $detail->name_vi : $detail->name_en }}</h1>
                        </div>
                        <div class="compare">
                <!-- <a href="javascript:void()" title="Theo dõi sản phẩm" onclick="alert('Chức năng đang được cập nhật');">Theo dõi</a>&nbsp;&nbsp;|&nbsp;
                <label id="tenss_5282698" class="block_sp_new_tensp" style="display:none">Dây lưng Louis ...</label> -->
                <!-- <a href="javascript:void()" title="So sánh sản phẩm" class="btn_ss_vsp" id="ss_5282698_0">So sánh</a>&nbsp;&nbsp;|&nbsp; -->
                Lượt xem : <span class="view">575</span>&nbsp;&nbsp;|&nbsp;
                Ngày đăng : <span class="view">{{ date('d-m-Y', strtotime($detail->created_at)) }}</span> 
            </div>
            <div class="txPro ui-mark">
          <span class="lbLeft">Giá sản phẩm:</span>
          <span class="giasp">{{ ($detail->is_sale == 1 && $detail->price_sale > 0) ? number_format($detail->price_sale) : number_format($detail->price) }} <b>VNĐ</b></span>
            </div>
            <div class="txPro ui-mark">
          <span class="lbLeft">Mã sản phẩm:</span>
          <span class="masp">{{ $detail->code }}</span>
            </div>
            <div class="product-description">
                          <label class="title">Liên hệ mua hàng:</label>
                          <div class="pro-desc-info">
                              <p>Vui lòng liên hệ số điện thoại: 0909 090 090</p>
                          </div>
                      </div>
                    </div><!--/ end product-shop -->

                    <div class="clearfix"></div>

                    <div class="product-detail">
                      <div class="tab product-tab">
                          <ul data-sequence="400" role="tablist">
                            <li role="presentation"><a href="#mota" aria-controls="mota" role="tab" data-toggle="tab">Mô Tả</a></li>
                            <li role="presentation"><a href="#danhgia" aria-controls="danhgia" role="tab" data-toggle="tab">Đánh Giá</a></li>
                            @if($detail->video_url)
                            <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Video</a></li>
                            @endif
                          </ul>
                      </div>
                      <div class="tab-contents">
                          <div role="tabpanel" id="mota" class="tab-info tab-bg tab-desc tab-pane fade in active">
                              <?php echo $lang == "vi" ? $detail->content_vi : $detail->content_en; ?>
                          </div>
                          <div role="tabpanel" id="danhgia" class="tab-info tab-pane fade">                            
                            <div class="fb-comments" data-href="{{ url()->current() }}" data-numposts="5"></div>
                          </div>                          
                          @if($detail->video_url)
                          <div role="tabpanel" id="videos" class="tab-info tab-pane fade">
                            <iframe width="100%" height="400" src="{{ $detail->video_url }}" frameborder="0" allowfullscreen></iframe>
                          </div>
                          @endif
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