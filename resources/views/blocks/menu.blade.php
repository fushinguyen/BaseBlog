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
      <a class="navbar-brand" href="{{ url('/') }}">Tuổi trẻ blog</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}">Trang chủ</a></li>
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
        @if (!Auth::check())
          <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
          <li><a href="{{ url('/register') }}">Đăng ký</a></li>
        @else
          <li><a href="{{ url('/blogs/create') }}">Tạo blog mới</a></li>
          <li class="dropdown">
              <a href="{{ url('/index') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->username }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/blogs/store/'. Auth::user()->id) }}">Trang cá nhân</a></li>
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Đăng xuất</a></li>
              </ul>
          </li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
