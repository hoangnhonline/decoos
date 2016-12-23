@extends('frontend.layout')
@section('slider')
<div class="slide-home">
  <div class="skitter box_skitter box_skitter_large skitter-square">
    <ul>
      <li>
        <a href="#cut">
          <img src="{{ URL::asset('assets/images/slide/1.jpg') }}" />
        </a>
      </li>
      <li>
        <a href="#swapBlocks">
          <img src="{{ URL::asset('assets/images/slide/2.jpg') }}" />
        </a>
      </li>
      <li>
        <a href="#swapBarsBack">
          <img src="{{ URL::asset('assets/images/slide/3.jpg') }}" />
        </a>
      </li>
    </ul>
  </div>
</div><!-- end slide home -->
@endsection
@section('content')
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
            @if($newProduct->count() > 0)
            @foreach($newProduct as $product)
            <div class="col-md-3 col-sm-4 col-xs-6">
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
            </div>
            @endforeach
            @endif
            <div class="container clearfix">
              <a href="#" class="view-all pull-right">Xem tất cả</a>
            </div>
          </div><!-- end spn -->

          <div role="tabpanel" class="tab-pane fade" id="sph">
            @if($hotProduct->count() > 0)
            @foreach($hotProduct as $product)
            <div class="col-md-3 col-sm-4 col-xs-6">
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
            </div>
            @endforeach
            @else
            <div class="col-md-12"><p style="padding:10px">Đang cập nhật dữ liệu.</p></div>
            @endif
          </div><!-- end sph -->

          <div role="tabpanel" class="tab-pane fade" id="spkm">
            @if($saleProduct->count() > 0)
            @foreach($saleProduct as $product)
            <div class="col-md-3 col-sm-4 col-xs-6">
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
            </div>
            @endforeach
            @else
            <div class="col-md-12"><p style="padding:10px">Đang cập nhật dữ liệu.</p></div>
            @endif
          </div><!-- end spkm -->

        </div><!-- end tab panes -->
      </div>
    </div>
  </div><!-- end contents -->
</div><!-- end products -->
@foreach($loaiSp as $loai)
<div class="block-products">
  <div class="block-title block-title-b2">
    <div class="container">
      <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
        <li role="presentation" class="active"><a href="#loaisp-{{ $loai->slug_vi }}" aria-controls="home" role="tab" data-toggle="tab">{{ $lang == 'vi' ? $loai->name_vi : $loai->name_en }}</a></li>
        @if($cateList[$loai->id]->count() > 0)
          @foreach($cateList[$loai->id] as $cate)
          <li role="presentation"><a href="#{{ $cate->slug_vi }}" aria-controls="profile" role="tab" data-toggle="tab">{{ $lang == 'vi' ? $cate->name_vi : $cate->name_en }}</a></li>
          @endforeach
        @endif
      </ul><!-- end nav tabs -->
    </div><!-- end title -->
  </div>
  <div class="block-contents">
    <div class="container">
      <div class="row">
        <div class="tab-content">
           @if($productArr[$loai->slug_vi]->count() > 0)

              <div role="tabpanel" class="tab-pane fade in active" id="loaisp-{{ $loai->slug_vi }}">
                @foreach($productArr[$loai->slug_vi] as $product)
                  <div class="col-md-3 col-sm-4 col-xs-6">
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
                  </div>               
                  @endforeach
                <div class="container clearfix">
                  <a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loai->slug_vi]) : route('danh-muc-cha', [$loai->slug_en]) }}" class="view-all pull-right">Xem tất cả</a>
                </div>
              </div><!-- end spn -->
              @else
            <div class="col-md-12"><p style="padding:10px">Đang cập nhật dữ liệu.</p></div>
            @endif
            @if($cateList[$loai->id]->count() > 0)
              @foreach($cateList[$loai->id] as $cate)
                @if($productArr[$cate->id]->count() > 0)

                <div role="tabpanel" class="tab-pane fade in" id="{{ $cate->slug_vi }}">
                  @foreach($productArr[$cate->id] as $product)
                    <div class="col-md-3 col-sm-4 col-xs-6">
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
                    </div>               
                    @endforeach
                  <div class="container clearfix">
                    <a href="{{ $lang == 'vi' ? route('danh-muc-con', [$loai->slug_vi, $cate->slug_vi]) : route('danh-muc-con', [$loai->slug_en, $cate->slug_en]) }}" class="view-all pull-right">Xem tất cả</a>
                  </div>
                </div><!-- end spn -->
                @endif
              @endforeach
            @else
            <div class="col-md-12"><p style="padding:10px">Đang cập nhật dữ liệu.</p></div>
            @endif
        </div><!-- end tab panes -->
      </div>
    </div>
  </div><!-- end contents -->
</div><!-- end products -->
@endforeach
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
@if($albumList->count() > 0)
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
            @foreach($albumList as $album)
            <div class="col-md-3 col-sm-4 col-xs-6">             
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
              </div><!-- end news-item -->
            </div>          
            @endforeach
            <div class="clearfix">
              <a href="#" class="view-all pull-right">Xem tất cả</a>
            </div>
          </div><!-- end spn -->

        </div><!-- end tab panes -->
      </div>
    </div>
  </div><!-- end contents -->
</div><!-- end album -->
@endif
@if($videoList->count() > 0)
<div class="block-video">
  <div class="block-title block-title-b2">
    <div class="container">
      <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
        <li role="presentation" class="active"><a href="#bst" aria-controls="home" role="tab" data-toggle="tab">Video</a></li>
      </ul><!-- end nav tabs -->
    </div><!-- end title -->
  </div>
  <div class="block-contents">
    <div class="container">
      <div class="row">
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane fade in active" id="bst">
          @foreach($videoList as $video)
            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="video-item">
                <div class="video-img">
                  <a href="{{ $lang == 'vi' ? route('video-detail', [$video->slug_vi, $video->id]) : route('video-detail', [$video->slug_en, $video->id]) }}" title="{{ $lang == 'vi' ? $video->name_vi : $video->name_en }}">
                        <img src="{{ Helper::showImage($video->image_url) }}" alt="{{ $lang == 'vi' ? $video->name_vi : $video->name_en }}">
                      </a>
                </div>
                <div class="video-info">
                  <h2 class="video-info-name">
                    <a title="{{ $lang == 'vi' ? $video->name_vi : $video->name_en }}" href="{{ $lang == 'vi' ? route('video-detail', [$video->slug_vi, $video->id]) : route('video-detail', [$video->slug_en, $video->id]) }}">{{ $lang == 'vi' ? $video->name_vi : $video->name_en }}</a>
                  </h2>
                  <p class="video-contents">{{ $lang == 'vi' ? $video->description_vi : $video->description_en }}</p>
                </div>
              </div><!-- end news-item -->
            </div>        
            @endforeach
            <div class="clearfix">
              <a href="#" class="view-all pull-right">Xem tất cả</a>
            </div>
          </div><!-- end spn -->

        </div><!-- end tab panes -->
      </div>
    </div>
  </div><!-- end contents -->
</div><!-- end video -->
@endif
@endsection