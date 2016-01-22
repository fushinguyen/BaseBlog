@extends ('layouts.base')

@section('content')

<div class="container">

    <div class="row">

          <div class="col-md-8">
                <h1 class="page-header">Tuổi Trẻ blog</h1>
                @foreach($blogsOrderby as $blog)
                  <div class="the-article-body" id="the-article-body">
                    <section>
                      <div class="media">
                            <div class="media-left">
                                <a href="#"><div class="img-thumbnail img-intro" style="background-image: url({{ $blog->image_url }})">
                                            </div></a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                  <h2><a href="{{ url('blogs/show/'.$blog->id) }}">{{ $blog->title }}</a> </h2>
                                  <p>Được đăng bởi: <a href="{{ url('blogs/store/'.$blog->user_id) }}">{{ $blog->username }}</a> <span class="glyphicon glyphicon-time"></span> Ngày tạo: {{ $blog->created_at }}</p>
                                </div>

                                <?php
                                $intro = explode("<hr />", $blog->content, 2)[0];
                                echo $intro;
                                ?>
                            </div>
                      </div>
                    </section>
                  </div>
                @endforeach
                        <!-- Pager -->
                  <ul class="pager">
                      <li class="previous">
                          <a href="{{ $blogsOrderby->previousPageUrl() }}">&larr; Older</a>
                      </li>
                      <li class="next">
                          <a href="{{ $blogsOrderby->nextPageUrl() }}">Newer &rarr;</a>
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
                            @foreach($userstbl as $usertbl)
                            <li><a href="{{ url('/blogs/store/'. $usertbl->id) }}">{{ $usertbl->username }}</a>
                            </li>
                            @endforeach
                          </ul>
                      </div>
                      <!-- /.col-lg-6 -->
                      <div class="col-lg-6">

                      </div>
                      <!-- /.col-lg-6 -->
                  </div>
          </div> <!--div col-md-4-->

    </div> <!--div row-->

</div> <!--div container-->

@endsection
