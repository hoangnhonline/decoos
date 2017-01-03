<header>
  <div class="header-top">
    <div class="container">         
      <div class="row">
        <div class="col-sm-4">
          <div class="block-language">
            <ul>
              <li><a href="javascript:void(0);"><img class="lazy" src="{{ URL::asset('assets/images/language/lang_vn.png') }}" alt="Tiếng Việt" data-lang='vi' class="lang"></a></li>
              <li><a href="javascript:void(0);"><img class="lazy" src="{{ URL::asset('assets/images/language/lang_en.png') }}" alt="English" data-lang="en" class="lang"></a></li>
            </ul>
          </div>
        </div><!-- end block-language -->
        <div class="col-sm-4 hidden-xs">
          <h1 class="text-center">
            <a href="{{ route('home') }}" class="logo"><img class="lazy" src="{{ URL::asset('assets/images/logo2.png') }}" alt="Logo decoos.com"></a>
          </h1>
        </div><!-- end block-logo -->
        <div class="col-sm-4">
          <div class="col-xs-4 hidden-sm hidden-lg hidden-md">
            <div class="row">
              <a href="{{ route('home') }}" class="logo"><img class="lazy" src="{{ URL::asset('assets/images/logo2.png') }}" alt="Logo decoos.com"></a>
            </div><!-- end block-logo -->
          </div>
          <div class="col-xs-8 col-sm-12">
            <div class="block-search row">
              <form method="post" id="idf" action="" name="">
                <input value="" class="top_input" type="text" placeholder="{{ trans('text.search-by-product-name-or-code')}}" name="block_name_search">
                <a href="javascript:void()" class="btn_search" onclick="javascript:$('#idf').submit();"><i class="fa fa-search"></i></a>
              </form>
            </div><!-- end block-search -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix mid-header">
    <div class="menu">
      <div class="container">
        <div class="menu-top">
          <nav class="header-menu">
            <ul class="header-topmenu">
              <li><a href="{{ route('home') }}" class="active">{{ $lang == 'vi' ? "Trang chủ" : "Home" }}</a></li>
              <li><a href="{{ $lang == 'vi' ? route('pages', 'gioi-thieu') : route('pages', 'about-us')}}">{{ $lang == 'vi' ? "Giới thiệu" : "About us" }}</a></li>
              @foreach($loaiSp as $loai)                  
                <li class="level0 parent">
                  <a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loai->slug_vi]) : route('danh-muc-cha', [$loai->slug_en]) }}">{{ $lang == 'vi' ? $loai->name_vi : $loai->name_en }}</a>
                  <ul class="level0 submenu">
                    @foreach($cateList[$loai->id] as $cate)
                    <li class="level1">
                      <a href="{{ $lang == 'vi' ? route('danh-muc-con', [$loai->slug_vi, $cate->slug_vi]) : route('danh-muc-con', [$loai->slug_en, $cate->slug_en]) }}">{{ $lang == "vi" ? $cate->name_vi : $cate->name_en }}</a>                      
                    </li>
                    @endforeach
                  </ul>
                </li>                
                @endforeach
              <li class="level0"><a href="">Fanpage</a></li>
              <li class="level0"><a href="{{ $lang == 'vi' ? route('contact-vi') : route('contact-en') }}">{{ $lang == 'vi' ? "Liên hệ" : "Contact us" }}</a></li>
              <li class="level0"><a href="{{ $lang == 'vi' ? route('pages', 'huong-dan-mua-hang') : route('pages', 'shopping-guide')}}">{{ $lang == 'vi' ? "Hướng dẫn mua hàng" : "Shopping guide" }}</a></li>
            </ul>            
          </nav>
        </div>
      </div>
    </div><!-- end menu -->
  </div>
</header>
<!-- end header -->