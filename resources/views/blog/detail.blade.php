@extends('layouts.base')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8">

            <h1 class="page-header">
                Tuổi trẻ blog
            </h1>

            <h2>
                <a href="{{ url('blogs/show/'. $article->id)}}">{{ $article->title }}</a>
            </h2>
            <p class="lead">
                by <a href="{{ url('home')}}">Start Bootstrap</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Ngày tạo: {{ $article->created_at }}</p>
            <hr>
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
