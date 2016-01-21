@extends('layouts.base')

@section('content')

<div class="container">
  <h2 class="form-register-heading">Đăng ký tài khoản mới</h2>
  <form class="form-register" id="edit-form" onsubmit="return false;">
    <div class="form-group">
      <label for="username">Tên người dùng:</label>
      <input type="username" class="form-control" id="username" name="username" placeholder="Nhập tên người dùng" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập địa chỉ email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Nhập mật khẩu" required>
    </div>
    <div class="form-group">
      <label for="pwd">Nhập lại mật khẩu:</label>
      <input type="password" class="form-control" id="re-pwd" name="re-pwd" placeholder="Nhập lại mật khẩu" required min='6'>
    </div>
    <div class="btn btn-lg btn-primary btn-block" id="btnSubmit">Đăng ký</div>
  </form>
  <script>
  var validate = $('#edit-form').validate({
      highlight: function (element) {
          $(element).closest('.form-group').addClass('has-error');
      },
      unhighlight: function (element) {
          $(element).closest('.form-group').removeClass('has-error');
      },
      errorElement: 'span',
      errorClass: 'help-block',
      errorPlacement: function (error, element) {
          if (element.parent('.input-group').length) {
              error.insertAfter(element.parent());
          } else {
              error.insertAfter(element);
          }
      }
  });
  $(document).ready(function(){
    $('#edit-form input').change(function(){
      $(this).valid();
    });
    $('#btnSubmit').click(function(){
      if (!$('#edit-form').valid())
              return false;
        $.ajax({
                    method: "POST",
                    url: "{{ url('/register') }}",
                    data: {
                        username: $('#username').val(),
                        email: $('#email').val(),
                        pwd: $('#pwd').val()
                    }
                })
                .success(function( data ) {
                  alert('sucess');
                })
                .error(function() {
                  alert('fail');
                });
    });
  });

  </script>
</div>
@endsection
