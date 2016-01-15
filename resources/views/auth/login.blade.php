@extends('layouts.base')

@section('content')
<div class="container">

  <form class="form-signin" >
    <h2 class="form-signin-heading">Đăng nhập</h2>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Địa chỉ email" required autofocus>
    <label for="inputPassword" class="sr-only">Mật khẩu</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Lưu đăng nhập
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
  </form>

</div> <!-- /container -->
@endsection
