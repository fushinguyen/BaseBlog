@extends('layouts.base')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8">
                    <h1>
                        <a href="{{ url('blogs/show/'. $article->id)}}">{{ $article->title }}</a>
                    </h1>
                    @if($article->created_at > $article->updated_at)
                      <p>Được đăng bởi: <a href="{{ url('blogs/store/'.$article->user_id) }}">{{ $author->username }}</a>  <span class="glyphicon glyphicon-time"></span> {{ $article->created_at }}</p>
                    @else
                      <p>Được đăng bởi: <a href="{{ url('blogs/store/'.$article->user_id) }}">{{ $author->username }}</a>  <span class="glyphicon glyphicon-time"></span> {{ $article->updated_at }}</p>
                    @endif
            <hr>

            <div class="the-article-body">
                <?php
                echo $article->content;
                ?>
            <br />
            </div>
            <hr>


            <!--Comment-->
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                      <div class="panel panel-default">
                          <div class="panel-body">
                            <label for="title">Bình luận: </label>
                            <input type="text" name="title" id="title" class="form-control"  placeholder="Tên hiển thị">
                            <br/>
                            <textarea class="form-control" id="editor" name="editor" placeholder="Nội dung bình luận"></textarea>
                            <br/>
                            <div class="button-primary">
                                <div class="btn btn-primary" id="btnSubmit">Đăng bình luận</div>
                            </div>
                          </div>
                      </div>

                    </div>
                </div>
            </div>





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
