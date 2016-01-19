@extends('layouts.base')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8">
            <h1>
                <a href="{{ url('blogs/show/'. $article->id)}}">{{ $article->title }}</a>
            </h1>
            @if($article->created_at > $article->updated_at)
              <p>Được đăng bởi: <a href="{{ url('#')}}">{{ $author->username }}</a>  <span class="glyphicon glyphicon-time"></span> {{ $article->created_at }}</p>
            @else
              <p>Được đăng bởi: <a href="{{ url('#')}}">{{ $author->username }}</a>  <span class="glyphicon glyphicon-time"></span> {{ $article->updated_at }}</p>
            @endif
            <hr>

            <div class="the-article-body">
                <?php
                echo $article->content;
                ?>
            <br />
            </div>

            <hr>
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
