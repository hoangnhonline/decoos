@extends('frontend.layout')

@section('content')
<div class="container block-filter">
            <div class="block-title">
                <h2>Chọn Điều Kiện Lọc Nâng Cao</h2>
            </div>
            <div class="block-content">
                <div class="filter-total"> 
                    <div class="filter-price clearfix">
                        <div class="col-sm-2 block-title">
                            <h2>Khoảng giá</h2>
                        </div>
                        <div class="col-sm-10">
                            <div class="filter-options-item">
                                <div class="filter-options-content">
                                    <div class="slider-range">
                                        <div id="slider-range"></div>
                                        <div class="action">
                                            <span class="price-range">Range: <span id="amount-left"></span> - <span id="amount-right"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/ end filter-price -->

                    <div class="filter-color clearfix">
                        <div class="col-sm-2 block-title">
                            <h2>Màu sắc</h2>
                        </div>
                        <div class="col-sm-10 block-content">
                            <div class="row">
                                <a href="javascript:void(0);" class="btn-opened" title="Down Up"></a>
                                <ul>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-color="#FFCC00" style="background:#FFCC00">#FFCC00</a>
                                        <span>(5)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/ end filter-color -->
                </div><!--/ end filter-total -->
            </div>
        </div><!--/ end block-filter -->

        <div class="block-headline-detail container">
            <ul class="breadcrumb breadcrumb-customize">
                <li><a href="{{ route('home') }}">Trang Chủ</a></li>                
                <li><a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$rs->slug_vi]) : route('danh-muc-cha', [$rs->slug_en]) }}">{{ $lang == 'vi' ? $rs->name_vi : $rs->name_en }}</a></li>
                <li>
                    <a href="{{ $lang == 'vi' ? route('danh-muc-con', [$rs->slug_vi, $rsCate->slug_vi]) : route('danh-muc-con', [$rs->slug_en, $rsCate->lang_en]) }}">{{ $lang == 'vi' ? $rsCate->name_vi : $rsCate->name_en }}</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">                
                @include('frontend.detail.sidebar')
                <div class="block-main col-lg-9 col-md-8 col-sm-8">
                    <div class="product-view">

                        <div class="title-page">
                            <h1 class="page-title">{{ $lang == 'vi' ? $rsCate->name_vi : $rsCate->name_en }}</h1>
                        </div>

                        <div class="clearfix"></div>

                        <div class="des-cate">
                            <?php echo $lang == 'vi' ? $rsCate->description_vi : $rsCate->description_en; ?>
                        </div><!--/ end des-cate -->

                        <div class="box-sort clearfix">
                            <select id="sort-product" class="form-control">
                                <option value="latest" selected="">Sản phẩm mới nhất</option>
                                <option value="earliest">Sản phẩm cũ nhất</option>                                
                                <option value="view">Sản phẩm xem nhiều</option>
                                <option value="hot">Sản phẩm nổi bật</option>
                                <option value="hight-to-low">Giá từ cao đến thấp</option>
                                <option value="low-to-height">Giá từ thấp đến cao</option>
                                <option value="more-to-less">Khuyến mãi từ nhiều đến ít</option>
                                <option value="less-to-more">Khuyến mãi từ ít đến nhiều</option>
                                <option value="a-z">Sắp xếp từ A - Z</option>
                                <option value="z-a">Sắp xếp từ Z - A</option>
                            </select>
                            <select id="number-product" class="form-control">
                                <option value="9">9 sản phẩm mỗi trang</option>
                                <option value="12">12 sản phẩm mỗi trang</option>
                                <option value="15">15 sản phẩm mỗi trang</option>
                                <option value="20">20 sản phẩm mỗi trang</option>
                                <option value="24" selected="">24 sản phẩm mỗi trang</option>
                                <option value="30">30 sản phẩm mỗi trang</option>
                                <option value="40">40 sản phẩm mỗi trang</option>
                                <option value="50">50 sản phẩm mỗi trang</option>
                                <option value="60">60 sản phẩm mỗi trang</option>
                                <option value="80">80 sản phẩm mỗi trang</option>
                                <option value="100">100 sản phẩm mỗi trang</option>
                            </select>
                        </div><!--/ end box-sort -->

                        <div class="box-product row">
                            @if($productArr->count() > 0)
                            @foreach($productArr as $product)
                            <div class="col-md-4 col-sm-4 col-xs-6">
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
                        </div>

                        <div class="text-center">
                            <ul class="pagination pagination-custom">
                                <li>
                                    <a href="#" >
                                        <span><i class="icofont icofont-bubble-left"></i> Sau</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Trước <i class="icofont icofont-bubble-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- pagination -->

                    </div><!--/ end product-view -->
                </div><!--/ end block-main -->
            </div>
        </div>
@endsection
@section('javascript')
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript">
        (function($) {

            "use strict";

            /*  [ Filter by price ] */
            $('#slider-range').slider({
                range: true,
                min: 0,
                max: 500,
                values: [0, 250],
                slide: function (event, ui) {
                    $('#amount-left').text('$' + ui.values[0] );
                    $('#amount-right').text('$' + ui.values[1] );
                }
            });
            $('#amount-left').text('$' + $('#slider-range').slider('values', 0));
            $('#amount-right').text('$' + $('#slider-range').slider('values', 1));
        })(jQuery);

    </script>
@endsection