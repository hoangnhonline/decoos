<header>
  <div class="header-top">
    <div class="container">
      <div class="col-sm-6 col-xs-12">
        <div class="block-language">
          <ul>
            <li><a href="javascript:void(0);"><img src="{{ URL::asset('assets/images/language/lang_vn.png') }}" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="{{ URL::asset('assets/images/language/lang_en.png') }}" alt=""></a></li>
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
          <li><a href="index.html" class="active">Trang Chủ</a></li>
          <li><a href="">Giới Thiệu</a></li>
          <li><a href="category.html">Thắt Lưng Nam</a></li>
          <li><a href="">Giày Nam</a></li>
          <li><a href="">Ví Nam</a></li>
          <li><a href="">Fanpage</a></li>
          <li><a href="">Liên Hệ</a></li>
          <li><a href="">Hướng Dẫn Mua Hàng</a></li>
        </ul>
      </nav>
    </div>
  </div><!-- end menu -->
  <h1 class="container text-center">
    <a href="{{ route('home') }}" class="logo"><img src="{{ URL::asset('assets/images/decoos.jpg') }}" alt="Logo decoos.com"></a>
  </h1>
</header>