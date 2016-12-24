<div class="block-sidebar col-lg-3 col-md-4 col-sm-4">
  <div class="block-category block-sidebars">
    <div class="side-title">
      {{ trans('text.category') }}
    </div>
    <div class="site-content">
      <ul class="list-category">
      @foreach($loaiSp as $loai)
        <li class="has-child"><a class="parent-cate" href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loai->slug_vi]) : route('danh-muc-cha', [$loai->slug_en]) }}" title="{{ $lang == 'vi' ? $loai->name_vi : $loai->name_en }}">{{ $lang == 'vi' ? $loai->name_vi : $loai->name_en }}</a>
          <ul class="cate-child">
            @foreach($cateList[$loai->id] as $cate)
            <li><a href="{{ $lang == 'vi' ? route('danh-muc-con', [$loai->slug_vi, $cate->slug_vi]) : route('danh-muc-con', [$loai->slug_en, $cate->slug_en]) }}" title="{{ $lang == "vi" ? $cate->name_vi : $cate->name_en }}">{{ $lang == "vi" ? $cate->name_vi : $cate->name_en }}</a></li>
            @endforeach
          </ul>
        </li>
        @endforeach
      </ul>
    </div>
  </div><!--/ end block-category -->
 

  <div class="block-contact block-sidebars">
    <div class="side-title">
      {{ trans('text.online-support') }}
    </div>
    <div class="site-content">
      <ul class="list-category">
        <li>Tp.HCM: <span>0909.999.999</span></li>
        <li>Tp.HCM: <span>0909.999.999</span></li>
      </ul>
    </div>
  </div><!--/ end block-contact -->

  <div class="block-fanpage block-sidebars">
    <div class="side-title">
      FANPAGE FACEBOOK
    </div>
    <div class="site-content">
      
    </div>
  </div><!--/ end block-fanpage -->
<?php 
$tagList = $lang == 'vi' ? $tagListVi  : $tagListEn;
?>
@if($tagList->count() > 0)
<div class="block-tags block-sidebars">
  <div class="side-title">
    TAGS THỜI TRANG NAM
  </div>
  <div class="site-content">
    @foreach($tagList as $tag)
    <a class="tag_{{ $tag->level }}" href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>&nbsp;&nbsp;
    @endforeach
  </div>
</div><!--/ end block-tags -->
@endif
@if($saleList->count() > 0)
  <div class="block-cate block-sidebars">
    <div class="side-title">
     {{ trans('text.sale-product') }}
    </div>
    <div class="site-content">
      <ul  class="owl-carousel owl-theme owl-style2" data-nav="false" data-margin="0" data-items='1' data-autoplayTimeout="1000" data-autoplay="true" data-loop="true">
        @foreach($saleList as $product)
        <li>
          <div class="products-item">
            <div class="products-img">
              <a href="{{ $lang == 'vi' ? route('chi-tiet-vi',['slug' => $product->slug_vi, 'id' => $product->id]) : route('chi-tiet-en', ['slug' => $product->slug_en, 'id' => $product->id]) }}">
                <img src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}">
              </a>
            </div>
            <div class="products-info">
              <h2 class="products-info-name">
                <a class="ten_sp " title="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}" href="{{ $lang == 'vi' ? route('chi-tiet-vi',['slug' => $product->slug_vi, 'id' => $product->id]) : route('chi-tiet-en', ['slug' => $product->slug_en, 'id' => $product->id]) }}">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a>
              </h2>
              <p class="products-info-price">
                @if($product->is_sale == 1 && $product->price_sale > 0)
                  <span class="price-new">{{ number_format($product->price_sale) }}</span>
                  <del class="price-old">{{ number_format($product->price) }}</del>
                @else
                  <span class="price-new">{{ number_format($product->price) }}</span>
                @endif
              </p>
              <div class="wishlist-compare">
                <div class="wishlist"><a href="#" class="wishlist-ss"><i class="icofont icofont-info-square"></i></a></div>
                <div class="compare"><span href="#" class="check-ss"></span></div>
              </div>
            </div>
          </div><!-- end products-item -->
        </li>        
        @endforeach
      </ul>
    </div>
  </div><!--/ end block-tags -->
@endif
  <div class="block-statistics block-sidebars">
    <div class="side-title">
      {{ trans('text.statictis') }}
    </div>
    <div class="site-content">
      <p><span class="statistics-tit"><i class="fa fa-check" aria-hidden="true"></i> Tổng truy cập</span> <span class="statistics-num">000006</span></p>
      <p><span class="statistics-tit"><i class="fa fa-check" aria-hidden="true"></i> Trong Tháng</span> <span class="statistics-num">000006</span></p>
      <p><span class="statistics-tit"><i class="fa fa-check" aria-hidden="true"></i> Trong Tuần</span> <span class="statistics-num">000006</span></p>
      <p><span class="statistics-tit"><i class="fa fa-check" aria-hidden="true"></i> Trong Ngày</span> <span class="statistics-num">000006</span></p>
      <p><span class="statistics-tit"><i class="fa fa-check" aria-hidden="true"></i> Trực Tuyến</span> <span class="statistics-num">000006</span></p>
    </div>
  </div><!--/ end block-statistics -->

</div><!--/ end block-sidebar -->