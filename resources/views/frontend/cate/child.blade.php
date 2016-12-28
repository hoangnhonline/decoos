@extends('frontend.layout')

@section('content')
@if($maxPrice > -1)
<div class="container block-filter">
            <div class="block-title">
                <h2>{{ trans('text.advanced-search') }}</h2>
            </div>
            <div class="block-content">
                <div class="filter-total"> 
                    <div class="filter-price clearfix">
                        <div class="col-sm-2 block-title">
                            <h2>{{ trans('text.price-range') }}</h2>
                        </div>
                        <div class="col-sm-10">
                            <div class="filter-options-item">
                                <div class="filter-options-content">
                                    <div class="slider-range">
                                        <div id="slider-range"></div>
                                        <div class="action">
                                            <span class="price-range"><span id="amount-left"></span> - <span id="amount-right"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/ end filter-price -->
                    @if($colorList->count() > 0)
                    <div class="filter-color clearfix">
                        <div class="col-sm-2 block-title">
                            <h2>{{ trans('text.color') }}</h2>
                        </div>
                        <div class="col-sm-10 block-content">
                            <div class="row">
                                <a href="javascript:void(0);" class="btn-opened" title="Down Up"></a>
                                <ul>
                                    @foreach($colorList as $color)
                                    @if($productColorCount[$color->id] > 0)
                                    <li class="filter-color-item">
                                        <a href="javascript:void(0);" data-value="{{ $color->id }}"  data-color="{{ $color->color_code }}" style="background:{{ $color->color_code }}">{{ $color->color_code }}</a>
                                        <span>({{ $productColorCount[$color->id] }})</span>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div><!--/ end filter-color -->
                    @endif
                </div><!--/ end filter-total -->
            </div>
        </div><!--/ end block-filter -->
@endif
        @if($p_from != 0 || $p_to != $maxPrice || $mid > 0 )
        <div class="container block-filter block-filter-rule">
            <div class="block-title">
                <h2>{{ trans('text.filter') }}</h2>
            </div>
            <div class="block-content">
                <ul>
                    @if($p_from != 0 || $p_to != $maxPrice )
                    <li id="filter-price"><b>{{ trans('text.price') }}:</b> <a href="javascript:;">{{ number_format($p_from) }} VNĐ - {{ number_format($p_to) }} VNĐ</a></li>
                    @endif                   
                    @if($mid > 0)
                    <li id="filter-color"><b>{{ trans('text.color') }}:</b> <a href="javascript:;"  style="background:{{ $colorSelected->color_code }} url(images/filter_close.png) no-repeat right center;border-radius:5px;padding:0px 15px 0px 15px;text-indent:-9999px;width:20px;border:1px solid #CCC"><span>#000000</span></a></li>
                    @endif
                </ul>
                <a href="javascript:;" class="clear-filter" title="Xóa tất cả điều kiện lọc"></a>
            </div>
        </div>
        @endif
        <div class="block-headline-detail container">
            <ul class="breadcrumb breadcrumb-customize">
                <li><a href="{{ route('home') }}">{{ trans('text.home') }}</a></li>                
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
                        <?php $desc = $lang == 'vi' ? $rsCate->description_vi : $rsCate->description_en; ?>
                        @if($desc)
                        <div class="des-cate">
                            <?php echo $desc; ?>
                        </div><!--/ end des-cate -->
                        @endif
                        @if($productArr->count() > 0)
                        <div class="box-sort clearfix">
                            <select id="sort-product" class="form-control">
                                <option value="1" {{ $s == 1 ? "selected" : "" }}>{{ trans('text.lastest-product') }}</option>
                                <option value="2" {{ $s == 2 ? "selected" : "" }}>{{ trans('text.oldest-product') }}</option>
                                <option value="3" {{ $s == 3 ? "selected" : "" }}>{{ trans('text.price-height-to-low') }}</option>
                                <option value="4" {{ $s == 4 ? "selected" : "" }}>{{ trans('text.price-low-to-height') }}</option>
                            </select>
                            <select id="number-product" class="form-control">
                                <option value="9" {{ $ip == 9 ? "selected" : "" }}>9 {{ trans('text.product-per-page') }}</option>
                                <option value="24" {{ $ip == 24 ? "selected" : "" }}>24 {{ trans('text.product-per-page') }}</option>
                                <option value="57" {{ $ip == 57 ? "selected" : "" }}>57 {{ trans('text.product-per-page') }}</option>
                                <option value="102" {{ $ip == 102 ? "selected" : "" }}>100 {{ trans('text.product-per-page') }}</option>
                            </select>
                        </div><!--/ end box-sort -->
                        @endif
                        <div class="box-product row">
                            @if($productArr->count() > 0)
                            @foreach($productArr as $product)
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="products-item">
                                    <div class="products-img">
                                      <a href="{{ $lang == 'vi' ? route('chi-tiet-vi',['slug' => $product->slug_vi, 'id' => $product->id]) : route('chi-tiet-en', ['slug' => $product->slug_en, 'id' => $product->id]) }}">
                                        <img class="lazy" src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}">
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
                        </div>

                        <div class="text-center">
                            {{ $productArr->appends( ['mid' => $mid, 'pf' => $p_from, 'pt' => $p_to, 'ip' => $ip, 's' => $s] )->links() }}                           
                        </div><!-- pagination -->

                    </div><!--/ end product-view -->
                </div><!--/ end block-main -->
            </div>
        </div>
<form method="GET" action="{{ url()->current() }}" id="formSeach">
    <input type="hidden" name="pf" id="pf" value="{{ $p_from }}">
    <input type="hidden" name="pt" id="pt" value="{{ $p_to }}">    
    <input type="hidden" name="mid" id="mid" value="{{ $mid }}">
    <input type="hidden" name="ip" id="ip" value="{{ $ip }}">
    <input type="hidden" name="s" id="s" value="{{ $s }}">
</form>
@endsection
@section('javascript')
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript">
(function($) {
    var url = '{{ url()->current() }}';
    "use strict";            
    /*  [ Filter by price ] */
    $('#slider-range').slider({
        range: true,
        min: 0,
        max: {{ $maxPrice }},
        values: [{{ $p_from }}, {{ $p_to }}],
        step : 200000,
        slide: function (event, ui) {
            $('#amount-left').text(number_format(ui.values[0], 0, '.', '.') + ' VNĐ');
            $('#amount-right').text(number_format(ui.values[1], 0, '.', '.') + ' VNĐ');

        },
        change : function(event, ui){
            $('#pf').val(ui.values[0]);
            $('#pt').val(ui.values[1]);
            $('#formSeach').submit();
        }
    });
    $('#amount-left').text( number_format($('#slider-range').slider('values', 0), 0, '.', '.')  + ' VNĐ');
    $('#amount-right').text( number_format($('#slider-range').slider('values', 1), 0, '.', '.')  + ' VNĐ');

})(jQuery);
$(document).ready(function(){
    $('.filter-color-item a').click(function(){
        var obj = $(this);                
        var id = obj.data('value');
        $('#mid').val(id);
        $('#formSeach').submit();                
    });
    $('a.filter-category').click(function(){
        var obj = $(this);                
        var id = obj.data('value');                
        $('#cid').val(id);
        $('#formSeach').submit();
    });
    $('#number-product').change(function(){
        $('#ip').val($(this).val());
        $('#formSeach').submit();
    });
    $('#sort-product').change(function(){
        $('#s').val($(this).val());
        $('#formSeach').submit();
    });            
});
function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function (n, prec) {
    var k = Math.pow(10, prec);
    return '' + Math.round(n * k) / k;
    };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}
    </script>
@endsection