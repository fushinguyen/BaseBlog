@extends('layouts.base')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8">

            <h1 class="page-header">
                Tuổi trẻ blog
            </h1>

            <h2>
                <a href="#">Ngày 12/1, Hội nghị lần thứ 14 Ban Chấp hành Trung ương Đảng khóa XI tiếp tục ngày làm việc thứ hai tại tổ để bàn về công tác nhân sự.</a>
            </h2>
            <p class="lead">
                by <a href="{{ url('home')}}">Start Bootstrap</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>
            <!-- <img class="img-responsive" src="http://placehold.it/900x300" alt=""> -->
            <hr>

            <div class="the-article-body">
            <p>Buổi sáng, Trung ương tiếp tục thảo luận về các tờ trình của Bộ Chính trị tiếp thu ý kiến Trung ương tại Hội nghị Trung ương 13 để bổ sung nhân sự Ban Chấp hành Trung ương, Bộ Chính trị, Ban Bí thư và đề cử nhân sự 4 chức danh lãnh đạo chủ chốt khóa XII; dự kiến danh sách Đoàn Chủ tịch, Đoàn Thư ký và ban Thẩm tra tư cách đại biểu của Đại hội XII.</p>
            <p>Buổi chiều, các đồng chí Ủy viên Ban Chấp hành Trung ương cho ý kiến sửa trực tiếp vào văn bản dự thảo Báo cáo của Ban Chấp hành Trung ương khóa XI về công tác nhân sự Ban Chấp hành Trung ương khóa XII.</p>
            <table class="picture" align="center">
              <tbody>
                  <tr>
                      <td class="pic"><img alt="Trung ương thảo luận về đề cử 4 chức danh chủ chốt" src="http://img.v3.news.zdn.vn/w660/Uploaded/natmtz/2016_01_12/Hoi_nghi_BCH_TW_1.jpg" /></td>
                  </tr>
                  <tr>
                      <td class="pCaption caption">Các đại biểu dự Hội nghị lần thứ 14 của Ban Chấp hành Trung ương Đảng khóa XI.</td>
                  </tr>
              </tbody>
            </table>
            <p>Theo chương trình, Hội nghị lần này sẽ bàn về các nội dung: Thảo luận, thông qua chủ trương ký Hiệp định đối tác xuyên Thái Bình Dương (TPP); tiếp tục hoàn thiện công tác nhân sự Ban Chấp hành Trung ương, Bộ Chính trị, Ban Bí thư khóa XII và chuẩn bị nhân sự lãnh đạo chủ chốt khóa XII; thông qua dự kiến danh sách Đoàn Chủ tịch, Đoàn Thư ký, Ban Thẩm tra tư cách đại biểu của Đại hội XII.</p>
            <p>Hội nghị lần thứ 14 Ban Chấp hành Trung ương Đảng khóa XI khai mạc sáng 11/1 và bế mạc ngày 13/1.</p>
            <p>Trong ngày đầu,  Bộ Chính trị đã có tờ trình tiếp thu ý kiến của Trung ương tại Hội nghị Trung ương 13 để bổ sung nhân sự Ban Chấp hành Trung ương, Bộ Chính trị, Ban Bí thư và đề cử nhân sự 4 chức danh lãnh đạo chủ chốt khóa XII; về dự kiến Danh sách Đoàn Chủ tịch, Đoàn Thư ký và Ban Thẩm tra tư cách đại biểu của Đại hội đại biểu toàn quốc lần thứ XII của Đảng. Sau đó, Trung ương về tổ thảo luận các nội dung này.</p>
            <div class="notebox ncenter">
            <p>Đại hội đại biểu toàn quốc lần thứ XII của Đảng Cộng sản Việt Nam diễn ra ngày 20-28/1 tại Hà Nội.</p>
            <p>Tham dự Đại hội có 1.510 đại biểu, đại diện cho hơn 4,5 triệu đảng viên. Ban Chấp hành Trung ương Đảng cũng mời các cựu lãnh đạo Đảng, Nhà nước, đại diện Bà mẹ Việt Nam anh hùng, đại diện nhân sĩ, trí thức, văn nghệ sĩ, chức sắc tôn giáo, thanh niên tiêu biểu tới dự.</p>
            <p>Ông Hoàng Bình Quân, Ủy viên Trung ương Đảng, Trưởng Ban Đối ngoại Trung ương cho biết, Đảng Cộng sản Việt Nam trân trọng mời Đoàn ngoại giao, đại diện các tổ chức quốc tế tại Việt Nam đến dự Phiên khai mạc và Phiên bế mạc của Đại hội lần thứ XII.</p>
            <p>Ban Chấp hành Trung ương sẽ tổ chức cuộc thông báo tới Đoàn ngoại giao và các tổ chức quốc tế tại Việt Nam về kết quả Đại hội XII ngay sau khi Đại hội kết thúc.&nbsp;</p>
            </div>
            <br />
            </div>

            <div class="the-article-credit">

            <p class="author">Nhật Lâm</p>
            </div>
            <hr>

            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">User Name</a>
                            </li>
                            <li><a href="#">User Name</a>
                            </li>
                            <li><a href="#">User Name</a>
                            </li>
                            <li><a href="#">User Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">User Name</a>
                            </li>
                            <li><a href="#">User Name</a>
                            </li>
                            <li><a href="#">User Name</a>
                            </li>
                            <li><a href="#">User Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->
</div>
@endsection
