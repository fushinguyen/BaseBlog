@extends('layouts.base')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3>Viết blog</h3>
                <label for="title">Tiêu đề: </label>
                <input type="text" name="title" id="title" class="form-control"  placeholder="Tiêu đề bài blog">
                <br/>
                <textarea class="ckeditor" id="editor" name="editor"></textarea>
                <br/>
                <div class="button-primary">
                    <div class="btn btn-primary" id="btnSubmit">Lưu</div>
                </div>

                <script src="{{ url('ckeditor/ckeditor.js') }}"></script>
                <script>
                $('.ckeditor').each(function(index, el) {
                      CKEDITOR.replace( this ,{
                          filebrowserBrowseUrl : '../plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=&akey={{ config("app.key") }}',
                          filebrowserUploadUrl : '../plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=&akey={{ config("app.key") }}',
                          filebrowserImageBrowseUrl : '../plugins/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=&akey={{ config("app.key") }}'
                      });
                  });
                    $('#btnSubmit').click(function(){
                      var html = $.parseHTML( CKEDITOR.instances.editor.getData() );
                      var url = "{{ url("/") }}";
                        $.ajax({
                                    method: "POST",
                                    url: "{{ url('blogs/create') }}",
                                    data: {
                                        title: $('#title').val(),
                                        content: CKEDITOR.instances.editor.getData(),
                                        img_src: $(html).attr("src")
                                    }
                                })
                                .success(function( data ) {
                                    alert("Đăng bài viết thành công");
                                    window.location.replace("{{ url("/") }}");
                                }).error(function( data ) {
                                    alert("Bài viết đã tồn tại (vui lòng thay thế một tiêu đề mới).");
                                    window.location.replace("{{ url("/blogs/create") }}");
                                });
                    });
                </script>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


@endsection
