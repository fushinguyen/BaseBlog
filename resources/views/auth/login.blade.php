@extends('layouts.base')

@section('content')
<div class="container">

  <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
    <h2 class="form-signin-heading">Đăng nhập</h2>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Địa chỉ email" required autofocus>
    <br/>
    <label for="inputPassword" class="sr-only">Mật khẩu</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">
      <i class="fa fa-btn fa-sign-in"></i>Đăng nhập
    </button>
  </form>

</div> <!-- /container -->
@endsection
