<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link href="http://localhost/blog2/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/blog2/public/css/footer.css" rel="stylesheet">
    <link href="http://localhost/blog2/public/css/signin.css" rel="stylesheet">
    <script src="http://localhost/blog2/public/js/jquery.min.js"></script>
    <script src="http://localhost/blog2/public/js/bootstrap.min.js"></script>
    <script src="http://localhost/blog2/public/js/knockout.js"></script>
    <script src="http://localhost/blog2/public/js/fn.js"></script>
</head>
<body>
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
            <a class="navbar-brand" href="http://localhost/blog2/public/home">Tuổi trẻ blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/blog2/public/home">Trang chủ</a></li>
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
                <li class="active"><a href="http://localhost/blog2/public/auth/login">Đăng nhập</a></li>
                <li class="active"><a href="http://localhost/blog2/public/auth/register">Đăng ký</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

<div class="container">

    <div class="row">

        <div class="col-md-8">
            <h1 class="page-header">Tuoi tre blog</h1>
            <h2><a href="http://localhost/blog2/public/blogs/show/507">Lorem ipsum 0</a> </h2>
            <div class="the-article-body" id="the-article-body">
                <div style="text-align: justify;"><em><strong><span style="font-size:18px;">Lorem ipsum dolor</span></strong></em><br />
                    &nbsp;<br />
                    Lorem ipsum dolor sit amet, consectetuer <span style="color:#FF0000;">adipiscing </span>
                    elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla.
                    Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit.
                    Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie.
                    Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros.
                    Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor.
                    Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus.
                    In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla,
                    sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia.
                    Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.
                </div>
            </div>

            <h2><a href="http://localhost/blog2/public/blogs/show/508">Lorem ipsum 1</a> </h2>
            <div class="the-article-body" id="the-article-body">
                <div style="text-align: justify;"><em><strong><span style="font-size:18px;">Lorem ipsum dolor</span></strong></em><br />
                    &nbsp;<br />
                    Lorem ipsum dolor sit amet, consectetuer <span style="color:#FF0000;">adipiscing </span>
                    elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla.
                    Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit.
                    Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie.
                    Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros.
                    Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor.
                    Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus.
                    In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla,
                    sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia.
                    Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.
                </div>
            </div>

            <h2><a href="http://localhost/blog2/public/blogs/show/509">Lorem ipsum 2</a> </h2>
            <div class="the-article-body" id="the-article-body">
                <div style="text-align: justify;"><em><strong><span style="font-size:18px;">Lorem ipsum dolor</span></strong></em><br />
                    &nbsp;<br />
                    Lorem ipsum dolor sit amet, consectetuer <span style="color:#FF0000;">adipiscing </span>
                    elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla.
                    Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit.
                    Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie.
                    Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros.
                    Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor.
                    Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus.
                    In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla,
                    sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia.
                    Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.
                </div>
            </div>

            <h2><a href="http://localhost/blog2/public/blogs/show/703">Lorem ipsum dolor 96</a> </h2>
            <div class="the-article-body" id="the-article-body">
                <div style="text-align: justify;"><em><strong><span style="font-size:18px;">Lorem ipsum dolor</span></strong></em><br />
                    &nbsp;<br />
                    Lorem ipsum dolor sit amet, consectetuer <span style="color:#FF0000;">adipiscing </span>elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.
                </div>
                <h2><a href="http://localhost/blog2/public/blogs/show/704">Lorem ipsum dolor 97</a> </h2>
                <div class="the-article-body" id="the-article-body">
                    <div style="text-align: justify;"><em><strong><span style="font-size:18px;">Lorem ipsum dolor</span></strong></em><br />
                        &nbsp;<br />
                        Lorem ipsum dolor sit amet, consectetuer <span style="color:#FF0000;">adipiscing </span>elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.
                    </div>
                    <h2><a href="http://localhost/blog2/public/blogs/show/705">Lorem ipsum dolor 98</a> </h2>
                    <div class="the-article-body" id="the-article-body">
                        <div style="text-align: justify;"><em><strong><span style="font-size:18px;">Lorem ipsum dolor</span></strong></em><br />
                            &nbsp;<br />
                            Lorem ipsum dolor sit amet, consectetuer <span style="color:#FF0000;">adipiscing </span>elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.
                        </div>
                        <h2><a href="http://localhost/blog2/public/blogs/show/706">Lorem ipsum dolor 99</a> </h2>
                        <div class="the-article-body" id="the-article-body">
                            <div style="text-align: justify;"><em><strong><span style="font-size:18px;">Lorem ipsum dolor</span></strong></em><br />
                                &nbsp;<br />
                                Lorem ipsum dolor sit amet, consectetuer <span style="color:#FF0000;">adipiscing </span>elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.
                            </div>
                            <!-- Pager -->
                            <ul class="pager">
                                <li class="previous">
                                    <a href="">&larr; Older</a>
                                </li>
                                <li class="next">
                                    <a href="">Newer &rarr;</a>
                                </li>
                            </ul>
                            <hr/>
                        </div> <!--div col-md-8-->

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
                            </div> <!--div col-md-4-->

                        </div> <!--div row-->

                    </div> <!--div container-->

                    <hr/>
                    <footer class="footer">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-muted">Copyright &copy; Tuổi trẻ blog 2016</p>
                            </div>
                        </div>
                    </footer>
</body>
</html>
