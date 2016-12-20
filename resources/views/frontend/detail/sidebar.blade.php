<div class="block-sidebar col-lg-3 col-md-4 col-sm-4">
  <div class="block-category block-sidebars">
    <div class="side-title">
      Danh Mục Sản Phẩm
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
      Hỗ Trợ Trực Tuyến
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

  <div class="block-tags block-sidebars">
    <div class="side-title">
      TAGS THỜI TRANG NAM
    </div>
    <div class="site-content">
        
    </div>
  </div><!--/ end block-tags -->

  <div class="block-cate block-sidebars">
    <div class="side-title">
      Sản Phẩm Khuyến Mãi
    </div>
    <div class="site-content">
      <ul  class="owl-carousel owl-theme owl-style2" data-nav="false" data-margin="0" data-items='1' data-autoplayTimeout="1000" data-autoplay="true" data-loop="true">
        <li>
          <div class="products-item">
            <div class="products-img">
              <a href="#" class="" data-id="">
                <img src="images/products/that_lung_nam/1.jpg" alt="Bóp nam">
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
        </li>        
      </ul>
    </div>
  </div><!--/ end block-tags -->

  <div class="block-statistics block-sidebars">
    <div class="side-title">
      THỐNG KÊ
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