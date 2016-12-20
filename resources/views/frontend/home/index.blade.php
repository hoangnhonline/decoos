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
                      <a href="#" class="" >
                        <img src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}">
                        <!-- <img src="{{ URL::asset('assets/images/products/pro_new/1.jpg') }}" alt="Bóp nam" class="img_hover"> -->
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a>
                      </h2>
                      <p class="products-info-price">
                        @if($product->is_sale == 1 && $product->price_sale > 0)
                          <span class="price-new">{{ number_format($product->price_sale) }}</span>
                          <del class="price-old">{{ number_format($product->price_sale) }}</del>
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
                      <a href="#" class="" >
                        <img src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}">
                        <!-- <img src="{{ URL::asset('assets/images/products/pro_new/1.jpg') }}" alt="Bóp nam" class="img_hover"> -->
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a>
                      </h2>
                      <p class="products-info-price">
                        @if($product->is_sale == 1 && $product->price_sale > 0)
                          <span class="price-new">{{ number_format($product->price_sale) }}</span>
                          <del class="price-old">{{ number_format($product->price_sale) }}</del>
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
                      <a href="#" class="" >
                        <img src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}">
                        <!-- <img src="{{ URL::asset('assets/images/products/pro_new/1.jpg') }}" alt="Bóp nam" class="img_hover"> -->
                      </a>
                    </div>
                    <div class="products-info">
                      <h2 class="products-info-name">
                        <a id="" class="ten_sp " title="Bóp nam" href="#">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a>
                      </h2>
                      <p class="products-info-price">
                      @if($product->is_sale == 1 && $product->price_sale > 0)
                        <span class="price-new">{{ number_format($product->price_sale) }}</span>
                        <del class="price-old">{{ number_format($product->price_sale) }}</del>
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
                            <a href="#" class="" >
                              <img src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}">
                            </a>
                          </div>
                          <div class="products-info">
                            <h2 class="products-info-name">
                              <a id="" class="ten_sp " title="Bóp nam" href="#">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a>
                            </h2>
                            <p class="products-info-price">
                              @if($product->is_sale == 1 && $product->price_sale > 0)
                                <span class="price-new">{{ number_format($product->price_sale) }}</span>
                                <del class="price-old">{{ number_format($product->price_sale) }}</del>
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
                      <a href="#" class="view-all pull-right">Xem tất cả</a>
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
                              <a href="#" class="" >
                                <img src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}">
                              </a>
                            </div>
                            <div class="products-info">
                              <h2 class="products-info-name">
                                <a id="" class="ten_sp " title="Bóp nam" href="#">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a>
                              </h2>
                              <p class="products-info-price">
                                @if($product->is_sale == 1 && $product->price_sale > 0)
                                  <span class="price-new">{{ number_format($product->price_sale) }}</span>
                                  <del class="price-old">{{ number_format($product->price_sale) }}</del>
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
                        <a href="#" class="view-all pull-right">Xem tất cả</a>
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
@endsection