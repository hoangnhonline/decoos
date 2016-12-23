<header>
  <div class="header-top">
    <div class="container">
      <div class="col-sm-6 col-xs-12">
        <div class="block-language">
          <ul>
            <li><a href="javascript:void(0);"><img src="{{ URL::asset('assets/images/language/lang_vn.png') }}" alt="Tiếng Việt" data-lang='vi' class="lang"></a></li>
            <li><a href="javascript:void(0);"><img src="{{ URL::asset('assets/images/language/lang_en.png') }}" alt="English" data-lang="en" class="lang"></a></li>
            <li></li>
          </ul>
        </div>
      </div><!-- end block-language -->
      <div class="col-sm-6 col-xs-12">
        <div class="block-search">
          <form method="post" id="idf" action="" name="">
            <input value="" class="top_input" type="text" placeholder="Tìm kiếm theo tên hoặc mã sản phẩm..." name="block_name_search">
            <a href="javascript:void()" class="btn_search" onclick="javascript:$('#idf').submit();"><i class="fa fa-search"></i></a>
          </form>
        </div>
      </div><!-- end block-search -->
    </div>
  </div>
  <div class="menu">
    <div class="container menu-top">
      <nav class="header-menu">
        <ul class="header-topmenu">
          <li><a href="{{ route('home') }}" class="active">{{ $lang == 'vi' ? "Trang chủ" : "Home" }}</a></li>
          <li><a href="{{ $lang == 'vi' ? route('pages', 'gioi-thieu') : route('pages', 'about-us')}}">{{ $lang == 'vi' ? "Giới thiệu" : "About us" }}</a></li>
          @foreach($loaiSp as $loai)
          <li><a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loai->slug_vi]) : route('danh-muc-cha', [$loai->slug_en]) }}">{{ $lang == 'vi' ? $loai->name_vi : $loai->name_en }}</a></li>
          @endforeach
          <li><a href="">Fanpage</a></li>
          <li><a href="{{ $lang == 'vi' ? route('contact-vi') : route('contact-en') }}">{{ $lang == 'vi' ? "Liên hệ" : "Contact us" }}</a></li>
          <li><a href="{{ $lang == 'vi' ? route('pages', 'huong-dan-mua-hang') : route('pages', 'shopping-guide')}}">{{ $lang == 'vi' ? "Hướng dẫn mua hàng" : "Shopping guide" }}</a></li>
        </ul>
      </nav>
    </div>
  </div><!-- end menu -->
  <h1 class="container text-center">
    <a href="{{ route('home') }}" class="logo"><img src="{{ URL::asset('assets/images/decoos.jpg') }}" alt="Logo decoos.com"></a>
  </h1>
</header>