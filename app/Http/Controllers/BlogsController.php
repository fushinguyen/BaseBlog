<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\Auth\Guard;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\BlogPost;

class BlogsController extends Controller
{
    public function getIndex()
    {
      /**Blogs**/
        $updated = strtotime("0000-00-00 00:00:00");
        if(BlogPost::where('updated_at',$updated)->get()){
            $blogsOrderby = BlogPost::orderBy('blog_posts.created_at','desc')
                            ->leftJoin('users','users.id','=','blog_posts.user_id')
                            ->select('blog_posts.*','users.username')
                            ->where('is_private','=','0')
                            ->simplePaginate(5);
        }else{
            $blogsOrderby = BlogPost::orderBy('blog_posts.updated_at','desc')
                            ->leftJoin('users','users.id','=','blog_posts.user_id')
                            ->select('blog_posts.*','users.username')
                            ->where('is_private','=','0')
                            ->simplePaginate(5);
        }
      /**Users**/
        $userstbl = \DB::table('users')->select('users.username')->get();


        return view('index')->with([
                            'blogsOrderby'=>$blogsOrderby,
                            'userstbl'=>$userstbl
        ]);
    }

    public function getCreate()
    {
        if (\Auth::check()) {
          return view('blog.create');
        }else {
          return "You must login to use this function.";
        }

    }
    public function postCreate()
    {
        $title =  \Input::get('title');
        $content = \Input::get('content');
        \DB::table('blog_posts')
            ->insert([
                'user_id'=>\Auth::user()->id,
                'title'=>$title,
                'content'=>$content,
                'image_url'=>'',
                'is_private'=>'0'
            ]);
        return $content;
    }

/**Hien thi danh sach bai viet cua 1 user cu the**/
    public function getStore($id)
    {
      /**Blogs**/
        $updated = strtotime("0000-00-00 00:00:00");
        if(BlogPost::where('updated_at',$updated)->get()){
            $article = BlogPost::orderBy('blog_posts.created_at','desc')
                            ->leftJoin('users','users.id','=','blog_posts.user_id')
                            ->select('blog_posts.*','users.username')
                            ->where('user_id',$id)
                            ->simplePaginate(5);
        }else{
            $article = BlogPost::orderBy('blog_posts.updated_at','desc')
                            ->leftJoin('users','users.id','=','blog_posts.user_id')
                            ->select('blog_posts.*','users.username')
                            ->where('user_id',$id)
                            ->simplePaginate(5);
        }

        if(is_null($article)) return '404 not found '. $id;
        return view('blog.index')->with('blogsOrderby',$article);
    }

    public function getShow($id)
    {
        $article = BlogPost::find($id);
        $author = BlogPost::leftJoin('users','users.id','=','blog_posts.user_id')
                            ->select('blog_posts.*','users.username as username')
                            ->where('blog_posts.id',$id)
                            ->first();
        if(is_null($article)) return '404 not found '. $id;

        if ($author->is_private == 1) {
          if ($author->user_id == \Auth::user()->id) {
            /**nguoi dung la chu nhan bai viet**/
              $mode = \Input::get('mode');
              if (isset($mode)) {
                $mode2 = ($mode == 'public') ? 0:1;
                BlogPost::where('id',$id)
                        ->update(['is_private'=>$mode2]);
              }
              return view('blog.detail')  ->with([
                              'article'=>$article,
                              'author'=>$author
                ]);
          }else {
            /**nguoi dung da dang nhap nhung xem bai nguoi khac o dang private**/
            return "This blog is private.";
          }

        }else {
          return view('blog.detail')  ->with([
                          'article'=>$article,
                          'author'=>$author
            ]);
        }
    }
    public function postChangeMode($id){
      $change = BlogPost::where('id',$id)
                        ->update(['is_private'=>\Input::get('mode',0)]);


    }
}
