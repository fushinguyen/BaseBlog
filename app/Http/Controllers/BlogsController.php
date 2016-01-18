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
        $updated = strtotime("0000-00-00 00:00:00");
        if(BlogPost::where('updated_at',$updated)->get()){
            $blogsOrderby = BlogPost::orderBy('created_at','desc')->simplePaginate(2);
        }else{
            $blogsOrderby = BlogPost::orderBy('updated_at','desc')->simplePaginate(2);
        }
        return view('index')->with('blogsOrderby',$blogsOrderby);
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
        $title =  \Input::get('title');
        $content = \Input::get('content');
        \DB::table('blog_posts')
            ->insert([
                'user_id'=>'4',
                'title'=>$title,
                'content'=>$content,
                'image_url'=>'',
                'is_private'=>'0'
            ]);
        return $content;
    }

     public function getDelete()
     {
         \DB::table('blog_posts')
            ->insert([
                'user_id'=>'4',
                'title'=>'new blog',
                'content'=>'new body blog',
                'image_url'=>'',
                'is_private'=>'0'
            ]);
         return view('blog.delete');
     }

    public function getShow($id)
    {
        // $id = \Input::get('id', 0);
        $article = BlogPost::find($id);
        if(is_null($article)) return '404 not found';
        return view('blog.detail')  ->with('article', $article);
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
