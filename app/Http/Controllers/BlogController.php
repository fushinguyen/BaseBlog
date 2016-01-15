<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{

  public function getIndex(){
    return view('blog.index');
  }

  public function postIndex(){
    return \DB::table('blog_posts')
            ->offset( \Input::get('offset') )
            ->limit( \Input::get('limit') )
            ->get();
  }
}
