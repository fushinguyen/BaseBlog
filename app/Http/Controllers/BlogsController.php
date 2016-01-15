<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        // $blog = Blog::all();
        $blogs = \DB::table('blog_posts')->simplePaginate(1);
        return view('home')->with('blogs', $blogs);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
