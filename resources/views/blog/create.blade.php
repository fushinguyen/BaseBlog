@extends('layouts.base')

@section('content')
<script src="{{ url('ckeditor/ckeditor.js') }}"></script>
<div>
  <input type="text" name="title" id="title" class="form-control">
</div>
<div class="container-fluid">
    <h3>Tạo bài</h3>
    <textarea class="ckeditor" id="editor"></textarea>
</div>
<div class="btn btn-default" id="btnSubmit">Lưu</div>
<script>
    CKEDITOR.replace( 'editor' );
    $('#btnSubmit').click(function(){
      console.log('sub');
      $.ajax({
        method: "POST",
        url: "{{ url('blogs/create') }}",
        data: {
          title: $('#title').val(),
          content: ''
        }
      })
        .done(function( data ) {
          alert( data );
        });
    });
</script>

@endsection
