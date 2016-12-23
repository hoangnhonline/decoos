@extends('frontend.layout')

@section('content')
<div class="block-headline-detail container">
  <ul class="breadcrumb breadcrumb-customize">
      <li><a href="index.html">Trang Chủ</a></li>
      <li><a href="{{ $lang == 'vi' ? route('album-vi') : route('album-en') }}">{{ $lang == 'vi' ? "Bộ sưu tập" : "Album" }}</a></li>
  </ul>
</div>
<div class="container page">
  <div class="row">
      
    @include('frontend.detail.sidebar')

    <div class="block-main col-lg-9 col-md-8 col-sm-8">
      <div class="page-view">

        <div class="title-page">
          <h2 class="page-title">{{ $lang == 'vi' ? "Bộ sưu tập" : "Album" }}</h2>
        </div>

        <div class="clearfix"></div>

        <div class="page-layout-2columns page-child grid page-child-grid">
          <div class="page-child-items row">
            @if($albumList->count() > 0)
              @foreach($albumList as $album)
              <div class="page-child-item">
                <div class="album-item">
                   <a href="{{ $lang == 'vi' ? route('chi-tiet-album', [$album->slug_vi, $album->id]) : route('chi-tiet-album', [$album->slug_en, $album->id]) }}" title="{{ $lang == 'vi' ? $album->name_vi : $album->name_en }}">
                    <i class="icofont icofont-search-alt-1"></i>
                  </a>
                  <div class="album-img">
                        <img src="{{ Helper::showImage($album->image_url) }}" alt="{{ $lang == 'vi' ? $album->name_vi : $album->name_en }}">
                      </div>
                  <div class="album-info">
                    <h2 class="album-info-name">
                       <a href="{{ $lang == 'vi' ? route('chi-tiet-album', [$album->slug_vi, $album->id]) : route('chi-tiet-album', [$album->slug_en, $album->id]) }}" title="{{ $lang == 'vi' ? $album->name_vi : $album->name_en }}">{{ $lang == 'vi' ? $album->name_vi : $album->name_en }}</a>
                    </h2>
                  </div>
                </div>
              </div><!-- end page child item -->                       
              @endforeach
            @endif
          </div><!-- end page child items -->

          <div class="text-center">
              {{ $albumList->links() }}
          </div><!-- pagination -->
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
<link href="{{ URL::asset('assets/css/lightslider.css') }}" type="text/css" media="all" rel="stylesheet" />
  <!-- ===== Owl Lightgallery ===== -->
<link href="{{ URL::asset('assets/lightgallery/css/lightgallery.min.css') }}" type="text/css" media="all" rel="stylesheet" />
<script src="{{ URL::asset('assets/js/lightslider.js') }}"></script>
    <!-- Js lightslider Integrate with lightGallery -->
<script src="{{ URL::asset('assets/lightgallery/js/lightgallery.min.js') }}"></script>
<script>
    // Album details width thumbnail
    $(document).ready(function() {
      $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        slideMargin: 0,
        speed:800,
        auto:true,
        loop:true,
        onSliderLoad: function(el) {
          el.lightGallery({
          selector: '#imageGallery .lslide',
          });
        }
      });
    });
  </script>

@endsection