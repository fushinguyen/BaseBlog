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
      /**Users**/
        $userstbl = \DB::table('users')->select('users.*')->get();

        return view('index')->with([
                            'blogsOrderby'=>BlogPost::getBlogsPublic(),
                            'userstbl'=>$userstbl
        ]);
    }

    public function getCreate()
    {
        if (\Auth::check()) {
          return view('blog.create');
        }else {
          return "Bạn không có quyền truy cập chức năng này.";
        }

    }
    public function postCreate()
    {
          return BlogPost::createBlog();
    }

/**Hien thi danh sach bai viet cua 1 user cu the**/
    public function getStore($id)
    {
        if(is_null(BlogPost::showBlogsUser(5, $id))) return '404 not found '. $id;
        $userstbl = \DB::table('users')->select('users.*')->get();
        return view('blog.user.index')->with([
                                      'blogsOrderby'=>BlogPost::showBlogsUser(5, $id),
                                      'userstbl'=>$userstbl
                                      ]);
    }

    public function getShow($id)
    {
        $article = BlogPost::find($id);
        $author = BlogPost::getAuthor($id);
        $userstbl = \DB::table('users')->select('users.*')->get();
        if(is_null($article)) return '404 not found '. $id;

        if ($author->is_private == 1) {
            if ($author->user_id == \Auth::user()->id) {
              /**nguoi dung la chu nhan bai viet**/
                return view('blog.detail')  ->with([
                                'article'=>$article,
                                'author'=>$author,
                                'userstbl'=>$userstbl
                  ]);
            }else {
              /**nguoi dung da dang nhap nhung xem bai nguoi khac o dang private**/
              return "This blog is private.";
            }
        }else {
          return view('blog.detail')  ->with([
                          'article'=>$article,
                          'author'=>$author,
                          'userstbl'=>$userstbl
            ]);
        }
    }

    public static function getBlogdetail($id){
      $article = BlogPost::find($id);
      $author = BlogPost::getAuthor($id);
      $userstbl = \DB::table('users')->select('users.*')->get();
      if(is_null($article)) return '404 not found '. $id;

      if ($author->is_private == 1) {
          if ($author->user_id == \Auth::user()->id) {
            /**nguoi dung la chu nhan bai viet**/
              BlogPost::changeModeBlog($id);
              return view('blog.user.detail')  ->with([
                              'article'=>$article,
                              'author'=>$author,
                              'userstbl'=>$userstbl
                ]);
          }else {
            /**nguoi dung da dang nhap nhung xem bai nguoi khac o dang private**/
            return "This blog is private.";
          }

      }else {
        return view('blog.user.detail')  ->with([
                        'article'=>$article,
                        'author'=>$author,
                        'userstbl'=>$userstbl
          ]);
      }
    }

    public function postChangeMode($id){
      return BlogPost::changeModeBlog($id);
    }
}
