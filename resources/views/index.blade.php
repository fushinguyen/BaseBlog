@extends ('layouts.base')

@section('content')

<div class="container">

    <div class="row">

          <div class="col-md-8">
                <h1 class="page-header">Tuổi Trẻ blog</h1>
                @foreach($blogsOrderby as $blog)
                    <h2><a href="{{ url('blogs/show/'.$blog->id) }}">{{ $blog->title }}</a> </h2>
                    @if($blog->created_at > $blog->updated_at)
                      <p>Được đăng bởi: {{ $blog->username }}  <span class="glyphicon glyphicon-time"></span> {{ $blog->created_at }}</p>
                    @else
                      <p>Được đăng bởi: {{ $blog->username }}  <span class="glyphicon glyphicon-time"></span> {{ $blog->updated_at }}</p>
                    @endif
                    <div class="the-article-body" id="the-article-body">
                      <section>
                        <?php
                            echo explode("<hr />", $blog->content, 2)[0];
                        ?>
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
                            <li><a href="#">{{ $usertbl->username }}</a>
                            </li>
                            @endforeach
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

@endsection
