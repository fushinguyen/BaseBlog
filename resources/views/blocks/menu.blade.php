<!-- Static navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('home') }}">Tuổi trẻ blog</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('home') }}">Trang chủ</a></li>
        <li><a href="#">Tiểu thuyết</a></li>
        <li><a href="#">Truyện ngắn</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tác giả <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Tiểu sử</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li class="active"><a href="{{ url('/auth/login') }}">Đăng nhập</a></li>
          <li class="active"><a href="{{ url('/auth/register') }}">Đăng ký</a></li>
        @else
          <li class="active"><a href="{{ url('/blog/index') }}">Blog cá nhân</a></li>
          <li class="active"><a href="{{ url('/blog/create') }}">Tạo blog mới</a></li>
          <li class="active"><a href="{{ url('#') }}">Đăng xuất</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
