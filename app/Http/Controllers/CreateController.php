<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{

  public function getIndex()
  {
    return view('post.create');
  }

}
