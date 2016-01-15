<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\BlogPost;

class BlogsController extends Controller
{
    public function getIndex()
    {
        $blogs = BlogPost::simplePaginate(1);
        // $blogs = \DB::table('blog_posts')->simplePaginate(10);
        return view('home')->with('blogs', $blogs);
    }

    // public function postIndex()
    // {
    //     $blogs = BlogPost::simplePaginate(10);
    //     // $blogs = \DB::table('blog_posts')->simplePaginate(10);
    //     return view('home')->with('blogs', $blogs);
    // }

    public function getCreate()
    {
        return view('blog.create');
    }
    public function postCreate()
    {
        $title =  \Input::get('title', '');
        return $title;
    }

    // public function store(Request $request)
    // {
    //     //
    // }
    //
    public function getShow($id)
    {
        // $id = \Input::get('id', 0);
        $article = BlogPost::find($id);
        if(is_null($article)) return '404 not found';
        return view('blog.detail')->with('article', $article);
    }
    //
    //
    // public function edit($id)
    // {
    //     //
    // }
    //
    //
    // public function update(Request $request, $id)
    // {
    //     //
    // }
    //
    // public function destroy($id)
    // {
    //     //
    // }
}
