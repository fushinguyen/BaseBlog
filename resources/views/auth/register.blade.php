@extends('layouts.base')

@section('content')
<div class="container">
  <h2 class="form-register-heading">Đăng ký tài khoản mới</h2>
  <form class="form-register">
    <div class="form-group">
      <label for="username">Tên người dùng:</label>
      <input type="username" class="form-control" id="username" name="username" placeholder="Nhập tên người dùng">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập địa chỉ email">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Nhập mật khẩu">
    </div>
    <div class="form-group">
      <label for="pwd">Nhập lại mật khẩu:</label>
      <input type="password" class="form-control" id="re-pwd" name="re-pwd" placeholder="Nhập lại mật khẩu">
    </div>
    <button type="submit" class="btn btn-lg btn-primary btn-block">Đăng ký</button>
  </form>
</div>
@endsection
