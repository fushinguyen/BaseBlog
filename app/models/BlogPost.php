<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
      'user_id',
      'title',
      'content',
      'image_url',
      'is_private'
    ];

    public static function getBlogsPublic(){
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
        return $blogsOrderby;
    }

    public static function createBlog(){
      $title =  \Input::get('title');
      $content = \Input::get('content');
      $img_src = \Input::get('img_src');
      $img_src = (isset($img_src)) ? $img_src : "";
      \DB::table('blog_posts')
          ->insert([
              'user_id'=>\Auth::user()->id,
              'title'=>$title,
              'content'=>$content,
              'image_url'=>$img_src,
              'is_private'=>'0'
          ]);
    }

    public static function changeModeBlog($id){
        return \DB::table('blog_posts')->where('id',$id)
                                      ->update(['is_private'=>\Input::get('mode',0)]);
    }

    public static function showBlogsUser($numberOfBlogs, $id){
      $updated = strtotime("0000-00-00 00:00:00");
      if(BlogPost::where('updated_at',$updated)->get()){
          $article = BlogPost::orderBy('blog_posts.created_at','desc')
                          ->leftJoin('users','users.id','=','blog_posts.user_id')
                          ->select('blog_posts.*','users.username')
                          ->where('user_id',$id)
                          ->simplePaginate($numberOfBlogs);
      }else{
          $article = BlogPost::orderBy('blog_posts.updated_at','desc')
                          ->leftJoin('users','users.id','=','blog_posts.user_id')
                          ->select('blog_posts.*','users.username')
                          ->where('user_id',$id)
                          ->simplePaginate($numberOfBlogs);
      }
      return $article;
    }

    public static function getAuthor($idOfBlog){
      return BlogPost::leftJoin('users','users.id','=','blog_posts.user_id')
                          ->select('blog_posts.*','users.username as username')
                          ->where('blog_posts.id',$idOfBlog)
                          ->first();
    }
}
