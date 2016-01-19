<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
  public function getLogin () {
      if(Auth::check()) return redirect ('/');
      return view('auth.login');
  }
  public function postLogin () {
      $usrname = \Input::get('username');
      $pwd = md5(\Input::get('password'));

      if(Auth::check()) return redirect ('/');

      $user = \DB::table('users')->where('username', \Input::get('username'))
              ->first();

      if ($pwd == $user->password) {
        \Auth::loginUsingId($user->id);
        return redirect ('/');
      }else {
        return redirect ('/login');
      }
  }
  public function getLogout () {
      Auth::logout();
      return redirect ('/login');
  }

  public function getRegister () {
      // \DB::table('users')->insert([
      //   'username'=>'abcde',
      //   'email'=>'adbe@ab.com',
      //   'password'=>md5('123456')
      // ]);
      return "Object is inserted";
  }

}
